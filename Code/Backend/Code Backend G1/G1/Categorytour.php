<?php
	require_once("dbInfo.php");

	function addCategorytour($categoryTourName, $description, $flag, $status) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		$categoryTourName = mysql_real_escape_string($categoryTourName);
		$description = mysql_real_escape_string($description);
		$flag = mysql_real_escape_string($flag);

		// Validate values of nullable numeric columns.
		$status = is_numeric($status) || $status == NULL ? $status : 0;

		// Handle nullable columns.
		$description = ($description == NULL ? "NULL" : "'$description'");
		$flag = ($flag == NULL ? "NULL" : "'$flag'");
		$status = ($status == NULL ? "NULL" : "$status");

		$sql = "INSERT INTO `categorytour`
				(
					`CategoryTourName`,
					`Description`,
					`Flag`,
					`Status`
				)
				VALUES
				(
					'$categoryTourName',
					$description,
					$flag,
					$status
				);";

		mysql_query($sql) or die("Could not execute query. " . mysql_error());
		$newId = mysql_insert_id();
		mysql_close($conn);

		return $newId;
	}

	function updateCategorytour($categoryTourID, $categoryTourName, $description, $flag, $status) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		$categoryTourName = mysql_real_escape_string($categoryTourName);
		$description = mysql_real_escape_string($description);
		$flag = mysql_real_escape_string($flag);

		// Validate values of numeric columns.
		$categoryTourID = is_numeric($categoryTourID) ? $categoryTourID : 0;

		// Validate values of nullable numeric columns.
		$status = is_numeric($status) || $status == NULL ? $status : 0;

		// Handle nullable columns.
		$description = ($description == NULL ? "NULL" : "'$description'");
		$flag = ($flag == NULL ? "NULL" : "'$flag'");
		$status = ($status == NULL ? "NULL" : "$status");

		$sql = "UPDATE	`categorytour`
				SET		`CategoryTourName` = '$categoryTourName',
						`Description` = $description,
						`Flag` = $flag,
						`Status` = $status
				WHERE	`CategoryTourID` = $categoryTourID;";

		mysql_query($sql) or die("Could not execute query. " . mysql_error());
		mysql_close($conn);
	}

	function deleteCategorytour($categoryTourID) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		// Validate values of numeric columns.
		$categoryTourID = is_numeric($categoryTourID) ? $categoryTourID : 0;

		$sql = "DELETE	FROM `categorytour`
				WHERE	`CategoryTourID` = $categoryTourID;";

		mysql_query($sql) or die("Could not execute query. " . mysql_error());
		mysql_close($conn);
	}

	function getCategorytour($categoryTourID) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		// Validate values of numeric columns.
		$categoryTourID = is_numeric($categoryTourID) ? $categoryTourID : 0;

		$sql = "SELECT	`CategoryTourID`,
						`CategoryTourName`,
						`Description`,
						`Flag`,
						`Status`
				FROM	`categorytour`
				WHERE	`CategoryTourID` = $categoryTourID;";

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
		$defaultSortColumn = "`CategoryTourID`";
		$sortColumns = Array("CATEGORYTOURID", "CATEGORYTOURNAME", "DESCRIPTION", "FLAG", "STATUS");
		$sortColumn = in_array(strtoupper($sortColumn), $sortColumns) ? "`$sortColumn`" : $defaultSortColumn;
		$sortOrder = strcasecmp($sortOrder, "DESC") == 0 ? "DESC" : "ASC";

		$pageNo = (int)$pageNo;
		$pageSize = (int)$pageSize;

		$sql = "SELECT	COUNT(*) AS Count
				FROM	`categorytour`;";

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

		$sql = "SELECT	`CategoryTourID`,
						`CategoryTourName`,
						`Description`,
						`Flag`,
						`Status`
				FROM	`categorytour`
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