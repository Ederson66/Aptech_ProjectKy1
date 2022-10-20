<?php
	require_once("dbInfo.php");

	function addCategory($categoryName, $description, $flag, $parentID) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		$categoryName = mysql_real_escape_string($categoryName);
		$description = mysql_real_escape_string($description);
		$flag = mysql_real_escape_string($flag);

		// Validate values of nullable numeric columns.
		$parentID = is_numeric($parentID) || $parentID == NULL ? $parentID : 0;

		// Handle nullable columns.
		$description = ($description == NULL ? "NULL" : "'$description'");
		$flag = ($flag == NULL ? "NULL" : "'$flag'");
		$parentID = ($parentID == NULL ? "NULL" : "$parentID");

		$sql = "INSERT INTO `category`
				(
					`CategoryName`,
					`Description`,
					`Flag`,
					`ParentID`
				)
				VALUES
				(
					'$categoryName',
					$description,
					$flag,
					$parentID
				);";

		mysql_query($sql) or die("Could not execute query. " . mysql_error());
		$newId = mysql_insert_id();
		mysql_close($conn);

		return $newId;
	}

	function updateCategory($categoryID, $categoryName, $description, $flag, $parentID) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		$categoryName = mysql_real_escape_string($categoryName);
		$description = mysql_real_escape_string($description);
		$flag = mysql_real_escape_string($flag);

		// Validate values of numeric columns.
		$categoryID = is_numeric($categoryID) ? $categoryID : 0;

		// Validate values of nullable numeric columns.
		$parentID = is_numeric($parentID) || $parentID == NULL ? $parentID : 0;

		// Handle nullable columns.
		$description = ($description == NULL ? "NULL" : "'$description'");
		$flag = ($flag == NULL ? "NULL" : "'$flag'");
		$parentID = ($parentID == NULL ? "NULL" : "$parentID");

		$sql = "UPDATE	`category`
				SET		`CategoryName` = '$categoryName',
						`Description` = $description,
						`Flag` = $flag,
						`ParentID` = $parentID
				WHERE	`CategoryID` = $categoryID;";

		mysql_query($sql) or die("Could not execute query. " . mysql_error());
		mysql_close($conn);
	}

	function deleteCategory($categoryID) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		// Validate values of numeric columns.
		$categoryID = is_numeric($categoryID) ? $categoryID : 0;

		$sql = "DELETE	FROM `category`
				WHERE	`CategoryID` = $categoryID;";

		mysql_query($sql) or die("Could not execute query. " . mysql_error());
		mysql_close($conn);
	}

	function getCategory($categoryID) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		// Validate values of numeric columns.
		$categoryID = is_numeric($categoryID) ? $categoryID : 0;

		$sql = "SELECT	`CategoryID`,
						`CategoryName`,
						`Description`,
						`Flag`,
						`ParentID`
				FROM	`category`
				WHERE	`CategoryID` = $categoryID;";

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
		$defaultSortColumn = "`CategoryID`";
		$sortColumns = Array("CATEGORYID", "CATEGORYNAME", "DESCRIPTION", "FLAG", "PARENTID");
		$sortColumn = in_array(strtoupper($sortColumn), $sortColumns) ? "`$sortColumn`" : $defaultSortColumn;
		$sortOrder = strcasecmp($sortOrder, "DESC") == 0 ? "DESC" : "ASC";

		$pageNo = (int)$pageNo;
		$pageSize = (int)$pageSize;

		$sql = "SELECT	COUNT(*) AS Count
				FROM	`category`;";

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

		$sql = "SELECT	`CategoryID`,
						`CategoryName`,
						`Description`,
						`Flag`,
						`ParentID`
				FROM	`category`
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