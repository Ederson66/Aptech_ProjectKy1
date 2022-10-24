<?php

require_once '../PhpSetting/DBinfoConfig.php';

class Category {
	public $CategoryID;
	public $CategoryName;
	public $ParentID;
	public $Description;
	public $Flag;

	public function addCategory() {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);

		// Insert query.
		$sql = "INSERT INTO `category` 
				(
					`CategoryName`, 
					`ParentID`,
					`Description`
				) 
				VALUES 
				(
					:CategoryName, 
					:ParentID, 
					:Description
				);";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(
			":CategoryName" => $this->CategoryName,
			":ParentID" => $this->ParentID,
			":Description" => $this->Description));

		// Get value of the auto increment column.
		$newId = $conn->lastInsertId();
		$this->serviceID = $newId;

		// Close the database connection.
		$conn = NULL;

		// Return the id.
		return $newId;
	}

	public function getListCategory() {
        // chuỗi kết nối đến DB
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);
        
        // câu lệnh sql
        $sql = "SELECT * FROM `category`;";
        
        // chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare($sql);
        
        // thực hiện
        $stmt->execute();
        
        $list = Array();
        while($row = $stmt ->fetch(PDO::FETCH_ASSOC)) {
            $s = new Category();
            $s->CategoryID = $row["CategoryID"];
            $s->CategoryName = $row["CategoryName"];
			$s->ParentID = $row["ParentID"];
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