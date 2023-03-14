-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 02:07 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elite_auto_selection`
--

-- --------------------------------------------------------

--
-- Table structure for table `assortiment`
--

CREATE TABLE `assortiment` (
  `productcode` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `jaartal` int(11) NOT NULL,
  `kilometers` varchar(11) NOT NULL,
  `prijs` varchar(10) NOT NULL,
  `omschrijving` varchar(255) NOT NULL,
  `foto1` varchar(255) NOT NULL,
  `foto2` varchar(255) NOT NULL,
  `foto3` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assortiment`
--

INSERT INTO `assortiment` (`productcode`, `product`, `jaartal`, `kilometers`, `prijs`, `omschrijving`, `foto1`, `foto2`, `foto3`, `created_at`, `updated_at`) VALUES
(1, 'Lamborghini Murcielago', 2007, '7.000 km', '€309.402', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'lambo_m1.jpg', 'lambo_m2.jpg', 'lambo_m3.jpg', '2023-03-14', '2023-03-14'),
(2, 'Porsche 911 Turbo S Cabriolet', 2023, '50.000 km', '€265.000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'porsche1.png', 'porsche2.png', 'porsche3.png', '2023-03-14', '2023-03-14'),
(3, 'Bugatti Chiron AWD', 2018, '200 km', '€2.600.000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'bugatti1.png', 'bugatti2.png', 'bugatti3.png', '2023-03-14', '2023-03-14'),
(4, 'Ferrari 812 Superfast RWD', 2019, '8.000 km', '€436.280', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'ferrari1.png', 'ferrari2.png', 'ferrari3.png', '2023-03-14', '2023-03-14'),
(5, 'McLaren P1 GTR', 2020, '20.000 km', '€2.450.000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'mclaren1.png', 'mclaren2.png', 'mclaren3.png', '2023-03-14', '2023-03-14'),
(6, 'Mercedes-Benz AMG GT', 2020, '20.000 km', '€179.814', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'mercedes1.png', 'mercedes2.png', 'mercedes3.png', '2023-03-14', '2023-03-14'),
(7, 'Pagani Huayra', 2020, '20.000 km', '€2.809.144', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'pagani1.png', 'pagani2.png', 'pagani3.png', '2023-03-14', '2023-03-14'),
(8, 'Lamborghini Veneno', 2020, '20.000 km', '€8.891.642', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'lambo_v1.png', 'lambo_v2.png', 'lambo_v3.png', '2023-03-14', '2023-03-14');

-- --------------------------------------------------------

--
-- Table structure for table `bestelling`
--

CREATE TABLE `bestelling` (
  `artikelcode` int(255) NOT NULL,
  `winkelcode` int(255) NOT NULL,
  `aantal` int(255) NOT NULL,
  `klantcode` int(255) NOT NULL,
  `medewerkerscode` int(255) NOT NULL,
  `afgehaald` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `klanten`
--

CREATE TABLE `klanten` (
  `klantcode` int(11) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `woonplaats` varchar(255) NOT NULL,
  `geboortedatum` date NOT NULL,
  `gebruikersnaam` varchar(255) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL,
  `profielfoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klanten`
--

INSERT INTO `klanten` (`klantcode`, `voornaam`, `achternaam`, `email`, `adres`, `postcode`, `woonplaats`, `geboortedatum`, `gebruikersnaam`, `wachtwoord`, `profielfoto`) VALUES
(1, 'patrick', 'agra', 'test@email.com', 'Sesamstraat 123', '1234AB', 'Amsterdam', '1998-06-10', 'patrick', '$2y$04$2QvmWrucFwqV.l0tBhivP.nE02DX4/nE9BpOybhhZZJBotEtUc1qG', ''),
(2, 'test', 'test2', 'email@email.com', 'teststraat1', '1234AB', 'teststad', '2023-03-14', 'testuser', '$2y$04$xMjibMCHXmCu1FqVfd4Ca.s/mu5VN31fhJKmIXTgZHGBrmEUFR1Ie', '');

-- --------------------------------------------------------

--
-- Table structure for table `medewerkers`
--

CREATE TABLE `medewerkers` (
  `medewerkercode` int(255) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assortiment`
--
ALTER TABLE `assortiment`
  ADD PRIMARY KEY (`productcode`);

--
-- Indexes for table `bestelling`
--
ALTER TABLE `bestelling`
  ADD PRIMARY KEY (`artikelcode`);

--
-- Indexes for table `klanten`
--
ALTER TABLE `klanten`
  ADD PRIMARY KEY (`klantcode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assortiment`
--
ALTER TABLE `assortiment`
  MODIFY `productcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bestelling`
--
ALTER TABLE `bestelling`
  MODIFY `artikelcode` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `klanten`
--
ALTER TABLE `klanten`
  MODIFY `klantcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
