-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: sophia
-- Generation Time: Mar 20, 2019 at 07:45 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aagarwal`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `itemID` int(11) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `itemDescription` longtext NOT NULL,
  `itemCategory` varchar(255) NOT NULL,
  `itemImage` varchar(255) NOT NULL,
  `itemPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`itemID`, `itemName`, `itemDescription`, `itemCategory`, `itemImage`, `itemPrice`) VALUES
(1, 'Programming the World Wide Web', 'A programming book to teach you the basics of the World Wide Web concepts that involves concepts from HTML,CSS, JavaScript and many more.', 'Books', '1.jpg', 368.5),
(2, 'Data Analyis with Open Source Tools', 'A book to get you into the world of the data analysis and related tools that can help you learn more about machine learning and data analysis.', 'Books', '2.jpg', 400.5),
(3, 'Head First Java', 'A book that introduces you to the basic and needed concepts to learn more about the Java language', 'Books', '3.jpg', 255.5),
(4, 'The Lean Startup', 'This book is called the Bible of the start-ups and is recommended to all entrepreneurs who want to learn about a different concept and approach.', 'Books', '4.jpg', 368.5),
(5, 'Steve Jobs by Walter Isaacson', 'The biography of none other than Steve Jobs written and described in the most innovative and beautiful way possible.', 'Books', '5.jpg', 500.5),
(6, 'Gandhi- His life and message for the World', 'This is an extraordinary story of how the indomitable spirit of a man inspires the nation to triumph over tyranny. This is the story of Mahatma Gandhi, a man who owned nothing and gained everything', 'Books', '6.jpg', 600.6),
(7, 'To Kill a Mockingbird', 'To Kill a Mockingbird is a novel by Harper Lee published in 1960. It was immediately successful, winning the Pulitzer Prize, and has become a classic of modern American literature. ', 'Books', '7.jpg', 300.4),
(8, 'A Passage to India', 'E.M. Forster wrote his novel A Passage to India after multiple trips to the country throughout his early life.', 'Books', '8.jpg', 225.6),
(9, 'Pride and Prejudice', 'Pride and Prejudice is an 1813 romantic novel by Jane Austen. It charts the emotional development of the protagonist Elizabeth Bennet who learns ', 'Books', '9.jpg', 350.5),
(10, 'Sony WH1000XM3', 'An efficient headphone that gives a whole round experience with best bass and best treble.', 'Headphones', '10.jpg', 3000.5),
(11, 'Bose QuietComfort 35 Series 2', 'Three levels of world-class noise cancellation for better listening experience in any environment\n', 'Headphones', '11.jpg', 3100.5),
(12, 'COWIN E7 Active Noise Cancelling Headphones Bluetooth Headphone', 'Professional Active Noise Cancelling Technology.\n', 'Headphones', '12.jpg', 800.4),
(13, 'Bose SoundSport Wireless Headphones', 'A high-quality audio experience, consistently balanced at any volume, thanks to ', 'Headphones', '13.jpg', 1500.4),
(14, 'Mpow Flame Bluetooth Headphones Waterproof IPX', 'IPX7 SWEATPROOF EARPHONES Mpow IPX7 Water-resistant Nano-coating efficiently', 'Headphones', '14.jpg', 200.6),
(15, 'Sony MDR7506 Professional Large Diaphragm Headphone', 'Neodymium magnets and 40mm drivers for powerful, detailed sound\n', 'Headphones', '15.jpg', 1000.2),
(16, 'LETSCOM Bluetooth Headphones IPX7 Waterproof Wireless Sport Earphones Bluetooth 4', 'Modern Wireless Bluetooth Headphones that have long battery life and compatible with Bluetooth and NFC. Also known for its long durability.', 'Headphones', '16.jpg', 220.2),
(17, 'SoundPEATS Bluetooth Headphones Magnetic Wireless Earbuds Neckband Headset Sport Ear Earphones with Mic ', 'Magnetic Wireless Bluetooth Headphones that has long battery life and gives the best sound quality with quick connect and easy to use.', 'Headphones', '17.jpg', 390.5),
(18, 'Wireless Earbuds AMZLUV Wireless Headphones HD Stereo Sound Wireless Earbuds Bluetooth 5', 'True wireless earbuds AMZLUV TWS technology makes wireless synchronous connection stereo pairing come true. No tangled cord nightmares to sort out. Without any cord troubles you can enjoy sports and music to the full\n', 'Headphones', '18.jpg', 500.5),
(19, 'Apple iMac 27 Retina 5K display, 3GHz quad-core Intel Core i5 8GB RAM, 1TB', '27-inch (diagonal) 5120 by 2880 Retina 5K display\n', 'Computers', '19.jpg', 15000.5),
(20, 'Apple iPad mini 4 ', '7.9 inch Retina display with antireflective coating\nA8 chip with 64 bit desktop-class architecture\n', 'Computers', '20.jpg', 4000.6),
(21, 'CYBERPOWERPC Gamer Xtreme GXIVR8020A5 Desktop Gaming PC', 'Best laptop for the gaming geeks.it is extremely fast with good hard disk space and RAM and based on Windows.', 'Computers', '21.jpg', 7750.4),
(22, 'New Microsoft Surface Go  ', 'the New Microsoft Surface Go is in the market and touching the skies with its cost and effeciency ', 'Computers', '22.jpg', 5500.5),
(23, 'Acer Aspire E 15, 15 inch Full HD, 8th Gen Intel Core i3', '8th Generation Intel Core i3-8130U Processor (Up to 3.4GHz)\n', 'Computers', '23.jpg', 3500.4),
(24, 'Lenovo Chromebook C330 Convertible Laptop', 'HIGH PERFORMANCE LAPTOP The Chromebook C330 is equipped with a MediaTek MT8173C Processor, Chrome OS, 4 GB LPDDR3, 64 GB eMMC and so much more\n', 'Computers', '24.jpg', 2400.4),
(25, 'Microsoft Surface Pro 6 ', 'The Microsoft Surface Pro 6 is not just fast and flexible but also works smoothly with a long battery life of 12 hrs', 'Computers', '25.jpg', 9000.3),
(26, 'Samsung Galaxy Tab A ', 'The perfect mix of a laptop and a phone with perfect amount of battery life and efficiency to help you get through your office day in a smooth way.', 'Computers', '26.jpg', 1900.5),
(27, 'Acer Predator Helios 300 Gaming Laptop', '8th Generation Intel Core i7 8750H 6 Core Processor (Up to 4.1GHz) with Windows 10 Home 64 Bit\n', 'Computers', '27.jpg', 10000.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`itemID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
