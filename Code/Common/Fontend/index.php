<!DOCTYPE html>
<html lang="en">
    <head>
        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <!-- Reset CSS -->
            <link rel="stylesheet" href="./assets/css/reset.min.css" />
            <!-- BOOTSTRAP 5.0.2 CSS -->
            <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
            <!-- BOOTSTRAP ICON -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
            <!-- Icon -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
            <!-- Swiper -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
            <!-- CSS ME -->
            <link rel="stylesheet" href="./assets/css/home.css" />
            <!--favicon-->
            <link rel="icon" type="image/x-icon" href="./assets/image/favicon.png" />
            <title>Home</title>
        </head>
    </head>
    <body>
        <div class="app">
            <!--BEGIN Header -->
            <nav class="navbar navbar-expand-lg position-fixed">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                        width="500.000000pt" height="500.000000pt" viewBox="0 0 500.000000 500.000000"
                        preserveAspectRatio="xMidYMid meet" style="height: 40px; width: 40px;">

                        <g transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)"
                        fill="#00000" stroke="none">
                        <path d="M2650 4978 c0 -3 9 -31 20 -64 26 -74 64 -226 82 -324 8 -48 13 -151
                        12 -285 0 -178 -4 -226 -23 -315 -70 -331 -210 -586 -460 -843 -97 -100 -318
                        -287 -339 -287 -15 0 -92 104 -137 184 -71 128 -125 346 -125 509 0 42 -3 77
                        -6 77 -7 0 -23 -17 -128 -140 -257 -300 -573 -786 -705 -1086 -62 -140 -128
                        -336 -164 -484 -81 -331 -76 -673 12 -934 118 -347 343 -589 711 -765 314
                        -150 631 -211 1094 -211 670 0 1127 142 1424 442 244 246 407 608 453 1007 16
                        140 6 550 -16 691 -42 268 -117 554 -206 780 -65 167 -231 501 -339 680 -199
                        330 -523 739 -860 1084 -134 137 -300 294 -300 284z"/>
                        </g>
                        </svg>
                    </a>
                    <a id="bg-show-mobile" class="navbar-toggler text-dark" data-bs-toggle="collapse" data-bs-target="#navbarsExampleXxl">
                        <i class="bi bi-list navbar-toggler-icon text-dark" style="padding: 4px;"></i>
                    </a>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleXxl">
                        <ul class="navbar-nav">
                            <li class="nav-item ps-3 pe-3 mt-2 home">
                                <a class="nav-link text-dark fw-bold hv-cl" href="#">Home</a>
                                <ul class="sub rounded p-0">
                                    <li>
                                        <a class="nav-link text-dark text-center hv-bg" href="#">Home 1</a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-dark text-center hv-bg" href="#">Home 2</a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-dark text-center hv-bg" href="#">Home 3</a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-dark text-center hv-bg" href="#">Home 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item ps-3 pe-3 mt-2 link">
                                <a class="nav-link text-dark fw-bold hv-cl" href="#">Link</a>
                                <ul class="sub rounded p-0">
                                    <li>
                                        <a class="nav-link text-dark text-center hv-bg" href="#">Link 1</a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-dark text-center hv-bg" href="#">Link 2</a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-dark text-center hv-bg" href="#">Link 3</a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-dark text-center hv-bg" href="#">Link 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item ps-3 pe-3 mt-2 disabled">
                                <a class="nav-link text-dark fw-bold hv-cl" href="#">Disabled</a>
                                <ul class="sub rounded p-0">
                                    <li>
                                        <a class="nav-link text-dark text-center hv-bg" href="#">Disabled 1</a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-dark text-center hv-bg" href="#">Disabled 2</a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-dark text-center hv-bg" href="#">Disabled 3</a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-dark text-center hv-bg" href="#">Disabled 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item ps-3 pe-3 mt-2 dropdown">
                                <a class="nav-link text-dark fw-bold hv-cl" href="#">Dropdown</a>
                                <ul class="sub rounded p-0">
                                    <li>
                                        <a class="nav-link text-dark text-center hv-bg" href="#">Dropdown 1</a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-dark text-center hv-bg" href="#">Dropdown 2</a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-dark text-center hv-bg" href="#">Dropdown 3</a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-dark text-center hv-bg" href="#">Dropdown 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item ps-3 pe-3 mt-2 mb-2">
                                <a class="nav-link text-center p-2 hv-box text-white fw-bold bg-danger rounded-pill" href="login.php">
                                    Login
                                </a>
                            </li>
                            <li class="nav-item ps-3 pe-3 mt-2 mb-2">
                                <a class="nav-link text-center p-2 hv-box text-white fw-bold bg-primary rounded-pill" href="register.php">
                                    Register
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!--END Header -->
            
            <!--BEGIN Main -->
            <div class="main">
                <!-- note 1 --> 
                <div class="content-wrap position-relative mw-100">
                    <!-- giới thiệu -->
                    <div class="pt-180 pb-290 bg-linear-gradient-1 shape-parent text-center">
                        <!-- shape 1 -->
                        <!-- <div class="shape position-absolute d-flex justify-content-start">
                            <img loading="lazy" src="assets/image/home/landing-shape-958x571.png" alt="" width="958" height="571">
                        </div> -->
                        <!-- shape 2 -->
                        <!-- <div class="shape position-absolute d-flex justify-content-end align-items-end">
                            <img loading="lazy" src="assets/image/home/landing-shape-487x422.png" alt="" width="487" height="422">
                        </div> -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2">
                                    <h1 class="mb-3 px-lg-3 fs-fw activeShow" data-show="startbox">
                                        <span class="highlight">
                                            Open the Startbox
                                        </span>
                                        Now. Build your future.
                                    </h1>
                                    
                                    <p class="mb-0 fw-normal fs-5 px-lg-5 activeShow" data-show="startbox">
                                        Corporate template for business, portfolio, agencies, freelancers & blog. Creative design, modern and thoughtful functionality.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- product -->
                    <div class="pb-130 mt-n180 text-center">
                        <div class="container">
                            <div class="row g-5">

                                <div class="col-lg-5 offset-lg-1 activeShow" data-show="startbox">
                                    <a class="card border-0 text-decoration-none text-dark" href="#">
                                        <span class="card-img shadow-lg rounded-3 overflow-hidden hv-box-lg">
                                            <span class="browser-topbar">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                            <img class="img-fluid" src="./assets/image/home/home-1.jpg" alt="">
                                        </span>
                                        <span class="card-body">
                                            <span class="card-title h4">Main Corporate</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-5 activeShow" data-show="startbox">
                                    <a class="card border-0 text-decoration-none text-dark" href="#">
                                        <span class="card-img shadow-lg rounded-3 overflow-hidden hv-box-lg">
                                            <span class="browser-topbar">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                            <img class="img-fluid" src="./assets/image/home/home-1.jpg" alt="">
                                        </span>
                                        <span class="card-body">
                                            <span class="card-title h4">Main Corporate</span>
                                        </span>
                                    </a>
                                </div>

                                <div class="col-lg-5 offset-lg-1" data-show="startbox">
                                    <a class="card border-0 text-decoration-none text-dark" href="#">
                                        <span class="card-img shadow-lg rounded-3 overflow-hidden hv-box-lg">
                                            <span class="browser-topbar">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                            <img class="img-fluid" src="./assets/image/home/home-1.jpg" alt="">
                                        </span>
                                        <span class="card-body">
                                            <span class="card-title h4">Main Corporate</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-5" data-show="startbox">
                                    <a class="card border-0 text-decoration-none text-dark" href="#">
                                        <span class="card-img shadow-lg rounded-3 overflow-hidden hv-box-lg">
                                            <span class="browser-topbar">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                            <img class="img-fluid" src="./assets/image/home/home-1.jpg" alt="">
                                        </span>
                                        <span class="card-body">
                                            <span class="card-title h4">Main Corporate</span>
                                        </span>
                                    </a>
                                </div>

                                <div class="col-lg-5 offset-lg-1" data-show="startbox">
                                    <a class="card border-0 text-decoration-none text-dark" href="#">
                                        <span class="card-img shadow-lg rounded-3 overflow-hidden hv-box-lg">
                                            <span class="browser-topbar">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                            <img class="img-fluid" src="./assets/image/home/home-1.jpg" alt="">
                                        </span>
                                        <span class="card-body">
                                            <span class="card-title h4">Main Corporate</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-5" data-show="startbox">
                                    <a class="card border-0 text-decoration-none text-dark" href="#">
                                        <span class="card-img shadow-lg rounded-3 overflow-hidden hv-box-lg">
                                            <span class="browser-topbar">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                            <img class="img-fluid" src="./assets/image/home/home-1.jpg" alt="">
                                        </span>
                                        <span class="card-body">
                                            <span class="card-title h4">Main Corporate</span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="m-3 mt-5" data-show="startbox">
                                <button class="btn btn-danger rounded-pill p-3 hv-box">Get started</button>
                            </div>
                        </div>
                    </div>

                    <!-- slide -->
                    <div class="pt-120 pb-130 bg-linear-gradient-2 shape-parent text-center">
                        <!-- shape 1 -->
                        <!-- <div class="shape position-absolute d-flex justify-content-end">
                            <img loading="lazy" src="assets/image/home/landing-shape-542x382.png" alt="" width="958" height="571">
                        </div> -->
                        <!-- shape 2 -->
                        <!-- <div class="shape position-absolute d-flex align-items-end">
                            <img loading="lazy" src="assets/image/home/lanidng-shape-309x435.png" alt="" width="487" height="422">
                        </div> -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <h2 class="m-0 text-white progress-bar-animated fs-1 fw-bold " data-show="startbox">Practical Inner pages for everything you may need</h2>
                                </div>

                                <!-- Swiper -->
                                <div data-show="startbox">
                                    <div class="swiper mt-5 mySwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a class="card border-0 text-decoration-none text-dark" href="#">
                                                    <span class="card-img shadow-lg rounded-3 overflow-hidden">
                                                        <span class="browser-topbar">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                        <img class="img-fluid" src="./assets/image/home/home-1.jpg" alt="">
                                                    </span>
                                                    <span class="card-body">
                                                        <span class="card-title h4 text-white">Main Corporate</span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="card border-0 text-decoration-none text-dark" href="#">
                                                    <span class="card-img shadow-lg rounded-3 overflow-hidden">
                                                        <span class="browser-topbar">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                        <img class="img-fluid" src="./assets/image/home/home-1.jpg" alt="">
                                                    </span>
                                                    <span class="card-body">
                                                        <span class="card-title h4 text-white">Main Corporate</span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="card border-0 text-decoration-none text-dark" href="#">
                                                    <span class="card-img shadow-lg rounded-3 overflow-hidden">
                                                        <span class="browser-topbar">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                        <img class="img-fluid" src="./assets/image/home/home-1.jpg" alt="">
                                                    </span>
                                                    <span class="card-body">
                                                        <span class="card-title h4 text-white">Main Corporate</span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="card border-0 text-decoration-none text-dark" href="#">
                                                    <span class="card-img shadow-lg rounded-3 overflow-hidden">
                                                        <span class="browser-topbar">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                        <img class="img-fluid" src="./assets/image/home/home-1.jpg" alt="">
                                                    </span>
                                                    <span class="card-body">
                                                        <span class="card-title h4 text-white">Main Corporate</span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="card border-0 text-decoration-none text-dark" href="#">
                                                    <span class="card-img shadow-lg rounded-3 overflow-hidden">
                                                        <span class="browser-topbar">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                        <img class="img-fluid" src="./assets/image/home/home-1.jpg" alt="">
                                                    </span>
                                                    <span class="card-body">
                                                        <span class="card-title h4 text-white">Main Corporate</span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="card border-0 text-decoration-none text-dark" href="#">
                                                    <span class="card-img shadow-lg rounded-3 overflow-hidden">
                                                        <span class="browser-topbar">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                        <img class="img-fluid" src="./assets/image/home/home-1.jpg" alt="">
                                                    </span>
                                                    <span class="card-body">
                                                        <span class="card-title h4 text-white">Main Corporate</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- <div class="swiper-pagination"></div> -->
                                    </div>
                                    <div class="d-flex mt-5 justify-content-center">
                                        <div class="m-2">
                                            <button class="btn-next btn bg-dark rounded-circle"><i class="text-white bi bi-arrow-left"></i></button>
                                        </div>
                                        <div class="m-2">
                                            <button class="btn-prev btn bg-dark rounded-circle"><i class="text-white bi bi-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!--END Main -->

            <!--BEGIN Footer -->
            <div class="footer"></div>
            <!--END Footer -->

            <div id="demo"></div>
        </div>

        <!-- JQUERY 3.6.1 -->
        <script src="./assets/js/jquery.min.js"></script>
        <!-- JS BOOTSTRAP -->
        <script src="./assets/js/bootstrap.bundle.min.js"></script>
        <!-- js swiper -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <!-- JS ME -->
        <script src="./assets/js/home.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                 autoplay: {
                     delay: 2500,
                     disableOnInteraction: false,
                 },
                coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: true,
                },
                pagination: {
                    el: ".swiper-pagination",
                },
                navigation: {
                    nextEl: ".btn-prev",
                    prevEl: ".btn-next",
                },
            });
        </script>
    </body>
</html>
