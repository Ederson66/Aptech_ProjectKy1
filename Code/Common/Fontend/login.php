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
    <!-- TOASTR CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"/>
    <!-- CSS ME -->
    <link rel="stylesheet" href="./assets/css/login.css">
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
                <div class="mb-3 pt-3">
                    <h2 class="h1 text-shadow">Login</h2>
                </div>
                <form action="./PhpSetting/Phplogin.php" method="POST" >
                    <div class="input-group d-flex flex-column mb-3">
                        <!-- <label class="text-shadow" for="">Username</label> -->
                        <input type="text" class="form-control rounded" id="username" name="fusername" placeholder="Username">
                    </div>
                    <div class="input-group d-flex flex-column mb-3">
                        <!-- <label class="text-shadow" for="">Password</label> -->
                        <input type="password" class="form-control rounded" id="password" name="fpassword" placeholder="Password">
                    </div>
                    <div class="mb-3 d-flex align-items-center justify-content-between">
                        <div>
                            <a href="#" class="btn text-dark rounded text-shadow">Reset password</a>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="text-shadow me-2" for="">Ghi nhớ</span>
                            <input type="checkbox" style="width: 12px !important;">
                        </div>
                    </div>
                    <div class="input-group d-flex justify-content-center mb-3">
                        <button type="submit" name="flogin" class="btn btn-primary text-dark rounded text-shadow bg-primary w-50">Login</button>
                    </div>
                </form>
                <div class="mb-3 d-flex justify-content-center">
                    <span class="text-shadow">No account?</span>
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
    <!-- TOASTR JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".main").height($(window).height());


        });
    </script>
</body>
</html>