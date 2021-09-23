SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kitaab`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproducts`
--

CREATE TABLE `addproducts` (
  `id` int(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `author` varchar(250) NOT NULL,
  `category` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `sprice` varchar(250) NOT NULL,
  `dprice` varchar(250) NOT NULL,
  `prices` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addproducts`
--

INSERT INTO `addproducts` (`id`, `title`, `author`, `category`, `description`, `image`, `sprice`, `dprice`, `prices`) VALUES
(5, 'Fundamentals of Physics', 'Jearl Walker', 'Academic', 'A physics book','acb1.jpg',  '250', '450', '200'),
(8, 'Calculus', 'Howard Anton', 'Academic', 'A mathematics book', 'acb2.jpg', '250', '350', '100'),
(12, 'Digital Fundamentals', 'Thomas Floyd', 'Academic', 'An electronics book', 'acb3.jpg', '220', '350', '130'), 
(13, 'Advanced Engineering Mathematics', 'Erwin Kreyszig', 'Academic', 'An mathematics book', 'acb4.jpg', '210', '350', '140'), 
(15, 'The Complete Reference C++', 'Herbert Schildt', 'Promgramming', 'An Promgramming book', 'Cp1.jpg', '350', '400', '50'), 
(20, 'Core Java Volume I--Fundamentals', 'Cay S. Horstmann', 'Promgramming', 'An Promgramming book', 'Cp2.jpg', '330', '400', '80'),
(22, 'Microsoft Visual C# Step by Step', 'John Sharp', 'Promgramming', 'An Promgramming book', 'Cp3.jpg', '310', '380', '70'),
(24, 'Algorithm Design', 'Michael T.Goodrich', 'Promgramming', 'An Promgramming book', 'Cp4.jpg', '290', '360', '70');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`) VALUES
(1, 'g9bookshop@gmail.com', '123456', 'G9Bookshop');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(250) NOT NULL,
  `image` varchar(300) NOT NULL,
  `title` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--


-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmp` varchar(250) NOT NULL,
  `contact` int(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(200) NOT NULL,
  `address` varchar(250) NOT NULL,
  `pincode` int(7) NOT NULL,
  `profile` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`, `confirmp`, `contact`, `dob`, `gender`, `address`, `pincode`, `profile`) VALUES
(41, 'Syed Ashraful', 'syed_ashraful@gmail.com', '1234567897', '1234567897', 2147483647, '2020-11-21', 'Male', 'aAac', 123456, 'thegirlintheroom102.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addproducts`
--
ALTER TABLE `addproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addproducts`
--
ALTER TABLE `addproducts`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
