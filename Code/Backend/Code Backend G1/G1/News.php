<?php
	require_once("dbInfo.php");

	function addNews($author, $avatarNews, $categoryID, $content, $description, $flag, $title) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		$author = mysql_real_escape_string($author);
		$avatarNews = mysql_real_escape_string($avatarNews);
		$content = mysql_real_escape_string($content);
		$description = mysql_real_escape_string($description);
		$flag = mysql_real_escape_string($flag);
		$title = mysql_real_escape_string($title);

		// Validate values of numeric columns.
		$categoryID = is_numeric($categoryID) ? $categoryID : 0;

		// Handle nullable columns.
		$description = ($description == NULL ? "NULL" : "'$description'");
		$flag = ($flag == NULL ? "NULL" : "'$flag'");

		$sql = "INSERT INTO `news`
				(
					`Author`,
					`AvatarNews`,
					`CategoryID`,
					`Content`,
					`Description`,
					`Flag`,
					`Title`
				)
				VALUES
				(
					'$author',
					'$avatarNews',
					$categoryID,
					'$content',
					$description,
					$flag,
					'$title'
				);";

		mysql_query($sql) or die("Could not execute query. " . mysql_error());
		$newId = mysql_insert_id();
		mysql_close($conn);

		return $newId;
	}

	function updateNews($author, $avatarNews, $categoryID, $content, $description, $flag, $newsID, $title) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		$author = mysql_real_escape_string($author);
		$avatarNews = mysql_real_escape_string($avatarNews);
		$content = mysql_real_escape_string($content);
		$description = mysql_real_escape_string($description);
		$flag = mysql_real_escape_string($flag);
		$title = mysql_real_escape_string($title);

		// Validate values of numeric columns.
		$categoryID = is_numeric($categoryID) ? $categoryID : 0;
		$newsID = is_numeric($newsID) ? $newsID : 0;

		// Handle nullable columns.
		$description = ($description == NULL ? "NULL" : "'$description'");
		$flag = ($flag == NULL ? "NULL" : "'$flag'");

		$sql = "UPDATE	`news`
				SET		`Author` = '$author',
						`AvatarNews` = '$avatarNews',
						`CategoryID` = $categoryID,
						`Content` = '$content',
						`Description` = $description,
						`Flag` = $flag,
						`Title` = '$title'
				WHERE	`NewsID` = $newsID;";

		mysql_query($sql) or die("Could not execute query. " . mysql_error());
		mysql_close($conn);
	}

	function deleteNews($newsID) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		// Validate values of numeric columns.
		$newsID = is_numeric($newsID) ? $newsID : 0;

		$sql = "DELETE	FROM `news`
				WHERE	`NewsID` = $newsID;";

		mysql_query($sql) or die("Could not execute query. " . mysql_error());
		mysql_close($conn);
	}

	function getNews($newsID) {
		$conn = mysql_connect(getServer(), getUserName(), getPassword()) or die("Could not connect to database. " . mysql_error());
		mysql_select_db(getDatabaseName(), $conn) or die("Could not select the database. " . mysql_error());

		// Validate values of numeric columns.
		$newsID = is_numeric($newsID) ? $newsID : 0;

		$sql = "SELECT	`Author`,
						`AvatarNews`,
						`CategoryID`,
						`Content`,
						`Description`,
						`Flag`,
						`NewsID`,
						`Title`
				FROM	`news`
				WHERE	`NewsID` = $newsID;";

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
		$defaultSortColumn = "`NewsID`";
		$sortColumns = Array("AUTHOR", "AVATARNEWS", "CATEGORYID", "CONTENT", "DESCRIPTION", "FLAG", "NEWSID", "TITLE");
		$sortColumn = in_array(strtoupper($sortColumn), $sortColumns) ? "`$sortColumn`" : $defaultSortColumn;
		$sortOrder = strcasecmp($sortOrder, "DESC") == 0 ? "DESC" : "ASC";

		$pageNo = (int)$pageNo;
		$pageSize = (int)$pageSize;

		$sql = "SELECT	COUNT(*) AS Count
				FROM	`news`;";

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

		$sql = "SELECT	`Author`,
						`AvatarNews`,
						`CategoryID`,
						`Content`,
						`Description`,
						`Flag`,
						`NewsID`,
						`Title`
				FROM	`news`
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