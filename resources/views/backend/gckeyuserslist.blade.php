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

					<h1 class="h3 mb-3"><strong>All Candidates</strong> List</h1>

					<div class="row">
						<div class="col-12 col-lg-12 col-xxl-12 d-flex">
							<div class="card flex-fill">
								<div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="card-title mb-0">All Candidates</h5>
                                    <a href="{{ url('/backend.addnewcandidate') }}" class="btn btn-primary">Add New Candidate</a>
                                </div>
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>Name</th>
											<th class="d-none d-xl-table-cell">Email</th>
											<th class="d-none d-xl-table-cell">Username</th>
											<th>Password</th>
											<th class="d-none d-md-table-cell">Actions</th>
										</tr>
									</thead>
									<tbody>

                                        @foreach ($user_list as $list)

	<tr>
											<td>{{ $list->name }}</td>
											<td class="d-none d-xl-table-cell">{{ $list->email }}</td>
											<td class="d-none d-xl-table-cell">{{ $list->username }}</td>
											{{-- <td><span class="badge bg-success">Done</span></td> --}}
                                            <td class="d-none d-md-table-cell">{{ $list->visible_password }}</td>
                                            <td class="d-none d-md-table-cell">
    @if($list->security_questions_added == 0)
        <a href="{{ url('/backend-add-security-questions') }}/{{ $list->id }}">
            <button class="btn btn-primary mb-2">Add Security Questions</button>
        </a>
    @else
        <a href="{{ url('/backend-edit-security-question') }}/{{ $list->id }}">
            <button class="btn btn-warning mb-2">Edit Security Questions</button>
        </a>

        @if($list->gcc_key_created == 0)
            <a href="{{ url('/backend-create-cgkey') }}/{{ $list->id }}">
                <button class="btn btn-primary mb-2">Create GCC Key</button>
            </a>
        @else
            <a href="{{ url('/backend-edited-cgkey') }}/{{ $list->application_id }}">
                <button class="btn btn-secondary mb-2">Edit GCC Key</button>
            </a>
            <a href="{{ url('/backend-upload-docs') }}/{{ $list->application_id }}">
                <button class="btn btn-primary mb-2">See Uploaded Documents</button>
            </a>
        @endif
    @endif
</td>
										</tr>

                                        @endforeach



									</tbody>
								</table>
							</div>
						</div>

					</div>

				</div>
			</main>


		</div>
@endsection
