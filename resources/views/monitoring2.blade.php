<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Monitoring - Internal Audit KCIC</title>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

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
            background-color: #dc3545;
            border-color: #dc3545;
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

        .tab-content {
            display: none;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .tab-content.fade {
            display: block;
            opacity: 1;
        }
    </style>
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 navbar-transparent" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="{{ route('peraturan') }}"
                style="display: block; line-height: 1.2; text-align: start;">
                MONITORING<span style="display: block;">AUDITEE.</span>
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
                            <li><a class="dropdown-item" href="{{ route('search') }}"><i
                                        class="fas fa-briefcase me-3"></i>Surat Tugas Internal Audit</a></li>
                            <li><a class="dropdown-item" href="{{ route('search') }}"><i
                                        class="fas fa-file-alt me-3"></i>Laporan Hasil Audit</a></li>
                            <li><a class="dropdown-item" href="{{ route('kertaskerja') }}"><i
                                        class="fas fa-clipboard me-3"></i>Kertas Kerja Audit</a></li>
                            <li><a class="dropdown-item" href="{{ route('search') }}"><i
                                        class="fas fa-file-signature me-3"></i>Berita Acara</a></li>
                            <li><a class="dropdown-item" href="{{ route('search') }}"><i
                                        class="fas fa-handshake me-3"></i>Meeting Of Memorandum</a></li>
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
                            <li><a class="dropdown-item" href="{{ route('search') }}"><i
                                        class="fas fa-balance-scale me-3"></i>Peraturan Direksi</a></li>
                            <li><a class="dropdown-item" href="{{ route('search') }}"><i
                                        class="fas fa-file-signature me-3"></i>Surat Keterangan Direksi</a></li>
                            <li><a class="dropdown-item" href="{{ route('search') }}"><i
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
                            <li><a class="dropdown-item" href="{{ route('search') }}"><i
                                        class="fas fa-landmark me-3"></i>Peraturan Daerah</a></li>
                            <li><a class="dropdown-item" href="{{ route('search') }}"><i
                                        class="fas fa-gavel me-3"></i>Peraturan Menteri</a></li>
                            <li><a class="dropdown-item" href="{{ route('search') }}"><i
                                        class="fas fa-briefcase me-3"></i>Peraturan Presiden</a></li>
                            <li><a class="dropdown-item" href="{{ route('search') }}"><i
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
                <h1 class="fw-bolder">Monitoringlah!</h1>
            </div>
        </div>
    </header>

    <!-- Page content -->
    <div class="container">
        <!-- Page Content 1 -->
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h3 class="my-4 mb-4 mt-5" style="position: relative; display: inline-block;">
                    <span>Daftar</span>
                    <span class="text-dark">Temuan</span>
                    <span class="mt-3"
                        style="position: absolute; bottom: -16px; left: 50%; transform: translateX(-50%); width: 50px; height: 4px; background-color: rgb(216, 67, 67);"></span>
                </h3>
            </div>
        </div>
        <p class="text-center text-muted mb-3 mt-3">Amati Secara Serius dan Teliti!</p>

        <!-- Tabel Daftar Kertas Kerja -->
        <!-- Tab Pane: Berdasarkan Huia -->
        <div id="huia" class="tab-content fade" style="display: none;">
            <div class="card mb-5" style="padding: 25px;">
                <div class="row">
                    <div class="col-12">
                        <!-- Responsive table wrapper -->
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover align-middle" style="border-color: black;">
                                <thead class="table-light" style="border-color: black;">
                                    <tr>
                                        <th style="text-align: center;">No</th>
                                        <th style="text-align: center;">Ringkasan Temuan</th>
                                        <th style="text-align: center; width: 20%">Rekomendasi</th>
                                        <th style="text-align: center;">PIC</th>
                                        <th style="text-align: center;">Status</th>
                                        <th style="text-align: center; width: 40%">Tindak Lanjut Auditee</th>
                                        <th style="text-align: center; width: 15%">Tgl Update Tindak Lanjut</th>
                                        <th style="text-align: center; width: 15%">FIle</th>
                                        <th style="text-align: center; width: 5%">Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;">1</td>
                                        <td rowspan="2">Temuan terkait ketidaksesuaian dalam pengelolaan dana CSR
                                        </td>
                                        <td>Merekomendasikan penyusunan dokumen pendukung yang lebih baik</td>
                                        <td style="text-align: center;">HRRP</td>
                                        <td style="text-align: center;"><span class="badge bg-warning">MDP</span></td>
                                        <td>Auditee telah menyusun dokumen tambahan untuk mendukung pengelolaan dana CSR
                                        </td>
                                        <td style="text-align: center;">19/01/2025</td>
                                        <td>
                                            <ul class="list-unstyled mb-0">
                                                <li><a href="/contohsurat.pdf" class="text-decoration-none">File
                                                        1.pdf</a></li>
                                                <li><a href="/contohsurat1.pdf" class="text-decoration-none">File
                                                        2.pdf</a></li>
                                            </ul>
                                        </td>
                                        <td style="text-align: center;">
                                            <a href="/contohsurat.pdf" class="btn btn-outline-dark btn-sm"
                                                data-bs-toggle="modal" data-bs-target="#detailModal">
                                                <i class="fas fa-info"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">2</td>
                                        <td>Rekomendasi untuk penyesuaian prosedur audit</td>
                                        <td style="text-align: center;">HRRP</td>
                                        <td style="text-align: center;"><span class="badge bg-success">SR</span></td>
                                        <td>Auditee telah berhasil menerapkan rekomendasi pengelolaan dana CSR sesuai
                                            dengan kebijakan internal, termasuk mengintegrasikan proses tersebut ke
                                            dalam sistem SAP perusahaan</td>
                                        <td style="text-align: center;">19/10/2025</td>
                                        <td>
                                            <ul class="list-unstyled mb-0">
                                                <li><a href="/contohsurat2.pdf" class="text-decoration-none">File
                                                        3.pdf</a></li>
                                            </ul>
                                        </td>
                                        <td style="text-align: center;">
                                            <a href="/contohsurat2.pdf" class="btn btn-outline-dark btn-sm"
                                                download>Download</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">3</td>
                                        <td>Merekomendasikan penyesuaian prosedur audit</td>
                                        <td>Rekomendasi untuk penyesuaian prosedur audit</td>
                                        <td style="text-align: center;">ARQA</td>
                                        <td style="text-align: center;"><span class="badge bg-success">SR</span></td>
                                        <td>Tim audit telah memberikan saran dan tindakan korektif kepada auditee</td>
                                        <td style="text-align: center;">18/03/2024</td>
                                        <td>
                                            <ul class="list-unstyled mb-0">
                                                <li><a href="/contohsurat2.pdf" class="text-decoration-none">File
                                                        3.pdf</a></li>
                                            </ul>
                                        </td>
                                        <td style="text-align: center;">
                                            <a href="/contohsurat2.pdf" class="btn btn-outline-dark btn-sm"
                                                download>Download</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Include Modal File -->
        @include('monitoring-detail')

        {{-- Tabel Huib --}}
        <div id="huib" class="tab-content fade" style="display: none;">
            <div class="card mb-5" style="padding: 25px;">
                <div class="row">
                    <div class="col-12">
                        <!-- Responsive table wrapper -->
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover align-middle" style="border-color: black;">
                                <thead class="table-light" style="border-color: black;">
                                    <tr>
                                        <th style="text-align: center;">No</th>
                                        <th style="text-align: center;">Tahun</th>
                                        <th>Objek Audit</th>
                                        <th>Uraian</th>
                                        <th style="text-align: center;">File</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;">1</td>
                                        <td style="text-align: center;">2024</td>
                                        <td>Audit Pembebasan Lahan</td>
                                        <td>Surat Pernyataan Haji Pram</td>
                                        <td style="text-align: center;">
                                            <button type="button" class="btn btn-outline-dark"
                                                data-bs-toggle="modal" data-bs-target="#pdfModal1">
                                                <i class="fas fa-info"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">2</td>
                                        <td style="text-align: center;">2024</td>
                                        <td>Audit Pengelolaan Dana CSR</td>
                                        <td>Laporan Penggunaan Dana CSR</td>
                                        <td style="text-align: center;">
                                            <button type="button" class="btn btn-outline-dark"
                                                data-bs-toggle="modal" data-bs-target="#pdfModal2">
                                                <i class="fas fa-info"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">3</td>
                                        <td style="text-align: center;">2024</td>
                                        <td>Audit Pengelolaan Dana CSR</td>
                                        <td>Notulensi Rapat Tinjauan CSR</td>
                                        <td style="text-align: center;">
                                            <button type="button" class="btn btn-outline-dark"
                                                data-bs-toggle="modal" data-bs-target="#pdfModal3">
                                                <i class="fas fa-info"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">4</td>
                                        <td style="text-align: center;">2023</td>
                                        <td>Audit Kinerja Operasional Stasiun</td>
                                        <td>Laporan Audit Kinerja 2024</td>
                                        <td style="text-align: center;">
                                            <button type="button" class="btn btn-outline-dark"
                                                data-bs-toggle="modal" data-bs-target="#pdfModal4">
                                                <i class="fas fa-info"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">5</td>
                                        <td style="text-align: center;">2023</td>
                                        <td>Audit Kinerja Operasional Stasiun</td>
                                        <td>Memo Internal Kinerja Stasiun</td>
                                        <td style="text-align: center;">
                                            <button type="button" class="btn btn-outline-dark"
                                                data-bs-toggle="modal" data-bs-target="#pdfModal5">
                                                <i class="fas fa-info"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">6</td>
                                        <td style="text-align: center;">2023</td>
                                        <td>Audit Pengelolaan Aset Properti</td>
                                        <td>Dokumen Pengalihan Hak Properti</td>
                                        <td style="text-align: center;">
                                            <button type="button" class="btn btn-outline-dark"
                                                data-bs-toggle="modal" data-bs-target="#pdfModal6">
                                                <i class="fas fa-info"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">7</td>
                                        <td style="text-align: center;">2022</td>
                                        <td>Audit Pengadaan Barang dan Jasa</td>
                                        <td>Kontrak Kerja Sama Vendor</td>
                                        <td style="text-align: center;">
                                            <button type="button" class="btn btn-outline-dark"
                                                data-bs-toggle="modal" data-bs-target="#pdfModal7">
                                                <i class="fas fa-info"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">8</td>
                                        <td style="text-align: center;">2022</td>
                                        <td>Audit Pengadaan Barang dan Jasa</td>
                                        <td>Surat Keputusan Tender</td>
                                        <td style="text-align: center;">
                                            <button type="button" class="btn btn-outline-dark"
                                                data-bs-toggle="modal" data-bs-target="#pdfModal8">
                                                <i class="fas fa-info"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">9</td>
                                        <td style="text-align: center;">2022</td>
                                        <td>Audit Laporan Keuangan Tahunan</td>
                                        <td>Laporan Keuangan Periode 2024</td>
                                        <td style="text-align: center;">
                                            <button type="button" class="btn btn-outline-dark"
                                                data-bs-toggle="modal" data-bs-target="#pdfModal9">
                                                <i class="fas fa-info"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">10</td>
                                        <td style="text-align: center;">2021</td>
                                        <td>Audit Keselamatan Gedung</td>
                                        <td>Dokumen Standar Keselamatan</td>
                                        <td style="text-align: center;">
                                            <button type="button" class="btn btn-outline-dark"
                                                data-bs-toggle="modal" data-bs-target="#pdfModal10">
                                                <i class="fas fa-info"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Tabel Huib --}}
        <div id="huic" class="tab-content fade" style="display: none;">
            <div class="card mb-5" style="padding: 25px;">
                <div class="row">
                    <div class="col-12">
                        <!-- Responsive table wrapper -->
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover align-middle" style="border-color: black;">
                                <thead class="table-light" style="border-color: black;">
                                    <tr>
                                        <th style="text-align: center;">No</th>
                                        <th style="text-align: center;">Tahun</th>
                                        <th>Objek Audit</th>
                                        <th>Uraian</th>
                                        <th style="text-align: center;">File</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="5"
                                            style="text-align: center; font-style: italic; color: gray; padding: 20px;">
                                            Belum ada penugasan
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="pdfModal1" tabindex="-1" aria-labelledby="pdfModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pdfModalLabel1">Berita Acara Pengadaan Fasilitas Umum</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe src="contoh.pdf" style="width: 100%; height: 500px;" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="fileNotFoundModal" tabindex="-1" aria-labelledby="fileNotFoundModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fileNotFoundModalLabel">
                        File Tidak Ditemukan
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <i class="bi bi-file-earmark-x" style="color: #dc3545; font-size:5rem; margin-bottom: 50px;"></i>
                    <p>Maaf, file yang Anda cari belum ditemukan.</p>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>


    <!-- Footer-->
    <footer class="text-white text-center text-lg-start" style="background-color: #000000;">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row mt-4">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">About Us</h5>

                    <p> Internal Audit KCIC adalah bagian yang berfokus pada evaluasi dan peningkatan
                        efektivitas
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
                            <span class="fa-li"><i class="bi bi-house"></i></span><span class="ms-2">Jalan
                                Tol
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
        function showTab(tabId) {
            // Menyembunyikan semua konten tab dengan efek fade
            var tabs = document.querySelectorAll('.tab-content');
            tabs.forEach(function(tab) {
                tab.classList.remove('fade');
                tab.style.display = 'none';
            });

            // Menghapus kelas 'active' dari semua tombol
            var buttons = document.querySelectorAll('.btn-outline-dark');
            buttons.forEach(function(button) {
                button.classList.remove('active');
            });

            // Menampilkan konten tab yang dipilih dengan efek fade
            var selectedTab = document.getElementById(tabId);
            selectedTab.style.display = 'block';
            setTimeout(function() {
                selectedTab.classList.add('fade');
            }, 10); // Delay sedikit agar efek fade terlihat

            // Menambahkan kelas 'active' pada tombol yang dipilih
            var activeButton = document.getElementById(tabId + 'Tab');
            activeButton.classList.add('active');
        }

        // Menampilkan tab pertama secara default
        showTab('huia');
    </script>
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
