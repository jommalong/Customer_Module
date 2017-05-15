-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2017 at 06:28 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtek-database-finals`
--

-- --------------------------------------------------------

--
-- Table structure for table `arrangement`
--

CREATE TABLE `arrangement` (
  `arrangement_id` int(11) NOT NULL,
  `cu_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `payment_type` enum('Online','Meet-up') NOT NULL DEFAULT 'Online'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arrangement`
--

INSERT INTO `arrangement` (`arrangement_id`, `cu_id`, `sp_id`, `service_id`, `date`, `payment_type`) VALUES
(7001, 101, 201, 501, '2017-05-06 01:45:00', 'Online'),
(7002, 102, 203, 501, '2017-05-15 10:30:00', 'Meet-up'),
(7003, 104, 204, 501, '2017-06-02 02:30:00', 'Meet-up'),
(7004, 106, 205, 503, '2017-05-01 09:30:00', 'Meet-up'),
(7005, 107, 207, 504, '2017-07-07 04:00:00', 'Online'),
(7006, 108, 209, 505, '2017-05-06 01:45:00', 'Online'),
(7007, 110, 210, 505, '2017-05-15 10:30:00', 'Online'),
(7008, 104, 203, 502, '2017-06-02 02:30:00', 'Meet-up'),
(7009, 106, 209, 504, '2017-05-01 09:30:00', 'Meet-up'),
(7010, 101, 205, 502, '2017-06-07 04:00:00', 'Meet-up');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cu_id` int(11) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `email_address` varchar(45) NOT NULL,
  `tel_no` varchar(45) NOT NULL,
  `birthday` date NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `gender` enum('m','f') NOT NULL DEFAULT 'm'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cu_id`, `lname`, `fname`, `Address`, `email_address`, `tel_no`, `birthday`, `username`, `password`, `gender`) VALUES
(101, 'Eslao', 'Mark', '#46 Baguio City, Philippines', 'Mark24@yahoo.com', '428947', '1997-02-03', 'Markie_E', '*********', 'm'),
(102, 'Gomez', 'Micheal', '#86 Baguio City, Philippines', 'gomezM@yahoo.com', '432856', '1993-02-03', 'Gommy', '*********', 'm'),
(104, 'Vicente', 'Roger', '#90 Baguio, Philippines', 'rogerVic@yahoo.com', '402345', '1989-02-03', 'Rog', '*********', 'm'),
(106, 'Juan', 'Kenneth', '#99 La Trinidad, Benguet, Philippines', 'kennethjake@yahoo.com', '400213', '1997-02-03', 'jake', '*********', 'm'),
(107, 'Palasico', 'Trisha', '#56 Baguio City, Philippines', 'trishaP@yahoo.com', '422134', '1990-02-03', 'ishang', '*********', 'f'),
(108, 'Tamaraw', 'Erin', '#11 Baguio City, Philippines', 'erinkaye@yahoo.com', '400043', '1988-02-03', 'erika', '*********', 'f'),
(110, 'Santiago', 'Kimberly', '#76 Baguio City, Philippines', 'kimkim@yahoo.com', '444385', '1985-02-03', 'Kim', '*********', 'f'),
(111, 'asda', 'first', 'asasd', 'asd@emial.com', '8234123', '2017-05-11', 'Valid', '123', 'm'),
(112, 'asda', 'first', 'asasd', 'asd@emial.com', '8234123', '2017-05-11', 'Valid', '123', 'm'),
(113, 'asda', 'first', 'asasd', 'asd@emial.com', '8234123', '2017-05-11', 'Valid', '123', 'm'),
(114, 'ggsgr', 'wegwrg', 'gsgfbsgourg', 'wgwgwg@yahoo.com', '06465649', '2018-03-02', 'gwsg', 'password', 'f'),
(115, 'Cabildo', 'Joy', '123 2123 Baguio city', 'jc@jc.com', '9820012321', '2017-05-17', 'customer1', 'password', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `cu_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `total_amount` double NOT NULL,
  `status` enum('paid','pending') NOT NULL DEFAULT 'pending',
  `payment_type` enum('online','meet-up') NOT NULL DEFAULT 'online',
  `serviceAvailed` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `cu_id`, `sp_id`, `date`, `total_amount`, `status`, `payment_type`, `serviceAvailed`) VALUES
