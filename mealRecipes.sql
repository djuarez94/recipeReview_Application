-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jan 18, 2017 at 08:55 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cookCheck`
--

-- --------------------------------------------------------

--
-- Table structure for table `mealRecipes`
--

CREATE TABLE `mealRecipes` (
  `id` int(11) NOT NULL,
  `imgUrl` varchar(255) NOT NULL,
  `recipeName` varchar(100) NOT NULL,
  `recipeDescr` text NOT NULL,
  `itemRecipeQuestion` varchar(210) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mealRecipes`
--

INSERT INTO `mealRecipes` (`id`, `imgUrl`, `recipeName`, `recipeDescr`, `itemRecipeQuestion`) VALUES
(1, 'https://www.thecheesecakefactory.com/assets/images/Menu-Import/CCF_LemonGarlicShrimp.jpg', 'Lemon Garlic Shrimp', 'Lemon Garlic Shrimp description looks like this.', 'Does this plate use shrimp or beef?'),
(2, 'https://www.thecheesecakefactory.com/assets/images/Menu-Import/CCF_AvocadoEggrolls.jpg', 'Avocado Egg Rolls', 'Avocado Egg Rolls description looks like this.', ''),
(3, 'https://www.thecheesecakefactory.com/assets/images/Menu-Import/CCF_BajaChickenHash.jpg', 'Baja Chicken Hash', 'Baja Chicken Hash description looks like this.', ''),
(4, 'https://www.thecheesecakefactory.com/assets/images/Menu-Import/CCF_FriedMacaroniandCheese.jpg', 'Fried Macaroni and Cheese', 'Fried Macaroni and Cheese description looks like this.', ''),
(5, 'http://www.thecheesecakefactory.com/assets/images/Menu-Import/CCF_ShrimpChickenGumbo.jpg', 'Shrimp Chicken Gumbo', 'Shrimp Chicken Gumbo description looks like this.', ''),
(6, 'https://www.thecheesecakefactory.com/assets/images/Menu-Import/CCF_SkinnyliciousChickenEnchiladas.jpg', 'Skinnylicious Chicken Enchiladas', 'Skinnylicious Chicken Enchiladas description looks like this.', ''),
(7, 'https://www.thecheesecakefactory.com/assets/images/Menu-Import/CCF_LouisianaChickenPasta.jpg', 'Louisiana Chicken Pasta', 'Louisiana Chicken Pasta description looks like this.', ''),
(8, 'https://www.thecheesecakefactory.com/assets/images/Menu-Import/CCF_CajunJambalayaPasta.jpg', 'Cajun Jambalaya Pasta', 'Cajun Jambalaya Pasta description looks like this.', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mealRecipes`
--
ALTER TABLE `mealRecipes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mealRecipes`
--
ALTER TABLE `mealRecipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
