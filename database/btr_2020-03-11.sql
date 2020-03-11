# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: btr
# Generation Time: 2020-03-11 21:01:02 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table countries
# ------------------------------------------------------------

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `country_code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;

INSERT INTO `countries` (`id`, `country_code`, `country_name`, `created_at`, `updated_at`)
VALUES
	(1,'US','United States',NULL,NULL),
	(2,'CA','Canada',NULL,NULL),
	(3,'AF','Afghanistan',NULL,NULL),
	(4,'AL','Albania',NULL,NULL),
	(5,'DZ','Algeria',NULL,NULL),
	(6,'DS','American Samoa',NULL,NULL),
	(7,'AD','Andorra',NULL,NULL),
	(8,'AO','Angola',NULL,NULL),
	(9,'AI','Anguilla',NULL,NULL),
	(10,'AQ','Antarctica',NULL,NULL),
	(11,'AG','Antigua and/or Barbuda',NULL,NULL),
	(12,'AR','Argentina',NULL,NULL),
	(13,'AM','Armenia',NULL,NULL),
	(14,'AW','Aruba',NULL,NULL),
	(15,'AU','Australia',NULL,NULL),
	(16,'AT','Austria',NULL,NULL),
	(17,'AZ','Azerbaijan',NULL,NULL),
	(18,'BS','Bahamas',NULL,NULL),
	(19,'BH','Bahrain',NULL,NULL),
	(20,'BD','Bangladesh',NULL,NULL),
	(21,'BB','Barbados',NULL,NULL),
	(22,'BY','Belarus',NULL,NULL),
	(23,'BE','Belgium',NULL,NULL),
	(24,'BZ','Belize',NULL,NULL),
	(25,'BJ','Benin',NULL,NULL),
	(26,'BM','Bermuda',NULL,NULL),
	(27,'BT','Bhutan',NULL,NULL),
	(28,'BO','Bolivia',NULL,NULL),
	(29,'BA','Bosnia and Herzegovina',NULL,NULL),
	(30,'BW','Botswana',NULL,NULL),
	(31,'BV','Bouvet Island',NULL,NULL),
	(32,'BR','Brazil',NULL,NULL),
	(33,'IO','British lndian Ocean Territory',NULL,NULL),
	(34,'BN','Brunei Darussalam',NULL,NULL),
	(35,'BG','Bulgaria',NULL,NULL),
	(36,'BF','Burkina Faso',NULL,NULL),
	(37,'BI','Burundi',NULL,NULL),
	(38,'KH','Cambodia',NULL,NULL),
	(39,'CM','Cameroon',NULL,NULL),
	(40,'CV','Cape Verde',NULL,NULL),
	(41,'KY','Cayman Islands',NULL,NULL),
	(42,'CF','Central African Republic',NULL,NULL),
	(43,'TD','Chad',NULL,NULL),
	(44,'CL','Chile',NULL,NULL),
	(45,'CN','China',NULL,NULL),
	(46,'CX','Christmas Island',NULL,NULL),
	(47,'CC','Cocos (Keeling) Islands',NULL,NULL),
	(48,'CO','Colombia',NULL,NULL),
	(49,'KM','Comoros',NULL,NULL),
	(50,'CG','Congo',NULL,NULL),
	(51,'CK','Cook Islands',NULL,NULL),
	(52,'CR','Costa Rica',NULL,NULL),
	(53,'HR','Croatia (Hrvatska)',NULL,NULL),
	(54,'CU','Cuba',NULL,NULL),
	(55,'CY','Cyprus',NULL,NULL),
	(56,'CZ','Czech Republic',NULL,NULL),
	(57,'DK','Denmark',NULL,NULL),
	(58,'DJ','Djibouti',NULL,NULL),
	(59,'DM','Dominica',NULL,NULL),
	(60,'DO','Dominican Republic',NULL,NULL),
	(61,'TP','East Timor',NULL,NULL),
	(62,'EC','Ecuador',NULL,NULL),
	(63,'EG','Egypt',NULL,NULL),
	(64,'SV','El Salvador',NULL,NULL),
	(65,'GQ','Equatorial Guinea',NULL,NULL),
	(66,'ER','Eritrea',NULL,NULL),
	(67,'EE','Estonia',NULL,NULL),
	(68,'ET','Ethiopia',NULL,NULL),
	(69,'FK','Falkland Islands (Malvinas)',NULL,NULL),
	(70,'FO','Faroe Islands',NULL,NULL),
	(71,'FJ','Fiji',NULL,NULL),
	(72,'FI','Finland',NULL,NULL),
	(73,'FR','France',NULL,NULL),
	(74,'FX','France, Metropolitan',NULL,NULL),
	(75,'GF','French Guiana',NULL,NULL),
	(76,'PF','French Polynesia',NULL,NULL),
	(77,'TF','French Southern Territories',NULL,NULL),
	(78,'GA','Gabon',NULL,NULL),
	(79,'GM','Gambia',NULL,NULL),
	(80,'GE','Georgia',NULL,NULL),
	(81,'DE','Germany',NULL,NULL),
	(82,'GH','Ghana',NULL,NULL),
	(83,'GI','Gibraltar',NULL,NULL),
	(84,'GR','Greece',NULL,NULL),
	(85,'GL','Greenland',NULL,NULL),
	(86,'GD','Grenada',NULL,NULL),
	(87,'GP','Guadeloupe',NULL,NULL),
	(88,'GU','Guam',NULL,NULL),
	(89,'GT','Guatemala',NULL,NULL),
	(90,'GN','Guinea',NULL,NULL),
	(91,'GW','Guinea-Bissau',NULL,NULL),
	(92,'GY','Guyana',NULL,NULL),
	(93,'HT','Haiti',NULL,NULL),
	(94,'HM','Heard and Mc Donald Islands',NULL,NULL),
	(95,'HN','Honduras',NULL,NULL),
	(96,'HK','Hong Kong',NULL,NULL),
	(97,'HU','Hungary',NULL,NULL),
	(98,'IS','Iceland',NULL,NULL),
	(99,'IN','India',NULL,NULL),
	(100,'ID','Indonesia',NULL,NULL),
	(101,'IR','Iran (Islamic Republic of)',NULL,NULL),
	(102,'IQ','Iraq',NULL,NULL),
	(103,'IE','Ireland',NULL,NULL),
	(104,'IL','Israel',NULL,NULL),
	(105,'IT','Italy',NULL,NULL),
	(106,'CI','Ivory Coast',NULL,NULL),
	(107,'JM','Jamaica',NULL,NULL),
	(108,'JP','Japan',NULL,NULL),
	(109,'JO','Jordan',NULL,NULL),
	(110,'KZ','Kazakhstan',NULL,NULL),
	(111,'KE','Kenya',NULL,NULL),
	(112,'KI','Kiribati',NULL,NULL),
	(113,'KP','Korea, Democratic People\'s Republic of',NULL,NULL),
	(114,'KR','Korea, Republic of',NULL,NULL),
	(115,'XK','Kosovo',NULL,NULL),
	(116,'KW','Kuwait',NULL,NULL),
	(117,'KG','Kyrgyzstan',NULL,NULL),
	(118,'LA','Lao People\'s Democratic Republic',NULL,NULL),
	(119,'LV','Latvia',NULL,NULL),
	(120,'LB','Lebanon',NULL,NULL),
	(121,'LS','Lesotho',NULL,NULL),
	(122,'LR','Liberia',NULL,NULL),
	(123,'LY','Libyan Arab Jamahiriya',NULL,NULL),
	(124,'LI','Liechtenstein',NULL,NULL),
	(125,'LT','Lithuania',NULL,NULL),
	(126,'LU','Luxembourg',NULL,NULL),
	(127,'MO','Macau',NULL,NULL),
	(128,'MK','Macedonia',NULL,NULL),
	(129,'MG','Madagascar',NULL,NULL),
	(130,'MW','Malawi',NULL,NULL),
	(131,'MY','Malaysia',NULL,NULL),
	(132,'MV','Maldives',NULL,NULL),
	(133,'ML','Mali',NULL,NULL),
	(134,'MT','Malta',NULL,NULL),
	(135,'MH','Marshall Islands',NULL,NULL),
	(136,'MQ','Martinique',NULL,NULL),
	(137,'MR','Mauritania',NULL,NULL),
	(138,'MU','Mauritius',NULL,NULL),
	(139,'TY','Mayotte',NULL,NULL),
	(140,'MX','Mexico',NULL,NULL),
	(141,'FM','Micronesia, Federated States of',NULL,NULL),
	(142,'MD','Moldova, Republic of',NULL,NULL),
	(143,'MC','Monaco',NULL,NULL),
	(144,'MN','Mongolia',NULL,NULL),
	(145,'ME','Montenegro',NULL,NULL),
	(146,'MS','Montserrat',NULL,NULL),
	(147,'MA','Morocco',NULL,NULL),
	(148,'MZ','Mozambique',NULL,NULL),
	(149,'MM','Myanmar',NULL,NULL),
	(150,'NA','Namibia',NULL,NULL),
	(151,'NR','Nauru',NULL,NULL),
	(152,'NP','Nepal',NULL,NULL),
	(153,'NL','Netherlands',NULL,NULL),
	(154,'AN','Netherlands Antilles',NULL,NULL),
	(155,'NC','New Caledonia',NULL,NULL),
	(156,'NZ','New Zealand',NULL,NULL),
	(157,'NI','Nicaragua',NULL,NULL),
	(158,'NE','Niger',NULL,NULL),
	(159,'NG','Nigeria',NULL,NULL),
	(160,'NU','Niue',NULL,NULL),
	(161,'NF','Norfork Island',NULL,NULL),
	(162,'MP','Northern Mariana Islands',NULL,NULL),
	(163,'NO','Norway',NULL,NULL),
	(164,'OM','Oman',NULL,NULL),
	(165,'PK','Pakistan',NULL,NULL),
	(166,'PW','Palau',NULL,NULL),
	(167,'PA','Panama',NULL,NULL),
	(168,'PG','Papua New Guinea',NULL,NULL),
	(169,'PY','Paraguay',NULL,NULL),
	(170,'PE','Peru',NULL,NULL),
	(171,'PH','Philippines',NULL,NULL),
	(172,'PN','Pitcairn',NULL,NULL),
	(173,'PL','Poland',NULL,NULL),
	(174,'PT','Portugal',NULL,NULL),
	(175,'PR','Puerto Rico',NULL,NULL),
	(176,'QA','Qatar',NULL,NULL),
	(177,'RE','Reunion',NULL,NULL),
	(178,'RO','Romania',NULL,NULL),
	(179,'RU','Russian Federation',NULL,NULL),
	(180,'RW','Rwanda',NULL,NULL),
	(181,'KN','Saint Kitts and Nevis',NULL,NULL),
	(182,'LC','Saint Lucia',NULL,NULL),
	(183,'VC','Saint Vincent and the Grenadines',NULL,NULL),
	(184,'WS','Samoa',NULL,NULL),
	(185,'SM','San Marino',NULL,NULL),
	(186,'ST','Sao Tome and Principe',NULL,NULL),
	(187,'SA','Saudi Arabia',NULL,NULL),
	(188,'SN','Senegal',NULL,NULL),
	(189,'RS','Serbia',NULL,NULL),
	(190,'SC','Seychelles',NULL,NULL),
	(191,'SL','Sierra Leone',NULL,NULL),
	(192,'SG','Singapore',NULL,NULL),
	(193,'SK','Slovakia',NULL,NULL),
	(194,'SI','Slovenia',NULL,NULL),
	(195,'SB','Solomon Islands',NULL,NULL),
	(196,'SO','Somalia',NULL,NULL),
	(197,'ZA','South Africa',NULL,NULL),
	(198,'GS','South Georgia South Sandwich Islands',NULL,NULL),
	(199,'ES','Spain',NULL,NULL),
	(200,'LK','Sri Lanka',NULL,NULL),
	(201,'SH','St. Helena',NULL,NULL),
	(202,'PM','St. Pierre and Miquelon',NULL,NULL),
	(203,'SD','Sudan',NULL,NULL),
	(204,'SR','Suriname',NULL,NULL),
	(205,'SJ','Svalbarn and Jan Mayen Islands',NULL,NULL),
	(206,'SZ','Swaziland',NULL,NULL),
	(207,'SE','Sweden',NULL,NULL),
	(208,'CH','Switzerland',NULL,NULL),
	(209,'SY','Syrian Arab Republic',NULL,NULL),
	(210,'TW','Taiwan',NULL,NULL),
	(211,'TJ','Tajikistan',NULL,NULL),
	(212,'TZ','Tanzania, United Republic of',NULL,NULL),
	(213,'TH','Thailand',NULL,NULL),
	(214,'TG','Togo',NULL,NULL),
	(215,'TK','Tokelau',NULL,NULL),
	(216,'TO','Tonga',NULL,NULL),
	(217,'TT','Trinidad and Tobago',NULL,NULL),
	(218,'TN','Tunisia',NULL,NULL),
	(219,'TR','Turkey',NULL,NULL),
	(220,'TM','Turkmenistan',NULL,NULL),
	(221,'TC','Turks and Caicos Islands',NULL,NULL),
	(222,'TV','Tuvalu',NULL,NULL),
	(223,'UG','Uganda',NULL,NULL),
	(224,'UA','Ukraine',NULL,NULL),
	(225,'AE','United Arab Emirates',NULL,NULL),
	(226,'GB','United Kingdom',NULL,NULL),
	(227,'UM','United States minor outlying islands',NULL,NULL),
	(228,'UY','Uruguay',NULL,NULL),
	(229,'UZ','Uzbekistan',NULL,NULL),
	(230,'VU','Vanuatu',NULL,NULL),
	(231,'VA','Vatican City State',NULL,NULL),
	(232,'VE','Venezuela',NULL,NULL),
	(233,'VN','Vietnam',NULL,NULL),
	(234,'VG','Virgin Islands (British)',NULL,NULL),
	(235,'VI','Virgin Islands (U.S.)',NULL,NULL),
	(236,'WF','Wallis and Futuna Islands',NULL,NULL),
	(237,'EH','Western Sahara',NULL,NULL),
	(238,'YE','Yemen',NULL,NULL),
	(239,'YU','Yugoslavia',NULL,NULL),
	(240,'ZR','Zaire',NULL,NULL),
	(241,'ZM','Zambia',NULL,NULL),
	(242,'ZW','Zimbabwe',NULL,NULL);

/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table locations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `locations`;

CREATE TABLE `locations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;

