-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 16, 2020 at 04:40 PM
-- Server version: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'New',
  `producer` varchar(255) NOT NULL,
  `number_of_books` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `category_id`, `author`, `price`, `image`, `status`, `producer`, `number_of_books`) VALUES
('Book_001', 'Conan', 'Category_001', ' Aoyama Gosho', '20000', 'Screenshot from 2020-04-17 14-29-16.png', 'New', 'Kim Äá»“ng', 99),
('Book_005', 'abc', 'Category_999', 'Fujimoto', '10000', 'hotgirl4.jpg', 'New', 'sasasa', 12),
('Book_006', 'dasdasd', 'Category_999', 'dasdsa', '1234', 'hotgirl3.jpg', 'New', 'sasasa22', 12);

-- --------------------------------------------------------

--
-- Table structure for table `borrows`
--

CREATE TABLE `borrows` (
  `id` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `borrow_date` date NOT NULL,
  `return_date` date NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Borrow',
  `pay_id` varchar(255) DEFAULT NULL,
  `pay_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrows`
--

INSERT INTO `borrows` (`id`, `student_id`, `borrow_date`, `return_date`, `status`, `pay_id`, `pay_date`) VALUES
('Borrow_001', 'Student_001', '2020-05-16', '2020-05-20', 'Borrow', NULL, NULL),
('Borrow_002', '111', '2020-05-16', '2020-05-20', 'Borrow', NULL, NULL),
('q11', 'Student_001', '2020-02-02', '2020-02-02', 'dsds', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`) VALUES
('Category_001', 'Kids Book', 'hotgirl2.jpg'),
('Category_999', 'Unknown', 'library.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `detailBorrows`
--

CREATE TABLE `detailBorrows` (
  `book_id` varchar(255) NOT NULL,
  `borrow_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailBorrows`
--

INSERT INTO `detailBorrows` (`book_id`, `borrow_id`) VALUES
('Book_001', 'Borrow_002');

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `id` varchar(250) NOT NULL,
  `borrow_id1` varchar(255) NOT NULL,
  `reality_return_date` date NOT NULL,
  `monetary_fine` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `class_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Clean',
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `address`, `birthday`, `class_id`, `status`, `image`) VALUES
('100', 'fdfd', 'fdfdfd@fdf', '01243453', 'Ha Noi', '2001-03-23', NULL, 'Borrow', 'Screenshot from 2020-04-22 18-32-46.png'),
('111', 'tam', 'trantam1@gmail.com', '1234567891', 'Ha Noi', NULL, NULL, 'Borrow', 'chibi1.jpg'),
('sasas', 'sasasa', 'sasas', 'sasa', '  ', '1991-03-31', NULL, 'Clean', 'chibi2.jpg'),
('Student_001', 'Tran Van Tam', 'trantam1@gmail.com', '0986888888', 'Ha Noi', '1991-08-31', NULL, 'Borrow', 'chibi3.jpg'),
('Student_003', 'Nguyen Van An', 'trantam5@gmail.com', '0986888888767', 'Ha Noi', NULL, NULL, 'Borrow', 'Screenshot from 2020-04-24 17-38-22.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`) VALUES
('Ethanol1', 'Tam', 'trantam1@gmail.com', '123456789@Q', '0986888888'),
('Ethanol2', 'An', 'trantam2@gmail.com', '12345678@Q', '0986123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `borrows`
--
ALTER TABLE `borrows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `pay_id` (`pay_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detailBorrows`
--
ALTER TABLE `detailBorrows`
  ADD KEY `book_id` (`book_id`),
  ADD KEY `borrow_id` (`borrow_id`);

--
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`),
  ADD KEY `borrow_id1` (`borrow_id1`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `borrows`
--
ALTER TABLE `borrows`
  ADD CONSTRAINT `pay_id` FOREIGN KEY (`pay_id`) REFERENCES `pays` (`id`),
  ADD CONSTRAINT `student_id` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `detailBorrows`
--
ALTER TABLE `detailBorrows`
  ADD CONSTRAINT `book_id` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `borrow_id` FOREIGN KEY (`borrow_id`) REFERENCES `borrows` (`id`);

--
-- Constraints for table `pays`
--
ALTER TABLE `pays`
  ADD CONSTRAINT `borrow_id1` FOREIGN KEY (`borrow_id1`) REFERENCES `borrows` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `class_id` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
