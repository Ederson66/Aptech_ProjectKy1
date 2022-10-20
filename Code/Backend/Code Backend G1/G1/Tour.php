<?php
	require_once("dbInfo.php");

	function addTour($avatarTour, $categoryTourID, $description, $flag, $location, $status, $timeLimit, $timeStart, $tourName, $tourPrice, $tourSale) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		$avatarTour = mysql_real_escape_string($avatarTour);
		$description = mysql_real_escape_string($description);
		$flag = mysql_real_escape_string($flag);
		$location = mysql_real_escape_string($location);
		$status = mysql_real_escape_string($status);
		$timeLimit = mysql_real_escape_string($timeLimit);
		$timeStart = mysql_real_escape_string($timeStart);
		$tourName = mysql_real_escape_string($tourName);

		// Validate values of numeric columns.
		$categoryTourID = is_numeric($categoryTourID) ? $categoryTourID : 0;
		$tourPrice = is_numeric($tourPrice) ? $tourPrice : 0;

		// Validate values of nullable numeric columns.
		$tourSale = is_numeric($tourSale) || $tourSale == NULL ? $tourSale : 0;

		// Handle nullable columns.
		$description = ($description == NULL ? "NULL" : "'$description'");
		$flag = ($flag == NULL ? "NULL" : "'$flag'");
		$tourSale = ($tourSale == NULL ? "NULL" : "$tourSale");

		$sql = "INSERT INTO `tour`
				(
					`AvatarTour`,
					`CategoryTourID`,
					`Description`,
					`Flag`,
					`Location`,
					`Status`,
					`TimeLimit`,
					`TimeStart`,
					`TourName`,
					`TourPrice`,
					`TourSale`
				)
				VALUES
				(
					'$avatarTour',
					$categoryTourID,
					$description,
					$flag,
					'$location',
					'$status',
					'$timeLimit',
					STR_TO_DATE('$timeStart', '%m/%d/%Y %h:%i %p'),
					'$tourName',
					$tourPrice,
					$tourSale
				);";

		mysql_query($sql) or die("Could not execute query. " . mysql_error());
		$newId = mysql_insert_id();
		mysql_close($conn);

		return $newId;
	}

	function updateTour($avatarTour, $categoryTourID, $description, $flag, $location, $status, $timeLimit, $timeStart, $tourID, $tourName, $tourPrice, $tourSale) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		$avatarTour = mysql_real_escape_string($avatarTour);
		$description = mysql_real_escape_string($description);
		$flag = mysql_real_escape_string($flag);
		$location = mysql_real_escape_string($location);
		$status = mysql_real_escape_string($status);
		$timeLimit = mysql_real_escape_string($timeLimit);
		$timeStart = mysql_real_escape_string($timeStart);
		$tourName = mysql_real_escape_string($tourName);

		// Validate values of numeric columns.
		$categoryTourID = is_numeric($categoryTourID) ? $categoryTourID : 0;
		$tourID = is_numeric($tourID) ? $tourID : 0;
		$tourPrice = is_numeric($tourPrice) ? $tourPrice : 0;

		// Validate values of nullable numeric columns.
		$tourSale = is_numeric($tourSale) || $tourSale == NULL ? $tourSale : 0;

		// Handle nullable columns.
		$description = ($description == NULL ? "NULL" : "'$description'");
		$flag = ($flag == NULL ? "NULL" : "'$flag'");
		$tourSale = ($tourSale == NULL ? "NULL" : "$tourSale");

		$sql = "UPDATE	`tour`
				SET		`AvatarTour` = '$avatarTour',
						`CategoryTourID` = $categoryTourID,
						`Description` = $description,
						`Flag` = $flag,
						`Location` = '$location',
						`Status` = '$status',
						`TimeLimit` = '$timeLimit',
						`TimeStart` = STR_TO_DATE('$timeStart', '%m/%d/%Y %h:%i %p'),
						`TourName` = '$tourName',
						`TourPrice` = $tourPrice,
						`TourSale` = $tourSale
				WHERE	`TourID` = $tourID;";

		mysql_query($sql) or die("Could not execute query. " . mysql_error());
		mysql_close($conn);
	}

	function deleteTour($tourID) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		// Validate values of numeric columns.
		$tourID = is_numeric($tourID) ? $tourID : 0;

		$sql = "DELETE	FROM `tour`
				WHERE	`TourID` = $tourID;";

		mysql_query($sql) or die("Could not execute query. " . mysql_error());
		mysql_close($conn);
	}

	function getTour($tourID) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		// Validate values of numeric columns.
		$tourID = is_numeric($tourID) ? $tourID : 0;

		$sql = "SELECT	`AvatarTour`,
						`CategoryTourID`,
						`Description`,
						`Flag`,
						`Location`,
						`Status`,
						`TimeLimit`,
						DATE_FORMAT(`TimeStart`, '%m/%d/%Y %h:%i %p') AS TimeStart,
						`TourID`,
						`TourName`,
						`TourPrice`,
						`TourSale`
				FROM	`tour`
				WHERE	`TourID` = $tourID;";

		$resultSet = mysql_query($sql) or die("Couldn't execute query. " . mysql_error());
		$record = mysql_fetch_array($resultSet, MYSQL_ASSOC);

		mysql_free_result($resultSet);
		mysql_close($conn);

		return $record;
	}

	function getAllRecords($pageNo, $pageSize, &$totalRecords, $sortColumn, $sortOrder) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		// Validate sort column and order.
		$defaultSortColumn = "`TourID`";
		$sortColumns = Array("AVATARTOUR", "CATEGORYTOURID", "DESCRIPTION", "FLAG", "LOCATION", "STATUS", "TIMELIMIT", "TIMESTART", "TOURID", "TOURNAME", "TOURPRICE", "TOURSALE");
		$sortColumn = in_array(strtoupper($sortColumn), $sortColumns) ? "`$sortColumn`" : $defaultSortColumn;
		$sortOrder = strcasecmp($sortOrder, "DESC") == 0 ? "DESC" : "ASC";

		$pageNo = (int)$pageNo;
		$pageSize = (int)$pageSize;

		$sql = "SELECT	COUNT(*) AS Count
				FROM	`tour`;";

		$resultSet = mysql_query($sql) or die("Couldn't execute query. " . mysql_error());
		$row = mysql_fetch_array($resultSet, MYSQL_ASSOC);
		$totalRecords = $row['Count'];

		$totalPages = ceil($totalRecords / $pageSize);
		if ($pageNo > $totalPages) {
			$pageNo = $totalPages;
		}

		$start = $pageSize * $pageNo - $pageSize;
		if($start < 0) {
			$start = 0;
		}

		$sql = "SELECT	`AvatarTour`,
						`CategoryTourID`,
						`Description`,
						`Flag`,
						`Location`,
						`Status`,
						`TimeLimit`,
						DATE_FORMAT(`TimeStart`, '%m/%d/%Y %h:%i %p') AS TimeStart,
						`TourID`,
						`TourName`,
						`TourPrice`,
						`TourSale`
				FROM	`tour`
				ORDER BY $sortColumn $sortOrder
				LIMIT $start, $pageSize;";

		$resultSet = mysql_query($sql) or die("Couldn't execute query. " . mysql_error());
		$list = Array();

		while($row = mysql_fetch_array($resultSet, MYSQL_ASSOC)) {
			array_push($list, $row);
		}

		mysql_free_result($resultSet);
		mysql_close($conn);

		return $list;
	}
?>