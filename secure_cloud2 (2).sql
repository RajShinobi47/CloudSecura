-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2019 at 02:37 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `secure_cloud2`
--

-- --------------------------------------------------------

--
-- Table structure for table `proxy_server`
--

CREATE TABLE IF NOT EXISTS `proxy_server` (
  `id` int(111) NOT NULL AUTO_INCREMENT,
  `sharing_id` varchar(999) NOT NULL,
  `cipher_text` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `proxy_server`
--

INSERT INTO `proxy_server` (`id`, `sharing_id`, `cipher_text`) VALUES
(1, '9', '442871'),
(2, '10', '668321'),
(3, '11', '866482'),
(4, '12', '290879'),
(5, '13', '359049'),
(6, '14', '526828'),
(7, '15', '532931'),
(8, '16', '896674'),
(9, '17', '641818'),
(10, '18', '348659'),
(11, '19', '824924'),
(12, '15', '975368'),
(13, '16', '974853'),
(14, '17', '771782'),
(15, '18', 'abhLMJAD_NkMBZanU'),
(16, '19', 'FmFBADkl_NkMBZanU'),
(17, '20', 'FmFBADkl_NkMBZanU'),
(18, '21', 'FmFBADkl_NkMBZanU'),
(19, '22', 'abhLMJAD_pWjveQkR'),
(20, '23', 'abhLMJAD_pWjveQkR'),
(21, '24', 'FmFBADkl_AjYKRYtj'),
(22, '25', 'VbUQsjti_pWjveQkR'),
(23, '26', 'FmFBADkl_NkMBZanU');
