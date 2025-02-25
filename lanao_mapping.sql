-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2025 at 06:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lanao_mapping`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangays`
--

CREATE TABLE `barangays` (
  `id` int(11) NOT NULL,
  `municipality_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `population` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `culture` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `municipalities`
--

CREATE TABLE `municipalities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `population` int(11) NOT NULL,
  `barangays` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `culture_image` varchar(255) DEFAULT NULL,
  `culture` text DEFAULT NULL,
  `general_info` text DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `municipalities`
--

INSERT INTO `municipalities` (`id`, `name`, `latitude`, `longitude`, `population`, `barangays`, `image`, `culture_image`, `culture`, `general_info`, `updated_at`, `created_at`) VALUES
(1, 'Bacolod', 8.1903, 124.0203, 24367, 16, 'municipalities/bacolod.jpg', NULL, NULL, 'Before Spanish colonization, the Maranaos were the main inhabitants of Bacolod. During the Spanish period, leaders from Lanao del Norte would cross to Ozamis City by boat, reportedly capturing Visayans to serve as workers. The Mutia family of Zamboanga del Norte and Misamis Occidental is believed to have roots in Lanao del Norte, with a family legend involving a forbidden book containing unfamiliar writing, possibly in Spanish, English, or Arabic.\n\nDuring the American colonial era, the National Land Settlement Administration (NLSA) proposed using parts of Mindanao for government projects. Despite opposition from Congressman Datu Salipada Khalid Pendatun, the proposal was approved by President Manuel L. Quezon, leading to the arrival of settlers from Luzon and Visayas skilled in farming, engineering, logging, and construction.', NULL, NULL),
(2, 'Baloi', 8.1144, 124.2211, 68465, 21, 'municipalities/balo-i.png', NULL, NULL, 'The town was created from the municipal districts of Momungan, Pantar, and Balut (August 1, 1948). It is the mother town of Tagoloan (June 21, 1969) and Pantar (June 11, 1978).', NULL, NULL),
(3, 'Baroy', 8.0256, 123.7789, 24683, 23, 'municipalities/baroy.jpg', NULL, NULL, 'Baroy, originally called Baloy after a plant used for mat weaving, changed its name when the plant became extinct. It was once a barrio of Kolambugan but became part of Tubod when the latter separated from Kolambugan in 1946. Baroy became an independent municipality on June 10, 1949, through Executive Order No. 222, with parts of Kolambugan annexed to both Baroy and Tubod. On January 13, 1960, Salvador was separated from Baroy by Executive Order No. 370. The town celebrates the Lechon Festival every June 10.', NULL, NULL),
(4, 'Iligan City', 8.2286, 124.2381, 363115, 44, 'municipalities/iligan logo', NULL, NULL, 'Iligan is a highly urbanized city in Northern Mindanao, Philippines, with a population of 363,115 as of the 2020 census, making it the region’s second most populous city after Cagayan de Oro. Geographically part of Lanao del Norte, it is administered independently and is about 90 kilometers from Tubod, the provincial capital, and 800 kilometers from Manila.\n\nThe city’s name comes from the Higaunon word \"Ilig\", meaning \"to go downstream,\" or \"iligan/ilijan\", meaning \"fortress of defense,\" referencing its history of defending against pirate and tribal attacks. Covering 813.37 square kilometers, Iligan is one of the Philippines\' 10 largest cities by land area and ranks as the third-least densely populated highly urbanized city, with 421 inhabitants per square kilometer.', NULL, NULL),
(5, 'Kapatagan', 7.8983, 123.7697, 62571, 33, 'municipalities/kapatagan.jpg', NULL, NULL, 'Kapatagan has a total land area of 25,048.41 hectares, including the area now being contested by the municipality of Lala with an approximate area of 759 hectares', NULL, NULL),
(6, 'Kauswagan', 8.1914, 124.0881, 24193, 13, 'municipalities/kauswagan logo.jpg', NULL, NULL, 'Kauswagan became a municipality in 1948 through Executive Order No. 126, signed by President Manuel Roxas. It was separated from Iligan, including the barrios of Kauswagan, Linamon, Magoong, Purakan, Rebukon, Samburun, Lapayan, Takub, and Kawit.\n\nThe municipality experienced violence during martial law and the Ilaga-Moro conflict. In March 2000, then-President Joseph Estrada declared an all-out war against the Moro Islamic Liberation Front (MILF), led by Abdullah Macapaar, also known as \"Commander Bravo,\" resulting in clashes with the Philippine Army.', NULL, NULL),
(7, 'Kolambugan', 8.1122, 123.8958, 28265, 26, 'uploads/Seal_of_Nunungan.png', NULL, NULL, 'The name “Kolambugan” was taken from the word “kolambog”, a kind of tree which grew abundantly in the area. Some present day barangays were also called Migcamiguing and Maribojoc before, named also from trees of the same names which were found abundantly in the area.', NULL, NULL),
(8, 'Lala', 7.9731, 123.7475, 73425, 27, 'municipalities/lala.jpg', NULL, NULL, 'Lala was created from Tubod through Executive Order No. 208 signed by President Elpidio Quirino on March 22, 1949.[6]', NULL, NULL),
(9, 'Linamon', 8.1839, 124.1617, 21269, 8, 'municipalities/linamon.jpg', NULL, NULL, 'Before Spanish and American colonization, the majority of Linamon\'s population were Bisaya. According to folk stories, during the Spanish occupation, leaders from Lanao del Norte would cross from Kolambugan to Ozamis City by boat to capture people, referred to as Maranao in Bisaya, and use them as laborers. The Mutia family of Zamboanga del Norte and Misamis Occidental is believed to have originated from Lanao del Norte. A family legend tells of a forbidden book with unfamiliar writing, possibly in Spanish, English, or Arabic script.\n\nBetween 1935 and 1944, under the National Land Settlement Administration (NLSA) of the Commonwealth Government, the Philippine House of Representatives proposed utilizing land in Mindanao to aid the government. Congressman Datu Salipada Khalid Pendatun opposed the proposal, but it was approved and signed by President Manuel L. Quezon. The first settlers, skilled in agriculture, engineering, farming, lumber, and carpentry, came from Luzon and the Visayas, landing in specific areas of Mindanao.', NULL, NULL),
(10, 'Magsaysay', 8.0356, 123.9136, 20463, 24, 'municipalities/Magsaysay', NULL, NULL, 'Originally, Tangcal is part of Municipality of Munai. Some of the barangay in Magsaysay is the same with Tangcal because of the same location. Mayor Macasamat Omar was undefeated Mayor in Magsaysay had also Mayor of municipality of Tangcal. Late Mamalampac Mangansan Mutia of municipality of Tangcal was major rival of Mayor Macasamat Omar in municipality of Tangcal before when Magsaysay in newly establish. The first mayor of the municipality is Mayor Lumantas who was then succeeded by Mayor Guimba Dimakuta. He was then succeeded by Mayor Abdul Rashid M. Dimaporo in an election whose candidacy was challenged by three other candidates namely; Macasamat Omar, Lampa Mutia and Seogal.', NULL, NULL),
(11, 'Maigo', 8.1592, 123.9589, 23337, 13, 'municipalities/maigo.jpg', NULL, NULL, 'Maigo, originally part of Kolambugan, became an independent municipality in 1959 through Executive Order No. 331. It was formed from the barangays of Maigo, Balagatasa, Sigapud, and Mentring in Kolambugan, and Liagan Proper, Barogohan, and Camps I, II, and III from Bacolod. Known for the peaceful coexistence of Muslims and Christians, the town faced conflicts involving the Moro Islamic Liberation Front in recent years, prompting some residents to migrate to other areas in Lanao del Norte and Manila.\n\n\n\n\n\n\n\n', NULL, NULL),
(12, 'Matungao', 8.1333, 124.1664, 14756, 12, 'municipalities/3athMWtwkyIRvhtQti2dEZs1XXqExz8LcuH8JnQB.png', NULL, NULL, 'Executive Order No. 230, s. 1949, signed on June 20, 1949: \"...the barrios of Nunang, Matungao, Matampai, Pasayanon, Pangi, Somiorang, Batangan, Bangco, and Batal, all of the municipal district of Pantao-Ragat, Province of Lanao, are hereby organized into an independent municipal district under the name of Matungao with the seat of government at the barrio of Matungao.\"', '2025-02-24 04:34:48', NULL),
(13, 'Munai', 7.9858, 124.0522, 35020, 26, 'municipalities/ROj6a0jpTEQmKiUk8t2fJF8dXrPYCdkr3SBhIXwk.png', NULL, NULL, 'Munai, named after the foundation of the Four Federated Sultanates of Lanao, was established on August 17, 1917, under Commonwealth Act No. 38. It became part of Lanao del Norte on May 23, 1970. A fourth-class municipality with 26 barangays, it is located 18 kilometers from the national highway. The population is predominantly Maranao, with farming as the main livelihood, producing copra, corn, rice, and vegetables. About 80% of residents are farmers, 20% are small-scale business owners, and less than 1% are government employees. Munai\'s natural attractions include the Ledupa River, which flows 100 meters underground in Barangay Tambo, and Omnang Spring, known for its five crystal-clear water sources.', '2025-02-24 04:24:36', NULL),
(14, 'Nunungan', 7.8108, 123.9442, 18827, 25, 'municipalities/DtgtIga758CmCeq5yNlG2o4cx1S2MZ3ujHDM3601.png', NULL, NULL, 'Nunungan is a first-class municipality in Lanao del Norte, Philippines. It is part of the second congressional district of the province, represented in the Philippine Congress.\n\n\n\n\n\n\n\n', '2025-02-24 04:34:04', NULL),
(15, 'Pantao Ragat', 8.06, 124.1822, 30247, 20, 'municipalities/j26HkdwnyYAxD5ViNmWP32zxK0haOIY5QRrH7ki9.png', NULL, NULL, 'Pantao Ragat is a municipality in Lanao del Norte, Philippines, with a population of 30,247 as of the 2020 census. It is the mother town of the municipalities of Matungao and Poona Piagapo.', '2025-02-24 04:33:25', NULL),
(16, 'Pantar', 8.0644, 124.2631, 26599, 21, 'municipalities/DfFxgVriEcxY8qpqGtIlpGbjb3xTkcI7KPyK16xN.png', NULL, NULL, 'On June 11, 1978, Presidential Decree No. 1551 created the Municipality of Pantar in Lanao del Norte by separating several barangays, including Pantar Poblacion, West Pantar, and Kalanganan East, from Baloi. Judge Cosain D. Campong served as the first appointed and elected mayor. The municipal seat was established in Barangay Pantar Poblacion.\n\n\n\n\n\n\n\n', '2025-02-24 04:32:54', NULL),
(17, 'Poona Piagapo', 8.0828, 124.1408, 29183, 26, 'municipalities/BDKCYFfwnE8sll53PhNq0PrtUNblySrYFHrDwxjP.png', NULL, NULL, 'On March 31, 1976, Presidential Decree No. 916 established the Municipality of Poona Piagapo in Lanao del Norte. It was formed by separating several barangays from Pantao-Ragat (including Tangklao and Kadayonan) and Matungao (including Domiorog and Timbangalan). The municipal seat was designated near Barangay Lumbaka-Ingud, within Barangay Poona-Piagapo.\n\n\n\n\n\n\n\n', '2025-02-24 04:32:00', NULL),
(18, 'Salvador', 7.9028, 123.8411, 32115, 25, 'municipalities/KYg9jxndClb8TzyKwod5HR8D8DcDyn0vJCW5Bj4G.png', NULL, NULL, 'Salvador was created from Baroy through Executive Order No. 370 signed by President Carlos P. Garcia on January 13, 1960.[5]', '2025-02-24 04:30:45', NULL),
(19, 'Sapad', 7.8453, 123.837, 22974, 17, 'municipalities/sapad.jpg', NULL, NULL, 'Sapad was established through Republic Act No. 5745, separating it from the Municipality of Kapatagan in Lanao del Norte. It became an independent municipality with its seat of government located in Barrio Sapad.', NULL, NULL),
(20, 'Sultan Naga Dimaporo', 7.795, 123.7153, 60904, 37, 'municipalities/UpREfta3ps5VWJPQNME9NP57NjQS72jTg0jcYtOh.png', NULL, NULL, 'Executive Order No. 588, signed on April 30, 1953, created the municipality of Karomatan from several barrios of Kapatagan (including Tagalo, Karomatan, and Sigayan) and Malabang (including Bauyan and Calibao Payong). The barrio of Karomatan became the municipality\'s poblacion.\n\nOn November 5, 1992, former mayor Hadji Mohammad \"Naga\" Dimaporo was assassinated near a mosque in Quiapo, Manila, before his planned trip to Pakistan. Zamboanga del Sur police officer Jam Mitumadum Enca was arrested on suspicion of involvement but was acquitted after two months in prison.', '2025-02-24 04:30:06', NULL),
(21, 'Tagoloan', 8.127, 124.2758, 15091, 7, 'municipalities/bBBpf5p2R9wtBNwRtQWp6YkUCRz9Lkt1D2WiqwPG.png', NULL, NULL, 'On June 21, 1969, Republic Act 5822 established the Municipality of Tagoloan in Lanao del Norte, separating the barrios of Kiasar, Darimbang, Dimayon, Inagongan, Malibato, Dalamas, and Panalawan from Baloi. The municipal government was seated in Barrio Darimbang.\n\n\n\n\n\n\n\n', '2025-02-24 04:29:14', NULL),
(22, 'Tangcal', 7.9964, 123.9972, 16075, 18, 'municipalities/ZuI9yAZQIGhq39ENFpocsHPzKFNsQnsNYhkrkzC4.png', NULL, NULL, 'In 1956, several barangays from Kolambugan, including Tangcal, Berowar, Pangao, and others, were formed into the municipal district of Tangcal, with additional barangays later added from Munai. The Batingolo and Mutia families, prominent in Tangcal\'s politics, originated from Munai. The town\'s elevated areas mainly produce coconut and corn.', '2025-02-24 04:27:58', NULL),
(23, 'Tubod', 8.0533, 123.7917, 50073, 24, 'municipalities/EUzrW1KruybINijzaIQ37vHbhKLY2gN6w9eYs3cN.png', NULL, NULL, 'In 1951 local elections the latter was elected as the Municipal Mayor and was re-elected twice during the 1955 and 1959 local elections, his term ended on March 8, 1962, when he was appointed by President Diosdado Macapagal as Vice Governor of Lanao del Norte. By the law of succession, the Vice Mayor Trifon A. Tabuco became the Municipal Mayor of Tubod and held the position until December 31, 1963. In the 1963 election, Jesus Perez was elected Municipal Mayor and was re-elected also in the 1967 election whose term ended on December 31, 1971. In 1971 election, the Marcelino Pepito was elected Municipal Mayor whose term ended on January 31, 1979, when Romana dela Cruz Neri too her oath and assumed office as appointed Municipal Mayor. In 1980 election, the latter was elected as the Municipal Mayor whose term ended as an aftermath of the February 25, 1986, EDSA Revolution. The Municipal government of Tubod was governed since by OICs Panfilo dela Cruz, Rooseque B. Calacat and Panfilo Labunog, respectively, until January 31, 1988. In the February 2, 1988, election, the Romana dela Cruz Neri was elected again as the Municipal Mayor of Tubod. She held the same office until she was defeated by Constancio A. Pepito in 1992 synchronized national and local elections, who held the position for three consecutive terms. In 2001 elections, Eduardo C. Mansueto was elected as Municipal Mayor and held the position for three consecutive terms. During the national and local election in 2010, the Nelieta Quibranza-Noval, who boarded the wagon of politics just like her father the late Arsenio A. Quibranza, was elected as Municipal Mayor and re-elected during the 2016 national and local election but she died on September 7, 2016', '2025-02-24 04:25:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangays`
--
ALTER TABLE `barangays`
  ADD PRIMARY KEY (`id`),
  ADD KEY `municipality_id` (`municipality_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `municipalities`
--
ALTER TABLE `municipalities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangays`
--
ALTER TABLE `barangays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `municipalities`
--
ALTER TABLE `municipalities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangays`
--
ALTER TABLE `barangays`
  ADD CONSTRAINT `barangays_ibfk_1` FOREIGN KEY (`municipality_id`) REFERENCES `municipalities` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
