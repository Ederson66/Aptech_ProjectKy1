<?php
require_once("dbInfo.php");

class Service {
	public $description;
	public $flag;
	public $price;
	public $sale;
	public $serviceID;
	public $serviceName;
	public $vAT;

	public function addService() {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
		$conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);

		// Insert query.
		$sql = "INSERT INTO `service`
				(
					`Description`,
					`Flag`,
					`Price`,
					`Sale`,
					`ServiceName`,
					`VAT`
				)
				VALUES
				(
					:description,
					:flag,
					:price,
					:sale,
					:serviceName,
					:vAT
				);";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(
			":description" => $this->description,
			":flag" => $this->flag,
			":price" => $this->price,
			":sale" => $this->sale,
			":serviceName" => $this->serviceName,
			":vAT" => $this->vAT));

		// Get value of the auto increment column.
		$newId = $conn->lastInsertId();
		$this->serviceID = $newId;

		// Close the database connection.
		$conn = NULL;

		// Return the id.
		return $newId;
	}

	public function updateService() {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
		$conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);

		// Update query.
		$sql = "UPDATE	`service`
				SET		`Description` = :description,
						`Flag` = :flag,
						`Price` = :price,
						`Sale` = :sale,
						`ServiceName` = :serviceName,
						`VAT` = :vAT
				WHERE	`ServiceID` = :serviceID;";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(
			":description" => $this->description,
			":flag" => $this->flag,
			":price" => $this->price,
			":sale" => $this->sale,
			":serviceID" => $this->serviceID,
			":serviceName" => $this->serviceName,
			":vAT" => $this->vAT));

		// Close the database connection.
		$conn = NULL;
	}

	public static function deleteService($serviceID) {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
		$conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);

		// Delete query.
		$sql = "DELETE	FROM `service`
				WHERE	`ServiceID` = :serviceID;";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(":serviceID" => $serviceID));

		// Close the database connection.
		$conn = NULL;
	}

	public static function getService($serviceID) {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
		$conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);

		// Select query.
		$sql = "SELECT	`Description`,
						`Flag`,
						`Price`,
						`Sale`,
						`ServiceID`,
						`ServiceName`,
						`VAT`
				FROM	`service`
				WHERE	`ServiceID` = :serviceID;";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute(array(":serviceID" => $serviceID));

		// Fetch record.
		$service = NULL;
		if($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$service = new Service();
			$service->description = $row["Description"];
			$service->flag = $row["Flag"];
			$service->price = $row["Price"];
			$service->sale = $row["Sale"];
			$service->serviceID = $row["ServiceID"];
			$service->serviceName = $row["ServiceName"];
			$service->vAT = $row["VAT"];
		}

		// Close the database connection.
		$conn = NULL;

		return $service;
	}

	public static function getAllRecords($pageNo, $pageSize, &$totalRecords, $sortColumn, $sortOrder) {
		// Connect to database.
		$options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
		$conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);

		// Validate sort column and order.
		$defaultSortColumn = "`ServiceID`";
		$sortColumns = Array("DESCRIPTION", "FLAG", "PRICE", "SALE", "SERVICEID", "SERVICENAME", "VAT");
		$sortColumn = in_array(strtoupper($sortColumn), $sortColumns) ? "`$sortColumn`" : $defaultSortColumn;
		$sortOrder = strcasecmp($sortOrder, "DESC") == 0 ? "DESC" : "ASC";

		$pageNo = (int)$pageNo;
		$pageSize = (int)$pageSize;

		$sql = "SELECT	COUNT(*) AS Count
				FROM	`service`;";

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
						`Price`,
						`Sale`,
						`ServiceID`,
						`ServiceName`,
						`VAT`
				FROM	`service`
				ORDER BY $sortColumn $sortOrder
				LIMIT $start, $pageSize;";

		// Prepare statement.
		$stmt = $conn->prepare($sql);

		// Execute the statement.
		$stmt->execute();

		// Fetch all records.
		$list = Array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$service = new Service();
			$service->description = $row["Description"];
			$service->flag = $row["Flag"];
			$service->price = $row["Price"];
			$service->sale = $row["Sale"];
			$service->serviceID = $row["ServiceID"];
			$service->serviceName = $row["ServiceName"];
			$service->vAT = $row["VAT"];

			array_push($list, $service);
		}

		// Close the database connection.
		$conn = NULL;

		return $list;
	}
}
?>