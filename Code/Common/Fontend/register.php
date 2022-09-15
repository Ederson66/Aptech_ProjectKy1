<?php

require_once './PhpSetting/SqlConfig.php';

if(!empty($_GET["fregister"])){
    $fusername = $_GET['fusername'];
    $fpassword = $_GET['fpassword'];
     $flastname = $_GET['flastname'];
    $fmiddlename = $_GET['fmiddlename'];
    $ffirstname = $_GET['ffirstname'];
    $fbirthday = $_GET['fbirthday'];
    $fsex = $_GET['fsex'];
    $fphonenumber = $_GET['fphonenumber'];
    $femail = $_GET['femail'];

    $a = new SQLConfig();
    $a->Username=$fusername;
    $a->Password=$fpassword;
    $a->Fisrtname=$ffirstname;
    $a->Middlename=$fmiddlename;
    $a->Lastname=$flastname;
    $a->Birthday=$fbirthday;
    $a->Sex=$fsex;
    $a->Telephone=$fphonenumber;
    $a->Email=$femail;
    $a->register();
    
    echo '<script>alert("Done")</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Reset CSS -->
    <link rel="stylesheet" href="./assets/css/reset.min.css">
    <!-- BOOTSTRAP 5.2 CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <!-- BOOTSTRAP ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- CSS ME -->
    <link rel="stylesheet" href="./assets/css/login.css">
    <title>Register</title>
</head>
<body>
    <!--BEGIN App -->
    <div class="app">

        <!--BEGIN Header -->
        <!-- <div class="header">
            <div class="d-flex">
                <h3 class="p-3 pe-5">
                    <a class="text-decoration-none text-secondary" href="#" style="text-shadow: 2px 2px #cccc;">Home</a>
                </h3>
                <h3 class="p-3 ps-5">
                    <a class="text-decoration-none text-secondary" href="#" style="text-shadow: 2px 2px #cccc;">About</a>
                </h3>
            </div>
        </div> -->
        <!--END Header -->

        <!--BEGIN Main -->
        <div class="main">
            <div class="me-5 ms-5 mb-5 mt-4">
                <div class="mb-3 pt-3">
                    <h2 class="h1 text-shadow">Register</h2>
                </div> 
                <form action="register.php" method="GET" >
                    <div class="input-group d-flex flex-column mb-3">
                        <!-- <label class="text-shadow" for="">Username</label> -->
                        <input type="text" class="form-control rounded" id="username" name="fusername" placeholder="Enter username">
                    </div>
                    <div class="input-group d-flex flex-column mb-3">
                        <!-- <label class="text-shadow" for="">Password</label> -->
                        <input type="password" class="form-control rounded" id="password" name="fpassword" placeholder="Enter assword">
                    </div>
                    <div class="input-group d-flex flex-column mb-3">
                        <!-- <label class="text-shadow" for="">Confirm password</label> -->
                        <input type="password" class="form-control rounded" name="fconfirmpass" placeholder="Enter confirm password">
                    </div>
                    <div class="input-group mb-3">
                        <div class="d-flex">
                           <div class="pe-2">
                                <!-- <span class="pe-2 text-shadow">Last Name: </span> -->
                               <input type="text" class="form-control rounded" name="flastname" placeholder="Enter last name">
                           </div>
                            <div class="ps-2">
                                <!-- <span class="pe-2 text-shadow">Middle Name:</span> -->
                                <input type="text" class="form-control rounded" name="fmiddlename" placeholder="Enter middle name">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <!-- <label class="text-shadow" for="">First Name:</label> -->
                        <input type="text" class="form-control rounded" name="ffirstname" placeholder="Enter first name">
                    </div>
                    <div class="input-group mb-3">
                        <div class="d-flex w-100">
                            <div class="pe-2">
                                <!-- <label class="text-shadow" for="">Brithday:</label> -->
                                <input type="date" class="form-control text-shadow rounded text-secondary" name="fbirthday">
                            </div>
                            <div class="ps-2 w-100">
                                <!-- <label class="text-shadow" for="">Giới tính</label> -->
                                <select name="fsex" class="form-select text-shadow text-secondary">
                                    <option selected>Sex</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select> 
                            </div>
                        </div>                      
                    </div>
                    <div class="input-group mb-3">
                        <!-- <label class="text-shadow" for="">Phone Number</label> -->
                        <input type="text" class="form-control rounded" name="fphonenumber" placeholder="Enter phone number">
                    </div>
                    <div class="input-group mb-3">
                        <!-- <label class="text-shadow" for="">Email</label> -->
                        <input type="text" class="form-control rounded" name="femail" placeholder="Enter email">
                    </div>
                    <!-- <div class="input-group mb-3">
                        <input type="file" class="form-control text-shadow rounded" placeholder="Chose file">
                    </div> -->
                    <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" id="btnpass" name="fregister" class="btn btn-primary text-dark rounded text-shadow bg-primary">Register</button>
                    </div>
                </form>
                <div class="mb-3 d-flex justify-content-center">
                    <a href="login.php" class="text-shadow">Loign now</a>
                </div>
            </div>
        </div>
        <!--END Main -->

        <!--BEGIN Footer -->
        <div class="footer"></div>
        <!--END Footer -->

    </div>
    <!--END App -->

    <!-- JQUERY 3.6.1 -->
    <script src="./assets/js/jquery.min.js"></script>
    <!-- JS BOOTSTRAP -->
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".main").height($(window).height());
        });
        var pattern = /^(?=.{5,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[\W])/

        $("#btnpass").click(function () {
            var checkval = pattern.test($("#password").val());

            if (!checkval) {
                alert("Nhập lại password!!");
            }
        });
    </script>
</body>
</html>
