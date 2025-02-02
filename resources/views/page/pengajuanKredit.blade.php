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

</head>
<style>
    .header {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>


<body>

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
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('index') }}#about">About</a></li>
                        <li><a href="{{ route('index') }}#services">Services</a></li>
                        <li><a href="{{ route('index') }}#contact">Contact</a></li>
                        <li><a href="{{ route('calculator') }}">Calculator</a></li>
                        <li><a href="{{ route('PengajuanKredit') }}"class="active">Pengajuan Kredit</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>

        </div>

    </header>



    <div class="container mt-5">
        <div class="row my-4 mt-5">
            <div class="col-lg-12 mx-auto mb-5">
                <form action="{{ route('kredit.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card shadow gradient">
                        <div class="card-header my-auto">
                            <h4 class="my-auto" style="color: white">Form Pengajuan Kredit</h4>
                        </div>
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-md-6 mb-3" style="color: white">
                                    Nama Lengkap : <br>
                                    <input type="text" name="nama" class="form-control" required> <br>
                                    Alamat : <br>
                                    <textarea name="alamat" class="form-control" required></textarea> <br>
                                    Nomor KTP : <br>
                                    <input type="number" name="noKTP" class="form-control" required> <br><br>
                                </div>
                            </div>
                            <div id="">
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <input type="hidden" name="id_barang[]" value="1">
                                        <!-- Hidden input for ID -->
                                        <input type="text" name="jenis_barang[]" class="form-control"
                                            placeholder="Jenis Barang" required>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <input type="text" name="merk_barang[]" class="form-control"
                                            placeholder="Merk Barang" required>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <input type="text" name="tipe_barang[]" class="form-control"
                                            placeholder="Tipe Barang" required>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <input type="number" name="harga_barang[]" class="form-control"
                                            placeholder="Harga Kredit" required>
                                    </div>
                                    <div class="col-md-2 mb-3 d-grid">
                                        <button class="btn btn-success add_item_btn">Tambah</button>
                                    </div>
                                    <div id="show_item">
                                    </div>
                                </div>
                            </div>
                            <div class="md-6 pt-2" style="color: white">
                                Upload Dokumen kredit: <br>
                                <input type="file" id="document" class="form-control" name="document">
                            </div>
                            <div class="md-6 pt-2" style="color: white">
                                Upload KTP : <br>
                                <input type="file" id="KTP" class="form-control" name="KTP">
                            </div>
                            <div class="md-6 pt-2" style="color: white">
                                Upload STNK : <br>
                                <input type="file" id="STNK" class="form-control" name="STNK">
                            </div>
                            <div class="md-6 pt-2" style="color: white">
                                Upload Kartu Keluarga : <br>
                                <input type="file" id="KK" class="form-control" name="KK">
                            </div>
                            <div class="md-6 pt-2" style="color: white">
                                BPKB : <br>
                                <input type="file" id="bpkb" class="form-control" name="bpkb">
                            </div>
                            <div class="md-6 pt-2" style="color: white">
                                Slip Gaji : <br>
                                <input type="file" id="slipGaji" class="form-control" name="slipGaji">
                            </div>
                            <div>
                                <input type="submit" name="submit" value="Tambah" class="btn btn-light w-25 mt-5"
                                    id="add-btn">
                            </div>
                        </div>
                    </div>
                </form>
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
            let itemIndex = 2; // Start indexing from 2

            // Get the CSRF token from the meta tag
            let csrfToken = $('meta[name="csrf-token"]').attr('content');

            // Handle form submission
            $("form").on("submit", function(e) {
                e.preventDefault();
                let formData = new FormData(this); // Use FormData to capture all form data, including files

                // Add the item details manually to the FormData object, including the ID
                $("input[name='jenis_barang[]']").each(function(index) {
                    formData.append(`barang[${index}][id_barang]`, $("input[name='id_barang[]']")
                        .eq(index).val()); // Add ID to JSON
                    formData.append(`barang[${index}][jenis_barang]`, $(this).val());
                    formData.append(`barang[${index}][merk_barang]`, $(
                        "input[name='merk_barang[]']").eq(index).val());
                    formData.append(`barang[${index}][tipe_barang]`, $(
                        "input[name='tipe_barang[]']").eq(index).val());
                    formData.append(`barang[${index}][harga_barang]`, $(
                        "input[name='harga_barang[]']").eq(index).val());
                });

                $.ajax({
                    url: "{{ route('kredit.store') }}",
                    type: "POST",
                    data: formData,
                    contentType: false, // Necessary for file upload
                    processData: false, // Necessary for file upload
                    headers: {
                        'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the headers
                    },
                    success: function(response) {
                        // Handle success - redirect, show a message, etc.
                        console.log("Form submitted successfully!", response);
                        window.location.href = response
                        .redirect_url; // Redirect to a success page or another route
                    },
                    error: function(xhr, status, error) {
                        // Handle errors
                        console.log("Error submitting form", error);
                    }
                });
            });

            // Add new item
            $(".add_item_btn").click(function(e) {
                e.preventDefault();

                // Append new item with incremented ID at the bottom
                $("#show_item").append(
                    `<div class="row item-row">
                    <div class="col-md-3 mb-3">
                        <input type="hidden" name="id_barang[]" value="${itemIndex}"> <!-- Hidden input for ID -->
                        <input type="text" id="jenis_barang_${itemIndex}" name="jenis_barang[]" class="form-control" placeholder="Jenis Barang" required>
                    </div>
                    <div class="col-md-2 mb-3">
                        <input type="text" id="merk_barang_${itemIndex}" name="merk_barang[]" class="form-control" placeholder="Merk Barang" required>
                    </div>
                    <div class="col-md-2 mb-3">
                        <input type="text" id="tipe_barang_${itemIndex}" name="tipe_barang[]" class="form-control" placeholder="Tipe Barang" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <input type="number" id="harga_barang_${itemIndex}" name="harga_barang[]" class="form-control" placeholder="Harga Kredit" required>
                    </div>
                    <div class="col-md-2 mb-3 d-grid">
                        <button class="btn btn-danger remove_item_btn">Hapus</button>
                    </div>
                </div>`
                );

                itemIndex++; // Increment the counter for the next ID
            });

            // Handle item removal
            $(document).on('click', '.remove_item_btn', function(e) {
                e.preventDefault();
                $(this).closest('.item-row').remove();
                updateItemIndices(); // Update indices after removal
            });

            // Function to update item IDs
            function updateItemIndices() {
                let newIndex = 2;
                $(".item-row").each(function() {
                    $(this).find("input[name='id_barang[]']").val(newIndex); // Update hidden ID input
                    newIndex++; // Increment index
                });
                itemIndex = newIndex; // Update global itemIndex to the next available ID
            }
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
