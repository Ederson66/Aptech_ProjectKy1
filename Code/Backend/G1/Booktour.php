<?php
require_once("dbInfo.php");

class Booktour {
	public $addressUser;
	public $bookTourID;
	public $description;
	public $emailUser;
	public $flag;
	public $numberPhoneUser;
	public $status;
	public $tourID;
	public $tourName;
	public $userBookTour;

	public function addBooktour() {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
		$conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);

		// Insert query.
		$sql = "INSERT INTO `booktour`
				(
					`AddressUser`,
					`Description`,
					`EmailUser`,
					`Flag`,
					`NumberPhoneUser`,
					`Status`,
					`TourID`,
					`TourName`,
					`UserBookTour`
				)
				VALUES
				(
					:addressUser,
					:description,
					:emailUser,
					:flag,
					:numberPhoneUser,
					:status,
					:tourID,
					:tourName,
					:userBookTour
				);";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(
			":addressUser" => $this->addressUser,
			":description" => $this->description,
			":emailUser" => $this->emailUser,
			":flag" => $this->flag,
			":numberPhoneUser" => $this->numberPhoneUser,
			":status" => $this->status,
			":tourID" => $this->tourID,
			":tourName" => $this->tourName,
			":userBookTour" => $this->userBookTour));

		// Get value of the auto increment column.
		$newId = $conn->lastInsertId();
		$this->bookTourID = $newId;

		// Close the database connection.
		$conn = NULL;

		// Return the id.
		return $newId;
	}

	public function updateBooktour() {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
		$conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);

		// Update query.
		$sql = "UPDATE	`booktour`
				SET		`AddressUser` = :addressUser,
						`Description` = :description,
						`EmailUser` = :emailUser,
						`Flag` = :flag,
						`NumberPhoneUser` = :numberPhoneUser,
						`Status` = :status,
						`TourID` = :tourID,
						`TourName` = :tourName,
						`UserBookTour` = :userBookTour
				WHERE	`BookTourID` = :bookTourID;";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(
			":addressUser" => $this->addressUser,
			":bookTourID" => $this->bookTourID,
			":description" => $this->description,
			":emailUser" => $this->emailUser,
			":flag" => $this->flag,
			":numberPhoneUser" => $this->numberPhoneUser,
			":status" => $this->status,
			":tourID" => $this->tourID,
			":tourName" => $this->tourName,
			":userBookTour" => $this->userBookTour));

		// Close the database connection.
		$conn = NULL;
	}

	public static function deleteBooktour($bookTourID) {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
		$conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);

		// Delete query.
		$sql = "DELETE	FROM `booktour`
				WHERE	`BookTourID` = :bookTourID;";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(":bookTourID" => $bookTourID));

		// Close the database connection.
		$conn = NULL;
	}

	public static function getBooktour($bookTourID) {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
		$conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);

		// Select query.
		$sql = "SELECT	`AddressUser`,
						`BookTourID`,
						`Description`,
						`EmailUser`,
						`Flag`,
						`NumberPhoneUser`,
						`Status`,
						`TourID`,
						`TourName`,
						`UserBookTour`
				FROM	`booktour`
				WHERE	`BookTourID` = :bookTourID;";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(":bookTourID" => $bookTourID));

		// Fetch record.
		$booktour = NULL;
		if($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$booktour = new Booktour();
			$booktour->addressUser = $row["AddressUser"];
			$booktour->bookTourID = $row["BookTourID"];
			$booktour->description = $row["Description"];
			$booktour->emailUser = $row["EmailUser"];
			$booktour->flag = $row["Flag"];
			$booktour->numberPhoneUser = $row["NumberPhoneUser"];
			$booktour->status = $row["Status"];
			$booktour->tourID = $row["TourID"];
			$booktour->tourName = $row["TourName"];
			$booktour->userBookTour = $row["UserBookTour"];
		}

		// Close the database connection.
		$conn = NULL;

		return $booktour;
	}

	public static function getAllRecords($pageNo, $pageSize, &$totalRecords, $sortColumn, $sortOrder) {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
		$conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);

		// Validate sort column and order.
		$defaultSortColumn = "`BookTourID`";
		$sortColumns = Array("ADDRESSUSER", "BOOKTOURID", "DESCRIPTION", "EMAILUSER", "FLAG", "NUMBERPHONEUSER", "STATUS", "TOURID", "TOURNAME", "USERBOOKTOUR");
		$sortColumn = in_array(strtoupper($sortColumn), $sortColumns) ? "`$sortColumn`" : $defaultSortColumn;
		$sortOrder = strcasecmp($sortOrder, "DESC") == 0 ? "DESC" : "ASC";

		$pageNo = (int)$pageNo;
		$pageSize = (int)$pageSize;

		$sql = "SELECT	COUNT(*) AS Count
				FROM	`booktour`;";

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

		$sql = "SELECT	`AddressUser`,
						`BookTourID`,
						`Description`,
						`EmailUser`,
						`Flag`,
						`NumberPhoneUser`,
						`Status`,
						`TourID`,
						`TourName`,
						`UserBookTour`
				FROM	`booktour`
				ORDER BY $sortColumn $sortOrder
				LIMIT $start, $pageSize;";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute();

		// Fetch all records.
		$list = Array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$booktour = new Booktour();
			$booktour->addressUser = $row["AddressUser"];
			$booktour->bookTourID = $row["BookTourID"];
			$booktour->description = $row["Description"];
			$booktour->emailUser = $row["EmailUser"];
			$booktour->flag = $row["Flag"];
			$booktour->numberPhoneUser = $row["NumberPhoneUser"];
			$booktour->status = $row["Status"];
			$booktour->tourID = $row["TourID"];
			$booktour->tourName = $row["TourName"];
			$booktour->userBookTour = $row["UserBookTour"];

			array_push($list, $booktour);
		}

		// Close the database connection.
		$conn = NULL;

		return $list;
	}
}
?>