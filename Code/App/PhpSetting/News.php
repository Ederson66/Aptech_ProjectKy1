<?php

require_once '../PhpSetting/DBinfoConfig.php';

class News {
	public $author;
	public $avatarNews;
	public $categoryID;
	public $content;
	public $description;
	public $flag;
	public $leadcontent;
	public $newsID;
	public $title;

	public function addNews() {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);

		// Insert query.
		$sql = "INSERT INTO `news`
				(
					`author`,
					`avatarNews`,
					`categoryID`,
					`content`,
					`description`,
					`flag`,
					`leadcontent`,
					`newsID`,
					`title`
				)
				VALUES
				(
					:author,
					:avatarNews,
					:categoryID,
					:content,
					:description,
					:flag,
					:leadcontent,
					:newsID,
					:title
				);";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(
			":author" => $this->author,
			":avatarNews" => $this->avatarNews,
			":categoryID" => $this->categoryID,
			":content" => $this->content,
			":description" => $this->description,
			":flag" => $this->flag,
			":leadcontent" => $this->leadcontent,
			":newsID" => $this->newsID,
			":title" => $this->title));

		// Get value of the auto increment column.
		$newId = $conn->lastInsertId();
		$this->newsID = $newId;

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
        $sql = "SELECT * FROM `news` WHERE Flag IS NULL;";
        
        // chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare($sql);
        
        // thực hiện
        $stmt->execute();
        
        $list = Array();
        while($row = $stmt ->fetch(PDO::FETCH_ASSOC)) {
            $s = new News();
            $s->author = $row["Author"];
            $s->avatarNews = $row["AvatarNews"];
			$s->categoryID = $row["CategoryID"];
			$s->content = $row["Content"];
			$s->description = $row["Description"];
			$s->flag = $row["Flag"];
			$s->leadcontent = $row["LeadContent"];
			$s->newsID = $row["NewsID"];
			$s->title = $row["Title"];
            
            array_push($list, $s);
        }
        
        // đóng kết nối
        $conn = NULL;
        
        return $list;
    }

	// function delete
	public function updateListNews() {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);

		// Update query.
		$sql = "UPDATE `news` SET `Flag` = :Flag WHERE `NewsID` = :NewsID;";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(
			":NewsID" => $this->newsID,
			":Flag" => $this->flag
		));

		// Close the database connection.
		$conn = NULL;
	}

	// function edit
	public function updateNews() {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);

		// Update query.
		$sql = "UPDATE	`news`
				SET		`Author` = :author,
						`Description` = :description,
						`LeadContent` = :leadcontent,
						`Title` = :title
				WHERE	`NewsID` = :newsID;";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(
			":author" => $this->author,
			":description" => $this->description,
			":leadcontent" => $this->leadcontent,
			":newsID" => $this->newsID,
			":title" => $this->title));

		// Close the database connection.
		$conn = NULL;
	}
}
?>