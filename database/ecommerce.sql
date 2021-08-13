-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:52975
-- Generation Time: Aug 13, 2021 at 07:31 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `oid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `opname` varchar(255) NOT NULL,
  `opprice` float NOT NULL,
  `oqnt` int(10) NOT NULL,
  `ototal` float NOT NULL,
  `paid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `pay_name` varchar(255) DEFAULT NULL,
  `card_no` int(50) DEFAULT NULL,
  `exp` date DEFAULT NULL,
  `cvv` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(10) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pprice` float NOT NULL,
  `pdes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pprice`, `pdes`) VALUES
(1, 'Echeveria Preta', 74.99, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit ratione fugiat praesentium, atque at labore quas impedit nostrum officia illo reiciendis, adipisci minus? Nesciunt nulla suscipit corrupti perspiciatis ut repellendus obcaecati vel totam atque iure. Veritatis, fugiat excepturi odit nihil mollitia aspernatur esse praesentium dolorem porro explicabo impedit tempore modi dolor, ullam tenetur magni quasi nulla aperiam facere in architecto rerum expedita? Voluptatem, libero. Necessitatibus neque omnis illo. Temporibus, eligendi nobis voluptates similique quas quod neque rem odit. Impedit atque officiis, nobis est sequi ea, molestias, repudiandae sit blanditiis quasi tempora eveniet voluptates quisquam soluta assumenda iste eligendi. Cupiditate, deleniti!'),
(2, 'Fiddle Leaf Fig', 54.99, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit ratione fugiat praesentium, atque at labore quas impedit nostrum officia illo reiciendis, adipisci minus? Nesciunt nulla suscipit corrupti perspiciatis ut repellendus obcaecati vel totam atque iure. Veritatis, fugiat excepturi odit nihil mollitia aspernatur esse praesentium dolorem porro explicabo impedit tempore modi dolor, ullam tenetur magni quasi nulla aperiam facere in architecto rerum expedita? Voluptatem, libero. Necessitatibus neque omnis illo. Temporibus, eligendi nobis voluptates similique quas quod neque rem odit. Impedit atque officiis, nobis est sequi ea, molestias, repudiandae sit blanditiis quasi tempora eveniet voluptates quisquam soluta assumenda iste eligendi. Cupiditate, deleniti!'),
(3, 'Maranta', 64.99, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit ratione fugiat praesentium, atque at labore quas impedit nostrum officia illo reiciendis, adipisci minus? Nesciunt nulla suscipit corrupti perspiciatis ut repellendus obcaecati vel totam atque iure. Veritatis, fugiat excepturi odit nihil mollitia aspernatur esse praesentium dolorem porro explicabo impedit tempore modi dolor, ullam tenetur magni quasi nulla aperiam facere in architecto rerum expedita? Voluptatem, libero. Necessitatibus neque omnis illo. Temporibus, eligendi nobis voluptates similique quas quod neque rem odit. Impedit atque officiis, nobis est sequi ea, molestias, repudiandae sit blanditiis quasi tempora eveniet voluptates quisquam soluta assumenda iste eligendi. Cupiditate, deleniti!'),
(4, 'Monstera Deliciosa', 64.99, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit ratione fugiat praesentium, atque at labore quas impedit nostrum officia illo reiciendis, adipisci minus? Nesciunt nulla suscipit corrupti perspiciatis ut repellendus obcaecati vel totam atque iure. Veritatis, fugiat excepturi odit nihil mollitia aspernatur esse praesentium dolorem porro explicabo impedit tempore modi dolor, ullam tenetur magni quasi nulla aperiam facere in architecto rerum expedita? Voluptatem, libero. Necessitatibus neque omnis illo. Temporibus, eligendi nobis voluptates similique quas quod neque rem odit. Impedit atque officiis, nobis est sequi ea, molestias, repudiandae sit blanditiis quasi tempora eveniet voluptates quisquam soluta assumenda iste eligendi. Cupiditate, deleniti!'),
(5, 'Philodendron Green', 49.99, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit ratione fugiat praesentium, atque at labore quas impedit nostrum officia illo reiciendis, adipisci minus? Nesciunt nulla suscipit corrupti perspiciatis ut repellendus obcaecati vel totam atque iure. Veritatis, fugiat excepturi odit nihil mollitia aspernatur esse praesentium dolorem porro explicabo impedit tempore modi dolor, ullam tenetur magni quasi nulla aperiam facere in architecto rerum expedita? Voluptatem, libero. Necessitatibus neque omnis illo. Temporibus, eligendi nobis voluptates similique quas quod neque rem odit. Impedit atque officiis, nobis est sequi ea, molestias, repudiandae sit blanditiis quasi tempora eveniet voluptates quisquam soluta assumenda iste eligendi. Cupiditate, deleniti!'),
(6, 'Floor-sized Pot 14 inch', 14.99, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit ratione fugiat praesentium, atque at labore quas impedit nostrum officia illo reiciendis, adipisci minus? Nesciunt nulla suscipit corrupti perspiciatis ut repellendus obcaecati vel totam atque iure. Veritatis, fugiat excepturi odit nihil mollitia aspernatur esse praesentium dolorem porro explicabo impedit tempore modi dolor, ullam tenetur magni quasi nulla aperiam facere in architecto rerum expedita? Voluptatem, libero. Necessitatibus neque omnis illo. Temporibus, eligendi nobis voluptates similique quas quod neque rem odit. Impedit atque officiis, nobis est sequi ea, molestias, repudiandae sit blanditiis quasi tempora eveniet voluptates quisquam soluta assumenda iste eligendi. Cupiditate, deleniti!'),
(7, 'Floor-sized Pot 11.5 inch', 14.99, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit ratione fugiat praesentium, atque at labore quas impedit nostrum officia illo reiciendis, adipisci minus? Nesciunt nulla suscipit corrupti perspiciatis ut repellendus obcaecati vel totam atque iure. Veritatis, fugiat excepturi odit nihil mollitia aspernatur esse praesentium dolorem porro explicabo impedit tempore modi dolor, ullam tenetur magni quasi nulla aperiam facere in architecto rerum expedita? Voluptatem, libero. Necessitatibus neque omnis illo. Temporibus, eligendi nobis voluptates similique quas quod neque rem odit. Impedit atque officiis, nobis est sequi ea, molestias, repudiandae sit blanditiis quasi tempora eveniet voluptates quisquam soluta assumenda iste eligendi. Cupiditate, deleniti!'),
(8, 'Lava Rocks', 9.99, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit ratione fugiat praesentium, atque at labore quas impedit nostrum officia illo reiciendis, adipisci minus? Nesciunt nulla suscipit corrupti perspiciatis ut repellendus obcaecati vel totam atque iure. Veritatis, fugiat excepturi odit nihil mollitia aspernatur esse praesentium dolorem porro explicabo impedit tempore modi dolor, ullam tenetur magni quasi nulla aperiam facere in architecto rerum expedita? Voluptatem, libero. Necessitatibus neque omnis illo. Temporibus, eligendi nobis voluptates similique quas quod neque rem odit. Impedit atque officiis, nobis est sequi ea, molestias, repudiandae sit blanditiis quasi tempora eveniet voluptates quisquam soluta assumenda iste eligendi. Cupiditate, deleniti!'),
(9, 'Watering Can', 9.99, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit ratione fugiat praesentium, atque at labore quas impedit nostrum officia illo reiciendis, adipisci minus? Nesciunt nulla suscipit corrupti perspiciatis ut repellendus obcaecati vel totam atque iure. Veritatis, fugiat excepturi odit nihil mollitia aspernatur esse praesentium dolorem porro explicabo impedit tempore modi dolor, ullam tenetur magni quasi nulla aperiam facere in architecto rerum expedita? Voluptatem, libero. Necessitatibus neque omnis illo. Temporibus, eligendi nobis voluptates similique quas quod neque rem odit. Impedit atque officiis, nobis est sequi ea, molestias, repudiandae sit blanditiis quasi tempora eveniet voluptates quisquam soluta assumenda iste eligendi. Cupiditate, deleniti!'),
(10, 'Soil', 24.99, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit ratione fugiat praesentium, atque at labore quas impedit nostrum officia illo reiciendis, adipisci minus? Nesciunt nulla suscipit corrupti perspiciatis ut repellendus obcaecati vel totam atque iure. Veritatis, fugiat excepturi odit nihil mollitia aspernatur esse praesentium dolorem porro explicabo impedit tempore modi dolor, ullam tenetur magni quasi nulla aperiam facere in architecto rerum expedita? Voluptatem, libero. Necessitatibus neque omnis illo. Temporibus, eligendi nobis voluptates similique quas quod neque rem odit. Impedit atque officiis, nobis est sequi ea, molestias, repudiandae sit blanditiis quasi tempora eveniet voluptates quisquam soluta assumenda iste eligendi. Cupiditate, deleniti!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `cart_ibfk_1` (`pid`),
  ADD KEY `cart_ibfk_2` (`uid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `oid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
