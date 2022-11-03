<?php

require_once '../PhpSetting/DBinfoConfig.php';

class Tour {
	public $TourID;
	public $CategoryTourID;
	public $TourName;
	public $TimeStart;
	public $TimeEnd;
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
					`TimeEnd`, 
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
					:TimeEnd, 
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
			":TimeEnd" => $this->TimeEnd,
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
        $sql = "SELECT TourID, `T`.CategoryTourID, `C`.CategoryTourName, TourName ,TimeStart , TimeEnd,DATE(TimeEnd) - DATE(TimeStart) AS Day, TourPrice ,TourSale, Location, AvatarTour, `T`.Description, `T`.Flag,
				CASE
					WHEN `T`.Status = 1 THEN 'Đang hoạt động'
					WHEN `T`.Status = 2 THEN 'Dừng hoạt động'
					WHEN `T`.Status = 3 THEN 'Chưa kích hoạt'
					ELSE 'Error'
				END
				AS `Status`
				FROM `tour` `T`
				INNER JOIN `categorytour` `C` ON `T`.CategoryTourID = `C`.CategoryTourID
				WHERE `T`.Flag IS NULL;";
        
        // chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare($sql);
        
        // thực hiện
        $stmt->execute();
        
        $list = Array();
        while($row = $stmt ->fetch(PDO::FETCH_ASSOC)) {
            $s = new Tour();
            $s->TourID = $row["TourID"];
            $s->CategoryTourID = $row["CategoryTourID"];
            $s->CategoryTourName = $row["CategoryTourName"];
            $s->TourName = $row["TourName"];
            $s->Day = $row["Day"];
			$s->TimeStart = $row["TimeStart"];
			$s->TimeEnd = $row["TimeEnd"];
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
	
	// Get list tour to categorytour
	public function getListTourToCategory($CategoryTourID) {
        // chuỗi kết nối đến DB
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);
        
        // câu lệnh sql
        $sql = "SELECT TourID, CategoryTourID, TourName ,TimeStart , DATE(TimeEnd) - DATE(TimeStart) AS Day, TourPrice ,TourSale, Location, AvatarTour, Description, Flag,
				CASE
					WHEN Status = 1 THEN 'Đang hoạt động'
					WHEN Status = 2 THEN 'Dừng hoạt động'
					WHEN Status = 3 THEN 'Chưa kích hoạt'
					ELSE 'Error'
				END
				AS `Status`
				FROM `tour` WHERE CategoryTourID = $CategoryTourID";
        
        // chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare($sql);
        
        // thực hiện
        $stmt->execute();
        
        $list = Array();
        while($row = $stmt ->fetch(PDO::FETCH_ASSOC)) {
            $s = new Tour();
            $s->TourID = $row["TourID"];
            $s->CategoryTourID = $row["CategoryTourID"];
            $s->TourName = $row["TourName"];
            $s->Day = $row["Day"];
			// $s->TimeStart = $row["TimeStart"];
			// $s->TimeEnd = $row["TimeEnd"];
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

	public function getListTourById() {
        // chuỗi kết nối đến DB
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);
        
        // câu lệnh sql
        $sql = "SELECT TourID, `T`.CategoryTourID, `C`.CategoryTourName, TourName ,TimeStart , DATE(TimeEnd) - DATE(TimeStart) AS Day, TourPrice ,TourSale, Location, AvatarTour, `T`.Description, `T`.Flag,
				CASE
					WHEN `T`.Status = 1 THEN 'Đang hoạt động'
					WHEN `T`.Status = 2 THEN 'Dừng hoạt động'
					WHEN `T`.Status = 3 THEN 'Chưa kích hoạt'
					ELSE 'Error'
				END
				AS `Status`
				FROM `tour` `T`
				INNER JOIN `categorytour` `C` ON `T`.CategoryTourID = `C`.CategoryTourID
				WHERE TourID = :TourID;";
        
        // chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare($sql);

		$stmt->execute(array(":TourID" => $this->TourID));
        
        $list = Array();
        while($row = $stmt ->fetch(PDO::FETCH_ASSOC)) {
            $s = new Tour();
            $s->TourID = $row["TourID"];
            $s->CategoryTourName = $row["CategoryTourName"];
            $s->TourName = $row["TourName"];
			$s->TourPrice = $row["TourPrice"];
			$s->TourSale = $row["TourSale"];
			$s->Location = $row["Location"];
			$s->AvatarTour = $row["AvatarTour"];
            $s->Status = $row["Status"];
            $s->Description = $row["Description"];
            $s->Day = $row["Day"];
            
            array_push($list, $s);
        }
        
        // đóng kết nối
        $conn = NULL;
        
        return $list;
    }

	public function getListCategorytourName() {
        // chuỗi kết nối đến DB
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);
        
        // câu lệnh sql
        $sql = "SELECT `C`.CategoryTourName, TourID, `T`.CategoryTourID, TourName ,TimeStart , DATE(TimeEnd) - DATE(TimeStart) AS Day, TourPrice ,TourSale, Location, AvatarTour, `T`.Description, `T`.Flag,
				CASE
					WHEN `T`.Status = 1 THEN 'Đang hoạt động'
					WHEN `T`.Status = 2 THEN 'Dừng hoạt động'
					WHEN `T`.Status = 3 THEN 'Chưa kích hoạt'
					ELSE 'Error'
				END
				AS `Status`
				FROM `tour` `T`
				INNER JOIN `categorytour` `C` ON `T`.CategoryTourID = `C`.CategoryTourID
				WHERE `C`.CategoryTourID = 2;";
        
        // chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare($sql);
        
        // thực hiện
        $stmt->execute();
        
        $list = Array();
        while($row = $stmt ->fetch(PDO::FETCH_ASSOC)) {
            $s = new Tour();
            $s->TourID = $row["TourID"];
            $s->CategoryTourID = $row["CategoryTourID"];
            $s->CategoryTourName = $row["CategoryTourName"];
            $s->TourName = $row["TourName"];
            $s->Day = $row["Day"];
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

	// function delete
	public function updateListTour() {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);

		// Update query.
		$sql = "UPDATE	`tour` SET `Flag` = :Flag WHERE `TourID` = :TourID;";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(
			":TourID" => $this->TourID,
			":Flag" => $this->Flag));

		// Close the database connection.
		$conn = NULL;
	}

	public function updateTour() {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);

		// Update query.
		$sql = "UPDATE	`tour`
				SET		`Description` = :Description,
						`Location` = :Location,
						`TimeEnd` = :TimeEnd,
						`TimeStart` = :TimeStart,
						`TourName` = :TourName,
						`TourPrice` = :TourPrice,
						`TourSale` = :TourSale
				WHERE	`TourID` = :TourID;";


		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(
			":TourID" => $this->TourID,
			":TourName" => $this->TourName,
			":TimeStart" => $this->TimeStart,
			":TimeEnd" => $this->TimeEnd,
			":TourPrice" => $this->TourPrice,
			":TourSale" => $this->TourSale,
			":Location" => $this->Location,
			":Description" => $this->Description));

		// Close the database connection.
		$conn = NULL;
	}
}
?>
