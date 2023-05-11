-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 10:25 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanbonmatsu_reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(7) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `profile_picture` varchar(255) NOT NULL DEFAULT 'images/default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `user_name`, `email`, `phone_number`, `password`, `name`, `profile_picture`) VALUES
(1, 'kaufmann', 'adrifd.kaufmann@gmail.com', '+6285718870936', '12345678', 'Kaufmann', 'images/default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `email_details`
--

CREATE TABLE `email_details` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_email` varchar(255) NOT NULL,
  `email_function` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `email_details`
--

INSERT INTO `email_details` (`id`, `email`, `password_email`, `email_function`) VALUES
(1, 'adri.testcoding@gmail.com', 'Sanbonmatsu-test', 'Reservation Notification');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_img` varchar(255) DEFAULT 'images/default.jpg',
  `item_stock` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `subcategory` varchar(30) NOT NULL,
  `item_price` float NOT NULL,
  `additional_info` varchar(500) DEFAULT NULL,
  `item_note` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `item_img`, `item_stock`, `category`, `subcategory`, `item_price`, `additional_info`, `item_note`) VALUES
(1, 'Individual for less than 5 people', 'images/personalhiking.jpg', 5, 'Hiking', 'Personal', 900, '* Within 30 minute : 900 yen (per person) </br>\r\n* Over 30 minutes to within 4 hours : Add 900 yen for each 30 minutes (per person)</br>\r\n* Over 4 hours (within 8 hours) : 10,000 yen (per person)', 'Please contact us for guides that exceed 8 hours.'),
(2, 'Group rate ①: Single group guide for 5 people or more to less than 25 people ', 'images/personalhiking.jpg', 5, 'Hiking', 'Personal', 15000, '* Within 2 hours : 15,000 yen </br>\r\n* More than 2 hours to less than 4 hours : 18,000 yen</br>\r\n* Over 4 hours (within 8 hours) : 28,000 yen', 'Please contact us for guides that exceed 8 hours.'),
(3, 'Group rate ②: Double group guide for 25 people or more to less than 45 people', 'images/personalhiking.jpg', 5, 'Hiking', 'Personal', 18000, '* Within 2 hours : 18,000 yen</br>\r\n* More than 2 hours to less than 4 hours : 26,000 yen</br>\r\n* Over 4 hours to within 8 hours : 36,000 yen', 'It will be a guided tour for a large number of people at the same time using a remote wireless microphone with one guide. All participants will wear a small, lightweight receiver with earphones around their neck. Since the voice of the guide reaches'),
(4, 'Group rate ③: Leading group guide for 5 people or more to less than 45 people', 'images/personalhiking.jpg', 5, 'Hiking', 'Personal', 15000, '* Within 2 hours : 15,000 yen</br>\r\n* More than 2 hours to less than 4 hours : 20,000 Yen</br>\r\n* Over 4 hours to within 8 hours : 25,000 yen', 'One guide will lead the hiking course while confirming the safety of black bears, hornets, etc. There will be a commentary on manners and courses before the hike, and a Q&A session after the hike. The activity time varies depending on the course, but as a guideline, it will be about 1 hour shorter than the normal course time. Please note that some courses may not be accepted. We also ask for your cooperation in safety management. Only those who lead the tour will be asked to hang a small, '),
(5, 'Business trip lecture fee for group only: required time is 1 hour', 'images/businesshiking.jpg', 5, 'Hiking', 'Business', 15000, '* Less than 30 : 15,000 yen</br>\r\n* 30 or more and less than 100 : 18,000 yen</br> * 100 or more and less than 150: 21,000 yen</br>\r\n* 150 or more and less than 200 : 25,000 yen', 'We will prepare the equipment (PC, projector, screen, power cord, speakers, etc.) necessary for the on-site lecture. Please secure a room (accommodation, etc.) where the lecture can be held. 1 hour is divided into 50 minutes for slide show and 10 minutes for Q&A. For more than 200 people or extension of time, please contact us.'),
(6, 'Group rate ①: Single group guide for 5 people or more to less than 25 people', 'images/businesshiking.jpg', 5, 'Hiking', 'Student', 15000, '* Within 2 hours : 15,000 yen</br>\r\n* More than 2 hours to less than 4 hours : 18,000 yen</br>\r\n* Over 4 hours (within 8 hours) : 25,000 yen', 'Please contact us for guides that exceed 8 hours.'),
(7, 'Group rate ②: Double group guide for 25 people or more to less than 45 people', 'images/studenthiking.jpg', 5, 'Hiking', 'Student', 15000, '* Within 2 hours : 15,000 yen</br>\r\n* More than 2 hours to less than 4 hours : 22,500 yen</br>\r\n* Over 4 hours (within 8 hours) : 32,500 yen', 'It will be a guided tour for a large number of people at the same time using a remote wireless microphone with one guide. All participants will wear a small, lightweight receiver with earphones around their neck. Since the voice of the guide reaches all the participants directly, noise to the outside can be suppressed more than the voice guide. In addition, we would like to ask those who lead us to cooperate with safety management.'),
(8, 'Group rate ③: Leading group guide for 5 people or more to less than 45 people', 'images/studenthiking.jpg', 5, 'Hiking', 'Student', 12000, '* Within 2 hours : 12,000 yen</br>\r\n* More than 2 hours to less than 4 hours : 16,000 yen</br>\r\n* Over 4 hours to within 8 hours : 20,000 Yen', 'One guide will lead the hiking course while confirming the safety of black bears, hornets, etc. There will be a commentary on manners and courses before the hike, and a Q&A session after the hike. The activity time varies depending on the course, but as a guideline, it will be about 1 hour shorter than the normal course time. Please note that some courses may not be accepted. We also ask for your cooperation in safety management. Only those who lead the tour will be asked to hang a small, lightw'),
(12, 'Restaurant Reservation', 'images/restaurant.jpg', 15, 'Restaurant', 'Table', 1000, '1 Quantity of reservation is for 1 person to 6 people', 'Restaurant is open from 08:00 to 21:00'),
(13, 'Ferrari E-Bike TDR-3000', 'images/ferraribike.jpg', 5, 'E-Bike', 'Casual', 2000, 'A very good E-bike and sporty looking </br>\r\n*For Casual use only!*', 'Please read the terms and conditions of the E-Bike reservation and please understand the return policies if there are any damage caused by the customers.'),
(14, 'BMW E-Bike GER-420', 'images/bmwbike.jpg', 5, 'E-Bike', 'Casual', 4000, 'Sporty looking casual E-bike, good for photograph. </br>\r\n*For Casual use only!*', 'Please read the terms and conditions of the E-Bike reservation and please understand the return policies if there are any damage caused by the customers.'),
(15, 'SUBARU E-Bike SBR-69 Pro', 'images/subarubike.jpg', 7, 'E-Bike', 'Mountain', 5000, 'A strong and powerful bike, good for a sporty use in an extreme conditions.', 'Please read the terms and conditions of the E-Bike reservation and please understand the return policies if there are any damage caused by the customers.'),
(16, 'Nikko Brewing BBQ', 'images/bbq.jpeg', 1, 'Nikko Craft Beer BBQ', 'BBQ', 3000, 'For 1 serving (300g of meat) 3,000 Yen</br>\r\nWe use Tochigi beef and pork.</br>\r\nAvailable from 10:00 AM to 04:00PM </br>\r\n*In addition to meat, seasonal vegetables and yakisoba are included.', 'Reservations can be made from 3 days to 2 weeks before the desired date, but we would appreciate it if you could contact us as soon as possible.\r\nFor last-minute reservations, it is better to contact us by phone.'),
(17, 'Cross-country ski - adult', 'images/default.jpg', 10, 'Winter Activity Equipment', 'equipment', 1800, 'Cross-country skis, unlike piste skis, have a non-slip kick zone on the bottom of the board. This makes it the perfect tool for hiking during the snowy season, as it allows you to not only slip, but also walk on gentle slopes. ', '*1: The set includes skis, poles and shoes.</br>\r\n*2: Please note that additional fees may be charged for damaged (unusable) or lost items.'),
(31, 'test', 'images/ferraribike.jpg', 200, 'E-Bike', 'Casual', 3000, 'test update', 'test update'),
(36, 'Beer Brewing Experience', 'images/beermakingbanner.jpg', 1, 'Nikko Craft Beer', 'Beer Brewing Experience', 60000, '* 40 bottles of beers will be sent 1 week after the event to the address given</br>\r\n* One reservation can be attended by 1 to 6 participants </br>\r\n', '* Our services is closed on Tuesday </br>\r\n* Reservation can only be made from 3 to 14 days from the day you are making the reservation </br>\r\n* Drinking and driving is illegal, if you drink from the taproom please don\'t drive</br>\r\n* Please read our cancellation policies'),
(37, 'Cross-country ski - children', 'images/default.jpg', 10, 'Winter Activity Equipment', 'equipment', 1500, 'Cross-country skis, unlike piste skis, have a non-slip kick zone on the bottom of the board. This makes it the perfect tool for hiking during the snowy season, as it allows you to not only slip, but also walk on gentle slopes. ', '*1: The set includes skis, poles and shoes.</br>\r\n*2: Please note that additional fees may be charged for damaged (unusable) or lost items.'),
(38, 'Snowshoe - adult (hourly)', 'images/default.jpg', 10, 'Winter Activity Equipment', 'equipment', 250, '* Minimum Rent is 2 hours', '*1: The set includes skis, poles and shoes.</br>\r\n*2: Please note that additional fees may be charged for damaged (unusable) or lost items.'),
(39, 'Snowshoe - children (hourly)', 'images/default.jpg', 10, 'Winter Activity Equipment', 'equipment', 250, '* Minimum Rent is 2 hours', '*1: The set includes skis, poles and shoes.</br>\r\n*2: Please note that additional fees may be charged for damaged (unusable) or lost items.'),
(40, 'Snowshoe - children (Daily)', 'images/default.jpg', 10, 'Winter Activity Equipment', 'equipment', 800, '* Extention per 1 hour will cost 100 Yen', '*1: The set includes skis, poles and shoes.</br>\r\n*2: Please note that additional fees may be charged for damaged (unusable) or lost items.'),
(41, 'Snowshoe - Adult (Daily)', 'images/default.jpg', 10, 'Winter Activity Equipment', 'equipment', 1000, '* Extention per 1 hour will cost 100 Yen', '*1: The set includes skis, poles and shoes.</br>\r\n*2: Please note that additional fees may be charged for damaged (unusable) or lost items.');

