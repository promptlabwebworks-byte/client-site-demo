	@extends('backend.layouts.main')

    @section('main-container')

    <div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						{{-- <li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li> --}}
						{{-- <li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="{{ asset('backend/img/avatars/avatar-5.jpg')}}" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="{{ asset('backend/img/avatars/avatar-2.jpg')}}" class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="{{ asset('backend/img/avatars/avatar-4.jpg')}}" class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="{{ asset('backend/img/avatars/avatar-3.jpg')}}" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li> --}}
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="{{ asset('public/backend/img/avatars/avatar.jpg')}}" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">{{ Auth::user()->name }}</span>
              </a>
							{{-- <div class="dropdown-menu dropdown-menu-end"> --}}
								{{-- <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a> --}}
								{{-- <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a> --}}
								{{-- <div class="dropdown-divider"></div> --}}
								{{-- <a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a> --}}
								{{-- <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a> --}}
								{{-- <div class="dropdown-divider"></div> --}}
								{{-- <a class="dropdown-item" href="#">Log out</a>
							</div> --}}
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>All Applications</strong> List</h1>


                    @if(session('success'))
                        <div class="alert alert-success"  style="background-color: green; padding: 12px; color: white; border-radius: 8px;">{{ session('success') }}</div>
                    @endif

                    @if($errors->has('db_error'))
                        <div class="alert alert-danger"  style="background-color: red; padding: 12px; color: white; border-radius: 8px;">{{ $errors->first('db_error') }}</div>
                    @endif

					<div class="row">
						<div class="col-12 col-lg-12 col-xxl-12 d-flex">
							<div class="card flex-fill">
								<div class="card-header">

									<h5 class="card-title mb-0">All Applications</h5>
								</div>
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>Application Number</th>
											<th class="d-none d-xl-table-cell">Holder Name</th>
											<th class="d-none d-xl-table-cell">Application Status</th>
											<th>Actions</th>
                                            <th>Delete</th>
										</tr>
									</thead>
									<tbody>


                                          @foreach ($applications as $application)
										<tr>
											<td style="text-transform: uppercase;">{{$application->application_number}}</td>
											<td class="d-none d-xl-table-cell">{{$application->application_name}}</td>
											<td class="d-none d-xl-table-cell">
<form method="POST" action="{{ route('application.update.status') }}">
    @csrf
                        <select name="status" class="form-select" style="margin-bottom:8px;">
                            <option value="Pending" {{ $application->current_status == 'Pending' ? 'selected' : '' }}>Pending</option>
                            <option value="Approved" {{ $application->current_status == 'Approved' ? 'selected' : '' }}>Approved</option>
                            <option value="Refused" {{ $application->current_status == 'Refused' ? 'selected' : '' }}>Refused</option>
                             <option value="Rejected" {{ $application->current_status == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                             <option value="Revoked" {{ $application->current_status == 'Revoked' ? 'selected' : '' }}>Revoked</option>
                             <option value="Withdrawn" {{ $application->current_status == 'Withdrawn' ? 'selected' : '' }}>Withdrawn</option>
                             <option value="In progress" {{ $application->current_status == 'In progress' ? 'selected' : '' }}>In progress</option>
                             <option value="Abandoned" {{ $application->current_status == 'Abandoned' ? 'selected' : '' }}>Abandoned</option>
                             <option value="Cancelled" {{ $application->current_status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                        <input type="hidden" name="application_id" value="{{ $application->id }}">
 <button type="submit" class="btn btn-sm btn-success">Update</button>
                    </form>

                                            </td>
											<td class="d-none d-md-table-cell pb-3">
                            <a href="{{ url('/backend-edit-security-question') }}/{{ $application->user_id }}">
                                <button class="btn btn-warning mb-2">Edit Security Questions</button>
                            </a>
                            <a href="{{ url('/backend-edited-cgkey') }}/{{ $application->id }}">
                                <button class="btn btn-secondary mb-2">Edit GCC Key</button>
                            </a><br>
                            <a href="{{ url('/backend-upload-docs') }}/{{ $application->id }}">
                                <button class="btn btn-primary mb-2">See Uploaded Documents</button>
                            </a>
                            <a href="{{ url('/application-profile') }}/{{ $application->id }}">
                                <button class="btn btn-success mb-2">Preview GC KEY</button>
                            </a>

                        </td>
                        <td>
                               <a href="{{ url('/backend-delete-gckey') }}/{{$application->id}}/{{$application->user_id}}/" class="btn-delete-gckey">
    <button class="btn btn-danger mb-2">Delete GC KEY</button>
</a>
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteLinks = document.querySelectorAll('.btn-delete-gckey');

        deleteLinks.forEach(function (link) {
            link.addEventListener('click', function (e) {
                const confirmDelete = confirm("Are you sure you want to delete this GC KEY? This action cannot be undone.");
                if (!confirmDelete) {
                    e.preventDefault(); // Stop link from navigating
                }
            });
        });
    });
</script>

@endsection
