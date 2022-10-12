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
            <link rel="stylesheet" href="./assets/css/base.css">
            <!--favicon-->
            <link rel="icon" type="image/x-icon" href="./assets/image/favicon.png" />
            <title>Home</title>
        </head>
    </head>
    <body>
        <div class="app">
            <!--BEGIN nav -->
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
                    <!--nút ấn menu khi màn hình bé-->
                    <a id="bg-show-mobile" class="navbar-toggler text-dark" data-bs-toggle="collapse" data-bs-target="#navbarsExampleXxl">
                        <i class="bi bi-list navbar-toggler-icon text-dark" style="padding: 4px;"></i>
                    </a>

                    <!--menu-->
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
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h1 class="mb-3 px-lg-3 fs-fw text-shadow activeShow">
                                        <span class="highlight">
                                            Open the Startbox
                                        </span>
                                        Now. Build your future.
                                    </h1>
                                    
                                    <p class="mb-0 fw-normal fs-5 px-lg-5 text-shadow activeShow">
                                        Corporate template for business, portfolio, agencies, freelancers & blog. Creative design, modern and thoughtful functionality.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- product -->
                    <div class="pb-130 mt-n180 text-center bg-gradient bg-body">
                        <div class="container">
                            <div class="row g-5 justify-content-center">

                                <div class="col-lg-5 activeShow">
                                    <a class="card border-0 text-decoration-none text-dark" href="#">
                                        <span class="card-img shadow-lg rounded-3 overflow-hidden hv-box-lg">
                                            <span class="browser-topbar">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                            <img class="img-fluid" src="./assets/image/home/item-img/im-1.png" alt="">
                                        </span>
                                        <span class="card-body">
                                            <span class="card-title h4">Main Corporate</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-5 activeShow">
                                    <a class="card border-0 text-decoration-none text-dark" href="#">
                                        <span class="card-img shadow-lg rounded-3 overflow-hidden hv-box-lg">
                                            <span class="browser-topbar">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                            <img class="img-fluid" src="./assets/image/home/item-img/im-2.png" alt="">
                                        </span>
                                        <span class="card-body">
                                            <span class="card-title h4">Main Corporate</span>
                                        </span>
                                    </a>
                                </div>

                                <div class="col-lg-5 activeShow">
                                    <a class="card border-0 text-decoration-none text-dark" href="#">
                                        <span class="card-img shadow-lg rounded-3 overflow-hidden hv-box-lg">
                                            <span class="browser-topbar">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                            <img class="img-fluid" src="./assets/image/home/item-img/im-3.png" alt="">
                                        </span>
                                        <span class="card-body">
                                            <span class="card-title h4">Main Corporate</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-5 activeShow">
                                    <a class="card border-0 text-decoration-none text-dark" href="#">
                                        <span class="card-img shadow-lg rounded-3 overflow-hidden hv-box-lg">
                                            <span class="browser-topbar">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                            <img class="img-fluid" src="./assets/image/home/item-img/im-4.png" alt="">
                                        </span>
                                        <span class="card-body">
                                            <span class="card-title h4">Main Corporate</span>
                                        </span>
                                    </a>
                                </div>

                                <div class="col-lg-5 activeShow">
                                    <a class="card border-0 text-decoration-none text-dark" href="#">
                                        <span class="card-img shadow-lg rounded-3 overflow-hidden hv-box-lg">
                                            <span class="browser-topbar">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                            <img class="img-fluid" src="./assets/image/home/item-img/im-5.png" alt="">
                                        </span>
                                        <span class="card-body">
                                            <span class="card-title h4">Main Corporate</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-5 activeShow">
                                    <a class="card border-0 text-decoration-none text-dark" href="#">
                                        <span class="card-img shadow-lg rounded-3 overflow-hidden hv-box-lg">
                                            <span class="browser-topbar">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                            <img class="img-fluid" src="./assets/image/home/item-img/im-6.png" alt="">
                                        </span>
                                        <span class="card-body">
                                            <span class="card-title h4">Main Corporate</span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="m-3 mt-5 activeShow">
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
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <h2 class="m-0 text-white fs-1 fw-bold activeShow">Practical Inner pages for everything you may need</h2>
                                </div>

                                <!-- Swiper -->
                                <div class="activeShow">
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
                                                        <img class="img-fluid" src="./assets/image/home/item-img/im-1.png" alt="">
                                                    </span>
                                                    <span class="card-body">
                                                        <span class="card-title h4">Main Corporate</span>
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
                                                        <img class="img-fluid" src="./assets/image/home/item-img/im-2.png" alt="">
                                                    </span>
                                                    <span class="card-body">
                                                        <span class="card-title h4">Main Corporate</span>
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
                                                        <img class="img-fluid" src="./assets/image/home/item-img/im-3.png" alt="">
                                                    </span>
                                                    <span class="card-body">
                                                        <span class="card-title h4">Main Corporate</span>
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
                                                        <img class="img-fluid" src="./assets/image/home/item-img/im-4.png" alt="">
                                                    </span>
                                                    <span class="card-body">
                                                        <span class="card-title h4">Main Corporate</span>
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
                                                        <img class="img-fluid" src="./assets/image/home/item-img/im-5.png" alt="">
                                                    </span>
                                                    <span class="card-body">
                                                        <span class="card-title h4">Main Corporate</span>
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
                                                        <img class="img-fluid" src="./assets/image/home/item-img/im-6.png" alt="">
                                                    </span>
                                                    <span class="card-body">
                                                        <span class="card-title h4">Main Corporate</span>
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

                    <!-- Developer Team -->
                    <div class="pt-120 pb-5 bg-linear-gradient-3">
                        <div class="container">

                            <h2 class="text-center mb-90 fs-1 fw-bold activeShow">
                                Developer Team
                            </h2>

                            <div class="mb-100">
                                <div class="row g-4 position-relative">

                                    <div class="col-12 col-md-6 col-lg-3 activeShow">
                                        <div class="service-box position-relative bg-white text-center service-box-sm rounded-4">
                                            <div class="circle-icon text-white bg-danger mb-30">
                                                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="none">
                                                    <path fill="currentColor" fill-rule="evenodd" d="M26.125 2.375h-14.25A2.375 2.375 0 0 0 9.5 4.75V19a1.188 1.188 0 0 1-2.375 0V4.75A4.75 4.75 0 0 1 11.875 0h14.25a4.75 4.75 0 0 1 4.75 4.75V19a1.188 1.188 0 0 1-2.375 0V4.75a2.375 2.375 0 0 0-2.375-2.375ZM28.5 33.25a2.375 2.375 0 0 1-2.375 2.375h-14.25A2.375 2.375 0 0 1 9.5 33.25V28.5a1.188 1.188 0 0 0-2.375 0v4.75a4.75 4.75 0 0 0 4.75 4.75h14.25a4.75 4.75 0 0 0 4.75-4.75V28.5a1.188 1.188 0 0 0-2.375 0v4.75ZM4.068 18.89a1.188 1.188 0 0 0-.995-2.156c-.824.38-1.553.827-2.095 1.354-.541.537-.978 1.242-.978 2.1 0 1.296.969 2.232 1.955 2.852C3 23.7 4.432 24.25 6.099 24.693c3.349.893 7.909 1.432 12.901 1.432.235 0 .468 0 .698-.005l-2.726 2.727a1.188 1.188 0 1 0 1.681 1.681l4.75-4.75a1.186 1.186 0 0 0 0-1.681l-4.75-4.75a1.188 1.188 0 1 0-1.681 1.681l2.72 2.717-.692.005c-4.845 0-9.191-.525-12.288-1.351-1.558-.416-2.734-.889-3.491-1.366-.817-.515-.846-.831-.846-.846 0-.007 0-.14.266-.403.273-.266.736-.575 1.425-.893h.002Zm30.859-2.156a1.188 1.188 0 0 0-.995 2.157c.693.318 1.154.627 1.425.895.268.261.268.394.268.401 0 .008 0 .155-.309.445-.313.29-.836.617-1.608.95-1.532.665-3.79 1.242-6.562 1.631a1.187 1.187 0 0 0 .333 2.351c2.878-.403 5.367-1.02 7.172-1.8.903-.39 1.694-.848 2.28-1.394.585-.544 1.069-1.275 1.069-2.183 0-.86-.437-1.567-.978-2.097-.542-.53-1.271-.976-2.095-1.356ZM17.813 4.75a1.188 1.188 0 0 0 0 2.375h2.375a1.188 1.188 0 0 0 0-2.375h-2.375Z" clip-rule="evenodd"></path>
                                                </svg> -->
                                                <img class="circle-icon" src="./assets/image/admin/avt_pro.jpg" alt="avatar dev">
                                            </div>
                                            <h4 class="mb-3">Du Duy Nguyen</h4>
                                            <p class="fs-6 mb-0">Startbox has a fully responsive design. It fits perfectly on various displays and resolutions.</p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-3 activeShow">
                                        <div class="service-box position-relative bg-white text-center service-box-sm rounded-4">
                                            <div class="circle-icon text-white bg-danger mb-30">
                                                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="none">
                                                    <path fill="currentColor" fill-rule="evenodd" d="M26.125 2.375h-14.25A2.375 2.375 0 0 0 9.5 4.75V19a1.188 1.188 0 0 1-2.375 0V4.75A4.75 4.75 0 0 1 11.875 0h14.25a4.75 4.75 0 0 1 4.75 4.75V19a1.188 1.188 0 0 1-2.375 0V4.75a2.375 2.375 0 0 0-2.375-2.375ZM28.5 33.25a2.375 2.375 0 0 1-2.375 2.375h-14.25A2.375 2.375 0 0 1 9.5 33.25V28.5a1.188 1.188 0 0 0-2.375 0v4.75a4.75 4.75 0 0 0 4.75 4.75h14.25a4.75 4.75 0 0 0 4.75-4.75V28.5a1.188 1.188 0 0 0-2.375 0v4.75ZM4.068 18.89a1.188 1.188 0 0 0-.995-2.156c-.824.38-1.553.827-2.095 1.354-.541.537-.978 1.242-.978 2.1 0 1.296.969 2.232 1.955 2.852C3 23.7 4.432 24.25 6.099 24.693c3.349.893 7.909 1.432 12.901 1.432.235 0 .468 0 .698-.005l-2.726 2.727a1.188 1.188 0 1 0 1.681 1.681l4.75-4.75a1.186 1.186 0 0 0 0-1.681l-4.75-4.75a1.188 1.188 0 1 0-1.681 1.681l2.72 2.717-.692.005c-4.845 0-9.191-.525-12.288-1.351-1.558-.416-2.734-.889-3.491-1.366-.817-.515-.846-.831-.846-.846 0-.007 0-.14.266-.403.273-.266.736-.575 1.425-.893h.002Zm30.859-2.156a1.188 1.188 0 0 0-.995 2.157c.693.318 1.154.627 1.425.895.268.261.268.394.268.401 0 .008 0 .155-.309.445-.313.29-.836.617-1.608.95-1.532.665-3.79 1.242-6.562 1.631a1.187 1.187 0 0 0 .333 2.351c2.878-.403 5.367-1.02 7.172-1.8.903-.39 1.694-.848 2.28-1.394.585-.544 1.069-1.275 1.069-2.183 0-.86-.437-1.567-.978-2.097-.542-.53-1.271-.976-2.095-1.356ZM17.813 4.75a1.188 1.188 0 0 0 0 2.375h2.375a1.188 1.188 0 0 0 0-2.375h-2.375Z" clip-rule="evenodd"></path>
                                                </svg> -->
                                                <img class="circle-icon" src="./assets/image/admin/avt_pro.jpg" alt="avatar dev">
                                            </div>
                                            <h4 class="mb-3">Du Duy Nguyen</h4>
                                            <p class="fs-6 mb-0">Startbox has a fully responsive design. It fits perfectly on various displays and resolutions.</p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-3 activeShow">
                                        <div class="service-box position-relative bg-white text-center service-box-sm rounded-4">
                                            <div class="circle-icon text-white bg-danger mb-30">
                                                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="none">
                                                    <path fill="currentColor" fill-rule="evenodd" d="M26.125 2.375h-14.25A2.375 2.375 0 0 0 9.5 4.75V19a1.188 1.188 0 0 1-2.375 0V4.75A4.75 4.75 0 0 1 11.875 0h14.25a4.75 4.75 0 0 1 4.75 4.75V19a1.188 1.188 0 0 1-2.375 0V4.75a2.375 2.375 0 0 0-2.375-2.375ZM28.5 33.25a2.375 2.375 0 0 1-2.375 2.375h-14.25A2.375 2.375 0 0 1 9.5 33.25V28.5a1.188 1.188 0 0 0-2.375 0v4.75a4.75 4.75 0 0 0 4.75 4.75h14.25a4.75 4.75 0 0 0 4.75-4.75V28.5a1.188 1.188 0 0 0-2.375 0v4.75ZM4.068 18.89a1.188 1.188 0 0 0-.995-2.156c-.824.38-1.553.827-2.095 1.354-.541.537-.978 1.242-.978 2.1 0 1.296.969 2.232 1.955 2.852C3 23.7 4.432 24.25 6.099 24.693c3.349.893 7.909 1.432 12.901 1.432.235 0 .468 0 .698-.005l-2.726 2.727a1.188 1.188 0 1 0 1.681 1.681l4.75-4.75a1.186 1.186 0 0 0 0-1.681l-4.75-4.75a1.188 1.188 0 1 0-1.681 1.681l2.72 2.717-.692.005c-4.845 0-9.191-.525-12.288-1.351-1.558-.416-2.734-.889-3.491-1.366-.817-.515-.846-.831-.846-.846 0-.007 0-.14.266-.403.273-.266.736-.575 1.425-.893h.002Zm30.859-2.156a1.188 1.188 0 0 0-.995 2.157c.693.318 1.154.627 1.425.895.268.261.268.394.268.401 0 .008 0 .155-.309.445-.313.29-.836.617-1.608.95-1.532.665-3.79 1.242-6.562 1.631a1.187 1.187 0 0 0 .333 2.351c2.878-.403 5.367-1.02 7.172-1.8.903-.39 1.694-.848 2.28-1.394.585-.544 1.069-1.275 1.069-2.183 0-.86-.437-1.567-.978-2.097-.542-.53-1.271-.976-2.095-1.356ZM17.813 4.75a1.188 1.188 0 0 0 0 2.375h2.375a1.188 1.188 0 0 0 0-2.375h-2.375Z" clip-rule="evenodd"></path>
                                                </svg> -->
                                                <img class="circle-icon" src="./assets/image/admin/avt_pro.jpg" alt="avatar dev">
                                            </div>
                                            <h4 class="mb-3">Du Duy Nguyen</h4>
                                            <p class="fs-6 mb-0">Startbox has a fully responsive design. It fits perfectly on various displays and resolutions.</p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-3 activeShow">
                                        <div class="service-box position-relative bg-white text-center service-box-sm rounded-4">
                                            <div class="circle-icon text-white bg-danger mb-30">
                                                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="none">
                                                    <path fill="currentColor" fill-rule="evenodd" d="M26.125 2.375h-14.25A2.375 2.375 0 0 0 9.5 4.75V19a1.188 1.188 0 0 1-2.375 0V4.75A4.75 4.75 0 0 1 11.875 0h14.25a4.75 4.75 0 0 1 4.75 4.75V19a1.188 1.188 0 0 1-2.375 0V4.75a2.375 2.375 0 0 0-2.375-2.375ZM28.5 33.25a2.375 2.375 0 0 1-2.375 2.375h-14.25A2.375 2.375 0 0 1 9.5 33.25V28.5a1.188 1.188 0 0 0-2.375 0v4.75a4.75 4.75 0 0 0 4.75 4.75h14.25a4.75 4.75 0 0 0 4.75-4.75V28.5a1.188 1.188 0 0 0-2.375 0v4.75ZM4.068 18.89a1.188 1.188 0 0 0-.995-2.156c-.824.38-1.553.827-2.095 1.354-.541.537-.978 1.242-.978 2.1 0 1.296.969 2.232 1.955 2.852C3 23.7 4.432 24.25 6.099 24.693c3.349.893 7.909 1.432 12.901 1.432.235 0 .468 0 .698-.005l-2.726 2.727a1.188 1.188 0 1 0 1.681 1.681l4.75-4.75a1.186 1.186 0 0 0 0-1.681l-4.75-4.75a1.188 1.188 0 1 0-1.681 1.681l2.72 2.717-.692.005c-4.845 0-9.191-.525-12.288-1.351-1.558-.416-2.734-.889-3.491-1.366-.817-.515-.846-.831-.846-.846 0-.007 0-.14.266-.403.273-.266.736-.575 1.425-.893h.002Zm30.859-2.156a1.188 1.188 0 0 0-.995 2.157c.693.318 1.154.627 1.425.895.268.261.268.394.268.401 0 .008 0 .155-.309.445-.313.29-.836.617-1.608.95-1.532.665-3.79 1.242-6.562 1.631a1.187 1.187 0 0 0 .333 2.351c2.878-.403 5.367-1.02 7.172-1.8.903-.39 1.694-.848 2.28-1.394.585-.544 1.069-1.275 1.069-2.183 0-.86-.437-1.567-.978-2.097-.542-.53-1.271-.976-2.095-1.356ZM17.813 4.75a1.188 1.188 0 0 0 0 2.375h2.375a1.188 1.188 0 0 0 0-2.375h-2.375Z" clip-rule="evenodd"></path>
                                                </svg> -->
                                                <img class="circle-icon" src="./assets/image/admin/avt_pro.jpg" alt="avatar dev">
                                            </div>
                                            <h4 class="mb-3">Du Duy Nguyen</h4>
                                            <p class="fs-6 mb-0">Startbox has a fully responsive design. It fits perfectly on various displays and resolutions.</p>
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
            <div class="footer bg-dark text-white pt-120 pb-5">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-12 col-lg-3">
                            <a href="#" class="d-block mb-3">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                width="500.000000pt" height="500.000000pt" viewBox="0 0 500.000000 500.000000"
                                preserveAspectRatio="xMidYMid meet" style="height: 40px; width: 40px;">

                                <g transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)"
                                fill="#fff" stroke="none">
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
                            <p class="fs-6 mb-2">
                                Them and one moving the won't  <br>
                                may, moving saw wherein.
                            </p>
                            <ul class="nav text-white align-items-center mb-2" style="margin: 0 -14px;">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="17" fill="none">
                                            <path fill="#fff" d="M6.318 2.8h1.391V.202A16.842 16.842 0 0 0 5.683.088c-2.006 0-3.38 1.353-3.38 3.837v2.287H.089v2.902h2.214v7.303h2.713V9.114H7.14l.338-2.902H5.016v-2c0-.839.21-1.413 1.302-1.413Z"></path>
                                        </svg>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="15" fill="none">
                                            <path fill="#fff" d="M19.687 2.485A2.472 2.472 0 0 0 17.953.73C16.423.313 10.29.313 10.29.313s-6.133 0-7.662.416A2.473 2.473 0 0 0 .895 2.485c-.41 1.55-.41 4.782-.41 4.782s0 3.233.41 4.782c.226.855.89 1.5 1.734 1.729 1.53.415 7.662.415 7.662.415s6.132 0 7.662-.415a2.435 2.435 0 0 0 1.734-1.729c.41-1.549.41-4.782.41-4.782s0-3.232-.41-4.782ZM8.285 10.203v-5.87l5.126 2.934-5.126 2.936Z"></path>
                                        </svg>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="none">
                                            <path fill="#fff" d="M17.477 4.484c.012.165.012.329.012.493 0 5.014-3.817 10.792-10.792 10.792-2.149 0-4.145-.623-5.824-1.703.305.035.599.047.916.047a7.596 7.596 0 0 0 4.709-1.62 3.8 3.8 0 0 1-3.547-2.63c.235.034.47.058.717.058.34 0 .68-.047.998-.13A3.793 3.793 0 0 1 1.625 6.07v-.047a3.82 3.82 0 0 0 1.714.482 3.79 3.79 0 0 1-1.691-3.159c0-.704.188-1.35.517-1.914a10.781 10.781 0 0 0 7.82 3.97 4.282 4.282 0 0 1-.094-.87c0-2.09 1.691-3.793 3.793-3.793 1.092 0 2.079.458 2.771 1.198a7.466 7.466 0 0 0 2.408-.916c-.282.88-.881 1.62-1.668 2.09a7.604 7.604 0 0 0 2.184-.587 8.153 8.153 0 0 1-1.902 1.961Z"></path>
                                        </svg>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none">
                                            <path fill="#fff" d="M8.788 4.097C6.47 4.097 4.6 5.95 4.6 8.25c0 2.298 1.87 4.153 4.188 4.153 2.318 0 4.188-1.855 4.188-4.153 0-2.3-1.87-4.153-4.188-4.153Zm0 6.853c-1.498 0-2.723-1.211-2.723-2.7 0-1.49 1.221-2.7 2.723-2.7 1.502 0 2.723 1.21 2.723 2.7 0 1.489-1.225 2.7-2.723 2.7Zm5.336-7.023a.97.97 0 0 1-.977.968.97.97 0 0 1-.976-.968c0-.535.437-.969.976-.969.54 0 .977.434.977.969Zm2.774.983c-.062-1.298-.36-2.447-1.32-3.394C14.624.569 13.465.272 12.156.207c-1.349-.076-5.39-.076-6.74 0C4.113.27 2.954.565 1.995 1.512 1.035 2.46.74 3.61.674 4.906c-.076 1.338-.076 5.346 0 6.683.063 1.298.361 2.447 1.32 3.394.959.947 2.114 1.244 3.423 1.309 1.348.076 5.39.076 6.739 0 1.308-.062 2.468-.358 3.422-1.309.956-.947 1.254-2.096 1.32-3.394.076-1.337.076-5.342 0-6.68Zm-1.742 8.114a2.745 2.745 0 0 1-1.553 1.54c-1.075.423-3.627.325-4.815.325-1.188 0-3.743.095-4.815-.325a2.746 2.746 0 0 1-1.552-1.54c-.427-1.066-.329-3.596-.329-4.774 0-1.179-.094-3.712.329-4.775a2.745 2.745 0 0 1 1.552-1.54C5.048 1.512 7.6 1.61 8.788 1.61c1.188 0 3.743-.094 4.815.325a2.745 2.745 0 0 1 1.553 1.54c.426 1.066.328 3.596.328 4.775 0 1.178.098 3.712-.328 4.774Z"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <p class="font-6 text-muted m-0">© 2022 Designed by ndd.</p>
                        </div>
                        <!-- col 2 tạo khoảng cách -->
                        <div class="col-2 d-none d-lg-block"></div>
                        <div class="col-12 col-lg-7">
                            <div class="row g-5">
                                <div class="col-6 col-md-4">
                                    <h6 class="display-6 text-white mb-3">Services</h6>
                                    <ul class="nav flex-column text-white">
                                        <li class="nav-item">
                                            <a class="nav-link ps-0 text-muted" href="#">Consulting</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ps-0 text-muted" href="#">Human Resources</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ps-0 text-muted" href="#">Accounting</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ps-0 text-muted" href="#">Marketing & SEO</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6 col-md-4">
                                    <h6 class="display-6 text-white mb-3">About</h6>
                                    <ul class="nav flex-column text-white">
                                        <li class="nav-item">
                                            <a class="nav-link ps-0 text-muted" href="#">About us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ps-0 text-muted" href="#">Our Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ps-0 text-muted" href="#">Our Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ps-0 text-muted" href="#">Contact us</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6 col-md-4">
                                    <h6 class="display-6 text-white mb-3">Contact</h6>
                                    <ul class="nav flex-column text-white">
                                        <li class="nav-item">
                                            <a class="nav-link ps-0 text-muted" href="tel:0968590075">+84 968 590 075</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ps-0 text-muted" href="tel:0968590075">+84 968 590 075</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ps-0 text-muted" href="mailto:nduydu66@gmail.com">nduydu66@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    </body>
</html>
