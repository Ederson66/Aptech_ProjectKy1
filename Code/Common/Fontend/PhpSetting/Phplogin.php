<?php

require_once './DBinfoConfig.php';

function redirect($url, $statusCode = 303) {
    header('Location:' . $url, true, $statusCode);
    die();
}

// chuỗi kết nối đến DB
$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
$conn = new PDO($dsn, DBinfoConfig::getUsername(), DBinfoConfig::getPassword(), $options);

//câu lệnh query 
$sql = "SELECT * FROM `User` WHERE Username = :Username AND Password = :Password;";

// chuẩn bị câu lệnh SQL
$stmt = $conn->prepare($sql);

// thực hiện
$stmt->execute(['Username' => $_POST["fusername"], 'Password' => $_POST["fpassword"]]);

//    chưa dữ liệu tạm thời
$result = $stmt;

if (isset($_POST["fusername"]) && isset($_POST["fpassword"])) {
    $username = $_POST["fusername"];
    $password = $_POST["fpassword"];

    $enableLogin = false;

    foreach ($result as $item) {
        if ($username == $item['Username'] && $password == $item['Password']) {
            $enableLogin = true;
        }
        if ($enableLogin) {
            redirect("http://localhost:8080/ProjectKy1/home.php");
        }
    }
    echo 'Faild';
}

//  đóng ket noi
$conn = null;
?>

