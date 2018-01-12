-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2018 at 08:29 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trash cycle`
--

-- --------------------------------------------------------

--
-- Table structure for table `collect`
--

CREATE TABLE `collect` (
  `UserID` int(3) NOT NULL,
  `WasteID` int(2) NOT NULL,
  `Quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trashpicker`
--

CREATE TABLE `trashpicker` (
  `Trash_PickerID` int(3) NOT NULL,
  `User_Id` int(3) NOT NULL,
  `No_Kendaraan` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trashpicker`
--

INSERT INTO `trashpicker` (`Trash_PickerID`, `User_Id`, `No_Kendaraan`) VALUES
(1, 13, 'BK 7441 VI'),
(2, 14, 'BK 4747 VI'),
(3, 16, 'Bk 1414 IV'),
(4, 17, 'BK 4144 FF');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(16) DEFAULT NULL,
  `Email_Address` varchar(35) DEFAULT NULL,
  `Password` varchar(32) DEFAULT NULL,
  `Phone_Number` varchar(13) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `User_Id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Email_Address`, `Password`, `Phone_Number`, `Address`, `User_Id`) VALUES
('admin', 'admin@example.com', '1234', '081233211233', 'jln. Malaka no 89 Medan', 1),
('gunawan', 'gunawanhuang32@gmail.com', 'bangke', '085206588911', 'jalan Malaka no 35B Medan, Indonesia', 2),
('abcd', 'abcd@abcd.com', 'abcd', '111111', 'aaaaa', 3),
('abcd', 'abcd@abcd.com', '1212', '111111', 'aaaaa', 4),
('zxc', 'zxc@zxc.com', 'zxc', '1234', 'zxc', 5),
('qwe', 'qwe@qwe.com', 'qwe', '9999', 'qwe', 6),
('Elwin Chen', 'elwinchen@example.com', 'terserah', '085397111233', 'Jln Pukat V no 22', 7),
('haha', 'haha@example.com', 'haha', '08121212121', 'jln terserah no 7', 8),
('aaa', 'aaa@example.com', 'aaa', '081122112233', 'jln Asia no 45', 9),
('aaaa', 'aaaa@example.com', 'aaaa', '081122112333', 'Jalan Asia no 48', 13),
('realadmin', 'realadmin@gmail.com', 'real', '081112221112', 'Jln Ahmad Yani No 222', 14),
('contoh', 'contoh@example.com', 'contoh', '0812121222', 'Jalan contoh no 5', 15),
('Gunawan', 'gunawanhuang99@yahoo.com', '4ng3ly@j14ng', '08112121212', 'Jalan Malaka no 81', 16),
('Elwin Chen', 'elwinchen@trashpicker.com', 'senpai', '08123232122', 'Jalan Thamrin no 77', 17);

-- --------------------------------------------------------

--
-- Table structure for table `waste`
--

CREATE TABLE `waste` (
  `WasteID` int(2) NOT NULL,
  `Waste_Name` varchar(20) NOT NULL,
  `Waste_Type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waste`
--

INSERT INTO `waste` (`WasteID`, `Waste_Name`, `Waste_Type`) VALUES
(1, 'Bottles', 0),
(2, 'Metals', 0),
(3, 'Papers', 0),
(4, 'Glass', 0),
(5, 'Food Waste', 1),
(6, 'Vegetables Waste', 1),
(7, 'Animals Waste', 1),
(8, 'Plants and Leaves', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trashpicker`
--
ALTER TABLE `trashpicker`
  ADD PRIMARY KEY (`Trash_PickerID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_Id`);

--
-- Indexes for table `waste`
--
ALTER TABLE `waste`
  ADD PRIMARY KEY (`WasteID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trashpicker`
--
ALTER TABLE `trashpicker`
  MODIFY `Trash_PickerID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `waste`
--
ALTER TABLE `waste`
  MODIFY `WasteID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
