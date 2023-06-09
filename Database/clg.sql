-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 08:18 AM
-- Server version: 10.4.11-MariaDB
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
-- Database: `clg`
--

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `notification` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `notification`, `date`) VALUES
(10, '<p>hii student thisis our notification pannel you will recieve all the notification regarding our college here</p>\r\n', '2020-08-04'),
(11, '<p>hii student thisis our notification pannel you will recieve all the notification regarding our college here</p>\r\n', '2020-08-07'),
(13, '<p>hii student thisis our notification pannel you will recieve all the notification regarding our college here</p>\r\n', '2020-08-02'),
(14, '<p>hii student thisis our notification pannel you will recieve all the notification regarding our college here</p>\r\n', '2020-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `post_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `post_img`) VALUES
(1, 'Welcome Area', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus molestiae iusto sapiente eius soluta consequuntur vel iste iure, architecto nesciunt natus quia repudiandae tenetur, possimus officia impedit neque necessitatibus quod repellendus maiores, dignissimos. Atque aut, voluptatum, ab magni mollitia cupiditate consequuntur quaerat sint iste magnam, soluta! Numquam nam nostrum omnis, accusamus ipsum nulla vero odit molestiae perferendis rerum impedit tempore voluptatum itaque eligendi veniam voluptates velit ipsa possimus quaerat repudiandae iste aut assumenda. Dolorem laudantium asperiores voluptate accusamus nulla debitis numquam porro repellat nam adipisci perspiciatis impedit culpa, a autem veniam, quasi architecto tempore provident. Modi possimus, illum quod doloribus.</p>\r\n', ''),
(9, 'HEADING REGARDING POST                                                                                                               ', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere sed inventore molestias illo cum, adipisci culpa voluptate consectetur, consequatur voluptatibus modi quo dignissimos assumenda, voluptatum iste illum recusandae! Molestias voluptatum non quisquam hic vel autem repellat ducimus quam nostrum tenetur illum possimus nihil magni esse reprehenderit velit, atque itaque architecto magnam expedita laudantium id, consectetur. Ratione molestiae omnis sed assumenda?&nbsp;</p>\r\n', 'img1.jpg'),
(10, 'INFORMATION ABOUT LIBARARY                                                ', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere sed inventore molestias illo cum, adipisci culpa voluptate consectetur, consequatur voluptatibus modi quo dignissimos assumenda, voluptatum iste illum recusandae! Molestias voluptatum non quisquam hic vel autem repellat ducimus quam nostrum tenetur illum possimus nihil magni esse reprehenderit velit, atque itaque architecto magnam expedita laudantium id, consectetur. Ratione molestiae omnis sed assumenda?</p>\r\n', 'img2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` double NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `phone`, `email`, `address`) VALUES
(1, 'bharti chambyal', 7018798025, 'bhartu425@gmail.com', 'dsf'),
(2, 'bharti chambyal', 7018798025, 'bhartu425@gmail.com', 'dsf'),
(3, 'bharti chambyal', 7018798025, 'bhartu425@gmail.com', 'dsf'),
(4, 'bharti chambyal', 7018798025, 'bhartu425@gmail.com', 'dsf'),
(5, 'abhinav sharma ', 999999999, 'dsfdsf@gmail.com', 'sdfdsf sd fdsf ds  ');

-- --------------------------------------------------------

--
-- Table structure for table `slider_image`
--

CREATE TABLE `slider_image` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `img_heading` varchar(255) NOT NULL,
  `img_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_image`
--

INSERT INTO `slider_image` (`id`, `img`, `img_heading`, `img_text`) VALUES
(4, 'slider1.jpg', '                            WELCOME TO OUR WEB                                  ', '                            Lets Make Your Future Bright With Us                        '),
(7, 'slider3.jpg', 'PHP TRAINING IN OUR CAMPUS', 'We Believe,s In Practical Works.'),
(8, 'slider2.jpg', 'Sports Friendly Campus', 'Sports Friendly Campus');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `phone`, `password`) VALUES
(9, 'bhartu425@gmail.com', 'bhartu', 7018798025, '$2y$10$yEd03x2wOwHd96l.xeOppesHR02I/Q/fV9qRqRxUAluuH4UrIEYCK'),
(10, 'chambialbr@gmail.com', 'chiragthakur', 8219633182, '$2y$10$Fa3lyEqZRQDXBGM2M26QjuAVhVbgv5msM9bHXcJgmBBB2z6BdfMU.'),
(11, 'abhinav@gmail.com', 'abhinavsharma', 999999999, '$2y$10$Fds2q0FQiWGLeRxfSsYFD.ZrbFpd4QFQFgPfMHwI2uN/2hk.8XGuq'),
(12, 'ishu@gmail.com', 'ishu', 8215455444, '$2y$10$F2KduAri8aymVZFpFk5vkOaEWDRYeQzzDyba.SFwwDlYFryHHPArK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_image`
--
ALTER TABLE `slider_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider_image`
--
ALTER TABLE `slider_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
