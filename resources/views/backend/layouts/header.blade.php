<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{ asset('public/backend/img/icons/icon-48x48.png')}}" />

	<title>Management</title>

	<link href="{{ asset('public/backend/css/app.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">Management</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						All Pages
					</li>

 @if(Auth::user()->usertype == 1)
    {{-- Show both for usertype 1 --}}
    <li class="sidebar-item {{ Request::is('backend.gcckeyslist') ? 'active' : '' }}">
        <a class="sidebar-link" href="{{ url('/backend.gcckeyslist') }}">
            <i class="align-middle" data-feather="home"></i>
            <span class="align-middle">All Applications</span>
        </a>
    </li>
    <li class="sidebar-item {{ Request::is('backend.gcckeysuserslist') ? 'active' : '' }}">
        <a class="sidebar-link" href="{{ url('/backend.gcckeysuserslist') }}">
            <i class="align-middle" data-feather="sliders"></i>
            <span class="align-middle">All Candidates List</span>
        </a>
    </li>
@elseif(Auth::user()->usertype == 2)
    {{-- Show only one for usertype 2 --}}
    <li class="sidebar-item {{ Request::is('backend.gcckeysuserslist') ? 'active' : '' }}">
        <a class="sidebar-link" href="{{ url('/backend.gcckeysuserslist') }}">
            <i class="align-middle" data-feather="sliders"></i>
            <span class="align-middle">All Candidates List</span>
        </a>
    </li>
@endif




					{{-- <li class="sidebar-item">
						<a class="sidebar-link" href="pages-profile.html">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-in.html">
              <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign In</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-up.html">
              <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign Up</span>
            </a>
					</li> --}}

					{{-- <li class="sidebar-item">
						<a class="sidebar-link" href="pages-blank.html">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
            </a>
					</li> --}}

					{{-- <li class="sidebar-header">
						Tools & Components
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-buttons.html">
              <i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-forms.html">
              <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Forms</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-cards.html">
              <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Cards</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-typography.html">
              <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Typography</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="icons-feather.html">
              <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
            </a>
					</li> --}}

					<li class="sidebar-header">
						Logout
					</li>

					<li class="sidebar-item">



						<a class="sidebar-link" href="{{ route('logout') }}"
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Logout</span>
            </a>

            <form id="logout-form" action="{{ route('backend.logout') }}" method="POST" class="d-none">
                @csrf
            </form>

					</li>
{{--
					<li class="sidebar-item">
						<a class="sidebar-link" href="maps-google.html">
              <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
            </a>
					</li> --}}
				</ul>

				{{-- <div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Upgrade to Pro</strong>
						<div class="mb-3 text-sm">
							Are you looking for more components? Check out our premium version.
						</div>
						<div class="d-grid">
							<a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
						</div>
					</div>
				</div> --}}
			</div>
		</nav>
