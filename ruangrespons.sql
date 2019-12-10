-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 01:24 PM
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
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id`, `email`, `nama`, `password`, `is_active`) VALUES
(6, 'admin@gmail.com', 'administrator', '$2y$10$ZZq75HKjOYIu0hxnnoJXS.H5uoL9j..162T7zXcPXscxhG5lnnLvu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_designer`
--

CREATE TABLE IF NOT EXISTS `data_designer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `data_designer`
--

INSERT INTO `data_designer` (`id`, `email`, `nama`, `foto`, `deskripsi`) VALUES
(5, 'irhamrizaldy@gmail.com', 'Irham Rizaldy', '888171_night_512x512.png', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE IF NOT EXISTS `kategori_produk` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kategori`),
  KEY `id_kategori` (`id_kategori`),
  KEY `id_kategori_2` (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Bedroom'),
(2, 'Cafe'),
(3, 'Resepsionis'),
(4, 'Ruang Karaoke'),
(5, 'Rumah');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_item`
--

CREATE TABLE IF NOT EXISTS `tabel_item` (
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `nama_desain` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_item`),
  KEY `id_kategori` (`id_kategori`),
  KEY `id_kategori_2` (`id_kategori`),
  KEY `id_kategori_3` (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tabel_item`
--

INSERT INTO `tabel_item` (`id_item`, `id_kategori`, `nama_desain`, `gambar`, `deskripsi`) VALUES
(5, 1, 'Bedroom-1', 'BEDROM.jpg', 'Bedroom Number 1'),
(6, 2, 'Cafe-1', 'diit.jpg', 'Cafe-1'),
(7, 3, 'Resepsionis-1', 'RESEPSIONIIS.jpg', 'Resepsionis-1'),
(8, 4, 'Ruang Karaoke-1', 'RUANG_KARAOKE.jpg', 'Ruang Karaoke-1'),
(9, 5, 'Rumah-1', 'LIVING_ROOM.jpg', 'Rumah-1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_item`
--
ALTER TABLE `tabel_item`
  ADD CONSTRAINT `tabel_item_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_produk` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
