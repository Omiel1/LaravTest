-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Lut 2023, 16:26
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `laravtest`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `relatedUserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `surname`, `email`, `address`, `phone`, `created_at`, `updated_at`, `relatedUserId`) VALUES
(1, 'Brycen', 'Hammes', 'rolfson.jamarcus@example.com', '93036 Witting Highway Apt. 107\nNew Noemie, NY 42874-3240', '+1-843-220-2892', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 4),
(2, 'Wendy', 'Trantow', 'harber.seamus@example.net', '1838 Hammes Plaza\nNorth Brennaside, NV 43329', '1-925-615-2330', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 6),
(3, 'Sven', 'Von', 'walker.daisy@example.net', '7532 Maegan Circles Suite 137\nNew Maria, OK 39821', '(272) 603-4929', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 0),
(4, 'Eloy', 'Herman', 'durward.mertz@example.org', '313 Huel Row Suite 165\nSouth Janie, SD 75803-5473', '+1-858-279-6287', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 1),
(5, 'Kasey', 'Turner', 'ofay@example.com', '1304 Micaela Valley\nNorth Khalid, AL 34653-0671', '1-504-575-8079', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 0),
(6, 'Trey', 'McKenzie', 'chelsie.barrows@example.com', '4155 Torrey Plaza\nBatzborough, WA 03545', '(445) 284-6722', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 0),
(7, 'Lucinda', 'Welch', 'nschiller@example.net', '105 Dianna Ridge Suite 970\nFerryport, OK 55144', '602.534.1703', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 5),
(8, 'Helmer', 'Lockman', 'maggie.senger@example.com', '484 Sigurd Well\nGlennieland, MT 50157-2054', '360-388-9485', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 2),
(9, 'Tracy', 'Ritchie', 'weber.clinton@example.com', '1354 Rutherford Highway\nEast Clifton, MN 43539-4108', '(734) 330-3218', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 6),
(10, 'Marta', 'Morissette', 'rigoberto69@example.net', '1124 Mayer Glen\nZolashire, OH 54471', '(831) 206-3594', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 2),
(12, 'Salvador', 'Hodkiewicz', 'alexander.kohler@example.org', '450 Dietrich Loaf\nKarsonland, MN 50151-4181', '+16894502155', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 4),
(13, 'Janie', 'Wilkinson', 'rosalinda.doyle@example.net', '970 Haley Prairie\nJordynstad, WI 39507-1927', '+1-680-979-8459', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 4),
(14, 'Johnson', 'Shields', 'sschowalter@example.com', '255 Roselyn Road Apt. 289\nTyreseville, VT 38789-5000', '+1-218-975-4372', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 3),
(15, 'Elbert', 'Klein', 'jerome56@example.net', '1540 Candace Via\nSchoenmouth, MD 79006-5735', '+1 (660) 435-3782', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 1),
(16, 'Brandon', 'Ankunding', 'price.ronaldo@example.com', '882 Donnie Cape\nNew Tyshawn, TN 57723-1794', '+1 (346) 389-1119', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 6),
(17, 'Phoebe', 'Windler', 'edickinson@example.org', '624 Raquel Ports Suite 300\nKodyberg, CA 47893-9039', '+1 (283) 616-6372', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 2),
(18, 'Ryann', 'Quigley', 'amira.smith@example.net', '8726 Gleason Lodge Suite 981\nKearamouth, MS 89758', '458.882.3315', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 2),
(19, 'Savannah', 'Oberbrunner', 'matt.stanton@example.net', '6131 Cormier Motorway\nWest Rahsaanberg, VA 68703-8691', '+1-283-491-4413', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 4),
(20, 'Dominic', 'Streich', 'jerel17@example.com', '48979 Rosamond Radial\nPort Keelyside, RI 74952', '+1.302.879.0499', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 4),
(21, 'Madeline', 'Schoen', 'gtremblay@example.com', '6326 Kilback Mills\nSharonmouth, MD 81106', '+1-626-565-4515', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 2),
(22, 'Greta', 'Bogan', 'eleazar82@example.org', '730 Goldner Oval\nWest Ansley, AL 45189-3734', '+1.469.393.5440', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 0),
(23, 'Eldon', 'McLaughlin', 'ohartmann@example.org', '3882 Jerrod Valleys Suite 778\nSchmelerfurt, GA 06627-1787', '+18643630984', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 1),
(24, 'Meaghan', 'Wisoky', 'kautzer.maximus@example.org', '60068 Waters Well Apt. 677\nWisokyshire, MO 01635-2677', '513.538.3353', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 0),
(25, 'Marisol', 'Rodriguez', 'breana.reilly@example.org', '85324 Danika Greens\nStarkville, WV 43666', '(352) 587-0428', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 3),
(26, 'Hulda', 'McDermott', 'rosario87@example.net', '621 Price Center Suite 623\nEast Montana, ND 40472-9499', '+12704703928', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 2),
(27, 'Norma', 'Dooley', 'crunolfsson@example.org', '3057 Jacobs Route Apt. 877\nNorth Audrafurt, SD 69481-0095', '660-632-4304', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 4),
(28, 'Dayana', 'Fadel', 'hayes.quinten@example.net', '542 Hahn Crest\nPort Mervinfort, IN 13725', '530-987-7185', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 5),
(29, 'Maryse', 'Parisian', 'hollis.runolfsson@example.net', '87046 Champlin Square Suite 170\nHadleychester, NJ 75670-4282', '1-239-780-1065', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 4),
(30, 'Reva', 'Weimann', 'mikel.mann@example.org', '3427 Alden Alley\nSouth Eldred, HI 43216', '662-914-9873', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 1),
(31, 'Lane', 'Abernathy', 'johnson.zella@example.com', '46832 Davis Dam Apt. 774\nMarilynefort, WI 75766', '602.255.4948', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 2),
(32, 'Caden', 'Leannon', 'hudson.halle@example.com', '57909 Senger Glens\nLake Rosalindaborough, ND 34266', '1-573-976-4335', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 3),
(33, 'Montana', 'Ritchie', 'hbeatty@example.com', '6865 Edythe Flats Apt. 111\nDanikaview, MN 84389-3481', '+1-848-569-7719', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 3),
(34, 'Lemuel', 'Stamm', 'constance.williamson@example.net', '15127 Hilpert Village Apt. 846\nAdrianberg, OR 89049-0483', '484.414.4545', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 4),
(35, 'Monroe', 'Wintheiser', 'derick42@example.net', '996 Wisozk Walk Apt. 034\nJaunitaville, MD 51289', '715-375-9952', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 1),
(36, 'Marjolaine', 'Hill', 'ismith@example.org', '308 Chanel Ridge\nNew Ollieville, SD 28734-8248', '1-508-977-0101', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 0),
(37, 'Coleman', 'Dickinson', 'greenfelder.sam@example.net', '5141 Veum Ranch Apt. 363\nConnville, SC 28875', '912.319.3685', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 5),
(38, 'Earlene', 'West', 'mayer.amie@example.org', '5648 Brekke Street\nCummerataville, HI 38760', '+1-641-532-5735', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 4),
(39, 'Emmalee', 'Heathcote', 'cgerlach@example.com', '1018 Katelynn Hills Apt. 526\nProsaccomouth, OH 77719-5607', '281-356-3457', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 2),
(40, 'Laverne', 'Leffler', 'luigi.mcclure@example.com', '365 Brandi Ferry\nCharlesbury, WY 30902', '(443) 440-3355', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 6),
(41, 'Ebba', 'Luettgen', 'dean.morar@example.com', '78423 Alec Tunnel\nEast Isaacburgh, TX 32622', '+1-534-836-3964', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 4),
(42, 'Judge', 'Schmidt', 'rubie.bartoletti@example.net', '383 Kris Track\nKirlinmouth, NY 99744', '854.306.7647', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 5),
(43, 'Camilla', 'Bradtke', 'maxine.bergnaum@example.com', '19021 Bianka Manor Suite 626\nProhaskaland, FL 75152-5771', '+1.856.690.3367', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 2),
(44, 'Kacey', 'Kohler', 'okeefe.lorena@example.net', '89252 Carey Drive Apt. 354\nStantonmouth, DC 42963', '+1-206-361-1936', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 5),
(45, 'Jess', 'Hirthe', 'susana.crona@example.com', '564 Windler Shoal\nCronafurt, MS 71147', '+1-984-272-5652', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 0),
(46, 'Margaret', 'Aufderhar', 'alphonso68@example.net', '3198 Margret Fort Suite 716\nTyshawnchester, SD 82870-9273', '458.834.9169', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 3),
(47, 'Jaron', 'Champlin', 'chyna.hill@example.org', '49847 Elena Oval Suite 049\nJacobsside, TN 84336-8256', '920-718-9059', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 5),
(48, 'Tessie', 'Yost', 'elouise.cormier@example.org', '5468 Coleman Place Suite 466\nLaurencefort, UT 73143', '1-339-798-2606', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 4),
(49, 'Lenny', 'Abbott', 'dangelo.hammes@example.net', '448 Rau Ports\nSouth Clementinechester, ME 47691-4623', '+1.872.702.7204', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 2),
(50, 'Jaqueline', 'Lowe', 'xbarton@example.com', '1798 Era Isle\nNorth Kody, TN 15558', '(234) 470-9741', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 4),
(51, 'Mateo', 'Koch', 'rutherford.destini@example.com', '9223 Abernathy Stream\nNew Rosella, NM 78869-4589', '331-363-5109', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 1),
(52, 'Heath', 'Grant', 'veda.berge@example.com', '33928 Cameron Keys\nLake Joanneview, NC 43868-9058', '(283) 441-8911', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 2),
(53, 'Krista', 'Wisozk', 'herminia82@example.net', '22885 Ritchie Valleys\nNew Mohammedburgh, TX 00270-9517', '+1-442-260-0078', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 5),
(54, 'Zachary', 'Langosh', 'orland.jacobs@example.org', '1316 Armstrong Ridge\nStacytown, AR 41889', '727-436-2466', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 4),
(55, 'Icie', 'Rempel', 'ckessler@example.com', '548 Allie Path Suite 567\nNew Wyatt, RI 80689', '586.422.8363', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 3),
(56, 'Otilia', 'Ratke', 'fritz.gulgowski@example.net', '7804 Volkman Spring\nWest Marciafort, WY 49574', '1-806-805-2785', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 0),
(57, 'Libbie', 'Rowe', 'loma.quitzon@example.org', '32988 Kamryn Stravenue Apt. 504\nEast Talia, GA 42453-1326', '205-903-4511', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 6),
(58, 'Ivah', 'Simonis', 'pbailey@example.com', '32850 Marta Corner Apt. 676\nLake Linwoodbury, LA 44050', '+1-785-332-9677', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 1),
(59, 'Delmer', 'Fahey', 'theodore16@example.com', '9411 Grimes Union Suite 544\nWest London, MD 11115-3209', '+1 (470) 574-1419', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 1),
(60, 'Bruce', 'Romaguera', 'trantow.edmund@example.org', '6038 Reynolds Ranch\nPort Danyka, WV 26385-2132', '1-231-427-6121', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 5),
(61, 'Celestino', 'Kozey', 'korn@example.com', '538 Augusta Roads\nMcGlynnside, TX 65865', '+1-678-398-4830', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 4),
(62, 'Emiliano', 'Roob', 'megane.blanda@example.com', '76452 Tia Overpass Suite 866\nRosemarieborough, UT 46272-4179', '+1 (361) 748-8891', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 6),
(63, 'Ova', 'Renner', 'monique.smitham@example.com', '99443 Beer Neck Apt. 055\nPascaleview, FL 39133-5387', '+1-386-346-9413', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 1),
(64, 'Myrna', 'McGlynn', 'tmayert@example.com', '22552 Pfannerstill Rue\nPort Grahamport, OR 13408-2490', '+1.269.710.1805', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 1),
(65, 'General', 'Harvey', 'rowe.ethelyn@example.org', '65681 Thea Ranch Suite 894\nSouth Louie, WY 81420', '(541) 326-2570', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 2),
(66, 'Richmond', 'Satterfield', 'mosciski.aurore@example.org', '882 Valentina Flats Apt. 341\nReillyburgh, WY 02773', '931.368.5343', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 5),
(67, 'Webster', 'Johns', 'benton.kohler@example.org', '98067 Boyle Rapids\nSouth Tinatown, KY 39781', '+1 (559) 405-7388', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 2),
(68, 'Vella', 'Purdy', 'schmitt.rozella@example.net', '5072 Denesik Roads Suite 279\nFrancesside, MD 96184-2444', '920.913.6126', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 5),
(69, 'Lucas', 'Conn', 'jane02@example.org', '8139 Keebler Port Apt. 586\nWest Gwendolynberg, WA 62154', '480.480.9977', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 6),
(70, 'Sydni', 'Witting', 'frank11@example.net', '722 Zboncak Pike Suite 140\nEast Marcelinofurt, CO 53391', '+1-831-317-2282', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 4),
(71, 'Ike', 'Gerlach', 'hgerhold@example.net', '69258 Ola Plain Suite 108\nNorth Sophiaport, WY 91011-0087', '(270) 497-7046', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 1),
(72, 'Velda', 'Simonis', 'llangosh@example.org', '21749 Dell Village\nEast Joanneborough, NM 67184', '1-510-282-2997', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 6),
(73, 'Anabel', 'Swift', 'taurean.ullrich@example.com', '60534 Dortha Stravenue Apt. 597\nAmayaport, WI 01604-4104', '(920) 845-5518', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 3),
(74, 'Kolby', 'Gerhold', 'verdie.maggio@example.net', '969 Candelario Ford\nRogermouth, FL 63075', '(339) 884-1287', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 3),
(75, 'Deanna', 'Frami', 'purdy.felicita@example.net', '548 Lawson Dam Apt. 165\nPort Lilianport, TN 04835', '707-710-3393', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 5),
(76, 'Shad', 'Bauch', 'greenholt.leland@example.com', '9377 Windler Corner\nSchuppeburgh, CO 70195', '+1 (440) 901-7091', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 0),
(77, 'Bettye', 'Lesch', 'shields.cameron@example.net', '4128 Philip Underpass\nMeaghantown, NY 01373-7176', '859-863-1172', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 4),
(78, 'Evangeline', 'Schinner', 'hirthe.novella@example.net', '769 Jacobi Shoal\nEast Antwonview, FL 11574-3742', '+1 (918) 514-8465', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 6),
(79, 'Marcia', 'Fay', 'robel.anastasia@example.org', '7773 Lavinia Fork Suite 071\nNorth Heloise, NC 60640-5206', '+1-443-637-5207', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 4),
(80, 'Yvonne', 'Wilderman', 'zboncak.joanny@example.net', '59977 Lexi Hills Suite 210\nNew Joelmouth, HI 65217-7856', '+1-617-852-4439', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 5),
(81, 'Mark', 'Conn', 'xavier43@example.com', '11052 Mona Center\nKeithville, MD 83493-1796', '+1.864.784.6929', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 1),
(82, 'Katharina', 'Gerlach', 'beahan.max@example.org', '4277 Ernie Brook\nWillastad, MD 84967-7930', '+1-463-350-8746', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 1),
(83, 'Adriel', 'Hamill', 'eohara@example.net', '3185 Eulah Trace Apt. 409\nPagacville, MA 84713-4140', '(517) 868-8773', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 0),
(84, 'Candice', 'O\'Connell', 'fhauck@example.org', '74696 Marjorie Ways Suite 303\nWest Jacebury, NC 52486', '+1-971-325-6756', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 2),
(85, 'Norberto', 'Pfeffer', 'tfadel@example.org', '8520 Esmeralda Brooks\nJoshside, CO 55377', '445.931.6563', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 5),
(86, 'Annalise', 'McKenzie', 'emerson.cassin@example.com', '4566 Robel Pass Suite 910\nAdrianfort, MI 88847-4037', '838-797-7961', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 5),
(87, 'Kenny', 'Wuckert', 'knikolaus@example.com', '75243 Bennett Rapid\nLuettgenfort, WV 77401-7926', '947.285.0249', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 6),
(88, 'Kassandra', 'Monahan', 'oswald05@example.org', '662 Stephon Lane\nAntoninaport, AK 65475-4992', '952-651-5843', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 3),
(89, 'Ian', 'Cartwright', 'heloise.batz@example.org', '19179 General Vista Apt. 015\nLake Cecilia, FL 70046-7799', '+1 (737) 779-5351', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 0),
(90, 'Alisha', 'Johnston', 'vonrueden.mavis@example.com', '9768 Cronin Keys Suite 115\nLexietown, WY 70615-1104', '+1 (240) 448-6966', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 4),
(91, 'John', 'Heaney', 'quincy37@example.net', '3585 Marks Way Apt. 659\nWest Mariana, MD 22018', '1-770-712-1716', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 6),
(92, 'Finn', 'Connelly', 'micah.miller@example.net', '10278 Rowland Station Suite 843\nWillmouth, LA 20261-4016', '986-606-0215', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 5),
(93, 'Demetris', 'Kilback', 'vmcclure@example.org', '94043 Garfield Rapids\nSouth Ernie, PA 60831', '+1-678-218-0327', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 3),
(94, 'Gunnar', 'Vandervort', 'bsipes@example.org', '50980 Cristobal Ridges Suite 317\nNew Waino, NH 56424-9502', '+1-860-949-4832', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 5),
(95, 'Tyrell', 'Balistreri', 'konopelski.merl@example.org', '661 Mariano Junction\nCorkerymouth, WY 05394-5670', '551-487-7487', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 6),
(96, 'Deontae', 'Yost', 'edgardo71@example.org', '557 May Knolls\nNew Dinaview, AK 69449', '(325) 451-9434', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 1),
(97, 'Isidro', 'Kassulke', 'nmueller@example.net', '73673 Alphonso Dale Apt. 862\nPort Shaina, NV 93036-8945', '+1 (539) 495-2217', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 1),
(98, 'Murl', 'Romaguera', 'cthompson@example.net', '71548 Virginie Row\nAdelineberg, MI 26202', '+1-313-399-4891', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 5),
(99, 'Estrella', 'Hegmann', 'iyundt@example.com', '80567 Eliseo Mount\nNorth Kimtown, UT 60378-7606', '+1 (484) 541-7013', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 1),
(100, 'Maiya', 'Olson', 'auer.sylvan@example.net', '66130 Kunde Bypass\nKlockoberg, PA 70856-7394', '1-531-346-7132', '2023-02-01 20:28:03', '2023-02-01 20:28:03', 2),
(102, 'Adamski', NULL, NULL, NULL, '509 393 723', '2023-02-01 20:47:45', '2023-02-01 20:47:45', 6),
(103, 'Brad', NULL, NULL, NULL, '111 222 333', '2023-02-03 14:24:29', '2023-02-03 14:24:29', 6);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `failed_jobs`
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
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_29_171232_create_contacts_table', 1),
(6, '2023_01_29_181824_add_user_id_to_contacts', 1),
(7, '2023_01_30_214528_change_contacts_properties', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `personal_access_tokens`
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
-- Struktura tabeli dla tabeli `users`
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
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mrs. Izabella Mann', 'nolan.rolfson@example.com', '2023-02-01 20:28:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'z7XKPOvppW', '2023-02-01 20:28:03', '2023-02-01 20:28:03'),
(2, 'Melvin Beer', 'mcdermott.travis@example.com', '2023-02-01 20:28:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6OJSAdPL78', '2023-02-01 20:28:03', '2023-02-01 20:28:03'),
(3, 'Kayden Pfeffer II', 'ynader@example.com', '2023-02-01 20:28:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CPQ1Ldw29r', '2023-02-01 20:28:03', '2023-02-01 20:28:03'),
(4, 'Carmella Okuneva', 'johnathan.hammes@example.net', '2023-02-01 20:28:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5hllOj39uw', '2023-02-01 20:28:03', '2023-02-01 20:28:03'),
(5, 'Test User', 'test@example.com', '2023-02-01 20:28:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mP6rnWRPcm', '2023-02-01 20:28:03', '2023-02-01 20:28:03'),
(6, 'Whatever', 'testtest@test.com', NULL, '$2y$10$HkVs94dacsvca7qa7dWNbu68goLBOxkWc6YDE4.b.Mg81o3gyGH7m', NULL, '2023-02-01 20:32:59', '2023-02-01 20:32:59');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeksy dla tabeli `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
