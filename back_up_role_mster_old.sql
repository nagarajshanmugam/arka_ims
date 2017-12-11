-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 17, 2017 at 12:25 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `arka_ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `arka_role_master`
--

CREATE TABLE IF NOT EXISTS `arka_role_master` (
  `role_id` varchar(10) NOT NULL,
  `role_name` varchar(40) NOT NULL,
  `category` varchar(40) NOT NULL,
  `record_status` tinyint(4) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` varchar(15) NOT NULL,
  `ident` tinyint(4) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ident`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `arka_role_master`
--

INSERT INTO `arka_role_master` (`role_id`, `role_name`, `category`, `record_status`, `created_date`, `created_time`, `ident`) VALUES
('UR10000', 'List Customer', 'Customer Management', 1, '2017-07-05', '12:09:01 PM', 1),
('UR10001', 'Add New Customer', 'Customer Management', 1, '2013-06-16', '05:33:26 PM', 2),
('UR10002', 'Modify Customer', 'Customer Management', 0, '2015-02-16', '05:54:44 PM', 3),
('UR10003', 'List Demo', 'Demo Management', 1, '2014-11-07', '02:29:43 AM', 4),
('UR10004', 'List Problem Tickets', 'Problem Management', 1, '2013-06-16', '06:23:12 PM', 5),
('UR10005', 'Add Problem Tickets', 'Problem Management', 1, '2013-06-16', '06:23:34 PM', 6),
('UR10006', 'Edit Problem Tickets', 'Problem Management', 1, '2013-06-16', '06:23:47 PM', 7),
('UR10007', 'Solution', 'Problem Management', 1, '2013-08-12', '04:30:58 PM', 8),
('UR10009', 'Work log', 'Problem Management', 1, '2013-08-12', '04:31:33 PM', 9),
('UR10011', 'Add New Demo', 'Demo Management', 1, '2014-11-07', '02:29:59 AM', 10),
('UR10012', 'Edit Demo', 'Demo Management', 1, '2014-11-07', '02:30:16 AM', 11),
('UR10013', 'Manage Device Payment', 'Device Management', 1, '2013-06-16', '06:29:00 PM', 12),
('UR10014', 'Manage Problem Payment', 'Problem Management', 1, '2013-06-16', '06:29:10 PM', 13),
('UR10015', 'Entitlement', 'Customer Management', 1, '2013-07-09', '11:25:14 PM', 14),
('UR10016', 'Device Payment Details', 'Device Management', 1, '2013-07-10', '05:25:12 PM', 15),
('UR10017', 'List User', 'User Management', 1, '2015-01-11', '01:24:35 PM', 16),
('UR10018', 'Add New User', 'User Management', 1, '2015-01-11', '01:24:46 PM', 17),
('UR10019', 'Edit User', 'User Management', 1, '2015-01-11', '01:24:55 PM', 18),
('UR10020', 'Demo Details', 'Demo Management', 1, '2014-11-07', '02:30:39 AM', 19),
('UR10021', 'List Employees', 'HR Management', 1, '2013-10-11', '04:26:52 PM', 20),
('UR10022', 'Ticket Open', 'Problem Management', 1, '2014-07-04', '06:14:31 PM', 21),
('UR10023', 'In Progress', 'Problem Management', 1, '2014-07-04', '06:14:41 PM', 22),
('UR10024', 'SLA Hold', 'Problem Management', 1, '2014-07-04', '06:15:01 PM', 23),
('UR10025', 'Resolved', 'Problem Management', 1, '2014-07-04', '06:15:17 PM', 24),
('UR10026', 'Rejected', 'Problem Management', 1, '2014-07-04', '06:15:32 PM', 25),
('UR10027', 'Ticket Close', 'Problem Management', 1, '2014-07-04', '06:16:22 PM', 26),
('UR10028', 'Confirmed', 'Problem Management', 1, '2014-07-04', '06:16:35 PM', 27),
('UR10029', 'List My Tickets', 'Problem Management', 1, '2014-09-04', '09:20:53 PM', 28),
('UR10030', 'Add New Service', 'Service Management', 1, '2014-11-11', '03:05:21 PM', 29),
('UR10031', 'Modify Service', 'Service Management', 1, '2014-11-11', '03:06:59 PM', 30),
('UR10032', 'List Service', 'Service Management', 1, '2014-11-11', '03:07:11 PM', 31),
('UR10033', 'List Customer Remarks', 'Customer Management', 1, '2014-11-18', '12:41:15 PM', 32),
('UR10034', 'Add New Customer Remarks', 'Customer Management', 1, '2014-11-18', '12:44:26 PM', 33),
('UR10035', 'Add New Vendor', 'General Management', 1, '2015-01-06', '10:51:52 PM', 34),
('UR10036', 'List Vendors', 'General Management', 1, '2015-01-11', '01:13:56 PM', 35),
('UR10037', 'Edit Vendor', 'General Management', 1, '2015-01-06', '10:52:15 PM', 36),
('UR10038', 'Add New Insurance', 'General Management', 1, '2015-01-06', '10:52:51 PM', 37),
('UR10039', 'List Insurance', 'General Management', 1, '2015-01-06', '10:53:13 PM', 38),
('UR10040', 'Edit Insurance', 'General Management', 1, '2015-01-06', '10:54:13 PM', 39),
('UR10041', 'Add New Phone', 'General Management', 1, '2015-01-06', '10:54:45 PM', 40),
('UR10042', 'List Phone', 'General Management', 1, '2015-01-11', '01:15:15 PM', 41),
('UR10043', 'Edit Phone', 'General Management', 1, '2015-01-06', '10:55:38 PM', 42),
('UR10044', 'Add New Rent', 'General Management', 1, '2015-01-06', '10:56:28 PM', 43),
('UR10045', 'List Rent', 'General Management', 1, '2015-01-11', '01:15:36 PM', 44),
('UR10046', 'Edit Rent', 'General Management', 1, '2015-01-06', '10:57:31 PM', 45),
('UR10047', 'Add New Advance', 'General Management', 1, '2015-01-06', '11:00:14 PM', 46),
('UR10048', 'List Advance', 'General Management', 1, '2015-01-06', '11:00:27 PM', 47),
('UR10049', 'Edit Advance', 'General Management', 1, '2015-01-06', '11:00:48 PM', 48),
('UR10050', 'Add New Payment Pending', 'General Management', 1, '2015-01-11', '01:18:38 PM', 49),
('UR10051', 'List Payment Pending', 'General Management', 1, '2015-01-11', '01:20:06 PM', 50),
('UR10052', 'Edit Payment Pending', 'General Management', 1, '2015-01-11', '01:19:12 PM', 51),
('UR10053', 'Add New Note', 'Note Management', 1, '2015-01-12', '11:17:25 AM', 52),
('UR10054', 'List Notes', 'Note Management', 1, '2015-01-12', '11:17:48 AM', 53),
('UR10055', 'Modify Stock', 'Stock Management', 1, '2015-03-21', '01:17:40 PM', 54),
('UR10056', 'Modify Price', 'Stock Management', 1, '2015-03-21', '01:19:34 PM', 55),
('UR10057', 'Modify Remarks', 'Remarks Management', 1, '2015-03-23', '02:59:04 PM', 56),
('UR10058', 'Delete User', 'Development', 1, '2017-08-03', '07:37:42 PM', 57),
('UR10059', 'Edit Pack', 'Pack Mgmt', 1, '2017-08-09', '01:14:25 PM', 58),
('UR10060', 'Delete Pack', 'Pack Mgmt', 1, '2017-08-09', '01:19:34 PM', 59),
('UR10061', 'Pack Detail', 'Pack Mgmt', 1, '2017-08-09', '01:20:44 PM', 60),
('UR10062', 'Add Pack', 'Pack Mgmt', 1, '2017-08-09', '03:28:41 PM', 61),
('UR10063', 'Delete User', 'User Management', 1, '2017-08-09', '03:47:22 PM', 62);
