 <?php

require_once './PhpSetting/SqlConfig.php';

if(!empty($_POST["fregister"])){
    $fusername = $_POST['fusername'];
    $fpassword = $_POST['fpassword'];
     $flastname = $_POST['flastname'];
    $fmiddlename = $_POST['fmiddlename'];
    $ffirstname = $_POST['ffirstname'];
    $fbirthday = $_POST['fbirthday'];
    $fsex = $_POST['fsex'];
    $fphonenumber = $_POST['fphonenumber'];
    $femail = $_POST['femail'];

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
    <!-- BOOTSTRAP 5.0 CSS -->
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
                <div class="mb-4 pt-3">
                    <h2 class="h1 text-shadow text-white">Register</h2>
                </div> 
                <form action="register.php" method="POST" >
                    <div class="input-group d-flex flex-column mb-3 pt-2 position-relative">
                        <input type="text" class="form-control rounded" id="username" name="fusername" required>
                        <label class="text-shadow text-white" for="">Username</label>
                    </div>
                    <div class="input-group d-flex flex-column mb-3 pt-2 position-relative">
                        <input type="password" class="form-control rounded" id="password" name="fpassword" required>
                        <label class="text-shadow text-white" for="">Password</label>
                    </div>
                    <div class="input-group d-flex flex-column mb-3 pt-2 position-relative">
                        <input type="password" class="form-control rounded" name="fconfirmpass" required>
                        <label class="text-shadow text-white" for="">Confirm password</label>
                    </div>
                    <div class="input-group mb-3 pt-2">
                        <div class="d-flex">
                           <div class="pe-2 position-relative pt-2">
                               <input type="text" class="form-control rounded" name="flastname" required>
                               <label class="pe-2 text-shadow text-white">Last Name</label>
                           </div>
                            <div class="ps-2 position-relative pt-2">
                                <input type="text" class="form-control rounded" name="fmiddlename" required>
                                <label class="ps-2 text-shadow text-white">Middle Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3 pt-2 position-relative">
                        <input type="text" class="form-control rounded" name="ffirstname" required>
                        <label class="text-shadow text-white" for="">First Name</label> 
                    </div>
                    <div class="input-group mb-3 pt-2">
                        <div class="d-flex w-100">
                            <div class="pe-2">
                                <input type="date" class="form-control text-shadow rounded text-white" name="fbirthday" required>
                            </div>
                            <div class="ps-2 position-relative w-100">
                                <select name="fsex" class="form-select text-shadow text-white">
                                    <option selected>Sex</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>                      
                    </div>
                    <div class="input-group mb-3 pt-2 position-relative">
                        <input type="text" class="form-control rounded" name="fphonenumber" required>
                        <label class="text-shadow text-white" for="">Phone Number</label>
                    </div>
                    <div class="input-group mb-3 pt-2 position-relative">
                        <input type="text" class="form-control rounded" name="femail" required>
                        <label class="text-shadow text-white" for="">Email</label>
                    </div>
                    <!-- <div class="input-group mb-3">
                        <input type="file" class="form-control text-shadow rounded" placeholder="Chose file">
                    </div> -->
                    <div class="mb-3 d-flex justify-content-center pt-2 position-relative">
                        <input class="p-2 rounded text-shadow bg-primary" type="submit" id="btnpass" name="fregister" value="Register" >
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

            $("#submit").click(function () {
                $pass = $("#pass").val();
                $confirm = $("#confirm").val();
                // Chekc độ khó password
                var pattern = /^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])/
                var checkval = pattern.test($("#pass").val());

                if (!checkval) {
                    alert("Không đúng định dạng");
                }
                else {
                    if ($pass != $confirm) {
                        alert("Có lỗi xảy ra")
                    }
                    else {
                        window.location.href = "http://localhost:8080/ProjectKy1/Code/Common/Fontend/login.php"
                    }
                }
            });
        });
        
        
    </script>
</body>
</html>
