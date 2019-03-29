-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 08:17 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trial`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `Id` int(4) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Id`, `Username`, `Password`) VALUES
(100, 'omkar', 'Omj'),
(102, 'manas', 'manas123'),
(103, 'sam', 'sam');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `Name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`Name`) VALUES
('Banglore'),
('Delhi'),
('Dubai'),
('Goa'),
('Iceland'),
('Kolkata'),
('London'),
('Miami'),
('Mumbai'),
('Nashik'),
('New York'),
('Rajasthan');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Name` text NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Name`, `Contact`, `Email`, `Message`) VALUES
('Varun Deshpande', 9922884477, 'varundandu@gmail.com', 'Nice Work!!!');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Source` text NOT NULL,
  `Destination` text NOT NULL,
  `Departure` date NOT NULL,
  `Arrival` date NOT NULL,
  `Fair_Economic` int(11) NOT NULL,
  `Fair_Business` int(11) NOT NULL,
  `Available_seats` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`Id`, `Name`, `Source`, `Destination`, `Departure`, `Arrival`, `Fair_Economic`, `Fair_Business`, `Available_seats`) VALUES
(101, 'AirIndia', 'Mumbai', 'Goa', '2018-10-01', '2018-10-25', 6700, 10000, 58),
(103, 'JetAirways', 'Delhi', 'Banglore', '2018-09-20', '2018-10-03', 4000, 8000, 60),
(104, 'JetAirways', 'Delhi', 'Mumbai', '2018-10-12', '2018-10-31', 7500, 11000, 53),
(105, 'Indigo', 'Mumbai', 'Rajasthan', '2018-08-15', '2018-08-24', 4500, 7500, 60),
(455, 'GoAir', 'Delhi', 'Iceland', '2018-10-01', '2018-10-30', 35000, 60000, 50),
(1001, 'Emirates', 'Dubai', 'Mumbai', '2018-10-14', '2018-10-30', 12000, 24000, 25),
(2120, 'Indigo', 'New York', 'Delhi', '2018-11-01', '2018-11-13', 10000, 30000, 50);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(4) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `MobileNo` bigint(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Flight_Id` int(11) NOT NULL,
  `Seats_booked` int(11) NOT NULL,
  `Total_Cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `FirstName`, `LastName`, `MobileNo`, `Email`, `Flight_Id`, `Seats_booked`, `Total_Cost`) VALUES
(102, 'Omkar', 'Jadhav', 2147483647, 'omjadhav@gmail.com', 101, 0, 30000),
(104, 'Prateek', 'Kulkarni', 134567899, 'pk@gmail.com', 101, 0, 27000),
(105, 'Omkar', 'Masurekar', 1111111, 'omkarmr@gmail.com', 104, 0, 33000),
(106, 'Yash', 'Khare', 2147483647, 'yashk@gmail.com', 101, 0, 36000),
(107, 'Charudatta', 'Bangal', 1212121211, 'charu@gmail.com', 2120, 0, 180000),
(108, 'Siddhant', 'Nashte', 1111111111, 'sidnashte@gmail.com', 105, 0, 30000),
(109, 'Babu', 'Chandanshive', 1231231231, 'babu@gmail.com', 105, 0, 15750),
(110, 'Omkar ', 'Jadhav', 101010101, 'omk@gmail.com', 2120, 0, 75000),
(111, 'Omkar', 'Jadhav', 101010101, 'omj@gmail.com', 104, 2, 22000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`),
  ADD KEY `Flight_Id` (`Flight_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`Flight_Id`) REFERENCES `flights` (`Id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
