
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

	<title> @yield('title') </title>

	<link href={{ asset('css/app.css') }} rel="stylesheet">
    {{-- <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}> --}}
    <link rel="stylesheet" href={{ asset('css/all.css') }}>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">


    <style>
    .content-bg {
        background-image: url("{{ asset('img/y.jpg') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: calc(100vh - 120px); /* tinggi konten tanpa header + footer */
        padding: 2rem;
    }

    .card-transparan {
        background-color: rgba(0, 0, 0, 0.6);
        color: white;
        border: 1px solid white;
        border-radius: 10px;
        padding: 2rem;
        margin-bottom: 1.5rem;
    }

    main.content {
        margin: 0;
        padding: 0;
        background-image: url("{{ asset('img/y.jpg') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: calc(100vh - 120px); /* tinggi konten tanpa header + footer */
        padding: 2rem;
    }

    h2.dashboard-title {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 2rem;
    }
</style>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
                    <div></div>
                    <img src={{ asset('img/lgoo.png') }} alt="Logo" class="img-fluid" width="50" height="50">
                </a>
                <div class="text-center">Dewan Perwakilan R A</div>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item {{ request()->is('beranda') ? 'active' : '' }}">
						<a class="sidebar-link" href="/beranda">
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

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-in.html">
              <i class="fa-solid fa-user"></i><span class="align-middle">Petugas</span>
            </a>
					</li>

					{{-- <li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-up.html">
              <i class="align-middle" data-feather="log-in"></i>  <span class="align-middle">log out/sign up</span>
            </a>
					</li> --}}
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

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								{{-- <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings </a>
								<div class="dropdown-divider"></div> --}}
								<a class="dropdown-item" href="{{ route('logout') }}"Add commentMore actions
                                    onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                    {{ __('logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
                    {{-- <div class="content-bg"> --}}
                        <div class="container center col-12">
                        <div class="container-fluid">
                        <div class="card" style="border: none">
                            <div class="card-header gradient-nav">
                    @yield('content')

				</div>
				</div>
				</div>
				</div>
				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
						</div>
						<div class="col-6 text-end">
                            <p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin Template</strong></a>								&copy;
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

</body>

</html>
