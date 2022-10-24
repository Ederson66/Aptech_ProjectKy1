<?php

require_once '../PhpSetting/DBinfoConfig.php';

class Itemlibrary {
	public $description;
	public $flag;
	public $itemID;
	public $itemLibraryID;
	public $libraryID;

	public function addItemlibrary() {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);

		// Insert query.
		$sql = "INSERT INTO `itemlibrary`
				(
					`Description`,
					`ItemID`,
					`LibraryID`
				)
				VALUES
				(
					:description,
					:itemID,
					:libraryID
				);";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(
			":description" => $this->description,
			":itemID" => $this->itemID,
			":libraryID" => $this->libraryID));

		// Get value of the auto increment column.
		$newId = $conn->lastInsertId();
		$this->itemLibraryID = $newId;

		// Close the database connection.
		$conn = NULL;

		// Return the id.
		return $newId;
	}

	public function getListItemLibrary() {
        // chuỗi kết nối đến DB
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);
        
        // câu lệnh sql
        $sql = "SELECT * FROM `itemlibrary`;";
        
        // chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare($sql);
        
        // thực hiện
        $stmt->execute();
        
        $list = Array();
        while($row = $stmt ->fetch(PDO::FETCH_ASSOC)) {
            $s = new Itemlibrary();
            $s->description = $row["Description"];
			$s->flag = $row["Flag"];
			$s->itemID = $row["ItemID"];
			$s->itemLibraryID = $row["ItemLibraryID"];
			$s->libraryID = $row["LibraryID"];
            
            array_push($list, $s);
        }
        
        // đóng kết nối
        $conn = NULL;
        
        return $list;
    }

	public function updateItemlibrary() {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);

		// Update query.
		$sql = "UPDATE	`itemlibrary`
				SET		`Description` = :description,
						`Flag` = :flag,
						`ItemID` = :itemID,
						`LibraryID` = :libraryID
				WHERE	`ItemLibraryID` = :itemLibraryID;";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(
			":description" => $this->description,
			":flag" => $this->flag,
			":itemID" => $this->itemID,
			":itemLibraryID" => $this->itemLibraryID,
			":libraryID" => $this->libraryID));

		// Close the database connection.
		$conn = NULL;
	}

	public static function deleteItemlibrary($itemLibraryID) {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);

		// Delete query.
		$sql = "DELETE	FROM `itemlibrary`
				WHERE	`ItemLibraryID` = :itemLibraryID;";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(":itemLibraryID" => $itemLibraryID));

		// Close the database connection.
		$conn = NULL;
	}

	public static function getItemlibrary($itemLibraryID) {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);

		// Select query.
		$sql = "SELECT	`Description`,
						`Flag`,
						`ItemID`,
						`ItemLibraryID`,
						`LibraryID`
				FROM	`itemlibrary`
				WHERE	`ItemLibraryID` = :itemLibraryID;";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(":itemLibraryID" => $itemLibraryID));

		// Fetch record.
		$itemlibrary = NULL;
		if($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$itemlibrary = new Itemlibrary();
			$itemlibrary->description = $row["Description"];
			$itemlibrary->flag = $row["Flag"];
			$itemlibrary->itemID = $row["ItemID"];
			$itemlibrary->itemLibraryID = $row["ItemLibraryID"];
			$itemlibrary->libraryID = $row["LibraryID"];
		}

		// Close the database connection.
		$conn = NULL;

		return $itemlibrary;
	}

	public static function getAllRecords($pageNo, $pageSize, &$totalRecords, $sortColumn, $sortOrder) {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DBinfoConfig::getServer() . ";dbname=" . DBinfoConfig::getDBname() . ";charset=utf8";
		$conn = new PDO($dsn, DBinfoConfig::getUserName(), DBinfoConfig::getPassword(), $options);

		// Validate sort column and order.
		$defaultSortColumn = "`ItemLibraryID`";
		$sortColumns = Array("DESCRIPTION", "FLAG", "ITEMID", "ITEMLIBRARYID", "LIBRARYID");
		$sortColumn = in_array(strtoupper($sortColumn), $sortColumns) ? "`$sortColumn`" : $defaultSortColumn;
		$sortOrder = strcasecmp($sortOrder, "DESC") == 0 ? "DESC" : "ASC";

		$pageNo = (int)$pageNo;
		$pageSize = (int)$pageSize;

		$sql = "SELECT	COUNT(*) AS Count
				FROM	`itemlibrary`;";

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

		$sql = "SELECT	`Description`,
						`Flag`,
						`ItemID`,
						`ItemLibraryID`,
						`LibraryID`
				FROM	`itemlibrary`
				ORDER BY $sortColumn $sortOrder
				LIMIT $start, $pageSize;";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute();

		// Fetch all records.
		$list = Array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$itemlibrary = new Itemlibrary();
			$itemlibrary->description = $row["Description"];
			$itemlibrary->flag = $row["Flag"];
			$itemlibrary->itemID = $row["ItemID"];
			$itemlibrary->itemLibraryID = $row["ItemLibraryID"];
			$itemlibrary->libraryID = $row["LibraryID"];

			array_push($list, $itemlibrary);
		}

		// Close the database connection.
		$conn = NULL;

		return $list;
	}
}
?>