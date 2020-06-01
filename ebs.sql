-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2020 m. Geg 31 d. 14:27
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebs`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `infosa_council`
--

CREATE TABLE `infosa_council` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `council` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `infosa_council`
--

INSERT INTO `infosa_council` (`id`, `user`, `council`) VALUES
(81, 'Patrikas', 'Patricija Petė'),
(82, 'Patrikas', 'Hana Bana'),
(83, 'Patrikas', 'Montana Krysko'),
(84, 'Rosita', 'Tomas Blužas'),
(85, 'Rosita', 'Hana Bana'),
(86, 'Rosita', 'Montana Krysko'),
(87, 'admin', 'Tomas Blužas'),
(88, 'admin', 'Patricija Petė'),
(89, 'admin', 'Tomas Blužas'),
(90, 'admin', 'Hana Bana'),
(91, 'admin', 'Montana Krysko'),
(92, 'Ignas', 'Tomas Blužas'),
(93, 'Ignas', 'Hana Bana'),
(94, 'Ignas', 'Montana Krysko');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `infosa_delegate`
--

CREATE TABLE `infosa_delegate` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `delegate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `infosa_delegate`
--

INSERT INTO `infosa_delegate` (`id`, `user`, `delegate`) VALUES
(167, 'Patrikas', 'Ina Inaitė'),
(168, 'Patrikas', 'Ona Onaitė'),
(169, 'Patrikas', 'Jonas Jonaitis'),
(170, 'Patrikas', 'Paulė Paulaitė'),
(171, 'Patrikas', 'Toma Tomaitė'),
(172, 'Patrikas', 'Eglė Eglaitė'),
(173, 'Patrikas', 'Sima Simaitė'),
(174, 'Patrikas', 'Rita Ritaitė'),
(175, 'Patrikas', 'Rasa Rasaitė'),
(176, 'Rosita', 'Ina Inaitė'),
(177, 'Rosita', 'Ona Onaitė'),
(178, 'Rosita', 'Jonas Jonaitis'),
(179, 'Rosita', 'Paulė Paulaitė'),
(180, 'Rosita', 'Eglė Eglaitė'),
(181, 'Rosita', 'Sima Simaitė'),
(182, 'Rosita', 'Rita Ritaitė'),
(183, 'Rosita', 'Rasa Rasaitė'),
(184, 'Rosita', 'Ūkas Ūkaitis'),
(185, 'admin', 'Ina Inaitė'),
(186, 'admin', 'Ona Onaitė'),
(187, 'admin', 'Jonas Jonaitis'),
(188, 'admin', 'Paulė Paulaitė'),
(189, 'admin', 'Toma Tomaitė'),
(190, 'admin', 'Eglė Eglaitė'),
(191, 'admin', 'Sima Simaitė'),
(192, 'admin', 'Rita Ritaitė'),
(193, 'admin', 'Ūkas Ūkaitis'),
(194, 'Ignas', 'Ina Inaitė'),
(195, 'Ignas', 'Ona Onaitė'),
(196, 'Ignas', 'Jonas Jonaitis'),
(197, 'Ignas', 'Paulė Paulaitė'),
(198, 'Ignas', 'Toma Tomaitė'),
(199, 'Ignas', 'Eglė Eglaitė'),
(200, 'Ignas', 'Sima Simaitė'),
(201, 'Ignas', 'Rita Ritaitė'),
(202, 'Ignas', 'Rasa Rasaitė');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `infosa_tvirtinimas`
--

CREATE TABLE `infosa_tvirtinimas` (
  `user` varchar(100) NOT NULL,
  `options` varchar(20) NOT NULL,
  `candidate` varchar(100) NOT NULL,
  `options1` varchar(20) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `infosa_tvirtinimas`
--

INSERT INTO `infosa_tvirtinimas` (`user`, `options`, `candidate`, `options1`, `rating`) VALUES
('admin', 'Tvirtinu', 'Lina Linaitė', 'Tvirtinu', 4),
('Ignas', 'Netvirtinu', 'Ana Ananaitė', 'Tvirtinu', 10),
('Patrikas', 'Tvirtinu', 'Lina Linaitė', 'Tvirtinu', 10),
('Rosita', 'Tvirtinu', 'Paulė Paulaitė', 'Tvirtinu', 4);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `prisijungimas`
--

CREATE TABLE `prisijungimas` (
  `vardas` varchar(255) NOT NULL,
  `slaptazodis` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `prisijungimas`
--

INSERT INTO `prisijungimas` (`vardas`, `slaptazodis`, `ID`) VALUES
('admin', 'asdsada', 1),
('Ignas', 'dainys', 2),
('Patrikas', '123', 3),
('Rosita', '123', 4);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `vivat_council`
--

CREATE TABLE `vivat_council` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `council` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `vivat_council`
--

INSERT INTO `vivat_council` (`id`, `user`, `council`) VALUES
(4, 'Patrikas', 'Rokas Beržinskas'),
(5, 'Patrikas', 'Sandra Velsaitė'),
(6, 'Patrikas', 'Jonas Grinius');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `vivat_delegate`
--

CREATE TABLE `vivat_delegate` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `delegate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `vivat_delegate`
--

INSERT INTO `vivat_delegate` (`id`, `user`, `delegate`) VALUES
(10, 'Patrikas', 'Marija Raudonkepuraitė'),
(11, 'Patrikas', 'Dominykas Baranuskas'),
(12, 'Patrikas', 'Rosita Sandraitytė'),
(13, 'Patrikas', 'Paulė Jonaitė'),
(14, 'Patrikas', 'Eglė Žaltytė'),
(15, 'Patrikas', 'Simonas Krivis'),
(16, 'Patrikas', 'Rūta Rūtasytė'),
(17, 'Patrikas', 'Rimas Rimaitis'),
(18, 'Patrikas', 'Bendžaminas Franklinas');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `vivat_tvirtinimas`
--

CREATE TABLE `vivat_tvirtinimas` (
  `user` varchar(100) NOT NULL,
  `options` varchar(20) NOT NULL,
  `candidate` varchar(100) NOT NULL,
  `options1` varchar(20) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `vivat_tvirtinimas`
--

INSERT INTO `vivat_tvirtinimas` (`user`, `options`, `candidate`, `options1`, `rating`) VALUES
('Patrikas', 'Tvirtinu', 'Antanas Antanaitis', 'Tvirtinu', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infosa_council`
--
ALTER TABLE `infosa_council`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infosa_delegate`
--
ALTER TABLE `infosa_delegate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infosa_tvirtinimas`
--
ALTER TABLE `infosa_tvirtinimas`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `prisijungimas`
--
ALTER TABLE `prisijungimas`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vivat_council`
--
ALTER TABLE `vivat_council`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vivat_delegate`
--
ALTER TABLE `vivat_delegate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vivat_tvirtinimas`
--
ALTER TABLE `vivat_tvirtinimas`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infosa_council`
--
ALTER TABLE `infosa_council`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `infosa_delegate`
--
ALTER TABLE `infosa_delegate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `prisijungimas`
--
ALTER TABLE `prisijungimas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vivat_council`
--
ALTER TABLE `vivat_council`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vivat_delegate`
--
ALTER TABLE `vivat_delegate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
