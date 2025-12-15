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
						<h1 class="h3 d-inline align-middle">Upload Documents -> Application No - (<span style="text-transform: uppercase;">{{$data->application_number}}</span>)</h1>
					</div>

                    @if(session('success'))
                        <div class="alert alert-success"  style="background-color: green; padding: 12px; color: white; border-radius: 8px;">{{ session('success') }}</div>
                    @endif

                    @if($errors->has('error'))
                        <div class="alert alert-danger"  style="background-color: red; padding: 12px; color: white; border-radius: 8px;">{{ $errors->first('error') }}</div>
                    @endif

                <form method="POST" action="{{ route('backend.postdocument') }}" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="applicationid" value="{{$data->id}}">
    <div class="row">
        <div class="col-12 col-lg-4">

            <!-- Name -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Choose Document</h5>
                </div>
                <div class="card-body">
                    <input type="file" class="form-control" name="document" value="{{ old('document') }}">
                    @error('document')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>




        </div>

        <div class="col-12 col-lg-4">

            <!-- Email -->


            <!-- Password -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Date Send</h5>
                </div>
                <div class="card-body">
                    <input type="date" class="form-control" name="datesend" placeholder="Select Date Send">
                    @error('datesend')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>


        </div>

          <div class="col-12 col-lg-4">

            <!-- Email -->


            <!-- Password -->
         <div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Date Read</h5>
    </div>
    <div class="card-body">
        <input type="date" class="form-control mb-2" name="dateread" placeholder="Select Date Read">
        @error('dateread')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" name="no_date_read" id="no_date_read">
            <label class="form-check-label" for="no_date_read">
                This Is Message Not Date
            </label>
        </div>
    </div>
</div>


        </div>

                  <div class="col-12 col-lg-12">

            <div class="card">
                <div class="card-body" style="text-align: right;">
                    <button type="submit" class="btn btn-primary">Upload Document</button>
                </div>
            </div>

        </div>


    </div>
</form>

	<div class="row">
						<div class="col-12 col-lg-12 col-xxl-12 d-flex">
							<div class="card flex-fill">
								<div class="card-header">

									<h5 class="card-title mb-0">Uploaded Documents</h5>
								</div>
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>Document</th>
											<th class="d-none d-xl-table-cell">Send Date</th>
											<th class="d-none d-xl-table-cell">Read Date</th>
                                            <th class="d-none d-xl-table-cell">Position</th>
											<th class="d-none d-md-table-cell">Actions</th>
										</tr>
									</thead>
									<tbody>


                                        @foreach ($document as $doc)
										<tr>
											<td><a href="{{ asset('public/document/' . $doc['file']) }}">{{ $doc['filename'] }}</a></td>
											<td class="d-none d-xl-table-cell">{{ $doc['send_date'] }}</td>
											<td class="d-none d-xl-table-cell">
                                                @if ($doc['date_read'] === 'New Message')
                                                                        New Message
                                                                    @else
                                                                        {{ $doc['date_read'] }}
                                                                    @endif
                                                                </td>
                                          <td>
                                                      <form action="{{ route('backend.upload.docs.position') }}" method="POST">
                @csrf
                                                        
                <input type="hidden" name="document_id" value="{{ $doc['id'] }}">
                <input type="hidden" name="application_id" value="{{$data->id}}">
                    <input type="text" name="position" class="form-control" placeholder="Enter postion" value="{{ $doc['position'] }}" required>
               
                    <button type="submit" class="btn btn-success">Save</button>
                
            </form>
                                          </td>
											<td class="d-none d-md-table-cell"><a href="{{ url('/backend-document-delete') }}/{{$data->id}}/{{ $doc['id'] }}"><button class="btn btn-danger">Delete</button></a></td>
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