-- --------------------------------------------------------

--
-- Table structure for table `item_cart`
--

CREATE TABLE `item_cart` (
  `cart_id` int(11) NOT NULL,
  `item_category` varchar(255) NOT NULL,
  `item_subcategory` varchar(255) NOT NULL,
  `cart_owner` varchar(20) NOT NULL,
  `date_made` date NOT NULL DEFAULT current_timestamp(),
  `item_name` varchar(255) NOT NULL,
  `reserve_date` date NOT NULL,
  `reserve_hour` time NOT NULL,
  `duration` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `total_price` float NOT NULL,
  `note` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item_cart`
--

INSERT INTO `item_cart` (`cart_id`, `item_category`, `item_subcategory`, `cart_owner`, `date_made`, `item_name`, `reserve_date`, `reserve_hour`, `duration`, `quantity`, `total_price`, `note`) VALUES
(16, 'Nikko Craft Beer', 'Beer Brewing Experience', 'Adri Firdiansyah', '2023-03-30', 'Beer Making Experience', '2023-04-02', '09:30:00', 1, 1, 60000, 'Participants: Adri, Eren, Levi, Erwin, Berutoto, Naruto'),
(17, 'Hiking', 'Personal', 'Adri Firdiansyah', '2023-03-30', 'Individual for less than 5 people', '2023-04-03', '09:00:00', 4, 2, 7200, 'aaaa'),
(18, 'E-Bike', 'Casual', 'Adri Firdiansyah', '2023-03-30', 'Ferrari E-Bike TDR-3000', '2023-04-04', '13:00:00', 4, 1, 8000, ''),
(19, 'E-Bike', 'Casual', 'Adri Firdiansyah', '2023-03-30', 'Ferrari E-Bike TDR-3000', '2023-04-04', '13:00:00', 4, 1, 8000, '');

-- --------------------------------------------------------

--
-- Table structure for table `payment_table`
--

CREATE TABLE `payment_table` (
  `id` int(11) NOT NULL,
  `payment_code` varchar(10) NOT NULL DEFAULT 'PAY',
  `reservation_date` date NOT NULL DEFAULT current_timestamp(),
  `payment_number` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_postcode` int(11) NOT NULL,
  `item_included` varchar(500) NOT NULL,
  `total_pay` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `rsv_id` int(11) NOT NULL,
  `date_made` date NOT NULL DEFAULT current_timestamp(),
  `reservation_date` date NOT NULL,
  `reservation_hour` time NOT NULL,
  `duration` int(11) NOT NULL,
  `reservation_number` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `e-mail` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` float NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`rsv_id`, `date_made`, `reservation_date`, `reservation_hour`, `duration`, `reservation_number`, `customer_name`, `address`, `e-mail`, `phone_number`, `item_name`, `category`, `subcategory`, `quantity`, `total_price`, `status`) VALUES
(1, '2023-03-01', '2023-03-10', '09:00:00', 4, 'RSV/1/0103/10032023', 'Adri Kaufmann', '', '', '', 'Ferrari E-Bike TDR-3000', 'E-Bike', 'Casual', 1, 8000, 'Success'),
(2, '2023-03-01', '2023-03-09', '09:00:00', 4, 'RSV/2/0103/10032023', 'Adri Kaufmann', '', '', '', 'Ferrari E-Bike TDR-3000', 'E-Bike', 'Casual', 1, 8000, 'Cancelled');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `email_details`
--
ALTER TABLE `email_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `item_cart`
--
ALTER TABLE `item_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `payment_table`
--
ALTER TABLE `payment_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`rsv_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email_details`
--
ALTER TABLE `email_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `item_cart`
--
ALTER TABLE `item_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `payment_table`
--
ALTER TABLE `payment_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `rsv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
