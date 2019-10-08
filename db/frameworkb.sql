-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2019 at 06:59 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiuser_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `log_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `activity TEXT` varchar(255) DEFAULT NULL,
  `module` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `role` varchar(25) DEFAULT NULL,
  `status` tinyint(25) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `name`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Admin', 'admin', 1, '2019-10-12 12:07:57', '2019-10-03 01:24:24'),
(2, 'operatortf@admin.com', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Operator TF', 'operator_tf', 1, '2019-10-12 04:14:51', '2019-10-02 20:08:43'),
(3, 'operatorsi@admin.com', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Operator SI', 'operator_si', 1, '2017-01-12 12:07:57', '2019-10-02 20:09:21'),
(4, 'tesadmin@admin.com', 'd78e3d96e8c36dce79f169101392b992', 'tesadmin', 'admin', 0, '2019-10-03 02:01:19', '2019-10-03 15:13:04'),
(5, 'tesadmincuy@admin.com', '938670ef83f58da849f8d16d1150812e', 'tesadmincuy', 'admin', 0, '2019-10-03 16:52:44', '2019-10-03 15:12:57'),
(6, 'adminanyar@admin.com', '66d8e51960558531feadcb031cdfc1a4', 'adminanyar', 'admin', 1, '2019-10-03 16:58:30', NULL),
(7, 'tesadmin@admin.com', '73d37fafdc4fdbabd2f706b57624a1fa', 'tes', 'admin', 0, '2019-10-03 17:13:21', '2019-10-03 15:15:04'),
(8, 'tesadmin@admin.com', '30f0302cc8d3b11987eb73b73f54161f', 'tes', 'admin', 0, '2019-10-03 17:15:24', '2019-10-03 15:38:25'),
(9, 'aceracelol1000@gmail.com', '112e55c1a9293ad67c6da78c839594b0', 'aceadmin', 'admin', 0, '2019-10-03 17:23:17', '2019-10-03 15:36:31'),
(10, 'aceracelol1000@gmail.com', 'd8640adeb5a73911a912bfc8a267f4e2', 'ace', 'admin', 0, '2019-10-03 17:36:46', '2019-10-03 15:38:31'),
(11, 'aceracelol1000@gmail.com', 'a10da43ae23a779d8c18c1617c8894bf', 'ace', 'admin', 0, '2019-10-03 17:38:45', '2019-10-03 15:42:49'),
(12, 'aceracelol1000@gmail.com', 'ca6bbde31fff7bac725cf3fa21d40931', 'ace', 'admin', 1, '2019-10-03 17:43:07', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
