

-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2014 at 11:39 PM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailmenu`
--

CREATE TABLE IF NOT EXISTS `detailmenu` (
  `id` int(11) NOT NULL,
  `menu_id` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `title` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `caption` text COLLATE utf8_bin,
  `detail` text COLLATE utf8_bin,
  `title_eng` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `caption_eng` text COLLATE utf8_bin,
  `detail_eng` text COLLATE utf8_bin,
  `image_path` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `list_file_attach` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `del_flg` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `detailmenu`
--

