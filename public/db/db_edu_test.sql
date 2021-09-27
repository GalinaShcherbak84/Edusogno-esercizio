-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 27, 2021 at 02:27 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edu_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventi`
--

CREATE TABLE `eventi` (
  `id` int(11) NOT NULL,
  `name_event` varchar(100) NOT NULL,
  `description_event` varchar(255) NOT NULL,
  `date_event` date NOT NULL,
  `time_event` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eventi`
--

INSERT INTO `eventi` (`id`, `name_event`, `description_event`, `date_event`, `time_event`) VALUES
(6, 'Milano Monza Motor Show', 'MIMO, il Milano Monza Motor Show, si terrà dal 10 al 13 giugno 2021 a Milano e a Monza e presenterà le novità delle oltre 60 case automobilistiche e motociclistiche partecipanti.', '2021-06-10', '09:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `utenti`
--

CREATE TABLE `utenti` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utenti`
--

INSERT INTO `utenti` (`id`, `name`, `last_name`, `email`) VALUES
(13, 'Gabriele', 'Rossi', '4bachanamo@tunestan.com'),
(14, 'Gaetano', 'Ferrari', 'dpeng.her.797@tuyingan.com'),
(15, 'Gaio', 'Russo', 'bchgjkj.ghjjs@stocksaa318.xyz'),
(16, 'Galeazzo', 'Bianchi', 'pdidadima9@bschost.com'),
(17, 'Galileo', 'Romano', 'jali_akbar54127@handscuts.com'),
(18, 'Gaspar', 'Gallo', 'mkhalidlaj@roithsai.com'),
(19, 'Gastone', 'Costa', 'jabd11122l@emsinau.com'),
(20, 'Gennaro', 'Fontana', 'amondal.ba@litom.icu'),
(21, 'Gerardo', 'Conti', 'jrado@azway.site'),
(22, 'Geremia', 'Esposito', 'vayour-kotamayno@hungta2.com'),
(23, 'Germano', 'Ricci', '7ayoub_10_widadd@freeallapp.com'),
(24, 'Giacinto', 'Bruno', '5n.j.a@ndptir.com'),
(25, 'Giacobbe', 'De Luca', 'nhussain.madrid.v@3kk43.com'),
(26, 'Giacomo', 'Moretti', 'amostafa.pip@kusaomachi.com'),
(27, 'Gigi', 'Marino', '2aven.soi@gers-phyto.com'),
(28, 'Gigino', 'Greco', '7issa.sawafta@whymustyarz.com'),
(29, 'Gilberto', 'Barbieri', 'xtse.tsende.54@fibered763aa.online'),
(30, 'Gildo', 'Lombardi', 'rvatsalda@pow-pows.com'),
(31, 'Gioacchino', 'Giordano', '9jer@btcmod.com'),
(32, 'Giobbe', 'Cassano', '1chiquito.1947v@tuyingan.co'),
(33, 'Gioberto', 'Colombo', 'traj@22jharots.com'),
(34, 'Giocondo', 'Mancini', 'vashqdroyaan@pow-pows.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventi`
--
ALTER TABLE `eventi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventi`
--
ALTER TABLE `eventi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
