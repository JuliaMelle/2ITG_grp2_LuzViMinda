-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 04:37 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luzviminda`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `post_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`post_id`, `user_id`, `title`, `content`) VALUES
(12, 26, 'Tahanan Ng Likha', 'Our local doll shoes are made by skilled Filipino artisans who take pride in their craftmanship. We used high-quality materials and create shoes that will perfectly match and complement in your outfits. \r\n'),
(13, 27, 'Local Bazaar!!!', 'Welcome to Local Bazaar!!\r\n\r\nA treasure trove of unique and locally crafted products that embody the rich cultural heritage and artistic traditions of the City of Pines.\r\n\r\nDiscover the beauty of handwoven textiles!~~'),
(14, 28, 'Beads 4 Youth', 'BEADS FOR YOUTH, your ultimate destination for all things beads and jewelry-making supplies. We provide a comprehensive range of jewelry making supplies and findings. We prioritize quality and craftmanship. '),
(15, 29, 'JULIES CRAFT SHOP', 'Please visit Julies Craft Shop! We made woven masks that are meticulously woven by skilled artisans using natural fibers such as cotton, abaca, or rattan. The intricate weaving patterns not only add a touch of elegance but also provide a breathable and comfortable fit.'),
(16, 30, 'FILOCAL', 'Please visit our shop, FILOCAL! ~ Support Local!!!!! Indulge in the beauty and craftmanship of our products and experience this fusion of tradition and modernity.'),
(17, 31, 'Nayi Store in Palawan', 'Discover the beauty and cultural significance of our products. Embrace the spirit of the Mangyan people and wear a piece of their story with pride and admiration.'),
(18, 33, 'E Trads Clo', 'Wearing our Filipino collection is not only a fashion statement but also a tribute to Filipino heritage and pride. Each garment and accessory represents the artistry, resilience, and rich history of the Filipino people');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `user_ID` int(11) NOT NULL,
  `contact_no` varchar(15) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `others` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`user_ID`, `contact_no`, `facebook`, `instagram`, `others`) VALUES
(26, '09951910951', 'Tahanan Ng Likha', 'aya_tnk', 'www.tnk.com'),
(27, '09393554310', 'Carl Santos', 'localbazaar_', 'lwww.localbazaar.com'),
(28, '09391234310', 'Beads 4 Youth', 'none', 'none'),
(29, '09391234310', 'Julies Craft Shop', 'none', 'none'),
(30, '09461910951', 'Filocal', '123filocal', 'none'),
(31, '09391234310', 'Nayi ', 'none', 'none'),
(32, '09391234310', 'none', 'none', 'none'),
(34, '09391234310', 'Crafted Comfort', 'cc123', 'www.crafted_comforts.com'),
(35, '09393554310', 'Jane ', 'jane123', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `seller_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(50) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_desc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `user_id`, `seller_name`, `category`, `product_name`, `product_price`, `product_img`, `product_desc`) VALUES
(5, 26, 'aya', 'NCR', 'Lily (Doll Shoes) ', 300, '1684665796', 'Color: Black Sizes: 35-40'),
(6, 26, 'aya', 'NCR', 'Cindy (Doll Shoes)', 300, '1684665858', 'Color: Brown Sizes: 35-40'),
(7, 27, 'carl', 'CAR', 'Walis Tambo', 100, '1684666557', 'A traditional Filipino broom made with expert craftmanship and natural materials.'),
(8, 27, 'carl', 'CAR', 'Special Woven Bag', 300, '1684666658', 'A stylish and functional accessory that showcases the artistry and craftmanship of the local community.'),
(9, 27, 'carl', 'CAR', 'Woven Coin Purse', 120, '1684666751', 'A small yet captivating accessory that combines functionality with artistry of local weaving traditions.'),
(10, 28, 'marie', 'ARMM', 'Handmade Earrings', 150, '0', 'A stunning collection of jewelry crafted with passion, love and attention to detail.'),
(11, 28, 'marie', 'ARMM', 'Handmade Bracelet', 200, '0', 'Indulge in the beauty of our handmade bracelet and experience the joy of wearing jewelry that tells a story.'),
(12, 29, 'julie', 'REGION 1', 'Aqua (Woven Mask)', 150, '1684669171', 'Handcrafted with care, these masks offer a unique blend of traditional craftmanship and modern design.'),
(13, 29, 'julie', 'REGION 1', 'Navy (Woven Mask)', 150, '1684668047', 'Handcrafted with care, these masks offer a unique blend of traditional craftmanship and modern design.'),
(14, 29, 'julie', 'NCR', 'Arianne (Woven Mask)', 150, '1684668076', 'Handcrafted with care, these masks offer a unique blend of traditional craftmanship and modern design.'),
(15, 29, 'julie', 'REGION 1', 'Carylle (Woven Mask)', 150, '1684668103', 'Handcrafted with care, these masks offer a unique blend of traditional craftmanship and modern design.'),
(16, 29, 'julie', 'REGION 1', 'Lasy (Woven Mask)', 150, '1684668136', 'Handcrafted with care, these masks offer a unique blend of traditional craftmanship and modern design.'),
(17, 30, 'juan', 'REGION 4A', 'Abaniko Fan', 75, '1684668747', 'Made from locally sourced  material, such as bamboo, rattan or abacca. '),
(18, 30, 'juan', 'REGION 4A', 'Babak Bag', 150, '1684668853', 'Inspired by the traditional weaving techniques of indigenous communities in the Philippines.'),
(19, 31, 'nayi', 'REGION 4B', 'Nito Plate', 300, '', 'Handwoven plate that showcases the natural beauty of nito vine.'),
(20, 31, 'nayi', 'NCR', 'Mangyan Bracelet', 120, '', 'Made with locally sourced materials.'),
(21, 31, 'nayi', 'REGION 4B', 'Mangyan Bracelet', 120, '1684669849_1048.png', 'Made with locally sourced materials.'),
(22, 32, 'randonn', 'NCR', 'Abaca Tote Bag', 150, '1684670241_1937.png', 'Made from the fibers of the abaca plant, a sustainable and renewable resource native to the Philippines.'),
(23, 32, 'randonn', 'REGION 5', 'Abaca Purse', 80, '1684670279_3231.png', 'Made from the fibers of the abaca plant, a sustainable and renewable resource native to the Philippines.'),
(24, 32, 'randonn', 'REGION 5', 'Abaca Rope', 200, '1684670347_9961.png', 'Made from the fibers of the abaca plant, also known as Manila hemp.'),
(25, 33, 'ellaine', 'REGION 6', 'Filipiniana', 1500, '1684670707_3052.png', 'Our Filipiniana features a range of garments and accessories inspired by traditional Filipino clothing.'),
(26, 33, 'ellaine', 'REGION 6', 'Baron', 1500, '1684670727_5449.png', 'Our Barong features a range of garments and accessories inspired by traditional Filipino clothing.'),
(27, 34, 'john', 'REGION 7', 'Mahogany Table Set', 12000, '', 'Introducing our exquisite Mahogany Table Set, a perfect blend of elegance, craftsmanship, and natural beauty. Handcrafted with precision, this set will become the centerpiece of your dining area, exuding timeless charm and sophistication.'),
(28, 35, 'jane', 'NCR', 'Crafted Wallet', 100, '1684671294_1819.png', 'Made from high quality materials'),
(29, 35, 'jane', 'REGION 10', 'Tboli Bracelet', 150, '1684675117_1055.jpg', 'Made with locally sourced materials.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(30) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(80) NOT NULL,
  `address` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `profile_img` varchar(255) NOT NULL,
  `valid_id_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `business_name`, `username`, `email`, `password`, `address`, `website`, `profile_img`, `valid_id_img`) VALUES
