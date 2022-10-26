CREATE TABLE `booktour` (
	`BookTourID` INT(10) NOT NULL AUTO_INCREMENT,
	`TourID` INT(10) NOT NULL,
	`MemberID` INT(10) NULL DEFAULT NULL,
	`AnonymousBookTour` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`AnonymousEmail` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`AnonymousAddress` VARCHAR(2000) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`AnonymousPhone` VARCHAR(15) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Status` VARCHAR(10) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Description` LONGTEXT NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Flag` VARCHAR(1) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	PRIMARY KEY (`BookTourID`) USING BTREE
)
COLLATE='utf8mb4_0900_ai_ci'
ENGINE=InnoDB
;


CREATE TABLE `category` (
	`CategoryID` INT(10) NOT NULL AUTO_INCREMENT,
	`CategoryName` VARCHAR(1000) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`ParentID` INT(10) NULL DEFAULT NULL,
	`Description` LONGTEXT NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Flag` VARCHAR(1) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	PRIMARY KEY (`CategoryID`) USING BTREE
)
COLLATE='utf8mb4_0900_ai_ci'
ENGINE=InnoDB
;


CREATE TABLE `categorytour` (
	`CategoryTourID` INT(10) NOT NULL AUTO_INCREMENT,
	`CategoryTourName` VARCHAR(1000) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Status` INT(10) NULL DEFAULT NULL,
	`Description` LONGTEXT NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Flag` VARCHAR(1) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	PRIMARY KEY (`CategoryTourID`) USING BTREE
)
COLLATE='utf8mb4_0900_ai_ci'
ENGINE=InnoDB
;


CREATE TABLE `contact` (
	`contactID` INT(10) NOT NULL AUTO_INCREMENT,
	`MemberID` INT(10) NOT NULL,
	`fullname` VARCHAR(500) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`address` VARCHAR(1000) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`email` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`telephone` VARCHAR(15) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`message` LONGTEXT NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`description` LONGTEXT NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`flag` VARCHAR(1) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	PRIMARY KEY (`contactID`) USING BTREE
)
COLLATE='utf8mb4_0900_ai_ci'
ENGINE=InnoDB
;


CREATE TABLE `itemlibrary` (
	`ItemLibraryID` INT(10) NOT NULL AUTO_INCREMENT,
	`LibraryID` INT(10) NULL DEFAULT NULL,
	`Type` INT(10) NULL DEFAULT NULL,
	`Title` VARCHAR(1000) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Alt` VARCHAR(500) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`File` VARCHAR(2000) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Description` LONGTEXT NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Flag` VARCHAR(1) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	PRIMARY KEY (`ItemLibraryID`) USING BTREE
)
COLLATE='utf8mb4_0900_ai_ci'
ENGINE=InnoDB
;


CREATE TABLE `library` (
	`LibraryID` INT(10) NOT NULL AUTO_INCREMENT,
	`LibraryName` VARCHAR(1000) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Description` LONGTEXT NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Flag` VARCHAR(1) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	PRIMARY KEY (`LibraryID`) USING BTREE
)
COLLATE='utf8mb4_0900_ai_ci'
ENGINE=InnoDB
;


CREATE TABLE `locationandservice` (
	`LocationAndServiceID` INT(10) NOT NULL AUTO_INCREMENT,
	`MountaineeringID` INT(10) NOT NULL,
	`ServiceID` INT(10) NOT NULL,
	`Description` LONGTEXT NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Flag` VARCHAR(1) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	PRIMARY KEY (`LocationAndServiceID`) USING BTREE
)
COLLATE='utf8mb4_0900_ai_ci'
ENGINE=InnoDB
;


CREATE TABLE `member` (
	`MemberID` INT(10) NOT NULL AUTO_INCREMENT,
	`MemberName` VARCHAR(45) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Password` VARCHAR(45) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Role` VARCHAR(45) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Firstname` VARCHAR(15) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Middlename` VARCHAR(15) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Lastname` VARCHAR(15) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Birthday` DATETIME NOT NULL,
	`Sex` VARCHAR(10) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Telephone` VARCHAR(20) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Email` VARCHAR(500) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Status` VARCHAR(45) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Description` LONGTEXT NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Flag` VARCHAR(1) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	PRIMARY KEY (`MemberID`) USING BTREE
)
COLLATE='utf8mb4_0900_ai_ci'
ENGINE=InnoDB
AUTO_INCREMENT=2
;


CREATE TABLE `mountaineering` (
	`MountaineeringID` INT(10) NOT NULL AUTO_INCREMENT,
	`LocationX` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`LocationY` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`MountainName` VARCHAR(1000) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Level` VARCHAR(20) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Banner` VARCHAR(2000) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Type` INT(10) NOT NULL,
	`Sheltering` VARCHAR(1000) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Techniques` VARCHAR(1000) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Description` LONGTEXT NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Flag` VARCHAR(1) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	PRIMARY KEY (`MountaineeringID`) USING BTREE
)
COLLATE='utf8mb4_0900_ai_ci'
ENGINE=InnoDB
;


CREATE TABLE `news` (
	`NewsID` INT(10) NOT NULL AUTO_INCREMENT,
	`CategoryID` INT(10) NOT NULL,
	`Title` VARCHAR(1000) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`LeadContent` VARCHAR(3000) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Content` LONGTEXT NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`AvatarNews` VARCHAR(1000) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Author` VARCHAR(45) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Description` LONGTEXT NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Flag` VARCHAR(1) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	PRIMARY KEY (`NewsID`) USING BTREE
)
COLLATE='utf8mb4_0900_ai_ci'
ENGINE=InnoDB
;


CREATE TABLE `service` (
	`ServiceID` INT(10) NOT NULL AUTO_INCREMENT,
	`ServiceName` VARCHAR(1000) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Price` DECIMAL(10,0) NOT NULL,
	`VAT` INT(10) NOT NULL,
	`Description` LONGTEXT NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Flag` VARCHAR(1) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Sale` INT(10) NULL DEFAULT NULL,
	PRIMARY KEY (`ServiceID`) USING BTREE
)
COLLATE='utf8mb4_0900_ai_ci'
ENGINE=InnoDB
;


CREATE TABLE `tour` (
	`TourID` INT(10) NOT NULL AUTO_INCREMENT,
	`CategoryTourID` INT(10) NOT NULL,
	`TourName` VARCHAR(1000) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`TimeStart` DATETIME NOT NULL,
	`TimeLimit` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`TourPrice` DECIMAL(10,0) NOT NULL,
	`TourSale` DECIMAL(10,0) NULL DEFAULT NULL,
	`Location` VARCHAR(1000) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`AvatarTour` VARCHAR(2000) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Status` VARCHAR(20) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Description` LONGTEXT NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Flag` VARCHAR(1) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	PRIMARY KEY (`TourID`) USING BTREE
)
COLLATE='utf8mb4_0900_ai_ci'
ENGINE=InnoDB
;


CREATE TABLE `usersystem` (
	`UserSystemID` INT(10) NOT NULL AUTO_INCREMENT,
	`UserName` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Password` VARCHAR(500) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Role` VARCHAR(500) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Description` LONGTEXT NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Status` VARCHAR(20) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Flag` VARCHAR(1) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	PRIMARY KEY (`UserSystemID`) USING BTREE
)
COLLATE='utf8mb4_0900_ai_ci'
ENGINE=InnoDB
;
