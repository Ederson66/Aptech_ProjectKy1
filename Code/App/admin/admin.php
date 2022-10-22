<?php
// bắt đầu trên cùng
session_start();

require_once '../PhpSetting/Common.php';
require_once '../PhpSetting/Usersystem.php';

// check session
$checkss = IsAuthen();
if($checkss != 1) {
    redirect("login.php");
}

if (!empty($_POST["flogout"])) {
    $a = new Usersystem();
    $a->logout();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Reset CSS -->
        <link rel="stylesheet" href="../assets/css/reset.min.css">
        <!-- BOOTSTRAP ICON -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <!-- BOOTSTRAP 5.0.2 CSS -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <!-- Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
        <!-- CSS ME -->
        <link rel="stylesheet" href="./assets/css/admin.css" />
        <!--favicon-->
        <link rel="icon" type="image/x-icon" href="./assets/img/admin.ico">
        <title>Admin</title>
        <style>
            th{
                font-weight: bold;
            }
        </style>
    </head>
    <body id="body-pd">
        <div class="app">
            <!-- BEGIN HEADER -->
            <header class="header" id="header">
                <div class="header_toggle"><i class="bx bx-menu text-dark" id="header-toggle"></i></div>
                <form class="w-50"><input type="search" class="form-control" placeholder="Search..." aria-label="Search" /></form>
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="user" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="./assets/img/avt_pro.jpg" alt="quản trị" width="40" height="40" class="rounded-circle" />
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="user" style="min-width: 256px;">
                        <li>
                            <a class="dropdown-item" href="#">
                                <?php
//                                $u = new User();
//                                $u->Username = (string) $_SESSION["Username"];
//                                $list = $u->GetUserByUsername();
//                                
//                                for ($i = 0; $i < count($list); $i++) {
//                                    $obj = $list[$i];
//
//                                    echo "Hello" . " " . ucwords($obj->Lastname ." " . $obj->Middlename . " " . $obj->Fisrtname);
//                                }
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
            <div class="l-navbar" id="nav-bar">
                <nav class="nav-sidebar" id="style-11">
                    <div class="">
                        <a href="#" class="nav_logo"> <i class="text-white bi bi-stack"></i> <span class="nav_logo-name">Manager</span> </a>
                        <ul class="nav_list nav" id="myTab" role="tablist">
                            <!-- showdashboard -->
                            <li class="showmenu1">
                                <a href="#dashboard" class="nav_link active" data-bs-toggle="tab" aria-selected="true"> <i class="bx bx-grid-alt nav_icon"></i> <span class="nav_name">Dashboard</span> </a>
                            </li>
                            <!-- notification -->
                            <li class="showmenu1">
                                <a href="#notification" class="nav_link" data-bs-toggle="tab" aria-selected="false"> <i class="bx bi bi-bell nav_icon"></i> <span class="nav_name">Notify</span> </a>
                            </li>
                            <!-- mountaineering -->
                            <li class="showmenu1">
                                <span data-bs-target="#mountaineering" data-bs-toggle="tab" aria-selected="false">
                                    <a href="#" class="nav_link collapsed rounded" data-bs-toggle="collapse" data-bs-target="#menu0">
                                        <i class="bx bi bi-stickies nav_icon"></i> <span class="nav_name float-start">Mountaineering <i class="bi bi-chevron-compact-down"></i></span>
                                    </a>
                                </span>
                            </li>
                            <!-- menu mountaineering -->
                            <div class="menu w-100 mb-0 pt-0 pb-0 collapse" id="menu0">
                                <ul class="btn-toggle-nav list-unstyled fw-normal small">
                                    <li><a class="dropdown-item cl-1" href="#">Add Mountaineering</a></li>
                                    <li><a class="dropdown-item cl-1" href="#">List Mountaineering</a></li>
                                </ul>
                            </div>
                            <!-- service -->
                            <li class="showmenu1">
                                <span data-bs-target="#service" data-bs-toggle="tab" aria-selected="false">
                                    <a href="#" class="nav_link collapsed rounded" data-bs-toggle="collapse" data-bs-target="#menu1">
                                        <i class="bx bi bi-stickies nav_icon"></i> <span class="nav_name float-start">Service <i class="bi bi-chevron-compact-down"></i></span>
                                    </a>
                                </span>
                            </li>
                            <!-- menu service -->
                            <div class="menu w-100 mb-0 pt-0 pb-0 collapse" id="menu1">
                                <ul class="btn-toggle-nav list-unstyled fw-normal small">
                                    <li><a class="dropdown-item cl-1" href="#">Add Service</a></li>
                                    <li><a class="dropdown-item cl-1" href="#">List Service</a></li>
                                </ul>
                            </div>
                            <!-- tour -->
                            <li class="showmenu1">
                                <span data-bs-target="#tour" data-bs-toggle="tab" aria-selected="false">
                                    <a href="#" class="nav_link collapsed rounded" data-bs-toggle="collapse" data-bs-target="#menu2">
                                        <i class="bx bi bi-stickies nav_icon"></i> <span class="nav_name float-start">Tour <i class="bi bi-chevron-compact-down"></i></span>
                                    </a>
                                </span>
                            </li>
                            <!-- menu tour -->
                            <div class="menu w-100 mb-0 pt-0 pb-0 collapse" id="menu2">
                                <ul class="btn-toggle-nav list-unstyled fw-normal small">
                                    <li><a class="dropdown-item cl-1" href="#">Add Tour</a></li>
                                    <li><a class="dropdown-item cl-1" href="#">List Tour</a></li>
                                </ul>
                            </div>
                            <!-- booktour -->
                            <li class="showmenu1">
                                <span data-bs-target="#booktour" data-bs-toggle="tab" aria-selected="false">
                                    <a href="#" class="nav_link collapsed rounded" data-bs-toggle="collapse" data-bs-target="#menu3">
                                        <i class="bx bi bi-stickies nav_icon"></i> <span class="nav_name float-start">Booktour <i class="bi bi-chevron-compact-down"></i></span>
                                    </a>
                                </span>
                            </li>
                            <!-- menu booktour -->
                            <div class="menu w-100 mb-0 pt-0 pb-0 collapse" id="menu3">
                                <ul class="btn-toggle-nav list-unstyled fw-normal small">
                                    <li><a class="dropdown-item cl-1" href="#">List Booktour</a></li>
                                </ul>
                            </div>
                            <!-- news -->
                            <li class="showmenu1">
                                <span data-bs-target="#news" data-bs-toggle="tab" aria-selected="false">   
                                    <a href="#" class="nav_link collapsed rounded" data-bs-toggle="collapse" data-bs-target="#menu4">
                                        <i class="bx bi bi-stickies nav_icon"></i> <span class="nav_name float-start">News <i class="bi bi-chevron-compact-down"></i></span>
                                    </a>
                                </span>    
                            </li>
                            <!-- menu news -->
                            <div class="menu w-100 mb-0 pt-0 pb-0 collapse" id="menu4">
                                <ul class="btn-toggle-nav list-unstyled fw-normal small">
                                    <li><a class="dropdown-item cl-1" href="#">Add News</a></li>
                                    <li><a class="dropdown-item cl-1" href="#">List News</a></li>
                                </ul>
                            </div>
                            <!-- library -->
                            <li class="showmenu1">
                                <span data-bs-target="#library" data-bs-toggle="tab" aria-selected="false">   
                                    <a href="#" class="nav_link collapsed rounded" data-bs-toggle="collapse" data-bs-target="#menu5">
                                        <i class="bx bi bi-stickies nav_icon"></i> <span class="nav_name float-start">Library <i class="bi bi-chevron-compact-down"></i></span>
                                    </a>
                                </span>
                            </li>
                            <!-- menu library -->
                            <div class="menu w-100 mb-0 pt-0 pb-0 collapse" id="menu5">
                                <ul class="btn-toggle-nav list-unstyled fw-normal small">
                                    <li><a class="dropdown-item cl-1" href="#">Add Library</a></li>
                                    <li><a class="dropdown-item cl-1" href="#">List Library</a></li>
                                </ul>
                            </div>
                            <!-- category -->
                            <li class="showmenu1">
                                <span data-bs-target="#category" data-bs-toggle="tab" aria-selected="false">   
                                    <a href="#" class="nav_link collapsed rounded" data-bs-toggle="collapse" data-bs-target="#menu6">
                                        <i class="bx bi bi-stickies nav_icon"></i> <span class="nav_name float-start">Category <i class="bi bi-chevron-compact-down"></i></span>
                                    </a>
                                </span>
                            </li>
                            <!-- menu category -->
                            <div class="menu w-100 mb-0 pt-0 pb-0 collapse" id="menu6">
                                <ul class="btn-toggle-nav list-unstyled fw-normal small">
                                    <li><a class="dropdown-item cl-1" href="#">Add Category</a></li>
                                    <li><a class="dropdown-item cl-1" href="#">List Category</a></li>
                                </ul>
                            </div>
                            <!-- categorytour -->
                            <li class="showmenu1">
                                <span data-bs-target="#categorytour" data-bs-toggle="tab" aria-selected="false">   
                                    <a href="#" class="nav_link collapsed rounded" data-bs-toggle="collapse" data-bs-target="#menu7">
                                        <i class="bx bi bi-stickies nav_icon"></i> <span class="nav_name float-start">Categorytour <i class="bi bi-chevron-compact-down"></i></span>
                                    </a>
                                </span>
                            </li>
                            <!-- menu categorytour -->
                            <div class="menu w-100 mb-0 pt-0 pb-0 collapse" id="menu7">
                                <ul class="btn-toggle-nav list-unstyled fw-normal small">
                                    <li><a class="dropdown-item cl-1" href="#">Add Categorytour</a></li>
                                    <li><a class="dropdown-item cl-1" href="#">List Categorytour</a></li>
                                </ul>
                            </div>
                            <!-- contact -->
                            <li class="showmenu1">
                                <span data-bs-target="#contact" data-bs-toggle="tab" aria-selected="false">   
                                    <a href="#" class="nav_link collapsed rounded" data-bs-toggle="collapse" data-bs-target="#menu8">
                                        <i class="bx bi bi-stickies nav_icon"></i> <span class="nav_name float-start">Contact <i class="bi bi-chevron-compact-down"></i></span>
                                    </a>
                                </span>
                            </li>
                            <!-- menu contact -->
                            <div class="menu w-100 mb-0 pt-0 pb-0 collapse" id="menu8">
                                <ul class="btn-toggle-nav list-unstyled fw-normal small">
                                    <li><a class="dropdown-item cl-1" href="#">List contact</a></li>
                                </ul>
                            </div>
                            <!-- item -->
                            <li class="showmenu1">
                                <span data-bs-target="#item" data-bs-toggle="tab" aria-selected="false">   
                                    <a href="#" class="nav_link collapsed rounded" data-bs-toggle="collapse" data-bs-target="#menu9">
                                        <i class="bx bi bi-stickies nav_icon"></i> <span class="nav_name float-start">Item <i class="bi bi-chevron-compact-down"></i></span>
                                    </a>
                                </span>
                            </li>
                            <!-- menu item -->
                            <div class="menu w-100 mb-0 pt-0 pb-0 collapse" id="menu9">
                                <ul class="btn-toggle-nav list-unstyled fw-normal small">
                                    <li><a class="dropdown-item cl-1" href="#">Add Item</a></li>
                                    <li><a class="dropdown-item cl-1" href="#">List Item</a></li>
                                </ul>
                            </div>
                            <!-- itemlibrary -->
                            <li class="showmenu1">
                                <span data-bs-target="#itemlibrary" data-bs-toggle="tab" aria-selected="false">   
                                    <a href="#" class="nav_link collapsed rounded" data-bs-toggle="collapse" data-bs-target="#menu10">
                                        <i class="bx bi bi-stickies nav_icon"></i> <span class="nav_name float-start">Itemlibrary <i class="bi bi-chevron-compact-down"></i></span>
                                    </a>
                                </span>
                            </li>
                            <!-- menu itemlibrary -->
                            <div class="menu w-100 mb-0 pt-0 pb-0 collapse" id="menu10">
                                <ul class="btn-toggle-nav list-unstyled fw-normal small">
                                    <li><a class="dropdown-item cl-1" href="#">Add Itemlibrary</a></li>
                                    <li><a class="dropdown-item cl-1" href="#">List Itemlibrary</a></li>
                                </ul>
                            </div>
                            <!-- locationandservice -->
                            <li class="showmenu1">
                                <span data-bs-target="#locationandservice" data-bs-toggle="tab" aria-selected="false">   
                                    <a href="#" class="nav_link collapsed rounded" data-bs-toggle="collapse" data-bs-target="#menu11">
                                        <i class="bx bi bi-stickies nav_icon"></i> <span class="nav_name float-start">Locationandservice <i class="bi bi-chevron-compact-down"></i></span>
                                    </a>
                                </span>
                            </li>
                            <!-- menu locationandservice -->
                            <div class="menu w-100 mb-0 pt-0 pb-0 collapse" id="menu11">
                                <ul class="btn-toggle-nav list-unstyled fw-normal small">
                                    <li><a class="dropdown-item cl-1" href="#">Add Locationandservice</a></li>
                                    <li><a class="dropdown-item cl-1" href="#">List Locationandservice</a></li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- END NAV -->

            <!-- BEGIN MAIN -->
            <main class="main">

                <div class="tab-content" id="nav-tabContent">
                    <!-- dashboard -->
                    <div class="tab-pane fade show active" id="dashboard">
                        <div class="container text-dark">
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
                                                <img class="rounded-circle" src="./assets/img/default_avatar.png" alt="avatar" style="width: 36px;">
                                                <div class="dot-6 position-absolute bottom-0 left-0"></div>
                                                <span>Test 1</span>
                                            </div>
                                            <div class="position-relative p-2">
                                                <img class="rounded-circle" src="./assets/img/default_avatar.png" alt="avatar" style="width: 36px;">
                                                <div class="dot-6 position-absolute bottom-0 left-0"></div>
                                                <span>Test 2</span>
                                            </div>
                                            <div class="position-relative p-2">
                                                <img class="rounded-circle" src="./assets/img/default_avatar.png" alt="avatar" style="width: 36px;">
                                                <div class="dot-6 position-absolute bottom-0 left-0"></div>
                                                <span>Test 3</span>
                                            </div>
                                            <div class="position-relative p-2">
                                                <img class="rounded-circle" src="./assets/img/default_avatar.png" alt="avatar" style="width: 36px;">
                                                <div class="dot-6 position-absolute bottom-0 left-0"></div>
                                                <span>Test 4</span>
                                            </div>
                                            <div class="position-relative p-2">
                                                <img class="rounded-circle" src="./assets/img/default_avatar.png" alt="avatar" style="width: 36px;">
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
                    </div>

                    <!-- notification -->
                    <div class="tab-pane fade" id="notification">
                        <h2 class="text-center text-dark">Notification</h2>
                    </div>

                    <!-- mountaineering -->
                    <div class="tab-pane fade" id="mountaineering">
                        <div class="container text-dark pb-5">
                            <!-- form Add Mountaineering -->
                            <div id="addMountaineering"> 
                                    <div class="pt-5 pb-5 d-flex justify-content-center">
                                        <div style="width: 650px;">
                                            <div class="text-center pb-3">
                                                <h2 class="">Add Mountaineering</h2>
                                            </div>  
                                            <form>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold text-secondary">MountainName:</label>
                                                    <input type="text" id="MountainName" class="form-control" placeholder="MountainName">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold text-secondary">LocationX:</label>
                                                    <input type="text" id="LocationX" class="form-control" placeholder="LocationX">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold text-secondary">LocationY:</label>
                                                    <input type="text" id="LocationY" class="form-control" placeholder="LocationY">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold text-secondary">Banner:</label>
                                                    <input type="file" id="Banner" class="form-control" placeholder="Banner">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold text-secondary">Type:</label>
                                                    <input type="text" id="Type" class="form-control" placeholder="Type">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold text-secondary">Level:</label>
                                                    <input type="text" id="Level" class="form-control" placeholder="Level">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold text-secondary">Sheltering:</label>
                                                    <input type="text" id="Sheltering" class="form-control" placeholder="Sheltering">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold text-secondary">Techniques:</label>
                                                    <input type="text" id="Techniques" class="form-control" placeholder="Techniques">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold text-secondary">Description:</label>
                                                    <input type="text" id="Description" class="form-control" placeholder="Description">
                                                </div>
                                                <input type="submit" id="btnMountaineering" class="btn btn-primary" value="Submit">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- table list Mountaineering -->
                                <div id="listMountaineering">
                                    <div class="text-center">
                                        <h2>List Mountaineering</h2>
                                    </div>
                                    <div class="pb-5 d-flex justify-content-center">
                                        <div style="overflow-x: auto;">
                                            
                                            <div id="tbl-kithi" class="mt-4 pb-5">
                                                <table class="table table-striped table-hover">
                                                    <tr>
                                                        <th scope="col">STT</th>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">MountainName</th>
                                                        <th scope="col">LocationX</th>
                                                        <th scope="col">LocationY</th>
                                                        <th scope="col">Banner</th>
                                                        <th scope="col">Type</th>
                                                        <th scope="col">Level</th>
                                                        <th scope="col">Sheltering</th>
                                                        <th scope="col">Techniques</th>
                                                        <th scope="col">Description</th>
                                                    </tr>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>

                    <!-- service -->
                    <div class="tab-pane fade" id="service">
                        <div class="container text-dark pb-5">
                            <!-- form Add service -->
                            <div id="addservice">
                                <div class="pt-5 pb-5 d-flex justify-content-center">
                                    <div style="width: 650px;">
                                        <div class="text-center pb-3">
                                            <h2>Add Service</h2>
                                        </div>
                                        <form>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">ServiceName:</label>
                                                <input type="text" id="ServiceName" class="form-control" placeholder="ServiceName" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Price:</label>
                                                <input type="text" id="Price" class="form-control" placeholder="Price" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">VAT:</label>
                                                <input type="text" id="VAT" class="form-control" placeholder="VAT" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Sale:</label>
                                                <input type="text" id="Sale" class="form-control" placeholder="Sale" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Description:</label>
                                                <input type="text" id="Description" class="form-control" placeholder="Description" />
                                            </div>
                                            <input type="submit" id="btnservice" class="btn btn-primary" value="Submit" />
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- table list service -->
                            <div id="listservice">
                                <div class="text-center">
                                    <h2>List Service</h2>
                                </div>
                                <div class="pb-5 d-flex justify-content-center">
                                    <div style="overflow-x: auto;">
                                        
                                        <div id="tbl-kithi" class="mt-4 pb-5">
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">ServiceName</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">VAT</th>
                                                    <th scope="col">Sale</th>
                                                    <th scope="col">Description</th>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- tour -->
                    <div class="tab-pane fade" id="tour">
                        <div class="container text-dark pb-5">
                            <!-- form Add tour -->
                            <div id="addtour">
                                <div class="pt-5 pb-5 d-flex justify-content-center">
                                    <div style="width: 650px;">
                                        <div class="text-center pb-3">
                                            <h2>Add Tour</h2>
                                        </div>
                                        <form>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">CategoryTour:</label>
                                                <select class="form-select" id="CategoryTour">
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">TourName:</label>
                                                <input type="text" id="TourName" class="form-control" placeholder="TourName" />
                                            </div>
                                            <div class="mb-3 d-flex w-100">
                                                <div class="w-50 pe-2">
                                                    <label class="form-label fw-bold text-secondary">TimeStart:</label>
                                                    <input type="date" id="TimeStart" class="form-control" placeholder="TimeStart" />
                                                </div>
                                                <div class="w-50 ps-2">
                                                    <label class="form-label fw-bold text-secondary">TimeLimit:</label>
                                                    <input type="date" id="TimeLimit" class="form-control" placeholder="TimeLimit" />
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">TourPrice:</label>
                                                <input type="text" id="TourPrice" class="form-control" placeholder="TourPrice" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">TourSale:</label>
                                                <input type="text" id="TourSale" class="form-control" placeholder="TourSale" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Location:</label>
                                                <input type="text" id="Location" class="form-control" placeholder="Location" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">AvatarTour:</label>
                                                <input type="file" id="AvatarTour" class="form-control" placeholder="AvatarTour" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Status:</label>
                                                <input type="text" id="Status" class="form-control" placeholder="Status" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Description:</label>
                                                <input type="text" id="Description" class="form-control" placeholder="Description" />
                                            </div>
                                            <input type="submit" id="btntour" class="btn btn-primary" value="Submit" />
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- table list tour -->
                            <div id="listtour">
                                <div class="text-center">
                                    <h2>List Tour</h2>
                                </div>
                                <div class="pb-5 d-flex justify-content-center">
                                    <div style="overflow-x: auto;">

                                        <div id="tbl-kithi" class="mt-4 pb-5" >
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">TourName</th>
                                                    <th scope="col">TimeStart</th>
                                                    <th scope="col">TimeLimit</th>
                                                    <th scope="col">TourPrice</th>
                                                    <th scope="col">TourSale</th>
                                                    <th scope="col">Location</th>
                                                    <th scope="col">AvatarTour</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Description</th>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- booktour -->
                    <div class="tab-pane fade" id="booktour">
                        <div class="container text-dark pb-5 pt-5">
                            <!-- table list booktour -->
                            <div id="listbooktour">
                                <div class="text-center">
                                    <h2>List Booktour</h2>
                                </div>
                                <div class="pb-5 d-flex justify-content-center">
                                    <div style="overflow-x: auto;">

                                        <div id="tbl-kithi" class="mt-4 pb-5" >
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">TourID</th>
                                                    <th scope="col">MemberID</th>
                                                    <th scope="col">AnonymousBookTour</th>
                                                    <th scope="col">AnonymousEmail</th>
                                                    <th scope="col">AnonymousAddress</th>
                                                    <th scope="col">AnonymousPhone</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Description</th>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- News -->
                    <div class="tab-pane fade" id="news">
                        <div class="container text-dark pb-5">
                            <!-- form Add News -->
                            <div id="addNews">
                                <div class="pt-5 pb-5 d-flex justify-content-center">
                                    <div style="width: 650px;">
                                        <div class="text-center pb-3">
                                            <h2>Add News</h2>
                                        </div>
                                        <form>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Category:</label>
                                                <select class="form-select" id="CategoryID">
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Title:</label>
                                                <input type="text" id="Title" class="form-control" placeholder="Title" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Content:</label>
                                                <input type="text" id="Content" class="form-control" placeholder="Content" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">AvatarNews:</label>
                                                <input type="file" id="AvatarNews" class="form-control" placeholder="AvatarNews" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Author:</label>
                                                <input type="text" id="Author" class="form-control" placeholder="Author" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Description:</label>
                                                <input type="text" id="Description" class="form-control" placeholder="Description" />
                                            </div>
                                            <input type="submitNews" id="btn" class="btn btn-primary" value="Submit" />
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- table list News -->
                            <div id="listNews">
                                <div class="text-center">
                                    <h2>List News</h2>
                                </div>
                                <div class="pb-5 d-flex justify-content-center">
                                    <div style="overflow-x: auto;">

                                        <div id="tbl-kithi" class="mt-4 pb-5" >
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Content</th>
                                                    <th scope="col">AvatarNews</th>
                                                    <th scope="col">Author</th>
                                                    <th scope="col">Description</th>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- library -->
                    <div class="tab-pane fade" id="library">
                        <div class="container text-dark pb-5">
                            <!-- form Add library -->
                            <div id="addlibrary">
                                <div class="pt-5 pb-5 d-flex justify-content-center">
                                    <div style="width: 650px;">
                                        <div class="text-center pb-3">
                                            <h2>Add Library</h2>
                                        </div>
                                        <form>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">LibraryName:</label>
                                                <input type="text" id="LibraryName" class="form-control" placeholder="LibraryName" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Description:</label>
                                                <input type="text" id="Description" class="form-control" placeholder="Description" />
                                            </div>
                                            <input type="submitlibrary" id="btn" class="btn btn-primary" value="Submit" />
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- table list library -->
                            <div id="listlibrary">
                                <div class="text-center">
                                    <h2>List Library</h2>
                                </div>
                                <div class="pb-5 d-flex justify-content-center">
                                    <div style="overflow-x: auto;">

                                        <div id="tbl-kithi" class="mt-4 pb-5" >
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">LibraryName</th>
                                                    <th scope="col">Description</th>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- category -->
                    <div class="tab-pane fade" id="category">
                        <div class="container text-dark pb-5">
                            <!-- form Add Category -->
                            <div id="addCategory">
                                <div class="pt-5 pb-5 d-flex justify-content-center">
                                    <div style="width: 650px;">
                                        <div class="text-center pb-3">
                                            <h2>Add Category</h2>
                                        </div>
                                        <form>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">CategoryName:</label>
                                                <input type="text" id="CategoryName" class="form-control" placeholder="CategoryName" />
                                            </div>
                                            <div class="mb-3 w-50">
                                                <label class="form-label fw-bold text-secondary">ParentID:</label>
                                                <input type="text" id="ParentID" class="form-control" placeholder="ParentID" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Description:</label>
                                                <input type="text" id="Description" class="form-control" placeholder="Description" />
                                            </div>
                                            <input type="submitcategory" id="btn" class="btn btn-primary" value="Submit" />
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- table list category -->
                            <div id="listcategory">
                                <div class="text-center">
                                    <h2>List Category</h2>
                                </div>
                                <div class="pb-5 d-flex justify-content-center">
                                    <div style="overflow-x: auto;">

                                        <div id="tbl-kithi" class="mt-4 pb-5" >
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">CategoryName</th>
                                                    <th scope="col">ParentID</th>
                                                    <th scope="col">Description</th>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- categorytour -->
                    <div class="tab-pane fade" id="categorytour">
                        <div class="container text-dark pb-5">
                            <!-- form Add Categorytour -->
                            <div id="addCategorytour">
                                <div class="pt-5 pb-5 d-flex justify-content-center">
                                    <div style="width: 650px;">
                                        <div class="text-center pb-3">
                                            <h2>Add Categorytour</h2>
                                        </div>
                                        <form>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">CategoryTourName:</label>
                                                <input type="text" id="CategoryTourName" class="form-control" placeholder="CategoryTourName" />
                                            </div>
                                            <div class="mb-3 w-50">
                                                <label class="form-label fw-bold text-secondary">Status:</label>
                                                <input type="text" id="Status" class="form-control" placeholder="Status" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Description:</label>
                                                <input type="text" id="Description" class="form-control" placeholder="Description" />
                                            </div>
                                            <input type="submitcategorytour" id="btn" class="btn btn-primary" value="Submit" />
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- table list categorytour -->
                            <div id="listCategorytour">
                                <div class="text-center">
                                    <h2>List Categorytour</h2>
                                </div>
                                <div class="pb-5 d-flex justify-content-center">
                                    <div style="overflow-x: auto;">

                                        <div id="tbl-kithi" class="mt-4 pb-5" >
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">CategoryTourName</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Description</th>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- contact -->
                    <div class="tab-pane fade" id="contact">
                        <div class="container text-dark pb-5 pt-5">
                            <!-- table list categorytour -->
                            <div id="listCategorytour">
                                <div class="text-center">
                                    <h2>List Categorytour</h2>
                                </div>
                                <div class="pb-5 d-flex justify-content-center">
                                    <div style="overflow-x: auto;">

                                        <div id="tbl-kithi" class="mt-4 pb-5" >
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">MemberID</th>
                                                    <th scope="col">Fullname</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Telephone</th>
                                                    <th scope="col">Message</th>
                                                    <th scope="col">description</th>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- item -->
                    <div class="tab-pane fade" id="item">
                        <div class="container text-dark pb-5">
                            <!-- form Add Item -->
                            <div id="addItem">
                                <div class="pt-5 pb-5 d-flex justify-content-center">
                                    <div style="width: 650px;">
                                        <div class="text-center pb-3">
                                            <h2>Add Item</h2>
                                        </div>
                                        <form>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Type:</label>
                                                <input type="text" id="Type" class="form-control" placeholder="Type" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Description:</label>
                                                <input type="text" id="Description" class="form-control" placeholder="Description" />
                                            </div>
                                            <input type="submitItem" id="btn" class="btn btn-primary" value="Submit" />
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- table list Item -->
                            <div id="listItem">
                                <div class="text-center">
                                    <h2>List Item</h2>
                                </div>
                                <div class="pb-5 d-flex justify-content-center">
                                    <div style="overflow-x: auto;">

                                        <div id="tbl-kithi" class="mt-4 pb-5" >
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Description</th>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- itemlibrary -->
                    <div class="tab-pane fade" id="itemlibrary">
                        <div class="container text-dark pb-5">
                            <!-- form Add Itemlibrary -->
                            <div id="addItemlibrary">
                                <div class="pt-5 pb-5 d-flex justify-content-center">
                                    <div style="width: 650px;">
                                        <div class="text-center pb-3">
                                            <h2>Add Itemlibrary</h2>
                                        </div>
                                        <form>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">ItemID:</label>
                                                <input type="text" id="ItemID" class="form-control" placeholder="ItemID" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">LibraryID:</label>
                                                <input type="text" id="LibraryID" class="form-control" placeholder="LibraryID" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Description:</label>
                                                <input type="text" id="Description" class="form-control" placeholder="Description" />
                                            </div>
                                            <input type="submititemlibrary" id="btn" class="btn btn-primary" value="Submit" />
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- table list Itemlibrary -->
                            <div id="listItemlibrary">
                                <div class="text-center">
                                    <h2>List Itemlibrary</h2>
                                </div>
                                <div class="pb-5 d-flex justify-content-center">
                                    <div style="overflow-x: auto;">

                                        <div id="tbl-kithi" class="mt-4 pb-5" >
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">ItemID</th>
                                                    <th scope="col">LibraryID</th>
                                                    <th scope="col">Description</th>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- locationandservice -->
                    <div class="tab-pane fade" id="locationandservice">
                        <div class="container text-dark pb-5">
                            <!-- form Add Locationandservice -->
                            <div id="addLocationandservice">
                                <div class="pt-5 pb-5 d-flex justify-content-center">
                                    <div style="width: 650px;">
                                        <div class="text-center pb-3">
                                            <h2>Add Locationandservice</h2>
                                        </div>
                                        <form>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Mountaineering:</label>
                                                <select id="Mountaineering" class="form-select">
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Service:</label>
                                                <select id="Service" class="form-select">
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Description:</label>
                                                <input type="text" id="Description" class="form-control" placeholder="Description" />
                                            </div>
                                            <input type="submitlocationandservice" id="btn" class="btn btn-primary" value="Submit" />
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- table list locationandservice -->
                            <div id="listlocationandservice">
                                <div class="text-center">
                                    <h2>List Locationandservice</h2>
                                </div>
                                <div class="pb-5 d-flex justify-content-center">
                                    <div style="overflow-x: auto;">

                                        <div id="tbl-kithi" class="mt-4 pb-5" >
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">MountaineeringID</th>
                                                    <th scope="col">ServiceID</th>
                                                    <th scope="col">Description</th>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <div>
                
            </main>
            <!-- END MAIN -->

            <!-- BEGIN FOOTER -->
            <footer class="footer" id="footer"></footer>
            <!-- END FOOTER -->
        </div>

        <!-- JQUERY 3.6.1 -->
        <script src="../assets/js/jquery.min.js"></script>
        <!-- JS BOOTSTRAP -->
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <!-- chart js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <!-- chart gg -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <!-- JS ME -->
        <script src="./assets/js/loadMenu.js"></script>
        <script src="./assets/js/admin.js"></script>
    </body>
</html>
