-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 04:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animal_shelter`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`) VALUES
(1, 'puteri', 'puterib701@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'muhammad', 'm@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Luqman', 'luqmanhakimi@gmail.com', '123'),
(4, 'efedf', 'ewew@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`) VALUES
(0001, 'Hakim', 'hakim01@gmail.com', 'hakim1234xyxy'),
(0002, 'Ahmad', 'ahmad567@gmail.com', 'ahmad1234456xyxy'),
(0003, 'Hayati', 'hayati909@gmail.com', 'hayati1446576xyxy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

-- --------------------------------------------------------

--
-- Table structure for table `animal_shelter`
--

CREATE TABLE `animal_shelter` (
  `animalShel_id` int(11) NOT NULL,
  `animalShel_name` varchar(200) NOT NULL,
  `animalShel_link` varchar(200) NOT NULL,
  `animalShel_description` varchar(500) NOT NULL,
  `animalShel_email` varchar(200) NOT NULL,
  `animalShel_telno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animal_shelter`
--

INSERT INTO `animal_shelter` (`animalShel_id`, `animalShel_name`, `animalShel_link`, `animalShel_description`, `animalShel_email`, `animalShel_telno`) VALUES
(001, 'Second Chance Animal Society', 'https://www.secondchance.com.my/', 'Second Chance (formerly known as Paws Mission) has a no-kill policy and aims to reduce the stray animal population and improve animal welfare in Malaysia through the following objectives which are rehome stray and abandoned puppies and dogs, vaccinate and neuter them, educate pet owners or adopters on caring for and neutering their pets and raise awareness and advocate for animal welfare among the public at large.','info@secondchance.com.my','+6012 919 2263'),
(002, 'Meowy Cat Shelter', 'https://www.meowyshelter.com/', 'Established by Pauline in 2014, Meowy Cat Shelter is a sanctuary for abandoned kitties. This Penang-based shelter strives to heal injured cats and find them a loving home. With a 5/5 rating on Facebook from over 100 reviews, Pauline and her team are described as extremely loving towards their hundreds of fur babies. The place is clean and well-maintained, and a great choice if you’re looking to adopt a cat in Penang!','meowy135@yahoo.com','+6016-422 9091'),
(003, 'Woo & Meow Animal Shelter', 'https://www.woomeow.org/', 'Operating since 2013, Woo & Meow Animal Shelter is a true doggy paradise for its 300+ furry residents. The shelter is spearheaded by Kim, a 65-year old woman that treats each dog as if they are her own children. In a recent interview, Kim mentioned that despite using up her money to take care of the dogs, she won’t give up on them. Her strong love for the animals is apparent and she hopes to continue giving them the best life possible.','info@woomeow.org','+6018-777 7698'),
(004, 'Cat Beach Sanctuary', 'https://catbeachpenang.com/', 'In the fishing village of Teluk Bahang, Penang, you’ll find a beach full of feline friends. Welcome to Cat Beach Sanctuary — the beachside home to 300 rescued cats! Expatriates Barbara Janssen and Teviot Fairservis transformed an old wooden house on the beach into a haven for stray cats in 2014. Now, it has expanded into an educational centre and tourist attraction for travellers and pet lovers alike.','catbeachsanctuary@gmail.com','+6017-575 3419');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal_shelter`
--
ALTER TABLE `animal_shelter`
  ADD PRIMARY KEY (`animalShel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animal_shelter`
--
ALTER TABLE `animal_shelter`
  MODIFY `animalShel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donation_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `donation_amount` decimal(5,2) NOT NULL,
  `donation_total` decimal(5,2) NOT NULL,
  `donation_date` DATE,
  PRIMARY KEY (`donation_id`),
  FOREIGN KEY (`user_id`) REFERENCES `users`(`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donation_id`, `user_id`, `donation_amount`, `donation_total`, `donation_date`) VALUES
(11, '1', '1000', '', '2023-06-21'),
(12, '2', '1500', '', '2023-06-3'),
(13, '3', '900', '', '2023-06-6'),
(14, '4', '2300', '', '2023-06-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
    `volunteer_id` INT(11) NOT NULL,
    `volunteer_name` VARCHAR(200) NOT NULL,
    `volunteer_telno` VARCHAR(20) NOT NULL,
    PRIMARY KEY (`volunteer_id`)
) ENGINE = INNODB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`volunteer_id`, `volunteer_name`, `volunteer_telno`) VALUES
(111,  'Mary Mei', '0183953718'),
(112,  'David Smith', '01128274816'),
(113,  'Fatin Nabilah Syukri', '0177426645'),
(114,  'Aqilah Jaiz', '0192761906');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`volunteer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `volunteer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
