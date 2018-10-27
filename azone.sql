-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2018 at 07:46 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `azone`
--

-- --------------------------------------------------------

--
-- Table structure for table `adds`
--

CREATE TABLE `adds` (
  `addId` int(11) NOT NULL,
  `addTitle` varchar(200) NOT NULL,
  `addDescription` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(100) NOT NULL,
  `adminEmail` varchar(100) NOT NULL,
  `adminPassword` varchar(100) NOT NULL,
  `adminPhoto` varchar(1000) NOT NULL,
  `adminPNum` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `adminName`, `adminEmail`, `adminPassword`, `adminPhoto`, `adminPNum`) VALUES
(1, 'Sudaraka', 'admin@nanolabs.com', 'CE9dLJJat7s1IC57zYw4RPUJyiU9DBMrRCloiO57Zvc=', 'pin.png', '0713009095');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartId` int(11) NOT NULL,
  `productId` varchar(15) DEFAULT NULL,
  `cartPrice` varchar(500) DEFAULT NULL,
  `cartQty` varchar(100) DEFAULT NULL,
  `cartAmount` varchar(500) DEFAULT NULL,
  `cartColour` varchar(100) DEFAULT NULL,
  `cartWarranty` varchar(20) DEFAULT NULL,
  `cartCookie` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `catName` varchar(200) NOT NULL,
  `catImage` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `catName`, `catImage`) VALUES
(1, 'Mobile Phones', ''),
(2, 'Laptops', ''),
(3, 'Cameras', ''),
(4, 'Tablet', ''),
(5, 'Drones', ''),
(6, 'Accessories', '');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `couponId` int(11) NOT NULL,
  `productId` int(15) NOT NULL,
  `couponTitle` varchar(200) NOT NULL,
  `couponPrice` varchar(500) NOT NULL,
  `couponCode` varchar(100) NOT NULL,
  `limite` varchar(100) NOT NULL,
  `uses` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cusId` int(11) NOT NULL,
  `cusName` varchar(200) NOT NULL,
  `cusEmail` varchar(200) NOT NULL,
  `cusPassword` varchar(200) NOT NULL,
  `cusAddress` varchar(500) NOT NULL,
  `cusCity` varchar(150) NOT NULL,
  `cusImage` varchar(1000) NOT NULL,
  `cConfirmCode` varchar(100) NOT NULL,
  `cusPNum` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cusId`, `cusName`, `cusEmail`, `cusPassword`, `cusAddress`, `cusCity`, `cusImage`, `cConfirmCode`, `cusPNum`) VALUES
(1, 'Rasmus Lerdorf', 'rasmus@azone.lk', '3duntxToFsvJTlMAeXGNlqREOusPrx8qJJWPNUzTXms=', 'Passara Road,Badulla', 'Badulla', 'download.jfif', '1167', '0715623145'),
(2, 'Sapuni', 'sapu@gg.lk', 'dK7ZmxxIoTyyN67Nmp6kUmfyu3qubXqfO1ZnhQfHQDU=', 'Kandy Road,', 'Kandy', 'pexels-photo-415484.jpeg', '12598', '0785642125'),
(3, 'SAPU', 'sapu@gg.lk', 'dK7ZmxxIoTyyN67Nmp6kUmfyu3qubXqfO1ZnhQfHQDU=', 'Kandy Road', 'Kandy', 'pexels-photo-415484.jpeg', '26987', '07856414'),
(4, 'Gayan De Silva', 'gayan@slt.lk', 'gHcxuF9fM5PmdWWnl37/L9vIum3qMaj08eLIWWByUXo=', 'New Town, Anuradhapura', 'Anuradhapura', 'Namal Ranatunga.JPG', '24981', '0716545693');

-- --------------------------------------------------------

--
-- Table structure for table `manufacture`
--

CREATE TABLE `manufacture` (
  `manufactureId` int(11) NOT NULL,
  `manName` varchar(200) NOT NULL,
  `manImage` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacture`
--

INSERT INTO `manufacture` (`manufactureId`, `manName`, `manImage`) VALUES
(1, 'Samsung', ''),
(2, 'Apple', ''),
(3, 'Sony', ''),
(4, 'Xiaomi', ''),
(5, 'Huawei', ''),
(6, 'HP', ''),
(7, 'Acer', ''),
(8, 'DELL', ''),
(9, 'MSI', '');

-- --------------------------------------------------------

--
-- Table structure for table `offlinepayement`
--

