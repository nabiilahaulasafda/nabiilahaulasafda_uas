
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<title> @yield('title') </title>

	<link href={{ asset('css/app.css') }} rel="stylesheet">
    {{-- <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}> --}}
    <link rel="stylesheet" href={{ asset('css/all.css') }}>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">


    <style>
    main.content {
    background-color: #737e864e !important;
    min-height: calc(100vh - 120px);
}

    .card-body {
        padding: 2rem;
    }
</style>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
                    <div></div>
                    <img src={{ asset('img/lgoo.png') }} alt="Logo" class="rounded mx-auto d-block" width="50" height="50">  <div class="text-center"> Dewan Perwakilan Rakyat Aceh </div>
                </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item {{ request()->is('home') ? 'active' : '' }}">
						<a class="sidebar-link" href="/home">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Beranda</span>
            </a>
					</li>

					<li class="sidebar-item {{ request()->is('pengajuan') ? 'active' : '' }}">
						<a class="sidebar-link" href="/pengajuan">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Pengajuan</span>
            </a>
					</li>

					<li class="sidebar-item {{ request()->is('jadwal') ? 'active' : '' }}">
						<a class="sidebar-link" href="/jadwal">
              <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Jadwal</span>
            </a>
					</li>

					<li class="sidebar-item {{ request()->is('sertifikat') ? 'active' : '' }}">
						<a class="sidebar-link" href="/sertifikat">
              <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Sertifikat</span>
            </a>
					</li>
					<li class="sidebar-item {{ request()->is('petugas') ? 'active' : '' }}">
						<a class="sidebar-link" href="/petugas">
              <i class="fa-solid fa-user"></i><span class="align-middle">Petugas</span>
            </a>
					</li>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{ route('logout') }}"
                            dd commentMore actions
                                    onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                        <i class="fa-solid fa-user"></i><span class="align-start"></span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                        </form>
					</li>
				</ul>

			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i></a>

				<div class="navbar-collapse collapse">
                    <h2 class="navbar-nav navbar-text">@yield('headline')</h2>
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link " href="#" data-bs-toggle="dropdown">
                <img src="{{ asset('img/avatars/avatar-3.jpg') }}" class="avatar img-fluid rounded me-1" alt="Avatar"> <span class="text-dark">Admin</span>
              </a>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content bg-white">
    <div class="container py-4">
                @yield('content')
    </div>
</main>

			<footer class="footer shadow-sm border-top bg-white">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
						</div>
						<div class="col-6 text-end">
                            <p class="mb-0">
								<a class="text-muted" ><strong>B I I L A</strong></a> - <a class="text-muted" ><strong>made by nabiilahaulasafda</strong></a>								&copy;
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src={{ asset('js/app.js') }}></script>
    <script src={{asset('js/all.js')}}></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            setTimeout(function(){
            if(localStorage.getItem('popState') !== 'shown'){
                window.notyf.open({
                type: "success",
                message: "Get access to all 500+ components and 45+ pages with AdminKit PRO. <u><a class=\"text-white\" href=\"https://adminkit.io/pricing\" target=\"_blank\">More info</a></u> 🚀",
                duration: 10000,
                ripple: true,
                dismissible: false,
                position: {
                    x: "left",
                    y: "bottom"
                }
                });

                localStorage.setItem('popState','shown');
            }
            }, 15000);
        });
    </script>
<!-- Bootstrap JS (dengan Popper.js, sudah include) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>

</html>
