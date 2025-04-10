<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>New Age - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('landing-page/css/styles.css') }}" rel="stylesheet" />
    <!-- Tambahkan ini di bagian <head> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <style>
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-in.show {
            opacity: 1;
            transform: translateY(0);
        }

        .hover-line {
            position: relative;
            display: inline-block;
            padding-bottom: 5px;
        }

        .hover-line::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 2px;
            width: 0;
            background-color: #dc3545;
            /* Danger color */
            transition: width 0.3s ease;
        }

        .card:hover .hover-line::after {
            width: 100%;
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold d-flex align-items-center" href="#page-top">
                <img src="{{ asset('landing-page/assets/img/perisai.png') }}" alt="Logo Perisai" class="me-2"
                    style="height: 30px; width: auto;">
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
                    <li class="nav-item"><a class="nav-link me-lg-3" href="">About Us</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="">Contact</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="">Gallery</a></li>
                </ul>
                <a class="btn btn-danger rounded-pill px-3 mb-2 mb-lg-0 btn-login" data-bs-toggle="modal"
                    data-bs-target="#feedbackModal">
                    <span class="d-flex align-items-center">
                        <i class="bi-person-fill me-2"></i>
                        <span class="small">Log In</span>
                    </span>
                </a>
            </div>
        </div>
    </nav>
    <br><br>
    <!-- Original Three Cards Below -->
    <div class="container text-center my-5">
        <!-- Title and Border -->
        <h1 class="mb-2" style="text-align: center;">Jajaran Manajemen</h1>
        <div class="border-bottom mb-4" style="width: 10%; margin: 0 auto; border: 4px solid #dc3545;"></div>

        <!-- New Card Above -->
        <div class="row gx-4 gx-lg-5 mb-4 justify-content-center">
            <div class="col-md-4" data-aos="fade-left">
                <div class="card h-100" style="max-width: 300px; margin: 0 auto; border: none;">
                    <div class="card-body text-center">
                        <!-- Gambar Manager di atas title (Gambar tetap ukuran 50% dari card) -->
                        <img src="{{ asset('landing-page/assets/img/foto1.png') }}" alt="Manager Photo"
                            class="img-fluid mb-3" style="width: 80%; height: auto;">

                        <!-- Title dan Nama -->
                        <h2 class="card-title hover-line" data-aos="fade-right">Edwin Permana</h2>
                        <p class="card-text" data-aos="fade-right">General Manager</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Three Manager Cards -->
        <div class="row gx-4 gx-lg-5">
            <!-- Manager Card 1 -->
            <div class="col-md-4 mb-5" data-aos="fade-left">
                <div class="card h-100" style="max-width: 300px; margin: 0 auto; border: none;">
                    <div class="card-body text-center">
                        <img src="{{ asset('landing-page/assets/img/foto1.png') }}" alt="Manager Photo"
                            class="img-fluid mb-3" style="width: 80%; height: auto;">
                        <h4 class="card-title hover-line" data-aos="fade-right">Dicky Arrie Kusuma</h4>     
                        <p class="card-text" data-aos="fade-right">Manager Audit 1</p>

                        <!-- Sub-Cards for Manager 1 -->
                        <div class="sub-cards mt-4">
                            @for ($i = 1; $i <= 4; $i++)
                                <div class="card h-100 mt-3" style="max-width: 300px; margin: 0 auto; border: none;">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('landing-page/assets/img/foto1.png') }}"
                                            alt="Sub-Manager Photo" class="img-fluid mb-3"
                                            style="width: 80%; height: auto;">
                                        <h4 class="card-title hover-line">Sub Manager {{ $i }}</h4>
                                        <p class="card-text">Role {{ $i }}</p>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>

            <!-- Manager Card 2 -->
            <div class="col-md-4 mb-5" data-aos="fade-left">
                <div class="card h-100" style="max-width: 300px; margin: 0 auto; border: none;">
                    <div class="card-body text-center">
                        <img src="{{ asset('landing-page/assets/img/foto1.png') }}" alt="Manager Photo"
                            class="img-fluid mb-3" style="width: 80%; height: auto;">
                        <h4 class="card-title hover-line" data-aos="fade-right">Muhammad Lufthi</h4>
                        <p class="card-text" data-aos="fade-right">Manager Audit 2</p>

                        <!-- Sub-Cards for Manager 2 -->
                        <div class="sub-cards mt-4">
                            @for ($i = 1; $i <= 3; $i++)
                                <div class="card h-100 mt-3" style="max-width: 300px; margin: 0 auto; border: none;">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('landing-page/assets/img/foto1.png') }}"
                                            alt="Sub-Manager Photo" class="img-fluid mb-3"
                                            style="width: 80%; height: auto;">
                                        <h4 class="card-title hover-line">Sub Manager {{ $i }}</h4>
                                        <p class="card-text">Role {{ $i }}</p>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>

            <!-- Manager Card 3 -->
            <div class="col-md-4 mb-5" data-aos="fade-left">
                <div class="card h-100" style="max-width: 300px; margin: 0 auto; border: none;">
                    <div class="card-body text-center">
                        <img src="{{ asset('landing-page/assets/img/foto1.png') }}" alt="Manager Photo"
                            class="img-fluid mb-3" style="width: 80%; height: auto;">
                        <h4 class="card-title hover-line" data-aos="fade-right">Muhammad Irfan</h4>
                        <p class="card-text" data-aos="fade-right">Manager Program, Administration, Monitoring, and
                            Evaluation</p>

                        <!-- Sub-Card for Manager 3 -->
                        <div class="sub-cards mt-4">
                            <div class="card h-100 mt-3" style="max-width: 300px; margin: 0 auto; border: none;">
                                <div class="card-body text-center">
                                    <img src="{{ asset('landing-page/assets/img/foto1.png') }}"
                                        alt="Sub-Manager Photo" class="img-fluid mb-3"
                                        style="width: 80%; height: auto;">
                                    <h4 class="card-title hover-line">Sub Manager 1</h4>
                                    <p class="card-text">Role 1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const fadeElements = document.querySelectorAll('.fade-in');

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                    }
                });
            }, {
                threshold: 0.1
            });

            fadeElements.forEach(element => {
                observer.observe(element);
            });
        });
    </script>
    <!-- Tambahkan ini sebelum tag penutup </body> -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 300, // Durasi animasi dalam milidetik
            once: true, // Animasi hanya muncul sekali saat pertama kali di-scroll
        });
    </script>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