(26, 'Tahanan ng Likha', 'aya', 'aya_tnk@gmail.com', '0192023a7bbd73250516f069df18b500', '123 Shoe Street, Barangay Shoeville Marikina City, Metro Manila Philippines', '', '1684665637_3787.png', '1684665637_4359.png'),
(27, 'Local Bazaar', 'carl', 'localbazaar@gmail.com', '0192023a7bbd73250516f069df18b500', '123 Pine Street, Barangay Pinesville Baguio City, Benguet Philippines', '', '1684666428_5303.png', '1684666428_3016.png'),
(28, 'Beads 4 Youth', 'marie', 'b4youth@yahoo.com', '0192023a7bbd73250516f069df18b500', 'Barangay Poblacion Cotabato City, Maguindanao ARMM', '', '1684667181_5837.png', '1684667181_3271.png'),
(29, 'Julies Craft Shop', 'julie', 'jcshop@gmail.com', '0192023a7bbd73250516f069df18b500', 'La Union Region 1 Philippines', '', '1684667848_1531.png', '1684667848_1928.png'),
(30, 'Filocal', 'juan', 'filocal@gmai.com', '0192023a7bbd73250516f069df18b500', '456 Mabini Street, Brgy Pob. Calamba City, Laguna Region 4', '', '1684668551_1500.jpg', '1684668551_4473.png'),
(31, 'Nayi Store', 'nayi', 'nystore@yahoo.com', '0192023a7bbd73250516f069df18b500', '333 Palawan Street, Brgyg Puerto Prinsesa City ', '', '1684669543_7487.png', '1684669543_7392.png'),
(32, 'RS Store', 'randonn', 'rstore@gmail.com', '0192023a7bbd73250516f069df18b500', 'Brgy Legazpi City Albay', '', '1684670098_2500.png', '1684670098_9550.png'),
(33, 'E Trads Clo', 'ellaine', 'etradsclo@gmail.com', '0192023a7bbd73250516f069df18b500', 'Brgy La Paz, Ilo Ilo City', '', '1684670761_5582.png', '1684670607_7192.png'),
(34, 'Crafted Comforts', 'john', 'cc@gmail.com', '0192023a7bbd73250516f069df18b500', 'Cebu City', '', '1684671008_9519.png', '1684671008_9421.png'),
(35, 'Jane Souvenir Shopee', 'jane', 'jss@gmail.com', '0192023a7bbd73250516f069df18b500', 'Brgy Kauswagan, Cagayan De Oro City', '', '1684671217_1792.png', '1684671217_4760.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`user_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `post_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
