<?php

require_once './PhpSetting/User.php';
require_once './PhpSetting/Common.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Reset CSS -->
        <link rel="stylesheet" href="./assets/css/reset.min.css">
        <!-- BOOTSTRAP 5.0.2 CSS -->
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <!-- BOOTSTRAP ICON -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <!-- CSS ME -->
        <link rel="stylesheet" href="./assets/css/log.reg.css">
        <!--favicon-->
        <link rel="icon" type="image/x-icon" href="./assets/image/favicon.png">
        <title>Login</title>
    </head>
    <body>
        <!--BEGIN App -->
        <div class="app">

            <!--BEGIN Main -->
            <div class="main">
                
                <div class="m-5" style="width: 500px;">
                    <div class="mb-4 d-flex justify-content-between">
                        <h2 class="h1 text-shadow text-white">Login</h2>
                        <h2 class="h1 text-shadow text-white">
                            <a onclick="alert('You will still go to the homepage but anonymously !!!')" href="index.php">Home</a>
                        </h2>
                    </div>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
                        <div class="input-group d-flex flex-column pt-2 mb-3 position-relative">
                            <input type="text" class="form-control rounded" id="logusername" name="fusername" required>
                            <label class="text-shadow text-white">Username</label>
                        </div>
                        <div class="input-group d-flex flex-column pt-2 mb-3 position-relative">
                            <input type="password" class="form-control rounded" id="logpassword" name="fpassword" required>
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

        </div>
        <!--END App -->

        <!-- JQUERY 3.6.1 -->
        <script src="./assets/js/jquery.min.js"></script>
        <!-- JS BOOTSTRAP -->
        <script src="./assets/js/bootstrap.bundle.min.js"></script>
        <!-- JS ME -->
        <script src="./assets/js/log.reg.js"></script>
    </body>
</html>
