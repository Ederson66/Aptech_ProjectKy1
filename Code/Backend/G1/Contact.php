<?php
	require_once("dbInfo.php");

	function addContact($address, $description, $email, $flag, $fullname, $message, $telephone, $userID) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		$address = mysql_real_escape_string($address);
		$description = mysql_real_escape_string($description);
		$email = mysql_real_escape_string($email);
		$flag = mysql_real_escape_string($flag);
		$fullname = mysql_real_escape_string($fullname);
		$message = mysql_real_escape_string($message);
		$telephone = mysql_real_escape_string($telephone);

		// Validate values of numeric columns.
		$userID = is_numeric($userID) ? $userID : 0;

		// Handle nullable columns.
		$description = ($description == NULL ? "NULL" : "'$description'");
		$flag = ($flag == NULL ? "NULL" : "'$flag'");

		$sql = "INSERT INTO `contact`
				(
					`address`,
					`description`,
					`email`,
					`flag`,
					`fullname`,
					`message`,
					`telephone`,
					`userID`
				)
				VALUES
				(
					'$address',
					$description,
					'$email',
					$flag,
					'$fullname',
					'$message',
					'$telephone',
					$userID
				);";

		mysql_query($sql) or die("Could not execute query. " . mysql_error());
		$newId = mysql_insert_id();
		mysql_close($conn);

		return $newId;
	}

	function updateContact($address, $contactID, $description, $email, $flag, $fullname, $message, $telephone, $userID) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		$address = mysql_real_escape_string($address);
		$description = mysql_real_escape_string($description);
		$email = mysql_real_escape_string($email);
		$flag = mysql_real_escape_string($flag);
		$fullname = mysql_real_escape_string($fullname);
		$message = mysql_real_escape_string($message);
		$telephone = mysql_real_escape_string($telephone);

		// Validate values of numeric columns.
		$contactID = is_numeric($contactID) ? $contactID : 0;
		$userID = is_numeric($userID) ? $userID : 0;

		// Handle nullable columns.
		$description = ($description == NULL ? "NULL" : "'$description'");
		$flag = ($flag == NULL ? "NULL" : "'$flag'");

		$sql = "UPDATE	`contact`
				SET		`address` = '$address',
						`description` = $description,
						`email` = '$email',
						`flag` = $flag,
						`fullname` = '$fullname',
						`message` = '$message',
						`telephone` = '$telephone',
						`userID` = $userID
				WHERE	`contactID` = $contactID;";

		mysql_query($sql) or die("Could not execute query. " . mysql_error());
		mysql_close($conn);
	}

	function deleteContact($contactID) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		// Validate values of numeric columns.
		$contactID = is_numeric($contactID) ? $contactID : 0;

		$sql = "DELETE	FROM `contact`
				WHERE	`contactID` = $contactID;";

		mysql_query($sql) or die("Could not execute query. " . mysql_error());
		mysql_close($conn);
	}

	function getContact($contactID) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		// Validate values of numeric columns.
		$contactID = is_numeric($contactID) ? $contactID : 0;

		$sql = "SELECT	`address`,
						`contactID`,
						`description`,
						`email`,
						`flag`,
						`fullname`,
						`message`,
						`telephone`,
						`userID`
				FROM	`contact`
				WHERE	`contactID` = $contactID;";

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
		$defaultSortColumn = "`contactID`";
		$sortColumns = Array("ADDRESS", "CONTACTID", "DESCRIPTION", "EMAIL", "FLAG", "FULLNAME", "MESSAGE", "TELEPHONE", "USERID");
		$sortColumn = in_array(strtoupper($sortColumn), $sortColumns) ? "`$sortColumn`" : $defaultSortColumn;
		$sortOrder = strcasecmp($sortOrder, "DESC") == 0 ? "DESC" : "ASC";

		$pageNo = (int)$pageNo;
		$pageSize = (int)$pageSize;

		$sql = "SELECT	COUNT(*) AS Count
				FROM	`contact`;";

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

		$sql = "SELECT	`address`,
						`contactID`,
						`description`,
						`email`,
						`flag`,
						`fullname`,
						`message`,
						`telephone`,
						`userID`
				FROM	`contact`
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