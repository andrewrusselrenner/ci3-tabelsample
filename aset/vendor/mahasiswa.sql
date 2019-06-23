-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 07:24 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET FOREIGN_KEY_CHECKS=0;
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: "kampus"
--

-- --------------------------------------------------------

--
-- Table structure for table "mahasiswa"
--

CREATE TABLE "mahasiswa" ;

--
-- Dumping data for table "mahasiswa"
--

SET IDENTITY_INSERT "mahasiswa" ON ;
INSERT INTO "mahasiswa" ("id", "nim", "nama", "prodi") VALUES
(1, '14.02.11', 'Ayaa', 'MI'),
(2, '17.03.019', 'Jake', 'TI'),
(3, '17.17.17', 'HUGO', 'MI'),
(11, '15.12.11', 'Kyle', 'MI');

SET IDENTITY_INSERT "mahasiswa" OFF;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
