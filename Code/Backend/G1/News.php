<?php
require_once("dbInfo.php");

class News {
	public $author;
	public $avatarNews;
	public $content;
	public $description;
	public $flag;
	public $newsID;
	public $title;

	public function addNews() {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
		$conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);

		// Insert query.
		$sql = "INSERT INTO `news`
				(
					`Author`,
					`AvatarNews`,
					`Content`,
					`Description`,
					`Flag`,
					`Title`
				)
				VALUES
				(
					:author,
					:avatarNews,
					:content,
					:description,
					:flag,
					:title
				);";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(
			":author" => $this->author,
			":avatarNews" => $this->avatarNews,
			":content" => $this->content,
			":description" => $this->description,
			":flag" => $this->flag,
			":title" => $this->title));

		// Get value of the auto increment column.
		$newId = $conn->lastInsertId();
		$this->newsID = $newId;

		// Close the database connection.
		$conn = NULL;

		// Return the id.
		return $newId;
	}

	public function updateNews() {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
		$conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);

		// Update query.
		$sql = "UPDATE	`news`
				SET		`Author` = :author,
						`AvatarNews` = :avatarNews,
						`Content` = :content,
						`Description` = :description,
						`Flag` = :flag,
						`Title` = :title
				WHERE	`NewsID` = :newsID;";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(
			":author" => $this->author,
			":avatarNews" => $this->avatarNews,
			":content" => $this->content,
			":description" => $this->description,
			":flag" => $this->flag,
			":newsID" => $this->newsID,
			":title" => $this->title));

		// Close the database connection.
		$conn = NULL;
	}

	public static function deleteNews($newsID) {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
		$conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);

		// Delete query.
		$sql = "DELETE	FROM `news`
				WHERE	`NewsID` = :newsID;";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(":newsID" => $newsID));

		// Close the database connection.
		$conn = NULL;
	}

	public static function getNews($newsID) {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
		$conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);

		// Select query.
		$sql = "SELECT	`Author`,
						`AvatarNews`,
						`Content`,
						`Description`,
						`Flag`,
						`NewsID`,
						`Title`
				FROM	`news`
				WHERE	`NewsID` = :newsID;";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(":newsID" => $newsID));

		// Fetch record.
		$news = NULL;
		if($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$news = new News();
			$news->author = $row["Author"];
			$news->avatarNews = $row["AvatarNews"];
			$news->content = $row["Content"];
			$news->description = $row["Description"];
			$news->flag = $row["Flag"];
			$news->newsID = $row["NewsID"];
			$news->title = $row["Title"];
		}

		// Close the database connection.
		$conn = NULL;

		return $news;
	}

	public static function getAllRecords($pageNo, $pageSize, &$totalRecords, $sortColumn, $sortOrder) {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
		$conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);

		// Validate sort column and order.
		$defaultSortColumn = "`NewsID`";
		$sortColumns = Array("AUTHOR", "AVATARNEWS", "CONTENT", "DESCRIPTION", "FLAG", "NEWSID", "TITLE");
		$sortColumn = in_array(strtoupper($sortColumn), $sortColumns) ? "`$sortColumn`" : $defaultSortColumn;
		$sortOrder = strcasecmp($sortOrder, "DESC") == 0 ? "DESC" : "ASC";

		$pageNo = (int)$pageNo;
		$pageSize = (int)$pageSize;

		$sql = "SELECT	COUNT(*) AS Count
				FROM	`news`;";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute();

		// Get total records count.
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$totalRecords = $row['Count'];
		$stmt = NULL;

		$totalPages = ceil($totalRecords / $pageSize);
		if ($pageNo > $totalPages) {
			$pageNo = $totalPages;
		}

		$start = $pageSize * $pageNo - $pageSize;
		if($start < 0) {
			$start = 0;
		}

		$sql = "SELECT	`Author`,
						`AvatarNews`,
						`Content`,
						`Description`,
						`Flag`,
						`NewsID`,
						`Title`
				FROM	`news`
				ORDER BY $sortColumn $sortOrder
				LIMIT $start, $pageSize;";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute();

		// Fetch all records.
		$list = Array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$news = new News();
			$news->author = $row["Author"];
			$news->avatarNews = $row["AvatarNews"];
			$news->content = $row["Content"];
			$news->description = $row["Description"];
			$news->flag = $row["Flag"];
			$news->newsID = $row["NewsID"];
			$news->title = $row["Title"];

			array_push($list, $news);
		}

		// Close the database connection.
		$conn = NULL;

		return $list;
	}
}
?>