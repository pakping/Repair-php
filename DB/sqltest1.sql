-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 10:43 AM
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
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `Case_ID` int(8) NOT NULL,
  `Username` char(20) COLLATE utf32_thai_520_w2 NOT NULL,
  `Note` varchar(300) COLLATE utf32_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_thai_520_w2;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`Case_ID`, `Username`, `Note`) VALUES
(100, 'Sirichai', 'มยสสย');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Case_ID` int(8) NOT NULL,
  `Location` char(10) CHARACTER SET utf8 NOT NULL,
  `Problem` char(13) CHARACTER SET utf8 NOT NULL,
  `Description` text CHARACTER SET utf8 NOT NULL,
  `Time` time NOT NULL,
  `Date` date NOT NULL,
  `Editby` char(20) COLLATE utf32_thai_520_w2 NOT NULL,
  `Stat` char(20) CHARACTER SET utf8 NOT NULL,
  `Username` char(20) COLLATE utf32_thai_520_w2 NOT NULL,
  `Worker` char(23) COLLATE utf32_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_thai_520_w2;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`Case_ID`, `Location`, `Problem`, `Description`, `Time`, `Date`, `Editby`, `Stat`, `Username`, `Worker`) VALUES
(100, 'Office 8', 'Other', 'gfgg', '09:55:58', '2021-01-25', '', 'สำเร็จ', 'Jeerachon', 'Sirichai'),
(108, 'Emergency', 'Computer', '2', '12:10:04', '2021-01-25', '', 'สำเร็จ', 'Jeerachon', 'Sirichai'),
(109, 'Emergency', 'Computer', '3', '12:10:09', '2021-01-25', '', 'สำเร็จ', 'Jeerachon', 'Sirichai'),
(111, 'Emergency', 'Computer', '5', '12:10:20', '2021-01-25', '', 'กำลังดำเนินการ', 'Jeerachon', 'Sirichai'),
(112, 'IPD1', 'Computer', 'gfhhtr', '12:26:58', '2021-01-25', '', 'รอดำเนินการ', 'Jeerachon', 'ไม่มี'),
(113, 'OPD1', 'Other', 'l;;l', '12:29:27', '2021-01-25', '', 'กำลังดำเนินการ', 'Jeerachon', 'Sirichai'),
(114, 'IPD1', 'Printer', 'edsgsggdsgsdgdsgsdgs', '12:32:23', '2021-01-25', '', 'สำเร็จ', 'Jeerachon', 'Sirichai'),
(115, 'IPD1', 'Other', 'hh', '12:39:51', '2021-01-25', '', 'รอดำเนินการ', 'Jeerachon', 'ไม่มี'),
(116, 'OPD1', 'Printer', 'jnn', '12:40:06', '2021-01-25', '', 'รอดำเนินการ', 'Jeerachon', 'ไม่มี'),
(118, 'OPD1', 'Computer', 'fhbfhfcghcvhvcbvcbcvbvcbvcbcvbvcbvcbcvbcvbcv', '12:52:42', '2021-01-25', '', 'รอดำเนินการ', 'Jeerachon', 'ไม่มี'),
(119, 'Office 5', 'Other', 'sadsadsadsadsa', '13:04:21', '2021-01-25', '', 'รอดำเนินการ', 'Jeerachon', 'ไม่มี'),
(120, 'OPD2', 'Printer', 'safdasfdsaf', '16:27:17', '2021-01-25', '', 'รอดำเนินการ', 'Jeerachon', 'ไม่มี');

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
-- Table structure for table `token_line`
--

CREATE TABLE `token_line` (
  `api` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `token_line`
--

INSERT INTO `token_line` (`api`) VALUES
('mWLUxFiNjmdgXKZu8oqef6H00OGi6ktec0ftBvhpTs7');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` char(20) COLLATE utf32_thai_520_w2 NOT NULL,
  `Password` char(20) COLLATE utf32_thai_520_w2 NOT NULL,
  `firstname` char(30) COLLATE utf32_thai_520_w2 NOT NULL,
  `lastname` char(30) COLLATE utf32_thai_520_w2 NOT NULL,
  `Tel` int(10) NOT NULL,
  `LoginStatus` int(1) NOT NULL,
  `LastUpdate` datetime NOT NULL,
  `Access` char(5) COLLATE utf32_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_thai_520_w2;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Password`, `firstname`, `lastname`, `Tel`, `LoginStatus`, `LastUpdate`, `Access`) VALUES
('Jeerachon', '123456', 'จีราชล', 'ธรรมศร', 889943216, 0, '0000-00-00 00:00:00', 'user'),
('phoomin', '456789', 'ภูมินทร์', 'บุญอนันต์', 1333333333, 0, '0000-00-00 00:00:00', 'user'),
('Sirichai', '654321', 'ศิริชัย', 'เบ็ญจมาคม', 215148148, 1, '2021-01-25 16:29:18', 'admin'),
('teerat', '987654', 'ธีรัช', 'กิจเจริญ', 11223344, 0, '0000-00-00 00:00:00', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD KEY `Case_ID` (`Case_ID`),
  ADD KEY `Username` (`Username`);

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
  MODIFY `Case_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `spare_request`
--
ALTER TABLE `spare_request`
  MODIFY `Request_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `fk_Case_ID` FOREIGN KEY (`Case_ID`) REFERENCES `report` (`Case_ID`) ON DELETE CASCADE;

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `fk_username` FOREIGN KEY (`Username`) REFERENCES `user` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
