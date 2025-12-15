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
							{{-- <div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="#">Log out</a>
							</div> --}}
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Edit Security Questions Answers</h1>
					</div>

                    @if(session('success'))
                        <div class="alert alert-success"  style="background-color: green; padding: 12px; color: white; border-radius: 8px;">{{ session('success') }}</div>
                    @endif

                    @if($errors->has('error'))
                        <div class="alert alert-danger"  style="background-color: red; padding: 12px; color: white; border-radius: 8px;">{{ $errors->first('error') }}</div>
                    @endif

                <form method="POST" action="{{ route('backend.editsecurityquestions') }}">
                @csrf
                <input type="hidden" name="user_id" id="user_id" value="{{ $user_id}}">
    <div class="row">
        <div class="col-12 col-lg-12">
            <!-- Name -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Question 1 - What is your pet name?</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" name="answer1" placeholder="Enter Answer" value="{{ old('answer1', $mappedAnswers['answer1'] ?? '') }}">
                    @error('answer1')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

                <div class="col-12 col-lg-12">
            <!-- Name -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Question 1 - What is your childhood friend name?</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" name="answer2" placeholder="Enter Answer" value="{{ old('answer1', $mappedAnswers['answer2'] ?? '') }}">
                    @error('answer2')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

                <div class="col-12 col-lg-12">
            <!-- Name -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Question 1 - What is favorite hero name?</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" name="answer3" placeholder="Enter Answer" value="{{ old('answer1', $mappedAnswers['answer3'] ?? '') }}">
                    @error('answer3')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

                <div class="col-12 col-lg-12">
            <!-- Name -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Question 1 - What is your spouse name?</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" name="answer4" placeholder="Enter Answer" value="{{ old('answer1', $mappedAnswers['answer4'] ?? '') }}">
                    @error('answer4')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-12">


            <!-- Submit -->
            <div class="card">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">Save Security Question Answers</button>
                </div>
            </div>

        </div>




    </div>
</form>

				</div>
			</main>


		</div>


        @endsection
