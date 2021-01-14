-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 09:18 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sqltest1`
--

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Case_ID` int(8) NOT NULL,
  `Location` char(10) CHARACTER SET utf8 NOT NULL,
  `Problem` char(13) CHARACTER SET utf8 NOT NULL,
  `Description` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Name` char(24) CHARACTER SET utf8 NOT NULL,
  `Time` time NOT NULL,
  `Date` date NOT NULL,
  `Engineer_ID` int(3) NOT NULL,
  `Stat` char(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_thai_520_w2;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`Case_ID`, `Location`, `Problem`, `Description`, `Name`, `Time`, `Date`, `Engineer_ID`, `Stat`) VALUES
(26, 'Labor', 'Computer', '                    sawdasd', 'Jeerachon', '14:14:01', '2021-01-14', 0, 'waiting'),
(27, 'Pharmacy', 'Printer', '                aqq    ', 'Jeerachon', '14:14:08', '2021-01-14', 0, 'waiting'),
(28, 'Surgical', 'Other', '              tttttttt      ', 'Sirichai', '14:14:20', '2021-01-14', 0, 'waiting'),
(29, 'Lab', 'Other', '                    ', 'aaaaa', '14:14:31', '2021-01-14', 0, 'waiting'),
(30, 'Surgical', 'Computer', '                    sadsad', 'Jeerachon', '14:14:42', '2021-01-14', 0, 'waiting');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`Case_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `Case_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
