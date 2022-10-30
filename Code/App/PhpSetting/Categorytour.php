<?php

require_once '../PhpSetting/DBinfoConfig.php';

class CategoryTour {
	public $CategoryTourID;
	public $CategoryTourName;
	public $Status;
	public $Description;
	public $Flag;

	public function addCategoryTour() {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);

		// Insert query.
		$sql = "INSERT INTO `categorytour` 
				(
					`CategoryTourName`, 
					`Status`,
					`Description`
				) 
				VALUES 
				(
					:CategoryTourName, 
					:Status, 
					:Description
				);";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(
			":CategoryTourName" => $this->CategoryTourName,
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

	public function getListCategoryTour() {
        // chuỗi kết nối đến DB
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);
        
        // câu lệnh sql
        $sql = "SELECT CategoryTourID, CategoryTourName, Description, Flag,
				CASE
					WHEN Status = 1 THEN 'Đang hoạt động'
					WHEN Status = 2 THEN 'Dừng hoạt động'
					WHEN Status = 3 THEN 'Chưa kích hoạt'
					ELSE 'Error'
				END
				AS `Status`
				FROM `categorytour`;";
        
        // chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare($sql);
        
        // thực hiện
        $stmt->execute();
        
        $list = Array();
        while($row = $stmt ->fetch(PDO::FETCH_ASSOC)) {
            $s = new CategoryTour();
            $s->CategoryTourID = $row["CategoryTourID"];
            $s->CategoryTourName = $row["CategoryTourName"];
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