<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Global Auto Finance</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />

    <!-- Favicons -->
    <link href="{{ asset('Bizland/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('Bizland/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('Bizland/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Bizland/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('Bizland/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('Bizland/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Bizland/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('Bizland/assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizLand
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
    .header{
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .container-fluid {
        max-width: 100%;
        margin: 0 auto;
        padding: 10px;
    }

    .card {
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #f8f9fa;
        border-bottom: none;
        padding: 20px 30px;
        font-size: 24px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .card-header img {
        max-width: 100%;
        /* IE8 */
        display: block;
        margin: 0 auto;
    }

    .card-header .header-content {
        flex: 1;
        text-align: center;
    }

    .card-header .header-content:last-child {
        text-align: right;
    }

    .card-body {
        padding: 30px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .btn-primary {
        background-color: #12ACED;
        border-color: #12ACED;
        padding: 12px 20px;
        font-size: 16px;
        border-radius: 5px;
        width: 100%;
    }

    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
    }

    .btn-block {
        display: block;
    }

    .mt-4 {
        margin-top: 1.5rem;
    }

    .text-center {
        text-align: center;
    }

    .text-center a {
        color: #007bff;
    }

    .img-container {
        text-align: center;
        margin-bottom: 20px;
    }

    .img-container img {
        max-width: 100%;
        height: auto;
        width: auto\9;
        /* IE8 */
    }

    .alert {
        margin-bottom: 0;
    }
</style>

<body class="index-page">

    <header id="header" class="header sticky-top">

        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    {{-- <i class="bi bi-envelope d-flex align-items-center"><a
                            href="mailto:contact@example.com">contact@example.com</a></i> --}}
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>0822-4980-4499</span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-cente">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="{{ asset('BizLand/assets/img/logo-gar-3.png') }}" alt="">
                    {{-- <h1 class="sitename">BizLand</h1> --}}
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="{{ route('dashboard') }}" class="active">Dashboard</a></li>
                         <li><a href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>

        </div>
    </header>
    <div class="container-fluid">

        {{-- <div class="row justify-content-center" style="margin-top:5rem!important;">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="background-container">
                    </div>
                    <div class="img-container d-flex justify-content-between" style="margin-top: 20px;">
                    </div>
                    <h2 class="text-center" style="margin-top: 5px; font-weight: bold;">LOGIN </h2>
                    <div class="card-body login-form">
                        <form method="POST" action="{{ route('login-proses') }}">
                            @csrf

                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" name="username" class="form-control" id="username" required>
                            </div>
                            @error('username')
                                <small>{{ $username }}</small>
                            @enderror
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" class="form-control" id="password" required>
                            </div>
                            @error('password')
                                <small>{{ $password }}</small>
                            @enderror

                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary btn-block" name="login"><a
                                        href="/beranda" style="color:#fff "><b>Login</a></b></button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div> --}}
    </div>
    <!-- Preloader -->
    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('BizLand/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('BizLand/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('BizLand/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('BizLand/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('BizLand/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('BizLand/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('BizLand/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('BizLand/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('BizLand/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('BizLand/assets/js/main.js') }}"></script>

</body>
