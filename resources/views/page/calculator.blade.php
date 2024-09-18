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
    .header {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('index') }}#about">About</a></li>
                        <li><a href="{{ route('index') }}#services">Services</a></li>
                        <li><a href="{{ route('index') }}#contact">Contact</a></li>
                        <li><a href="{{ route('calculator') }}" class="active">Calculator</a></li>
                        <li><a href="{{ route('PengajuanKredit') }}">Pengajuan Kredit</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>

        </div>

    </header>
    <main class="main">
        <div class="container page-header gradient mt-5 pt-5">
            <div class="row my-4 mt-5">
                <div class="col-lg-12 mx-auto mb-5">
                    <h1 class="text-center pt-5" id="header-title">SIMULASI KREDIT</h1>
                    <div class="container">
                        <div class="row gx-5 align-items-center justify-content-center">
                            <div class="col-md-5">
                                <form action="{{ route('credit.simulation.calculate') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="jumlahPinjaman" class="form-label">Jumlah Pinjaman</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Rp</span>
                                            <input type="number" class="form-control" name="inputJumlahPinjaman"
                                                value="{{ old('inputJumlahPinjaman') }}">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="Tenor" class="form-label">Lama Pinjaman (Tenor)</label>
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" name="inputTenor"
                                                value="{{ old('inputTenor') }}">
                                            <span class="input-group-text">Bulan</span>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="Bunga" class="form-label">Bunga Pinjaman</label>
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" name="bunga"
                                                value="{{ old('bunga') }}">
                                            <span class="input-group-text">% / tahun</span>
                                        </div>
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-light">Hitung</button>
                                </form>
                            </div>

                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-6">
                                        Jumlah pinjaman <br>
                                        Lama Pinjaman (Tenor) <br>
                                        Bunga / tahun <br>
                                        Bunga / bulan <br>
                                        Angsuran Pokok / BULAN <br>
                                        Angsuran Bunga / BULAN <br><br>
                                        <h4>Total Angsuran / BULAN <br></h4>
                                    </div>
                                    <div class="col-md-6">
                                        @if (isset($jumlahPinjaman))
                                            : Rp {{ number_format($jumlahPinjaman, 0, ',', '.') }} <br>
                                            : {{ $tenor }} bulan <br>
                                            : {{ $bungaPersen }} % / tahun <br>
                                            : {{ $bungaPerBulanPersen }} % / bulan <br>
                                            : Rp {{ number_format($angsuranPokokPerBulan, 0, ',', '.') }} <br>
                                            : Rp {{ number_format($angsuranBungaPerBulan, 0, ',', '.') }} <br><br>
                                            <h4> : Rp {{ number_format($totalAngsuran, 0, ',', '.') }} <br>
                                                <h4>
                                                @else
                                                    : <br>
                                                    : <br>
                                                    : <br>
                                                    : <br>
                                                    : <br>
                                                    : <br><br>
                                                    <h4> : <br>
                                                        <h4>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container mt-5">
                            <p>Simulasi ini untuk kredit secara umum. Silahkan masukkan angka-angka yang sesuai dengan
                                kolom-kolom berikut. Tekan tombol HITUNG untuk mengkalkulasikan kredit anda. Jumlah
                                cicilan tiap
                                bulan atau tiap tahun akan diketahui kemudian.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
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
