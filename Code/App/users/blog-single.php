<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Single</title>
    <!-- bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">  
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/header-footer.css">
    


    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/owl.theme.default.min.css">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="./assets/css/aos.css">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="./assets/css/Style.css">
    

</head>

<body>
    <style>
 .blog-single-content{
    text-align:start;
    color:black;
    
    
    margin: 5rem auto;
    } 
    .blog-single-title{
        
    padding-top: 10rem;
    text-align: center;
    color: #ffffff;
    font-size: 50px ;
    font-weight: bold ;
    
    }
    </style>
    <!-- ----------------------------  Navigation ---------------------------------------------- -->
    <div class="app">
        <!--BEGIN nav -->
            <nav class="navbar navbar-expand-lg position-fixed">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="500.000000pt" height="500.000000pt" viewBox="0 0 500.000000 500.000000" preserveAspectRatio="xMidYMid meet" style="height: 40px; width: 40px;">
                            <g transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)" fill="#00000" stroke="none">
                                <path
                                    d="M2650 4978 c0 -3 9 -31 20 -64 26 -74 64 -226 82 -324 8 -48 13 -151
                        12 -285 0 -178 -4 -226 -23 -315 -70 -331 -210 -586 -460 -843 -97 -100 -318
                        -287 -339 -287 -15 0 -92 104 -137 184 -71 128 -125 346 -125 509 0 42 -3 77
                        -6 77 -7 0 -23 -17 -128 -140 -257 -300 -573 -786 -705 -1086 -62 -140 -128
                        -336 -164 -484 -81 -331 -76 -673 12 -934 118 -347 343 -589 711 -765 314
                        -150 631 -211 1094 -211 670 0 1127 142 1424 442 244 246 407 608 453 1007 16
                        140 6 550 -16 691 -42 268 -117 554 -206 780 -65 167 -231 501 -339 680 -199
                        330 -523 739 -860 1084 -134 137 -300 294 -300 284z"
                                />
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
    </div>
    <!-- ------------x---------------  Navigation --------------------------x------------------- -->

    <!----------------------------- Main Site Section ------------------------------>

    <main>

        <!------------------------ Site Title ---------------------->

        <div class="site-title" style="background-image: url('./assets/Blog-post/blog1.png')">
            <div class="blog-single-title" data-aos="fade-up" data-aos-delay="500">
         
                This is Title blog single            

            </div>
        </div>
        
        <!------------x----------- Site Title ----------x----------->


</main>
        <!-- ---------------------- Site Content -------------------------->

        <div class="container">
            <div class="blog-single-content" data-aos="fade-up" data-aos-delay="200">
                <span>Tả Liên Sơn hay còn được gọi với cái tên khác là Cổ Trâu. Chẳng có điều gì tuyệt vời hơn khi bạn đứng trên bản nhìn lên sẽ có thể thấy được hình dáng to lớn và cao chót vót của ngọn núi này. Cũng vì thế mà người ta đã ví  đỉnh núi hùng vĩ như sống lưng của loài trâu mộng sống tại ngay dưới chân núi nên Tả Liên Sơn này vậy.

Độ cao so với mặt nước của Tả Liên là 2996m và đây cũng chính là ngọn núi cao thứ 6 của Việt Nam nằm tại thuộc xã Tả Lèng, huyện Tam Đường, Lai Châu.

Khi đến với khu rừng Tả Liên, bạn có thể ngỡ ngàng  với thảm thực vật đa dạng và đầy thú thú vị của nơi đây. Bạn sẽ chẳng thể nào tìm kiếm được cánh rừng nguyên sinh có chứa nhiều cây cổ thụ xum xuê. Thân cây to lớn được phủ đầy rêu tạo nên một bức tranh rêu phong và dương xỉ mang một khung cảnh cổ tích đầy huyền bí.

Chưa hết, với  bao thảm hoa trà trắng cả lối đi pha thêm những màu lá phong đỏ cùng thảm rêu xanh đã tạo nên một trời thơ mộng.Những cây leo dài ngoằng cộng sinh trên phiến đá tạo nên quang cảnh vừa lạ lẫm lại đầy mạnh mẽ. Chúng như vươn mình để tìm kiếm sự sống nơi rừng u tối. 

Khi chinh phục đỉnh núi này, đứng từ trên cao, bạn đã có thể trọn vẹn mà nhìn ngắm thành phố Lai Châu xinh đẹp giữa bốn bề núi rừng mây giăng đầy hùng vĩ này rồi. </span>>    
                
            </div>
        </div>

        <!-- -----------x---------- Site Content -------------x------------>

    

 


    <!-- --------------------------- Footer ---------------------------------------- -->
    <div class="app">
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
    </div>
    

    <!-- Jquery Library file -->
    <script src="./assets/js/Jquery.min.js"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <!-- js bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="./assets/js/aos.js"></script>
    <!-- js swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- Custom Javascript file -->
    <script src="./assets/js/main.js"></script>
</body>

</html>