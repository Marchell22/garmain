<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Global Auto Finance</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

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
                        <li><a href="{{ route('calculator') }}">Calculator</a></li>
                        <li><a href="{{ route('PengajuanKredit') }}">Pengajuan Kredit</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li> 
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>

        </div>

    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">

        </section><!-- /Hero Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">

            <div class="container">
                <div class="container section-title" data-aos="fade-up">
                    <p><span>Why Choose Us?</span></p>

                    <div class="row gy-4">
                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-people-fill"></i></div>
                                <h4><a href="" class="stretched-link">Keahlian</a></h4>
                                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-headset"></i></div>
                                <h4><a href="" class="stretched-link">Layanan Pelanggan</a></h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-credit-card"></i></div>
                                <h4><a href="" class="stretched-link">Harga Kompetitif</a></h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-star-fill"></i></div>
                                <h4><a href="" class="stretched-link">Kenyamanan</a></h4>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                            </div>
                        </div><!-- End Service Item -->

                    </div>
                </div>

            </div>

        </section><!-- /Featured Services Section -->

        <!-- About Section -->
        <section id="about" class="about section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
                <p><span>Find Out More</span> <span class="description-title">About Us</span></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-3">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('BizLand/assets/img/profil-global.png') }}" alt=""
                            class="img-fluid">
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="about-content ps-0 ps-lg-3">
                            <h3>Global Auto Refinance</h3>
                            <p>
                                Global Auto Refinance adalah solusi terpadu untuk semua kebutuhan finansial terkait
                                kendaraan Anda. Mengkhususkan diri dalam layanan auto refinance, kami juga menawarkan
                                solusi komprehensif untuk jual beli sepeda motor, serta menyediakan layanan kredit
                                kendaraan dan BPKB. Kami memberikan harga terbaik dan layanan pelanggan yang luar biasa
                                kepada klien kami, menjadikan kepemilikan dan pembiayaan kendaraan lebih mudah dan mudah
                                diakses.

                                Kami berkomitmen untuk memberi Anda fleksibilitas finansial dan pilihan kendaraan yang
                                Anda butuhkan. Baik Anda ingin refinancing kredit mobil, membeli sepeda motor baru, atau
                                membutuhkan uang tunai cepat melalui layanan BPKB kami, kami siap membantu Anda di
                                setiap langkah.

                                Kunjungi situs web kami atau hubungi kami hari ini untuk mempelajari lebih lanjut
                                tentang bagaimana kami dapat membantu Anda.
                            </p>
                        </div>

                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section light-background">

            <div class="container">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                        {
                          "loop": true,
                          "speed": 600,
                          "autoplay": {
                            "delay": 5000
                          },
                          "slidesPerView": "auto",
                          "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                          },
                          "breakpoints": {
                            "320": {
                              "slidesPerView": 2,
                              "spaceBetween": 40
                            },
                            "480": {
                              "slidesPerView": 3,
                              "spaceBetween": 60
                            },
                            "640": {
                              "slidesPerView": 4,
                              "spaceBetween": 80
                            },
                            "992": {
                              "slidesPerView": 6,
                              "spaceBetween": 120
                            }
                          }
                        }
          </script>
                    <div class="container section-title" data-aos="fade-up">
                        <p><span>Leasing Support</span></p>
                    </div>
                    <div class="swiper-wrapper align-items-center">

                        <div class="swiper-slide"><img src="{{ asset('BizLand/assets/img/companies/1.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('BizLand/assets/img/companies/2.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('BizLand/assets/img/companies/3.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('BizLand/assets/img/companies/4.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('BizLand/assets/img/companies/5.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('BizLand/assets/img/companies/6.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('BizLand/assets/img/companies/7.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('BizLand/assets/img/companies/8.jpg') }}"
                                class="img-fluid" alt=""></div>
                    </div>
                </div>

            </div>

        </section><!-- /Clients Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p><span>Layanan</span> <span class="description-title">Kami</span></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-3">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('BizLand/assets/img/Jual-Beli-Kendaraan-Motor-gar.png') }}" alt=""
                            class="img-fluid">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="about-content ps-0 ps-lg-3">
                            <h3>Jual Beli Kendaraan Motor</h3>
                            <p>
                                Global Auto Refinance menawarkan rangkaian lengkap sepeda motor untuk memenuhi setiap
                                kebutuhan dan anggaran. Inventaris kami mencakup berbagai model dari merek ternama,
                                memastikan Anda menemukan sepeda motor yang sempurna untuk gaya hidup Anda.

                                Kami menyediakan platform tanpa kerumitan untuk menjual sepeda motor Anda. Baik Anda
                                ingin mengupgrade atau sekadar menjual sepeda motor Anda, kami menawarkan nilai pasar
                                yang wajar dan proses transaksi yang lancar.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('BizLand/assets/img/Service-Motor-Mobil-gar.png') }}" alt=""
                            class="img-fluid">
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="about-content ps-0 ps-lg-3">
                            <h3>Service Kendaraan Motor dan Mobil</h3>
                            <p>
                                Global Auto Refinance adalah solusi terpadu untuk semua kebutuhan finansial terkait
                                kendaraan Anda. Mengkhususkan diri dalam layanan auto refinance, kami juga menawarkan
                                solusi komprehensif untuk jual beli sepeda motor, serta menyediakan layanan kredit
                                kendaraan dan BPKB. Kami memberikan harga terbaik dan layanan pelanggan yang luar biasa
                                kepada klien kami, menjadikan kepemilikan dan pembiayaan kendaraan lebih mudah dan mudah
                                diakses.

                                Kami berkomitmen untuk memberi Anda fleksibilitas finansial dan pilihan kendaraan yang
                                Anda butuhkan. Baik Anda ingin refinancing kredit mobil, membeli sepeda motor baru, atau
                                membutuhkan uang tunai cepat melalui layanan BPKB kami, kami siap membantu Anda di
                                setiap langkah.

                                Kunjungi situs web kami atau hubungi kami hari ini untuk mempelajari lebih lanjut
                                tentang bagaimana kami dapat membantu Anda.
                            </p>
                        </div>

                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('BizLand/assets/img/layanan-kredit-kendaraan-dan-bpkb-gar.png') }}"
                            alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="about-content ps-0 ps-lg-3">
                            <h3>Layanan Kredit Kendaraan dan BPKB</h3>
                            <p>
                                Layanan kredit kendaraan kami dirancang untuk membuat kepemilikan kendaraan mudah
                                diakses dan terjangkau. Kami menawarkan persyaratan pinjaman dan rencana pembayaran yang
                                disesuaikan dengan situasi keuangan Anda, memastikan Anda dapat memperoleh kendaraan
                                yang Anda butuhkan tanpa tekanan keuangan.

                                Saat Anda membutuhkan uang tunai cepat, layanan BPKB kami memberikan solusi yang andal
                                dan aman. Dengan jaminan BPKB (Surat Tanda Nomor Kendaraan) kendaraan Anda, Anda dapat
                                mengakses dana dengan cepat dan mudah.
                            </p>
                        </div>

                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('BizLand/assets/img/bg-gar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="about-content ps-0 ps-lg-3">
                            <h3>Butuh Dana Cepat?</h3>
                            <p>
                                Dengan rangkaian layanan komprehensif yang dirancang untuk memenuhi semua kebutuhan
                                pembiayaan kendaraan Anda, kami menjadikan prosesnya lancar dan tanpa kerumitan.
                            </p>
                        </div>

                    </div>
                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                {{-- <h2>Portfolio</h2>
                <p><span>Check Our&nbsp;</span> <span class="description-title">Portfolio</span></p> --}}
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                    data-sort="original-order">


                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('BizLand/assets/img/masonry-portfolio/poster-gar.png') }}"
                                class="img-fluid" alt="">

                        </div><!-- End Portfolio Item -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('BizLand/assets/img/masonry-portfolio/poster-gar-1.png') }}"
                                class="img-fluid" alt="">

                        </div><!-- End Portfolio Item -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('BizLand/assets/img/masonry-portfolio/poster-gar-2.png') }}"
                                class="img-fluid" alt="">

                        </div><!-- End Portfolio Item -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('BizLand/assets/img/masonry-portfolio/poster-gar-3.png') }}"
                                class="img-fluid" alt="">

                        </div><!-- End Portfolio Item -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('BizLand/assets/img/masonry-portfolio/poster-gar-4.png') }}"
                                class="img-fluid" alt="">

                        </div><!-- End Portfolio Item -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('BizLand/assets/img/masonry-portfolio/poster-gar-5.png') }}"
                                class="img-fluid" alt="">

                        </div><!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 d-flex flex-column align-items-center">

                    <div class="col-lg-8">

                        <div class="info-wrap">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Address</h3>
                                    <p>Kawasan Niaga, Jl. Soekarno Hatta Jl. MTC Barat No.590, Sekejati, Kec. Buahbatu, Kota Bandung, Jawa Barat 40286</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Call Us</h3>
                                    <p>0822-4980-4499</p>
                                </div>
                            </div><!-- End Info Item -->

                          
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.292973693799!2d107.6432805!3d-6.9414962!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9f149aaa293%3A0xda2e0cc32a856154!2sMetro%20Indah%20Mall!5e0!3m2!1sen!2sid!4v1725973896495!5m2!1sen!2sid"
                                frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                   

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer">

        <div class="footer-newsletter">

        <div class="container footer-top d-flex justify-content-center">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">BizLand</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Kawasan Niaga, Jl. Soekarno Hatta Jl. MTC Barat No.590,</p>
                        <p>Kec. Buahbatu, Kota Bandung, Jawa Barat 40286</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>0822-4980-4499</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    
                </div>

                 <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">Follow Us</span>
                    </a>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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

</html>
