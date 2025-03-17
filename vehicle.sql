-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 06:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `sell_vehicle`
--

CREATE TABLE `sell_vehicle` (
  `VehicleType` varchar(255) NOT NULL,
  `Brand` varchar(255) NOT NULL,
  `Model` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `Variant` varchar(255) NOT NULL,
  `Kms` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `image` longblob NOT NULL,
  `price` bigint(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sell_vehicle`
--

INSERT INTO `sell_vehicle` (`VehicleType`, `Brand`, `Model`, `Year`, `Variant`, `Kms`, `state`, `image`, `price`, `user`, `id`) VALUES
('Cars', 'Maruti Suzuki', 'Celerio', '2021', 'Petrol', 'Above 100', 'Mizoram', 0x646f776e6c6f61642e6a706567, 123, 'Vineet', 20),
('Rickshaw', 'Piaggio', 'BSVI ApÃ© Auto DX', '2022', 'Petrol', '0-10', 'Arunachal Pradesh', 0x6170652d652d636974792d737761707061626c652e6a7067, 1, 'Vineet', 21);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` bigint(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phonenumber` bigint(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `fullname`, `phonenumber`, `gender`, `address`, `email`, `password`, `confirmpassword`) VALUES
(1, 'Vineet', 'Vineet Sosa', 8780497596, 'male', 'green city', 'vineet@gmail.com', '123', '123'),
(4, 'rush', 'rush', 8780497596, 'male', 'Sector26', 'ru@gmail.com', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sell_vehicle`
--
ALTER TABLE `sell_vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sell_vehicle`
--
ALTER TABLE `sell_vehicle`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
