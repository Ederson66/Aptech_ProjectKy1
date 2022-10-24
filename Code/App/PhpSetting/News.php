<?php

require_once '../PhpSetting/DBinfoConfig.php';

class News {
	public $NewsID;
	public $CategoryID;
	public $Title;
	public $Content;
	public $AvatarNews;
	public $Author;
	public $Description;
	public $Flag;

	public function addNews() {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);

		// Insert query.
		$sql = "INSERT INTO `news` 
				(
					`CategoryID`, 
					`Title`,
					`Content`, 
					`AvatarNews`, 
					`Author`, 
					`Description`
				) 
				VALUES 
				(
					:CategoryID, 
					:Title, 
					:Content, 
					:AvatarNews, 
					:Author, 
					:Description
				);";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(
			":CategoryID" => $this->CategoryID,
			":Title" => $this->Title,
			":Content" => $this->Content,
			":AvatarNews" => $this->AvatarNews,
			":Author" => $this->Author,
			":Description" => $this->Description));

		// Get value of the auto increment column.
		$newId = $conn->lastInsertId();
		$this->serviceID = $newId;

		// Close the database connection.
		$conn = NULL;

		// Return the id.
		return $newId;
	}

	public function getListNews() {
        // chuỗi kết nối đến DB
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);
        
        // câu lệnh sql
        $sql = "SELECT * FROM `news`;";
        
        // chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare($sql);
        
        // thực hiện
        $stmt->execute();
        
        $list = Array();
        while($row = $stmt ->fetch(PDO::FETCH_ASSOC)) {
            $s = new Tour();
            $s->NewsID = $row["NewsID"];
            $s->CategoryID = $row["CategoryID"];
			$s->Title = $row["Title"];
			$s->Content = $row["Content"];
			$s->AvatarNews = $row["AvatarNews"];
			$s->Author = $row["Author"];
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