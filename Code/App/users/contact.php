<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- CSS ME -->
    <link rel="stylesheet" href="./assets/css/header-footer.css" />
    <link rel="stylesheet" href="./assets/css/base.css" />
    <link rel="stylesheet" href="./assets/css/contact.css" />
    <!--favicon-->
    <link rel="icon" type="image/x-icon" href="./assets/image/favicon.png" />
    <title>Contact</title>
</head>

<body>
    <div class="app">
        <!--BEGIN nav -->
        <nav class="navbar navbar-expand-lg position-fixed">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="500.000000pt" height="500.000000pt"
                        viewBox="0 0 500.000000 500.000000" preserveAspectRatio="xMidYMid meet"
                        style="height: 40px; width: 40px;">
                        <g transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)" fill="#00000"
                            stroke="none">
                            <path d="M2650 4978 c0 -3 9 -31 20 -64 26 -74 64 -226 82 -324 8 -48 13 -151
                        12 -285 0 -178 -4 -226 -23 -315 -70 -331 -210 -586 -460 -843 -97 -100 -318
                        -287 -339 -287 -15 0 -92 104 -137 184 -71 128 -125 346 -125 509 0 42 -3 77
                        -6 77 -7 0 -23 -17 -128 -140 -257 -300 -573 -786 -705 -1086 -62 -140 -128
                        -336 -164 -484 -81 -331 -76 -673 12 -934 118 -347 343 -589 711 -765 314
                        -150 631 -211 1094 -211 670 0 1127 142 1424 442 244 246 407 608 453 1007 16
                        140 6 550 -16 691 -42 268 -117 554 -206 780 -65 167 -231 501 -339 680 -199
                        330 -523 739 -860 1084 -134 137 -300 294 -300 284z" />
                        </g>
                    </svg>
                </a>
                <a id="bg-show-mobile" class="navbar-toggler text-dark" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExampleXxl">
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
                            <a class="nav-link text-dark fw-bold hv-cl" href="./service.html">Service</a>
                            <ul class="sub rounded p-0">
                                <li>
                                    <a class="nav-link text-dark text-left hv-bg" href="./service1.html">Khám phá hang động</a>
                                </li>
                                <li>
                                    <a class="nav-link text-dark text-left hv-bg" href="./service2.html">Du lịch cắm trại</a>
                                </li>
                                <li>
                                    <a class="nav-link text-dark text-left hv-bg" href="./service3.html">Chinh Phục đỉnh cao</a>
                                </li>
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
                            <a class="nav-link text-dark fw-bold hv-cl" href="#">History</a>
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
                            <a class="nav-link text-dark fw-bold hv-cl" href="#">Blog</a>
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
                        <li class="nav-item ps-3 pe-3 mt-2 dropdown">
                            <a href="../Fontend/news.html" class="nav-link text-dark fw-bold hv-cl" href="#">News</a>
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
                        <li class="nav-item ps-3 pe-3 mt-2 dropdown">
                            <a class="nav-link text-dark fw-bold hv-cl" href="#">Contact</a>
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
                            <a class="nav-link text-center p-2 hv-box text-white fw-bold bg-danger rounded-pill"
                                href="login.php">
                                Login
                            </a>
                        </li>
                        <li class="nav-item ps-3 pe-3 mt-2 mb-2">
                            <a class="nav-link text-center p-2 hv-box text-white fw-bold bg-primary rounded-pill"
                                href="register.php">
                                Register
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--END Header -->

        <!-- BEGIN Main -->
        <div class="main">
            <div class="header-contact bg-image">
            </div>
            <div class="row">
                <div class="section-contact_text">
                    <h3 style="opacity: 1; right: 0px;">Contact Us</h3>
                    <div class="contact-method">
                        <div class="col-lg-3 col-md-6 method-news">
                            <a href="#">
                                <i class="bi bi-person-circle"></i>
                            </a>
                            <p>NEWSLETTER</p>
                        </div>
                        <div class="col-lg-3 col-md-6 method-facebook">
                            <a href="#">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <p>FACEBOOK</p>
                        </div>
                        <div class="col-lg-3 col-md-6 method-twitter">
                            <a href="#">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <p>TWITTER</p>
                        </div>
                        <div class="col-lg-3 col-md-6 method-youtube">
                            <a href="#">
                                <i class="bi bi-youtube"></i>
                            </a>
                            <p>YOUTUBE</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7445.865886625454!2d105.7739517!3d21.0753403!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1665641243585!5m2!1svi!2s"
                        width="90%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="container">
                <div class="row gy-50 mt-5 mb-5">
                    <div class="col-lg-4">
                        <!-- Item-->
                        <div class="d-flex animated" data-show="startbox"
                            style="transform: translateY(0px); transition-duration: 500ms; opacity: 1;">
                            <div class="flex-shrink-0"><svg class="text-accent-1" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="none">
                                    <path fill="currentColor"
                                        d="M16 11.98v2.408a1.604 1.604 0 0 1-1.094 1.527 1.613 1.613 0 0 1-.66.079 15.941 15.941 0 0 1-6.943-2.465A15.672 15.672 0 0 1 2.476 8.71a15.869 15.869 0 0 1-2.47-6.96A1.603 1.603 0 0 1 .96.136C1.163.047 1.384 0 1.607 0h2.414A1.61 1.61 0 0 1 5.63 1.381c.102.77.29 1.528.563 2.256a1.603 1.603 0 0 1-.362 1.694l-1.022 1.02a12.86 12.86 0 0 0 4.827 4.817l1.022-1.02a1.61 1.61 0 0 1 1.697-.36c.73.271 1.489.46 2.26.561A1.61 1.61 0 0 1 16 11.98Z">
                                    </path>
                                </svg></div>
                            <div class="flex-grow-1 ms-4">
                                <h5 class="m-0">Contact info:</h5>
                                <p class="m-0 mt-15">Email: thangkaka2K@gmail.com <br>Hotline: 19008198</p>
                            </div>
                        </div><!-- Item-->
                        <div class="d-flex mt-5  animated" data-show="startbox" data-show-delay="100"
                            style="transform: translateY(0px); transition-duration: 500ms; opacity: 1;">
                            <div class="flex-shrink-0"><svg class="text-accent-1" xmlns="http://www.w3.org/2000/svg"
                                    width="15" height="17" fill="none">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M7.5 17S15 12.364 15 6.955c0-1.845-.79-3.614-2.197-4.918C11.397.733 9.49 0 7.5 0 5.51 0 3.603.733 2.197 2.037.79 3.34 0 5.11 0 6.955 0 12.364 7.5 17 7.5 17ZM10 7.286c0 1.341-1.12 2.428-2.5 2.428S5 8.627 5 7.286c0-1.342 1.12-2.429 2.5-2.429S10 5.944 10 7.286Z"
                                        clip-rule="evenodd"></path>
                                </svg></div>
                            <div class="flex-grow-1 ms-4">
                                <h5 class="m-0">Address:</h5>
                                <p class="m-0 mt-15">68 Đinh Tiên Hoàng, <br>Hoàn Kiếm,Hà Nội</p>
                            </div>
                        </div><!-- Item-->
                        <div class="d-flex mt-5 animated" data-show="startbox" data-show-delay="200"
                            style="transform: translateY(0px); transition-duration: 500ms; opacity: 1;">
                            <div class="flex-shrink-0"><svg class="text-accent-1" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="none">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.7 3.379a1 1 0 1 0-2 0v4.8a1 1 0 0 0 .553.894l3.2 1.6a1 1 0 1 0 .894-1.789L8.7 7.561V3.379Z"
                                        clip-rule="evenodd"></path>
                                </svg></div>
                            <div class="flex-grow-1 ms-4">
                                <h5 class="m-0">Hours of operation:</h5>
                                <p class="m-0 mt-15">Monday - Friday <br>10:00 am - 7:30 pm</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 animated" data-show="startbox" data-show-delay="300"
                        style="transform: translateY(0px); transition-duration: 500ms; opacity: 1;">
                        <!-- Form-->
                        <form>
                            <div class="row gy-40">
                                <div class="col-12 col-md-6 mb-5"><input class="form-control form-contact" type="text"
                                        placeholder="Your Name *"></div>
                                <div class="col-12 col-md-6 mb-5"><input class="form-control form-contact" type="email"
                                        placeholder="Your Email *"></div>
                                <div class="col-12 col-md-6 mb-5"><input class="form-control form-contact" type="tel"
                                        placeholder="Your Phone *"></div>
                                <div class="col-12 col-md-6 mb-5"><input class="form-control form-contact" type="text"
                                        placeholder="Address"></div>
                                        placeholder="Company"></div>
                                <div class="col-12 mb-5"><textarea class="form-control form-contact" rows="2"
                                        placeholder="Message *"></textarea></div>
                                <div class="col-12 col-lg-3 text-end text-lg-start">
                                    <!-- Button--><button class="btn btn-danger">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Main -->

        <!--BEGIN Footer -->
        <div class="footer bg-dark text-white pt-120 pb-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-12 col-lg-3">
                        <a href="#" class="d-block mb-3">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="500.000000pt"
                                height="500.000000pt" viewBox="0 0 500.000000 500.000000"
                                preserveAspectRatio="xMidYMid meet" style="height: 40px; width: 40px;">

                                <g transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)" fill="#fff"
                                    stroke="none">
                                    <path d="M2650 4978 c0 -3 9 -31 20 -64 26 -74 64 -226 82 -324 8 -48 13 -151
                                12 -285 0 -178 -4 -226 -23 -315 -70 -331 -210 -586 -460 -843 -97 -100 -318
                                -287 -339 -287 -15 0 -92 104 -137 184 -71 128 -125 346 -125 509 0 42 -3 77
                                -6 77 -7 0 -23 -17 -128 -140 -257 -300 -573 -786 -705 -1086 -62 -140 -128
                                -336 -164 -484 -81 -331 -76 -673 12 -934 118 -347 343 -589 711 -765 314
                                -150 631 -211 1094 -211 670 0 1127 142 1424 442 244 246 407 608 453 1007 16
                                140 6 550 -16 691 -42 268 -117 554 -206 780 -65 167 -231 501 -339 680 -199
                                330 -523 739 -860 1084 -134 137 -300 294 -300 284z" />
                                </g>
                            </svg>
                        </a>
                        <p class="fs-6 mb-2">
                            Them and one moving the won't <br>
                            may, moving saw wherein.
                        </p>
                        <ul class="nav text-white align-items-center mb-2" style="margin: 0 -14px;">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="17" fill="none">
                                        <path fill="#fff"
                                            d="M6.318 2.8h1.391V.202A16.842 16.842 0 0 0 5.683.088c-2.006 0-3.38 1.353-3.38 3.837v2.287H.089v2.902h2.214v7.303h2.713V9.114H7.14l.338-2.902H5.016v-2c0-.839.21-1.413 1.302-1.413Z">
                                        </path>
                                    </svg>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="15" fill="none">
                                        <path fill="#fff"
                                            d="M19.687 2.485A2.472 2.472 0 0 0 17.953.73C16.423.313 10.29.313 10.29.313s-6.133 0-7.662.416A2.473 2.473 0 0 0 .895 2.485c-.41 1.55-.41 4.782-.41 4.782s0 3.233.41 4.782c.226.855.89 1.5 1.734 1.729 1.53.415 7.662.415 7.662.415s6.132 0 7.662-.415a2.435 2.435 0 0 0 1.734-1.729c.41-1.549.41-4.782.41-4.782s0-3.232-.41-4.782ZM8.285 10.203v-5.87l5.126 2.934-5.126 2.936Z">
                                        </path>
                                    </svg>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="none">
                                        <path fill="#fff"
                                            d="M17.477 4.484c.012.165.012.329.012.493 0 5.014-3.817 10.792-10.792 10.792-2.149 0-4.145-.623-5.824-1.703.305.035.599.047.916.047a7.596 7.596 0 0 0 4.709-1.62 3.8 3.8 0 0 1-3.547-2.63c.235.034.47.058.717.058.34 0 .68-.047.998-.13A3.793 3.793 0 0 1 1.625 6.07v-.047a3.82 3.82 0 0 0 1.714.482 3.79 3.79 0 0 1-1.691-3.159c0-.704.188-1.35.517-1.914a10.781 10.781 0 0 0 7.82 3.97 4.282 4.282 0 0 1-.094-.87c0-2.09 1.691-3.793 3.793-3.793 1.092 0 2.079.458 2.771 1.198a7.466 7.466 0 0 0 2.408-.916c-.282.88-.881 1.62-1.668 2.09a7.604 7.604 0 0 0 2.184-.587 8.153 8.153 0 0 1-1.902 1.961Z">
                                        </path>
                                    </svg>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none">
                                        <path fill="#fff"
                                            d="M8.788 4.097C6.47 4.097 4.6 5.95 4.6 8.25c0 2.298 1.87 4.153 4.188 4.153 2.318 0 4.188-1.855 4.188-4.153 0-2.3-1.87-4.153-4.188-4.153Zm0 6.853c-1.498 0-2.723-1.211-2.723-2.7 0-1.49 1.221-2.7 2.723-2.7 1.502 0 2.723 1.21 2.723 2.7 0 1.489-1.225 2.7-2.723 2.7Zm5.336-7.023a.97.97 0 0 1-.977.968.97.97 0 0 1-.976-.968c0-.535.437-.969.976-.969.54 0 .977.434.977.969Zm2.774.983c-.062-1.298-.36-2.447-1.32-3.394C14.624.569 13.465.272 12.156.207c-1.349-.076-5.39-.076-6.74 0C4.113.27 2.954.565 1.995 1.512 1.035 2.46.74 3.61.674 4.906c-.076 1.338-.076 5.346 0 6.683.063 1.298.361 2.447 1.32 3.394.959.947 2.114 1.244 3.423 1.309 1.348.076 5.39.076 6.739 0 1.308-.062 2.468-.358 3.422-1.309.956-.947 1.254-2.096 1.32-3.394.076-1.337.076-5.342 0-6.68Zm-1.742 8.114a2.745 2.745 0 0 1-1.553 1.54c-1.075.423-3.627.325-4.815.325-1.188 0-3.743.095-4.815-.325a2.746 2.746 0 0 1-1.552-1.54c-.427-1.066-.329-3.596-.329-4.774 0-1.179-.094-3.712.329-4.775a2.745 2.745 0 0 1 1.552-1.54C5.048 1.512 7.6 1.61 8.788 1.61c1.188 0 3.743-.094 4.815.325a2.745 2.745 0 0 1 1.553 1.54c.426 1.066.328 3.596.328 4.775 0 1.178.098 3.712-.328 4.774Z">
                                        </path>
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
                                        <a class="nav-link ps-0 text-muted"
                                            href="mailto:nduydu66@gmail.com">nduydu66@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END Footer -->
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
