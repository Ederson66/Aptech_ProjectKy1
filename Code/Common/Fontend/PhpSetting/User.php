<?php

require_once './PhpSetting/DBinfoConfig.php';

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
        // function redirect
        function redirect($url, $statusCode = 303) {
            header('Location:' . $url, true, $statusCode);
            die();
        }   
        
        // chuỗi kết nối đến DB
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
        $conn = new PDO($dsn, DBinfoConfig::getUsername(), DBinfoConfig::getPassword(), $options);
        
        // câu lệnh sql
        $sql = "INSERT INTO  `User`(Username, Password, Fisrtname, Middlename, Lastname, Birthday, Sex, Telephone, Email) 
                VALUES ( :Username, :Password, :Fisrtname, :Middlename, :Lastname, :Birthday, :Sex, :Telephone, :Email);";
        
        // chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare($sql);
        
        // thực hiện
        $stmt->execute(array(":Username" => $this->Username, ":Password" => $this->Password,
                            ":Fisrtname" => $this->Fisrtname, ":Middlename" => $this->Middlename,
                            ":Lastname" => $this->Lastname, ":Birthday" => $this->Birthday,
                            ":Sex" => $this->Sex, ":Telephone" => $this->Telephone,
                            ":Email" => $this->Email
                    ));
        
        // check nêu tạo thành công nhảy vào trang login
        $enableLogin = false;
        if($sql) {
            $enableLogin = true;
        }
        if($enableLogin) {
            redirect("/ProjectKy1/login.php");
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
        $stmt->execute(['Username' => $_POST["fusername"], 'Password' => $_POST["fpassword"]]);
        
        $list = Array();
        while($row = $stmt ->fetch(PDO::FETCH_ASSOC)) {
            $s = new User();
            $s ->Username = $row["Username"];
            $s ->Password = $row["Password"];
            
            array_push($list, $s);
        }
        
        // đóng kết nối
        $conn = NULL;
        
        return $list;
    }
    
    // logout
    public function Logout() {
        // xóa ss khi tạo ở login
        unset($_SESSION["Username"]);
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
        while($row = $stmt ->fetch(PDO::FETCH_ASSOC)) {
            $s = new User();
            $s ->Username = $row["Username"];
            $s ->Lastname = $row["Lastname"];
            $s ->Middlename = $row["Middlename"];
            $s ->Fisrtname = $row["Fisrtname"];
            
            array_push($list, $s);
        }
        
        // đóng kết nối
        $conn = NULL;
        
        return $list;
    }
}
?>

