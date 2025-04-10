<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>JDIH - Internal Audit KCIC</title>
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
            color: #000000;
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

        .custom-card {
            background-color: #fff;
            /* Warna latar belakang putih seperti card default */
            border: 1px solid #ddd;
            /* Border abu-abu lembut */
            border-radius: 0.25rem;
            /* Membuat sudut melengkung */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Efek bayangan awal */
            padding: 30px;
            /* Padding 30px di semua sisi */
            overflow: hidden;
            /* Memastikan konten tidak keluar dari card */
            transition: box-shadow 0.3s ease, transform 0.3s ease;
            /* Efek transisi untuk smooth hover */
        }

        .custom-card:hover {
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            /* Bayangan lebih tegas saat hover */
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
            <div class="text-start text-light my-3 mt-5">
                <h1 class="fw-bolder">Mencari Surat Keterangan Direksi?</h1>
                <p>Silahkan ketik kata kunci berdasarkan peraturan yang anda cari</p>
            </div>
            <!-- Search Form -->
            <div class="row justify-content-start mt-0">
                <div class="col-md-6">
                    <form action="/search" method="GET" class="d-flex">
                        <!-- Input Field -->
                        <input type="text" name="keyword" class="form-control form-control me-2"
                            placeholder="Cari Peraturan" aria-label="Cari peraturan" required />
                        <!-- Submit Button -->
                        <button class="btn btn-outline-light px-4" type="submit">
                            cari
                        </button>
                    </form>
                    <!-- Pencarian Lanjutan Link -->
                    {{-- <small class="d-block mt-2 text-light" style="cursor: pointer;" id="toggle-advanced-search">
                        + Pencarian Lanjutan
                    </small> --}}
                </div>
            </div>

            <!-- Card for Advanced Search (hidden initially) -->
            <div class="row justify-content-start mt-4" id="advanced-search-card" class="advanced-search-card">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <label for="subjek">Subjek</label>
                            <select class="form-control" id="subjek">
                                <option value="subjek1">Subjek 1</option>
                                <option value="subjek2">Subjek 2</option>
                                <option value="subjek3">Subjek 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <label for="bentuk">Bentuk</label>
                            <select class="form-control" id="bentuk">
                                <option value="bentuk1">Bentuk 1</option>
                                <option value="bentuk2">Bentuk 2</option>
                                <option value="bentuk3">Bentuk 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" id="kategori">
                                <option value="kategori1">Kategori 1</option>
                                <option value="kategori2">Kategori 2</option>
                                <option value="kategori3">Kategori 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <label for="status">Status</label>
                            <select class="form-control" id="status">
                                <option value="status1">Status 1</option>
                                <option value="status2">Status 2</option>
                                <option value="status3">Status 3</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Page content-->
    <div class="container">
        <div class="custom-card mb-5 mt-5">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <h2 class="my-4">Daftar Surat Keterangan Direksi.</h2>
                    <h2 class="my-4">Pencarian!</h2>
                </div>
            </div>
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <div class="card mb-4 position-relative" style="border-left: 5px solid #000000;">
                        <div class="card-body">
                            <span class="badge bg-success position-absolute top-0 end-0 m-3">Berlaku</span>
                            <div class="small text-muted">October 15, 2024</div>
                            <h4 class="card-title">Surat Keputusan Direksi Pengangkatan Jabatan</h4>
                            <p class="card-text">
                                Direksi menetapkan pengangkatan jabatan ini sebagai bukti sah perubahan posisi karyawan
                                dalam struktur perusahaan.
                            </p>
                            <button class="btn btn-outline-dark" data-bs-toggle="modal"
                                data-bs-target="#detailModal">Selengkapnya</button>
                        </div>
                    </div>

                    @include('modal-detailskd')

                    <div class="card mb-4 position-relative" style="border-left: 5px solid #000000;">
                        <div class="card-body">
                            <span class="badge bg-success position-absolute top-0 end-0 m-3">Berlaku</span>
                            <div class="small text-muted">September 5, 2024</div>
                            <h4 class="card-title">Surat Keterangan Perjalanan Dinas</h4>
                            <p class="card-text">
                                Surat ini diterbitkan oleh perusahaan untuk memastikan bahwa karyawan yang bersangkutan
                                menjalankan perjalanan dinas atas perintah Direksi.
                            </p>
                            <a class="btn btn-outline-dark" href="#!">Selengkapnya</a>
                        </div>
                    </div>

                    <div class="card mb-4 position-relative" style="border-left: 5px solid #000000;">
                        <div class="card-body">
                            <span class="badge bg-danger position-absolute top-0 end-0 m-3">Kadaluarsa</span>
                            <div class="small text-muted">August 20, 2024</div>
                            <h4 class="card-title">Surat Persetujuan Direksi untuk Cuti Karyawan</h4>
                            <p class="card-text">
                                Direksi memberikan persetujuan cuti ini kepada karyawan sesuai dengan kebijakan
                                perusahaan yang berlaku.
                            </p>
                            <a class="btn btn-outline-dark" href="#!">Selengkapnya</a>
                        </div>
                    </div>

                    <div class="card mb-4 position-relative" style="border-left: 5px solid #000000;">
                        <div class="card-body">
                            <span class="badge bg-danger position-absolute top-0 end-0 m-3">Kadaluarsa</span>
                            <div class="small text-muted">July 12, 2024</div>
                            <h4 class="card-title">Surat Pengunduran Diri Karyawan</h4>
                            <p class="card-text">
                                Surat ini menegaskan bahwa karyawan telah mengajukan pengunduran diri dan telah mendapat
                                persetujuan dari Direksi.
                            </p>
                            <a class="btn btn-outline-dark" href="#!">Selengkapnya</a>
                        </div>
                    </div>

                    <div class="card mb-4 position-relative" style="border-left: 5px solid #000000;">
                        <div class="card-body">
                            <span class="badge bg-success position-absolute top-0 end-0 m-3">Berlaku</span>
                            <div class="small text-muted">June 18, 2024</div>
                            <h4 class="card-title">Surat Penilaian Kinerja oleh Direksi</h4>
                            <p class="card-text">
                                Direksi menilai kinerja karyawan ini berdasarkan evaluasi dan standar yang diterapkan
                                oleh perusahaan.
                            </p>
                            <a class="btn btn-outline-dark" href="#!">Selengkapnya</a>
                        </div>
                    </div>

                    <div class="card mb-4 position-relative" style="border-left: 5px solid #000000;">
                        <div class="card-body">
                            <span class="badge bg-success position-absolute top-0 end-0 m-3">Berlaku</span>
                            <div class="small text-muted">May 22, 2024</div>
                            <h4 class="card-title">Surat Keputusan Direksi tentang Kenaikan Gaji</h4>
                            <p class="card-text">
                                Keputusan Direksi tentang kenaikan gaji ini didasarkan pada evaluasi kinerja karyawan
                                dan kebijakan perusahaan.
                            </p>
                            <a class="btn btn-outline-dark" href="#!">Selengkapnya</a>
                        </div>
                    </div>

                    <div class="card mb-4 position-relative" style="border-left: 5px solid #000000;">
                        <div class="card-body">
                            <span class="badge bg-dark position-absolute top-0 end-0 m-3">Kadaluarsa</span>
                            <div class="small text-muted">April 8, 2024</div>
                            <h4 class="card-title">Surat Keterangan Domisili Perusahaan</h4>
                            <p class="card-text">
                                Surat ini diterbitkan sebagai bukti legal terkait lokasi operasional perusahaan
                                berdasarkan keputusan Direksi.
                            </p>
                            <a class="btn btn-outline-dark" href="#!">Selengkapnya</a>
                        </div>
                    </div>

                    <div class="card mb-4 position-relative" style="border-left: 5px solid #000000;">
                        <div class="card-body">
                            <span class="badge bg-success position-absolute top-0 end-0 m-3">Berlaku</span>
                            <div class="small text-muted">March 30, 2024</div>
                            <h4 class="card-title">Surat Pengalaman Kerja dari Direksi</h4>
                            <p class="card-text">
                                Direksi menerbitkan surat ini untuk menyatakan bahwa karyawan pernah bekerja di
                                perusahaan dengan jabatan yang disebutkan.
                            </p>
                            <a class="btn btn-outline-dark" href="#!">Selengkapnya</a>
                        </div>
                    </div>

                    <div class="card mb-4 position-relative" style="border-left: 5px solid #000000;">
                        <div class="card-body">
                            <span class="badge bg-success position-absolute top-0 end-0 m-3">Berlaku</span>
                            <div class="small text-muted">February 14, 2024</div>
                            <h4 class="card-title">Surat Kepemilikan Saham oleh Direksi</h4>
                            <p class="card-text">
                                Surat ini dikeluarkan oleh Direksi sebagai bukti kepemilikan saham karyawan atau
                                pemegang saham dalam perusahaan.
                            </p>
                            <a class="btn btn-outline-dark" href="#!">Selengkapnya</a>
                        </div>
                    </div>

                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">←</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#!">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#!">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#!">3</a>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link" href="#!">...</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#!">15</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#!">→</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4" style="border-top: 5px solid #000000;">
                        <div class="card-body">
                            <form>
                                <!-- Kata Kunci -->
                                <div class="mb-3">
                                    <label for="keyword" class="form-label">Kata Kunci</label>
                                    <input class="form-control" id="keyword" type="text"
                                        placeholder="Masukkan kata kunci..." aria-label="Kata Kunci" />
                                </div>

                                <!-- Subjek -->
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subjek</label>
                                    <select class="form-select" id="subject" aria-label="Subjek">
                                        <option selected>Choose...</option>
                                        <option value="pendidikan">Pendidikan</option>
                                        <option value="kesehatan">Kesehatan</option>
                                        <option value="ekonomi">Ekonomi</option>
                                        <option value="lingkungan">Lingkungan</option>
                                    </select>
                                </div>

                                <!-- Nomor -->
                                <div class="mb-3">
                                    <label for="number" class="form-label">Nomor</label>
                                    <input class="form-control" id="number" type="text"
                                        placeholder="Masukkan nomor peraturan..." aria-label="Nomor" />
                                </div>

                                <!-- Tahun -->
                                <div class="mb-3">
                                    <label for="year" class="form-label">Tahun</label>
                                    <input class="form-control" id="year" type="number"
                                        placeholder="Masukkan tahun..." aria-label="Tahun" />
                                </div>

                                <!-- Bentuk -->
                                <div class="mb-3">
                                    <label for="form" class="form-label">Bentuk</label>
                                    <select class="form-select" id="form" aria-label="Bentuk">
                                        <option selected>Choose...</option>
                                        <option value="peraturan_presiden">Peraturan Presiden</option>
                                        <option value="peraturan_pemerintah">Peraturan Pemerintah</option>
                                        <option value="peraturan_menteri">Peraturan Menteri</option>
                                        <option value="peraturan_daerah">Peraturan Daerah</option>
                                    </select>
                                </div>

                                <!-- Kategori -->
                                <div class="mb-3">
                                    <label for="category" class="form-label">Kategori</label>
                                    <select class="form-select" id="category" aria-label="Kategori">
                                        <option selected>Choose...</option>
                                        <option value="badan_hukum">Badan Hukum</option>
                                        <option value="peraturan_keuangan">Peraturan Keuangan</option>
                                        <option value="peraturan_administrasi">Peraturan Administrasi</option>
                                        <option value="peraturan_umum">Peraturan Umum</option>
                                    </select>
                                </div>

                                <!-- Jangkauan Publikasi -->
                                <div class="mb-3">
                                    <label for="publication_scope" class="form-label">Jangkauan Publikasi</label>
                                    <select class="form-select" id="publication_scope"
                                        aria-label="Jangkauan Publikasi">
                                        <option selected>Choose...</option>
                                        <option value="nasional">Nasional</option>
                                        <option value="regional">Regional</option>
                                        <option value="internasional">Internasional</option>
                                    </select>
                                </div>

                                <!-- Status -->
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" id="status" aria-label="Status">
                                        <option selected>Choose...</option>
                                        <option value="aktif">Berlaku</option>
                                        <option value="kadaluarsa">Kadaluarsa</option>
                                    </select>
                                </div>

                                <!-- Terjemahan -->
                                <div class="mb-4">
                                    <label for="translation" class="form-label">Terjemahan</label>
                                    <select class="form-select" id="translation" aria-label="Terjemahan">
                                        <option selected>Choose...</option>
                                        <option value="bahasa_indonesia">Bahasa Indonesia</option>
                                        <option value="bahasa_inggris">Bahasa Inggris</option>
                                        <option value="bahasa_daerah">Bahasa Daerah</option>
                                    </select>
                                </div>

                                <!-- Button Container -->
                                <div class="d-grid gap-2">
                                    <button class="btn btn-dark" id="button-search" type="submit">Cari</button>
                                    <button class="btn btn-outline-secondary" type="reset">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-->
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
                            <span class="fa-li"><i class="bi bi-telephone"></i></span><span class="ms-2">0812
                                3456
                                7899</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="bi bi-telephone"></i></span><span class="ms-2">0888
                                7654
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
</body>

</html>
