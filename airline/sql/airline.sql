-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 28, 2016 at 05:03 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `flightnum` varchar(10) NOT NULL,
  `retflightnum` varchar(10) NOT NULL,
  `numofpass` int(10) NOT NULL,
  `adults` varchar(100) NOT NULL,
  `children` varchar(100) NOT NULL,
  `infants` varchar(100) NOT NULL,
  `fare` int(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  `rdate` varchar(10) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `idnum` varchar(15) NOT NULL,
  `idpassenger` varchar(10) NOT NULL,
  `adtitle` varchar(25) NOT NULL,
  `chtitle` varchar(25) NOT NULL,
  `inftitle` varchar(25) NOT NULL,
  `pnr` varchar(25) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `destin` varchar(50) NOT NULL,
  `ret` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`flightnum`, `retflightnum`, `numofpass`, `adults`, `children`, `infants`, `fare`, `date`, `rdate`, `idproof`, `idnum`, `idpassenger`, `adtitle`, `chtitle`, `inftitle`, `pnr`, `origin`, `destin`, `ret`) VALUES
('17673', '17673', 1, 'gkdsjghjk', 'null', 'null', 3064, '13-03-2016', '14-03-2016', '2', '3849563489', '0', 'Mr', 'null', 'null', '1756f7f1543807c', '', '', 0),
('17673', '', 2, 'dakshd,dasd', 'null', 'null', 6128, '13-03-2016', '14-03-2016', '1', 'jhfgas34554', '0', 'Mr,Mr', 'null', 'null', '1756f7f1e682539', '', '', 0),
('17673', '17673', 1, 'gkash', 'null', 'null', 3064, '13-03-2016', '14-03-2016', '2', 'jfashfh', '0', 'Mr', 'null', 'null', '1756f893d43f4ac', '', '', 0),
('17673', '17673', 1, 'ytfyf', 'null', 'null', 3064, '13-03-2016', '14-03-2016', '1', '65r6656', '0', 'Mr', 'null', 'null', '1756f8bbed95faf', '', '', 0),
('17673', '17673', 1, 'BIN', 'null', 'null', 3064, '13-03-2016', '14-03-2016', '1', '785687GFG', '0', 'Mr', 'null', 'null', '1756f8be7b9a326', '', '', 0),
('', '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', '56f8bfc5ae5b3', '', '', 0),
('17673', '17673', 2, 'ramesh,sumesh', 'null', 'null', 6128, '13-03-2016', '14-03-2016', '1', 'ABC1234', '0', 'Mr,Mr', 'null', 'null', '1756f8f23ac9c7f', '', '', 0),
('17673', '17673', 3, 'A,C', 'D', 'null', 9192, '13-03-2016', '14-03-2016', '1', 'ABC1234', '0', 'Mr,Mr', 'Mr', 'null', '1756f8f91969dc7', '', '', 0),
('17673', '17673', 3, 'Sreeraj,Just', 'ANi', 'null', 9192, '13-03-2016', '14-03-2016', '2', 'VTY678', '0', 'Mr,Mr', 'Mr', 'null', '1756f8f9d7c6747', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '17572147467ef19', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214a421d7f9', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214a81d9178', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214ac7e3780', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214ad6bf1f0', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214afe05561', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214b1a0f939', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214b2788785', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214bfc5f596', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214c4fc91d4', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214c5c3afbf', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214c63e69f3', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214c8d848bd', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214cc69136c', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214ce34d08a', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214d3fcdcac', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214d56f1589', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214d819642e', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214e6f2ff58', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214e84dbc8f', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214eada8ba5', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214eb82e0b9', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214ec063e27', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214ee55b8a6', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214ef9a087f', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214f05252a3', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 8, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214f278ade0', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 34930, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214f7dc4955', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 34930, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214fa243553', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 34930, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214fe1d2ba8', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 34930, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '1757214ffb5b1a5', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 34930, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '175721500882f48', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 34930, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '175721505e772b7', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 34930, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '17572150d6ce438', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 34930, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '175721510501b71', '', '', 0),
('17354', '17354', 8, 'asd,sdf,dfg,fgh', 'ghj,hjk', 'jkl,qwe', 34930, '7-05-2016', '8-05-2016', 'Election I', 'sdfsdfsdfsdf', '1', '0,0,0,0', '0,0', '0,0', '175721516aae415', '', '', 0),
('17354', '17354', 4, 'asd,sdf', 'dfg', 'fgh', 17465, '21-05-2016', '22-05-2016', 'Election ID Card', 'sdfsdfsdfsf', '1', 'Mr,Mr', 'Mr', 'Mr', '17572158a34f5e5', '', '', 0),
('17354', '17354', 4, 'sfd,qew', 'asd', 'zcx', 17465, '14-05-2016', '22-05-2016', 'Election ID Card', 'afsdafdsafsd', '1', 'Mr,Mr', 'Mr', 'Mr', '175721599b141f8', 'NEW DELHI', 'MUMBAI', 1),
('17354', '17354', 4, 'sfd,qew', 'asd', 'zcx', 17465, '14-05-2016', '22-05-2016', 'Election ID Card', 'afsdafdsafsd', '1', 'Mr,Mr', 'Mr', 'Mr', '17572159d00d8ae', 'NEW DELHI', 'MUMBAI', 1),
('17354', '17354', 4, 'sfd,qew', 'asd', 'zcx', 17465, '14-05-2016', '22-05-2016', 'Election ID Card', 'afsdafdsafsd', '1', 'Mr,Mr', 'Mr', 'Mr', '17572159d360fa0', 'NEW DELHI', 'MUMBAI', 1),
('17354', '17354', 4, 'sfd,qew', 'asd', 'zcx', 17465, '14-05-2016', '22-05-2016', 'Election ID Card', 'afsdafdsafsd', '1', 'Mr,Mr', 'Mr', 'Mr', '1757215a278a926', 'NEW DELHI', 'MUMBAI', 1),
('17354', '17354', 4, 'sfd,qew', 'asd', 'zcx', 17465, '14-05-2016', '22-05-2016', 'Election ID Card', 'afsdafdsafsd', '1', 'Mr,Mr', 'Mr', 'Mr', '1757215a4e1d29b', 'NEW DELHI', 'MUMBAI', 1),
('17354', '17354', 4, 'sfd,qew', 'asd', 'zcx', 17465, '14-05-2016', '22-05-2016', 'Election ID Card', 'afsdafdsafsd', '1', 'Mr,Mr', 'Mr', 'Mr', '1757215a73042fa', 'NEW DELHI', 'MUMBAI', 1),
('17354', '17354', 4, 'sfd,qew', 'asd', 'zcx', 17465, '14-05-2016', '22-05-2016', 'Election ID Card', 'afsdafdsafsd', '1', 'Mr,Mr', 'Mr', 'Mr', '1757215a85605d3', 'NEW DELHI', 'MUMBAI', 1),
('17354', '17354', 4, 'asd,ads', 'wer', 'fdg', 17465, '14-05-2016', '22-05-2016', 'Election ID Card', 'safdadsadsf', '1', 'Mr,Mr', 'Mr', 'Mr', '1757215af8527b0', 'NEW DELHI', 'MUMBAI', 0),
('17354', '17354', 4, 'asd,ads', 'wer', 'fdg', 17465, '14-05-2016', '22-05-2016', 'Election ID Card', 'safdadsadsf', '1', 'Mr,Mr', 'Mr', 'Mr', '1757215b04672cb', 'NEW DELHI', 'MUMBAI', 0),
('17354', '17354', 4, 'asd,ads', 'wer', 'fdg', 17465, '14-05-2016', '22-05-2016', 'Election ID Card', 'safdadsadsf', '1', 'Mr,Mr', 'Mr', 'Mr', '1757215b812082c', '', '', 0),
('17354', '17354', 4, 'asd,ads', 'wer', 'fdg', 17465, '14-05-2016', '22-05-2016', 'Election ID Card', 'safdadsadsf', '1', 'Mr,Mr', 'Mr', 'Mr', '1757215bcba63a1', 'NEW DELHI', 'MUMBAI', 1),
('17354', '', 1, 'Jins Thomas', 'null', 'null', 3064, '30-04-2016', '--', 'Election ID Card', 'askjdhaksjdhkas', '1', 'Mr', 'null', 'null', '1757215c91a9653', 'NEW DELHI', 'MUMBAI', 0),
('17354', '', 1, 'Jins Thomas', 'null', 'null', 3064, '30-04-2016', '--', 'Election ID Card', 'askjdhaksjdhkas', '1', 'Mr', 'null', 'null', '1757215cc6e1526', 'NEW DELHI', 'MUMBAI', 0),
('17354', '', 1, 'Jins Thomas', '', '', 3064, '30-04-2016', '--', 'Driving Liscense', 'fgsfdgsdfgsdfg', '1', 'Mr', '', '', '1757215deba59ca', 'NEW DELHI', 'MUMBAI', 0),
('17354', '17354', 1, 'Jins Thomas Shaji', '', '', 6128, '11-06-2016', '12-06-2016', 'Adhar Card', 'abcdefghijkl', '1', 'Mr', '', '', '1757215f884716f', 'NEW DELHI', 'MUMBAI', 1),
('17746', '', 2, 'Jins', 'Aedhan', '', 12880, '29-04-2016', '--', 'Election ID Card', '1234567890', '1', 'Mr', 'Mr', '', '175721604aa07dd', 'NEW DELHI', 'CHENNAI', 0);

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `flightnum` varchar(7) NOT NULL,
  `source` varchar(12) NOT NULL,
  `dest` varchar(12) NOT NULL,
  `jtime` varchar(10) NOT NULL,
  `jday` varchar(10) NOT NULL,
  `seats` int(10) NOT NULL,
  `fare` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`flightnum`, `source`, `dest`, `jtime`, `jday`, `seats`, `fare`) VALUES
