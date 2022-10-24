<?php

require_once '../PhpSetting/DBinfoConfig.php';

class Tour {
	public $TourID;
	public $CategoryTourID;
	public $TourName;
	public $TimeStart;
	public $TimeLimit;
	public $TourPrice;
	public $TourSale;
	public $Location;
	public $AvatarTour;
	public $Status;
	public $Description;
	public $Flag;

	public function addTour() {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);

		// Insert query.
		$sql = "INSERT INTO `tour` 
				(
					`CategoryTourID`, 
					`TourName`, 
					`TimeStart`, 
					`TimeLimit`, 
					`TourPrice`, 
					`TourSale`, 
					`Location`, 
					`AvatarTour`, 
					`Status`, 
					`Description`
				) 
				VALUES 
				(
					:CategoryTourID, 
					:TourName, 
					:TimeStart, 
					:TimeLimit, 
					:TourPrice, 
					:TourSale, 
					:Location, 
					:AvatarTour, 
					:Status, 
					:Description
				);";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(
			":CategoryTourID" => $this->CategoryTourID,
			":TourName" => $this->TourName,
			":TimeStart" => $this->TimeStart,
			":TimeLimit" => $this->TimeLimit,
			":TourPrice" => $this->TourPrice,
			":TourSale" => $this->TourSale,
			":Location" => $this->Location,
			":AvatarTour" => $this->AvatarTour,
			":Status" => $this->Status,
			":Description" => $this->Description));

		// Get value of the auto increment column.
		$newId = $conn->lastInsertId();
		$this->serviceID = $newId;

		// Close the database connection.
		$conn = NULL;

		// Return the id.
		return $newId;
	}

	public function getListTour() {
        // chuỗi kết nối đến DB
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);
        
        // câu lệnh sql
        $sql = "SELECT * FROM `tour`;";
        
        // chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare($sql);
        
        // thực hiện
        $stmt->execute();
        
        $list = Array();
        while($row = $stmt ->fetch(PDO::FETCH_ASSOC)) {
            $s = new Tour();
            $s->CategoryTourID = $row["CategoryTourID"];
            $s->TourName = $row["TourName"];
			$s->TimeStart = $row["TimeStart"];
			$s->TimeLimit = $row["TimeLimit"];
			$s->TourPrice = $row["TourPrice"];
			$s->TourSale = $row["TourSale"];
			$s->Location = $row["Location"];
			$s->AvatarTour = $row["AvatarTour"];
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