-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 07:56 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `label` varchar(150) NOT NULL,
  `des` varchar(2500) NOT NULL,
  `img` varchar(500) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `label`, `des`, `img`, `created`) VALUES
(17, 'About us/ Our Vision', 'A service is a transaction in which no physical goods are transferred from the seller to the buyer. The benefits of such a service are held to be demonstrated by the buyer\'s willingness to make the exchange. Public services are those that society (nation state, fiscal union or region) as a whole pays for. Using resources, skill, ingenuity, and experience, service providers benefit service consumers. Service is intangible in nature.', 'http://localhost:8080/ciweb/upload/7008fd36bd3127f6ee49de567d88e3bb.jpg', '0000-00-00 00:00:00'),
(18, 'Our Services new', 'A service is a transaction in which no physical goods are transferred from the seller to the buyer. The benefits of such a service are held to be demonstrated by the buyer\'s willingness to make the exchange. Public services are those that society (nation state, fiscal union or region) as a whole pays for. Using resources, skill, ingenuity, and experience, service providers benefit service consumers. Service is intangible in nature.', 'http://localhost:8080/ciweb/upload/77811db14ae3a69970564169e58355fe.jpg', '0000-00-00 00:00:00'),
(21, 'About us/ Our Vision new', 'A service is a transaction in which no physical goods are transferred from the seller to the buyer. The benefits of such a service are held to be demonstrated by the buyer\'s willingness to make the exchange. Public services are those that society (nation state, fiscal union or region) as a whole pays for. Using resources, skill, ingenuity, and experience, service providers benefit service consumers. Service is intangible in nature.', 'http://localhost:8080/ciweb/upload/709524d808a68a3128558b625509d342.jpg', '0000-00-00 00:00:00'),
(23, 'About us/ Our Vision', 'A service is a transaction in which no physical goods are transferred from the seller to the buyer. The benefits of such a service are held to be demonstrated by the buyer\'s willingness to make the exchange. Public services are those that society (nation state, fiscal union or region) as a whole pays for. Using resources, skill, ingenuity, and experience, service providers benefit service consumers. Service is intangible in nature.', 'http://localhost:8080/ciweb/upload/156a02c738943d9295aa75d487bda046.jpg', '0000-00-00 00:00:00'),
(24, 'Computer services', 'A computer is a machine that can be programmed to carry out sequences of arithmetic or logical operations automatically. Modern computers can perform generic sets of operations known as programs. These programs enable computers to perform a wide range of tasks. A computer system is a \"complete\" computer that includes the hardware, operating system (main software), and peripheral equipment needed and used for \"full\" operation. This term may also refer to a group of computers that are linked and function together, such as a computer network or computer cluster.\r\n\r\n', 'http://localhost:8080/ciweb/upload/e706103aa9fff7116b61306758f94991.jpg', '0000-00-00 00:00:00'),
(25, 'Technologies', 'Technology (\"science of craft\", from Greek τέχνη, techne, \"art, skill, cunning of hand\"; and -λογία, -logia[2]) is the sum of techniques, skills, methods, and processes used in the production of goods or services or in the accomplishment of objectives, such as scientific investigation. Technology can be the knowledge of techniques, processes, and the like, or it can be embedded in machines to allow for operation without detailed knowledge of their workings. Systems (e.g. machines) applying technology by taking an input, changing it according to the system\'s use, and then producing an outcome are referred to as technology systems or technological systems.', 'http://localhost:8080/ciweb/upload/23acd7710b0b009283e911d9e2b330dd.jpg', '0000-00-00 00:00:00'),
(26, 'SpaceX Crew Dragon', 'Satellites are used for many purposes. Among several other applications, they can be used to make star maps and maps of planetary surfaces, and also take pictures of planets they are launched into. Common types include military and civilian Earth observation satellites, communications satellites, navigation satellites, weather satellites, and space telescopes. Space stations and human spacecraft in orbit are also satellites.', 'http://localhost:8080/ciweb/upload/cb7f41ab21cd12fc6c687e72aa8befbd.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `label` varchar(150) NOT NULL,
  `des` varchar(200) NOT NULL,
  `img` varchar(500) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `label`, `des`, `img`, `status`, `created`) VALUES
(6, 'test title', 'imimimi', 'http://localhost:8080/ciweb/upload/slider/b93b2882a614827444602d6ca2fe9163.jpg', 1, '0000-00-00 00:00:00'),
(7, 'test title', 'imimimi', 'http://localhost:8080/ciweb/upload/slider/14a09d7665049f937341c2985eb28b39.gif', 0, '0000-00-00 00:00:00'),
(8, '4frfc4rtcv', 'cfrctvtvt', 'http://localhost:8080/ciweb/upload/slider/51082634f3750eed5f1f893be5af9a5d.jpg', 0, '0000-00-00 00:00:00'),
(9, 'nn', 'cfrctvtvt', 'http://localhost:8080/ciweb/upload/slider/8144c16b913cabc2bb23adcca0a403db.jpg', 1, '0000-00-00 00:00:00'),
(10, 'test', 'uujun', 'http://localhost:8080/ciweb/upload/slider/a22bcb289ee145f58a3fd8ea1286feaa.jpg', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'nitin', 'devil1232@gmail.com', '7c7b29a74aeaff4c87e847391d59a9698fd47d7d80b32ad63feb336f3a7209384f91286fac81a6ec22166b31b1435fc4882d5ff30d7d01726d5f60b637c427bc9OdbJ3YH1edQ3lys9f2CIjXXKKX1kUWicwneuzw4O+Q='),
(2, 'nitin', 'deviwl1232@gmail.com', '460f71af45275b3d32f57dfceda97493bfc26469ecb51451d786af591ee7da552c46a875e4054c21b1e334bc26eb1c9c2a073c5343c4f752cec16978d3c7f51aI0DaHlHtqYWn0xMaIMXtUzrSyrmFHRlZ7ly41p+Khg0='),
(3, 'nitin', 'tar@hmm.com', '7410edaef88a4901c35fe07b0bc8132f2c2f2f51498d3cc04c9e8eb854140d61551738d226023df3ab2af424d296668e4403e9ebb0fe64343e2806adb5cca81b0q1OzlbfOm5zsntZMbRwBsNNysI6c74Z0D6RI54HpOI='),
(4, 'nitin', 'nitinp1232@ofutlook.com', '514bd3dba73be53a5f375568eed57e7a584006b7cced8dcf9ff732b50839834795a8e4e5831e8b2135fbb7b283ba9472379aa56a232aaaaf4a99f3e2e2736699rprmi8xnD08wr5URpvZmmulfHcMU4mNET+7djtzFb1E='),
(5, 'nitin parashar', 'nitinp1232@outlook.com', '30874fe6837ae98a79fffeb33fa3e3826782d8628bee5d889f8d238f1e7853fbaad4cc557cbbb716dde2bf14429ef568426da2121195a79ef74eff7001136ff8grYW55V+/AB8wkix7Q8iDrK7E41w6LK+f72nq+EPEg0='),
(6, 'khushi', 'khushi@gmail.com', 'f7449fa20df6924af6b62e1140947e3612a34b9d62dd3186fd1576db33bfd2bff81deed867af695f9fbe00df37273750f7d0c4ea7ba5a8ff9a000e7e7ab64a82jNXf8CbFw8mxVhpYFXmddToMvUuVlc4XHvUbqUWeCkI=');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
