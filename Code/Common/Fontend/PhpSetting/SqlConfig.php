<?php

require_once './PhpSetting/DBinfoConfig.php';

class SQLConfig {
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
    
    // function redirect
    function redirect($url, $statusCode = 303) {
        header('Location:' . $url, true, $statusCode);
        die();
    }

    public function register() {
        // chuỗi kết nối đến DB
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
        $conn = new PDO($dsn, DBinfoConfig::getUsername(), DBinfoConfig::getPassword(), $options);
        
        // câu lệnh sql
        $sql = "INSERT INTO  `User`(Username, Password, Fisrtname, Middlename, Lastname, Birthday, Sex, Telephone, Email) 
                VALUES ( :Username, :Username, :Fisrtname, :Middlename, :Lastname, :Birthday, :Sex, :Telephone, :Email);";
        
        // chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare($sql);
        
        // thực hiện
        $stmt->execute(array(
            ":Username" => $this->Username,
            ":Password" => $this->Password,
            ":Fisrtname" => $this->Fisrtname,
            ":Middlename" => $this->Middlename,
            ":Lastname" => $this->Lastname,
            ":Birthday" => $this->Birthday,
            ":Sex" => $this->Sex,
            ":Telephone" => $this->Telephone,
            ":Email" => $this->Email
            ));
        
        // đóng kết nối
        $conn = NULL;
    }
}
?>

