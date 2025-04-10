<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>IA DOCS. - Internal Audit KCIC</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
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


        .divider {
            border: 0;
            width: 100px;
            /* Panjang garis */
            height: 4px;
            /* Ketebalan garis */
            margin-top: 20px;
            /* Jarak atas */
            margin-left: 0;
            /* Untuk memastikan garis mulai dari kiri */
        }

        .semi-transparent {
            opacity: 0.5;
            /* Tingkat transparansi (0 = transparan penuh, 1 = tidak transparan) */
            transition: opacity 0.3s ease;
            /* Menambahkan efek transisi */
        }

        .semi-transparent:hover {
            opacity: 1;
            /* Ikon akan kembali terlihat jelas saat di-hover */
        }

        .divider-white {
            border: 0;
            height: 2px;
            /* Ketebalan garis */
            background-color: white;
            /* Warna garis */
            width: 50%;
            /* Lebar garis, sesuaikan dengan kebutuhan */
            margin: 0.5rem auto;
            /* Memberi jarak dan memusatkan garis */
        }

        .custom-size {
            padding: 15px 30px;
            /* Menambah padding untuk memperbesar tombol */
            font-size: 14px;
            /* Pastikan ukuran font tetap kecil */
        }

        /* Efek hover untuk card */
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            /* Mengangkat card sedikit ke atas */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            /* Efek bayangan untuk kesan timbul */
        }

        .tab-pane {
            display: none;
            /* Default sembunyikan semua tab */
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .tab-pane.active {
            display: block;
            /* Tampilkan hanya tab aktif */
        }

        .tab-pane.show.fade-in {
            opacity: 1;
            transform: translateY(0);
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

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .col-md-3 {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .card-body {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        #custom-card-hukum {
            border: 1px solid #5f5f5f;
            /* Border kiri tebal warna merah */
            border-radius: 50px;
            /* Membuat sudut agak melengkung */
            padding: 10px;
            /* Memberikan jarak di dalam card */
            background-color: #fff;
            /* Memberikan latar belakang putih */
            display: flex;
            align-items: center;
            /* Menjaga elemen tetap rata tengah secara vertikal */
        }

        #custom-card-hukum .card-body {
            display: flex;
            flex-direction: row;
            /* Mengatur elemen secara horizontal */
            align-items: center;
            /* Rata tengah secara vertikal */
        }

        #custom-card-hukum .card-body {
            margin-right: 10px;
            /* Memberikan jarak antara ikon dan teks */
        }

        #custom-card-hukum .card-body .card-text {
            margin: 0;
            /* Menghapus margin default pada <p> */
        }

        .masthead h1 {
            font-size: 2rem;
            /* Ukuran teks h1 */
        }

        .masthead p {
            font-size: 3rem;
            /* Ukuran teks paragraf */
        }
    </style>
</head>

