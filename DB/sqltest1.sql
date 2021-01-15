-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 04:51 AM
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
-- Table structure for table `engineer`
--

CREATE TABLE `engineer` (
  `Engineer_ID` int(3) NOT NULL,
  `Engineer_Name` char(20) COLLATE utf32_thai_520_w2 NOT NULL,
  `Tels.` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_thai_520_w2;

--
-- Dumping data for table `engineer`
--

INSERT INTO `engineer` (`Engineer_ID`, `Engineer_Name`, `Tels.`) VALUES
(3, 'Big', 889943216);

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
  `Stat` char(10) CHARACTER SET utf8 NOT NULL,
  `Username` char(20) COLLATE utf32_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_thai_520_w2;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`Case_ID`, `Location`, `Problem`, `Description`, `Name`, `Time`, `Date`, `Engineer_ID`, `Stat`, `Username`) VALUES
(27, 'Pharmacy', 'Printer', '                aqq    ', 'Jeerachon', '14:14:08', '2021-01-14', 0, 'Done', 'Sirichai'),
(28, 'Surgical', 'Other', '              tttttttt      ', 'Sirichai', '14:14:20', '2021-01-14', 0, 'Working', 'Sirichai'),
(29, 'Lab', 'Other', '                    ', 'aaaaa', '14:14:31', '2021-01-14', 0, 'waiting', 'Jeerachon'),
(30, 'Surgical', 'Computer', '                    sadsad', 'Jeerachon', '14:14:42', '2021-01-14', 0, 'waiting', 'Jeerachon');

-- --------------------------------------------------------

--
-- Table structure for table `spare_request`
--

CREATE TABLE `spare_request` (
  `Request_ID` int(5) NOT NULL,
  `Case_ID` int(5) NOT NULL,
  `Engineer_ID` int(3) NOT NULL,
  `Req.Description` char(200) COLLATE utf32_thai_520_w2 NOT NULL,
  `Target_Item` char(100) COLLATE utf32_thai_520_w2 NOT NULL,
  `Request_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_thai_520_w2;

--
-- Dumping data for table `spare_request`
--

INSERT INTO `spare_request` (`Request_ID`, `Case_ID`, `Engineer_ID`, `Req.Description`, `Target_Item`, `Request_Date`) VALUES
(1, 1, 3, 'MainBoard ไหม้', 'MainBoard (1155) AFOX IH61-MA5', '2020-12-03'),
(2, 1, 3, 'การ์ดจอไหม้', 'GT 950', '2020-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` char(20) COLLATE utf32_thai_520_w2 NOT NULL,
  `Password` char(20) COLLATE utf32_thai_520_w2 NOT NULL,
  `Tels.` int(10) NOT NULL,
  `LoginStatus` int(1) NOT NULL,
  `LastUpdate` datetime NOT NULL,
  `Access` char(5) COLLATE utf32_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_thai_520_w2;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Password`, `Tels.`, `LoginStatus`, `LastUpdate`, `Access`) VALUES
('Jeerachon', '123456', 889943216, 1, '2021-01-15 10:51:13', 'user'),
('Sirichai', '654321', 215148148, 0, '0000-00-00 00:00:00', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `engineer`
--
ALTER TABLE `engineer`
  ADD PRIMARY KEY (`Engineer_ID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`Case_ID`),
  ADD KEY `Username` (`Username`) USING BTREE;

--
-- Indexes for table `spare_request`
--
ALTER TABLE `spare_request`
  ADD PRIMARY KEY (`Request_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `Case_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `spare_request`
--
ALTER TABLE `spare_request`
  MODIFY `Request_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `fk_username` FOREIGN KEY (`Username`) REFERENCES `user` (`Username`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
