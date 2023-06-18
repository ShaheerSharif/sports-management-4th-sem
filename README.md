# Sports Management System

## Software Engineering (4th Semester)
## Sir Syed University Of Engineering & Technology

### Group Members

| Name                | Roll no       | Section |
| ------------------- | ------------- | ------- |
| M. Shaheer Sharif   | 2021F-BCE-218 | B       |
| Sheikh Mummad Hamza | 2021F-BCE-255 | B       |
| Syed Muzaffar Raza  | 2021F-BCE-057 | B       |

<br>

+ The name of the database is `sport` . The name of the sql file is `sport.sql` located in the `src` folder.
+ All the php files are located in the `src/php` folder.
+ Given below are all the sql queries. They can also be found in `src/sport.sql` file.

#### Software Requirements
+ `PHP` version 8
+ `XAMPP` version 3.3

<br>

``` sql
-- FILE NAME : sport.sql

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 04:06 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sport`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uname` text NOT NULL,
  `pwd` varchar(8) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `pwd`, `id`) VALUES
('Shaheer', '71203', 1),
('Hamza', '12345', 3),
('Muzaffar', '67890', 4);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `sport_name` varchar(255) DEFAULT NULL,
  `venue_address` text DEFAULT NULL,
  `starting_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `event_name`, `sport_name`, `venue_address`, `starting_date`, `end_date`, `price`) VALUES
(1, 'Cricket Auditions SSUET 2023', 'Cricket', 'ST-16 Main University Rd, Block 5 Gulshan-e-Iqbal, Karachi, Karachi City, Sindh', '2023-06-30', '2023-07-10', 5000),
(2, 'Event 2', 'Hockey', 'SSUET', '2023-07-01', '2023-07-01', 150);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

```