<body id="page-top">
    <!-- Background Music -->
    <audio id="background-audio" controls hidden autoplay>
        <source src="{{ asset('music/background.mp3') }}" type="audio/mp3">
        Browser Anda tidak mendukung tag audio.
    </audio>
    <!-- Navigation-->
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
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content text-start">
                <div class="col-lg-7 align-self-end">
                    <h1 class="text-white font-weight-bold">
                        <strong>INTERNAL AUDIT DOCS.</strong>
                    </h1>
                    <div class="divider bg-light mb-4"></div>
                </div>
                <div class="col-lg-7 align-self-baseline">
                    <p class="text-white mb-4" style="font-size: 1rem;">Temukan dokumen dan informasi hukum berupa
                        Peraturan, Putusan, Artikel,
                        Kajian Hukum dan dokumen lainnya di bidang Internal Audit, Internal maupun External.</p>
                    <a class="btn btn-outline-light btn-xl mb-5" href="{{ route('search') }}">
                        Jelajahi Sekarang <i class="fas fa-search ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- About-->
    <section class="page-section bg-dark" id="about">
        <div class="container px-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <!-- Card 1 -->
                <div class="col-lg-3 col-md-6 text-center border-end border-light">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-file-alt fa-3x text-white me-1 semi-transparent"></i>
                        <div>
                            <h2 class="text-white mb-0"><strong class="count" data-target="120">0</strong></h2>
                            <hr class="divider-white" />
                            <h5 class="text-white">Dokumen HUIA</h5>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-lg-3 col-md-6 text-center border-end border-light">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-envelope fa-3x text-white me-2 semi-transparent"></i>
                        <div>
                            <h2 class="text-white mb-0"><strong class="count" data-target="85">0</strong></h2>
                            <hr class="divider-white" />
                            <h5 class="text-white">Dokumen HUIB</h5>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-lg-3 col-md-6 text-center border-end border-light">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-users fa-3x text-white me-2 semi-transparent"></i>
                        <div>
                            <h2 class="text-white mb-0 mt-1"><strong class="count" data-target="45">0</strong></h2>
                            <hr class="divider-white" />
                            <h5 class="text-white">Dokumen HUIC</h5>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-folder-open fa-3x text-white me-2 semi-transparent"></i>
                        <div>
                            <h2 class="text-white mb-0"><strong class="count" data-target="30">0</strong></h2>
                            <hr class="divider-white" />
                            <h5 class="text-white">Dokumen HUIP</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <!-- Heading -->
            <h2 class="text-center mt-4">
                <span class="text-dark">Highlight</span>
                <span class="text-dark">Dokumen</span>
            </h2>
            <hr class="divider bg-dark" />

            <!-- Deskripsi -->
            <p class="text-center text-muted mb-4">Pilih antara Internal Departemen, Perusahaan atau Eksternal untuk
                melihat dokumen.</p>

            <!-- Tab Navigation (Internal and External) -->
            <div class="text-center mb-5">
                <button class="btn btn-outline-dark me-2" id="internaldeptTab" onclick="showTab('internaldept')">
                    <i class="fas fa-folder-open fs-5 me-2"></i>&nbsp;Dokumen Internal Departemen
                </button>
                <button class="btn btn-outline-dark me-2" id="internalperuTab" onclick="showTab('internalperu')">
                    <i class="fas fa-building fs-5 me-2"></i>&nbsp;Dokumen Internal Perusahaan
                </button>
                <button class="btn btn-outline-dark" id="externalTab" onclick="showTab('external')">
                    <i class="fas fa-external-link-alt fs-5 me-2"></i>&nbsp;Dokumen Eksternal
                </button>
            </div>

            <!-- Card Containers -->
            <div class="tab-content">
                <!-- Internal Department Tab Content -->
                <div class="tab-pane fade" id="internaldept" role="tabpanel">
                    <div class="row gx-4 gx-lg-5">
                        <div class="row">
                            <!-- Card 1: Dokumen Internal Audit 1 -->
                            <div class="col-md-3 mb-4">
                                <div class="card" style="border-left: 5px solid #000000;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <p class="card-date text-muted mb-0">19 Nov 2024</p>
                                            <span class="badge bg-success">Berlaku</span>
                                        </div>
                                        <h5 class="card-title"><strong>Pedoman Audit Internal Keuangan</strong>
                                        </h5>
                                        <p class="card-text">Mengatur prosedur audit keuangan internal perusahaan,
                                            termasuk pemeriksaan laporan keuangan dan evaluasi pengendalian internal.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2: Dokumen Internal Audit 2 -->
                            <div class="col-md-3 mb-4">
                                <div class="card" style="border-left: 5px solid #000000;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <p class="card-date text-muted mb-0">22 Nov 2024</p>
                                            <span class="badge bg-success">Berlaku</span>
                                        </div>
                                        <h5 class="card-title"><strong>Audit Kepatuhan Regulasi Internal</strong></h5>
                                        <p class="card-text">Menyusun kebijakan audit kepatuhan terhadap regulasi untuk
                                            memastikan operasional mematuhi hukum..</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3: Dokumen Internal Audit 3 -->
                            <div class="col-md-3 mb-4">
                                <div class="card" style="border-left: 5px solid #000000;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <p class="card-date text-muted mb-0">26 Nov 2024</p>
                                            <span class="badge bg-success">Berlaku</span>
                                        </div>
                                        <h5 class="card-title"><strong>Audit Sistem Pengendalian Internal</strong></h5>
                                        <p class="card-text">Menganalisis efektivitas pengendalian internal di
                                            departemen, termasuk sistem IT, untuk deteksi risiko.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 4: Dokumen Internal Audit 4 -->
                            <div class="col-md-3 mb-4">
                                <div class="card" style="border-left: 5px solid #000000;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <p class="card-date text-muted mb-0">12 Nov 2024</p>
                                            <span class="badge bg-danger">Kadaluarsa</span>
                                        </div>
                                        <h5 class="card-title"><strong>Pedoman Pengelolaan Audit Internal
                                                Perusahaan</strong></h5>
                                        <p class="card-text">Mengatur prosedur pengelolaan audit internal, termasuk
                                            penugasan auditor dan pelaporan hasil audit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <button class="btn btn-dark btn-lg custom-size">Telusuri Lebih Lanjut</button>
                        </div>
                    </div>
                </div>

                <!-- Internal Perusahaan Tab Content -->
                <div class="tab-pane fade" id="internalperu" role="tabpanel">
                    <div class="row gx-4 gx-lg-5">
                        <div class="row">
                            <!-- Card 1 -->
                            <div class="col-md-3 mb-4">
                                <div class="card" style="border-left: 5px solid #000000;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <p class="card-date text-muted mb-0">19 Nov 2024</p>
                                            <span class="badge bg-success">Berlaku</span>
                                        </div>
                                        <h5 class="card-title"><strong>Pedoman Kebijakan Internal Perusahaan No. 1
                                                Tahun 2024</strong></h5>
                                        <p class="card-text">Mengatur kebijakan, prosedur, dan panduan operasional
                                            internal perusahaan secara efektif.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-md-3 mb-4">
                                <div class="card" style="border-left: 5px solid #000000;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <p class="card-date text-muted mb-0">22 Nov 2024</p>
                                            <span class="badge bg-success">Berlaku</span>
                                        </div>
                                        <h5 class="card-title"><strong>Pedoman Operasional dan Kebijakan No. 2 Tahun
                                                2024</strong></h5>
                                        <p class="card-text">Menyusun pedoman teknis dan kebijakan operasional yang
                                            mendukung kinerja perusahaan.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col-md-3 mb-4">
                                <div class="card" style="border-left: 5px solid #000000;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <p class="card-date text-muted mb-0">26 Nov 2024</p>
                                            <span class="badge bg-success">Berlaku</span>
                                        </div>
                                        <h5 class="card-title"><strong>Regulasi Internal untuk Implementasi Perusahaan
                                                No. 3 Tahun 2024</strong></h5>
                                        <p class="card-text">Memastikan implementasi kebijakan internal perusahaan
                                            dijalankan dengan efisien dan tepat.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="col-md-3 mb-4">
                                <div class="card" style="border-left: 5px solid #000000;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <p class="card-date text-muted mb-0">12 Nov 2024</p>
                                            <span class="badge bg-danger">Kadaluarsa</span>
                                        </div>
                                        <h5 class="card-title"><strong>Standar Operasional Internal Perusahaan No. 4
                                                Tahun 2024</strong></h5>
                                        <p class="card-text">Menjamin standar operasional internal perusahaan sesuai
                                            dengan regulasi yang berlaku saat ini.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <button class="btn btn-dark btn-lg custom-size">Telusuri Lebih Lanjut</button>
                        </div>
                    </div>
                </div>

                <!-- External Tab Content -->
                <div class="tab-pane fade" id="external" role="tabpanel">
                    <div class="row gx-4 gx-lg-5">
                        <div class="row">
                            <!-- Card 1 -->
                            <div class="col-md-3 mb-4">
                                <div class="card" style="border-left: 5px solid #000000;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <p class="card-date text-muted mb-0">12 Nov 2024</p>
                                            <span class="badge bg-success">Berlaku</span>
                                        </div>
                                        <h5 class="card-title"><strong>Peraturan Presiden No. 1 Tahun 2024</strong>
                                        </h5>
                                        <p class="card-text">Mengatur pedoman audit eksternal untuk mengevaluasi
                                            kinerja perusahaan sesuai regulasi.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-md-3 mb-4">
                                <div class="card" style="border-left: 5px solid #000000;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <p class="card-date text-muted mb-0">12 Nov 2024</p>
                                            <span class="badge bg-success">Berlaku</span>
                                        </div>
                                        <h5 class="card-title"><strong>Peraturan Menteri Keuangan No. 2 Tahun
                                                2024</strong></h5>
                                        <p class="card-text">Pedoman audit kepatuhan untuk memastikan perusahaan
                                            mematuhi hukum yang berlaku.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col-md-3 mb-4">
                                <div class="card" style="border-left: 5px solid #000000;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <p class="card-date text-muted mb-0">12 Nov 2024</p>
                                            <span class="badge bg-danger">Kadaluarsa</span>
                                        </div>
                                        <h5 class="card-title"><strong>Peraturan Menteri Dalam Negeri No. 3 Tahun
                                                2024</strong></h5>
                                        <p class="card-text">Menetapkan pedoman audit untuk mengelola risiko dan
                                            pengendalian internal perusahaan.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="col-md-3 mb-4">
                                <div class="card" style="border-left: 5px solid #000000;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <p class="card-date text-muted mb-0">12 Nov 2024</p>
                                            <span class="badge bg-danger">Kadaluarsa</span>
                                        </div>
                                        <h5 class="card-title"><strong>Peraturan OJK No. 4 Tahun 2024</strong></h5>
                                        <p class="card-text">Mengatur pedoman audit terhadap prosedur perusahaan untuk
                                            memastikan kepatuhan regulasi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <button class="btn btn-dark btn-lg custom-size">Telusuri Lebih Lanjut</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <!-- Heading -->
            <h2 class="text-center mt-1">
                <span class="text-dark">Dokumen</span>
                <span class="text-dark">Biro Terkait</span>
            </h2>
            {{-- <hr class="divider bg-dark" /> --}}

            <!-- Deskripsi -->
            <p class="text-center text-muted mb-4">
                Dokumen Terkait Biro Audit 1, 2, dan Program, Administration, Monitoring, and Evaluation
            </p>
            <hr class="divider bg-dark" />

            <!-- Card Section -->
            <div class="row text-center">
                <!-- Card 1 -->
                <div class="col-md-4 mb-0">
                    <div class="card h-100 d-flex flex-column" style="border-left: 5px solid #000000;">
                        <div class="card-body mb-auto">
                            <div class="text-center">
                                <img src="peraturan-media/assets/img/audit11.svg" alt="Audit 2"
                                    class="img-fluid mb-2 mt-2" style="max-height: 150px;">
                            </div>
                            <hr />
                            <h5 class="card-title text-dark">Audit 1</h5>
                            <hr />
                            <p class="card-text">Informasi terkait peraturan di bidang Audit 1 yang relevan dengan
                                kebutuhan.</p>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="#" class="btn btn-dark mb-2" style="width: 80%">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-0">
                    <div class="card h-100 d-flex flex-column" style="border-left: 5px solid #000000;">
                        <div class="card-body mb-auto">
                            <!-- Gambar di atas hr dan h5 -->
                            <div class="text-center">
                                <img src="peraturan-media/assets/img/audit2.svg" alt="Audit 2"
                                    class="img-fluid mb-2 mt-2" style="max-height: 150px;">
                            </div>
                            <hr />
                            <h5 class="card-title text-dark">Audit 2</h5>
                            <hr />
                            <p class="card-text">Berbagai peraturan yang berhubungan dengan aktivitas Biro Audit 2,
                                mencakup proses pelaporan.</p>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="#" class="btn btn-dark mb-2" style="width: 80%">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-0">
                    <div class="card h-100 d-flex flex-column" style="border-left: 5px solid #000000;">
                        <div class="card-body mb-auto">
                            <div class="text-center">
                                <img src="peraturan-media/assets/img/admin.svg" alt="Audit 2"
                                    class="img-fluid mb-2 mt-2" style="max-height: 150px;">
                            </div>
                            <hr />
                            <h5 class="card-title text-dark">Program, Administration, Monitoring & Evaluation</h5>
                            <hr />
                            <p class="card-text">Peraturan yang mendukung program monitoring dan evaluasi perusahaan
                                untuk kemajuan operasional.</p>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="#" class="btn btn-dark mb-2" style="width: 80%">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <!-- Heading -->
            <h2 class="text-center mt-0">
                <span class="text-dark">Kategori</span>
                <span class="text-dark">Dokumen</span>
            </h2>
            <hr class="divider bg-dark" />

            <!-- Deskripsi -->
            <p class="text-center text-muted mb-5">Silahkan Pilih Tematik terkait dengan Dokumen yang Anda Cari</p>

            <!-- Card Containers -->
            <div class="row gx-4 gx-lg-5">
                <!-- Card 1 -->
                <div class="col-md-3 mb-4">
                    <div class="card" id="custom-card-hukum">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <i class="fas fa-balance-scale"
                                style="font-size: 2rem; color: #000000; margin-right: 10px;"></i>
                            <p class="card-text mb-0"><strong>Hukum</strong></p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-3 mb-4">
                    <div class="card" id="custom-card-hukum">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <i class="fas fa-users" style="font-size: 2rem; color: #000000; margin-right: 10px;"></i>
                            <p class="card-text mb-0"><strong>SDM</strong></p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-3 mb-4">
                    <div class="card" id="custom-card-hukum">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <i class="fas fa-chart-line"
                                style="font-size: 2rem; color: #000000; margin-right: 10px;"></i>
                            <p class="card-text mb-0"><strong>Keuangan</strong></p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-3 mb-4">
                    <div class="card" id="custom-card-hukum">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <i class="fas fa-building"
                                style="font-size: 2rem; color: #000000; margin-right: 10px;"></i>
                            <p class="card-text mb-0"><strong>Proyek</strong></p>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-md-3 mb-4">
                    <div class="card" id="custom-card-hukum">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <i class="fas fa-shield-alt"
                                style="font-size: 2rem; color: #000000; margin-right: 10px;"></i>
                            <p class="card-text mb-0"><strong>Keamanan</strong></p>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-md-3 mb-4">
                    <div class="card" id="custom-card-hukum">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <i class="fas fa-globe" style="font-size: 2rem; color: #000000; margin-right: 10px;"></i>
                            <p class="card-text mb-0"><strong>Lingkungan</strong></p>
                        </div>
                    </div>
                </div>

                <!-- Card 7 -->
                <div class="col-md-3 mb-4">
                    <div class="card" id="custom-card-hukum">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <i class="fas fa-file-signature"
                                style="font-size: 2rem; color: #000000; margin-right: 10px;"></i>
                            <p class="card-text mb-0"><strong>Kebijakan</strong></p>
                        </div>
                    </div>
                </div>

                <!-- Card 8 -->
                <div class="col-md-3 mb-4">
                    <div class="card" id="custom-card-hukum">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <i class="fas fa-handshake"
                                style="font-size: 2rem; color: #000000; margin-right: 10px;"></i>
                            <p class="card-text mb-0"><strong>Kerjasama</strong></p>
                        </div>
                    </div>
                </div>

                <!-- Card 9 -->
                <div class="col-md-3 mb-4">
                    <div class="card" id="custom-card-hukum">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <i class="fas fa-rocket" style="font-size: 2rem; color: #000000; margin-right: 10px;"></i>
                            <p class="card-text mb-0"><strong>Inovasi</strong></p>
                        </div>
                    </div>
                </div>

                <!-- Card 10 -->
                <div class="col-md-3 mb-4">
                    <div class="card" id="custom-card-hukum">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <i class="fas fa-clipboard-check"
                                style="font-size: 2rem; color: #000000; margin-right: 10px;"></i>
                            <p class="card-text mb-0"><strong>Audit</strong></p>
                        </div>
                    </div>
                </div>

                <!-- Card 11 -->
                <div class="col-md-3 mb-4">
                    <div class="card" id="custom-card-hukum">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <i class="fas fa-cogs" style="font-size: 2rem; color: #000000; margin-right: 10px;"></i>
                            <p class="card-text mb-0"><strong>Operasional</strong></p>
                        </div>
                    </div>
                </div>

                <!-- Card 12 -->
                <div class="col-md-3 mb-4">
                    <div class="card" id="custom-card-hukum">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <i class="fas fa-chart-pie"
                                style="font-size: 2rem; color: #000000; margin-right: 10px;"></i>
                            <p class="card-text mb-0"><strong>Statistik</strong></p>
                        </div>
                    </div>
                </div>

                <!-- Card 13 -->
                <div class="col-md-3 mb-4">
                    <div class="card" id="custom-card-hukum">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <i class="fas fa-lightbulb"
                                style="font-size: 2rem; color: #000000; margin-right: 10px;"></i>
                            <p class="card-text mb-0"><strong>Ide</strong></p>
                        </div>
                    </div>
                </div>

                <!-- Card 14 -->
                <div class="col-md-3 mb-4">
                    <div class="card" id="custom-card-hukum">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <i class="fas fa-user-shield"
                                style="font-size: 2rem; color: #000000; margin-right: 10px;"></i>
                            <p class="card-text mb-0"><strong>Privasi</strong></p>
                        </div>
                    </div>
                </div>

                <!-- Card 15 -->
                <div class="col-md-3 mb-4">
                    <div class="card" id="custom-card-hukum">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <i class="fas fa-network-wired"
                                style="font-size: 2rem; color: #000000; margin-right: 10px;"></i>
                            <p class="card-text mb-0"><strong>Jaringan</strong></p>
                        </div>
                    </div>
                </div>

                <!-- Card 16 -->
                <div class="col-md-3 mb-4">
                    <div class="card" id="custom-card-hukum">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <i class="fas fa-tools" style="font-size: 2rem; color: #000000; margin-right: 10px;"></i>
                            <p class="card-text mb-0"><strong>Teknologi</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
        document.addEventListener("DOMContentLoaded", function() {
            const counters = document.querySelectorAll('.count');
            const speed = 100; // Adjust speed as needed

            const countUp = (counter) => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(() => countUp(counter), 20);
                } else {
                    counter.innerText = target;
                }
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        countUp(counter);
                        observer.unobserve(counter); // Stop observing once counted
                    }
                });
            });

            counters.forEach(counter => {
                observer.observe(counter);
            });
        });
    </script>
    <!-- Script to handle tab switching -->
    <script>
        function showTab(tabName) {
            // Hide all tab content
            document.querySelectorAll('.tab-pane').forEach(function(tab) {
                tab.classList.remove('show', 'active', 'fade-in'); // Reset semua tab
            });

            // Get selected tab
            const selectedTab = document.getElementById(tabName);

            // Tambahkan efek transisi
            selectedTab.classList.add('active'); // Aktifkan tab
            setTimeout(() => {
                selectedTab.classList.add('show', 'fade-in'); // Tambahkan animasi
            }, 10);

            // Change button styles based on the selected tab
            const buttons = ['internaldeptTab', 'internalperuTab', 'externalTab'];

            buttons.forEach(buttonId => {
                document.getElementById(buttonId).classList.remove('active');
            });

            if (tabName === 'internaldept') {
                document.getElementById('internaldeptTab').classList.add('active');
            } else if (tabName === 'internalperu') {
                document.getElementById('internalperuTab').classList.add('active');
            } else if (tabName === 'external') {
                document.getElementById('externalTab').classList.add('active');
            }
        }

        // Default show Dokumen Internal Departemen tab saat halaman load
        document.addEventListener("DOMContentLoaded", function() {
            showTab('internaldept');
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
