<?php

require_once '../PhpSetting/DBinfoConfig.php';

class Booktour {
	public $BookTourID;
	public $TourID;
	public $MemberID;
	public $AnonymousBookTour;
	public $AnonymousEmail;
	public $AnonymousAddress;
	public $AnonymousPhone;
	public $Status;
	public $Description;
	public $Flag;

	public function getListBooktour() {
        // chuỗi kết nối đến DB
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);
        
        // câu lệnh sql
        $sql = "SELECT * FROM `booktour`;";
        
        // chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare($sql);
        
        // thực hiện
        $stmt->execute();
        
        $list = Array();
        while($row = $stmt ->fetch(PDO::FETCH_ASSOC)) {
            $s = new Booktour();
            $s->BookTourID = $row["BookTourID"];
            $s->TourID = $row["TourID"];
			$s->MemberID = $row["MemberID"];
			$s->AnonymousBookTour = $row["AnonymousBookTour"];
			$s->AnonymousEmail = $row["AnonymousEmail"];
			$s->AnonymousAddress = $row["AnonymousAddress"];
			$s->AnonymousPhone = $row["AnonymousPhone"];
			$s->Status = $row["Status"];
			$s->Description = $row["Description"];
			$s->Flag = $row["Flag"];
            
            array_push($list, $s);
        }
        
        // đóng kết nối
        $conn = NULL;
        
        return $list;
    }
}
?>