-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2018 at 11:41 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `cash`
--

DROP TABLE IF EXISTS `cash`;
CREATE TABLE IF NOT EXISTS `cash` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_no` int(16) NOT NULL,
  `c_name` varchar(64) NOT NULL,
  `c_date` date NOT NULL,
  `c_receive` int(11) NOT NULL,
  `c_issue` int(11) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=120 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash`
--

INSERT INTO `cash` (`c_id`, `c_no`, `c_name`, `c_date`, `c_receive`, `c_issue`) VALUES
(116, 2, 'mmm', '2018-06-04', 0, 1000),
(117, 3, 'mmm', '2018-05-23', 10000, 0),
(118, 4, 'mmm', '2018-05-04', 0, 1000),
(119, 5, 'mm', '2018-06-04', 0, 1000),
(115, 1, 'mmm', '2018-06-04', 10000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

DROP TABLE IF EXISTS `emp`;
CREATE TABLE IF NOT EXISTS `emp` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `etf_no` int(11) NOT NULL,
  `emp_name` varchar(64) NOT NULL,
  `section` varchar(3) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`emp_id`, `etf_no`, `emp_name`, `section`) VALUES
(1, 10, 'UV NIMALSIRI', 'A'),
(2, 21, 'S ILANGOVAN', 'A'),
(3, 49, 'UV WIMALSIRI', 'A'),
(4, 115, 'PKD BUDDIKA CHANDRAKUMARA', 'A'),
(5, 133, 'HP LIONEL', 'A'),
(6, 134, 'CT  JAYASEKARA', 'A'),
(7, 135, 'LDR LASANTHA', 'A'),
(8, 151, 'LARB PRASANNA', 'A'),
(9, 152, 'MDSU KUMARA', 'A'),
(10, 153, 'BDK KUMARA', 'A'),
(11, 157, 'BN  SILVA', 'A'),
(12, 158, 'EMSK  PRIYADARSHANA', 'A'),
(13, 160, 'WADS WEERATHUNGA', 'A'),
(14, 174, 'PAM GUNATHILAKA', 'A'),
(15, 181, 'MG ATHULA', 'A'),
(16, 187, 'HHAP CHANDRARATHNE', 'A'),
(17, 200, 'UVDS  PERERA', 'A'),
(18, 216, 'RAD PRIYANGANI', 'A'),
(19, 223, 'GT SOMAWATHI', 'A'),
(20, 233, 'G  WIMALASENA', 'A'),
(21, 240, 'HG LEELARATHNA', 'A'),
(22, 241, 'WAC GUNARATHNA', 'A'),
(23, 249, 'EG  KALYANAWATHIE', 'A'),
(24, 266, 'HGS  THILAKARATHNE', 'A'),
(25, 286, 'S GANESHAN', 'A'),
(26, 298, 'KMDP PERERA', 'A'),
(27, 310, 'RA  SOMAPALA', 'A'),
(28, 334, 'WT JEYACHANDRAN', 'A'),
(29, 342, 'DGCL THILAKASIRI', 'A'),
(30, 345, 'FSC PERERA', 'A'),
(31, 351, 'KD ARIYADASA', 'A'),
(32, 353, 'PR PREMALAL', 'A'),
(33, 354, 'S KALAICHELVAM', 'A'),
(34, 355, 'K  JAYANTHI', 'A'),
(35, 365, 'US RANJITH', 'A'),
(36, 379, 'MG SUSANTHA', 'B'),
(37, 380, 'WDSJ VITHANE', 'B'),
(38, 384, 'MV  PRAKASH', 'B'),
(39, 389, 'RMK  RATHNATHILAKA', 'B'),
(40, 391, 'M SIVASAMY', 'B'),
(41, 394, 'PPM PRANANDU', 'B'),
(42, 396, 'SA PRASAD', 'B'),
(43, 401, 'KA  RASIKA KUMARA', 'B'),
(44, 402, 'KA  CHANDANA PRADEEP', 'B'),
(45, 405, 'DMS MADUSANKA', 'B'),
(46, 407, 'DMI PRADEEP', 'B'),
(47, 416, 'W ANURA SUSANTHA', 'B'),
(48, 423, 'NMJ GUNASEKARA', 'B'),
(49, 424, 'MP SHANTHAN', 'B'),
(50, 425, 'SK MADUSHANKA', 'B'),
(51, 426, 'MR MALKANTHI', 'B'),
(52, 435, 'A KUMARCHNDRAN', 'B'),
(53, 436, 'PANS BANDARA', 'B'),
(54, 437, 'WA PRIYANTHA', 'B'),
(55, 442, 'SDSD JAYAWARDHANA', 'B'),
(56, 444, 'KMT KUMARA', 'B'),
(57, 447, 'R LOGINI', 'B'),
(58, 450, 'V SIVAGHANAM', 'B'),
(59, 451, 'SK VIJEKOON', 'B'),
(60, 453, 'S SIVA', 'B'),
(61, 454, 'KTDJS CHANDRASIRI', 'B'),
(62, 455, 'KAAR SANJEEWA', 'B'),
(63, 456, 'S ROOBAN', 'C'),
(64, 457, 'MDP ROHINI', 'C'),
(65, 459, 'KA  SAMANTHILAKA', 'C'),
(66, 460, 'SHIVA DONAM KOKILAN', 'C'),
(67, 461, 'V  DEVAROOBAN', 'C'),
(68, 462, 'PB  JAYASIRI WIJEKOON', 'C'),
(69, 464, 'G SULOJAN', 'C'),
(70, 9001, 'MAN POWER 01', 'C'),
(71, 9002, 'MAN POWER 02', 'C'),
(72, 9003, 'MAN POWER 03', 'C'),
(73, 9004, 'MAN POWER 04', 'C'),
(74, 9005, 'MAN POWER 05', 'C'),
(75, 9006, 'MAN POWER SODA 01', 'C'),
(76, 9007, 'MAN POWER SODA 02', 'C'),
(77, 9008, 'MAN POWER SODA 03', 'C'),
(78, 9009, 'MAN POWER SODA 04', 'C'),
(79, 9010, 'MAN POWER BEEDING 01', 'C'),
(80, 9011, 'MAN POWER ANNELING 01', 'C'),
(81, 9012, 'INDIAN MUTHTHU', 'C'),
(82, 9013, 'INDIAN ANNELING', 'C'),
(83, 9015, 'K SELVAKUMAR', 'C'),
(84, 9016, 'VELANGANI', 'C'),
(85, 9017, 'MARIAPPAN', 'C'),
(86, 9018, 'MP ANU', 'C'),
(87, 9019, 'MP INOKA', 'C'),
(88, 9020, 'MP KARTHIKA', 'C'),
(89, 9021, 'MP CHANDRASIRI', 'C'),
(90, 9022, 'MP PRIYA', 'C'),
(91, 9023, 'V SUMAN', 'C'),
(92, 9024, 'G GAJUWAR', 'C'),
(93, 9025, 'S SHIVA KUMAR', 'C'),
(94, 9026, 'HPD PRADEEP KUMARA', 'C'),
(95, 9027, 'S SUBHASHINI', 'C'),
(96, 9028, 'JAYA LAKSHMI', 'C'),
(97, 9029, 'V ROOBAN', 'C'),
(98, 9030, 'KAMALESHWARAM', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `etf_no` int(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `p_address` varchar(300) NOT NULL,
  `t_address` varchar(300) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `birthday` date DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `left_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=136 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `etf_no`, `name`, `p_address`, `t_address`, `nic`, `birthday`, `join_date`, `left_date`) VALUES
(1, 10, 'Uduwa Vidanalage Nimalsiri', 'No. 67/C, Pattiwila, Gonawala, Kelaniya.', '', '683523917', '1967-12-17', '1996-01-01', '2010-02-02'),
(2, 14, 'Vijja Rupage Susantha Kumara', 'No. 707/2/A, Elhena Rd, Gonawala, Kelaniya.', '', '683603104', '1968-12-25', '1997-01-01', '0000-00-00'),
(3, 21, 'Sivalingam Ilangowan', 'No. 25/1, Raigam Estate, Upper Ingiriya, Ingiriya.', '', '691483754', '1969-05-27', '1991-08-20', '0000-00-00'),
(4, 44, 'Ramasami Ramachandran', 'No. 45, Josep Lane, Colombo 04.', '', '512522750', '1951-08-09', '1993-01-01', '0000-00-00'),
(5, 49, 'Uduwa Vidanalage Wimalsiri', 'No. 67/1, Halmulla Rd, Pattiwila, Gonawala Kelaniya.', '', '730852843', '1973-03-25', '1993-06-01', '0000-00-00'),
(6, 115, 'Pothupitiya Kankanamalage Don Buddhika Chandrakumara', 'No. 255, Bollegala, Gonawala.', '', '761930354', '1976-07-11', '1993-12-11', '0000-00-00'),
(7, 118, 'Liyanadurage Lalith Ravindra Udayakumara', 'No. 124, Kappitiwalana, Baduragoda.', '', '711081607', '1971-04-17', '2006-09-02', '2010-01-27'),
(8, 133, 'Hewapelige Lionel', 'Chandrasiri Stores, Angunna, Mussawa, Bulathkohupitiya.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '683123897', '1968-11-07', '1994-12-01', '0000-00-00'),
(9, 134, 'Chaminda Thilak Jayasekara', 'No. 98/1/C, Mahabuthgamuwa, Angoda.', '', '752611963', '1975-09-17', '1995-11-20', '0000-00-00'),
(10, 135, 'Labugamage Don Roshan Lasantha', 'No. 244/A, Weliwita, Kaduwela.', '', '770360218', '1977-02-05', '1995-12-10', '0000-00-00'),
(11, 150, 'Tyron Selwyn Smith', 'No. 285/B, Batagama South, Kandana.', '', '571993651', '1957-07-17', '1995-12-01', '0000-00-00'),
(12, 151, 'Liyana Arachchige Rohana Buddhika Prasanna', 'No. 75, Maguruwila Rd, Gonawala, Kelaniya.', '', '733052236', '1973-10-31', '1996-11-07', '0000-00-00'),
(13, 152, 'Meringnage Don Samantha Udayakumara', 'No. 109/C, Weliwita Kaduwela.', '', '722291727', '1972-08-16', '1993-07-12', '0000-00-00'),
(14, 153, 'Bothalage Don Kithsiri Kumara', 'No. 160/1, Maligagodalla Rd, Mulleriyawa New, Town.', '', '730090609', '1973-01-09', '1993-07-14', '0000-00-00'),
(15, 157, 'Balasooriyage Nishantha Silva', 'No. 685/1/D, Sapugaskanda Road, Pelengaha Hena, Gonawala.', '', '760151270', '1976-01-15', '1997-01-20', '0000-00-00'),
(16, 158, 'Eric Melvinda Susantha Kumara Priyadharshana.', 'No. 42/2, Pattiwila, Gonawala.', '', '782400568', '1978-08-27', '2009-06-09', '0000-00-00'),
(17, 160, 'Weerathunga Arachchige Dhanushka Sanjeewa Weerathunga', 'No. 85/3/C, Kurudu watte, Gonawala, Kelaniya.', '', '803581894', '1980-12-23', '1997-06-06', '0000-00-00'),
(18, 161, 'Egodawaththa Arachchilage Don Hendry Egodawatta', 'No. 138/24/A, Awariyawata, Heiyanthuduwa, Sapugaskanda.', '', '711611509', '1971-06-09', '2008-12-19', '0000-00-00'),
(19, 174, 'Panadura Arachchige Manjula Gunathilake', 'No. 696/4/A, Kandaliyadda Paluwa, Ragama.', '', '723012090', '1972-10-17', '2002-01-19', '0000-00-00'),
(20, 175, 'Jayakodi Arachchige Wimalarathne', 'No. 154/1, Pattiwila, Gonawala.', '', '582480265', '1958-09-04', '2000-01-28', '2013-09-07'),
(21, 183, 'Aththanayake Ariyadasa', 'No. 357/03, Wilimbula Watte, Mandawala Rd, Radawana.', '', '591851322', '1959-07-03', '1997-12-15', '0000-00-00'),
(22, 184, 'Hewarathnage Kulathissa', 'No. 447/1, Upper Biyanwila, Siyabalape, Kadawatha.', '', '610340261', '1961-02-03', '1998-07-20', '2011-04-29'),
(23, 186, 'Gangoda Pitiye Gedara Thilak Premasiri Gangoda', 'No. 51, Pattiwila, Gonawala.', '', '781112690', '1978-04-20', '2000-05-22', '0000-00-00'),
(24, 187, 'Hewa Hetti Amila Priyantha Chandrarathne', 'No. 378/E, Pasala Rd, Beligaswella, Urugasman Handiya.', '', '841481720', '1984-05-27', '2001-01-15', '0000-00-00'),
(25, 189, 'Kuruwita Arachchige Ajith Pushpakumara', 'No. 72/9/A, Pattiwila, Gonawala, Kelaniya.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '820804686', '1982-03-20', '2001-04-04', '2010-05-06'),
(26, 200, 'Uduwa Widanalage Damith Salinda Perera', 'No. 157/10, Dewala Rd, Makola North, Makola.', '', '821830826', '1982-07-01', '2002-01-03', '0000-00-00'),
(27, 202, 'Ranasinghe Lekamge Wasantha', 'No. 535/23/B, Kakunagahalanda Rd, Heiyanthuduwa.', '', '100000000', '1943-12-31', '1998-04-16', '2011-11-07'),
(28, 204, 'Rankiri Pathiranage Gunarathne', 'No. 318/5, Mandapitiya Rd, Colombo 14.', '', '422110631', '1942-07-22', '1999-09-16', '2011-06-08'),
(29, 205, 'Muhandiram Mudiyanselage Kelum Bandara', 'No. 166, Bogahawatte, Weliwita, Kaduwela.', 'No. 14, Detagamuwa, Katharagama.', '812692330', '1981-09-25', '2008-11-04', '0000-00-00'),
(30, 207, 'Palukkutti Arachchige Don Newton', 'No. 18/1, Makola South, Makola.', '', '562163086', '1956-03-28', '2002-07-06', '0000-00-00'),
(31, 208, 'Munugodage Lal Premasiri', 'No. 250/A/7, Fincowatte, Polgahahena Rd, Ragama.', '', '592552175', '1959-09-11', '2002-08-01', '2010-01-20'),
(32, 212, 'Dissanayakage Anne Nalani Perera', 'No. 23, Pattiwila, Gonawala.', '', '626053416', '1962-04-14', '2002-10-07', '2012-11-24'),
(33, 213, 'Kudippili Arachchige Mallika', 'No. 72/24, Pattiwila, Gonawala, Kelaniya.', '', '677973056', '1967-10-23', '2001-09-25', '0000-00-00'),
(34, 215, 'Kahandage Dona Somalatha', 'No. 72/5, Bollegala, Gonawala.', '', '568013000', '1956-10-27', '2002-01-03', '2011-12-07'),
(35, 216, 'Ranasinghe Arachchige Dammika Priyangani', 'No. 72/22, Pattiwila Rd, Gonawala, Kelaniya.', '', '786041163', '1978-04-13', '2002-03-21', '0000-00-00'),
(36, 218, 'Sanmugam Sekar', 'Ulapane watte, Ulapane.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '740884557', '1974-03-28', '2001-12-24', '0000-00-00'),
(37, 221, 'Akurugoda Gamage Sajith', 'No. 63/4, Niwanthidiya, Bokundara.', '', '731693790', '1973-06-17', '2004-04-20', '0000-00-00'),
(38, 223, 'Gammadda Kandakkarage Somawathi', 'No. 311/2/B, Makola North, Makola.', '', '596681980', '1959-06-16', '2003-06-18', '0000-00-00'),
(39, 233, 'Gamage Wimalasena', 'No. 31/1, Guruwela, Dompe.', '', '611103468', '1961-04-19', '2004-12-20', '0000-00-00'),
(40, 234, 'Abewikkrama Munasinghe Arachchige Chaminda', 'Buddiyagama, Weerakatiya.', '', '851010297', '1985-04-10', '2003-05-27', '0000-00-00'),
(41, 239, 'Thamilselwam Ramesh', '25/142, Ulapanewatte, Ulapane.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '882221555', '1988-08-09', '2008-09-01', '0000-00-00'),
(42, 240, 'Hapudeniye Gedara Leelarathne', 'No. 62, Mapakanda South, Nawalapitiya.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '872284214', '1987-08-15', '2003-11-05', '0000-00-00'),
(43, 241, 'Wikkrama Arachchige Chandra Gunarathne', 'No. 126, Mabima, Heiyanthuduwa.', '', '713333298', '1971-11-28', '2003-12-17', '0000-00-00'),
(44, 247, 'Palawattage Anura Gamini', 'No. 31/4, Pattiwila, Gonawala.', '', '663152890', '1966-11-10', '2004-01-06', '0000-00-00'),
(45, 249, 'Elhenegedara Kalyanawathi', 'No. 31, Blewood, Galaha.', '', '677722886', '1967-09-28', '2004-01-05', '0000-00-00'),
(46, 252, 'Wanni Arachchige Shanthi Mangalika', 'No. 37/3, Mabima, Heiyanthuduwa.', '', '726090289', '1972-04-18', '2004-05-25', '2015-05-05'),
(47, 253, 'Kariyapperuma Athukoralage Dona Gnanawathi', 'No. 21/1/C, Mabima, Heiyanthuduwa.', '', '605341365', '1960-02-03', '2004-05-25', '2010-09-06'),
(48, 254, 'Rajagurunnanselage Kumudu Kumari', 'No. 828, Narangoda Paluwa, Ragama.', '', '725883994', '1972-03-28', '2007-05-10', '0000-00-00'),
(49, 259, 'Subramaniyam Nawaraja', 'Osborn watte, Hatton.', '', '870523424', '1978-02-21', '2008-11-06', '2010-05-29'),
(50, 264, 'Kahatapitiye Korale Gedara Chandana Sumith Bandara', 'Ewalgolla watte, Udahenthanna, Gampola.', '', '842845149', '1984-10-10', '2004-02-06', '0000-00-00'),
(51, 265, 'Gurusami Rajasingham', '9/5/1, Ulapane watte, Ulapane.', '', '810395338', '1981-02-08', '2004-04-23', '0000-00-00'),
(52, 266, 'Hapudeniye Gedara Sampath Thilakarathne', 'No. 62, Mapakanda South, Nawalapitiya.', '', '851494600', '1956-05-28', '2004-04-23', '0000-00-00'),
(53, 276, 'Arumugam Raju Wadiwelu Nishanthan', 'Ulapane watte, Ulapane.', '', '871623040', '1987-06-10', '2007-05-03', '2014-11-07'),
(54, 277, 'Arumugam Raju Wadiwelu Prashanthan', 'Ulapane watte, Ulapane.', '', '891670818', '1989-06-15', '0000-00-00', '0000-00-00'),
(55, 278, 'Namalsiri Premalal Dahanayake', 'No. 86, Atabagahawatte, Angangoda, Payagala.', '', '650483480', '1965-02-17', '2000-01-25', '0000-00-00'),
(56, 279, 'Koggala Hewage Seeladasa', 'No. 227, Dulammahara, Piliyandala.', '', '571283220', '1957-05-07', '2002-10-16', '0000-00-00'),
(57, 286, 'Sinnamuththu Ganeshan', 'No. 386, Hadabima Colony, Peradeniya.', '', '692173830', '1969-08-04', '2006-07-16', '0000-00-00'),
(58, 287, 'Pulukutti Arachchege Don Saman Lakmal', 'No. 18, Makola South, Makola.', '', '832733300', '1983-09-29', '2006-08-11', '0000-00-00'),
(59, 289, 'Algama Koralalage Nimal Sirinanda', 'No. 136/1, Pamunuwila, Gonawala.', '', '563661496', '1956-12-31', '2006-09-28', '0000-00-00'),
(60, 292, 'Mahallage Don Prince Rohini', 'No. 260/6, Pattiwila, Gonawala.', '', '627472269', '1962-09-03', '2006-09-18', '0000-00-00'),
(61, 294, 'Lewdeni Pathirannahalage Nadeesha Kumari Karunarathne', 'No. 139/1, Makkanigoda, Pasyala.', '', '876513641', '1987-07-04', '2007-07-04', '0000-00-00'),
(62, 296, 'Gamage Symon', 'No. 191/1, Pattiwila, Gonawala, Kelaniya.', '', 'null', '2006-10-26', '2006-10-26', '2010-10-08'),
(63, 297, 'Theshe Cooray Mohottalage Shiral Lasantha Cooray', 'No. 203/2, Kandangoda South, Kuruwita.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '772263899', '2007-01-13', '2007-01-13', '2016-05-23'),
(64, 298, 'Kanakarathne Mudiyanselage Dinesh Priyashantha Perera', 'No. 255/1, Thalawathuhenpita South, Gonawala.', '', '852231980', '2007-02-13', '2007-02-13', '0000-00-00'),
(65, 299, 'Puwakpitiyage Sumanalatha', 'No. 72/14, Ovilana Rd, Pattiwila, Gonawala.', '', '587142198', '2007-01-05', '2007-01-05', '0000-00-00'),
(66, 300, 'Weerasooriya Arachchige Chandrawathi', 'No. 41/D, Mabima, Heiyanthuduwa.', '', '657372593', '2007-01-20', '2007-01-20', '0000-00-00'),
(67, 301, 'Welikala Vithanage Ranjani Welikala', 'No. 149, Heiyanthuduwa South.', '', '695103557', '1969-01-24', '2007-01-24', '2010-01-21'),
(68, 303, 'Iyangalle Badal Gedara Upananda', 'No. 86, Dnagama Colony, Mawanella.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '623083730', '2007-05-10', '2007-05-10', '0000-00-00'),
(69, 305, 'Liyanage Dammika', 'No. 14/1, Mabima Heiyanthuduwa.', '', '726070180', '2007-05-28', '2007-05-28', '2010-10-05'),
(70, 306, 'Nalendran Sasidaran', 'Ulapane watte, Ulapane.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '892332010', '2007-06-04', '2007-06-04', '0000-00-00'),
(71, 307, 'Subramaniyam Sathis Kumara', 'Ulapane watte, Ulapane.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '912094138', '2007-06-04', '2007-06-04', '0000-00-00'),
(72, 309, 'Ranasinghe Kalu Arachchilage Danushka Sanjeewa', 'No. 1/118, 16 Ela, Madana, Damana.', 'No. 192,B, Pattiwila Rd, Gonawala, Kelaniya.', '882030075', '2007-06-13', '2007-06-13', '2015-06-30'),
(73, 310, 'Rajapaksha Arachchilage Somapala', 'No. 14/1, Pattiwila, Gonawala.', '', '520870784', '1952-03-27', '2007-05-07', '0000-00-00'),
(74, 313, 'Muhandiramge Kamani Isha Kumari Gomis', 'No. 371/B, Robert Gunawardana Mw, Baththaramulla.', 'Bangalawatte, Kiribathgoda.', '756980157', '1975-07-13', '2008-07-03', '0000-00-00'),
(75, 314, 'Hewa Wasam Ederage Susantha Sunendra Kumara', 'No. 225/A, Gamage watte, Mudugamuwa, Weligama.', 'No. 4/01, Gonawala, Pattiwila.', '733592613', '1973-12-24', '2008-06-16', '0000-00-00'),
(76, 315, 'Kahandage Don Jayantha Somasiri', 'No. 107, Pattiwila, Gonawala.', '', '483631308', '1948-12-28', '2008-08-01', '0000-00-00'),
(77, 316, 'Samarasinghe Arachchige Padmini', 'No. 21/2/C, Mabima, Heiyanthuduwa.', '', '725294352', '1972-01-29', '2008-07-01', '0000-00-00'),
(78, 317, 'Kariyapperuma Athukoralage Dona Swarnalatha', 'No. 38/A, Mabima, Heiyanthuduwa.', '', '657110833', '1965-07-29', '2008-07-25', '0000-00-00'),
(79, 318, 'Sanniwela Muththaiya', 'No. 1/4, Ulapane watte, Ulapane.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '782582682', '1978-09-14', '2008-08-25', '0000-00-00'),
(80, 319, 'Sandanam David Tony', 'No. 3/2, Ulapane watte, Ulapane.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', 'null', '0000-00-00', '2008-08-25', '0000-00-00'),
(81, 321, 'Wanni Arachchige Bandula Chandralatha', 'No. 22/2, Mabima, Heiyanthuduwa.', '', '756244540', '1975-05-03', '2008-09-18', '0000-00-00'),
(82, 322, 'Maramage Dona Ariyawathi', 'No. 53/1/A, Mahawatte, Pattiwila, Gonawala.', '', '605213529', '1960-01-21', '2008-09-17', '2013-01-01'),
(83, 323, 'Weerasooriya Arachchige Somalatha', 'No. 258/6/C, Makola South, Makola.', '', '676013610', '1961-04-10', '2008-09-25', '0000-00-00'),
(84, 325, 'Sandanam David Lowrance', 'No. 2/3, Ulapanewatte, Ulapane.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '773024022', '1977-10-28', '2009-01-16', '0000-00-00'),
(85, 326, 'Algama Apuhamilage Don Priyantha Saman Kumara', 'No. 138/10/A, Pamunuwila Gonawala.', '', '710160759', '1971-01-16', '2008-11-25', '0000-00-00'),
(86, 327, 'Nalendaran Sridaran', 'Ulapane watte, Ulapane.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '922170851', '1992-08-04', '2009-03-04', '0000-00-00'),
(87, 328, 'Hetti Arachchige Prabath Indika', 'No. 30/4, Wijayarama Rd, Gonawala Kelaniya.', '', '832523602', '1983-12-17', '2009-04-04', '0000-00-00'),
(88, 329, 'Krishnamoorthi Dakshana Moorthi', 'Dewala watta, Ulapane.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '891672462', '1989-06-15', '2009-04-02', '0000-00-00'),
(89, 330, 'Susei Androos', 'Industy watte, Dikoya.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '813135700', '1981-11-10', '2009-09-01', '0000-00-00'),
(90, 331, 'Ranasinghe Arachchige Asantha Kumara Sirivardana', 'No. 138/2/1, Awariyawatta, Heiyanthuduwa.', '', '831701994', '0000-00-00', '0000-00-00', '2010-04-19'),
(91, 332, 'Polwatta Gallage Ramyalatha Karunarathne', 'No. 42/2, Mabima, Heiyanthuduwa.', '', '626210120', '1962-04-30', '2009-10-13', '0000-00-00'),
(92, 333, 'Thalwatte Don Suranga Priyadarshana', 'No. 92/5/C, Maguruwila Rd, Gonawala.', '', '822381014', '1982-08-25', '2009-10-05', '0000-00-00'),
(93, 334, 'Wadiwel Thamilselwam Jeyachandran', 'No. 1/2/A, Ulapanewatta, Ulapane.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '861764095', '1986-06-24', '2009-11-18', '0000-00-00'),
(94, 335, 'Amarakoon Ralalage Amarawathi Manike', 'No. 212/1, Yabaraluwa, Malwana.', '', '716232050', '1971-05-02', '2009-12-07', '2013-04-10'),
(95, 336, 'Wijesooriya Mudiyanselage Kosala Madushanka Wijesooriya', 'Weli Elayayagama, Higurathdamana, Hingurakgoda, Polonnaruwa.', 'No. 151/1, Padiliyathuduwa, Kelaniya.', '882023630', '0000-00-00', '0000-00-00', '0000-00-00'),
(96, 337, 'Hewa Bysage Chamikara Namal Kumara', 'No. 87/2, Maguruwila Rd, Gonawala, Kelaniya.', 'No. 85/1/B, Kuruduwatta Rd, Gonawala, Kelaniya.', '860631386', '1986-03-03', '2010-02-03', '0000-00-00'),
(97, 338, 'Wijerathna Mudiyanselage Danushka Lakmal Rohan', 'No. 23/2, Maguruwila Rd, Gonawala, Kelaniya.', '', '903623160', '1990-12-27', '2010-02-26', '0000-00-00'),
(98, 339, 'Ramaiya Vogeshwaran', 'Tea Factory, Ulapane.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '901211906', '1990-04-30', '2010-04-26', '0000-00-00'),
(99, 340, 'Rathnayake Kadu Arachchilage Udayanga Rathnayake', 'No. 1/4, Ulapane watte, Ulapane.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '921532938', '0000-00-00', '2010-04-26', '0000-00-00'),
(100, 341, 'Balasooriya Arachchige Somadasa', 'No. 592/C/A, Heiyanthuduwa North, Sapugaskanda.', '', '533460232', '1953-12-11', '2010-08-10', '0000-00-00'),
(101, 342, 'Dompe Gamage Chaminda Lal Thilakasiri', 'No. 28, Jayasiripura Janapadaya, Pathana.', '', '753050396', '1975-10-31', '2010-08-05', '0000-00-00'),
(102, 343, 'Kuda Vithanage Jayamini Sri Sampath', 'No. 01, Bandaranayake Mw, Asgiriya, Gampaha.', '', '810890916', '0000-00-00', '2011-12-27', '0000-00-00'),
(103, 344, 'Subbramaniyam Siva', 'No. 6/4, Iwalagolla watta, Udahenthanna.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '930894486', '1993-03-29', '2011-03-01', '0000-00-00'),
(104, 345, 'Fransis Sudath Chamara Perera', 'No. 6/B, Pattiwila, Gonawala.', '', '722751892', '1972-10-01', '2010-12-04', '0000-00-00'),
(105, 346, 'Jawara Gedara Sarath Kumara', 'No. 10, Ulapane watta, Ulapane.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '900863918', '1990-03-23', '2010-12-23', '0000-00-00'),
(106, 274, 'Malgammana Ariyalathge Nalika Damayanthi', 'No. 713/3, 5 Kanuwa, Nawasirigama, Rajanganaya.', '', '847903155', '0000-00-00', '2010-12-15', '0000-00-00'),
(107, 347, 'Abesinghe Mudhiyanselage Dhayani Abeysinghe', 'No. 47/2, Galnewa, Udagama.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '737163784', '1973-08-03', '2011-01-04', '0000-00-00'),
(108, 348, 'Wehallage Chithra Niroshani', 'Nellulla Janapadaya, Atbili Wewa, Monaragala.', '', '817191916', '1981-08-06', '2011-01-04', '0000-00-00'),
(109, 349, 'Kankanam Mudiyanselage Tony Kumara', 'No. 113, Ratnawila, Waliwita, Kaduwela.', '', '771783775', '1997-06-26', '2011-02-01', '0000-00-00'),
(110, 350, 'Hamshul Areef Mohomed Ithisham', 'No. 385, Warana Rd, Thihariya, Kalagedihena.', '', '892542074', '1989-09-10', '2011-06-12', '0000-00-00'),
(111, 351, 'Kahandage Don Ariyadasa', 'No. 199/1, Pattiwila, Gonawala, Kelaniya.', '', 'null', '0000-00-00', '0000-00-00', '0000-00-00'),
(112, 352, 'Krishan Liyana Arachchi', 'No. 630/1/A, Wilahena Rd, Gonawala.', '', '842691516', '1984-09-25', '2011-03-23', '0000-00-00'),
(113, 353, 'Pathiranage Rathnasiri Premalal', 'No. 77B, Jayanthi Mw, Byagama.', '', '743010221', '1974-10-27', '2011-04-18', '0000-00-00'),
(114, 354, 'Sugumar Kalaichelvam', 'Carfex Division, Hatton.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '831873248', '1983-07-05', '2010-09-01', '0000-00-00'),
(115, 355, 'Jothi Kulamadan Jayanthi', 'No. 07, Haputhale.', 'No. 173/C, Sisilpandola, Pattiwila, Gonawala, Kelaniya.', '705633622', '1970-03-03', '2011-05-02', '0000-00-00'),
(116, 356, 'Sooriyapperumalage Sarath Indika', 'No. 40/B, Pattiwila, Gonawala.', '', '780761423', '1978-03-16', '2011-05-03', '0000-00-00'),
(117, 357, 'Batagodage Kankanamlage Sarath Perera', 'No. 789, Thalangama South, Thalangama.', '', '372400676', '1937-08-27', '2011-05-11', '0000-00-00'),
(118, 358, 'Nadarajha Sathis Kumar', 'Millawitiya Watta, Rathnapura.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '923641335', '1992-12-29', '2011-07-25', '0000-00-00'),
(119, 359, 'Sellaiya Subbramanium Gajendran', 'No. 1/3/B, Ulapane watta, Ulapane.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '940690757', '1994-03-09', '2011-08-04', '0000-00-00'),
(120, 360, 'Thomas Vinstor', 'No. 88, Injestry watta, Hansi upper place, Dikoya.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '823171137', '1982-11-12', '2011-08-05', '0000-00-00'),
(121, 361, 'Kiramakkanamage Ranjith Rohana', 'No. 31/A, Wela Ihala, Handapangoda.', '', 'null', '1968-08-18', '2011-08-05', '0000-00-00'),
(122, 363, 'Raman Pushparaj', 'Catherine Divition, Nayabaddha watta, Bandarawela.', 'No. 53/3, Pattiwila Rd, Gonawala, Kelaniya.', '542281243', '1954-08-18', '2011-09-30', '0000-00-00'),
(123, 364, 'Kothalawala Gamage Tharanga Sanjeewa', 'No. 82, Koswatta Rd, Arakawila, Handapangoda.', '', '893293310', '1989-11-24', '2011-10-01', '2012-06-25'),
(124, 167, 'Ukwatte Liyanage Janaka Prabath', 'No. 53/3, Hewatte, Pattiwila, Gonawala.', '', '820140346', '1982-01-14', '0000-00-00', '0000-00-00'),
(125, 181, 'Matharaba Gamage Athula', 'No. 308, Batalahena watta, Gonawala.', '', '663603574', '1966-12-25', '2010-09-07', '0000-00-00'),
(126, 365, 'Uluwaduge Susil Ranjith', 'No. 28/A, Mabima, Heiyanthuduwa.', '', '823321465', '1982-11-27', '2012-01-16', '0000-00-00'),
(127, 366, 'Kahandawita Gamage Don Shashini Nelushika', 'No. 300, Cardinal Thomas Cooray Mw, Averiwatta Rd, Wattala.', '', '888263454', '1988-11-21', '2012-03-26', '0000-00-00'),
(128, 367, 'Mohomed Azmi Mohomed Azam', 'No. 270, Thippoththa Rd, Elabadagama.', '', '911251892', '1991-05-04', '2012-03-23', '0000-00-00'),
(129, 369, 'Wijerathna Mudiyanselage Prasanna Roshan', 'No. 23/3, Maguruwila Rd, Gonawala.', '', 'null', '0000-00-00', '2012-06-13', '0000-00-00'),
(130, 370, 'Mayalago Ramadas', 'Lucoombe Division, Maussakale, Maskeliya.', '', '820016645', '1982-01-01', '0000-00-00', '0000-00-00'),
(131, 371, 'Welu Krishna Wane', 'Petatemale, Pahala Kotasa, Haputhale.', '', 'null', '1977-11-25', '0000-00-00', '0000-00-00'),
(132, 372, 'Abeweera Patabodige Niroshan Shamika', 'No. 15/2, 3/B, Polhenawatta, Makkanigoda, Pasyala.', '', '833520903', '0000-00-00', '0000-00-00', '0000-00-00'),
(133, 373, 'Erik Melbimda Sujeewa Kumara Priyadharshana', 'No. 05, Pattiwila, Gonawala.', '', '803301450', '2010-08-12', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `inv_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `customer` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`inv_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `iou`
--

DROP TABLE IF EXISTS `iou`;
CREATE TABLE IF NOT EXISTS `iou` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_emp` int(11) NOT NULL,
  `i_date` date NOT NULL,
  `i_amt` int(11) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iou`
--

INSERT INTO `iou` (`i_id`, `i_emp`, `i_date`, `i_amt`) VALUES
(14, 135, '2018-06-04', 500),
(13, 405, '2018-05-04', 1000),
(12, 435, '2018-06-04', 1000),
(11, 435, '2018-05-04', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(30) NOT NULL,
  `weight` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `weight`, `price`) VALUES
(1, 'Dabara 32', 12, 500),
(2, 'Dabara 18', 6, 300),
(3, 'Dabara 24', 8, 400);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inv_id` int(11) NOT NULL,
  `item_code` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `total_amt` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'aruna', '8357', ''),
(2, 'telshan', '18357', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
