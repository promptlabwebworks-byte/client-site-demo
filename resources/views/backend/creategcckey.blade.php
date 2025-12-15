@extends('backend.layouts.main')
@section('main-container')

<div class="main">
    <nav class="navbar navbar-expand navbar-light navbar-bg">
        <a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>
        <div class="navbar-collapse collapse">
            <ul class="navbar-nav navbar-align">

                <li class="nav-item dropdown">
                    <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset('public/backend/img/avatars/avatar.jpg')}}" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">{{ Auth::user()->name }}</span>
                </a>

                </li>
            </ul>
        </div>
    </nav>

        <main class="content">
            <div class="container-fluid p-0">

                <div class="mb-3">
                    <h1 class="h3 d-inline align-middle">Add New GCKEY</h1>
                </div>

                @if(session('success'))
                    <div class="alert alert-success"  style="background-color: green; padding: 12px; color: white; border-radius: 8px;">{{ session('success') }}</div>
                @endif

                @if($errors->has('error'))
                    <div class="alert alert-danger"  style="background-color: red; padding: 12px; color: white; border-radius: 8px;">{{ $errors->first('error') }}</div>
                @endif

        <form method="POST" action="{{ route('backend.newgckey') }}">
        @csrf
      <input type="hidden" name="user_id" id="user_id" value="{{ $user_id}}">
    <div class="row">
        <div class="col-12 col-lg-6">

            <!-- Application Type -->
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Application Type</h5></div>
                <div class="card-body">
                    <select class="form-control" name="application_type">
                        <option value="">-- Select Application Type --</option>
                        <option value="Online Application" {{ old('application_type') == 'Online Application' ? 'selected' : '' }}>Online Application</option>
                        <option value="Offline Application" {{ old('application_type') == 'Offline Application' ? 'selected' : '' }}>Offline Application</option>
                    </select>
                    @error('application_type')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>

            <!-- Application Number -->
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Application Number</h5></div>
                <div class="card-body">
                    <input type="text" class="form-control" name="application_number" placeholder="Enter Application Number" value="{{ old('application_number') }}">
                    @error('application_number')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>

            <!-- Final Decision Date -->
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Final Decision Date</h5></div>
                <div class="card-body">
                    <input type="date" class="form-control" name="final_decision_date" placeholder="Select Final Decision Date" value="{{ old('final_decision_date') }}">
                    @error('final_decision_date')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>

            <!-- Biometrics Number (changed to text, as biometrics number unlikely to be a date) -->
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Biometrics Number</h5></div>
                <div class="card-body">
                    <input type="text" class="form-control" name="biometrics_number" placeholder="Enter Biometrics Number" value="{{ old('biometrics_number') }}">
                    @error('biometrics_number')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>

            <!-- Client Identifier Id -->
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Client Identifier Id (UCI)</h5></div>
                <div class="card-body">
                    <input type="text" class="form-control" name="client_identifier_id" placeholder="Enter Client Identifier Id" value="{{ old('client_identifier_id') }}">
                    @error('client_identifier_id')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>

            <!-- Review Of Eligibility -->
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Review Of Eligibility</h5></div>
                <div class="card-body">
                    <input type="text" class="form-control" name="review_of_eligibility" placeholder="Enter Review Of Eligibility" value="{{ old('review_of_eligibility', 'We regret to inform you that you do not meet the eligibility requirements. Please see the final decision below.') }}">
                    @error('review_of_eligibility')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>

            <!-- Review Of Additional Documents -->
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Review Of Additional Documents</h5></div>
                <div class="card-body">
                    <input type="text" class="form-control" name="review_of_additional_documents" placeholder="Enter Review Of Additional Documents" value="{{ old('review_of_additional_documents', 'We do not need additional documents.') }}">
                    @error('review_of_additional_documents')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>

            <!-- Background Check Message -->
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Background Check Message</h5></div>
                <div class="card-body">
                    <input type="text" class="form-control" name="background_check_msg" placeholder="Enter Background Check Message" value="{{ old('background_check_msg', 'Your background check was completed.') }}">
                    @error('background_check_msg')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>

            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Biometrics Expiry Date</h5></div>
                <div class="card-body">
                    <input type="date" class="form-control" name="biometrics_expiry_date" placeholder="Select Biometrics Expiry Date" value="{{ old('biometrics_expiry_date') }}">
                    @error('biometrics_expiry_date')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>
          
                           <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Enter Review Or Final Message</h5></div>
                <div class="card-body">
                    <input type="text" class="form-control" name="revieworfinal" value="{{ old('revieworfinal', 'Final decision') }}">
                    @error('revieworfinal')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>
          

        </div>

        <div class="col-12 col-lg-6">

            <!-- Application Applicant Name -->
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Application Applicant Name</h5></div>
                <div class="card-body">
                    <input type="text" class="form-control" name="applicant_name" placeholder="Enter Applicant Name" value="{{ old('applicant_name') }}">
                    @error('applicant_name')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>

            <!-- Submission Date -->
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Submission Date</h5></div>
                <div class="card-body">
                    <input type="date" class="form-control" name="submission_date" placeholder="Select Submission Date" value="{{ old('submission_date') }}">
                    @error('submission_date')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>

            <!-- Final Decision Message -->
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Final Decision Message</h5></div>
                <div class="card-body">
                    <input type="text" class="form-control" name="final_decision_message" placeholder="Enter Final Decision Message" value="{{ old('final_decision_message', 'We regret to inform you that your application was refused. Check your messages below for details.') }}">
                    @error('final_decision_message')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>

            <!-- Date Of Biometrics Enrolment -->
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Date Of Biometrics Enrolment</h5></div>
                <div class="card-body">
                    <input type="date" class="form-control" name="date_of_biometrics_enrolment" placeholder="Select Date Of Biometrics" value="{{ old('date_of_biometrics_enrolment') }}">
                    @error('date_of_biometrics_enrolment')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>

            <!-- Review Of Medical Results -->
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Review Of Medical Results</h5></div>
                <div class="card-body">
                    <input type="text" class="form-control" name="review_of_medical_results" placeholder="Enter Review Of Medical Results" value="{{ old('review_of_medical_results', 'You do not need a medical exam. We will send you a message if this changes.') }}">
                    @error('review_of_medical_results')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>

            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Medical Enrolment Date</h5></div>
                <div class="card-body">
                    <input type="date" class="form-control" name="medical_enrolment_date" placeholder="Select Medical Enrolment Date" value="{{ old('medical_enrolment_date') }}">
                    @error('medical_enrolment_date')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>

            <!-- Interview Message -->
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Interview Message</h5></div>
                <div class="card-body">
                    <input type="text" class="form-control" name="interview_message" placeholder="Enter Interview Message" value="{{ old('interview_message', 'You do not need an interview. We will send you a message if this changes.') }}">
                    @error('interview_message')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>

            <!-- Biometrics Message -->
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Biometrics Message</h5></div>
                <div class="card-body">
                    <input type="text" class="form-control" name="biometrics_message" placeholder="Enter Biometrics Message" value="{{ old('biometrics_message', 'We do not need your fingerprints. We will send you a message if this changes.') }}">
                    @error('biometrics_message')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>

            <!-- Background Check Date -->
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Background Check Date</h5></div>
                <div class="card-body">
                    <input type="date" class="form-control" name="background_check_date" placeholder="Select Background Check Date" value="{{ old('background_check_date') }}">
                    @error('background_check_date')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>

            <!-- Submit Button -->
            <div class="card">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">Create CGKEY</button>
                </div>
            </div>

        </div>
    </div>
</form>

				</div>
			</main>


		</div>


        @endsection
