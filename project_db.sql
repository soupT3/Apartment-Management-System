-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 01, 2021 at 02:25 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `maintenanceRequests`
--

CREATE TABLE `maintenanceRequests` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `apartmentNumber` int(11) NOT NULL,
  `priority` varchar(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `maintenanceRequests`
--

INSERT INTO `maintenanceRequests` (`id`, `name`, `email`, `apartmentNumber`, `priority`, `category`, `description`) VALUES
(1, 'Supriya', 'stiwari3@scu.edu', 403, 'normal', 'bathroom', 'Leaky faucet'),
(2, 'Gautham', 'gasok@gmail.com', 197, 'normal', 'kitchen', 'Sink blockage'),
(3, 'Mansi', 'mansi@gmail.com', 210, 'high', 'kitchen', 'Microwave oven is not working.'),
(4, 'Moushumi', 'moushumi@gmail.com', 545, 'normal', 'lighting', 'Kitchen bulbs are dead.'),
(5, 'Josh', 'josh@gmail.com', 635, 'low', 'other', 'Blinds in the bedroom need to be replaced.'),
(6, 'Tanay', 'tanay@gmail.com', 304, 'normal', 'appliances', 'Drier makes harsh noise.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userType` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userType`, `firstName`, `lastName`, `email`, `password`) VALUES
('admin', 'Monica', 'Jain', 'mjain3@scu.edu', '123456'),
('resident', 'Supriya', 'Tiwari', 'stiwari3@scu.edu', '123456'),
('visitor', 'Nivethitha', 'Ramachandar', 'nramachandar@scu.edu', '123456'),
('resident', 'Mansi', 'Rathi', 'mansi@gmail.com', '123456'),
('resident', 'Moushumi', 'Bhattacharya', 'moushumi@gmail.com', '123456'),
('resident', 'Josh', 'K', 'josh@gmail.com', '123456'),
('resident', 'Tanay', 'Tiwari', 'tanay@gmail.com', '123456'),
('resident', 'Gautham', 'Asok', 'gasok@gmail.com', '123456'),
('admin', 'Raghav', 'R', 'raghav@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `visitorRequests`
--

CREATE TABLE `visitorRequests` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `floorPlan` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `visitTime` varchar(10) NOT NULL,
  `visitDate` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visitorRequests`
--

INSERT INTO `visitorRequests` (`id`, `name`, `email`, `floorPlan`, `phone`, `visitTime`, `visitDate`, `description`) VALUES
(1, 'Nivethitha', 'nramachandar@scu.edu', 'Plan-1', '123-456-7890', '10:00 am', '10/31/2021', 'Hi, looking forward to visiting the community!'),
(2, 'Leo', 'Leo@gmail.com', 'Plan-2', '456-789-1230', '11:00 am', '10/31/2021', ''),
(3, 'Peter', 'peter@gmail.com', 'Plan-3', '789-123-4560', '3:00 pm', '10/31/2021', 'Hi, is vaccination proof required for in-person tours?'),
(4, 'Shruti', 'shruti@gmail.com', 'Plan-1', '765-122-3450', '11:00 am', '11/3/2021', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maintenanceRequests`
--
ALTER TABLE `maintenanceRequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitorRequests`
--
ALTER TABLE `visitorRequests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maintenanceRequests`
--
ALTER TABLE `maintenanceRequests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `visitorRequests`
--
ALTER TABLE `visitorRequests`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
