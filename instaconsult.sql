-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2015 at 07:58 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `instaconsult`
--

-- --------------------------------------------------------

--
-- Table structure for table `accepted_project`
--

CREATE TABLE IF NOT EXISTS `accepted_project` (
  `project_id` int(12) NOT NULL,
  `client_id` int(12) NOT NULL,
  `expert_id` int(12) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `display_bname` varchar(10) NOT NULL,
  `project_type` varchar(255) NOT NULL,
  `project_industry` varchar(255) NOT NULL,
  `project_intensity` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE IF NOT EXISTS `bids` (
  `project_id` int(12) NOT NULL,
  `client_id` int(12) NOT NULL,
  `expert_id` int(12) NOT NULL,
  `amount` int(12) NOT NULL,
  `proposal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cat_1`
--

CREATE TABLE IF NOT EXISTS `cat_1` (
  `project_id` int(12) NOT NULL,
  `client_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cat_2`
--

CREATE TABLE IF NOT EXISTS `cat_2` (
  `project_id` int(12) NOT NULL,
  `client_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cat_3`
--

CREATE TABLE IF NOT EXISTS `cat_3` (
  `project_id` int(12) NOT NULL,
  `client_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cat_4`
--

CREATE TABLE IF NOT EXISTS `cat_4` (
  `project_id` int(12) NOT NULL,
  `client_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client_data`
--

CREATE TABLE IF NOT EXISTS `client_data` (
  `client_id` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `open_project_id` int(12) NOT NULL,
  `closed_project_id` int(12) NOT NULL,
  `accepted_project_id` int(12) NOT NULL,
  `deadline_project_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `closed_project`
--

CREATE TABLE IF NOT EXISTS `closed_project` (
  `project_id` int(12) NOT NULL,
  `client_id` int(12) NOT NULL,
  `expert_id` int(12) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `display_bname` varchar(10) NOT NULL,
  `project_type` varchar(255) NOT NULL,
  `project_industry` varchar(255) NOT NULL,
  `project_intensity` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deadline_project`
--

CREATE TABLE IF NOT EXISTS `deadline_project` (
  `project_id` int(12) NOT NULL,
  `client_id` int(12) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `display_bname` varchar(10) NOT NULL,
  `project_type` varchar(255) NOT NULL,
  `project_industry` varchar(255) NOT NULL,
  `project_intensity` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `category` varchar(255) NOT NULL,
  `project_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expert_data`
--

CREATE TABLE IF NOT EXISTS `expert_data` (
  `expert_id` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `open_project_id` int(12) NOT NULL,
  `education` varchar(255) NOT NULL,
  `work_exp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_client`
--

CREATE TABLE IF NOT EXISTS `login_client` (
  `client_id` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_client`
--

INSERT INTO `login_client` (`client_id`, `username`, `password`) VALUES
(1, 'test1', 'test1'),
(2, 'test2', 'test2');

-- --------------------------------------------------------

--
-- Table structure for table `login_expert`
--

CREATE TABLE IF NOT EXISTS `login_expert` (
  `expert_id` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `open_project`
--

CREATE TABLE IF NOT EXISTS `open_project` (
  `project_id` int(12) NOT NULL,
  `client_id` int(12) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `display_bname` varchar(10) NOT NULL,
  `project_type` varchar(255) NOT NULL,
  `project_industry` varchar(255) NOT NULL,
  `project_intensity` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `category` varchar(255) NOT NULL,
  `project_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
