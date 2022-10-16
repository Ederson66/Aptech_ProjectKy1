<?php

require_once './PhpSetting/DBinfoConfig.php';
require_once './PhpSetting/Common.php';

class User {

    // Khai báo các trường trong bảng
    public $UserID;
    public $Username;
    public $Password;
    public $Role;
    public $Fisrtname;
    public $Middlename;
    public $Lastname;
    public $Birthday;
    public $Sex;
    public $Telephone;
    public $Email;
    public $Status;
    public $Flag;

    public function register() {
        // chuỗi kết nối đến DB
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
        $conn = new PDO($dsn, DBinfoConfig::getUsername(), DBinfoConfig::getPassword(), $options);

        // Kiểm tra username hoặc email có bị trùng hay không
        $sql = "SELECT * FROM User WHERE Username = :Username OR Email = :Email";

        // Thực thi câu truy vấn
        $stmt = $conn->prepare($sql);
        //Thực hiện câu lệnh
        $stmt->execute(array(":Username" => $this->Username, ":Email" => $this->Email));
        $list = Array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $s = new User();
            $s->Username = $row["Username"];
            $s->Email = $row["Email"];
            array_push($list, $s);
        }
        // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
        if (count($list) == 0) {
            $sql = "INSERT INTO  `User`(Username, Password, Fisrtname, Middlename, Lastname, Birthday, Sex, Telephone, Email) 
                    VALUES ( :Username, :Password, :Fisrtname, :Middlename, :Lastname, :Birthday, :Sex, :Telephone, :Email);";
            $stmt = $conn->prepare($sql);
//         thực hiện
            $stmt->execute(array(":Username" => $this->Username, ":Password" => $this->Password,
                ":Fisrtname" => $this->Fisrtname, ":Middlename" => $this->Middlename,
                ":Lastname" => $this->Lastname, ":Birthday" => $this->Birthday,
                ":Sex" => $this->Sex, ":Telephone" => $this->Telephone,
                ":Email" => $this->Email
            ));
            echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="login.php";</script>';
        } else {
            echo '<script language="javascript">alert("Email hoặc Username này đã tồn tại!"); window.location="register.php";</script>';
            exit();
        }

        // đóng kết nối
        $conn = NULL;
    }

    public function login() {
        // chuỗi kết nối đến DB
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
        $conn = new PDO($dsn, DBinfoConfig::getUsername(), DBinfoConfig::getPassword(), $options);

        // câu lệnh sql
        $sql = "SELECT * FROM `User` WHERE Username = :Username AND Password = :Password;";

        // chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare($sql);

        // thực hiện
        $stmt->execute(array(":Username" => $this->Username, ":Password" => $this->Password));

        $list = Array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $s = new User();
            $s->Username = $row["Username"];
            $s->Password = $row["Password"];

            array_push($list, $s);
        }

        // đóng kết nối
        $conn = NULL;

        return $list;
    }

    // logout
    public function Logout() {
        // xóa ss khi tạo ở login
        session_destroy();
//        unset($_SESSION["Username"]);
    }

    public function GetUserByUsername() {
        // chuỗi kết nối đến DB
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
        $conn = new PDO($dsn, DBinfoConfig::getUsername(), DBinfoConfig::getPassword(), $options);

        // câu lệnh sql
        $sql = "SELECT * FROM `User` WHERE Username = :Username;";

        // chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare($sql);

        // thực hiện
        $stmt->execute(array(":Username" => $this->Username));

        $list = Array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $s = new User();
            $s->Username = $row["Username"];
            $s->Lastname = $row["Lastname"];
            $s->Middlename = $row["Middlename"];
            $s->Fisrtname = $row["Fisrtname"];

            array_push($list, $s);
        }

        // đóng kết nối
        $conn = NULL;

        return $list;
    }

}
?>

