-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2014 at 02:53 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE IF NOT EXISTS `Customer` (
  `CustomerID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` int(11) NOT NULL,
  `EmailID` varchar(40) NOT NULL,
  `DistributorID` int(11) NOT NULL,
  PRIMARY KEY (`CustomerID`),
  KEY `DistributorID` (`DistributorID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`CustomerID`, `Name`, `Address`, `Phone`, `EmailID`, `DistributorID`) VALUES
(1, 'customer1', 'address1', 1234567890, 'email1@gmail.com', 1),
(2, 'customer2', 'address2', 1924381234, 'email2@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `CustomerOrder`
--

CREATE TABLE IF NOT EXISTS `CustomerOrder` (
  `OrderNo` int(11) NOT NULL,
  `ItemCode` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  PRIMARY KEY (`OrderNo`,`ItemCode`),
  KEY `ItemCode` (`ItemCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Department`
--

CREATE TABLE IF NOT EXISTS `Department` (
  `DepartmentNo` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `NoofEmployees` int(11) NOT NULL,
  `ManagerSSN` int(11) NOT NULL,
  PRIMARY KEY (`DepartmentNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Department`
--

INSERT INTO `Department` (`DepartmentNo`, `Name`, `NoofEmployees`, `ManagerSSN`) VALUES
(2, 'finance', 12, 1),
(4, 'production', 20, 3);

-- --------------------------------------------------------

--
-- Table structure for table `Dependents`
--

CREATE TABLE IF NOT EXISTS `Dependents` (
  `SSN` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Gender` varchar(40) NOT NULL,
  `Relation` varchar(40) NOT NULL,
  `DOB` varchar(40) NOT NULL,
  KEY `SSN` (`SSN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Dependents`
--

INSERT INTO `Dependents` (`SSN`, `Name`, `Gender`, `Relation`, `DOB`) VALUES
(1, 'rambabu', 'male', 'father', '25/07/1965'),
(1, 'abcd', 'male', 'sister', '1/1/1990'),
(1, 'rambabu', 'male', 'father', '25/07/1965'),
(1, 'abcd', 'male', 'brother', '1/1/1990'),
(2, 'a', 'a', 'a', 'a'),
(2, '', '', '', ''),
(2, 'janu', 'female', 'sis', '1/2/13'),
(2, 'siri', 'female', 'sis', '2/2/13'),
(1, 'j', 'male', 'a', '31/7/1997'),
(1, 'a', 'female', 'aunt', '1/2/13'),
(1, 'Anil', 'male', 'brother', '21/08/1992');

-- --------------------------------------------------------

--
-- Table structure for table `Distributor`
--

CREATE TABLE IF NOT EXISTS `Distributor` (
  `DistributorID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Zone` varchar(40) NOT NULL,
  `Location` varchar(40) NOT NULL,
  `Phone` int(11) NOT NULL,
  `EmailID` varchar(40) NOT NULL,
  PRIMARY KEY (`DistributorID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Distributor`
--

INSERT INTO `Distributor` (`DistributorID`, `Name`, `Zone`, `Location`, `Phone`, `EmailID`) VALUES
(1, 'distributor1', 'zone1', 'location1', 1234567890, 'email3@gmail.com'),
(2, 'abc', 'hyderabad', 'banjara hills', 2147483647, 'admin@abc.com');

-- --------------------------------------------------------

--
-- Table structure for table `DistributorOrder`
--

CREATE TABLE IF NOT EXISTS `DistributorOrder` (
  `OrderNo` int(11) NOT NULL,
  `ItemCode` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  PRIMARY KEY (`OrderNo`,`ItemCode`),
  KEY `OrderNo` (`OrderNo`),
  KEY `ItemCode` (`ItemCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DistributorOrder`
--

INSERT INTO `DistributorOrder` (`OrderNo`, `ItemCode`, `Quantity`) VALUES
(1, 1, 3),
(1, 2, 5),
(1, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `DistributorRecords`
--

CREATE TABLE IF NOT EXISTS `DistributorRecords` (
  `CustomerID` int(11) NOT NULL,
  `OrderNo` int(11) NOT NULL AUTO_INCREMENT,
  `Date` varchar(20) DEFAULT NULL,
  `Time` varchar(20) DEFAULT NULL,
  `Payment` int(11) NOT NULL,
  PRIMARY KEY (`OrderNo`),
  KEY `CustomerID` (`CustomerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `DistributorRecords`
--

INSERT INTO `DistributorRecords` (`CustomerID`, `OrderNo`, `Date`, `Time`, `Payment`) VALUES
(1, 1, NULL, NULL, 0),
(1, 2, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE IF NOT EXISTS `Employee` (
  `SSN` int(11) NOT NULL AUTO_INCREMENT,
  `FName` varchar(40) NOT NULL,
  `MName` varchar(40) NOT NULL,
  `LName` varchar(40) NOT NULL,
  `DOB` text NOT NULL,
  `JoinDate` text NOT NULL,
  `Qualification` varchar(100) NOT NULL,
  `Experience` varchar(100) NOT NULL,
  `SUPSSN` int(11) NOT NULL,
  `Salary` int(11) NOT NULL,
  `Dept_no` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  PRIMARY KEY (`SSN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`SSN`, `FName`, `MName`, `LName`, `DOB`, `JoinDate`, `Qualification`, `Experience`, `SUPSSN`, `Salary`, `Dept_no`, `age`, `Gender`) VALUES
(1, 'jahnavi', 'nukireddy', 'fruty', '31/7/1997', '1/2/2013', 'abc', 'xyz', 2, 1000000, 1, 17, 'female'),
(2, 'sireesha', 'galla', 'naidu', '14/04/1996', '12/12/2012', 'abc', '5', 2, 10000000, 2, 18, 'female'),
(4, 'siri', 'g', 'n', '14/04/1996', '21/11/2013', 'MTech', '1', 2, 1000000, 2, 18, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `Holiday`
--

CREATE TABLE IF NOT EXISTS `Holiday` (
  `SSN` int(11) NOT NULL,
  `Start_date` varchar(11) NOT NULL,
  `Purpose` varchar(40) NOT NULL,
  `Duration` int(11) NOT NULL,
  KEY `SSN` (`SSN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Holiday`
--

INSERT INTO `Holiday` (`SSN`, `Start_date`, `Purpose`, `Duration`) VALUES
(1, '13', '0', 3),
(1, '13', '0', 3),
(1, '15', 'Sick', 3),
(1, '15/11/2014', 'Sick', 3),
(1, '20/11/2014', 'Operation', 7),
(1, '10/11/2014', 'CousinMarriage', 2);

-- --------------------------------------------------------

--
-- Table structure for table `Items`
--

CREATE TABLE IF NOT EXISTS `Items` (
  `ItemCode` int(11) NOT NULL AUTO_INCREMENT,
  `ItemName` varchar(40) NOT NULL,
  `Description` varchar(40) NOT NULL,
  `Price` int(11) NOT NULL,
  `OpeningStock` varchar(20) NOT NULL,
  `ClosingStock` varchar(20) NOT NULL,
  PRIMARY KEY (`ItemCode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Items`
--

INSERT INTO `Items` (`ItemCode`, `ItemName`, `Description`, `Price`, `OpeningStock`, `ClosingStock`) VALUES
(1, 'item1', 'desc1', 100, 'start1', 'end1'),
(2, 'item2', 'desc2', 200, 'start2', 'end2'),
(3, 'item3', 'desc3', 300, 'start3', 'end3'),
(4, 'item4', 'desc4', 400, 'start4', 'end4');

-- --------------------------------------------------------

--
-- Table structure for table `SalesRecords`
--

CREATE TABLE IF NOT EXISTS `SalesRecords` (
  `DistributorID` int(11) NOT NULL,
  `OrderNo` int(11) NOT NULL AUTO_INCREMENT,
  `Date` varchar(11) NOT NULL,
  `Time` varchar(11) NOT NULL,
  `Payment` int(11) NOT NULL,
  PRIMARY KEY (`OrderNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `SalesRecords`
--

INSERT INTO `SalesRecords` (`DistributorID`, `OrderNo`, `Date`, `Time`, `Payment`) VALUES
(1, 1, '0', '0', 0),
(1, 2, '0', '0', 0),
(1, 3, '0', '0', 0),
(1, 4, '0', '0', 0),
(1, 5, '0', '0', 0),
(1, 6, '0', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Shift`
--

CREATE TABLE IF NOT EXISTS `Shift` (
  `SSN` int(11) NOT NULL,
  `Shift_no` int(11) NOT NULL,
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL,
  `number_hours` int(11) NOT NULL,
  PRIMARY KEY (`SSN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Supplier`
--

CREATE TABLE IF NOT EXISTS `Supplier` (
  `SupplierID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `BillingAddress` varchar(100) NOT NULL,
  `Phone` int(11) NOT NULL,
  `EmailID` varchar(100) NOT NULL,
  PRIMARY KEY (`SupplierID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Supplier`
--

INSERT INTO `Supplier` (`SupplierID`, `Name`, `Location`, `BillingAddress`, `Phone`, `EmailID`) VALUES
(2, 'FruitandPulp', 'TamilNadu', '', 2147483647, 'admin@fp.com'),
(3, 'Foods', 'Delhi', '', 2147483647, 'admin@foods.com');

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE IF NOT EXISTS `username` (
  `id` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `position` varchar(40) NOT NULL,
  `SSN` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`id`, `password`, `position`, `SSN`) VALUES
('abcd', '1234', 'employee', 1),
('admin', 'root', 'admin', 0),
('customer1', 'abc', 'customer', 1),
('distributor1', 'abc', 'distributor', 1),
('xyz', '1', 'employee', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `CustomerOrder`
--
ALTER TABLE `CustomerOrder`
  ADD CONSTRAINT `CustomerOrder_ibfk_1` FOREIGN KEY (`ItemCode`) REFERENCES `Items` (`ItemCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `CustomerOrder_ibfk_2` FOREIGN KEY (`OrderNo`) REFERENCES `DistributorRecords` (`OrderNo`);

--
-- Constraints for table `Dependents`
--
ALTER TABLE `Dependents`
  ADD CONSTRAINT `Dependents_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `Employee` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `DistributorOrder`
--
ALTER TABLE `DistributorOrder`
  ADD CONSTRAINT `DistributorOrder_ibfk_1` FOREIGN KEY (`OrderNo`) REFERENCES `SalesRecords` (`OrderNo`),
  ADD CONSTRAINT `DistributorOrder_ibfk_2` FOREIGN KEY (`ItemCode`) REFERENCES `Items` (`ItemCode`);

--
-- Constraints for table `DistributorRecords`
--
ALTER TABLE `DistributorRecords`
  ADD CONSTRAINT `DistributorRecords_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `Customer` (`CustomerID`);

--
-- Constraints for table `Holiday`
--
ALTER TABLE `Holiday`
  ADD CONSTRAINT `Holiday_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `Employee` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Shift`
--
ALTER TABLE `Shift`
  ADD CONSTRAINT `Shift_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `Employee` (`SSN`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
