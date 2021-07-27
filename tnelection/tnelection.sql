-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 09:06 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tnelection`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkdetails`
--

CREATE TABLE `checkdetails` (
  `id` int(6) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Father_name` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `D_O_B` date NOT NULL,
  `Address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkdetails`
--

INSERT INTO `checkdetails` (`id`, `Name`, `Father_name`, `Gender`, `D_O_B`, `Address`) VALUES
(10001, 'E.SIVA', 's/o ELANGO', 'male', '2002-10-20', 'melur, madurai'),
(10002, 'P.ANBU', 's/o PIITCHAI', 'male', '1993-07-16', 'maduraisouth, madurai'),
(10003, 'S.RAVI', 's/o SHANKAR', 'male', '1999-01-12', 'madurainorth, madurai'),
(10004, 'S.AARTHI', 'd/o ESWAR', 'female', '2000-10-13', 'melur,madurai.'),
(10005, 'N.NAINAR', 's/o NAJUMUTHEEN', 'male', '2001-10-22', 'maduraicentral, madurai'),
(10006, 'K.SANKAR', 's/o PAANDI', 'male', '2000-10-01', 'maduraieast, madurai'),
(10018, 'N.GANAPATHY', 's/o SUBRAMANIAM', 'male', '2000-08-20', 'madurainorth, madurai'),
(11001, 'S.SURESH', 's/o SELVAM', 'male', '1993-07-19', 'thirumaya, sivagangai'),
(11002, 'N.SANTHIYA', 'd/o RAMKUMAR', 'female', '1999-12-12', 'karaikudi, sivagangai'),
(11003, 'P.PRABU', 's/o SUNDAR', 'male', '2000-10-09', 'alagudi, sivagangai'),
(11004, 'K.FATHIMA', 'd/o ABDUL', 'female', '1995-07-16', 'sivaganga, sivagangai'),
(11005, 'K.PETER', 's/o JOSEP', 'male', '2000-10-30', 'maduraisouth, madurai'),
(20001, 'M.SILAR', 's/o MUJIB', 'male', '1993-03-15', 'Tiruchirappalli(East),Tiruchir'),
(20002, 'L.RILWANA', 's/o DHARIK', 'female', '1994-09-01', 'Manapparai,Tiruchirappalli.'),
(20003, 'K.VIJAY', 's/o KUMAR', 'male', '1995-02-14', 'Srirangam Thiru,Tiruchirappall'),
(20004, 'E.DEVI', 's/o ESWAR', 'female', '1996-07-30', 'Thiruverumbur,Tiruchirappalli.'),
(20005, 'A.JEGADEESH', 's/o ARJUN', 'male', '1997-09-09', 'Tiruchirappalli (West),Tiruchi'),
(30001, 'L.SELWIN', 's/o LANDIS', 'male', '2000-07-27', 'Coimbatore West,Coimbatore.'),
(30002, 'A.EVIN', 's/o DANIEL', 'male', '1991-12-01', 'Coimbatore East,Coimbatore.'),
(30003, 'M.RADHA', 's/o SUNDAR', 'female', '2001-02-08', 'Tiruppur,Coimbatore.'),
(30004, 'K.MUTHU', 's/o PERUMAAL', 'male', '1993-07-11', 'Palladam,Coimbatore.'),
(30005, 'S.AARTHI', 's/o AADHITYA', 'female', '1998-06-28', 'Singanallur,Coimbatore.'),
(70000, 'S.BANU', 's/o BATCHA', 'female', '1998-07-04', 'Chennai North,Chennai.'),
(70001, 'N.RESHMA', 's/o SENTHIL', 'female', '2001-06-30', 'Chennai South,Chennai.'),
(70002, 'K.SANKAR', 's/o SUDAR', 'male', '1997-05-04', 'Chennai Central,Chennai.'),
(70003, 'C.NISHA', 's/o MAHADIR', 'female', '2000-04-12', 'Sriperumbudur,Chennai.'),
(70004, 'P.ANBU', 's/o SHANKAR', 'male', '1993-08-31', 'Thiruvallur,Chennai.'),
(100072, 'N.PANDEY', 's/o MOORTHI', 'male', '2000-07-26', 'melur,madurai.'),
(100073, 'V.GOKULESH', 's/o UDAI', 'male', '1991-08-03', 'maduraisouth, madurai'),
(100074, 'A.SHANMUGAM', 's/o PIITCHAI', 'male', '2001-07-29', 'manamadurai, sivagangai'),
(100075, 'L.RATHIKA', 's/o ELANGO', 'female', '1990-05-10', 'melur,madurai.'),
(100077, 'S.BANU', 's/o BATCHA', 'female', '1998-07-04', 'melur,madurai.'),
(100078, 'N.GANAPATHY', 's/o SUBRAMANIAM', 'male', '2000-04-20', 'madurainorth, madurai'),
(100079, 'K.VENKAT', 's/o THARUN', 'male', '1994-07-08', 'Thiruverumbur,Tiruchirappalli.');

-- --------------------------------------------------------

--
-- Table structure for table `testvote`
--

CREATE TABLE `testvote` (
  `id` int(10) NOT NULL,
  `Voter_id_no` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testvote`
--

INSERT INTO `testvote` (`id`, `Voter_id_no`) VALUES
(1, 10001),
(2, 10006),
(3, 10003),
(4, 11005),
(5, 11001),
(6, 11004),
(7, 10005),
(8, 11002),
(9, 10004),
(11, 11003),
(12, 0),
(13, 0),
(14, 0),
(15, 10002),
(16, 100078);

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `id` int(10) NOT NULL,
  `voted_for` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`id`, `voted_for`) VALUES
