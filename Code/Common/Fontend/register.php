<?php
require_once './PhpSetting/User.php';
require_once './PhpSetting/Common.php';

    $fusername = $_POST['fusername'];
    if (strlen($fusername) < 8) {
        redirect("./register.php");
        exit;
    }
    // validate trên server
    $fpassword = $_POST['fpassword'];
    $fconfirmpass = $_POST['fconfirmpass'];

    if (strlen($fpassword) < 8) {
        redirect("./register.php");
        exit;
    } else if (strcmp($fpassword, $fconfirmpass) !== 0) {
        redirect("./register.php");
        exit;
    }

    // Dùng isset để kiểm tra Form
    if (isset($_POST['dangky'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['numberphone']);

        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($email)) {
            array_push($errors, "Email is required");
        }
        if (empty($phone)) {
            array_push($errors, "Password is required");
        }
        if (empty($password)) {
            array_push($errors, "Two password do not match");
        }

// Kiểm tra username hoặc email có bị trùng hay không
        $sql = "SELECT * FROM member WHERE username = '$username' OR email = '$email'";

// Thực thi câu truy vấn
        $result = mysqli_query($conn, $sql);

// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
        if (mysqli_num_rows($result) > 0) {
            echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="Signup.php";</script>';
        }
// Dừng chương trình
        die();
    } else {
        $sql = "INSERT INTO member (username, password, email,numberphone) VALUES ('$username','$password','$email','$phone')";
        echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="Login1.php";</script>';
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
        <!-- BOOTSTRAP 5.0.2 CSS -->
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <!-- BOOTSTRAP ICON -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <!-- CSS ME -->
        <link rel="stylesheet" href="./assets/css/log.reg.css">
        <!--favicon-->
        <link rel="icon" type="image/x-icon" href="./assets/image/favicon.png">
        <title>Register</title>
    </head>
    <body>
        <!--BEGIN App -->
        <div class="app">
            <!--BEGIN Main -->
            <div class="main">
                <div class="m-5">
                    <div class="mb-4">
                        <h2 class="h1 text-shadow text-white">Register</h2>
                    </div>
                    <form id="formReg" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
                        <div class="input-group d-flex flex-column mb-3 pt-2 position-relative">
                            <input type="text" class="form-control rounded" id="username" name="fusername" required>
                            <label class="text-shadow text-white" for="">Username</label>
                            <span id="MessageUser"></span>
                        </div>
                        <div class="input-group d-flex flex-column mb-3 pt-2 position-relative">
                            <input type="password" class="form-control rounded" id="password" name="fpassword" required>
                            <label class="text-shadow text-white" for="">Password</label>
                            <span id="MessagePass"></span>
                        </div>
                        <div class="input-group d-flex flex-column mb-3 pt-2 position-relative">
                            <input type="password" class="form-control rounded" name="fconfirmpass" id="confirm" required>
                            <label class="text-shadow text-white" for="">Confirm password</label>
                            <span id="MessageConfirm"></span>
                        </div>
                        <div class="input-group mb-3">
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
                                <div class="pe-2 w-50">
                                    <input type="date" class="form-control text-shadow rounded text-white" name="fbirthday" title="Brithday" required>
                                </div>
                                <div class="ps-2 position-relative w-50">
                                    <select name="fsex" class="form-select text-shadow text-white">
                                        <option selected>Sex</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>                      
                        </div>
                        <div class="input-group mb-3 pt-2 position-relative">
                            <input type="text" class="form-control rounded" name="fphonenumber" id="phonenumber" required>
                            <label class="text-shadow text-white" for="">Phone Number</label>
                            <span id="MessageNumber"></span>
                        </div>
                        <div class="input-group mb-3 pt-2 position-relative">
                            <input type="text" class="form-control rounded" name="femail" id="email" required>
                            <label class="text-shadow text-white" for="">Email</label>
                            <span id="MessageMail"></span>
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
        <!-- validate sau code cái gì note vào -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script> -->
        <!-- JS ME -->
        <script src="./assets/js/log.reg.js"></script>

    </body>

</html>
