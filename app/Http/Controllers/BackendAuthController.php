<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class BackendAuthController extends Controller
{
    public function login(Request $request)
    {
      // $ip = trim(shell_exec("ifconfig | grep 'inet ' | grep -v 127.0.0.1 | awk '{print $2}' | head -n 1"));

	  // dd($ip);

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['loginerror' => 'Invalid credentials']);
        }

        if ($user->usertype === 0)
        {
            return back()->withErrors(['loginerror' => 'You are not allow to login this portal please contact admin.']);
        }
        else if ($user->usertype === 1)
        {
            $clientIp = request()->ip();

            if ($user->ip_address !== $clientIp) {
                return back()->withErrors(['loginerror' => 'Access denied from this IP address beacuse you are not owener of this site.']);
            }
        }

        Auth::login($user);

        if ($user->usertype === 1) {
            return redirect()->route('backend.gcckeyslist');
        }
        else if ($user->usertype === 2)
        {
           return redirect()->route('backend.gcckeysuserlist');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        Session::flush();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login-backend');
    }

    public function addcandidate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
              return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            DB::table('users')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'visible_password' => $request->password,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['db_error' => $e->getMessage()]);
        }

        return redirect()->back()->with('success', 'Candidate created successfully!');
    }

    public function gcckeyuserlist()
    {
        $user_list['user_list'] = DB::table('users')->where('usertype',0)->get();
        return view('backend.gckeyuserslist')->with($user_list);
    }

    public function gckeysapplicationlist()
    {
        // Step 1: Get filtered users
        $users = DB::table('users')->where('usertype', 0)->where('security_questions_added', 1)->where('gcc_key_created', 1)
            ->where('documents_upload', 1)->get();


        // Step 2: Extract application IDs
        $applicationIds = $users->pluck('application_id')->filter()->unique()->toArray();

        // Step 3: Get matching applications
        $applications = DB::table('application')->whereIn('id', $applicationIds)->get();

        return view('backend.gckeysapplicationlist', compact('users','applications'));
    }

    public function addsecurityquestions($userid)
    {
        $user_id['user_id'] = $userid;
        return view('backend.addsecurityquestions')->with($user_id);
    }

    public function postsecurityquestions(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'answer1' => 'required|string|max:255',
            'answer2' => 'required|string|max:255',
            'answer3' => 'required|string|max:255',
            'answer4' => 'required|string|max:255',
            'user_id' => 'required|integer|exists:users,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $questions = [
            "What is your pet name?" => $request->answer1,
            "What is your childhood friend name?" => $request->answer2,
            "What is favorite hero name?" => $request->answer3,
            "What is your spouse name?" => $request->answer4,
        ];

        try {
            foreach ($questions as $question => $answer) {
                DB::table('security_questions')->insert([
                    'question' => $question,
                    'answer' => $answer,
                    'user_id' => $request->user_id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            // ✅ Fix: You had missing comma in this block, and wrong logic for update
            DB::table('users')->where('id', $request->user_id)->update([
                'security_questions_added' => 1,
                'updated_at' => now(),
            ]);

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['db_error' => $e->getMessage()]);
        }

        return redirect()->back()->with('success', 'Security Questions Added Successfully!');
    }

    public function editsecurityquestion($userid)
    {
        $questions = DB::table('security_questions')->where('user_id', $userid)->get();

        // Map question text to answer for easy access
        $mappedAnswers = [];
        foreach ($questions as $q) {
            switch ($q->question) {
                case 'What is your pet name?':
                    $mappedAnswers['answer1'] = $q->answer;
                    break;
                case 'What is your childhood friend name?':
                    $mappedAnswers['answer2'] = $q->answer;
                    break;
                case 'What is favorite hero name?':
                    $mappedAnswers['answer3'] = $q->answer;
                    break;
                case 'What is your spouse name?':
                    $mappedAnswers['answer4'] = $q->answer;
                    break;
            }
        }

        $user_id = $userid;
        return view('backend.editsecurityquestionssecurityquestions', compact('user_id', 'mappedAnswers'));
    }

    public function editsecurityquestions(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'answer1' => 'required|string|max:255',
            'answer2' => 'required|string|max:255',
            'answer3' => 'required|string|max:255',
            'answer4' => 'required|string|max:255',
            'user_id' => 'required|integer|exists:users,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $questions = [
            "What is your pet name?" => $request->answer1,
            "What is your childhood friend name?" => $request->answer2,
            "What is favorite hero name?" => $request->answer3,
            "What is your spouse name?" => $request->answer4,
        ];

        try {
            foreach ($questions as $question => $answer) {
                $existing = DB::table('security_questions')
                    ->where('user_id', $request->user_id)
                    ->where('question', $question)
                    ->first();

                if ($existing) {
                    // ✅ Update if exists
                    DB::table('security_questions')
                        ->where('id', $existing->id)
                        ->update([
                            'answer' => $answer,
                            'updated_at' => now(),
                        ]);
                } else {
                    // ✅ Optional: Insert if not exists
                    DB::table('security_questions')->insert([
                        'question' => $question,
                        'answer' => $answer,
                        'user_id' => $request->user_id,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }

            // Update user profile flag
            DB::table('users')->where('id', $request->user_id)->update([
                'security_questions_added' => 1,
                'updated_at' => now(),
            ]);

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['db_error' => $e->getMessage()]);
        }

        return redirect()->back()->with('success', 'Security Questions Updated Successfully!');
    }

    public function creategckey($userid)
    {
        $user_id['user_id'] = $userid;
        return view('backend.creategcckey')->with($user_id);
    }

    public function newcgkey(Request $request)
    {
        $validated = $request->validate([
            'application_type' => 'required|string|max:255',
            'application_number' => 'required|string|max:255',
            'final_decision_date' => 'nullable|date',
            'biometrics_number' => 'nullable|string|max:255',
            'client_identifier_id' => 'required|string|max:255',
            'review_of_eligibility' => 'required|string|max:1000',
            'review_of_additional_documents' => 'required|string|max:1000',
            'background_check_msg' => 'required|string|max:1000',
            'applicant_name' => 'required|string|max:255',
            'submission_date' => 'nullable|date',
            'final_decision_message' => 'required|string|max:1000',
            'date_of_biometrics_enrolment' => 'nullable|date',
            'review_of_medical_results' => 'required|string|max:1000',
            'interview_message' => 'required|string|max:1000',
            'biometrics_message' => 'required|string|max:1000',
            'background_check_date' => 'nullable|date',
            'user_id' => 'required|exists:users,id',
            'medical_enrolment_date' => 'nullable|date',
            'biometrics_expiry_date' => 'nullable|date',
            'revieworfinal' => 'required|string',
        ]);

        // Check if user already has an application
        $existing = DB::table('application')->where('user_id', $validated['user_id'])->first();
        if ($existing) {
            return redirect()->back()->withErrors(['db_error' => 'An application already exists for this user.'])->withInput();
        }

        // Format Dates
        $finalDecisionDate = Carbon::parse($validated['final_decision_date'])->format('F j, Y');
        $submissionDate = Carbon::parse($validated['submission_date'])->format('F j, Y');
        $bioEnrolRaw = Carbon::parse($validated['date_of_biometrics_enrolment']);
        $dateOfBiometricsEnrolment = $bioEnrolRaw->format('F j, Y');
        $backgroundCheckDate = Carbon::parse($validated['background_check_date'])->format('F j, Y');
        $medicalenrolmentdate = Carbon::parse($validated['medical_enrolment_date'])->format('F j, Y');
      	$biometricsExpiryDate = Carbon::parse($validated['biometrics_expiry_date'])->format('F j, Y');

      // If biometrics_number is null, also set the related dates to null
      if (is_null($validated['biometrics_number'])) {
          $dateOfBiometricsEnrolment = null;
          $biometricsExpiryDate = null;
      }  
      
      
      $medicalenrolmentdate = !empty($validated['medical_enrolment_date'])
    ? Carbon::parse($validated['medical_enrolment_date'])->format('F j, Y')
    : null;

$backgroundCheckDate = !empty($validated['background_check_date'])
    ? Carbon::parse($validated['background_check_date'])->format('F j, Y')
    : null;

$submissionDate = !empty($validated['submission_date'])
    ? Carbon::parse($validated['submission_date'])->format('F j, Y')
    : null;

$finalDecisionDate = !empty($validated['final_decision_date'])
    ? Carbon::parse($validated['final_decision_date'])->format('F j, Y')
    : null;
      

        // Insert and get the ID
        $applicationId = DB::table('application')->insertGetId([
            'application_type' => $validated['application_type'],
            'application_number' => $validated['application_number'],
            'final_decision_date' => $finalDecisionDate,
            'biometrics_number' => $validated['biometrics_number'],
            'client_identifier_id' => $validated['client_identifier_id'],
            'review_of_eligibility_msg' => $validated['review_of_eligibility'],
            'review_of_additional_documents_msg' => $validated['review_of_additional_documents'],
            'background_check_msg' => $validated['background_check_msg'],
            'application_name' => $validated['applicant_name'],
            'submission_date' => $submissionDate,
            'final_decision_msg' => $validated['final_decision_message'],
            'date_of_biometrics_enrolment' => $dateOfBiometricsEnrolment,
            'review_of_medical_results_msg' => $validated['review_of_medical_results'],
            'interview_msg' => $validated['interview_message'],
            'biometrics_msg' => $validated['biometrics_message'],
            'background_check_date' => $backgroundCheckDate,
            'biometrics_expiry_date' => $biometricsExpiryDate,
            'user_id' => $validated['user_id'],
            'current_status' => "Pending",
            'created_at' => now(),
            'updated_at' => now(),
            'documents' => json_encode([]),
            'medical_enrolment_date' => $medicalenrolmentdate,
            'revieworfinal' => $validated['revieworfinal'],
        ]);

        // ✅ Update user table: set application_id and active_status = 2
        DB::table('users')->where('id', $validated['user_id'])->update([
            'application_id' => $applicationId,
            'gcc_key_created' => 1,
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'GCC Created Successfully!');
    }


    public function editcgkey(Request $request)
    {
        $validated = $request->validate([
            'application_type' => 'required|string|max:255',
            'application_number' => 'required|string|max:255',
            'final_decision_date' => 'nullable|date',
            'biometrics_number' => 'nullable|string|max:255',
            'client_identifier_id' => 'required|string|max:255',
            'review_of_eligibility' => 'required|string|max:1000',
            'review_of_additional_documents' => 'required|string|max:1000',
            'background_check_msg' => 'required|string|max:1000',
            'applicant_name' => 'required|string|max:255',
            'submission_date' => 'nullable|date',
            'final_decision_message' => 'required|string|max:1000',
            'date_of_biometrics_enrolment' => 'nullable|date',
            'review_of_medical_results' => 'required|string|max:1000',
            'interview_message' => 'required|string|max:1000',
            'biometrics_message' => 'required|string|max:1000',
            'background_check_date' => 'nullable|date',
            'user_id' => 'required|exists:users,id',
            'medical_enrolment_date' => 'nullable|date',
            'biometrics_expiry_date' => 'nullable|date',
            'revieworfinal' => 'required|string',
        ]);

        // Fetch existing application by user_id
        $application = DB::table('application')->where('user_id', $validated['user_id'])->first();

        if (!$application) {
            return redirect()->back()->withErrors(['not_found' => 'Application not found for this user.'])->withInput();
        }

        // Format Dates
        $finalDecisionDate = Carbon::parse($validated['final_decision_date'])->format('F j, Y');
        $submissionDate = Carbon::parse($validated['submission_date'])->format('F j, Y');
        $bioEnrolRaw = Carbon::parse($validated['date_of_biometrics_enrolment']);
        $dateOfBiometricsEnrolment = $bioEnrolRaw->format('F j, Y');
        $biometricsExpiryDate = Carbon::parse($validated['biometrics_expiry_date'])->format('F j, Y');
        $backgroundCheckDate = Carbon::parse($validated['background_check_date'])->format('F j, Y');
        $medicalenrolmentdate = Carbon::parse($validated['medical_enrolment_date'])->format('F j, Y');

            // If biometrics_number is null, also set the related dates to null
      if (is_null($validated['biometrics_number'])) {
          $dateOfBiometricsEnrolment = null;
          $biometricsExpiryDate = null;
      }  
      
            $medicalenrolmentdate = !empty($validated['medical_enrolment_date'])
    ? Carbon::parse($validated['medical_enrolment_date'])->format('F j, Y')
    : null;

$backgroundCheckDate = !empty($validated['background_check_date'])
    ? Carbon::parse($validated['background_check_date'])->format('F j, Y')
    : null;

$submissionDate = !empty($validated['submission_date'])
    ? Carbon::parse($validated['submission_date'])->format('F j, Y')
    : null;

$finalDecisionDate = !empty($validated['final_decision_date'])
    ? Carbon::parse($validated['final_decision_date'])->format('F j, Y')
    : null;
      
        // Update existing application
        DB::table('application')->where('id', $application->id)->update([
            'application_type' => $validated['application_type'],
            'application_number' => $validated['application_number'],
            'final_decision_date' => $finalDecisionDate,
            'biometrics_number' => $validated['biometrics_number'],
            'client_identifier_id' => $validated['client_identifier_id'],
            'review_of_eligibility_msg' => $validated['review_of_eligibility'],
            'review_of_additional_documents_msg' => $validated['review_of_additional_documents'],
            'background_check_msg' => $validated['background_check_msg'],
            'application_name' => $validated['applicant_name'],
            'submission_date' => $submissionDate,
            'final_decision_msg' => $validated['final_decision_message'],
            'date_of_biometrics_enrolment' => $dateOfBiometricsEnrolment,
            'review_of_medical_results_msg' => $validated['review_of_medical_results'],
            'interview_msg' => $validated['interview_message'],
            'biometrics_msg' => $validated['biometrics_message'],
            'background_check_date' => $backgroundCheckDate,
            'biometrics_expiry_date' => $biometricsExpiryDate,
            'updated_at' => now(),
            'medical_enrolment_date' => $medicalenrolmentdate,
            'revieworfinal' => $validated['revieworfinal'],
        ]);

        return redirect()->back()->with('success', 'GCC Updated Successfully!');
    }

    public function editedgckey($applicationid)
    {
        $application = DB::table('application')->where('id', $applicationid)->first();
        return view('backend.editgcckey', compact('application'));
    }

    public function uploaddocs($applicationid)
    {
        $data = DB::table(table: 'application')->where('id', $applicationid)->first();
        $document = json_decode($data->documents, true); // true = associative array
         return view('backend.uploaddocuments', compact('document', 'data'));
    }

    public function postdocument(Request $request)    {
    // Step 1: Validate request inputs
    $request->validate([
        'applicationid' => 'required|exists:application,id',
        'document' => 'required|file|mimes:pdf|max:5048',
        'datesend' => 'required|date',
        'dateread' => 'nullable|date',
    ]);

    // Step 2: Find application
    $application = DB::table('application')->where('id', $request->applicationid)->first();

    if (!$application) {
        return redirect()->back()->withErrors(['application' => 'Application not found']);
    }

    // Step 3: Prepare file names
    $applicationNumber = $application->application_number ?? 'app-' . $request->applicationid;
    $originalName = $request->file('document')->getClientOriginalName();
    $extension = $request->file('document')->getClientOriginalExtension();
    $baseName = pathinfo($originalName, PATHINFO_FILENAME);

    $fileName1 = ucwords(str_replace('-', ' ', $baseName));
    $fileName = $baseName . '-' . $applicationNumber . '-' . time() . '.' . $extension;

    // Step 4: Ensure the folder exists and move the file to public/document
    $destinationPath = public_path('document');

    if (!file_exists($destinationPath)) {
        mkdir($destinationPath, 0755, true); // Create folder if it doesn't exist
    }

    $request->file('document')->move($destinationPath, $fileName);

    // Step 5: Set date read
    $dateRead = $request->has('no_date_read') ? 'New Message' : $request->dateread;

    // Step 6: Append to existing documents
    $existingDocs = [];
    if (!empty($application->documents)) {
        $existingDocs = json_decode($application->documents, true);
    }

    $maxId = collect($existingDocs)->pluck('id')->max() ?? 0;
    $newId = $maxId + 1;

    $newDoc = [
        'id' => $newId,
        'file' => $fileName,
        'send_date' => $request->datesend,
        'date_read' => $dateRead,
        'filename' => $fileName1,
        'position' => '',
    ];

    $existingDocs[] = $newDoc;

    // Step 7: Update application record
    DB::table('application')->where('id', $request->applicationid)->update([
        'documents' => json_encode($existingDocs),
        'updated_at' => now(),
    ]);

    // Step 8: Mark user as uploaded
    DB::table('users')
        ->where('application_id', $request->applicationid)
        ->whereNull('documents_upload')
        ->update([
            'documents_upload' => 1,
            'updated_at' => now(),
        ]);

    return redirect()->back()->with('success', 'Document uploaded and saved successfully.');
    }
  
  public function updateposition(Request $request)
  {

    $request->validate([
        'application_id' => 'required|integer',
        'document_id' => 'required|integer',
        'position' => 'nullable|integer|min:1',
    ]);

    $application = DB::table('application')->where('id', $request->application_id)->first();

    if (!$application) {
        return back()->withErrors(['error' => 'Application not found.']);
    }

    $documents = json_decode($application->documents, true);

    // Check if the requested position is already used by another document
    foreach ($documents as $doc) {
        if (
            $doc['id'] != $request->document_id && // exclude self
            isset($doc['position']) &&
            $doc['position'] == $request->position
        ) {
            return back()->withErrors([
                'error' => "Position {$request->position} is already used by another document."
            ]);
        }
    }

    // Update the position
    foreach ($documents as &$doc) {
        if ($doc['id'] == $request->document_id) {
            $doc['position'] = $request->position;
            break;
        }
    }

    // Save back to DB
    DB::table('application')
        ->where('id', $request->application_id)
        ->update(['documents' => json_encode($documents)]);

    return back()->with('success', 'Document position updated successfully.');
  }
  

public function deleteDocument($applicationid, $delid)
{
    // Fetch the application
    $application = DB::table('application')->where('id', $applicationid)->first();

    if (!$application) {
        return redirect()->back()->withErrors(['application' => 'Application not found']);
    }

    $documents = json_decode($application->documents, true);

    if (empty($documents)) {
        return redirect()->back()->withErrors(['documents' => 'No documents found']);
    }

    // Find document to delete
    $docToDelete = null;
    foreach ($documents as $key => $doc) {
        if ((string)$doc['id'] === (string)$delid) {
            $docToDelete = $doc;
            unset($documents[$key]);
            break;
        }
    }

    if (!$docToDelete) {
        return redirect()->back()->withErrors(['document' => 'Document not found']);
    }

    // Delete file from public/document folder
    $filePath = public_path('document/' . $docToDelete['file']);
    if (File::exists($filePath)) {
        File::delete($filePath);
    }

    // Save updated documents (reindex array)
    $documents = array_values($documents);

    DB::table('application')->where('id', $applicationid)->update([
        'documents' => json_encode($documents),
        'updated_at' => now(),
    ]);

    // If documents array empty, update users table
    if (empty($documents)) {
        DB::table('users')->where('application_id', $applicationid)->update([
            'documents_upload' => null,
            'updated_at' => now(),
        ]);
    }

    return redirect()->back()->with('success', 'Document deleted successfully.');
}

    public function applicationupdatestatus(Request $request)
    {

        // Validate inputs
        $request->validate([
            'application_id' => 'required|exists:application,id',
            'status' => 'required|string|max:255',
        ]);

        // Update application_status
        DB::table('application')->where('id', $request->application_id)->update([
            'current_status' => $request->status,
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Application status updated successfully.');
    }

    public function deletegckey($applicationid, $userid)
    {
           // 1. Fetch the applicationid
    $application = DB::table('application')->where('id', $applicationid)->first();

    if (!$application) {
        return redirect()->back()->withErrors(['application' => 'Application not found.']);
    }

    // 2. Decode documents array (if any)
    $documents = json_decode($application->documents, true);

    if (!empty($documents) && is_array($documents)) {
        foreach ($documents as $doc) {
            if (isset($doc['file'])) {
                $filePath = 'public/documents/' . $doc['file'];

                if (Storage::exists($filePath)) {
                    Storage::delete($filePath);
                }
            }
        }
    }

    // 3. Delete the application row
    DB::table('application')->where('id', $applicationid)->delete();
    DB::table('security_questions')->where('user_id', $userid)->delete();
    DB::table('users')->where('id', $userid)->delete();


    return redirect()->back()->with('success', 'GCKEY deleted successfully.');
    }

}
