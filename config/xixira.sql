-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 05:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xixira`
--

-- --------------------------------------------------------

--
-- Table structure for table `kyc`
--

CREATE TABLE `kyc` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `id_card` varchar(500) NOT NULL,
  `selfie` varchar(500) NOT NULL,
  `date_submitted` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` varchar(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `purpose` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `sub_type` varchar(100) NOT NULL,
  `bedrooms` varchar(20) NOT NULL,
  `bathrooms` varchar(20) NOT NULL,
  `toilets` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `furnished` tinyint(1) NOT NULL DEFAULT 0,
  `serviced` tinyint(1) NOT NULL DEFAULT 0,
  `newly_built` tinyint(1) NOT NULL DEFAULT 0,
  `state` varchar(50) NOT NULL,
  `locality` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `price` varchar(11) NOT NULL,
  `currency` varchar(20) NOT NULL DEFAULT 'NGN',
  `append_to` varchar(50) NOT NULL,
  `installment_payment` tinyint(1) NOT NULL DEFAULT 0,
  `description` text NOT NULL,
  `social_media` varchar(500) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `userid`, `title`, `purpose`, `type`, `sub_type`, `bedrooms`, `bathrooms`, `toilets`, `size`, `furnished`, `serviced`, `newly_built`, `state`, `locality`, `area`, `address`, `price`, `currency`, `append_to`, `installment_payment`, `description`, `social_media`, `status`) VALUES
('261788285', 1, 'land', 'mercedes', 'Co-working Space', 'Co-working Space', '1', '1', '43', '1', 0, 1, 1, 'volvo', 'kogi', 'ewer', 'some street', '431', 'NGN', 'Month', 1, 'some descriptions', NULL, 'pending'),
('32499623', 1, '4 bedrooms', 'volvo', 'Houses', 'Houses', '4', '4', '89', '4', 1, 1, 1, 'mercedes', 'enere', 'abalo', 'some street', '45600', 'NGN', 'Year', 1, 'some text goes here', NULL, 'pending'),
('33820651', 1, '4 bedrooms', 'volvo', 'Houses', 'Houses', '4', '4', '89', '4', 1, 1, 1, 'mercedes', 'enere', 'abalo', 'some street', '45600', 'NGN', 'Year', 1, 'some text goes here', NULL, 'pending'),
('354452979', 1, '4 bedrooms', 'volvo', 'Houses', 'Houses', '4', '4', '89', '4', 1, 1, 1, 'mercedes', 'enere', 'abalo', 'some street', '45600', 'NGN', 'Year', 1, 'some text goes here', NULL, 'pending'),
('483721327', 1, '4 bedrooms', 'volvo', 'Houses', 'Houses', '4', '4', '89', '4', 1, 1, 1, 'mercedes', 'enere', 'abalo', 'some street', '45600', 'NGN', 'Year', 1, 'some text goes here', NULL, 'pending'),
('522789598', 1, 'land', 'mercedes', 'Co-working Space', 'Co-working Space', '1', '1', '43', '1', 0, 1, 1, 'volvo', 'kogi', 'ewer', 'some street', '431', 'NGN', 'Month', 1, 'some descriptions', NULL, 'pending'),
('844564170', 1, '4 bedrooms', 'volvo', 'Houses', 'Houses', '4', '4', '89', '4', 1, 1, 1, 'mercedes', 'enere', 'abalo', 'some street', '45600', 'NGN', 'Year', 1, 'some text goes here', NULL, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `property_images`
--

CREATE TABLE `property_images` (
  `id` int(11) NOT NULL,
  `property_id` varchar(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `image_link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_images`
--

INSERT INTO `property_images` (`id`, `property_id`, `userid`, `image_link`) VALUES
(1, '354452979', 1, '../../uploads/properties/IMG_20220807_183836_443.jpg'),
(2, '354452979', 1, '../../uploads/properties/IMG_20220807_183840_483.jpg'),
(3, '354452979', 1, '../../uploads/properties/IMG_20220807_183841_408.jpg'),
(4, '354452979', 1, '../../uploads/properties/IMG_20220807_183845_873.jpg'),
(5, '354452979', 1, '../../uploads/properties/IMG_20220807_183846_821.jpg'),
(6, '354452979', 1, '../../uploads/properties/IMG_20220807_183841_408.jpg'),
(7, '354452979', 1, '../../uploads/properties/IMG_20220807_183845_873.jpg'),
(8, '354452979', 1, '../../uploads/properties/IMG_20220807_183846_821.jpg'),
(9, '354452979', 1, '../../uploads/properties/Screenshot_20201108-192752.png'),
(10, '354452979', 1, '../../uploads/properties/Screenshot_20201108-192827.png'),
(11, '354452979', 1, '../../uploads/properties/x.jpg'),
(12, '354452979', 1, '../../uploads/properties/Screenshot_20201108-192752.png'),
(13, '354452979', 1, '../../uploads/properties/Screenshot_20201108-192827.png'),
(14, '354452979', 1, '../../uploads/properties/x.jpg'),
(15, '354452979', 1, '../../uploads/properties/Screenshot_20201108-192752.png'),
(16, '354452979', 1, '../../uploads/properties/Screenshot_20201108-192827.png'),
(17, '354452979', 1, '../../uploads/properties/x.jpg'),
(18, '354452979', 1, '../../uploads/properties/background.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `table_admin`
--

CREATE TABLE `table_admin` (
  `id` int(20) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `file` varchar(567) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_admin`
--

INSERT INTO `table_admin` (`id`, `name`, `email`, `username`, `password`, `file`) VALUES
(1, 'Awolu Faith', 'awolu_faith@live.com', 'admin', 'admin', ''),
(3, 'AdegbemiGa Y1', 'atme@you.u', 'Alagbaka', 'mememem', 'efac_d8ba6926d6b1c5c485411c9f99a948a0.png'),
(4, 'tester', 'tester@dispostable.com', 'tester', 'tester1', 'efac_b8b0d7464b55213c435110abcb5e2e45.php');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `accttype` varchar(20) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `vcode` varchar(10) NOT NULL,
  `vstatus` varchar(10) NOT NULL DEFAULT 'Pending',
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `password`, `accttype`, `phone_number`, `vcode`, `vstatus`, `created_date`) VALUES
(1, 'godwin', 'cidus@gmail.com', '123456', 'volvo', '8127087575', '295997347', 'Pending', '2023-05-13 16:40:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kyc`
--
ALTER TABLE `kyc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_images`
--
ALTER TABLE `property_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_admin`
--
ALTER TABLE `table_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kyc`
--
ALTER TABLE `kyc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `table_admin`
--
ALTER TABLE `table_admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