INSERT INTO `locations` (`id`, `name`, `city`, `state`, `country`, `created_at`, `updated_at`)
VALUES
	(1,'21 Pool Room','Charleston','WV','US',NULL,NULL),
	(2,'412 Montana Ave','Hamilton','MT','US',NULL,NULL),
	(3,'Ace High Casino','Butte','MT','US',NULL,NULL),
	(4,'Atlanta-private','Atlanta','GA','US',NULL,NULL),
	(5,'Bankshots','Columbus',NULL,NULL,NULL,NULL),
	(6,'Bankshots Bar & Grill',NULL,NULL,NULL,NULL,NULL),
	(7,'Berryhill Pool School','Beaverton',NULL,'US',NULL,NULL),
	(8,'Big Dogs Billiards','Des Moines','IA','US',NULL,NULL),
	(9,'Big Tyme Billiards',NULL,NULL,NULL,NULL,NULL),
	(10,'Bille\'s Man Cave','Long Beach','CA','US',NULL,NULL),
	(11,'Billiard Club','Anderson',NULL,'US',NULL,NULL),
	(12,'BitterRoot 8 Ballers','Hamilton',NULL,'US',NULL,NULL),
	(13,'Black Diamond','Spokane Valley','WA','US',NULL,NULL),
	(14,'Bowlero Lanes','Lakewood',NULL,'US',NULL,NULL),
	(15,'Break Time Billiards','Modesto','CA','US',NULL,NULL),
	(16,'Breaktime Billiards','WIlmington','NC','US',NULL,NULL),
	(17,'Brent\'s Pool Room','Marysville',NULL,'US',NULL,NULL),
	(18,'BTR Cave','River City',NULL,'US',NULL,NULL),
	(19,'Buffalo Billiards','Petaluma','CA','US',NULL,NULL),
	(20,'Bullshooters','Phoenix','AZ','US',NULL,NULL),
	(21,'Buster\'s Billiards','Somerworth','NH','US',NULL,NULL),
	(22,'Butera Billiards','Moorpark','CA','US',NULL,NULL),
	(23,'California Billiards','Fremont','CA','US',NULL,NULL),
	(24,'Center Pocket','Crofton',NULL,'US',NULL,NULL),
	(25,'Century Snooker Club','New Glassglow','NS','CA',NULL,NULL),
	(26,'Classic BIlliards','Portland','OR','US',NULL,NULL),
	(27,'Club Billiards','Wichita','KS','US',NULL,NULL),
	(28,'Clubhouse Sports Bar & Grill','Kent','WA','US',NULL,NULL),
	(29,'CR\'s Sportsbar','Coon Rapids','MN','US',NULL,NULL),
	(30,'Cue and Brew','Martinez','GA','US',NULL,NULL),
	(31,'Cue Sports','Thibodaux','LA','US',NULL,NULL),
	(32,'Cue-Topia Billiards','Lakewood',NULL,'US',NULL,NULL),
	(33,'Cue\'s Billiards','Marietta','GA','US',NULL,NULL),
	(34,'Cushions','Columbus',NULL,'US',NULL,NULL),
	(35,'Derby City Classic','Elizabeth',NULL,'US',NULL,NULL),
	(36,'Diamond Billiards','Midlothian',NULL,'US',NULL,NULL),
	(37,'Diamonds Pub and Billiards','Louisville',NULL,'US',NULL,NULL),
	(38,'Drexeline Billiards Club','Upper Darby',NULL,NULL,NULL,NULL),
	(39,'Durbin Cues','Sullivan',NULL,NULL,NULL,NULL),
	(40,'Fast Eddies','San Angelo','TX','US',NULL,NULL),
	(41,'Fat Toad Billiards','Junction City',NULL,'US',NULL,NULL),
	(42,'Findlay Elks Lodge (Jerry Tripp Event Coordinator) BPOE #75','Findlay',NULL,'US',NULL,NULL),
	(43,'Freezer\'s','Tempe','AZ','US',NULL,NULL),
	(44,'Gallery Billiards & Bar','Newburgh','NY','US',NULL,NULL),
	(45,'Games on the Green','Medford',NULL,'US',NULL,NULL),
	(46,'Gary\'s','Irvine',NULL,'US',NULL,NULL),
	(47,'Gary\'s Room','Bronson',NULL,'US',NULL,NULL),
	(48,'Gerry Shepard','New Bern',NULL,'US',NULL,NULL),
	(49,'Golden Cue','Odessa',NULL,'US',NULL,NULL),
	(50,'Golden Fleece Dave','Seattle','WA','US',NULL,NULL),
	(51,'Good Time Ernies','Burien',NULL,NULL,NULL,NULL),
	(52,'Hard Times Billiards Sacramento','Sacremento','CA','US',NULL,NULL),
	(53,'Home','Puyallup',NULL,'US',NULL,NULL),
	(54,'Homewinter','Orlando','FL','US',NULL,NULL),
	(55,'Ice Box','Alburnett',NULL,'US',NULL,NULL),
	(56,'Jason\'s','Brentwood',NULL,'US',NULL,NULL),
	(57,'JK\'s Pool Room','Forest Lake',NULL,'US',NULL,NULL),
	(58,'Jointed Cue','Sacremento','CA','US',NULL,NULL),
	(59,'Just2More','Pasadena','CA','US',NULL,NULL),
	(60,'Keys Pool Hall','Winnemucca','NV','US',NULL,NULL),
	(61,'Kobly\'s Corner Pocket Billiards','Tempe','AZ','US',NULL,NULL),
	(62,'Kolby\'s Billiards','Keizer',NULL,'US',NULL,NULL),
	(63,'Eddy\'s Place','Pleasant Hill',NULL,'US',NULL,NULL),
	(64,'Legacy Billiards','Spokane','WA','US',NULL,NULL),
	(65,'Linton Private Room','Linton',NULL,'US',NULL,NULL),
	(66,'Longshots','Joliet',NULL,'US',NULL,NULL),
	(67,'Malarkeys','Steilacoom',NULL,'US',NULL,NULL),
	(68,'Michael\'s Billiards','Fairfield',NULL,'US',NULL,NULL),
	(69,'Miss Cue Billiards','Toledo','OH','US',NULL,NULL),
	(70,'Moose Lodge','Richmond',NULL,'US',NULL,NULL),
	(71,'My House','Richmond',NULL,'US',NULL,NULL),
	(72,'New Way Lounge','Port Orchard',NULL,'US',NULL,NULL),
	(73,'O.C.T. BIlliards',NULL,NULL,'US',NULL,NULL),
	(74,'Orange Crush','Steilacoom',NULL,'US',NULL,NULL),
	(75,'Paddy\'s Sports Bar and Grill','Steilacoom',NULL,'US',NULL,NULL),
	(76,'Paddy\'s','Coeur D\'Alene',NULL,'US',NULL,NULL),
	(77,'Peacock Billiards','Victoria',NULL,'CA',NULL,NULL),
	(78,'Performance Grill','Auburn',NULL,'US',NULL,NULL),
	(79,'Philly Station','Angleton',NULL,'US',NULL,NULL),
	(80,'Phils Place','White Plains',NULL,'US',NULL,NULL),
	(81,'Pilgrims Palace','Spanaway',NULL,'US',NULL,NULL),
	(82,'Pink Slip BIlliards','Lakewood',NULL,'US',NULL,NULL),
	(83,'Players Sport Bar & Grill','Kennewick',NULL,NULL,NULL,NULL),
	(84,'Pockets','Covington',NULL,'US',NULL,NULL),
	(85,'Pockets Blliards & Brew','San Diego','CA','US',NULL,NULL),
	(86,'Poppa G\'s Billiards','Pelham',NULL,'US',NULL,NULL),
	(87,'PrimeTime home','Catonsville','','US',NULL,NULL),
	(88,'Q Masters','Virginia Beach','VA','US',NULL,NULL),
	(89,'QAI','Andorra',NULL,NULL,NULL,NULL),
	(90,'Qaise',NULL,NULL,NULL,NULL,NULL),
	(91,'Rack Em Billiards','Medford',NULL,'US',NULL,NULL),
	(92,'Rack\'s Billiards','Sanford',NULL,'US',NULL,NULL),
	(93,'Rail Birds','Halifax',NULL,'CA',NULL,NULL),
	(94,'Red Fin Lounge','Jeffersonville',NULL,'US',NULL,NULL),
	(95,'Red Fox','Fairbanks',NULL,'US',NULL,NULL),
	(96,'River City Eagles','Evansville',NULL,'US',NULL,NULL),
	(97,'River Road House Sports Bar & Grill','Milwaukee','WI','US',NULL,NULL),
	(98,' Rockaway Billiards','Rockaway',NULL,'US',NULL,NULL),
	(99,'Royal Oak Billiards','Holland',NULL,'US',NULL,NULL),
	(100,'Sandcastle Billiards','Edison',NULL,'US',NULL,NULL),
	(101,'Shooters 2.0','Ellensburg',NULL,NULL,NULL,NULL),
	(102,'Shooters Billiards Club','Burnsville',NULL,'US',NULL,NULL),
	(103,'Skip & Jans Sports Bar','Tempe','AZ','US',NULL,NULL),
	(104,'Skyline','Brooklyn','NY','US',NULL,NULL),
	(105,'Sneakers 4','Reno','NV','US',NULL,NULL),
	(106,'Southern Billiards & Burgers','Stateboro',NULL,'US',NULL,NULL),
	(107,'Steel City Billiards','Brentwood',NULL,'US',NULL,NULL),
	(108,'Steinway Billiards','Astoria',NULL,'US',NULL,NULL),
	(109,'Stiix Billiards','Ventura',NULL,'US',NULL,NULL),
	(110,'Stiix Billiards','Ranchero Cucamongo','CA','US',NULL,NULL),
	(111,'Sully\'s Billiards','Metropolis',NULL,'US',NULL,NULL),
	(112,'Tally Ho Pub','Richmond',NULL,'US',NULL,NULL),
	(113,'Tap Lounge','Menifee',NULL,'US',NULL,NULL),
	(114,'Teddy\'s Bar','Herrin',NULL,'US',NULL,NULL),
	(115,'The Alamo Pool Lounge','Alamogordo','NM','US',NULL,NULL),
	(116,'The Aztec Palace','Oakland',NULL,'US',NULL,NULL),
	(117,'The Break Room','Duluth',NULL,'US',NULL,NULL),
	(118,'The Bridge','Edmond',NULL,NULL,NULL,NULL),
	(119,'The Clubhouse','Columbia Falls',NULL,NULL,NULL,NULL),
	(120,'The Corner Pocket','Lansing','MI','US',NULL,NULL),
	(121,'The Diamonds Room','Bideford',NULL,'UK',NULL,NULL),
	(122,'The Lounge @ New Way Vapors','Port Orchard',NULL,NULL,NULL,NULL),
	(123,'The Pocket','Pocatello',NULL,'US',NULL,NULL),
	(124,'The Pool Lounge','Alamogordo','NM','US',NULL,NULL),
	(125,'The Spot','Nanuet',NULL,'US',NULL,NULL),
	(126,'Triple A Billiards',NULL,'OK','US',NULL,NULL),
	(127,'Triple Nine Billiards','Elkridge','','US',NULL,NULL),
	(128,'Trudeau Automotive','Lakewood',NULL,'US',NULL,NULL);