(9001, 101, 209, '2017-05-06 01:45:00', 980, 'paid', 'meet-up', 'Gardening'),
(9002, 107, 207, '2017-05-15 10:30:00', 545, 'paid', 'meet-up', 'Cooking'),
(9003, 110, 210, '2017-06-02 02:30:00', 375, 'pending', 'online', 'Design'),
(9004, 104, 209, '2017-05-01 09:30:00', 785, 'paid', 'meet-up', 'Tailoring'),
(9005, 106, 207, '2017-07-07 04:00:00', 450, 'pending', 'online', 'Photography');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(11) NOT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `type` enum('Service Provider','Customer') NOT NULL DEFAULT 'Service Provider',
  `email_address` varchar(45) DEFAULT NULL,
  `status` enum('Registered','Pending','Rejected') NOT NULL DEFAULT 'Registered',
  `password` varchar(45) NOT NULL,
  `address` varchar(45) DEFAULT NULL,
  `tel_no` varchar(45) DEFAULT NULL,
  `gender` enum('f','m') DEFAULT 'f',
  `birthday` date DEFAULT NULL,
  `username` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `lname`, `fname`, `type`, `email_address`, `status`, `password`, `address`, `tel_no`, `gender`, `birthday`, `username`) VALUES
(1002, 'Micheal Gomez', NULL, 'Customer', 'GMicheal@yahoo.com', 'Registered', '**********', NULL, NULL, NULL, NULL, ''),
(1003, 'Amy Lou', NULL, 'Customer', 'LAmy@gmail.com', 'Pending', '**********', NULL, NULL, NULL, NULL, ''),
(1004, 'Roger Vicente', NULL, 'Customer', 'VicRog@yahoo.com', 'Registered', '*********', NULL, NULL, NULL, NULL, ''),
(1005, 'Vic Echo', NULL, 'Customer', 'VE21@gmail.com', 'Rejected', '**********', NULL, NULL, NULL, NULL, ''),
(1006, 'Kenneth Juan', NULL, 'Customer', 'JuanKen@yahoo.com', 'Registered', '**********', NULL, NULL, NULL, NULL, ''),
(1007, 'Trisha Palasico', NULL, 'Customer', 'ishangT@gmail.com', 'Registered', '**********', NULL, NULL, NULL, NULL, ''),
(1008, 'Erin Tamaraw', NULL, 'Customer', 'erikaTam@yahoo.com', 'Registered', '**********', NULL, NULL, NULL, NULL, ''),
(1009, 'Jimmy Jose', NULL, 'Customer', 'JimJose@gmail.com', 'Pending', '*********', NULL, NULL, NULL, NULL, ''),
(1010, 'Kimberly Santiago', NULL, 'Customer', 'KimKim@yahoo.com', 'Registered', '**********', NULL, NULL, NULL, NULL, ''),
(1011, 'Ana Lucia', NULL, 'Service Provider', 'lucia_ana@yahoo.com', 'Registered', '**********', NULL, NULL, NULL, NULL, ''),
(1012, 'Miguel Garcia', NULL, 'Service Provider', 'MiggyG@yahoo.com', 'Pending', '**********', NULL, NULL, NULL, NULL, ''),
(1013, 'Ellen Camoy', NULL, 'Service Provider', 'ellencamoy@yahoo.com', 'Registered', '**********', NULL, NULL, NULL, NULL, ''),
(1014, 'Helga Kamui', NULL, 'Service Provider', 'helgahelga@yahoo.com', 'Registered', '**********', NULL, NULL, NULL, NULL, ''),
(1015, 'Lanie Uzumaki', NULL, 'Service Provider', 'KLanie@yahoo.com', 'Registered', '**********', NULL, NULL, NULL, NULL, ''),
(1016, 'Kali Diego', NULL, 'Service Provider', 'KDiego@yahoo.com', 'Pending', '**********', NULL, NULL, NULL, NULL, ''),
(1017, 'Reyna Juanito', NULL, 'Service Provider', 'ReyRey@yahoo.com', 'Registered', '**********', NULL, NULL, NULL, NULL, ''),
(1018, 'Daniel Juanita', NULL, 'Service Provider', 'JuanIta@yahoo.com', 'Rejected', '**********', NULL, NULL, NULL, NULL, ''),
(1019, 'Kenneth Jose', NULL, 'Service Provider', 'JoseK@yahoo.com', 'Registered', '**********', NULL, NULL, NULL, NULL, ''),
(1020, 'Angelo Langit', NULL, 'Service Provider', 'AngelSky@yahoo.com', 'Registered', '**********', NULL, NULL, NULL, NULL, ''),
(1021, NULL, NULL, 'Service Provider', NULL, 'Registered', 'asd', NULL, NULL, 'f', NULL, 'warrior'),
(1022, NULL, NULL, 'Service Provider', NULL, 'Registered', 'abc', NULL, NULL, 'f', NULL, 'warrior'),
(1023, NULL, NULL, 'Service Provider', NULL, 'Registered', 'abc', NULL, NULL, 'f', NULL, 'warrior'),
(1024, 'last', 'fn', 'Customer', 'emai@g.com', 'Registered', '123', '132ads', '1231412', 'm', '2017-05-01', 'usernam'),
(1025, 'last', 'fn', 'Customer', 'emai@g.com', 'Registered', '123', '132ads', '1231412', 'm', '2017-05-01', 'usernam'),
(1026, 'last', 'fn', 'Customer', 'emai@g.com', 'Registered', '123', '132ads', '1231412', 'm', '2017-05-01', 'usernam'),
(1028, 'Cruz', 'Juan ', 'Customer', 'Juan@yahoo.com', 'Pending', 'password', '#77 HolyGhost Baguio  Benguet Philippines', '09053983127', 'm', '2017-05-03', 'Juan_C');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `req_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `cu_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` enum('Pending','Approved','Rejected') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`req_id`, `sp_id`, `cu_id`, `service_id`, `date`, `status`) VALUES
(8001, 209, 101, 502, '2017-05-06 01:45:00', 'Pending'),
(8002, 207, 107, 505, '2017-05-15 10:30:00', 'Pending'),
(8003, 210, 110, 503, '2017-06-02 02:30:00', 'Pending'),
(8004, 209, 104, 504, '2017-05-01 09:30:00', 'Pending'),
(8005, 207, 106, 501, '2017-07-07 04:00:00', 'Approved'),
(8006, 207, 107, 504, '2017-05-15 00:00:00', 'Pending'),
(8007, 207, 107, 504, '2017-05-15 00:00:00', 'Pending'),
(8008, 209, 106, 504, '2017-05-15 00:00:00', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `service provider`
--

CREATE TABLE `service provider` (
  `sp_id` int(11) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `tel_no` varchar(45) NOT NULL,
  `email_address` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `birthday` date NOT NULL,
  `username` varchar(45) NOT NULL,
  `gender` enum('f','m') NOT NULL DEFAULT 'm'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service provider`
