<?php
// bắt đầu trên cùng
session_start();

require_once '../PhpSetting/Common.php';
require_once '../PhpSetting/Usersystem.php';
require_once '../PhpSetting/Mountaineering.php';
require_once '../PhpSetting/Service.php';
require_once '../PhpSetting/Tour.php';
require_once '../PhpSetting/Booktour.php';
require_once '../PhpSetting/News.php';
require_once '../PhpSetting/Library.php';
require_once '../PhpSetting/Category.php';
require_once '../PhpSetting/CategoryTour.php';
require_once '../PhpSetting/Contact.php';
require_once '../PhpSetting/Item.php';
require_once '../PhpSetting/Itemlibrary.php';
require_once '../PhpSetting/Locationandservice.php';

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
        <meta name="description" content="Website về leo núi,cắm trại,du lịch,đặt tour và các dịch vụ đi cùng chuyến du lịch.Cho bạn 1 nơi tha hồ lựa chọn các địa điểm du lịch và book tour dễ dàng thuận tiện cùng những khuyến mãi khủng."/>
        <meta name="keywords" content="Leo núi,Moutaineering,Du lịch,Tour,Book Tour, Dịch vụ,Service,Lịch sử,History,Kĩ năng,Đồ leo núi,Sale hấp dẫn ." />
        <meta name="news_keywords" content="Leo núi,Moutaineering,Du lịch,Tour,Book Tour, Dịch vụ,Service,Lịch sử,History,Kĩ năng,Đồ leo núi,Sale hấp dẫn ." />
        <meta http-equiv="REFRESH" content="1800" />
        <meta name="copyright" content="Moutaineering" />
        <meta name="author" content="Moutaineering" />
        <meta name="robots" content="index,follow" />
        <meta name="geo.placename" content="Ha Noi, Viet Nam" />
        <meta name="geo.region" content="VN-HN" />
        <meta name="geo.position" content="21.030624;105.782431" />
        <!-- META FOR FACEBOOK -->
        <meta property="og:site_name" content="Moutaineering.com" />
        <meta property="og:rich_attachment" content="true" />
        <meta property="og:type" content="website" />
        <meta property="og:url" itemprop="url" content="https://Moutaineering.com" />
        <meta property="og:image:width" content="800" />
        <meta property="og:image:height" content="354" />
        <meta content="Moutaineering,Service,Tour,BookTour" itemprop="headline" property="og:title" />
        <meta content="Home" itemprop="description" property="og:description" />
        <!-- END META FOR FACEBOOK -->
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

            @media (min-width: 576px){
                .modal-dialog {
                    max-width: 100%;
                    margin: 1.75rem;
                }
            }
        </style>
    </head>
    <body id="body-pd">
        <div class="app">
            <!-- BEGIN HEADER -->
            <header class="header" id="header">
                <!-- <div id="abc">
                </div> -->
                <div class="header_toggle"><i class="bx bx-menu text-dark" id="header-toggle"></i></div>
                <form class="w-50"><input type="search" class="form-control" placeholder="Search..." aria-label="Search" /></form>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <input class="btn btn-danger" type="submit" name="flogout" value="Logout">
                </form>
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
                            <!-- profile -->
                            <li class="showmenu1">
                                <a href="#profile" class="nav_link" data-bs-toggle="tab" aria-selected="false"><i class="bi bi-person-bounding-box"></i><span class="nav_name">Profile</span> </a>
                            </li>
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
                            <!-- <li class="showmenu1">
                                <span data-bs-target="#item" data-bs-toggle="tab" aria-selected="false">   
                                    <a href="#" class="nav_link collapsed rounded" data-bs-toggle="collapse" data-bs-target="#menu9">
                                        <i class="bx bi bi-stickies nav_icon"></i> <span class="nav_name float-start">Item <i class="bi bi-chevron-compact-down"></i></span>
                                    </a>
                                </span>
                            </li> -->
                            <!-- menu item -->
                            <!-- <div class="menu w-100 mb-0 pt-0 pb-0 collapse" id="menu9">
                                <ul class="btn-toggle-nav list-unstyled fw-normal small">
                                    <li><a class="dropdown-item cl-1" href="#">Add Item</a></li>
                                    <li><a class="dropdown-item cl-1" href="#">List Item</a></li>
                                </ul>
                            </div> -->
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

                <div class="tab-content" id="myTabContent">
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
                                        <p class="p-2 pt-3 fs-6 fw-bold m-0">Total booktour</p>
                                        <div class="p-3 text-center border-top">
                                            <?php 
                                            
                                            $a = new Booktour();
                                            $arr = $a->getUserBooktour();

                                            for($i = 0; $i < count($arr); $i++) {
                                                $obj = $arr[$i];
                                                echo '<span class="m-3 fs-4 fw-bold text-secondary">' . $obj->totaluserbooktour . " " . 'User</span>';
                                            }
                                            
                                            ?>
                                            <i class="fs-3 bi bi-reception-4 text-success"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- Box lượng truy cập các kì thi -->
                                <div class="mt-3 col-md-6 col-xxl-3">
                                    <div class="bg-white shadow card">
                                        <p class="p-2 pt-3 fs-6 fw-bold m-0">Service traffic</p>
                                        <div class="text-center border-top" style="padding: 6px;">
                                            <div class="chart-access float-end m-2"></div>
                                            <ul class="m-2 p-0">
                                                <li class="fs text-start">
                                                    <span class="dot-1 me-2"></span>
                                                    Service 1
                                                </li>
                                                <li class="fs text-start">
                                                    <span class="dot-2 me-2"></span>
                                                    Service 2
                                                </li>
                                                <li class="fs text-start">
                                                    <span class="dot-3 me-2"></span>
                                                    Service 3
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Box thời tiết -->
                                <div class="mt-3 col-md-6 col-xxl-3">
                                    <div class="bg-white shadow card h-100">
                                        <p class="p-2 pt-3 fs-6 fw-bold m-0">Promotion</p>
                                        <div class="text-center border-top p-3">
                                            <span class="fs-4 fw-bold text-secondary m-3">30 Promotion</span>
                                            <i class="fs-3 bi bi-basket2 text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row pb-5">

                                <div class="col-xxl-12 mb-3">
                                    <div class="p-2 card shadow" style="height: 100%;">
                                        <div>
                                            <canvas id="myChart1"></canvas>
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
                                <div class="pb-5">
                                    <div style="overflow-x: auto;">

                                        <div id="tbl-kithi" class="mt-4 pb-5" >
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">TourID</th>
                                                    <th scope="col">MemberID</th>
                                                    <th scope="col">UserBookTour</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                <?php 
                                                
                                                $a = new Booktour();
                                                $arr = $a->getListBooktour();
                                                $strTbl="";

                                                $stt = 1;

                                                for($i = 0; $i < count($arr); $i++) {
                                                    $obj = $arr[$i];

                                                    $strTbl .= "<tr>";
                                                        $strTbl .= "<th>". $stt++ ."</th>";
                                                        $strTbl .= "<td>$obj->BookTourID</td>";
                                                        $strTbl .= "<td>$obj->TourID</td>";
                                                        $strTbl .= "<td>$obj->MemberID</td>";
                                                        $strTbl .= "<td>$obj->AnonymousBookTour</td>";
                                                        $strTbl .= "<td>$obj->AnonymousEmail</td>";
                                                        $strTbl .= "<td>$obj->AnonymousAddress</td>";
                                                        $strTbl .= "<td>$obj->AnonymousPhone</td>";
                                                        $strTbl .= "<td>$obj->Status</td>";
                                                        $strTbl .= "<td>$obj->Description</td>";
                                                        $strTbl .= "<td>
                                                                        <button class='btn btn-danger'>Delete</button>
                                                                        <button class='btn btn-primary'>Edit</button>
                                                                    </td>";
                                                    $strTbl .= "</tr>";
                                                    
                                                }
                                                
                                                echo $strTbl;
                                                ?>
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
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">TourName:</label>
                                                <input type="text" id="TourName" name="fTourName" class="form-control" placeholder="TourName" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">CategoryTour:</label>
                                                <select class="form-select" name="fCategoryTour" id="CategoryTour">
                                                    <option value="1">kHÁM PHÁ HANG ĐỘNG</option>
                                                    <option value="2">Cắm trại</option>
                                                    <option value="3">Chinh phục núi cao</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 d-flex w-100">
                                                <div class="w-50 pe-2">
                                                    <label class="form-label fw-bold text-secondary">TimeStart:</label>
                                                    <input type="date" id="TimeStart" name="fTimeStart" class="form-control" placeholder="TimeStart" />
                                                </div>
                                                <div class="w-50 ps-2">
                                                    <label class="form-label fw-bold text-secondary">TimeEnd:</label>
                                                    <input type="date" id="TimeLimit" name="fTimeLimit" class="form-control" placeholder="TimeLimit" />
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">TourPrice:</label>
                                                <div class="input-group">
                                                    <input type="text" id="TourPrice" name="fTourPrice" class="form-control" placeholder="TourPrice" />
                                                    <span class="input-group-text">USD</span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">TourPromotion:</label>
                                                <div class="input-group">
                                                    <input type="text" id="TourPromotion" name="fTourSale" class="form-control" placeholder="TourPromotion" />
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Location:</label>
                                                <div class="input-group">
                                                    <input type="text" id="Location" name="fLocation" class="form-control" placeholder="Location" />
                                                    <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">AvatarTour:</label>
                                                <input type="file" id="AvatarTour" name="fAvatarTour" class="form-control" placeholder="AvatarTour" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Status:</label>
                                                <select class="form-select" id="Status" name="fStatus" >
                                                    <option value="3">Chưa kích hoạt</option>
                                                    <option value="1">Đang hoạt động</option>
                                                    <option value="2">Dừng hoạt động</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Description:</label>
                                                <input type="text" id="Description" name="fDescription" class="form-control" placeholder="Description" />
                                            </div>
                                            <input type="submit" id="btntour" name="ftour" class="btn btn-primary" value="Save" />
                                        </form>
                                        <?php
                                        $message = "";

                                        if (isset($_POST['ftour']) && $_POST['ftour'] == 'Save') {
                                            if (isset($_FILES['fAvatarTour']) && $_FILES['fAvatarTour']['error'] === UPLOAD_ERR_OK) {
                                
                                                // lưu vào thư mục tạm webserver
                                                $fileTmpPath = $_FILES['fAvatarTour']['tmp_name'];
                                                // echo $fileTmpPath;
                                
                                                // thông tin file
                                                $fileName = $_FILES['fAvatarTour']['name'];
                                                $fileSize = $_FILES['fAvatarTour']['size'];
                                                $fileType = $_FILES['fAvatarTour']['type'];
                                
                                                // lấy tên file và đuôi file
                                                $fileNameCmps = explode(".", $fileName);
                                
                                                // chuẩn hóa lại tên file
                                                $fileExtension = strtolower(end($fileNameCmps));
                                
                                                // thiết đặt filename để k bị trùng nhau 
                                                $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
                                
                                                // kiem tra phan mo rong cua file
                                                $allowedfileExtensions = array('jpg', 'gif', 'png');
                                
                                                // kiểm tra đuôi file
                                                if (in_array($fileExtension, $allowedfileExtensions)) {
                                                    // thu muc file uploaded
                                                    $uploadFileDir = '../admin/assets/img/Tour/';
                                                    $dest_path = $uploadFileDir . $newFileName;
                                
                                                    if (move_uploaded_file($fileTmpPath, $dest_path)) {
                                                        $message = "";
                                                    } else {
                                                        $message = 'Check if the directory has write permissions.';
                                                    }
                                                } else {
                                                    $message = 'Only file types allowed: ' . implode(',', $allowedfileExtensions);
                                                }
                                            }
                                        }
                                
                                        echo $message;

                                        if(isset($_POST["ftour"])) {
                                            $fCategoryTour = $_POST["fCategoryTour"];
                                            $fTourName = $_POST["fTourName"];
                                            $fTimeStart = $_POST["fTimeStart"];
                                            $fTimeLimit = $_POST["fTimeLimit"];
                                            $fTourPrice = $_POST["fTourPrice"];
                                            $fTourSale = $_POST["fTourSale"];
                                            $fLocation = $_POST["fLocation"];
                                            // $fAvatarTour = $_POST["fAvatarTour"];
                                            $fStatus = $_POST["fStatus"];
                                            $fDescription = $_POST["fDescription"];

                                            $a = new Tour();
                                            $a->CategoryTourID = $fCategoryTour;
                                            $a->TourName = $fTourName;
                                            $a->TimeStart = $fTimeStart;
                                            $a->TimeLimit = $fTimeLimit;
                                            $a->TourPrice = $fTourPrice;
                                            $a->TourSale = $fTourSale;
                                            $a->Location = $fLocation;
                                            $a->AvatarTour = $uploadFileDir.$newFileName;
                                            $a->Status = $fStatus;
                                            $a->Description = $fDescription;
                                            $a->addTour();
                                        }

                                        ?>
                                    </div>
                                </div>
                            </div>

                            <!-- table list tour -->
                            <div id="listtour">
                                <div class="text-center">
                                    <h2>List Tour</h2>
                                </div>
                                <div class="pb-5">
                                    <div style="overflow-x: auto;">

                                        <div id="tbl-kithi" class="mt-4 pb-5" >
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <!-- <th scope="col">STT</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">CategoryTour</th>
                                                    <th scope="col">TourName</th>
                                                    <th scope="col">TimeStart</th>
                                                    <th scope="col">TimeLimit</th>
                                                    <th scope="col">TourPrice</th>
                                                    <th scope="col">TourSale</th>
                                                    <th scope="col">Location</th>
                                                    <th scope="col">AvatarTour</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Action</th> -->

                                                    <th scope="col">STT</th>
                                                    <th scope="col">CategoryTour</th>
                                                    <th scope="col">TourName</th>
                                                    <th scope="col">TimeStart</th>
                                                    <th scope="col">TimeEnd</th>
                                                    <th scope="col">TourPrice</th>
                                                    <th scope="col">More</th>
                                                </tr>
                                                <?php 
                                                
                                                $a = new Tour();
                                                $arr = $a->getListTour();
                                                $strTbl="";

                                                $stt = 1;

                                                for($i = 0; $i < count($arr); $i++) {
                                                    $obj = $arr[$i];

                                                    $strTbl .= "<tr>";
                                                        // $strTbl .= "<th>". $stt++ ."</th>";
                                                        // $strTbl .= "<td>$obj->TourID</td>";
                                                        // $strTbl .= "<td>$obj->CategoryTourID</td>";
                                                        // $strTbl .= "<td>$obj->TourName</td>";
                                                        // $strTbl .= "<td>$obj->TimeStart</td>";
                                                        // $strTbl .= "<td>$obj->TimeLimit</td>";
                                                        // $strTbl .= "<td>$obj->TourPrice</td>";
                                                        // $strTbl .= "<td>$obj->TourSale</td>";
                                                        // $strTbl .= "<td>$obj->Location</td>";
                                                        // $strTbl .= "<td><img src='$obj->AvatarTour' alt='banner' width='200' height='100'></td>";
                                                        // $strTbl .= "<td>$obj->Status</td>";
                                                        // $strTbl .= "<td>$obj->Description</td>";
                                                        // $strTbl .= "<td>...</td>";

                                                        $strTbl .= "<th>". $stt++ ."</th>";
                                                        $strTbl .= "<td>$obj->CategoryTourID</td>";
                                                        $strTbl .= "<td>$obj->TourName</td>";
                                                        $strTbl .= "<td>$obj->TimeStart</td>";
                                                        $strTbl .= "<td>$obj->TimeLimit</td>";
                                                        $strTbl .= "<td>".$obj->TourPrice." USD"."</td>";
                                                        $strTbl .= "<td><button class='btn btn-secondary' data-bs-toggle='modal' data-bs-target='#modaltour'>More</button></td>";
                                                    $strTbl .= "</tr>";
                                                    
                                                }
                                                
                                                echo $strTbl;
                                                ?>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
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
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">MountainName:</label>
                                                <input type="text" id="MountainName" name="fMountainName" class="form-control" placeholder="MountainName" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">LocationX:</label>
                                                <input type="text" id="LocationX" name="fLocationX" class="form-control" placeholder="LocationX" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">LocationY:</label>
                                                <input type="text" id="LocationY" name="fLocationY" class="form-control" placeholder="LocationY" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Banner:</label>
                                                <input type="file" id="Banner" name="fBanner" class="form-control" placeholder="Banner" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Type:</label>
                                                <select class="form-select" id="Type" name="fType">
                                                    <option value="1">1 chặng</option>
                                                    <option value="2">Nhiều chặng</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Level:</label>
                                                <select class="form-select" id="Level" name="fLevel">
                                                    <option value="1">Dễ</option>
                                                    <option value="2">Trung bình</option>
                                                    <option value="3">Khó</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Sheltering:</label>
                                                <input type="text" id="Sheltering" name="fSheltering" class="form-control" placeholder="Sheltering" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Techniques:</label>
                                                <input type="text" id="Techniques" name="fTechniques" class="form-control" placeholder="Techniques" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Description:</label>
                                                <input type="text" id="Description" name="fDescription" class="form-control" placeholder="Description" />
                                            </div>
                                            <input type="submit" id="btnMountaineering" name="fMountaineering" class="btn btn-primary" value="Save" />
                                        </form>

                                        <?php
                                        $message = "";

                                        if (isset($_POST['fMountaineering']) && $_POST['fMountaineering'] == 'Save') {
                                            if (isset($_FILES['fBanner']) && $_FILES['fBanner']['error'] === UPLOAD_ERR_OK) {
                                
                                                // lưu vào thư mục tạm webserver
                                                $fileTmpPath = $_FILES['fBanner']['tmp_name'];
                                                // echo $fileTmpPath;
                                
                                                // thông tin file
                                                $fileName = $_FILES['fBanner']['name'];
                                                $fileSize = $_FILES['fBanner']['size'];
                                                $fileType = $_FILES['fBanner']['type'];
                                
                                                // lấy tên file và đuôi file
                                                $fileNameCmps = explode(".", $fileName);
                                
                                                // chuẩn hóa lại tên file
                                                $fileExtension = strtolower(end($fileNameCmps));
                                
                                                // thiết đặt filename để k bị trùng nhau 
                                                $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
                                
                                                // kiem tra phan mo rong cua file
                                                $allowedfileExtensions = array('jpg', 'gif', 'png');
                                
                                                // kiểm tra đuôi file
                                                if (in_array($fileExtension, $allowedfileExtensions)) {
                                                    // thu muc file uploaded
                                                    $uploadFileDir = '../admin/assets/img/Mountaineering/';
                                                    $dest_path = $uploadFileDir . $newFileName;
                                
                                                    if (move_uploaded_file($fileTmpPath, $dest_path)) {
                                                        $message = "";
                                                    } else {
                                                        $message = 'Check if the directory has write permissions.';
                                                    }
                                                } else {
                                                    $message = 'Only file types allowed: ' . implode(',', $allowedfileExtensions);
                                                }
                                            }
                                        }
                                
                                        echo $message;

                                        if(isset($_POST["fMountaineering"])) {
                                            $fMountainName = $_POST["fMountainName"];
                                            $fLocationX = $_POST["fLocationX"];
                                            $fLocationY = $_POST["fLocationY"];
                                            // $fBanner = $_POST["fBanner"];
                                            $fType = $_POST["fType"];
                                            $fLevel = $_POST["fLevel"];
                                            $fSheltering = $_POST["fSheltering"];
                                            $fTechniques = $_POST["fTechniques"];
                                            $fDescription = $_POST["fDescription"];
                                    
                                            $a = new Mountaineering();
                                            $a->mountainName = $fMountainName; 
                                            $a->locationX = $fLocationX; 
                                            $a->locationY = $fLocationY; 
                                            $a->banner = $uploadFileDir.$newFileName; 
                                            $a->type = $fType; 
                                            $a->level = $fLevel; 
                                            $a->sheltering = $fSheltering;
                                            $a->techniques = $fTechniques; 
                                            $a->description = $fDescription; 
                                            $a->addMountaineering(); 
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <!-- table list Mountaineering -->
                            <div id="listMountaineering">
                                <div class="text-center">
                                    <h2>List Mountaineering</h2>
                                </div>
                                <div class="pb-5">
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
                                                    <th scope="col">Action</th>
                                                </tr>
                                                
                                                <?php 
                                                
                                                $a = new Mountaineering();
                                                $arr = $a->getListMountaineering();
                                                $strTbl="";

                                                $stt = 1;

                                                for($i = 0; $i < count($arr); $i++) {
                                                    $obj = $arr[$i];

                                                    $strTbl .= "<tr>";
                                                        $strTbl .= "<th>". $stt++ ."</th>";
                                                        $strTbl .= "<td>$obj->mountaineeringID</td>";
                                                        $strTbl .= "<td>$obj->mountainName</td>";
                                                        $strTbl .= "<td>$obj->locationX</td>";
                                                        $strTbl .= "<td>$obj->locationY</td>";
                                                        $strTbl .= "<td><img src='$obj->banner' alt='banner' width='200' height='100'></td>";
                                                        $strTbl .= "<td>$obj->type</td>";
                                                        $strTbl .= "<td>$obj->level</td>";
                                                        $strTbl .= "<td>$obj->sheltering</td>";
                                                        $strTbl .= "<td>$obj->techniques</td>";
                                                        $strTbl .= "<td>$obj->description</td>";
                                                        $strTbl .= "<td>...</td>";
                                                    $strTbl .= "</tr>";
                                                    
                                                }
                                                
                                                echo $strTbl;
                                                ?>
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
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">ServiceName:</label>
                                                <input type="text" id="ServiceName" name="fServiceName" class="form-control" placeholder="ServiceName" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Price:</label>
                                                <div class="input-group">
                                                    <input type="text" id="Price" name="fPrice" class="form-control" placeholder="Price" />
                                                    <span class="input-group-text">USD</span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">TNTT(tax):</label>
                                                <div class="input-group">
                                                    <input type="text" id="VAT" name="fVAT" class="form-control" placeholder="VAT" value="10"/>
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Sale on service:</label>
                                                <div class="input-group">
                                                    <input type="text" id="Sale" name="fSale" class="form-control" placeholder="Sale" />
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Description:</label>
                                                <input type="text" id="Description" name="fDescription" class="form-control" placeholder="Description" />
                                            </div>
                                            <input type="submit" id="btnservice" name="fservice" class="btn btn-primary" value="Save" />
                                        </form>
                                        <?php

                                        if(isset($_POST["fservice"])) {
                                            $fServiceName = $_POST["fServiceName"];
                                            $fPrice = $_POST["fPrice"];
                                            $fVAT = $_POST["fVAT"];
                                            $fSale = $_POST["fSale"];
                                            $fDescription = $_POST["fDescription"];

                                            $a = new Service();
                                            $a->serviceName = $fServiceName;
                                            $a->price = $fPrice;
                                            $a->vAT = $fVAT;
                                            $a->sale = $fSale;
                                            $a->description = $fDescription;
                                            $a->addService();
                                        }

                                        ?>
                                    </div>
                                </div>
                            </div>

                            <!-- table list service -->
                            <div id="listservice">
                                <div class="text-center">
                                    <h2>List Service</h2>
                                </div>
                                <div class="pb-5">
                                    <div style="overflow-x: auto;">
                                        
                                        <div id="tbl-kithi" class="mt-4 pb-5">
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">ServiceName</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">TNTT(tax)</th>
                                                    <th scope="col">Sale</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                <?php 
                                                
                                                $a = new Service();
                                                $arr = $a->getListService();
                                                $strTbl="";

                                                $stt = 1;

                                                for($i = 0; $i < count($arr); $i++) {
                                                    $obj = $arr[$i];

                                                    $strTbl .= "<tr>";
                                                        $strTbl .= "<th>". $stt++ ."</th>";
                                                        $strTbl .= "<td>$obj->serviceID</td>";
                                                        $strTbl .= "<td>$obj->serviceName</td>";
                                                        $strTbl .= "<td>$obj->price</td>";
                                                        $strTbl .= "<td>$obj->vAT</td>";
                                                        $strTbl .= "<td>$obj->sale</td>";
                                                        $strTbl .= "<td>$obj->description</td>";
                                                        $strTbl .= "<td>...</td>";
                                                    $strTbl .= "</tr>";
                                                    
                                                }
                                                
                                                echo $strTbl;
                                                ?>
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
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Title:</label>
                                                <input type="text" id="Title" name="fTitle" class="form-control" placeholder="Title" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Lead:</label>
                                                <input type="text" id="Lead" name="fLead" class="form-control" placeholder="Lead" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Category:</label>
                                                <select class="form-select" name="fCategory" id="CategoryID">
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Content:</label>
                                                <textarea name="fContent" id="editor1" rows="10" cols="80" class="form-control">Content here...</textarea>
                                            </div> 
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">AvatarNews:</label>
                                                <input type="file" id="AvatarNews" name="fAvatarNews" class="form-control" placeholder="AvatarNews" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Author:</label>
                                                <input type="text" id="Author" name="fAuthor" class="form-control" placeholder="Author" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Description:</label>
                                                <input type="text" id="Description" name="fDescription" class="form-control" placeholder="Description" />
                                            </div>
                                            <input type="submit" id="btnnews" name="fnews" class="btn btn-primary" value="Save" />
                                        </form>
                                        <?php
                                        $message = "";

                                        if (isset($_POST['fnews']) && $_POST['fnews'] == 'Save') {
                                            if (isset($_FILES['fAvatarNews']) && $_FILES['fAvatarNews']['error'] === UPLOAD_ERR_OK) {
                                
                                                // lưu vào thư mục tạm webserver
                                                $fileTmpPath = $_FILES['fAvatarNews']['tmp_name'];
                                                // echo $fileTmpPath;
                                
                                                // thông tin file
                                                $fileName = $_FILES['fAvatarNews']['name'];
                                                $fileSize = $_FILES['fAvatarNews']['size'];
                                                $fileType = $_FILES['fAvatarNews']['type'];
                                
                                                // lấy tên file và đuôi file
                                                $fileNameCmps = explode(".", $fileName);
                                
                                                // chuẩn hóa lại tên file
                                                $fileExtension = strtolower(end($fileNameCmps));
                                
                                                // thiết đặt filename để k bị trùng nhau 
                                                $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
                                
                                                // kiem tra phan mo rong cua file
                                                $allowedfileExtensions = array('jpg', 'gif', 'png');
                                
                                                // kiểm tra đuôi file
                                                if (in_array($fileExtension, $allowedfileExtensions)) {
                                                    // thu muc file uploaded
                                                    $uploadFileDir = '../admin/assets/img/News/';
                                                    $dest_path = $uploadFileDir . $newFileName;
                                
                                                    if (move_uploaded_file($fileTmpPath, $dest_path)) {
                                                        $message = "";
                                                    } else {
                                                        $message = 'Check if the directory has write permissions.';
                                                    }
                                                } else {
                                                    $message = 'Only file types allowed: ' . implode(',', $allowedfileExtensions);
                                                }
                                            }
                                        }
                                
                                        echo $message;

                                        if(isset($_POST["fnews"])) {
                                            $fCategory = $_POST["fCategory"];
                                            $fTitle = $_POST["fTitle"];
                                            $fContent = $_POST["fContent"];
                                            // $fAvatarNews = $_POST["fAvatarNews"];
                                            $fAuthor = $_POST["fAuthor"];
                                            $fDescription = $_POST["fDescription"];

                                            $a = new News();
                                            $a->CategoryID = $fCategory;
                                            $a->Title = $fTitle;
                                            $a->Content = $fContent;
                                            $a->AvatarNews = $uploadFileDir.$newFileName;
                                            $a->Author = $fAuthor;
                                            $a->Description = $fDescription;
                                            $a->addNews();
                                        }

                                        ?>
                                    </div>
                                </div>
                            </div>

                            <!-- table list News -->
                            <div id="listNews">
                                <div class="text-center">
                                    <h2>List News</h2>
                                </div>
                                <div class="pb-5">
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
                                                    <th scope="col">Action</th>
                                                </tr>
                                                <?php 
                                                
                                                $a = new News();
                                                $arr = $a->getListNews();
                                                $strTbl="";

                                                $stt = 1;

                                                for($i = 0; $i < count($arr); $i++) {
                                                    $obj = $arr[$i];

                                                    $strTbl .= "<tr>";
                                                        $strTbl .= "<th>". $stt++ ."</th>";
                                                        $strTbl .= "<td>$obj->NewsID</td>";
                                                        $strTbl .= "<td>$obj->CategoryID</td>";
                                                        $strTbl .= "<td>$obj->Title</td>";
                                                        $strTbl .= "<td>$obj->Content</td>";
                                                        $strTbl .= "<td><img src='$obj->AvatarNews' alt='AvatarNews' width='200' height='100'></td>";
                                                        $strTbl .= "<td>$obj->Author</td>";
                                                        $strTbl .= "<td>$obj->Description</td>";
                                                        $strTbl .= "<td>...</td>";
                                                    $strTbl .= "</tr>";
                                                    
                                                }
                                                
                                                echo $strTbl;
                                                ?>
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
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">LibraryName:</label>
                                                <input type="text" id="LibraryName" name="fLibraryName" class="form-control" placeholder="LibraryName" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Description:</label>
                                                <input type="text" id="Description" name="fDescription" class="form-control" placeholder="Description" />
                                            </div>
                                            <input type="submit" id="btnlibrary" name="flibrary" class="btn btn-primary" value="Save" />
                                        </form>
                                        <?php
                                        
                                        if(isset($_POST["flibrary"])) {
                                            $fLibraryName = $_POST["fLibraryName"];
                                            $fDescription = $_POST["fDescription"];

                                            $a = new Library();
                                            $a->libraryName = $fLibraryName;
                                            $a->description = $fDescription;
                                            $a->addLibrary();
                                        }
                                        
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <!-- table list library -->
                            <div id="listlibrary">
                                <div class="text-center">
                                    <h2>List Library</h2>
                                </div>
                                <div class="pb-5">
                                    <div style="overflow-x: auto;">

                                        <div id="tbl-kithi" class="mt-4 pb-5" >
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">LibraryName</th>
                                                    <th scope="col">Description</th>
                                                    <th class='text-center' scope="col">Action</th>
                                                </tr>
                                                <?php 
                                                
                                                $a = new Library();
                                                $arr = $a->getListLibrary();
                                                $strTbl="";

                                                $stt = 1;

                                                for($i = 0; $i < count($arr); $i++) {
                                                    $obj = $arr[$i];

                                                    $strTbl .= "<tr>";
                                                        $strTbl .= "<th>". $stt++ ."</th>";
                                                        $strTbl .= "<td>$obj->libraryID</td>";
                                                        $strTbl .= "<td>$obj->libraryName</td>";
                                                        $strTbl .= "<td>$obj->description</td>";
                                                        $strTbl .= "<td class='text-center'>
                                                                        <button class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#modalitemlibrary'>Add image</button>
                                                                        <button class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#modalitemlibrary'>Add video</button>
                                                                    </td>";
                                                    $strTbl .= "</tr>";
                                                    
                                                }
                                                
                                                echo $strTbl;
                                                ?>
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
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">ItemID:</label>
                                                <select class="form-select" id="ItemID" name="fItemID" onchange="showinfo(this.value)">
                                                    <option value="0">Chọn</option>
                                                    <option value="1">Ảnh</option>
                                                    <option value="2">Video</option>
                                                </select>
                                            </div>
                                            <div id="txtHint"></div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Library:</label>
                                                <select class="form-select" id="LibraryID" name="fLibraryID">
                                                    <option value="0">Chọn</option>
                                                    <option value="1">thư viện 1</option>
                                                    <option value="2">thư viện 2</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Description:</label>
                                                <input type="text" id="Description" name="fDescription" class="form-control" placeholder="Description" />
                                            </div>
                                            <input type="submit" id="btnitemlibrary" name="fitemlibrary" class="btn btn-primary" value="Save" />
                                        </form>
                                        <?php 
                                        
                                        if(isset($_POST["fitemlibrary"])) {
                                            $fItemID = $_POST["fItemID"];
                                            $fLibraryID = $_POST["fLibraryID"];
                                            $fDescription = $_POST["fDescription"];

                                            $a = new Itemlibrary();
                                            $a->itemID = $fItemID;
                                            $a->libraryID = $fLibraryID;
                                            $a->description = $fDescription;
                                            $a->addItemlibrary();
                                        }
                                        
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <!-- table list Itemlibrary -->
                            <div id="listItemlibrary">
                                <div class="text-center">
                                    <h2>List Itemlibrary</h2>
                                </div>
                                <div class="pb-5">
                                    <div style="overflow-x: auto;">

                                        <div id="tbl-kithi" class="mt-4 pb-5" >
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">ItemID</th>
                                                    <th scope="col">LibraryID</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                <?php 
                                                
                                                $a = new Itemlibrary();
                                                $arr = $a->getListItemLibrary();
                                                $strTbl="";

                                                $stt = 1;

                                                for($i = 0; $i < count($arr); $i++) {
                                                    $obj = $arr[$i];

                                                    $strTbl .= "<tr>";
                                                        $strTbl .= "<th>". $stt++ ."</th>";
                                                        $strTbl .= "<td>$obj->itemLibraryID</td>";
                                                        $strTbl .= "<td>$obj->itemID</td>";
                                                        $strTbl .= "<td>$obj->libraryID</td>";
                                                        $strTbl .= "<td>$obj->description</td>";
                                                        $strTbl .= "<td></td>";
                                                    $strTbl .= "</tr>";
                                                    
                                                }
                                                
                                                echo $strTbl;
                                                ?>
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
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">CategoryName:</label>
                                                <input type="text" id="CategoryName" name="fCategoryName" class="form-control" placeholder="CategoryName" />
                                            </div>
                                            <div class="mb-3 w-50">
                                                <label class="form-label fw-bold text-secondary">ParentID:</label>
                                                <select class="form-select" id="ParentID" name="fParentID">
                                                    <option value="1">tên của category</option>
                                                    <option value="2">tên của category</option>
                                                    <option value="3">tên của category</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Description:</label>
                                                <input type="text" id="Description" name="fDescription" class="form-control" placeholder="Description" />
                                            </div>
                                            <input type="submit" id="btncategory" name="fcategory" class="btn btn-primary" value="Save" />
                                        </form>
                                        <?php 
                                        
                                        if(isset($_POST["fcategory"])) {
                                            $fCategoryName = $_POST["fCategoryName"];
                                            $fParentID = $_POST["fParentID"];
                                            $fDescription = $_POST["fDescription"];

                                            $a = new Category();
                                            $a->CategoryName = $fCategoryName;
                                            $a->ParentID = $fParentID;
                                            $a->Description = $fDescription;
                                            $a->addCategory();
                                        }
                                        
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <!-- table list category -->
                            <div id="listcategory">
                                <div class="text-center">
                                    <h2>List Category</h2>
                                </div>
                                <div class="pb-5">
                                    <div style="overflow-x: auto;">

                                        <div id="tbl-kithi" class="mt-4 pb-5" >
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">CategoryName</th>
                                                    <th scope="col">ParentID</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                <?php 
                                                
                                                $a = new Category();
                                                $arr = $a->getListCategory();
                                                $strTbl="";

                                                $stt = 1;

                                                for($i = 0; $i < count($arr); $i++) {
                                                    $obj = $arr[$i];

                                                    $strTbl .= "<tr>";
                                                        $strTbl .= "<th>". $stt++ ."</th>";
                                                        $strTbl .= "<td>$obj->CategoryID</td>";
                                                        $strTbl .= "<td>$obj->CategoryName</td>";
                                                        $strTbl .= "<td>$obj->ParentID</td>";
                                                        $strTbl .= "<td>$obj->Description</td>";
                                                        $strTbl .= "<td>...</td>";
                                                    $strTbl .= "</tr>";
                                                    
                                                }
                                                
                                                echo $strTbl;
                                                ?>
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
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">CategoryTourName:</label>
                                                <input type="text" id="CategoryTourName" name="fCategoryTourName" class="form-control" placeholder="CategoryTourName" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Status:</label>
                                                <select class="form-select" id="Status" name="fStatus" >
                                                    <option value="3">Chưa kích hoạt</option>
                                                    <option value="1">Đang hoạt động</option>
                                                    <option value="2">Dừng hoạt động</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Description:</label>
                                                <input type="text" id="Description" name="fDescription" class="form-control" placeholder="Description" />
                                            </div>
                                            <input type="submit" id="btncategorytour" name="fcategorytour" class="btn btn-primary" value="Save" />
                                        </form>
                                        <?php 
                                        
                                        if(isset($_POST["fcategorytour"])) {
                                            $fCategoryTourName = $_POST["fCategoryTourName"];
                                            $fStatus = $_POST["fStatus"];
                                            $fDescription = $_POST["fDescription"];

                                            $a = new CategoryTour();
                                            $a->CategoryTourName = $fCategoryTourName;
                                            $a->Status = $fStatus;
                                            $a->Description = $fDescription;
                                            $a->addCategoryTour();
                                        }
                                        
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <!-- table list categorytour -->
                            <div id="listCategorytour">
                                <div class="text-center">
                                    <h2>List Categorytour</h2>
                                </div>
                                <div class="pb-5">
                                    <div style="overflow-x: auto;">

                                        <div id="tbl-kithi" class="mt-4 pb-5" >
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">CategoryTourName</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                <?php 
                                                
                                                $a = new CategoryTour();
                                                $arr = $a->getListCategoryTour();
                                                $strTbl="";

                                                $stt = 1;

                                                for($i = 0; $i < count($arr); $i++) {
                                                    $obj = $arr[$i];

                                                    $strTbl .= "<tr>";
                                                        $strTbl .= "<th>". $stt++ ."</th>";
                                                        $strTbl .= "<td>$obj->CategoryTourID</td>";
                                                        $strTbl .= "<td>$obj->CategoryTourName</td>";
                                                        $strTbl .= "<td>$obj->Status</td>";
                                                        $strTbl .= "<td>$obj->Description</td>";
                                                        $strTbl .= "<td>...</td>";
                                                    $strTbl .= "</tr>";
                                                    
                                                }
                                                
                                                echo $strTbl;
                                                ?>
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
                                <div class="pb-5">
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
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                <?php 
                                                
                                                $a = new Contact();
                                                $arr = $a->getListContact();
                                                $strTbl="";

                                                $stt = 1;

                                                for($i = 0; $i < count($arr); $i++) {
                                                    $obj = $arr[$i];

                                                    $strTbl .= "<tr>";
                                                        $strTbl .= "<th>". $stt++ ."</th>";
                                                        $strTbl .= "<td>$obj->contactID</td>";
                                                        $strTbl .= "<td>$obj->MemberID</td>";
                                                        $strTbl .= "<td>$obj->fullname</td>";
                                                        $strTbl .= "<td>$obj->address</td>";
                                                        $strTbl .= "<td>$obj->email</td>";
                                                        $strTbl .= "<td>$obj->telephone</td>";
                                                        $strTbl .= "<td>$obj->message</td>";
                                                        $strTbl .= "<td>$obj->description</td>";
                                                        $strTbl .= "<td>...</td>";
                                                    $strTbl .= "</tr>";
                                                    
                                                }
                                                
                                                echo $strTbl;
                                                ?>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- item -->
                    <!-- <div class="tab-pane fade" id="item">
                        <div class="container text-dark pb-5">
                            form Add Item
                            <div id="addItem">
                                <div class="pt-5 pb-5 d-flex justify-content-center">
                                    <div style="width: 650px;">
                                        <div class="text-center pb-3">
                                            <h2>Add Item</h2>
                                        </div>
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Type:</label>
                                                <input type="text" id="Type" name="fType" class="form-control" placeholder="Type" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Description:</label>
                                                <input type="text" id="Description" name="fDescription" class="form-control" placeholder="Description" />
                                            </div>
                                            <input type="submit" id="btnItem" name="fItem" class="btn btn-primary" value="Save" />
                                        </form>
                                        <?php 
                                        
                                        if(isset($_POST["fItem"])) {
                                            $fType = $_POST["fType"];
                                            $fDescription = $_POST["fDescription"];

                                            $a = new Item();
                                            $a->type = $fType;
                                            $a->description = $fDescription;
                                            $a->addItem();
                                        }
                                        
                                        ?>
                                    </div>
                                </div>
                            </div>

                            table list Item
                            <div id="listItem">
                                <div class="text-center">
                                    <h2>List Item</h2>
                                </div>
                                <div class="pb-5">
                                    <div style="overflow-x: auto;">

                                        <div id="tbl-kithi" class="mt-4 pb-5" >
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Description</th>
                                                </tr>
                                                <?php 
                                                
                                                $a = new Item();
                                                $arr = $a->getListItem();
                                                $strTbl="";

                                                $stt = 1;

                                                for($i = 0; $i < count($arr); $i++) {
                                                    $obj = $arr[$i];

                                                    $strTbl .= "<tr>";
                                                        $strTbl .= "<th>". $stt++ ."</th>";
                                                        $strTbl .= "<td>$obj->itemID</td>";
                                                        $strTbl .= "<td>$obj->type</td>";
                                                        $strTbl .= "<td>$obj->description</td>";
                                                    $strTbl .= "</tr>";
                                                    
                                                }
                                                
                                                echo $strTbl;
                                                ?>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> -->

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
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Mountaineering:</label>
                                                <select id="Mountaineering" name="fMountaineeringID" class="form-select">
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Service:</label>
                                                <select id="Service" name="fServiceID" class="form-select">
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Description:</label>
                                                <input type="text" id="Description" name="fDescription" class="form-control" placeholder="Description" />
                                            </div>
                                            <input type="submit" id="btnlocationandservice" name="flocationandservice" class="btn btn-primary" value="Save" />
                                        </form>
                                        <?php 
                                        
                                        if(isset($_POST["flocationandservice"])) {
                                            $fMountaineeringID = $_POST["fMountaineeringID"];
                                            $fServiceID = $_POST["fServiceID"];
                                            $fDescription = $_POST["fDescription"];

                                            $a = new Locationandservice();
                                            $a->mountaineeringID = $fMountaineeringID;
                                            $a->serviceID = $fServiceID;
                                            $a->description = $fDescription;
                                            $a->addLocationandservice();
                                        }
                                        
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <!-- table list locationandservice -->
                            <div id="listlocationandservice">
                                <div class="text-center">
                                    <h2>List Locationandservice</h2>
                                </div>
                                <div class="pb-5">
                                    <div style="overflow-x: auto;">

                                        <div id="tbl-kithi" class="mt-4 pb-5" >
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">MountaineeringID</th>
                                                    <th scope="col">ServiceID</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                <?php 
                                                
                                                $a = new Locationandservice();
                                                $arr = $a->getListLocationandservice();
                                                $strTbl="";

                                                $stt = 1;

                                                for($i = 0; $i < count($arr); $i++) {
                                                    $obj = $arr[$i];

                                                    $strTbl .= "<tr>";
                                                        $strTbl .= "<th>". $stt++ ."</th>";
                                                        $strTbl .= "<td>$obj->locationAndServiceID</td>";
                                                        $strTbl .= "<td>$obj->mountaineeringID</td>";
                                                        $strTbl .= "<td>$obj->serviceID</td>";
                                                        $strTbl .= "<td>$obj->description</td>";
                                                        $strTbl .= "<td>...</td>";
                                                    $strTbl .= "</tr>";
                                                    
                                                }
                                                
                                                echo $strTbl;
                                                ?>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- profile -->
                    <div class="tab-pane fade" id="profile">
                        <div class="container pt-5 pb-5 text-dark">
                            <div>
                                <h2 class="text-center">Account Information</h2> 
                            </div>
                            <div class="d-flex justify-content-center">
                                <div style="width: 650px;">
                                    <div class="p-3">
                                        <?php 

                                        $a = new Usersystem();
                                        $list = $a->getProfile();

                                        for($i = 0; $i < count($list); $i++) {
                                            $obj = $list[$i];    
                                            echo '  <div class="mt-2 mb-2 d-flex justify-content-between border-bottom"> ' .
                                                        '<strong class="text-secondary">Username:</strong><span class="text-primary">'. $obj->UserName.'</span>' .
                                                    '</div>'.
                                                    '<div class="mt-2 mb-2 d-flex justify-content-between border-bottom">'.
                                                        '<strong class="text-secondary">Role:</strong><span class="text-primary">'. $obj->Role.'</span>'.
                                                    '</div>';
                                        }

                                        ?>
                                        
                                    </div>
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                        <div class="p-3">
                                            <div>
                                                <h4>Reset password:</h3>
                                            </div>
                                            <div class="mt-3 mb-3">
                                                <label class="form-label fw-bold text-secondary">Current password:</label>
                                                <input type="text" id="crpass" name="fcrpass" class="form-control" placeholder="Pass" />
                                            </div>
                                            <div class="mt-3 mb-3">
                                                <label class="form-label fw-bold text-secondary">New password:</label>
                                                <input type="text" id="newpass" name="fnewpass" class="form-control" placeholder="Create pass" />
                                            </div>
                                            <div class="mt-3 mb-3">
                                                <label class="form-label fw-bold text-secondary">Confirm password:</label>
                                                <input type="text" id="cfpass" name="cfpass" class="form-control" placeholder="Create pass" />
                                            </div>
                                            <div class="mt-3 mb-3">
                                                <input type="submit" class="btn btn-primary" name="fresetpass" value="Reset"/>
                                            </div>
                                        </div>
                                    </form>
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

            <!-- BEGIN MODAL -->

            <!-- modal tour -->
            <div class="modal fade" id="modaltour" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Full info tour</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div style="overflow-x: auto;">

                                <div id="tbl-kithi" class="mt-4 pb-5" >
                                    <table class="table table-striped table-hover">
                                        <tr>
                                            <th scope="col">STT</th>
                                            <th scope="col">ID</th>
                                            <th scope="col">CategoryTour</th>
                                            <th scope="col">TourName</th>
                                            <th scope="col">TimeStart</th>
                                            <th scope="col">TimeLimit</th>
                                            <th scope="col">TourPrice</th>
                                            <th scope="col">TourSale</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">AvatarTour</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        <?php 
                                        
                                        $a = new Tour();
                                        $arr = $a->getListTour();
                                        $strTbl="";

                                        $stt = 1;

                                        for($i = 0; $i < count($arr); $i++) {
                                            $obj = $arr[$i];

                                            $strTbl .= "<tr>";
                                                $strTbl .= "<th>". $stt++ ."</th>";
                                                $strTbl .= "<td>$obj->TourID</td>";
                                                $strTbl .= "<td>$obj->CategoryTourID</td>";
                                                $strTbl .= "<td>$obj->TourName</td>";
                                                $strTbl .= "<td>$obj->TimeStart</td>";
                                                $strTbl .= "<td>$obj->TimeLimit</td>";
                                                $strTbl .= "<td>".$obj->TourPrice." USD"."</td>";
                                                $strTbl .= "<td>$obj->TourSale</td>";
                                                $strTbl .= "<td>$obj->Location</td>";
                                                $strTbl .= "<td><img src='$obj->AvatarTour' alt='banner' width='200' height='100'></td>";
                                                $strTbl .= "<td>$obj->Status</td>";
                                                $strTbl .= "<td>$obj->Description</td>";
                                                $strTbl .= "<td>...</td>";
                                            $strTbl .= "</tr>";
                                            
                                        }
                                        
                                        echo $strTbl;
                                        ?>
                                    </table>
                                </div>

                                </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal add itemlibrary -->
            <div class="modal fade" id="modalitemlibrary" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Img/Video</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="p-2 d-flex justify-content-center">
                                <div style="width: 650px;">
                                    <div class="text-center pb-3">
                                        <h2>Add</h2>
                                    </div>
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold text-secondary">ItemID:</label>
                                            <select class="form-select" id="ItemID" name="fItemID" onchange="showinfo(this.value)">
                                                <option value="0">Chọn</option>
                                                <option value="1">Ảnh</option>
                                                <option value="2">Video</option>
                                            </select>
                                        </div>
                                        <div id="txtHint"></div>
                                        <div class="mb-3">
                                            <label class="form-label fw-bold text-secondary">Description:</label>
                                            <input type="text" id="Description" name="fDescription" class="form-control" placeholder="Description" />
                                        </div>
                                        <input type="submit" id="btnitemlibrary" name="fitemlibrary" class="btn btn-primary" value="Save" />
                                    </form>
                                    <?php 
                                    
                                    if(isset($_POST["fitemlibrary"])) {
                                        $fItemID = $_POST["fItemID"];
                                        $fLibraryID = $_POST["fLibraryID"];
                                        $fDescription = $_POST["fDescription"];

                                        $a = new Itemlibrary();
                                        $a->itemID = $fItemID;
                                        $a->libraryID = $fLibraryID;
                                        $a->description = $fDescription;
                                        $a->addItemlibrary();
                                    }
                                    
                                    ?>
                                </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MODAL -->
        </div>

        <!-- JQUERY 3.6.1 -->
        <script src="../assets/js/jquery.min.js"></script>
        <!-- JS BOOTSTRAP -->
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <!-- chart js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <!-- JS ME -->
        <script src="./assets/js/loadMenu.js"></script>
        <script src="./assets/js/admin.js"></script>
        <script src="../assets/js/ckeditor/ckeditor.js"></script>
        <script>
            // ck editer
            CKEDITOR.replace( 'editor1' );

            function showinfo(str)
            {
                if (str == "0") {
                    document.querySelector("#txtHint").innerHTML = "";
                    return;
                } else if(str == 1){
                    document.querySelector("#txtHint").innerHTML = `<div class="mb-3">
                                                                        <label class="form-label fw-bold text-secondary">Upload img:</label>
                                                                        <input type="file" id="Upload" name="fUpload" class="form-control"/>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label fw-bold text-secondary">Alt:</label>
                                                                        <input type="text" id="Alt" name="fAlt" class="form-control" placeholder="Alt" />
                                                                    </div>`;
                    return;
                } else {
                    document.querySelector("#txtHint").innerHTML = `<div class="mb-3">
                                                                        <label class="form-label fw-bold text-secondary">Link video:</label>
                                                                        <input type="text" id="Alt" name="fUpload" class="form-control" placeholder="Link" />
                                                                    </div>`;
                }

            }
        </script>
    </body> 
</html>
