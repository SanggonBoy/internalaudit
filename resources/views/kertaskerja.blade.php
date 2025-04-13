<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>JDIH - Internal Audit KCIC</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('peraturan-media/css/styles.css') }}" rel="stylesheet" />
    {{-- <link href="{{ asset('landing-page/css/styles.css')}}" rel="stylesheet" /> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <style>
        /* Navbar putih dengan bayangan */
        .navbar-white {
            background-color: white !important;
            /* Warna putih */
            transition: background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3) !important;
            /* Bayangan */
            z-index: 1000;
            /* Pastikan tampil di atas elemen lain */
        }

        /* Navbar transparan */
        .navbar-transparent {
            background-color: transparent !important;
            /* Transparan */
            transition: background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            box-shadow: none;
            /* Tidak ada bayangan */
        }

        /* Teks di navbar */
        .navbar-transparent .nav-link,
        .navbar-transparent .navbar-brand {
            color: white !important;
            transition: color 0.3s ease-in-out;
        }

        .navbar-white .nav-link,
        .navbar-white .navbar-brand {
            color: black !important;
            transition: color 0.3s ease-in-out;
        }

        /* Hover warna merah pada nav-link */
        #mainNav .navbar-nav .nav-link:hover {
            color: rgb(213, 0, 0) !important;
            /* Hanya untuk navbar dengan ID mainNav */
        }

        /* Dropdown dengan efek fade dan transisi */
        .navbar-nav .dropdown:hover .dropdown-menu {
            display: block !important;
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
            /* Kembali ke posisi normal */
            transition: opacity 0.3s ease, transform 0.5s ease;
            /* Efek fade dan slide */
        }

        /* Awal dropdown - sembunyikan dengan opacity */
        .navbar-nav .dropdown-menu {
            display: block;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            /* Geser sedikit ke atas */
            transition: opacity 0.3s ease, transform 0.3s ease;
            /* Efek fade dan slide */
        }

        /* Hover warna untuk item dropdown */
        .dropdown-item:hover {
            background-color: #f6f6f6;
            /* Warna merah muda */
            color: #721c24;
            /* Teks merah */
        }

        .dropdown-item i {
            width: 20px;
            /* Pastikan lebar tetap untuk semua ikon */
            text-align: center;
            /* Ikon berada di tengah */
            font-size: 13px;
            /* Ukuran ikon seragam */
            color: #b00012;
            /* Warna ikon (opsional) */
        }

        .dropdown-item {
            display: flex;
            align-items: center;
            font-size: 15px;
            /* Vertikal rata tengah antara ikon dan teks */
        }


        /* Hilangkan tanda panah dropdown */
        .nav-link.dropdown-toggle::after {
            content: none;
        }

        /* Efek transisi untuk pergerakan mulus */
        .card {
            transition: box-shadow 0.3s ease-in-out;
        }

        /* Hover pada card untuk efek shadow */
        .card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        /* Efek pada elemen-elemen di dalam card saat card di-hover */
        .card:hover .small.text-muted,
        .card:hover .card-title,
        .card:hover .card-text {
            color: #dc0000e2;
            /* Mengubah warna teks menjadi warna dark */
        }

        /* Menambahkan transisi pada perubahan warna teks */
        .small,
        .card-title,
        .card-text {
            transition: color 0.3s ease-in-out;
            /* Transisi warna untuk teks */
        }

        /* Hover pada tombol */
        .btn-outline-dark {
            transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out, border-color 0.3s ease-in-out;
        }

        .btn-outline-dark:hover {
            color: #fff;
            background-color: #000000;
            border-color: #000000;
        }

        /* Initially, hide the advanced search card */
        #advanced-search-card {
            opacity: 0;
            /* Hidden */
            max-height: 0;
            transform: translateY(-30px);
            /* Start position for animation */
            overflow: hidden;
            transition: opacity 0.5s ease, max-height 0.5s ease, transform 0.5s ease;
        }

        /* When the 'show' class is added, expand the card */
        #advanced-search-card.show {
            opacity: 1;
            /* Visible */
            max-height: 500px;
            /* Adjust based on content size */
            transform: translateY(0);
            /* End position for animation */
            transition: opacity 0.5s ease, max-height 0.5s ease, transform 0.5s ease;
        }

        h1.display-4 {
            font-size: 3rem;
            /* Atur ukuran angka */
            font-weight: ;
            /* Buat angka lebih tebal */
            color: #000000;
            /* Warna teks */
        }

        /* Hover warna merah pada nav-link */
        #mainNav .navbar-nav .nav-link:hover {
            color: rgb(213, 0, 0) !important;
            /* Hanya untuk navbar dengan ID mainNav */
        }

        /* Dropdown dengan efek fade dan transisi */
        .navbar-nav .dropdown:hover .dropdown-menu {
            display: block !important;
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
            /* Kembali ke posisi normal */
            transition: opacity 0.3s ease, transform 0.5s ease;
            /* Efek fade dan slide */
        }

        /* Awal dropdown - sembunyikan dengan opacity */
        .navbar-nav .dropdown-menu {
            display: block;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            /* Geser sedikit ke atas */
            transition: opacity 0.3s ease, transform 0.3s ease;
            /* Efek fade dan slide */
        }

        /* Hover warna untuk item dropdown */
        .dropdown-item:hover {
            background-color: #f6f6f6;
            /* Warna merah muda */
            color: #721c24;
            /* Teks merah */
        }

        .dropdown-item i {
            width: 20px;
            /* Pastikan lebar tetap untuk semua ikon */
            text-align: center;
            /* Ikon berada di tengah */
            font-size: 12px;
            /* Ukuran ikon seragam */
            color: #000000;
            /* Warna ikon (opsional) */
        }

        .dropdown-item {
            display: flex;
            align-items: center;
            font-size: 14px;
            /* Vertikal rata tengah antara ikon dan teks */
        }


        /* Hilangkan tanda panah dropdown */
        .nav-link.dropdown-toggle::after {
            content: none;
        }

        .pagination .page-link {
            border: none;
            /* Hilangkan border */
            color: #343a40;
            /* Warna teks hitam */
            font-size: 1.1rem;
            padding: 10px 15px;
            /* Atur jarak agar hover bulat sempurna */
            margin: 0 5px;
            /* Beri jarak antar item */
            transition: all 0.3s ease;
            border-radius: 50%;
            /* Awalnya tetap bulat */
        }

        .pagination .page-item.active .page-link {
            font-weight: bold;
            color: #000000;
            /* Warna merah untuk halaman aktif */
        }

        .pagination .page-link:hover {
            background-color: #000;
            /* Warna hover hitam */
            color: white;
            border-radius: 50%;
            /* Buat bulat sempurna */
            transform: scale(1.1);
        }

        .pagination .page-item.disabled .page-link {
            color: #ccc;
            cursor: not-allowed;
        }
    </style>
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 navbar-transparent" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="{{ route('peraturan') }}">
                <span style="display: block;">INTERNAL AUDIT</span>
                <span style="display: block;">DOCS.</span>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <!-- Dropdown 1 -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="internalDeptDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            INTERNAL DEPARTEMEN
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="internalDeptDropdown">
                            <li><a class="dropdown-item" href="{{ route('suratmasuk') }}"><i
                                        class="fas fa-envelope me-3"></i>Surat Masuk</a></li>
                            <li><a class="dropdown-item" href="{{ route('suratkeluar') }}"><i
                                        class="fas fa-paper-plane me-3"></i>Surat Keluar</a></li>
                            <li><a class="dropdown-item" href="{{ route('surattugas') }}"><i
                                        class="fas fa-briefcase me-3"></i>Surat Tugas Internal Audit</a></li>
                            <li><a class="dropdown-item" href="{{ route('laporanhasilaudit') }}"><i
                                        class="fas fa-file-alt me-3"></i>Laporan Hasil Audit</a></li>
                            <li><a class="dropdown-item" href="{{ route('kertaskerja') }}"><i
                                        class="fas fa-clipboard me-3"></i>Kertas Kerja Audit</a></li>
                            <li><a class="dropdown-item" href="{{ route('beritaacara') }}"><i
                                        class="fas fa-file-signature me-3"></i>Berita Acara</a></li>
                            <li><a class="dropdown-item" href="{{ route('mom') }}"><i
                                        class="fas fa-handshake me-3"></i>Minutes Of Meeting</a></li>
                            <li><a class="dropdown-item" href="{{ route('monitoring') }}"><i
                                        class="fas fa-chart-line me-3"></i>Monitoring</a></li>
                        </ul>
                    </li>
                    <!-- Dropdown 2 -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="internalCompanyDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            INTERNAL PERUSAHAAN
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="internalCompanyDropdown">
                            <li><a class="dropdown-item" href="{{ route('search') }}"><i
                                        class="fas fa-gavel me-3"></i>Peraturan Perusahaan</a></li>
                            <li><a class="dropdown-item" href="{{ route('searchdireksi') }}"><i
                                        class="fas fa-balance-scale me-3"></i>Peraturan Direksi</a></li>
                            <li><a class="dropdown-item" href="{{ route('suratketerangandireksi') }}"><i
                                        class="fas fa-file-signature me-3"></i>Surat Keterangan Direksi</a></li>
                            <li><a class="dropdown-item" href="{{ route('surattugas') }}"><i
                                        class="fas fa-clipboard me-3"></i>Surat Tugas</a></li>
                        </ul>
                    </li>
                    <!-- Dropdown 3 -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="externalDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            EKSTERNAL
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="externalDropdown">
                            <li><a class="dropdown-item" href="{{ route('searchdaerah') }}"><i
                                        class="fas fa-landmark me-3"></i>Peraturan Daerah</a></li>
                            <li><a class="dropdown-item" href="{{ route('searchmenteri') }}"><i
                                        class="fas fa-gavel me-3"></i>Peraturan Menteri</a></li>
                            <li><a class="dropdown-item" href="{{ route('searchpresiden') }}"><i
                                        class="fas fa-briefcase me-3"></i>Peraturan Presiden</a></li>
                            <li><a class="dropdown-item" href="{{ route('searchinternasional') }}"><i
                                        class="fas fa-globe me-3"></i>Peraturan Internasional</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page header with logo and tagline -->
    <header class="py-5 bg-dark border-bottom mb-2">
        <div class="container mb-4">
            <div class="text-start text-light my-3 mt-5 position-relative">
                <br>
                <h1 class="fw-bolder mt-2">Cari Kertas Kerja, Secepat-cepatnya!</h1>
                <p>Website yang membantu menyimpan Kertas Kerja kamu!</p>
            </div>
        </div>
    </header>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-start mt-0">
            <div class="col-12 mb-4 d-flex justify-content-between align-items-center">
                <a href="#" id="tambahKertasKerja" class="btn border border-dark"
                    style="color: #1B56FD">Tambah Kertas Kerja</a>
            </div>
        </div>
        <div class="row mt-5">
            @if ($kertas_kerja->isNotEmpty())
                @foreach ($kertas_kerja as $item)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 shadow-md border-0 rounded-4 overflow-hidden position-relative">
                            <div
                                class="position-absolute top-0 start-50 translate-middle-x badge bg-dark text-white px-3 py-2 rounded-bottom">
                                {{ $item->tahun }}
                            </div>
                            <div class="card-body text-center d-flex flex-column">
                                <h5 class="card-title fw-bold text-dark">Penugasan</h5>
                                <p class="text-muted small">{{ $item->deskripsi }}</p>
                                <div class="mt-auto">
                                    <a href="/detailkertaskerja/{{ $item->id }}"
                                        class="btn btn-dark btn-sm w-100 d-flex align-items-center justify-content-center">
                                        <i class="fas fa-search me-2"></i> Lihat Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12 text-center">
                    <div class="alert alert-info" role="alert">
                        <span class="text-danger">Tidak ada Kertas Kerja yang ditemukan.</span>
                    </div>
                </div>
            @endif
        </div>
    </div>


    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 30px 30px rgba(0, 0, 0, 0.15);
        }

        .badge {
            font-size: 0.75rem;
        }

        .card-body {
            padding-top: 2.5rem;
            /* Tambahkan padding atas */
        }
    </style>


    <!-- Footer-->
    <footer class="text-white text-center text-lg-start" style="background-color: #000000;">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row mt-4">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">About Us</h5>

                    <p> Internal Audit KCIC adalah bagian yang berfokus pada evaluasi dan peningkatan efektivitas
                        proses manajemen risiko, kontrol, serta tata kelola di perusahaan. </p>
                    <p> Dengan pendekatan independen dan profesional, kami memastikan standar kualitas
                        dan integritas perusahaan tetap terjaga. </p>

                    <div class="mt-4 mb-5">
                        <!-- Facebook -->
                        <a type="button" class="btn btn-outline-light btn-lg me-3"><i
                                class="bi bi-facebook"></i></a>
                        <!-- Dribbble -->
                        <a type="button" class="btn btn-outline-light btn-lg me-3"><i
                                class="bi bi-instagram"></i></a>
                        <!-- Twitter -->
                        <a type="button" class="btn btn-outline-light btn-lg me-3"><i class="bi bi-twitter"></i></a>
                        <!-- Google + -->
                        <a type="button" class="btn btn-outline-light btn-lg me-3"><i
                                class="bi bi-linkedin"></i></a>
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4 text-center">contact us</h5>
                    <ul class="fa-ul" style="margin-left: 1.65em;">
                        <li class="mb-3">
                            <span class="fa-li"><i class="bi bi-house"></i></span><span class="ms-2">Jalan Tol
                                Jakarta - Cikampek KM 0, Makasar, Jakarta Timur, DKJ, Indonesia</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="bi bi-envelope"></i></span><span
                                class="ms-2">internalaudit@kcic.co.id</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="bi bi-telephone"></i></span><span class="ms-2">0812 3456
                                7899</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="bi bi-telephone"></i></span><span class="ms-2">0888 7654
                                7342</span>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-3 text-center">Office Hours</h5>

                    <table class="table">
                        <tbody class="font-weight-normal">
                            <tr>
                                <td style="color: white;">Monday - Friday</td>
                                <td style="color: white;">09:00 - 18:00</td>
                            </tr>
                            <tr>
                                <td style="color: white;">Saturday</td>
                                <td style="color: white;">Off</td>
                            </tr>
                            <tr>
                                <td style="color: white;">Sunday</td>
                                <td style="color: white;">Off</td>
                            </tr>
                            <tr>
                                <td style="color: white;">Public Holiday</td>
                                <td style="color: white;">Off</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(255, 0, 0, 0.537);">
            ©
            <a class="text-white" style="text-decoration: none;">2024 IA PT KCIC, All Right Reserved</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script>
        document.getElementById('toggle-advanced-search').addEventListener('click', function() {
            var advancedSearchCard = document.getElementById('advanced-search-card');
            advancedSearchCard.classList.toggle('show');
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navbar = document.getElementById("mainNav");

            function updateNavbar() {
                if (window.scrollY > 0) { // Jika scroll lebih dari 0
                    navbar.classList.remove("navbar-transparent");
                    navbar.classList.add("navbar-white");
                } else { // Jika di posisi paling atas
                    navbar.classList.remove("navbar-white");
                    navbar.classList.add("navbar-transparent");
                }
            }

            // Set initial state saat halaman dimuat
            updateNavbar();

            // Update navbar setiap kali scroll
            window.addEventListener("scroll", updateNavbar);
        });
    </script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('custom/js/kertaskerja.js') }}"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @elseif(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ session('error') }}',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif
</body>

</html>
