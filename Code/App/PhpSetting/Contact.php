<?php

require_once '../PhpSetting/DBinfoConfig.php';

class Contact {
	public $contactID;
	public $MemberID;
	public $fullname;
	public $address;
	public $email;
	public $telephone;
	public $message;
	public $description;
	public $flag;

	public function getListContact() {
		// chuỗi kết nối đến DB
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);
        
        // câu lệnh sql
        $sql = "SELECT * FROM `contact`;";
        
        // chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare($sql);
        
        // thực hiện
        $stmt->execute();
        
        $list = Array();
        while($row = $stmt ->fetch(PDO::FETCH_ASSOC)) {
            $s = new Category();
            $s->contactID = $row["contactID"];
            $s->MemberID = $row["MemberID"];
			$s->fullname = $row["fullname"];
			$s->address = $row["address"];
			$s->email = $row["email"];
			$s->telephone = $row["telephone"];
			$s->message = $row["message"];
			$s->description = $row["description"];
			$s->flag = $row["flag"];
            
            array_push($list, $s);
        }
        
        // đóng kết nối
        $conn = NULL;
        
        return $list;
	}
}

?>