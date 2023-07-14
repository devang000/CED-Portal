-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 07:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmission_details`
--

CREATE TABLE `addmission_details` (
  `CourseName` varchar(50) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `PresentAddress` varchar(200) NOT NULL,
  `TalukaPresent` varchar(20) NOT NULL,
  `DistrictPresent` varchar(20) NOT NULL,
  `PincodePresent` int(6) NOT NULL,
  `PermanentAddress` varchar(200) NOT NULL,
  `TalukaPermanent` varchar(20) NOT NULL,
  `DistrictPermanent` varchar(20) NOT NULL,
  `PincodePermanent` int(6) NOT NULL,
  `MobileNo` int(10) NOT NULL,
  `WhatsappNo` int(10) NOT NULL,
  `FatherNo` int(10) NOT NULL,
  `EmergencyNo` int(10) NOT NULL,
  `BirthDate` varchar(10) NOT NULL,
  `Age` int(2) NOT NULL,
  `EducationDetails` varchar(100) NOT NULL,
  `CollegeName` varchar(50) NOT NULL,
  `CollegeAddress` varchar(200) NOT NULL,
  `Allergy` varchar(5) NOT NULL,
  `AllergyIfYes` varchar(20) NOT NULL,
  `Reference` varchar(100) NOT NULL,
  `CurrentDate` varchar(10) NOT NULL,
  `Place` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `listing_details`
--

CREATE TABLE `listing_details` (
  `Course_Title` varchar(20) NOT NULL,
  `Course_Start` date NOT NULL,
  `Course_Expire` date NOT NULL,
  `Teacher_Name` varchar(20) NOT NULL,
  `Course_Description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration_details`
--

CREATE TABLE `registration_details` (
  `Name` varchar(50) NOT NULL,
  `Father_Name` varchar(50) NOT NULL,
  `Mobile_Number` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Confirm_Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reply_details`
--

CREATE TABLE `reply_details` (
  `reply` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `report_details`
--

CREATE TABLE `report_details` (
  `Your_Name` varchar(50) NOT NULL,
  `Email_Address` varchar(50) NOT NULL,
  `Message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_profile`
--

CREATE TABLE `teacher_profile` (
  `Full_Name` varchar(20) NOT NULL,
  `Occupation` varchar(20) NOT NULL,
  `Company_Name` varchar(20) NOT NULL,
  `Phonne_No` int(10) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `Full_Name` varchar(50) NOT NULL,
  `Occupation` varchar(20) NOT NULL,
  `Company_Name` varchar(20) NOT NULL,
  `Phone_No` int(10) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Current_Password` varchar(20) NOT NULL,
  `New_Password` varchar(20) NOT NULL,
  `Re_Type_Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
