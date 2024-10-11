<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Global Auto Finance</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS (for modal functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <link href="{{ asset('Bizland/assets/img/icon-gar-2.png') }}" rel="icon">
    <link href="{{ asset('Bizland/assets/img/icon-gar-2.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
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
  * Template Name: Bizland
  * Template URL: https://bootstrapmade.com/Bizland-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
    .header {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .modal-dialog.modal-top {
        margin-top: 50px;
        /* Adjust this value to control how far down from the top the modal appears */
    }

    .modal-dialog.modal-bottom {
        margin-top: auto;
        margin-bottom: 20px;
        /* Add some spacing from the bottom */
    }

    .modal-dialog.custom-position {
        position: absolute;
        top: 30%;
        /* Adjust these values for custom position */
        left: 25%;
        transform: translate(-25%, -30%);
    }
</style>

<body class="index-page">

    <header id="header" class="header sticky-top">

        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    {{-- <i class="bi bi-envelope d-flex align-items-center"><a
                            href="mailto:contact@example.com">contact@example.com</a></i> --}}
                <a href="https://wa.me/6282249804499"style="color: white"  target="_blank">
                        <i class="bi bi-phone d-flex align-items-center ms-4"><span>0822-4980-4499</span></i>

                    </a>
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
                <a href="" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="{{ asset('Bizland/assets/img/logo-gar-3.png') }}" alt="">
                    {{-- <h1 class="sitename">Bizland</h1> --}}
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
    <div class="container mt-5">
        <div class="row my-4 mt-5">
            <div class="col-lg-12 mx-auto mb-5">

                <div class="card shadow gradient">
                    <div class="card-header my-auto">
                        <h4 class="my-auto" style="color: white">Dashboard</h4>
                    </div>
                    <div class="card-box mb-30">

                        <div class="pb-10 pd-2">
                            <table class="data-table table ">
                                <thead>
                                    <tr>
                                        {{-- <th class="table-plus datatable-nosort">Name</th> --}}
                                        <th>No</th>
                                        <th class="table-plus datatable-nosort">Nama</th>
                                        <th class="table-plus datatable-nosort">Alamat</th>
                                        <th class="table-plus datatable-nosort">Nomor KTP</th>
                                        <th class="table-plus datatable-nosort">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $d->nama }}</td>
                                            <td>{{ $d->alamat }} </td>
                                            <td>{{ $d->noKTP }} </td>
                                            <td>
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                    data-bs-target="#detailModal" data-id="{{ $d->id }}">
                                                    Detail
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Structure -->
        <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="top: 6rem !important;">
                <div class="modal-content" style="width: 180%;right: 40%;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailModalLabel">Detail Information</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Jenis Barang</th>
                                    <th>Merek Barang</th>
                                    <th>Tipe Barang</th>
                                    <th>Harga Barang</th>
                                </tr>
                            </thead>
                            <tbody id="modal-content">
                                <!-- Content will be loaded here via AJAX -->
                            </tbody>
                        </table>
                        <div class="form-group row" style="padding: 10px;">
                            <label class=" col-sm-12 col-md-2 col-form-label" for="document">Document</label>
                            <div class="col-sm-12 col-md-10">
                                <button type="button" class="btn btn-success" id="download-document">
                                    Download
                                </button>
                            </div>
                        </div>
                        <div class="form-group row" style="padding: 10px;">
                            <label class=" col-sm-12 col-md-2 col-form-label" for="document">KTP</label>
                            <div class="col-sm-12 col-md-10">
                                <button type="button" class="btn btn-success" id="download-ktp">
                                    Download
                                </button>
                            </div>
                        </div>
                        <div class="form-group row" style="padding: 10px;">
                            <label class=" col-sm-12 col-md-2 col-form-label" for="document">STNK</label>
                            <div class="col-sm-12 col-md-10">
                                <button type="button" class="btn btn-success" id="download-stnk">
                                    Download
                                </button>
                            </div>
                        </div>
                        <div class="form-group row" style="padding: 10px;">
                            <label class=" col-sm-12 col-md-2 col-form-label" for="document">Kartu Keluarga</label>
                            <div class="col-sm-12 col-md-10">
                                <button type="button" class="btn btn-success" id="download-kk">
                                    Download
                                </button>
                            </div>
                        </div>
                        <div class="form-group row" style="padding: 10px;">
                            <label class=" col-sm-12 col-md-2 col-form-label" for="document">BPKB</label>
                            <div class="col-sm-12 col-md-10">
                                <button type="button" class="btn btn-success" id="download-bpkb">
                                    Download
                                </button>
                            </div>
                        </div>
                        <div class="form-group row" style="padding: 10px;">
                            <label class=" col-sm-12 col-md-2 col-form-label" for="document">Slip Gaji</label>
                            <div class="col-sm-12 col-md-10">
                                <button type="button" class="btn btn-success" id="download-slipGaji">
                                    Download
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Preloader -->
        <div id="preloader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script>
            $(document).ready(function() {
                // When a button is clicked
                $('[data-bs-toggle="modal"]').on('click', function() {
                    // Get the ID from the data-id attribute
                    var recordId = $(this).data('id');

                    // Fetch data for the record using AJAX
                    $.ajax({
                        url: '/ShowData/' + recordId, // Update this URL with your endpoint
                        method: 'GET',
                        success: function(response) {
                            console.log('Response Data:', response);

                            // Clear previous data
                            $('#modal-content').empty();

                            // Populate the modal with the fetched data
                            if (response.length) {
                                response.forEach(function(item) {
                                    $('#modal-content').append(`
                            <tr>
                                <td>${item.jenis_barang}</td>
                                <td>${item.merk_barang}</td>
                                <td>${item.tipe_barang}</td>
                                <td>${item.harga_barang}</td>
                            </tr>
                        `);
                                });
                            } else {
                                $('#modal-content').html(
                                    '<tr><td colspan="4">No data found.</td></tr>');
                            }

                            // Dynamically set the download URLs based on the record ID
                            $('#download-document').attr('onclick',
                                "window.location.href='/download/document/" + recordId + "'");
                            $('#download-ktp').attr('onclick',
                                "window.location.href='/download/ktp/" + recordId + "'");
                            $('#download-stnk').attr('onclick',
                                "window.location.href='/download/stnk/" + recordId + "'");
                            $('#download-kk').attr('onclick',
                                "window.location.href='/download/kk/" + recordId + "'");
                            $('#download-bpkb').attr('onclick',
                                "window.location.href='/download/bpkb/" + recordId + "'");
                            $('#download-slipGaji').attr('onclick',
                                "window.location.href='/download/slipGaji/" + recordId + "'");
                        },
                        error: function() {
                            $('#modal-content').html(
                                '<tr><td colspan="4">Error loading data.</td></tr>');
                        }
                    });
                });
            });
        </script>

        <!-- Vendor JS Files -->
        <script src="{{ asset('Bizland/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('Bizland/assets/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('Bizland/assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('Bizland/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('Bizland/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
        <script src="{{ asset('Bizland/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('Bizland/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('Bizland/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('Bizland/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

        <!-- Main JS File -->
        <script src="{{ asset('Bizland/assets/js/main.js') }}"></script>

</body>
