<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Official - Internal Audit KCIC</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="landing-page/assets/favicon.ico" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="dashboard-internal/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('landing-page/css/styles.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Set main and header to minimum height of 100vh to fill the viewport */
        main,
        header {
            min-height: 100vh;
            position: relative;
        }

        /* Center content vertically and horizontally */
        header {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Video container styling within main */
        .video-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        /* Video style for full coverage */
        .video-container video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Overlay to make text more readable */
        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        /* Ensure main content text appears above the video */
        main .container {
            position: relative;
            z-index: 1;
        }

        /* Navbar transparan */
        .navbar-transparent {
            background-color: transparent !important;
            color: white !important;
        }

        .navbar-transparent .navbar-brand,
        .navbar-transparent .nav-link,
        .navbar-transparent .navbar-toggler-icon {
            color: white !important;
        }

        /* Tombol Login jadi btn-outline-light pas navbar transparan */
        .navbar-transparent .btn-login {
            background-color: transparent !important;
            border: 1px solid white !important;
            color: white !important;
        }

        /* Tombol Login balik ke btn-danger saat di luar area video */
        .btn-login {
            background-color: #dc3545 !important;
            /* Warna merah */
            border: 1px solid #dc3545 !important;
            color: white !important;
        }

        /* Logo dan teks Internal Audit */
        .navbar-transparent .navbar-brand,
        .navbar-transparent .navbar-brand span {
            color: white !important;
            /* Ubah jadi putih saat navbar transparan */
        }

        /* Saat navbar normal, logo dan teks kembali ke warna semula */
        .navbar .navbar-brand,
        .navbar .navbar-brand span {
            color: #000 !important;
            /* Ganti ke warna hitam atau warna yang lo mau */
        }

        .navbar .navbar-brand .text-danger {
            color: #dc3545 !important;
            /* Warna merah */
        }

        /* Teks "Internal" warna hitam di navbar */
        .navbar .navbar-brand #internal-text {
            color: #000 !important;
            /* Warna hitam */
        }

        /* Teks "Internal" warna putih saat navbar transparan */
        .navbar-transparent .navbar-brand #internal-text {
            color: white !important;
            /* Warna putih */
        }

        /* Teks "Audit" warna hitam di navbar */
        .navbar .navbar-brand #audit-text {
            color: #dc3545 !important;
            /* Warna merah */
        }

        /* Teks "Audit" warna putih saat navbar transparan */
        .navbar-transparent .navbar-brand #audit-text {
            color: white !important;
            /* Warna putih */
        }

        html,
        body {
            height: 100%;
            /* Memastikan body memenuhi tinggi layar */
            margin: 0;
            /* Menghilangkan margin default */
        }

        body {
            display: flex;
            flex-direction: column;
            /* Atur konten untuk ditata dalam kolom */
            min-height: 100vh;
            /* Memastikan body mengisi seluruh tinggi layar */
        }

        .uniform-card {
            height: 100%;
            /* Membuat tinggi card seragam */
            max-width: 300px;
        }

        .uniform-image {
            width: 80%;
            /* Ukuran gambar seragam */
            height: auto;
            max-height: 150px;
            /* Membatasi tinggi maksimal gambar */
            object-fit: contain;
            /* Menjaga rasio gambar */
        }

        .uniform-card .card-body {
            min-height: 200px;
            /* Pastikan tinggi area konten seragam */
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* Konten disejajarkan vertikal */
            align-items: center;
            /* Konten disejajarkan horizontal */
        }

        .text-aligner {
            margin-top: auto;
            /* Posisi heading tetap di bawah jika diperlukan */
        }

        .biro-members {
            margin-top: 20px;
        }

        /* Efek hover untuk card */
        .tab-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .tab-card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
        }

        /* Animasi garis merah di bawah teks */
        .tab-card .card-title {
            position: relative;
            display: inline-block;
        }

        .tab-card .card-title::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            width: 0;
            height: 2px;
            background-color: #dc3545;
            transition: width 0.3s ease, left 0.3s ease;
        }

        .tab-card.active .card-title::after {
            width: 100%;
            left: 0;
        }

        /* Tambahkan margin untuk memberi ruang antara garis dan teks */
        .text-aligner {
            margin-bottom: 10px;
        }
    </style>
