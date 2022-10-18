
CREATE DATABASE Project_G1;
USE Project_G1;
CREATE TABLE `User` (
  `UserID` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Role` varchar(45) NULL,
  `Fisrtname` varchar(45) NOT NULL,
  `Middlename` varchar(45) NOT NULL,
  `Lastname` varchar(45) NOT NULL,
  `Birthday` varchar(45) NOT NULL,
  `Sex` varchar(45) NOT NULL,
  `Telephone` int NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Status` varchar(45) NULL,
  `Description` varchar(45) DEFAULT NULL,
  `Flag` varchar(45) DEFAULT NULL,
  `Field1` varchar(45) DEFAULT NULL,
  `Field2` varchar(45) DEFAULT NULL,
  `Field3` varchar(45) DEFAULT NULL,
  `Field4` varchar(45) DEFAULT NULL,
  `Field5` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table moutain
CREATE TABLE `Mountaineering` (
  `MountaineeringID` INT NOT NULL AUTO_INCREMENT,
  `Location-X` VARCHAR(45) NOT NULL,
  `Location-Y` VARCHAR(45) NOT NULL,
  `MountainName` VARCHAR(45) NOT NULL,
  `Level` VARCHAR(45) NOT NULL,
  `Banner` VARCHAR(45) NOT NULL,
  `Type` INT NOT NULL,
  `Sheltering` VARCHAR(45) NOT NULL,
  `Techniques` VARCHAR(45) NOT NULL,
  `Upload` VARCHAR(45) NOT NULL,
  `Description` varchar(45) DEFAULT NULL,
  `Flag` varchar(45) DEFAULT NULL,
  `Field1` varchar(45) DEFAULT NULL,
  `Field2` varchar(45) DEFAULT NULL,
  `Field3` varchar(45) DEFAULT NULL,
  `Field4` varchar(45) DEFAULT NULL,
  `Field5` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`MountaineeringID`));
  
-- Table service
CREATE TABLE `Service` (
  `ServiceID` INT NOT NULL AUTO_INCREMENT,
  `ServiceName` VARCHAR(45) NOT NULL,
  `Price` VARCHAR(45) NOT NULL,
  `VAT` VARCHAR(45) NOT NULL,
  `Description` varchar(45) DEFAULT NULL,
  `Flag` varchar(45) DEFAULT NULL,
  `Field1` varchar(45) DEFAULT NULL,
  `Field2` varchar(45) DEFAULT NULL,
  `Field3` varchar(45) DEFAULT NULL,
  `Field4` varchar(45) DEFAULT NULL,
  `Field5` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ServiceID`));
  
--   Table Location-service
CREATE TABLE `Location_service` (
  `MountaineeringID` INT NOT NULL,
  `Service` INT NOT NULL,
  `Description` varchar(45) DEFAULT NULL,
  `Flag` varchar(45) DEFAULT NULL,
  `Field1` varchar(45) DEFAULT NULL,
  `Field2` varchar(45) DEFAULT NULL,
  `Field3` varchar(45) DEFAULT NULL,
  `Field4` varchar(45) DEFAULT NULL,
  `Field5` varchar(45) DEFAULT NULL
  );
  
--   Table News
CREATE TABLE `News` (
  `NewsID` INT NOT NULL AUTO_INCREMENT,
  `Title` VARCHAR(45) NOT NULL,
  `Content` VARCHAR(45) NOT NULL,
  `NewsIMG` VARCHAR(45) NOT NULL,
  `Author` VARCHAR(45) NOT NULL,
  `Library` VARCHAR(45) NULL,
  `Description` varchar(45) DEFAULT NULL,
  `Flag` varchar(45) DEFAULT NULL,
  `Field1` varchar(45) DEFAULT NULL,
  `Field2` varchar(45) DEFAULT NULL,
  `Field3` varchar(45) DEFAULT NULL,
  `Field4` varchar(45) DEFAULT NULL,
  `Field5` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`NewsID`));
  
--   Table library
CREATE TABLE `Library` (
  `LibraryID` INT NOT NULL AUTO_INCREMENT,
  `LibraryName` VARCHAR(45) NOT NULL,
  `Description` varchar(45) DEFAULT NULL,
  `Flag` varchar(45) DEFAULT NULL,
  `Field1` varchar(45) DEFAULT NULL,
  `Field2` varchar(45) DEFAULT NULL,
  `Field3` varchar(45) DEFAULT NULL,
  `Field4` varchar(45) DEFAULT NULL,
  `Field5` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`LibraryID`));
  
--   Table Item
  CREATE TABLE `Item` (
  `ItemID` INT NOT NULL AUTO_INCREMENT,
  `Type` VARCHAR(45) NOT NULL,
  `Description` varchar(45) DEFAULT NULL,
  `Flag` varchar(45) DEFAULT NULL,
  `Field1` varchar(45) DEFAULT NULL,
  `Field2` varchar(45) DEFAULT NULL,
  `Field3` varchar(45) DEFAULT NULL,
  `Field4` varchar(45) DEFAULT NULL,
  `Field5` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ItemID`));
  
--   Table ItemLibrary
  CREATE TABLE `Itemlibrary` (
  `ItemID` INT NOT NULL,
  `LibraryID` VARCHAR(45) NULL,
  `Description` varchar(45) DEFAULT NULL,
  `Flag` varchar(45) DEFAULT NULL,
  `Field1` varchar(45) DEFAULT NULL,
  `Field2` varchar(45) DEFAULT NULL,
  `Field3` varchar(45) DEFAULT NULL,
  `Field4` varchar(45) DEFAULT NULL,
  `Field5` varchar(45) DEFAULT NULL
  );
  
-- Table Tour
CREATE TABLE `Tour` (
  `TourID` INT NOT NULL AUTO_INCREMENT,
  `TourName` VARCHAR(45) NOT NULL,
  `TimeStart` VARCHAR(45) NOT NULL,
  `TimeLimit` VARCHAR(45) NOT NULL,
  `TourPrice` VARCHAR(45) NOT NULL,
  `TourSale` VARCHAR(45) NULL,
  `Location` VARCHAR(45) NOT NULL,
  `IMGTour` VARCHAR(45) NOT NULL,
  `Status` VARCHAR(45) NOT NULL,
  `Description` VARCHAR(45) NULL,
  `Flag` varchar(45) DEFAULT NULL,
  `Field1` varchar(45) DEFAULT NULL,
  `Field2` varchar(45) DEFAULT NULL,
  `Field3` varchar(45) DEFAULT NULL,
  `Field4` varchar(45) DEFAULT NULL,
  `Field5` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`TourID`));

-- Table BookTour
CREATE TABLE `Booktour` (
  `BookTourID` INT NOT NULL AUTO_INCREMENT,
  `TourID` VARCHAR(45) NOT NULL,
  `TourName` VARCHAR(45) NOT NULL,
  `UserBookTour` VARCHAR(45) NOT NULL,
  `EmailUser` VARCHAR(45) NOT NULL,
  `AddressUser` VARCHAR(45) NOT NULL,
  `NumberPhoneUser` VARCHAR(45) NOT NULL,
  `Status` VARCHAR(45) NOT NULL,
  `Description` VARCHAR(45) NULL,
  `Flag` varchar(45) DEFAULT NULL,
  `Field1` varchar(45) DEFAULT NULL,
  `Field2` varchar(45) DEFAULT NULL,
  `Field3` varchar(45) DEFAULT NULL,
  `Field4` varchar(45) DEFAULT NULL,
  `Field5` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`BookTourID`));
  

