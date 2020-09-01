-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: sql37.jnb2.host-h.net
-- Generation Time: Sep 01, 2020 at 10:17 PM
-- Server version: 10.1.46-MariaDB-1~stretch
-- PHP Version: 5.6.40-0+deb8u12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team_database_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `fixtures`
--

CREATE TABLE `fixtures` (
  `id` int(11) NOT NULL,
  `league_name` varchar(250) NOT NULL,
  `team_1_name` varchar(250) NOT NULL,
  `team_2_name` varchar(250) NOT NULL,
  `venue_id` int(10) NOT NULL,
  `referee` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `match_date` datetime NOT NULL,
  `identintifier` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fixtures`
--

INSERT INTO `fixtures` (`id`, `league_name`, `team_1_name`, `team_2_name`, `venue_id`, `referee`, `created_at`, `updated_at`, `match_date`, `identintifier`) VALUES
(1, 'League 1', 'Bidvest Wits', 'Black Leopards', 1, 0, '2020-08-24 22:28:22', '2020-08-24 22:28:22', '2020-08-31 15:15:00', ''),
(2, 'League 1', 'Amazulu Fc', 'Baroka Fc', 2, 0, '2020-08-25 21:28:10', '2020-08-25 21:28:10', '2020-08-30 18:00:00', ''),
(3, 'League 1', 'Bidvest Wits', 'Amazulu Fc', 3, 0, '2020-08-30 22:10:05', '2020-08-30 22:10:05', '2020-08-30 15:00:00', ''),
(5, '', 'Amazulu Fc', 'Baroka Fc', 2, 0, '2020-08-31 22:05:25', '2020-08-31 22:05:25', '2020-09-02 01:56:00', ''),
(6, '', 'Black Leopards', 'Bloemfontein Celtic', 2, 0, '2020-08-31 22:07:28', '2020-08-31 22:07:28', '2020-09-02 02:07:00', ''),
(7, '', 'Bidvest Wits', 'Baroka Fc', 1, 0, '2020-08-31 22:18:39', '2020-08-31 22:18:39', '2020-09-03 02:18:00', ''),
(8, '', 'Black Leopards', 'Bloemfontein Celtic', 3, 0, '2020-08-31 22:19:11', '2020-08-31 22:19:11', '2020-09-03 02:19:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `league`
--

CREATE TABLE `league` (
  `id` int(11) NOT NULL,
  `league_name` varchar(250) NOT NULL,
  `number_of_teams` int(11) NOT NULL,
  `image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `league`
--

INSERT INTO `league` (`id`, `league_name`, `number_of_teams`, `image`) VALUES
(1, 'League 1', 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `log_table`
--

CREATE TABLE `log_table` (
  `id` int(11) NOT NULL,
  `league_name` varchar(100) NOT NULL,
  `fixture_id` int(11) NOT NULL,
  `team_name` varchar(250) NOT NULL,
  `mp` int(11) NOT NULL,
  `w` int(11) NOT NULL,
  `d` int(11) NOT NULL,
  `l` int(11) NOT NULL,
  `pts` int(11) NOT NULL,
  `gf` int(11) NOT NULL,
  `ga` int(11) NOT NULL,
  `gd` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_table`
--

INSERT INTO `log_table` (`id`, `league_name`, `fixture_id`, `team_name`, `mp`, `w`, `d`, `l`, `pts`, `gf`, `ga`, `gd`, `created_at`, `updated_at`) VALUES
(1, 'League 1', 1, 'Bidvest Wits', 1, 1, 0, 0, 3, 3, 2, 1, '2020-09-01 18:09:41', '2020-09-01 18:09:41'),
(2, 'League 1', 1, 'Black Leopards', 1, 0, 0, 1, 0, 2, 3, -1, '2020-09-01 18:09:41', '2020-09-01 18:09:41'),
(3, 'League 1', 2, 'Bidvest Wits', 1, 1, 0, 0, 3, 0, 0, 0, '2020-09-01 18:09:41', '2020-09-01 18:09:41'),
(4, 'League 1', 2, 'Black Leopards', 1, 0, 0, 1, 0, 0, 0, 0, '2020-09-01 18:09:41', '2020-09-01 18:09:41'),
(5, 'League 1', 3, 'Bidvest Wits', 1, 0, 1, 0, 1, 3, 0, 3, '2020-09-01 18:09:42', '2020-09-01 18:09:42'),
(6, 'League 1', 3, 'Amazulu Fc', 1, 0, 1, 0, 1, 0, 3, -3, '2020-09-01 18:09:42', '2020-09-01 18:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `league_name` varchar(100) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `player_team` varchar(250) NOT NULL,
  `jersey_no` int(10) NOT NULL,
  `age` int(11) NOT NULL,
  `province_of_birth` varchar(200) NOT NULL,
  `home_town` varchar(200) NOT NULL,
  `player_image` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `country_of_birth` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `league_name`, `full_name`, `player_team`, `jersey_no`, `age`, `province_of_birth`, `home_town`, `player_image`, `created_at`, `updated_at`, `country_of_birth`) VALUES
(1, 'League 1', 'Mudau Masala', 'Black Leopards', 6, 27, 'Limpopo', 'Thohoyandou', '', '2020-08-31 03:32:10', '0000-00-00 00:00:00', ''),
(2, 'League 1', 'Eric Matsheru', 'Bidvest Wits', 8, 30, 'Gauteng', 'Kempton Park', 'WestVille', '2020-08-31 03:29:43', '0000-00-00 00:00:00', 'South Africa'),
(3, 'League 1', 'Rofhiwa Steven', 'Orlando Pirates', 10, 25, 'Limpopo', 'Tohoyandou', 'download.jpg', '2020-08-31 23:23:53', '2020-08-31 23:23:53', 'South Africa'),
(4, 'League 1', 'Rotshidzwa Muleka', 'Orlando Pirates', 10, 25, 'Limpopo', 'Thohoyandou', 'noimage.jpg', '2020-08-31 23:39:40', '2020-08-31 23:39:40', 'South Africa'),
(5, 'League 1', 'John Stephen', 'Orlando Pirates', 10, 45, 'Limpopo', 'Thohoyandou', 'noimage.jpg', '2020-08-31 23:42:50', '2020-08-31 23:42:50', 'South Africa'),
(6, 'League 1', 'Lizzy Stephen', 'Orlando Pirates', 10, 31, 'Limpopo', 'Tohoyandou', 'noimage.jpg', '2020-08-31 23:45:52', '2020-08-31 23:45:52', 'South Africa'),
(7, 'League 1', 'Terry Oliver', 'Orlando Pirates', 23, 24, 'Limpopo', 'Tohoyandou', 'Ae-Logo-Hori-White-01_1598925416.png', '2020-08-31 23:56:57', '2020-08-31 23:56:57', 'South Africa');

-- --------------------------------------------------------

--
-- Table structure for table `referee`
--

CREATE TABLE `referee` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `Home Town` varchar(200) NOT NULL,
  `Province` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `edited_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referee`
--

INSERT INTO `referee` (`id`, `fullname`, `Home Town`, `Province`, `email`, `created_at`, `edited_at`) VALUES
(1, 'Bernet Thwala', 'Zeerust', 'North West', 'bthwala@soccer.co.za', '2020-08-31 23:08:32', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `league_name` varchar(100) NOT NULL,
  `fixture_id` int(11) NOT NULL,
  `team_1_scores` int(5) NOT NULL,
  `team_2_scores` int(5) NOT NULL,
  `team_1` varchar(250) NOT NULL,
  `team_2` varchar(250) NOT NULL,
  `team_1_points` int(3) NOT NULL,
  `team_2_points` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `edited_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `league_name`, `fixture_id`, `team_1_scores`, `team_2_scores`, `team_1`, `team_2`, `team_1_points`, `team_2_points`, `created_at`, `edited_at`) VALUES
(1, 'League 1', 1, 2, 3, 'Black Leopards', 'Bidvest Wits', 0, 3, '2020-08-24 00:09:00', '2020-08-24 00:09:00'),
(2, 'League 1', 2, 0, 3, 'Black Leopards', 'Bidvest Wits', 0, 3, '2020-08-24 00:09:17', '2020-08-24 00:09:17'),
(3, 'League 1', 3, 1, 1, 'Bidvest Wits', 'Amazulu Fc', 1, 1, '2020-08-24 00:10:49', '2020-08-24 00:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` int(11) NOT NULL,
  `fixture_id` int(11) NOT NULL,
  `team_name` varchar(250) NOT NULL,
  `player_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `no_of_goals` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `fixture_id`, `team_name`, `player_id`, `created_at`, `no_of_goals`) VALUES
(1, 1, 'Black Leopards', 1, '2020-08-24 22:36:20', 2),
(2, 1, 'Bidvest Wits', 2, '2020-08-24 22:36:20', 3),
(3, 3, 'Bidvest Wits', 2, '2020-08-28 23:28:07', 3);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `league_name` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` text NOT NULL,
  `couch` varchar(250) NOT NULL,
  `manager` varchar(250) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `home_kit` varchar(250) NOT NULL,
  `away_kit` varchar(250) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `league_name`, `name`, `phone`, `email`, `address`, `couch`, `manager`, `logo`, `image`, `home_kit`, `away_kit`, `about`) VALUES
(1, 'League 1', 'Amazulu Fc', '031 303 3132', 'info@amazulu.net', '44 Isaiah Ntshangase Road\r\nAmaZulu FC Office\r\n4001\r\nDurban', 'Jozef Vukuši?', 'Dr Patrick Sokhela', 'Amazulu Fc', 'Amazulu Fc', '', '', ''),
(2, 'League 1', 'Baroka Fc', '', '', '', 'Dylan Kerr', 'Khurishi Mphahlele', 'Baroka Fc', 'Baroka Fc', '', '', ''),
(3, 'League 1', 'Bidvest Wits', '', '', '', 'Gavin Hunt', 'Lawrence Mulaudzi', 'BidVest Wits', 'BidVest Wits', '', '', ''),
(4, 'League 1', 'Black Leopards', '', '', '', 'Alan Clark', 'David Thidiela', 'Black Leopards', 'Black Leopards', '', '', ''),
(5, 'League 1', 'Bloemfontein Celtic', '0766611212', '', '55 Ebony Street \r\nKempton Park\r\n2015', 'John Maduka', 'Max Tshabalala', 'Bloemfontein Celtic', 'Bloemfontein Celtic', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'CiCi', 'kidtini@ambitiouz.co.za', NULL, '$2y$10$ipQsDnb3NS0/17NCpRolD.tkFSIvf0L3RK5ujYM4CHNObLHM8TH/u', NULL, '2020-08-23 17:49:45', '2020-08-23 17:49:45');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `province` varchar(150) NOT NULL,
  `location` varchar(150) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`id`, `name`, `province`, `location`, `capacity`) VALUES
(1, 'Orlando Stadium', 'Gauteng', 'Soweto', 45000),
(2, 'Soccer City', 'Gauteng', 'Soweto', 95000),
(3, 'Thohoyandou Stadium', 'Limpopo', 'Thohoyandou', 35000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fixtures`
--
ALTER TABLE `fixtures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `league`
--
ALTER TABLE `league`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_table`
--
ALTER TABLE `log_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referee`
--
ALTER TABLE `referee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fixtures`
--
ALTER TABLE `fixtures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `league`
--
ALTER TABLE `league`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_table`
--
ALTER TABLE `log_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `referee`
--
ALTER TABLE `referee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
