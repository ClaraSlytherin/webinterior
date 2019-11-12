-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 01:03 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ruangrespons`
--
CREATE DATABASE IF NOT EXISTS `ruangrespons` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ruangrespons`;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE IF NOT EXISTS `data_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id`, `email`, `password`, `nama`, `is_active`) VALUES
(1, 'adminsitrator@gmail.com', 'admin', 'Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_designer`
--

CREATE TABLE IF NOT EXISTS `data_designer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `nama` int(50) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_item`
--

CREATE TABLE IF NOT EXISTS `tabel_item` (
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `nama_desain` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_item`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tabel_item`
--

INSERT INTO `tabel_item` (`id_item`, `nama_desain`, `gambar`, `deskripsi`) VALUES
(4, 'Kamar', 'hotdog.png', 'Night');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
