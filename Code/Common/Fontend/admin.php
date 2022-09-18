<?php
// bawts ddaafu tuwf treen cungf
session_start();

require_once './PhpSetting/Common.php';
require_once './PhpSetting/User.php';

$checkss = IsAuthen();
if($checkss != 1) {
    redirect("/Projectky1/login.php");
}

if (!empty($_POST["flogout"])) {
    $a = new User();
    $arr = $a->Logout();
    redirect("/Projectky1/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Reset CSS -->
        <link rel="stylesheet" href="./assets/css/reset.min.css">
        <!-- BOOTSTRAP 5.0 CSS -->
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <!-- BOOTSTRAP ICON -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <!-- Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
        <!-- CSS ME -->
        <link rel="stylesheet" href="./assets/css/admin.css" />
        <title>Admin</title>
    </head>
    <body id="body-pd" class="body-pd">
        <div class="app">
            <!-- BEGIN HEADER -->
            <header class="header body-pd" id="header">
                <div class="header_toggle"><i class="bx bx-menu text-dark" id="header-toggle"></i></div>
                <form class="w-50"><input type="search" class="form-control" placeholder="Tìm kiếm..." aria-label="Search" /></form>
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="user" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="./assets/image/avt_pro.jpg" alt="quản trị" width="40" height="40" class="rounded-circle" />
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="user" style="min-width: 256px;">
                        <li>
                            <a class="dropdown-item" href="#">
                                <?php
                                require_once './PhpSetting/User.php';


                                $u = new User();
                                $u->Username = (string) $_SESSION["Username"];
                                $list = $u->GetUserByUsername();


                                for ($i = 0; $i < count($list); $i++) {
                                    $obj = $list[$i];

                                    echo "Chào" . " " . strtoupper($obj->Lastname ." " . $obj->Middlename . " " . $obj->Fisrtname);
                                }
                                ?>
                            </a>
                        </li>
                        <li><a class="dropdown-item" href="#">Trang cá nhân</a></li>
                        <li><a class="dropdown-item" href="#">Cài đặt cá nhân</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                            <li><input class="dropdown-item" type="submit" name="flogout" value="Đăng xuất"></li>
                        </form>
                    </ul>
                </div>
            </header>

            <!-- END HEADER -->

            <!-- BEGIN NAV -->
            <div class="l-navbar showsidebar" id="nav-bar"></div>
            <!-- END NAV -->

            <!-- BEGIN MAIN -->
            <main class="main">
                <div class="container-xl">
                    <div class="row mt-3 mb-3 g-3">
                        <!-- Box giờ hiện tại -->
                        <div class="mt-3 col-md-6 col-xxl-3">
                            <div class="bg-white shadow card">
                                <p class="p-2 pt-3 fs-6 fw-bold m-0">Thời gian hiện tại</p>
                                <div class="p-3 text-center border-top">
                                    <span class="m-1 fs-4 fw-bold m-0 text-secondary" id="now-clock"></span>
                                    <i class="fs-3 bi bi-alarm text-danger"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Box tổng lượng truy cập -->
                        <div class="mt-3 col-md-6 col-xxl-3">
                             <div class="bg-white shadow card">
                                <p class="p-2 pt-3 fs-6 fw-bold m-0">Tổng số lượng truy cập</p>
                                <div class="p-3 text-center border-top">
                                    <span class="m-3 fs-4 fw-bold m-0 text-secondary">1,2 Triệu</span>
                                    <i class="fs-3 bi bi-reception-4 text-success"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Box lượng truy cập các kì thi -->
                        <div class="mt-3 col-md-6 col-xxl-3">
                             <div class="bg-white shadow card">
                                <p class="p-2 pt-3 fs-6 fw-bold m-0">Lượng truy cập sản phẩm</p>
                                <div class="text-center border-top" style="padding: 6px;">
                                    <div class="chart-access float-end m-2"></div>
                                    <ul class="m-2 p-0">
                                        <li class="fs text-start">
                                            <span class="dot-1 me-2"></span>
                                            Sản phẩm 1 57%
                                        </li>
                                        <li class="fs text-start">
                                            <span class="dot-2 me-2"></span>
                                            Sản phẩm 2 15%
                                        </li>
                                        <li class="fs text-start">
                                            <span class="dot-3 me-2"></span>
                                            Sản phẩm 3 28%
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Box thời tiết -->
                        <div class="mt-3 col-md-6 col-xxl-3">
                             <div class="bg-white shadow card">
                                <p class="p-2 pt-3 fs-6 fw-bold m-0">Thời tiết</p>
                                <div class="text-center border-top p-3">
                                    <span class="fs-4 fw-bold text-secondary">Hà nội 27° - 32°</span>
                                    <img class="img-fluid" src="https://prium.github.io/falcon/v3.11.0/assets/img/icons/weather-icon.png" alt="thời tiết" style="width: 38px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <!-- END MAIN -->

            <!-- BEGIN FOOTER -->
            <footer class="footer body-pd" id="footer"></footer>
            <!-- END FOOTER -->
        </div>

        <!-- JQUERY 3.6.1 -->
        <script src="./assets/js/jquery.min.js"></script>
        <!-- JS BOOTSTRAP -->
        <script src="./assets/js/bootstrap.bundle.min.js"></script>
        <!-- JS ME -->
        <script src="./assets/js/loadMenu.js"></script>
        <script src="./assets/js/admin.js"></script>
    </body>
</html>
