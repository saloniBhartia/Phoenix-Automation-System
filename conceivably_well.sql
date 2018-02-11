-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 11, 2018 at 02:38 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conceivably_well`
--

-- --------------------------------------------------------

--
-- Table structure for table `birth_outcome`
--

CREATE TABLE `birth_outcome` (
  `ANC` int(11) NOT NULL,
  `delivered_any_baby` int(11) NOT NULL,
  `born_alive_female` int(11) NOT NULL,
  `born_alive_male` int(11) NOT NULL,
  `surviving_female` int(11) NOT NULL,
  `surviving_male` int(11) NOT NULL,
  `mother_age_when_baby_was_born` int(11) NOT NULL,
  `is_tubectomy` int(11) NOT NULL,
  `is_currently_preg0nt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `diabetes`
--

CREATE TABLE `diabetes` (
  `ANR_NUM` int(11) NOT NULL,
  `NumPreg` int(11) NOT NULL,
  `GlucoseCon` int(11) NOT NULL,
  `DBP` int(11) NOT NULL,
  `SkinThick` int(11) NOT NULL,
  `SerumInsulin` int(11) NOT NULL,
  `BMI` float NOT NULL,
  `PedFn` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`user_name`, `password`) VALUES
('Reception', 'Reception_admin'),
('Dr. D', 'gyanae');

-- --------------------------------------------------------

--
-- Table structure for table `maternity_mortality_rate`
--

CREATE TABLE `maternity_mortality_rate` (
  `ANC_NUM` int(11) NOT NULL,
  `Rural/Suburban` int(11) NOT NULL,
  `disability_status` int(11) NOT NULL,
  `Tobacco` int(11) NOT NULL,
  `Smoking` int(11) NOT NULL,
  `Drinking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mode_of_delivery`
--

CREATE TABLE `mode_of_delivery` (
  `ANC_NUM` int(11) NOT NULL,
  `SleepQuality` int(11) NOT NULL,
  `SleepDuration` int(11) NOT NULL,
  `Medication` int(11) NOT NULL,
  `Dysfunction` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `new_patient`
--

CREATE TABLE `new_patient` (
  `ANC_NUM` int(10) NOT NULL,
  `P_name` varchar(50) NOT NULL,
  `P_age` int(11) NOT NULL,
  `P_height` int(11) NOT NULL,
  `P_weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_patient`
--

INSERT INTO `new_patient` (`ANC_NUM`, `P_name`, `P_age`, `P_height`, `P_weight`) VALUES
(1, 'Tina', 45, 90, 67);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