</head>

<body class="d-flex flex-column h-100">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold d-flex align-items-center" href="#page-top">
                {{-- <img src="{{ asset('landing-page/assets/img/perisai.png') }}" alt="Logo Perisai" class="me-2" style="height: 30px; width: auto;"> --}}
                <span id="internal-text">Internal</span>
                <span class="text-danger" id="audit-text" style="margin-left: 5px;">Audit</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('landingpage') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('beranda') }}">Structure</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-1" href="">Document</a></li>
                    {{-- <li class="nav-item"><a class="nav-link me-lg-3" href="">Contact</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="">Gallery</a></li> --}}
                </ul>
                <a class="btn btn-danger rounded-pill px-3 mb-2 mb-lg-0 btn-login" data-bs-toggle="modal"
                    data-bs-target="#feedbackModal">
                    <span class="d-flex align-items-center">
                        <i class="bi-person-fill me-2"></i>
                        <span class="small">Contact Us</span>
                    </span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Main content with video background -->
    <main class="flex-shrink-0">
        <div class="video-container">
            <video autoplay loop>
                <source src="{{ asset('video/whoosh.m4v') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-overlay"></div>
        </div>

        <!-- Header centered content -->
        <header class="py-5" data-aos="fade" data-aos-duration="1500" data-aos-delay="500">
            <div class="container text-start">
                <div class="badge bg-light text-dark mb-4">
                    <div class="text-uppercase">&nbsp;&middot; PT Kereta Cepat Indonesia China &middot;&nbsp;</div>
                </div>
                <div class="fs-3 fw-light text-white">Departemen</div>
                <h1 class="display-2 fw-bolder mb-3">
                    <span class="text-white d-inline">Internal Audit</span>
                </h1>
                <p class="text-white mb-4" style="font-size: 1.1rem; max-width: 800px;">
                    Kami memastikan pelaksanaan proses dan prosedur perusahaan berjalan efektif, efisien, dan
                    sesuai kebijakan, guna mendukung transparansi, integritas, serta akuntabilitas dalam
                    mencapai tujuan strategis perusahaan.
                </p>
                <div class="d-grid gap-3 d-sm-flex justify-content-sm-start justify-content-xxl-start mb-3">
                    <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="">
                        <i class="" style=""></i> Selengkapnya
                    </a>
                </div>
            </div>
        </header>

    </main>

    <div class="container my-5">

        <!-- Card General Manager -->
        <div class="row gx-4 mb-4 justify-content-center">
            <div class="col-md-4">
                <div class="card h-100 uniform-card" data-bs-toggle="modal" data-bs-target="#modalGM" style="border-left: 5px solid #dc3545;">
                    <div class="card-body text-center">
                        <img src="peraturan-media/assets/img/gm.svg" alt="General Manager Photo"
                            class="img-fluid mb-3 uniform-image">
                        <h4 class="card-title text-aligner">General Manager</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tiga Card untuk Biro Audit -->
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <!-- Card Audit 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 uniform-card" data-bs-toggle="modal" data-bs-target="#modalAudit1" style="border-left: 5px solid #dc3545;">
                    <div class="card-body text-center">
                        <img src="peraturan-media/assets/img/audit11.svg" alt="Manager Audit 1 Photo"
                            class="img-fluid mb-3 uniform-image">
                        <h4 class="card-title text-aligner">Biro Audit 1</h4>
                    </div>
                </div>
            </div>

            <!-- Card Audit 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 uniform-card" data-bs-toggle="modal" data-bs-target="#modalAudit2" style="border-left: 5px solid #dc3545;">
                    <div class="card-body text-center">
                        <img src="peraturan-media/assets/img/audit2.svg" alt="Manager Audit 2 Photo"
                            class="img-fluid mb-3 uniform-image">
                        <h4 class="card-title text-aligner">Biro Audit 2</h4>
                    </div>
                </div>
            </div>

            <!-- Card Audit 3 -->
            <div class="col-md-4 mb-4 ms-auto">
                <div class="card h-100 uniform-card" data-bs-toggle="modal" data-bs-target="#modalAudit3" style="border-left: 5px solid #dc3545;">
                    <div class="card-body text-center">
                        <img src="peraturan-media/assets/img/admin.svg" alt="Manager Audit 3 Photo"
                            class="img-fluid mb-3 uniform-image">
                        <h4 class="card-title text-aligner">Biro Program Administration Monitoring Evaluation</h4>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Include file modal -->
    @include('modals')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Footer -->
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
                                Jakarta - Cikampek KM 0, Makasar, Jakarta Timur, DKI Jakarta, Indonesia</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="bi bi-envelope"></i></span><span
                                class="ms-2">internalaudit@kcic.co.id</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="bi bi-phone"></i></span><span class="ms-2">0812 3456
                                7899</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="bi bi-phone"></i></span><span class="ms-2">0888 7654
                                7342</span>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-3 text-center">Office Hours</h5>

                    <table class="table text-center text-white">
                        <tbody class="font-weight-normal">
                            <tr>
                                <td>Monday - Friday</td>
                                <td>09:00 - 18:00</td>
                            </tr>
                            <tr>
                                <td>Saturday</td>
                                <td>Off</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td>Off</td>
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
            <a class="text-white" href="https://mdbootstrap.com/">2024 IA PT KCIC, All Right Reserved</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script>
        function showBiro(biroId, element) {
            // Sembunyikan semua anggota biro
            const members = document.querySelectorAll('.biro-members');
            members.forEach(member => {
                member.style.display = 'none';
            });

            // Tampilkan anggota biro yang dipilih
            const activeBiro = document.getElementById(biroId);
            if (activeBiro) {
                activeBiro.style.display = 'block';
            }

            // Tambah dan hapus kelas 'active' pada tab navigation
            const cards = document.querySelectorAll('.tab-card');
            cards.forEach(card => {
                card.classList.remove('active');
            });

            element.classList.add('active');
        }
    </script>
    <script>
        // Ambil element navbar, tombol login, dan teks "Internal" dan "Audit"
        const navbar = document.getElementById('mainNav');
        const loginButton = document.querySelector('.btn-login');
        const videoSection = document.querySelector('.video-container'); // Ambil video container
        const internalText = document.getElementById('internal-text'); // Ambil teks "Internal"
        const auditText = document.getElementById('audit-text'); // Ambil teks "Audit"

        // Fungsi buat cek posisi scroll dan ubah button serta teks
        function toggleNavbarTransparency() {
            if (window.scrollY < videoSection.offsetHeight) {
                // Kalo masih di atas video, navbar transparan dan tombol berubah
                navbar.classList.add('navbar-transparent');
                loginButton.classList.add('btn-outline-light');
                loginButton.classList.remove('btn-danger'); // Pastikan tombol jadi outline-light
                internalText.classList.remove('text-danger');
                internalText.classList.add('text-white'); // Teks "Internal" jadi putih
                auditText.classList.remove('text-danger');
                auditText.classList.add('text-white'); // Teks "Audit" jadi putih
            } else {
                // Kalo udah scroll abis video, navbar balik normal dan tombol balik ke btn-danger
                navbar.classList.remove('navbar-transparent');
                loginButton.classList.add('btn-danger');
                loginButton.classList.remove('btn-outline-light'); // Kembali ke btn-danger
                internalText.classList.remove('text-white');
                internalText.classList.add('text-danger'); // Teks "Internal" balik jadi merah
                auditText.classList.remove('text-white');
                auditText.classList.add('text-danger'); // Teks "Audit" balik jadi merah
            }
        }

        // Jalankan fungsi ini waktu scroll atau load page
        window.addEventListener('scroll', toggleNavbarTransparency);
        window.addEventListener('load', toggleNavbarTransparency);
    </script>

    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
