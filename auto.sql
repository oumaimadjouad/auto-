-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 03:26 AM
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
-- Database: `auto`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `mark` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `year` int(5) NOT NULL,
  `km` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `louer` int(11) NOT NULL,
  `disponible` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `image`, `mark`, `name`, `year`, `km`, `price`, `louer`, `disponible`) VALUES
(1, 'a1.jpg', 'audi', 'Audi A1', 2017, '20000km', '440', 2200, 1),
(3, 'a3.jpg', 'audi', 'Audi A8 ', 2020, '2000km', '700', 3500, 0),
(4, 'accent.png', 'hyundai', 'Accent ', 2018, '30000km', '500', 1500, 0),
(5, 'atos.png', 'hyundai', 'Atos ', 2017, '30000km', '100', 1200, 0),
(6, 'bmw m4.jpeg', 'bmw', 'BMWM4 ', 2021, '1000km', '780', 7000, 0),
(7, 'bmw x5.jpg', 'bmw', 'BMW X5 ', 2022, '40000km', '900', 7500, 0),
(8, 'fiat 500.jpg', 'fiat', 'Fiat 5000 ', 2023, '0km', '260', 8500, 0),
(9, 'fiat Panda.png', 'fiat', 'Fiat Panda ', 2023, '0km', '380', 8000, 0),
(10, 'Fiat Tipo.jpg', 'fiat', 'Fiat 5000 ', 2023, '0km', '480', 7500, 0),
(11, 'golf 5.jpg', 'volkswagen', 'GOLF 5', 2020, '24000km', '580', 4000, 0),
(12, 'golf 6.jpg', 'volkswagen', 'GOLF 6 ', 2017, '27000km', '400', 4500, 1),
(13, 'golf 7.jpg', 'volkswagen', 'GOLF 7 ', 2017, '294000km', '540', 5500, 0),
(14, 'golf 8.jpg', 'volkswagen', 'GOLF 8 ', 2020, '24000km', '770', 9000, 0),
(15, 'ibiza 2014.png', 'seat', 'Ibiza ', 2017, '278000km', '380', 2500, 0),
(16, 'leon 2016.jpg', 'seat', 'Leon ', 2016, '178000km', '420', 3500, 1),
(17, 'Mercedes amg.jpg', 'mercedes ', 'Mercedes Amg ', 2020, '18000km', '620', 9000, 0),
(18, 'Mercedes g class.jpg', 'mercedes ', 'Mercedes g class ', 2023, '18000km', '900', 9500, 0),
(19, 'Mercedes-Benz AMG G63.jpg', 'mercedes ', 'Mercedes-Benz AMG G63 ', 2023, '0km', '900', 9500, 0),
(20, 'polo 2010.jpg', 'volkswagen', 'POLO ', 2017, '147840km', '200', 4000, 0),
(21, 'q3.jpg', 'audi', 'Audi Q3 ', 2019, '7840km', '450', 5200, 0),
(22, 'q5.jpg', 'audi', 'Audi Q5 ', 2020, '2000km', '750', 5600, 1),
(23, 'Seat Leon Cupra.jpg', 'seat ', 'Cupra ', 2023, '1000km', '900', 7500, 0),
(24, 'yaris.jpg', 'toyota', 'Yaris ', 2022, '11000km', '400', 2500, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `numero` int(12) NOT NULL,
  `details` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_de_naissance` varchar(255) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `date_de_naissance`, `email`, `password`) VALUES
(1, '', '', '', 'admin@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `vente`
--

CREATE TABLE `vente` (
  `id` int(11) NOT NULL,
  `nom_de_la_voiture` varchar(100) NOT NULL,
  `prix` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `payer_par` varchar(5) NOT NULL,
  `duree` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vente`
--
ALTER TABLE `vente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vente`
--
ALTER TABLE `vente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
