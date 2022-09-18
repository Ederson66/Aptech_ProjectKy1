<?php

require_once './PhpSetting/User.php';
require_once './PhpSetting/Common.php';

if (!empty($_POST["flogin"])) {
    
    if (isset($_POST["fusername"]) && isset($_POST["fpassword"])) {
        $username = $_POST["fusername"];
        $password = $_POST["fpassword"];
        
        
        $a = new User();
        $a->Username=$username;
        $a->Password=$password;
        $arr = $a->login();
        
        if(count($arr) > 0) {
            // sử dụng ss
            session_start();
            // tạo ra ss
            $_SESSION["Username"] = $username;
            redirect("/Projectky1/admin.php");
            
        } else {
            echo '<script>alert("Login Faild !" + "\n" + "Kiểm tra lại username & password")</script>';
        }
    }
    
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
        <!--favicon-->
        <link rel="icon" type="image/x-icon" href="./assets/image/favicon.png">
        <title>Login</title>
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
                
                <div class="me-5 ms-5 mb-5 mt-4" style="width: 500px;">
                    <div class="mb-4 pt-3">
                        <h2 class="h1 text-shadow text-white">Login</h2>
                    </div>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
                        <div class="input-group d-flex flex-column pt-2 mb-3 position-relative">
                            <input type="text" class="form-control rounded" id="username" name="fusername" required>
                            <label class="text-shadow text-white">Username</label>
                        </div>
                        <div class="input-group d-flex flex-column pt-2 mb-3 position-relative">
                            <input type="password" class="form-control rounded" id="password" name="fpassword" required>
                            <label class="text-shadow text-white">Password</label>
                        </div>
                        <div class="mb-3 d-flex align-items-center justify-content-between">
                            <div>
                                <a href="#" class="text-white rounded text-shadow">Reset password</a>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="text-shadow me-2 text-white">Remember</span>
                                <input type="checkbox" style="width: 16px !important; height: 16px; margin-top: 5px;">
                            </div>
                        </div>
                        <div class="input-group d-flex justify-content-center mb-3">
                            <input class="p-2 rounded text-shadow bg-primary w-50" type="submit" id="btnpass" name="flogin" value="Login" >
                        </div>
                    </form>
                    <div class="mb-3 d-flex justify-content-center">
                        <span class="text-shadow text-white">No account?</span>
                        <a href="register.php" class=" text-shadow">Register</a>
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
            // xét chiều cao tự đọng theo màn hình
            $(document).ready(function () {
                $(".main").height($(window).height());
            });
        </script>
    </body>
</html>
