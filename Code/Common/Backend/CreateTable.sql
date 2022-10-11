CREATE DATABASE DOAN;
USE DOAN;
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
  `Flag` varchar(45) DEFAULT NULL,
  `Field1` varchar(45) DEFAULT NULL,
  `Field2` varchar(45) DEFAULT NULL,
  `Field3` varchar(45) DEFAULT NULL,
  `Field4` varchar(45) DEFAULT NULL,
  `Field5` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO  `User`(Username, Password, Fisrtname, Middlename, Lastname, Birthday, Sex, Telephone, Email) 
VALUES ( 'Username','a','Fisrtname','Middlename','Lastname','Birthday','Sex',093453495,'a@gmail.com');

-- Table moutain
CREATE TABLE `doannhom1`.`mountaineering` (
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
  `Description` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`MountaineeringID`));
