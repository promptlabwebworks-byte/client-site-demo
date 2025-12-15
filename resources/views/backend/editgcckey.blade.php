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
                        <img src="{{ asset('public/backend/img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded me-1" alt="Avatar" />
                        <span class="text-dark">{{ Auth::user()->name }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="content">
        <div class="container-fluid p-0">

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Edit GCKEY</h1>
            </div>

            @if(session('success'))
                <div class="alert alert-success" style="background-color: green; padding: 12px; color: white; border-radius: 8px;">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->has('error'))
                <div class="alert alert-danger" style="background-color: red; padding: 12px; color: white; border-radius: 8px;">
                    {{ $errors->first('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('backend.editgckey') }}">
                @csrf

                <input type="hidden" name="user_id" value="{{ $application->user_id }}">
                <input type="hidden" name="application_id" value="{{ $application->id }}">

                <div class="row">
                    <div class="col-12 col-lg-6">

                        <!-- Application Type -->
                        <div class="card">
                            <div class="card-header"><h5 class="card-title mb-0">Application Type</h5></div>
                            <div class="card-body">
                                <select class="form-control" name="application_type">
                                    <option value="">-- Select Application Type --</option>
                                    <option value="Online Application" {{ old('application_type', $application->application_type) == 'Online Application' ? 'selected' : '' }}>Online Application</option>
                                    <option value="Offline Application" {{ old('application_type', $application->application_type) == 'Offline Application' ? 'selected' : '' }}>Offline Application</option>
                                </select>
                                @error('application_type')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <!-- Application Number -->
                        <div class="card">
                            <div class="card-header"><h5 class="card-title mb-0">Application Number</h5></div>
                            <div class="card-body">
                                <input type="text" class="form-control" name="application_number" value="{{ old('application_number', $application->application_number) }}">
                                @error('application_number')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <!-- Final Decision Date -->
                        <div class="card">
                            <div class="card-header"><h5 class="card-title mb-0">Final Decision Date</h5></div>
                            <div class="card-body">
                                <input type="date" class="form-control" name="final_decision_date" value="{{ old('final_decision_date', $application->final_decision_date ? \Carbon\Carbon::parse($application->final_decision_date)->format('Y-m-d') : '') }}">
                                @error('final_decision_date')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <!-- Biometrics Number -->
                        <div class="card">
                            <div class="card-header"><h5 class="card-title mb-0">Biometrics Number</h5></div>
                            <div class="card-body">
                                <input type="text" class="form-control" name="biometrics_number" value="{{ old('biometrics_number', $application->biometrics_number) }}">
                                @error('biometrics_number')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <!-- Client Identifier Id -->
                        <div class="card">
                            <div class="card-header"><h5 class="card-title mb-0">Client Identifier Id (UCI)</h5></div>
                            <div class="card-body">
                                <input type="text" class="form-control" name="client_identifier_id" value="{{ old('client_identifier_id', $application->client_identifier_id) }}">
                                @error('client_identifier_id')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <!-- Review Of Eligibility -->
                        <div class="card">
                            <div class="card-header"><h5 class="card-title mb-0">Review Of Eligibility</h5></div>
                            <div class="card-body">
                                <input type="text" class="form-control" name="review_of_eligibility" value="{{ old('review_of_eligibility', $application->review_of_eligibility_msg) }}">
                                @error('review_of_eligibility')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <!-- Review Of Additional Documents -->
                        <div class="card">
                            <div class="card-header"><h5 class="card-title mb-0">Review Of Additional Documents</h5></div>
                            <div class="card-body">
                                <input type="text" class="form-control" name="review_of_additional_documents" value="{{ old('review_of_additional_documents', $application->review_of_additional_documents_msg) }}">
                                @error('review_of_additional_documents')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <!-- Background Check Message -->
                        <div class="card">
                            <div class="card-header"><h5 class="card-title mb-0">Background Check Message</h5></div>
                            <div class="card-body">
                                <input type="text" class="form-control" name="background_check_msg" value="{{ old('background_check_msg', $application->background_check_msg) }}">
                                @error('background_check_msg')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <!-- Biometrics Expiry Date -->
                        <div class="card">
                            <div class="card-header"><h5 class="card-title mb-0">Biometrics Expiry Date</h5></div>
                            <div class="card-body">
                                <input type="date" class="form-control" name="biometrics_expiry_date" value="{{ old('biometrics_expiry_date', $application->biometrics_expiry_date ? \Carbon\Carbon::parse($application->biometrics_expiry_date)->format('Y-m-d') : '') }}">
                                @error('biometrics_expiry_date')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <!-- Review Or Final -->
                        <div class="card">
                            <div class="card-header"><h5 class="card-title mb-0">Enter Review Or Final Message</h5></div>
                            <div class="card-body">
                                <input type="text" class="form-control" name="revieworfinal" value="{{ old('revieworfinal', $application->revieworfinal) }}">
                                @error('revieworfinal')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-lg-6">

                        <!-- Applicant Name -->
                        <div class="card">
                            <div class="card-header"><h5 class="card-title mb-0">Applicant Name</h5></div>
                            <div class="card-body">
                                <input type="text" class="form-control" name="applicant_name" value="{{ old('applicant_name', $application->application_name) }}">
                                @error('applicant_name')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <!-- Submission Date -->
                        <div class="card">
                            <div class="card-header"><h5 class="card-title mb-0">Submission Date</h5></div>
                            <div class="card-body">
                                <input type="date" class="form-control" name="submission_date" value="{{ old('submission_date', $application->submission_date ? \Carbon\Carbon::parse($application->submission_date)->format('Y-m-d') : '') }}">
                                @error('submission_date')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <!-- Final Decision Message -->
                        <div class="card">
                            <div class="card-header"><h5 class="card-title mb-0">Final Decision Message</h5></div>
                            <div class="card-body">
                                <input type="text" class="form-control" name="final_decision_message" value="{{ old('final_decision_message', $application->final_decision_msg) }}">
                                @error('final_decision_message')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <!-- Date Of Biometrics Enrolment -->
                        <div class="card">
                            <div class="card-header"><h5 class="card-title mb-0">Date Of Biometrics Enrolment</h5></div>
                            <div class="card-body">
                                <input type="date" class="form-control" name="date_of_biometrics_enrolment" value="{{ old('date_of_biometrics_enrolment', $application->date_of_biometrics_enrolment ? \Carbon\Carbon::parse($application->date_of_biometrics_enrolment)->format('Y-m-d') : '') }}">
                                @error('date_of_biometrics_enrolment')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <!-- Review Of Medical Results -->
                        <div class="card">
                            <div class="card-header"><h5 class="card-title mb-0">Review Of Medical Results</h5></div>
                            <div class="card-body">
                                <input type="text" class="form-control" name="review_of_medical_results" value="{{ old('review_of_medical_results', $application->review_of_medical_results_msg) }}">
                                @error('review_of_medical_results')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <!-- Medical Enrolment Date -->
                        <div class="card">
                            <div class="card-header"><h5 class="card-title mb-0">Medical Enrolment Date</h5></div>
                            <div class="card-body">
                                <input type="date" class="form-control" name="medical_enrolment_date" value="{{ old('medical_enrolment_date', $application->medical_enrolment_date ? \Carbon\Carbon::parse($application->medical_enrolment_date)->format('Y-m-d') : '') }}">
                                @error('medical_enrolment_date')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <!-- Interview Message -->
                        <div class="card">
                            <div class="card-header"><h5 class="card-title mb-0">Interview Message</h5></div>
                            <div class="card-body">
                                <input type="text" class="form-control" name="interview_message" value="{{ old('interview_message', $application->interview_msg) }}">
                                @error('interview_message')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <!-- Biometrics Message -->
                        <div class="card">
                            <div class="card-header"><h5 class="card-title mb-0">Biometrics Message</h5></div>
                            <div class="card-body">
                                <input type="text" class="form-control" name="biometrics_message" value="{{ old('biometrics_message', $application->biometrics_msg) }}">
                                @error('biometrics_message')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <!-- Background Check Date -->
                        <div class="card">
                            <div class="card-header"><h5 class="card-title mb-0">Background Check Date</h5></div>
                            <div class="card-body">
                                <input type="date" class="form-control" name="background_check_date" value="{{ old('background_check_date', $application->background_check_date ? \Carbon\Carbon::parse($application->background_check_date)->format('Y-m-d') : '') }}">
                                @error('background_check_date')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="card">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Update GCKey</button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>

        </div>
    </main>
</div>

@endsection