CREATE TABLE `offlinepayement` (
  `branch` varchar(200) NOT NULL,
  `depositImage` varchar(200) NOT NULL,
  `depositDate` date NOT NULL,
  `amount` varchar(200) NOT NULL,
  `payId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offlinepayement`
--

INSERT INTO `offlinepayement` (`branch`, `depositImage`, `depositDate`, `amount`, `payId`) VALUES
('BOC', 'boc1.jfif', '2018-10-27', '68800', 4),
('BOC', 'boc1.jfif', '2018-10-27', '68800', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) NOT NULL,
  `cusId` int(15) NOT NULL,
  `productId` int(11) NOT NULL,
  `orderAmount` varchar(500) NOT NULL,
  `invoiceNumber` varchar(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `colour` varchar(200) NOT NULL,
  `warranty` varchar(100) NOT NULL,
  `date` timestamp NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `cusId`, `productId`, `orderAmount`, `invoiceNumber`, `qty`, `colour`, `warranty`, `date`, `status`) VALUES
(1, 1, 6, '68800', '463589894', 1, 'Black', 'Hardware', '2018-10-25 17:43:28', 'Paid'),
(2, 1, 1, '188000', '463589894', 1, 'Black', 'Software', '2018-10-25 17:43:28', 'unpaid'),
(3, 1, 4, '92800', '463589894', 1, 'Black', 'Hardware', '2018-10-25 17:43:28', 'unpaid'),
(4, 1, 5, '95000', '629100004', 1, 'Black', 'Software', '2018-10-25 17:59:05', 'unpaid'),
(5, 2, 1, '191800', '2075371314', 1, 'Red', 'Hardware', '2018-10-25 18:28:23', 'unpaid'),
(6, 1, 9, '48000', '1074857025', 1, 'Red', 'Software', '2018-10-27 14:08:17', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `payement`
--

CREATE TABLE `payement` (
  `payId` int(11) NOT NULL,
  `customerId` int(15) NOT NULL,
  `pInvoiceNum` varchar(200) NOT NULL,
  `amount` varchar(500) NOT NULL,
  `payMethod` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payement`
--

INSERT INTO `payement` (`payId`, `customerId`, `pInvoiceNum`, `amount`, `payMethod`, `date`) VALUES
(4, 1, '463589894', '68800', 'Bank Deposite', '2018-10-27'),
(5, 1, '463589894', '68800', 'Bank Deposite', '2018-10-27');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `productDate` timestamp NOT NULL,
  `productName` varchar(200) NOT NULL,
  `customUrl` varchar(500) NOT NULL,
  `image1` varchar(1000) NOT NULL,
  `image2` varchar(1000) NOT NULL,
  `image3` varchar(1000) NOT NULL,
  `image4` varchar(1000) NOT NULL,
  `productPrice` varchar(500) NOT NULL,
  `productDetails` varchar(2000) NOT NULL,
  `manufactureId` int(15) NOT NULL,
  `categoryId` int(15) NOT NULL,
  `productKeywords` varchar(500) NOT NULL,
  `features` varchar(1000) NOT NULL,
  `availability` varchar(100) NOT NULL,
  `Warranty` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `productDate`, `productName`, `customUrl`, `image1`, `image2`, `image3`, `image4`, `productPrice`, `productDetails`, `manufactureId`, `categoryId`, `productKeywords`, `features`, `availability`, `Warranty`) VALUES
(1, '2018-10-07 07:37:50', 'Apple IPhone X 128GB', 'iphonex128', 'apple-iphone-x-mobile-phones-price-in-sri-lanka_821_jpg.jpeg', 'apple-iphone-x-mobile-phones-price-in-sri-lanka_821_jpg.jpeg', 'apple-iphone-x-mobile-phones-price-in-sri-lanka_821_jpg.jpeg', 'apple-iphone-x-mobile-phones-price-in-sri-lanka_821_jpg.jpeg', '188000', 'IphoneX 128GB', 2, 1, 'Iphone X', '128GB ROM', '1', '2'),
(2, '2018-10-07 07:40:51', 'Huawei P20 Pro 128GB', 'p20-pro', 'huawei-p20-pro-mobile-phones-price-in-sri-lanka_1723_jpg.jpeg', 'huawei-p20-pro-mobile-phones-price-in-sri-lanka_1723_jpg.jpeg', 'huawei-p20-pro-mobile-phones-price-in-sri-lanka_1723_jpg.jpeg', 'huawei-p20-pro-mobile-phones-price-in-sri-lanka_1723_jpg.jpeg', '156000', 'Huawei P20 Pro 128GB', 5, 1, 'p20', 'Huawei P20 Pro 128GB, Triple Cameras ', '1', '2'),
(3, '2018-10-07 07:57:02', 'Xiaomi MI Pad 4', 'mi-pad4', 'xiaomi-mi-pad-4-_2004_jpg.jpeg', 'xiaomi-mi-pad-4-_2004_jpg.jpeg', 'xiaomi-mi-pad-4-_2004_jpg.jpeg', 'xiaomi-mi-pad-4-_2004_jpg.jpeg', '56000.50', 'Xiaomi MI Pad 4', 4, 4, 'mi pad4', 'Xiaomi MI Pad 4 128GB', '0', '1'),
(4, '2018-10-07 08:01:22', 'Samsung Galaxy Tab S4 2018', 'samsung-tab4', 'samsung-galaxy-tab-s4-2018-_2060_jpg.jpeg', 'samsung-galaxy-tab-s4-2018-_2060_jpg.jpeg', 'samsung-galaxy-tab-s4-2018-_2060_jpg.jpeg', 'samsung-galaxy-tab-s4-2018-_2060_jpg.jpeg', '89000', 'Samsung Galaxy Tab S4 2018 64GB', 1, 4, 'tab4', 'Samsung Galaxy Tab S4 2018 New', '1', '2'),
(5, '2018-10-07 08:05:52', 'Apple IPhone 8 Plus 64GB', 'iphone8-64gb', 'apple-iphone-8-plus-mobile-phones-price-in-sri-lanka_1411_jpg.jpeg', 'apple-iphone-8-plus-mobile-phones-price-in-sri-lanka_1411_jpg.jpeg', 'apple-iphone-8-plus-mobile-phones-price-in-sri-lanka_1411_jpg.jpeg', 'apple-iphone-8-plus-mobile-phones-price-in-sri-lanka_1411_jpg.jpeg', '95000', 'Apple IPhone 8 Plus 64GB', 2, 1, 'Iphone 8', 'Apple IPhone 8 Plus 64GB', '1', '2'),
(6, '2018-10-07 08:08:42', 'OnePlus 5T 128GB', 'oneplus-5t', 'one.jfif', 'one.jfif', 'one.jfif', 'one.jfif', '65000', 'OnePlus 5T 128GB', 5, 1, 'oneplus', 'OnePlus 5T 128GB', '2', '2'),
(7, '2018-10-07 08:10:55', 'Xiaomi MI A2 64GB', 'mi-a2', 'mia2.jpeg', 'mia2.jpeg', 'mia2.jpeg', 'mia2.jpeg', '38500', 'Xiaomi MI A2 64GB', 4, 1, 'mia2', 'Xiaomi MI A2 64GB', '1', '1'),
(8, '2018-10-08 03:05:38', 'Nokia 6 2018 64GB', 'nokia-6-2018', 'nokia-6-2018-mobile-phones-price-in-sri-lanka_778_jpg.jpeg', '', '', '', '38000.00', 'Nokia 6 2018', 5, 1, 'nokia6', '64GB ROM', '0', '2'),
(9, '2018-10-08 03:07:44', 'Huawei Nova 3i', 'nova3i', 'nova3i.jpeg', 'nova3i.jpeg', 'nova3i.jpeg', 'nova3i.jpeg', '48000.00', 'Nova 3i ', 5, 1, 'nova3i', '128 GB', '1', '1'),
(10, '2018-10-19 19:56:59', 'MSI GS65 Stealth THIN', 'msigs60', '118ce8b15854ab3a294904.jpg', '117ee8bbe62c600c737499.jpg', '11a6e8aab8c4544489145b.jpg', '1150e88890a81e84d032c4.jpg', '460000.00', 'MSI GS65 Stealth THIN-050 Thin & Light Bezel Gaming and Business Laptop (Intel 8th Gen Coffee Lake i7-8750H 6-Core, 32GB RAM, 512GB PCIe SSD, 15.6" FHD 1920x1080 Display, GTX 1060, Win10 Pro) VR Ready', 9, 2, 'msi', 'MSI GS65 Stealth THIN-050 Thin & Light Bezel Gaming and Business Laptop (Intel 8th Gen Coffee Lake i7-8750H 6-Core, 32GB RAM, 512GB PCIe SSD, 15.6" FHD 1920x1080 Display, GTX 1060, Win10 Pro) VR Ready', '1', '3');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `sliderId` int(11) NOT NULL,
  `sName` varchar(100) NOT NULL,
  `sImage` varchar(1000) NOT NULL,
  `sliderURL` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sliderId`, `sName`, `sImage`, `sliderURL`) VALUES
(1, 'slide1', '1.jpg', ''),
(2, 'slide1', '2.jpg', ''),
(3, 'slide3', '3.jpg', ''),
(4, 'slide4', '4.jpg', ''),
(5, 'slider5', '5.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `supportticket`
--

CREATE TABLE `supportticket` (
  `ticketId` int(11) NOT NULL,
  `ticketTitle` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishListId` int(11) NOT NULL,
  `custId` int(15) NOT NULL,
  `productId` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adds`
--
ALTER TABLE `adds`
  ADD PRIMARY KEY (`addId`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`couponId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cusId`);

--
-- Indexes for table `manufacture`
--
ALTER TABLE `manufacture`
  ADD PRIMARY KEY (`manufactureId`);

--
-- Indexes for table `offlinepayement`
--
ALTER TABLE `offlinepayement`
  ADD KEY `payId` (`payId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `payement`
--
ALTER TABLE `payement`
  ADD PRIMARY KEY (`payId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sliderId`);

--
-- Indexes for table `supportticket`
--
ALTER TABLE `supportticket`
  ADD PRIMARY KEY (`ticketId`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishListId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adds`
--
ALTER TABLE `adds`
  MODIFY `addId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `couponId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cusId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `manufacture`
--
ALTER TABLE `manufacture`
  MODIFY `manufactureId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `payement`
--
ALTER TABLE `payement`
  MODIFY `payId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `sliderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `supportticket`
--
ALTER TABLE `supportticket`
  MODIFY `ticketId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishListId` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `offlinepayement`
--
ALTER TABLE `offlinepayement`
  ADD CONSTRAINT `offlinepayement_ibfk_1` FOREIGN KEY (`payId`) REFERENCES `payement` (`payId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