--

INSERT INTO `service provider` (`sp_id`, `lname`, `fname`, `address`, `tel_no`, `email_address`, `password`, `birthday`, `username`, `gender`) VALUES
(201, 'Lucia', 'Ana', '#56 Baguio City, Philippines', '321654', 'lucia_ana@yahoo.com', '********', '1990-02-01', 'Active', 'f'),
(203, 'Camoy', 'Ellen', '#76 Kalungkutan City, Philippines', '399658', 'ellencamoy@yahoo.com', '********', '1990-06-04', 'Inactive', 'f'),
(204, 'Kamui', 'Helga', '#88 Masaya City, Philippines', '323142', 'helgahelga@yahoo.com', '********', '1993-09-01', 'Active', 'f'),
(205, 'Uzumaki', 'Lanie', '#55 Konoha City, Philippines', '300943', 'KLanie@yahoo.com', '********', '1992-08-04', 'Inactive', 'f'),
(207, 'Juanito', 'Reyna', '#76 Mananangal City, Philippines', '304534', 'ReyRey@yahoo.com', '********', '1975-01-20', 'Active', 'f'),
(209, 'Jose', 'Kenneth', '#11 Kaitiman City, Philippines', '387654', 'JoseK@yahoo.com', '********', '1990-05-25', 'Active', 'm'),
(210, 'Langit', 'Angelo', '#90 Kalangitan City, Philippines', '345342', 'AngelSky@yahoo.com', '********', '1986-10-05', 'Active', 'm'),
(211, 'asdas', 'asda', 'aasdas', '12314512', 'asdasa@gas.com', '123', '2017-05-03', 'provider1', 'm'),
(212, 'last', 'fn', '132ads', '1231412', 'emai@g.com', '1512312', '2017-05-08', 'userworking', 'm'),
(213, 'Espiritus', 'Chris', '1281 Birkhall Drive', '6787361712', 'christopheredrian@gmail.com', 'password', '1995-06-05', 'Usernamekoto', 'm'),
(214, 'Lagman', 'Edward', '123 sapienta mode', '09512321232', 'prov2@gmail.com', 'password', '2016-02-09', 'provider2', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `description`, `price`) VALUES
(501, 'Photography', 'Lessons about photo editing, background, camera techniques.', 450),
(502, 'Gardening', 'Lessons about growing plants, knowing what types of plants in seasons.', 980),
(503, 'Design', 'Lessons about interior designing, and artistry and many more...', 375),
(504, 'Tailoring', 'Lessons about basic repair, embroidery and designing clothes...', 785),
(505, 'Cooking', 'Lessons about what you can do in the kitchen and techniques in cooking...', 545);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arrangement`
--
ALTER TABLE `arrangement`
  ADD PRIMARY KEY (`arrangement_id`),
  ADD KEY `cu_id` (`cu_id`,`sp_id`,`service_id`),
  ADD KEY `sp_id` (`sp_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cu_id`),
  ADD KEY `cu_id` (`cu_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `cu_id_idx` (`cu_id`),
  ADD KEY `sp_id_idx` (`sp_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`),
  ADD KEY `reg_id` (`reg_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`req_id`),
  ADD KEY `req_id` (`req_id`),
  ADD KEY `sp_id_idx` (`sp_id`),
  ADD KEY `cu_id_idx` (`cu_id`),
  ADD KEY `service_id_idx` (`service_id`);

--
-- Indexes for table `service provider`
--
ALTER TABLE `service provider`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arrangement`
--
ALTER TABLE `arrangement`
  MODIFY `arrangement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7011;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9006;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1031;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8009;
--
-- AUTO_INCREMENT for table `service provider`
--
ALTER TABLE `service provider`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=506;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `arrangement`
--
ALTER TABLE `arrangement`
  ADD CONSTRAINT `arrangement_ibfk_1` FOREIGN KEY (`cu_id`) REFERENCES `customer` (`cu_id`),
  ADD CONSTRAINT `arrangement_ibfk_2` FOREIGN KEY (`sp_id`) REFERENCES `service provider` (`sp_id`),
  ADD CONSTRAINT `arrangement_ibfk_3` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`cu_id`) REFERENCES `customer` (`cu_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`sp_id`) REFERENCES `service provider` (`sp_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`sp_id`) REFERENCES `service provider` (`sp_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `requests_ibfk_2` FOREIGN KEY (`cu_id`) REFERENCES `customer` (`cu_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `requests_ibfk_3` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