/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2019_08_19_000000_create_failed_jobs_table',1),
	(4,'2020_03_08_171859_create_countries_table',1),
	(5,'2020_03_09_121835_create_states_table',1),
	(6,'2020_03_10_151912_create_locations_table',2),
	(7,'2020_03_11_163315_create_permission_tables',3);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table model_has_permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `model_has_permissions`;

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table model_has_roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `model_has_roles`;

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table role_has_permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `role_has_permissions`;

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table states
# ------------------------------------------------------------

DROP TABLE IF EXISTS `states`;

CREATE TABLE `states` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `states_country_id_foreign` (`country_id`),
  CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;

INSERT INTO `states` (`id`, `name`, `short_name`, `country_name`, `country_id`, `created_at`, `updated_at`)
VALUES
	(105,'California','CA','United States',1,NULL,NULL),
	(106,'Colorado','CO','United States',1,NULL,NULL),
	(107,'Alabama','AL','United States',1,NULL,NULL),
	(108,'Alaska','AK','United States',1,NULL,NULL),
	(109,'Arkansas','AR','United States',1,NULL,NULL),
	(110,'Arizona','AZ','United States',1,NULL,NULL),
	(111,'Georgia','GA','United States',1,NULL,NULL),
	(112,'Connecticut','CT','United States',1,NULL,NULL),
	(113,'District Of Columbia','DC','United States',1,NULL,NULL),
	(114,'Delaware','DE','United States',1,NULL,NULL),
	(115,'Florida','FL','United States',1,NULL,NULL),
	(116,'Hawaii','HI','United States',1,NULL,NULL),
	(117,'Idaho','ID','United States',1,NULL,NULL),
	(118,'Illinois','IL','United States',1,NULL,NULL),
	(119,'Indiana','IN','United States',1,NULL,NULL),
	(120,'Iowa','IA','United States',1,NULL,NULL),
	(121,'Kansas','KS','United States',1,NULL,NULL),
	(122,'Kentucky','KY','United States',1,NULL,NULL),
	(123,'Louisiana','LA','United States',1,NULL,NULL),
	(124,'Maine','ME','United States',1,NULL,NULL),
	(125,'Maryland','MD','United States',1,NULL,NULL),
	(126,'Michigan','MI','United States',1,NULL,NULL),
	(127,'Massachusetts','MA','United States',1,NULL,NULL),
	(128,'Minnesota','MN','United States',1,NULL,NULL),
	(129,'Mississippi','MS','United States',1,NULL,NULL),
	(130,'Nebraska','NE','United States',1,NULL,NULL),
	(131,'Montana','MT','United States',1,NULL,NULL),
	(132,'New Hampshire','NH','United States',1,NULL,NULL),
	(133,'Missouri','MO','United States',1,NULL,NULL),
	(134,'Nevada','NV','United States',1,NULL,NULL),
	(135,'New Jersey','NJ','United States',1,NULL,NULL),
	(136,'New Mexico','NM','United States',1,NULL,NULL),
	(137,'North Dakota','ND','United States',1,NULL,NULL),
	(138,'North Carolina','NC','United States',1,NULL,NULL),
	(139,'New York','NY','United States',1,NULL,NULL),
	(140,'Ohio','OH','United States',1,NULL,NULL),
	(141,'Oklahoma','OK','United States',1,NULL,NULL),
	(142,'Oregon','OR','United States',1,NULL,NULL),
	(143,'Pennsylvania','PA','United States',1,NULL,NULL),
	(144,'Rhode Island','RI','United States',1,NULL,NULL),
	(145,'South Carolina','SC','United States',1,NULL,NULL),
	(146,'Tennessee','TN','United States',1,NULL,NULL),
	(147,'South Dakota','SD','United States',1,NULL,NULL),
	(148,'Vermont','VT','United States',1,NULL,NULL),
	(149,'Utah','UT','United States',1,NULL,NULL),
	(150,'Texas','TX','United States',1,NULL,NULL),
	(151,'Washington','WA','United States',1,NULL,NULL),
	(152,'Virginia','VA','United States',1,NULL,NULL),
	(153,'West Virginia','WV','United States',1,NULL,NULL),
	(154,'Wisconsin','WI','United States',1,NULL,NULL),
	(155,'Wyoming','WY','United States',1,NULL,NULL),
	(156,'Laguna','Laguna','Philippines',171,NULL,NULL),
	(157,'Pangasinan','Pangasinan','Philippines',171,NULL,NULL),
	(158,'Cebu','Cebu','Philippines',171,NULL,NULL),
	(159,'Negros Occidental','Negros Occidental','Philippines',171,NULL,NULL),
	(160,'Cavite','Cavite','Philippines',171,NULL,NULL),
	(161,'Bulacan','Bulacan','Philippines',171,NULL,NULL),
	(162,'Rizal','Rizal','Philippines',171,NULL,NULL),
	(163,'Batangas','Batangas','Philippines',171,NULL,NULL),
	(164,'Pampanga','Pampanga','Philippines',171,NULL,NULL),
	(165,'Iloilo','Iloilo','Philippines',171,NULL,NULL),
	(166,'Davao del Sur','Davao del Sur','Philippines',171,NULL,NULL),
	(167,'Nueva Ecija','Nueva Ecija','Philippines',171,NULL,NULL),
	(168,'Quezon','Quezon','Philippines',171,NULL,NULL),
	(169,'Leyte','Leyte','Philippines',171,NULL,NULL),
	(170,'Camarines Sur','Camarines Sur','Philippines',171,NULL,NULL),
	(171,'Zamboanga del Sur','Zamboanga del Sur','Philippines',171,NULL,NULL),
	(172,'Misamis Oriental','Misamis Oriental','Philippines',171,NULL,NULL),
	(173,'Isabela','Isabela','Philippines',171,NULL,NULL),
	(174,'South Cotabato','South Cotabato','Philippines',171,NULL,NULL),
	(175,'Maguindanao','Maguindanao','Philippines',171,NULL,NULL),
	(176,'Bukidnon','Bukidnon','Philippines',171,NULL,NULL),
	(177,'Cotabato','Cotabato','Philippines',171,NULL,NULL),
	(178,'Tarlac','Tarlac','Philippines',171,NULL,NULL),
	(179,'Negros Oriental','Negros Oriental','Philippines',171,NULL,NULL),
	(180,'Albay','Albay','Philippines',171,NULL,NULL),
	(181,'Bohol','Bohol','Philippines',171,NULL,NULL),
	(182,'Cagayan','Cagayan','Philippines',171,NULL,NULL),
	(183,'Lanao del Norte','Lanao del Norte','Philippines',171,NULL,NULL),
	(184,'Palawan','Palawan','Philippines',171,NULL,NULL),
	(185,'Lanao del Sur','Lanao del Sur','Philippines',171,NULL,NULL),
	(186,'Davao del Norte','Davao del Norte','Philippines',171,NULL,NULL),
	(187,'Zamboanga del Norte','Zamboanga del Norte','Philippines',171,NULL,NULL),
	(188,'Masbate','Masbate','Philippines',171,NULL,NULL),
	(189,'Zambales','Zambales','Philippines',171,NULL,NULL),
	(190,'Oriental Mindoro','Oriental Mindoro','Philippines',171,NULL,NULL),
	(191,'Sulu','Sulu','Philippines',171,NULL,NULL),
	(192,'Sultan Kudarat','Sultan Kudarat','Philippines',171,NULL,NULL),
	(193,'Sorsogon','Sorsogon','Philippines',171,NULL,NULL),
	(194,'Benguet','Benguet','Philippines',171,NULL,NULL),
	(195,'La Union','La Union','Philippines',171,NULL,NULL),
	(196,'Samar','Samar','Philippines',171,NULL,NULL),
	(197,'Capiz','Capiz','Philippines',171,NULL,NULL),
	(198,'Bataan','Bataan','Philippines',171,NULL,NULL),
	(199,'Compostela Valley','Compostela Valley','Philippines',171,NULL,NULL),
	(200,'Agusan del Sur','Agusan del Sur','Philippines',171,NULL,NULL),
	(201,'Agusan del Norte','Agusan del Norte','Philippines',171,NULL,NULL),
	(202,'Ilocos Sur','Ilocos Sur','Philippines',171,NULL,NULL),
	(203,'Zamboanga Sibugay','Zamboanga Sibugay','Philippines',171,NULL,NULL),
	(204,'Northern Samar','Northern Samar','Philippines',171,NULL,NULL),
	(205,'Camarines Norte','Camarines Norte','Philippines',171,NULL,NULL),
	(206,'Antique','Antique','Philippines',171,NULL,NULL),
	(207,'Surigao del Sur','Surigao del Sur','Philippines',171,NULL,NULL),
	(208,'Ilocos Norte','Ilocos Norte','Philippines',171,NULL,NULL),
	(209,'Misamis Occidental','Misamis Occidental','Philippines',171,NULL,NULL),
	(210,'Aklan','Aklan','Philippines',171,NULL,NULL),
	(211,'Davao Oriental','Davao Oriental','Philippines',171,NULL,NULL),
	(212,'Occidental Mindoro','Occidental Mindoro','Philippines',171,NULL,NULL),
	(213,'Sarangani','Sarangani','Philippines',171,NULL,NULL),
	(214,'Surigao del Norte','Surigao del Norte','Philippines',171,NULL,NULL),
	(215,'Eastern Samar','Eastern Samar','Philippines',171,NULL,NULL),
	(216,'Nueva Vizcaya','Nueva Vizcaya','Philippines',171,NULL,NULL),
	(217,'Basilan','Basilan','Philippines',171,NULL,NULL),
	(218,'Southern Leyte','Southern Leyte','Philippines',171,NULL,NULL),
	(219,'Tawi-Tawi','Tawi-Tawi','Philippines',171,NULL,NULL),
	(220,'Davao Occidental','Davao Occidental','Philippines',171,NULL,NULL),
	(221,'Catanduanes','Catanduanes','Philippines',171,NULL,NULL),
	(222,'Romblon','Romblon','Philippines',171,NULL,NULL),
	(223,'Quirino','Quirino','Philippines',171,NULL,NULL),
	(224,'Marinduque','Marinduque','Philippines',171,NULL,NULL),
	(225,'Abra','Abra','Philippines',171,NULL,NULL),
	(226,'Kalinga','Kalinga','Philippines',171,NULL,NULL),
	(227,'Aurora','Aurora','Philippines',171,NULL,NULL),
	(228,'Ifugao','Ifugao','Philippines',171,NULL,NULL),
	(229,'Guimaras','Guimaras','Philippines',171,NULL,NULL),
	(230,'Dinagat Islands','Dinagat Islands','Philippines',171,NULL,NULL),
	(231,'Siquijor','Siquijor','Philippines',171,NULL,NULL),
	(232,'Biliran','Biliran','Philippines',171,NULL,NULL),
	(233,'Mountain Province','Mountain Province','Philippines',171,NULL,NULL),
	(234,'Apayao','Apayao','Philippines',171,NULL,NULL),
	(235,'Camiguin','Camiguin','Philippines',171,NULL,NULL),
	(236,'Batanes','Batanes','Philippines',171,NULL,NULL),
	(237,'New Brunswick','New Brunswick','Canada',2,NULL,NULL),
	(238,'British Columbia','British Columbia','Canada',2,NULL,NULL),
	(239,'Nova Scotia','Nova Scotia','Canada',2,NULL,NULL),
	(240,'Newfoundland and Labrador','Newfoundland and Labrador','Canada',2,NULL,NULL),
	(241,'Ontario','Ontario','Canada',2,NULL,NULL),
	(242,'Manitoba','Manitoba','Canada',2,NULL,NULL),
	(243,'Prince Edward Island','Prince Edward Island','Canada',2,NULL,NULL),
	(244,'Quebec','Quebec','Canada',2,NULL,NULL),
	(245,'Saskatchewan','Saskatchewan','Canada',2,NULL,NULL),
	(246,'Yukon','Yukon','Canada',2,NULL,NULL),
	(247,'Northwest Territories','Northwest Territories','Canada',2,NULL,NULL),
	(248,'Nunavut','Nunavut','Canada',2,NULL,NULL),
	(249,'Bath and North East Somerset','bath-and-north-east-somerset','United Kingdom',226,NULL,NULL),
	(250,'Bournemouth','bournemouth','United Kingdom',226,NULL,NULL),
	(251,'Berkshire','berkshire','United Kingdom',226,NULL,NULL),
	(252,'Blackpool','blackpool','United Kingdom',226,NULL,NULL),
	(253,'Bedford','bedford','United Kingdom',226,NULL,NULL),
	(254,'Brighton & Hove','brighton-&-hove','United Kingdom',226,NULL,NULL),
	(255,'Blackburn with Darwen','blackburn-with-darwen','United Kingdom',226,NULL,NULL),
	(256,'Cheshire East','cheshire-east','United Kingdom',226,NULL,NULL),
	(257,'Bristol','bristol','United Kingdom',226,NULL,NULL),
	(258,'Buckinghamshire','buckinghamshire','United Kingdom',226,NULL,NULL),
	(259,'Central Bedfordshire','central-bedfordshire','United Kingdom',226,NULL,NULL),
	(260,'Cambridgeshire','cambridgeshire','United Kingdom',226,NULL,NULL),
	(261,'Cheshire West and Chester','cheshire-west-and-chester','United Kingdom',226,NULL,NULL),
	(262,'Cornwall','cornwall','United Kingdom',226,NULL,NULL),
	(263,'Derbyshire','derbyshire','United Kingdom',226,NULL,NULL),
	(264,'Derby','derby','United Kingdom',226,NULL,NULL),
	(265,'Cumbria','cumbria','United Kingdom',226,NULL,NULL),
	(266,'Darlington','darlington','United Kingdom',226,NULL,NULL),
	(267,'Devon','devon','United Kingdom',226,NULL,NULL),
	(268,'Dorset','dorset','United Kingdom',226,NULL,NULL),
	(269,'Durham','durham','United Kingdom',226,NULL,NULL),
	(270,'East Riding of Yorkshire','east-riding-of-yorkshire','United Kingdom',226,NULL,NULL),
	(271,'Essex','essex','United Kingdom',226,NULL,NULL),
	(272,'Gloucestershire','gloucestershire','United Kingdom',226,NULL,NULL),
	(273,'East Sussex','east-sussex','United Kingdom',226,NULL,NULL),
	(274,'Greater London','greater-london','United Kingdom',226,NULL,NULL),
	(275,'Greater Manchester','greater-manchester','United Kingdom',226,NULL,NULL),
	(276,'Hertfordshire','hertfordshire','United Kingdom',226,NULL,NULL),
	(277,'Halton','halton','United Kingdom',226,NULL,NULL),
	(278,'Hartlepool','hartlepool','United Kingdom',226,NULL,NULL),
	(279,'Hampshire','hampshire','United Kingdom',226,NULL,NULL),
	(280,'Herefordshire','herefordshire','United Kingdom',226,NULL,NULL),
	(281,'Isle of Wight','isle-of-wight','United Kingdom',226,NULL,NULL),
	(282,'Kent','kent','United Kingdom',226,NULL,NULL),
	(283,'Lancashire','lancashire','United Kingdom',226,NULL,NULL),
	(284,'Kingston upon Hull','kingston-upon-hull','United Kingdom',226,NULL,NULL),
	(285,'Leicester','leicester','United Kingdom',226,NULL,NULL),
	(286,'Leicestershire','leicestershire','United Kingdom',226,NULL,NULL),
	(287,'Lincolnshire','lincolnshire','United Kingdom',226,NULL,NULL),
	(288,'Luton','luton','United Kingdom',226,NULL,NULL),
	(289,'Medway','medway','United Kingdom',226,NULL,NULL),
	(290,'Norfolk','norfolk','United Kingdom',226,NULL,NULL),
	(291,'Merseyside','merseyside','United Kingdom',226,NULL,NULL),
	(292,'Middlesbrough','middlesbrough','United Kingdom',226,NULL,NULL),
	(293,'Milton Keynes','milton-keynes','United Kingdom',226,NULL,NULL),
	(294,'North East Lincolnshire','north-east-lincolnshire','United Kingdom',226,NULL,NULL),
	(295,'North Lincolnshire','north-lincolnshire','United Kingdom',226,NULL,NULL),
	(296,'North Somerset','north-somerset','United Kingdom',226,NULL,NULL),
	(297,'North Yorkshire','north-yorkshire','United Kingdom',226,NULL,NULL),
	(298,'Northumberland','northumberland','United Kingdom',226,NULL,NULL),
	(299,'Nottingham','nottingham','United Kingdom',226,NULL,NULL),
	(300,'Northamptonshire','northamptonshire','United Kingdom',226,NULL,NULL),
	(301,'Nottinghamshire','nottinghamshire','United Kingdom',226,NULL,NULL),
	(302,'Oxfordshire','oxfordshire','United Kingdom',226,NULL,NULL),
	(303,'Peterborough','peterborough','United Kingdom',226,NULL,NULL),
	(304,'Redcar and Cleveland','redcar-and-cleveland','United Kingdom',226,NULL,NULL),
	(305,'Plymouth','plymouth','United Kingdom',226,NULL,NULL),
	(306,'Poole','poole','United Kingdom',226,NULL,NULL),
	(307,'Portsmouth','portsmouth','United Kingdom',226,NULL,NULL),
	(308,'Rutland','rutland','United Kingdom',226,NULL,NULL),
	(309,'Shropshire','shropshire','United Kingdom',226,NULL,NULL),
	(310,'Somerset','somerset','United Kingdom',226,NULL,NULL),
	(311,'South Yorkshire','south-yorkshire','United Kingdom',226,NULL,NULL),
	(312,'South Gloucestershire','south-gloucestershire','United Kingdom',226,NULL,NULL),
	(313,'Southampton','southampton','United Kingdom',226,NULL,NULL),
	(314,'Southend-on-Sea','southend-on-sea','United Kingdom',226,NULL,NULL),
	(315,'Staffordshire','staffordshire','United Kingdom',226,NULL,NULL),
	(316,'Stockton-on-Tees','stockton-on-tees','United Kingdom',226,NULL,NULL),
	(317,'Stoke-on-Trent','stoke-on-trent','United Kingdom',226,NULL,NULL),
	(318,'Suffolk','suffolk','United Kingdom',226,NULL,NULL),
	(319,'Surrey','surrey','United Kingdom',226,NULL,NULL),
	(320,'Telford and Wrekin','telford-and-wrekin','United Kingdom',226,NULL,NULL),
	(321,'Swindon','swindon','United Kingdom',226,NULL,NULL),
	(322,'Thurrock','thurrock','United Kingdom',226,NULL,NULL),
	(323,'Torbay','torbay','United Kingdom',226,NULL,NULL),
	(324,'Tyne and Wear','tyne-and-wear','United Kingdom',226,NULL,NULL),
	(325,'West Sussex','west-sussex','United Kingdom',226,NULL,NULL),
	(326,'Warrington','warrington','United Kingdom',226,NULL,NULL),
	(327,'Warwickshire','warwickshire','United Kingdom',226,NULL,NULL),
	(328,'West Midlands','west-midlands','United Kingdom',226,NULL,NULL),
	(329,'West Yorkshire','west-yorkshire','United Kingdom',226,NULL,NULL),
	(330,'Wiltshire','wiltshire','United Kingdom',226,NULL,NULL),
	(331,'Worcestershire','worcestershire','United Kingdom',226,NULL,NULL),
	(332,'York','york','United Kingdom',226,NULL,NULL);

/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fargo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fargoAlt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `streetAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