(1, 'ADMK'),
(2, 'DMK'),
(3, 'NTK'),
(4, 'MNM'),
(5, 'BJP'),
(6, 'NOTA'),
(7, 'ADMK'),
(8, 'NTK'),
(9, 'ADMK'),
(12, ''),
(13, 'MNM'),
(14, ''),
(15, ''),
(16, ''),
(17, ''),
(18, ''),
(19, ''),
(20, ''),
(21, ''),
(22, ''),
(23, ''),
(24, ''),
(25, ''),
(26, 'BJP'),
(27, ''),
(28, ''),
(29, ''),
(30, ''),
(31, ''),
(32, ''),
(33, ''),
(34, ''),
(35, ''),
(36, ''),
(37, ''),
(38, ''),
(39, ''),
(40, ''),
(41, ''),
(42, ''),
(43, ''),
(44, ''),
(45, ''),
(46, ''),
(47, ''),
(48, ''),
(49, ''),
(50, ''),
(51, ''),
(52, ''),
(53, ''),
(54, ''),
(55, ''),
(56, ''),
(57, ''),
(58, ''),
(59, ''),
(60, ''),
(61, ''),
(62, ''),
(63, ''),
(64, ''),
(65, ''),
(66, ''),
(67, ''),
(68, ''),
(69, ''),
(70, ''),
(71, ''),
(72, ''),
(73, ''),
(74, ''),
(75, ''),
(76, ''),
(77, ''),
(78, ''),
(79, ''),
(80, ''),
(81, ''),
(82, ''),
(83, ''),
(84, ''),
(85, ''),
(86, ''),
(87, ''),
(88, ''),
(89, ''),
(90, ''),
(91, ''),
(92, ''),
(93, ''),
(94, ''),
(95, ''),
(96, ''),
(97, ''),
(98, ''),
(99, ''),
(100, ''),
(101, ''),
(102, ''),
(103, ''),
(104, ''),
(105, ''),
(106, ''),
(107, ''),
(108, ''),
(109, ''),
(110, ''),
(111, ''),
(112, ''),
(113, ''),
(114, ''),
(115, ''),
(116, ''),
(117, ''),
(118, ''),
(119, ''),
(120, ''),
(121, ''),
(122, ''),
(123, ''),
(124, ''),
(125, ''),
(126, ''),
(127, ''),
(128, ''),
(129, ''),
(130, ''),
(131, ''),
(132, ''),
(133, ''),
(134, ''),
(135, ''),
(136, ''),
(137, ''),
(138, ''),
(139, ''),
(140, ''),
(141, ''),
(142, 'BJP'),
(143, ''),
(144, 'NOTA'),
(145, ''),
(146, ''),
(147, ''),
(148, ''),
(149, ''),
(150, ''),
(151, 'NTK'),
(152, ''),
(153, ''),
(154, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkdetails`
--
ALTER TABLE `checkdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testvote`
--
ALTER TABLE `testvote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkdetails`
--
ALTER TABLE `checkdetails`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100080;

--
-- AUTO_INCREMENT for table `testvote`
--
ALTER TABLE `testvote`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
