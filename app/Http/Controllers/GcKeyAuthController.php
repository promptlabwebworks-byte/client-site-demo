<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;

class GcKeyAuthController extends Controller
{

    public function login(Request $request)
    {
        $request->validate(['username' => 'required', 'password' => 'required']);

        $user = User::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Session::put('auth_temp_user', $user->id);
            return redirect()->route('verify.question');
        }

        return back()->withErrors(['loginerror' => 'Invalid GCKey Username / Password']);
    }

    public function showSecurityQuestionForm()
    {
        $userId = Session::get('auth_temp_user');

        $question = DB::table('security_questions')->where('user_id', $userId)->inRandomOrder()->first();

        if (!$question) {
            return back()->withErrors(['answer' => 'No security question found.']);
        }

        // Save question ID to session for validation
        Session::put('security_question_id', $question->id);

        $user = User::findOrFail($userId);
        Auth::login($user);

        return view('GCKEYS.verify-question', [
            'question' => $question->question
        ]);
    }

    public function verifySecurityAnswer(Request $request)
    {
        $request->validate(['answer' => 'required']);

        $userId = Session::get('auth_temp_user');
        $questionId = Session::get('security_question_id');

        $securityQuestion = DB::table('security_questions')->where('id', $questionId)->where('user_id', $userId)->first();

        if (!$securityQuestion) {
            return back()->withErrors(['answer' => 'Security question not found.']);
        }

        // Compare input and stored answer (case-insensitive)
        if (strtolower(trim($request->answer)) === strtolower(trim($securityQuestion->answer))) {
            Session::forget(['auth_temp_user', 'security_question_id']);
            return redirect()->route('terms');
        }

        return back()->withErrors(['answer' => 'Incorrect answer']);
    }

    public function mainPage()
    {
        $data['data'] = DB::table('application')->where('user_id', Auth::user()->id)->get();
        return view('GCKEYS.main')->with($data);
    }

    public function termsconditions()
    {
        return view('GCKEYS.Terms_and_Conditions'); // Your main page view
    }

    public function agreetermsconditions()
    {
        return view('GCKEYS.GCKey_Welcome'); // Your main page view
    }

    // public function disagreetermsconditions()
    // {
    //      Http::post(route('logout.gcc'));
    //     //  return redirect()->route('logout.gcc');
    // }

    public function applicationprofile($id)
    {
        $data['data'] = DB::table(table: 'application')->where('id', $id)->first();
        $documents['documents'] = json_decode($data['data']->documents, true); // true = associative array
        return view('GCKEYS.Application_profile')->with($data)->with($documents);
    }


}