('17132', 'COCHIN', 'CHENNAI', '7:30am', 'MONDAY', 40, 3902),
('17132', 'CHENNAI', 'COCHIN', '9:00am', 'TUESDDAY', 40, 3902),
('17253', 'MUMBAI', 'COCHIN', '9:00am', 'WEDNESDAY', 40, 7364),
('17253', 'COCHIN', 'MUMBAI', '11:00am', 'THURSDAY', 40, 7364),
('17354', 'NEW DELHI', 'MUMBAI', '11:00am', 'SATURDAY', 40, 3064),
('17354', 'MUMBAI', 'NEW DELHI', '8:00am', 'SUNDAY', 40, 3064),
('17673', 'COCHIN', 'NEW DELHI', '8:00am', 'SUNDAY', 40, 3064),
('17673', 'NEW DELHI', 'COCHIN', '11:30am', 'MONDAY', 40, 7064),
('17746', 'CHENNAI', 'DELHI', '11:30am', 'THURSDAY', 40, 7360),
('17746', 'NEW DELHI', 'CHENNAI', '10:30am', 'FRIDAY', 40, 7360);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
`id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` int(1) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `regtime` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `gender`, `email`, `phone`, `regtime`) VALUES
(10001, 'Jins', 'new', 0, 'jins96@gmail.com', '1234567890', '04-27-2016-23-55-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;