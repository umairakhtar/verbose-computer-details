-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2015 at 08:59 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `computerdetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227');

-- --------------------------------------------------------

--
-- Table structure for table `serverdetailsform`
--

CREATE TABLE IF NOT EXISTS `serverdetailsform` (
`id` int(10) NOT NULL,
  `servername` varchar(20) NOT NULL,
  `ipaddress` varbinary(16) NOT NULL,
  `macaddress` varbinary(30) NOT NULL,
  `os` varchar(20) NOT NULL,
  `licensekey` varchar(100) NOT NULL,
  `sqldata` varchar(10) NOT NULL,
  `sqlversion` varchar(100) NOT NULL,
  `sqllicensekey` varchar(30) NOT NULL,
  `loai` varchar(30) NOT NULL,
  `loch` varchar(40) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `antivirus` varchar(20) NOT NULL,
  `antivirusvalidity` varchar(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serverdetailsform`
--

INSERT INTO `serverdetailsform` (`id`, `servername`, `ipaddress`, `macaddress`, `os`, `licensekey`, `sqldata`, `sqlversion`, `sqllicensekey`, `loai`, `loch`, `remarks`, `antivirus`, `antivirusvalidity`) VALUES
(63, 'jakhtar', 0x3139322e3136382e34352e3534, 0x35342d35342d35342d35342d35342d3435, 'DF', '11111/11111/11', '', '', '', '', '', '', '', ''),
(70, 'nadeem', 0x3139322e3136382e302e34, '', 'kjdw', '', 'No', '151', '', '', 'fdklf', 'this is fun', 'yes', 'dfdfdfdf'),
(69, 'nadeem', 0x3139322e3136382e302e34, 0x35312d34352d31342d35312d35312d3531, 'kjdw', 'fkefj', 'No', '151', 'asfdd-sfds', '', 'fdklf', 'this is fun', 'yes', 'dfdfdfdf'),
(68, 'abc', 0x3139322e3136382e312e30, 0x72742d72742d72742d72742d72742d7772, 're', 're445/45454/54545/4', 'No', '', '', '', '', '', 'no', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serverdetailsform`
--
ALTER TABLE `serverdetailsform`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `serverdetailsform`
--
ALTER TABLE `serverdetailsform`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=71;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
