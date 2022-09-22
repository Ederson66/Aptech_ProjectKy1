<?php
// bắt đầu trên cùng
session_start();

require_once './PhpSetting/Common.php';
require_once './PhpSetting/User.php';

$checkss = IsAuthen();
if($checkss != 1) {
    redirect("login.php");
}

if (!empty($_POST["flogout"])) {
    $a = new User();
    $arr = $a->Logout();
    redirect("login.php");
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
        <!-- BOOTSTRAP 5.0.2 CSS -->
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <!-- BOOTSTRAP ICON -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <!-- Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
        <!-- CSS ME -->
        <link rel="stylesheet" href="./assets/css/admin.css" />
        <!--favicon-->
        <link rel="icon" type="image/x-icon" href="./assets/image/favicon.png">
        <title>Admin</title>
    </head>
    <body id="body-pd">
        <div class="app">
            <!-- BEGIN HEADER -->
            <header class="header" id="header">
                <div class="header_toggle"><i class="bx bx-menu text-dark" id="header-toggle"></i></div>
                <form class="w-50"><input type="search" class="form-control" placeholder="Search..." aria-label="Search" /></form>
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

                                    echo "Hello" . " " . ucwords($obj->Lastname ." " . $obj->Middlename . " " . $obj->Fisrtname);
                                }
                                ?>
                            </a>
                        </li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                            <li><input class="dropdown-item" type="submit" name="flogout" value="Logout"></li>
                        </form>
                    </ul>
                </div>
            </header>

            <!-- END HEADER -->

            <!-- BEGIN NAV -->
            <div class="l-navbar" id="nav-bar"></div>
            <!-- END NAV -->

            <!-- BEGIN MAIN -->
            <main class="main">
                <div class="container">
                    <div class="row mt-3 mb-3 g-3">
                        <!-- Box giờ hiện tại -->
                        <div class="mt-3 col-md-6 col-xxl-3">
                            <div class="bg-white shadow card">
                                <p class="p-2 pt-3 fs-6 fw-bold m-0">The present time</p>
                                <div class="p-3 text-center border-top">
                                    <span class="m-1 fs-4 fw-bold m-0 text-secondary" id="now-clock"></span>
                                    <i class="fs-3 bi bi-alarm text-danger"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Box tổng lượng truy cập -->
                        <div class="mt-3 col-md-6 col-xxl-3">
                             <div class="bg-white shadow card">
                                <p class="p-2 pt-3 fs-6 fw-bold m-0">Total hits</p>
                                <div class="p-3 text-center border-top">
                                    <span class="m-3 fs-4 fw-bold m-0 text-secondary">1,2 Million</span>
                                    <i class="fs-3 bi bi-reception-4 text-success"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Box lượng truy cập các kì thi -->
                        <div class="mt-3 col-md-6 col-xxl-3">
                             <div class="bg-white shadow card">
                                <p class="p-2 pt-3 fs-6 fw-bold m-0">Product traffic</p>
                                <div class="text-center border-top" style="padding: 6px;">
                                    <div class="chart-access float-end m-2"></div>
                                    <ul class="m-2 p-0">
                                        <li class="fs text-start">
                                            <span class="dot-1 me-2"></span>
                                            Product 1 57%
                                        </li>
                                        <li class="fs text-start">
                                            <span class="dot-2 me-2"></span>
                                            Product 2 15%
                                        </li>
                                        <li class="fs text-start">
                                            <span class="dot-3 me-2"></span>
                                            Product 3 28%
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Box thời tiết -->
                        <div class="mt-3 col-md-6 col-xxl-3">
                            <div class="bg-white shadow card">
                                <p class="p-2 pt-3 fs-6 fw-bold m-0">Weather</p>
                                <div class="text-center border-top p-3">
                                    <span class="fs-4 fw-bold text-secondary">Ha noi 27° - 30°</span>
                                    <img class="img-fluid" src="https://prium.github.io/falcon/v3.11.0/assets/img/icons/weather-icon.png" alt="thời tiết" style="width: 38px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row g-3 mb-3">
                        <!-- biểu đồ chart_div -->
                        <div class="col-lg-6 pe-lg-2">
                            <!-- <div class="card overflow-hidden shadow p-2">
                                <div class="chart_div"></div>
                            </div> -->
                            <div class="p-2 card shadow" style="height: 100%;">
                                <div>
                                    <canvas id="myChart2"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- biểu đồ curve_chart -->
                        <div class="col-lg-6 pe-lg-2">
                            <!-- <div class="card overflow-hidden shadow">
                                <div class="curve_chart"></div>
                            </div> -->
                            <div class="p-2 card shadow" style="height: 100%;">
                                <div>
                                    <canvas id="myChart3"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row g-3 mb-3">
                        <div class="col-lg-6 col-xl-7 col-xxl-8 pe-lg-2">
                            <div class="p-2 card shadow">
                                <p class="p-2 m-0 fw-bold">Used 1775.06 MB out of 2 GB</p>
                                <div class="progress">
                                    <div class="bar" style="width:45%">
                                        <p class="percent">45%</p>
                                    </div>
                                    <div class="bar1" style="width:26%">
                                        <p class="percent">26%</p>
                                    </div>
                                    <div class="bar2" style="width:17%">
                                        <p class="percent">17%</p>
                                    </div>
                                </div>
                                <ul class="m-1 p-0 d-flex">
                                    <li class="pe-3 p-2">
                                        <span class="dot-3"></span>
                                        Image
                                    </li>
                                    <li class="pe-3 ps-3 p-2">
                                        <span class="dot-1"></span>
                                        Content
                                    </li>
                                    <li class="pe-3 ps-3 p-2">
                                        <span class="dot-4"></span>
                                        Other
                                    </li>
                                    <li class="pe-3 ps-3 p-2">
                                        <span class="dot-5"></span>
                                        Empty
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-5 col-xxl-4 ps-lg-2">
                            <div class="p-2 card bg-holder shadow" style="background-image:url(https://prium.github.io/falcon/v3.11.0/assets/img/icons/spot-illustrations/corner-1.png);">
                                <p class="p-2 fs-5 m-0 fw-bold text-warning">Are you running out of space?</p>
                                <p class="p-2 m-0 fs-6">Your memory will be out of. Get more storage and powerful features.</p>
                                <a class="p-2 text-warning" href="#">Upgrade now ></a>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3 pb-5">
                        <div class="col-sm-6 col-xxl-3 pe-sm-2 mb-3">
                            <div class="p-2 card shadow" style="min-height: 330.8px;">
                                <div class="d-flex justify-content-between">
                                    <p class="p-1 m-0 fw-bold">Active</p>
                                    <a class="p-1" href="#">View all ></a>
                                </div>
                                <div class="p-1">
                                    <div class="position-relative p-2">
                                        <img class="rounded-circle" src="./assets/image/default_avatar.png" alt="avatar" style="width: 36px;">
                                        <div class="dot-6 position-absolute bottom-0 left-0"></div>
                                        <span>Test 1</span>
                                    </div>
                                    <div class="position-relative p-2">
                                        <img class="rounded-circle" src="./assets/image/default_avatar.png" alt="avatar" style="width: 36px;">
                                        <div class="dot-6 position-absolute bottom-0 left-0"></div>
                                        <span>Test 2</span>
                                    </div>
                                    <div class="position-relative p-2">
                                        <img class="rounded-circle" src="./assets/image/default_avatar.png" alt="avatar" style="width: 36px;">
                                        <div class="dot-6 position-absolute bottom-0 left-0"></div>
                                        <span>Test 3</span>
                                    </div>
                                    <div class="position-relative p-2">
                                        <img class="rounded-circle" src="./assets/image/default_avatar.png" alt="avatar" style="width: 36px;">
                                        <div class="dot-6 position-absolute bottom-0 left-0"></div>
                                        <span>Test 4</span>
                                    </div>
                                    <div class="position-relative p-2">
                                        <img class="rounded-circle" src="./assets/image/default_avatar.png" alt="avatar" style="width: 36px;">
                                        <div class="dot-6 position-absolute bottom-0 left-0"></div>
                                        <span>Test 5</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xxl-3 ps-sm-2 order-xxl-1 mb-3">
                            <div class="p-2 card shadow" style="min-height: 330.8px;">
                                <p class="p-1 m-0 fw-bold">Bandwidth</p>
                                <div class="d-flex justify-content-center">
                                    <div id="donut_single"></div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <i class="bi bi-check text-success fs-4"></i>
                                    <p class="p-1 m-0 fw-bold text-center">35.75 GB saved</p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1">Last 6 Months</option>
                                        <option value="2">Last Year</option>
                                        <option value="3">Last 2 Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-6 px-xxl-2 mb-3">
                            <div class="p-2 card shadow" style="height: 100%;">
                                <div>
                                    <canvas id="myChart1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <!-- END MAIN -->

            <!-- BEGIN FOOTER -->
            <footer class="footer" id="footer"></footer>
            <!-- END FOOTER -->
        </div>

        <!-- JQUERY 3.6.1 -->
        <script src="./assets/js/jquery.min.js"></script>
        <!-- JS BOOTSTRAP -->
        <script src="./assets/js/bootstrap.bundle.min.js"></script>
        <!-- chart js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <!-- chart gg -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <!-- JS ME -->
        <script src="./assets/js/loadMenu.js"></script>
        <script src="./assets/js/admin.js"></script>
    </body>
</html>
