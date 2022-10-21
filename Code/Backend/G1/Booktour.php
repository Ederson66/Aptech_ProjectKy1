<?php
	require_once("dbInfo.php");

	function addBooktour($anonymousAddress, $anonymousBookTour, $anonymousEmail, $anonymousPhone, $description, $flag, $status, $tourID, $userID) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		$anonymousAddress = mysql_real_escape_string($anonymousAddress);
		$anonymousBookTour = mysql_real_escape_string($anonymousBookTour);
		$anonymousEmail = mysql_real_escape_string($anonymousEmail);
		$anonymousPhone = mysql_real_escape_string($anonymousPhone);
		$description = mysql_real_escape_string($description);
		$flag = mysql_real_escape_string($flag);
		$status = mysql_real_escape_string($status);

		// Validate values of numeric columns.
		$tourID = is_numeric($tourID) ? $tourID : 0;

		// Validate values of nullable numeric columns.
		$userID = is_numeric($userID) || $userID == NULL ? $userID : 0;

		// Handle nullable columns.
		$description = ($description == NULL ? "NULL" : "'$description'");
		$flag = ($flag == NULL ? "NULL" : "'$flag'");
		$userID = ($userID == NULL ? "NULL" : "$userID");

		$sql = "INSERT INTO `booktour`
				(
					`AnonymousAddress`,
					`AnonymousBookTour`,
					`AnonymousEmail`,
					`AnonymousPhone`,
					`Description`,
					`Flag`,
					`Status`,
					`TourID`,
					`UserID`
				)
				VALUES
				(
					'$anonymousAddress',
					'$anonymousBookTour',
					'$anonymousEmail',
					'$anonymousPhone',
					$description,
					$flag,
					'$status',
					$tourID,
					$userID
				);";

		mysql_query($sql) or die("Could not execute query. " . mysql_error());
		$newId = mysql_insert_id();
		mysql_close($conn);

		return $newId;
	}

	function updateBooktour($anonymousAddress, $anonymousBookTour, $anonymousEmail, $anonymousPhone, $bookTourID, $description, $flag, $status, $tourID, $userID) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		$anonymousAddress = mysql_real_escape_string($anonymousAddress);
		$anonymousBookTour = mysql_real_escape_string($anonymousBookTour);
		$anonymousEmail = mysql_real_escape_string($anonymousEmail);
		$anonymousPhone = mysql_real_escape_string($anonymousPhone);
		$description = mysql_real_escape_string($description);
		$flag = mysql_real_escape_string($flag);
		$status = mysql_real_escape_string($status);

		// Validate values of numeric columns.
		$bookTourID = is_numeric($bookTourID) ? $bookTourID : 0;
		$tourID = is_numeric($tourID) ? $tourID : 0;

		// Validate values of nullable numeric columns.
		$userID = is_numeric($userID) || $userID == NULL ? $userID : 0;

		// Handle nullable columns.
		$description = ($description == NULL ? "NULL" : "'$description'");
		$flag = ($flag == NULL ? "NULL" : "'$flag'");
		$userID = ($userID == NULL ? "NULL" : "$userID");

		$sql = "UPDATE	`booktour`
				SET		`AnonymousAddress` = '$anonymousAddress',
						`AnonymousBookTour` = '$anonymousBookTour',
						`AnonymousEmail` = '$anonymousEmail',
						`AnonymousPhone` = '$anonymousPhone',
						`Description` = $description,
						`Flag` = $flag,
						`Status` = '$status',
						`TourID` = $tourID,
						`UserID` = $userID
				WHERE	`BookTourID` = $bookTourID;";

		mysql_query($sql) or die("Could not execute query. " . mysql_error());
		mysql_close($conn);
	}

	function deleteBooktour($bookTourID) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		// Validate values of numeric columns.
		$bookTourID = is_numeric($bookTourID) ? $bookTourID : 0;

		$sql = "DELETE	FROM `booktour`
				WHERE	`BookTourID` = $bookTourID;";

		mysql_query($sql) or die("Could not execute query. " . mysql_error());
		mysql_close($conn);
	}

	function getBooktour($bookTourID) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		// Validate values of numeric columns.
		$bookTourID = is_numeric($bookTourID) ? $bookTourID : 0;

		$sql = "SELECT	`AnonymousAddress`,
						`AnonymousBookTour`,
						`AnonymousEmail`,
						`AnonymousPhone`,
						`BookTourID`,
						`Description`,
						`Flag`,
						`Status`,
						`TourID`,
						`UserID`
				FROM	`booktour`
				WHERE	`BookTourID` = $bookTourID;";

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
		$defaultSortColumn = "`BookTourID`";
		$sortColumns = Array("ANONYMOUSADDRESS", "ANONYMOUSBOOKTOUR", "ANONYMOUSEMAIL", "ANONYMOUSPHONE", "BOOKTOURID", "DESCRIPTION", "FLAG", "STATUS", "TOURID", "USERID");
		$sortColumn = in_array(strtoupper($sortColumn), $sortColumns) ? "`$sortColumn`" : $defaultSortColumn;
		$sortOrder = strcasecmp($sortOrder, "DESC") == 0 ? "DESC" : "ASC";

		$pageNo = (int)$pageNo;
		$pageSize = (int)$pageSize;

		$sql = "SELECT	COUNT(*) AS Count
				FROM	`booktour`;";

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

		$sql = "SELECT	`AnonymousAddress`,
						`AnonymousBookTour`,
						`AnonymousEmail`,
						`AnonymousPhone`,
						`BookTourID`,
						`Description`,
						`Flag`,
						`Status`,
						`TourID`,
						`UserID`
				FROM	`booktour`
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