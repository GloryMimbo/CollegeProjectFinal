-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2016 at 10:02 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ofr`
--

-- --------------------------------------------------------

--
-- Table structure for table `change_of_address`
--

CREATE TABLE IF NOT EXISTS `change_of_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_profile_id` int(11) NOT NULL,
  `reason_for_changing_address` varchar(258) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `change_of_passport`
--

CREATE TABLE IF NOT EXISTS `change_of_passport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_profile_id` int(11) NOT NULL,
  `reason` varchar(258) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `change_of_passport`
--

INSERT INTO `change_of_passport` (`id`, `reg_profile_id`, `reason`, `ts`) VALUES
(2, 5, 'DFASO DFADSF adsf sdf asdfs', '2016-02-18 09:33:49');

-- --------------------------------------------------------

--
-- Table structure for table `exit_permit`
--

CREATE TABLE IF NOT EXISTS `exit_permit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_profile_id` int(11) NOT NULL,
  `departure_date` date NOT NULL,
  `expected_stay_in_date` date NOT NULL,
  `reason_for_delay` varchar(258) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `exit_permit`
--

INSERT INTO `exit_permit` (`id`, `reg_profile_id`, `departure_date`, `expected_stay_in_date`, `reason_for_delay`, `ts`) VALUES
(1, 2, '2016-02-18', '2016-02-25', 'test', '2016-02-16 02:08:42'),
(2, 29, '2016-02-19', '2016-02-27', 'test-upd', '2016-02-16 02:09:39');

-- --------------------------------------------------------

--
-- Table structure for table `loss_of_passport`
--

CREATE TABLE IF NOT EXISTS `loss_of_passport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_profile_id` int(11) NOT NULL,
  `reason` varchar(258) NOT NULL,
  `report_to_police` varchar(258) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `loss_of_passport`
--

INSERT INTO `loss_of_passport` (`id`, `reg_profile_id`, `reason`, `report_to_police`, `ts`) VALUES
(1, 22, 'test-upd', 'test-upd', '2016-02-16 02:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(128) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `spouses_name` varchar(128) NOT NULL,
  `fathers_name` varchar(128) NOT NULL,
  `mothers_name` varchar(128) NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `email_id` varchar(258) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `country_of_birth` varchar(128) NOT NULL,
  `city_of_birth` varchar(128) NOT NULL,
  `height` varchar(10) NOT NULL,
  `religion` varchar(128) NOT NULL,
  `present_nationality` varchar(128) NOT NULL,
  `photo` varchar(258) NOT NULL,
  `addr_os_congo_addr1` varchar(258) NOT NULL,
  `addr_os_congo_city` varchar(128) NOT NULL,
  `addr_os_congo_country` varchar(128) NOT NULL,
  `rdcongo_addr_1` varchar(258) NOT NULL,
  `rdcongo_addr_city` varchar(128) NOT NULL,
  `rdcongo_addr_phoneno` varchar(20) NOT NULL,
  `emergency_contact_name` varchar(258) NOT NULL,
  `emergency_phone_no` varchar(20) NOT NULL,
  `emergency_country` varchar(128) NOT NULL,
  `emergency_city` varchar(128) NOT NULL,
  `emergency_relationship` varchar(128) NOT NULL,
  `passport_number` varchar(50) NOT NULL,
  `pp_country_of_issue` varchar(128) NOT NULL,
  `pp_place_of_issue` varchar(128) NOT NULL,
  `pp_date_of_issue` date NOT NULL,
  `pp_expire_date` date NOT NULL,
  `passport_brouchure` varchar(258) NOT NULL,
  `visa_number` varchar(128) NOT NULL,
  `visa_country_of_issue` varchar(258) NOT NULL,
  `visa_place_of_issue` varchar(128) NOT NULL,
  `visa_date_of_issue` date NOT NULL,
  `visa_expire_date` date NOT NULL,
  `visa_validity` varchar(128) NOT NULL,
  `visa_type` varchar(128) NOT NULL,
  `visa_copy` varchar(258) NOT NULL,
  `place_of_embarkation` varchar(258) NOT NULL,
  `city_of_embarkation` varchar(258) NOT NULL,
  `country_of_embarkation` varchar(258) NOT NULL,
  `date_of_arrival` date NOT NULL,
  `mode_of_journey` varchar(258) NOT NULL,
  `purpose_of_visiting_rdcongo` varchar(128) NOT NULL,
  `purpose_description` varchar(258) NOT NULL,
  `support_document` varchar(258) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `usertype` tinyint(4) NOT NULL COMMENT '0-users,1-police,2-airport,3-Admin',
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `full_name`, `sex`, `spouses_name`, `fathers_name`, `mothers_name`, `dob`, `age`, `email_id`, `mobile_no`, `country_of_birth`, `city_of_birth`, `height`, `religion`, `present_nationality`, `photo`, `addr_os_congo_addr1`, `addr_os_congo_city`, `addr_os_congo_country`, `rdcongo_addr_1`, `rdcongo_addr_city`, `rdcongo_addr_phoneno`, `emergency_contact_name`, `emergency_phone_no`, `emergency_country`, `emergency_city`, `emergency_relationship`, `passport_number`, `pp_country_of_issue`, `pp_place_of_issue`, `pp_date_of_issue`, `pp_expire_date`, `passport_brouchure`, `visa_number`, `visa_country_of_issue`, `visa_place_of_issue`, `visa_date_of_issue`, `visa_expire_date`, `visa_validity`, `visa_type`, `visa_copy`, `place_of_embarkation`, `city_of_embarkation`, `country_of_embarkation`, `date_of_arrival`, `mode_of_journey`, `purpose_of_visiting_rdcongo`, `purpose_description`, `support_document`, `status`, `usertype`, `ts`) VALUES
(1, 'Admin', '', '', '', '', '2016-01-01', 0, 'admin@ofr.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 0, 3, '2016-02-16 05:46:23'),
(2, 'Airport', '', '', '', '', '2016-01-01', 0, 'airport@ofr.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 0, 2, '2016-02-16 05:49:36'),
(3, 'Police', '', '', '', '', '2016-01-01', 0, 'police@ofr.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 0, 1, '2016-02-16 05:50:12'),
(4, '', '', '', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 0, 1, '2016-02-16 05:50:12'),
(5, 'jagan', 'MALE', 'test', 'test', 'test', '2016-02-01', 11, 'test@gmail.com', '978434993', '3', 'dtest', '105', 'christian', '1', '', 'test-upd', 'test-upd', '12', 'sdajfsl - upd', 'sjdlfsfl -upd', '8568985698000', 'lsljdflj', '894959458', '2', 'ssdfa', 'safdf', 'B4FFE2324000', '103', 'chennai-upd', '2016-02-26', '0000-00-00', '', '4545289', '2', 'DUBAI', '2016-02-10', '2016-02-29', '3 Months', 'Employment', '', 'sdldjf', 'kllkj', '8', '2016-02-16', 'kljlj', 'kljkl', 'lklj', '', 0, 0, '2016-02-18 06:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `registration_appointment`
--

CREATE TABLE IF NOT EXISTS `registration_appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_profile_id` int(11) NOT NULL,
  `appt_date_time` datetime NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cities`
--

CREATE TABLE IF NOT EXISTS `tbl_cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(128) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `tbl_cities`
--

INSERT INTO `tbl_cities` (`id`, `city_name`, `state_id`) VALUES
(1, 'Kinshasa', 1),
(2, ' Bandalungwa', 1),
(3, 'Barumbu', 1),
(4, 'Kisenso (Kinsenso)', 1),
(5, 'Kimbanseke', 1),
(6, 'Bumbu', 1),
(7, 'Gombe', 1),
(8, 'Lemba', 1),
(9, 'Maluku', 1),
(10, 'Masina', 1),
(11, 'Kasa-Vubu', 1),
(12, 'Kintambo', 1),
(13, 'Matete', 1),
(14, 'Makala', 1),
(15, 'Ndjili', 1),
(16, 'Lingwala', 1),
(17, 'Ngaba', 1),
(18, 'Nsele', 1),
(19, 'Ngiri-Ngiri', 1),
(20, 'Mont Ngafula', 1),
(21, 'Ngaliema', 1),
(22, 'Selembao', 1),
(23, 'Limete', 1),
(24, 'Kalamu', 1),
(25, 'Matadi', 2),
(26, 'Kenge', 3),
(27, 'Kikwit', 4),
(28, 'Inongo', 5),
(29, 'Luebo', 6),
(30, 'Kananga', 7),
(32, 'Mbuji-Mayi', 8),
(33, 'Kabinda', 9),
(34, 'Lusambo', 10),
(35, 'Kindu', 11),
(36, ' Bukavu ', 12),
(37, 'Goma', 13),
(38, 'Bunia', 14),
(39, 'Isiro', 15),
(40, 'Kisangani', 16),
(41, 'Buta', 17),
(42, 'Gbadolite', 18),
(43, 'Lisala', 19),
(44, 'Gemena', 20),
(45, 'Mbandaka', 21),
(46, 'Boende', 22),
(47, 'Kalemie', 23),
(48, 'Kamina', 24),
(49, 'Kolwezi', 25),
(50, 'Lubumbashi', 26);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countries`
--

CREATE TABLE IF NOT EXISTS `tbl_countries` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `countryCode` char(2) NOT NULL DEFAULT '',
  `countryName` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=251 ;

--
-- Dumping data for table `tbl_countries`
--

INSERT INTO `tbl_countries` (`id`, `countryCode`, `countryName`) VALUES
(1, 'AD', 'Andorra'),
(2, 'AE', 'United Arab Emirates'),
(3, 'AF', 'Afghanistan'),
(4, 'AG', 'Antigua and Barbuda'),
(5, 'AI', 'Anguilla'),
(6, 'AL', 'Albania'),
(7, 'AM', 'Armenia'),
(8, 'AO', 'Angola'),
(9, 'AQ', 'Antarctica'),
(10, 'AR', 'Argentina'),
(11, 'AS', 'American Samoa'),
(12, 'AT', 'Austria'),
(13, 'AU', 'Australia'),
(14, 'AW', 'Aruba'),
(15, 'AX', 'Åland'),
(16, 'AZ', 'Azerbaijan'),
(17, 'BA', 'Bosnia and Herzegovina'),
(18, 'BB', 'Barbados'),
(19, 'BD', 'Bangladesh'),
(20, 'BE', 'Belgium'),
(21, 'BF', 'Burkina Faso'),
(22, 'BG', 'Bulgaria'),
(23, 'BH', 'Bahrain'),
(24, 'BI', 'Burundi'),
(25, 'BJ', 'Benin'),
(26, 'BL', 'Saint Barthélemy'),
(27, 'BM', 'Bermuda'),
(28, 'BN', 'Brunei'),
(29, 'BO', 'Bolivia'),
(30, 'BQ', 'Bonaire'),
(31, 'BR', 'Brazil'),
(32, 'BS', 'Bahamas'),
(33, 'BT', 'Bhutan'),
(34, 'BV', 'Bouvet Island'),
(35, 'BW', 'Botswana'),
(36, 'BY', 'Belarus'),
(37, 'BZ', 'Belize'),
(38, 'CA', 'Canada'),
(39, 'CC', 'Cocos [Keeling] Islands'),
(40, 'CD', 'Democratic Republic of the Congo'),
(41, 'CF', 'Central African Republic'),
(42, 'CG', 'Republic of the Congo'),
(43, 'CH', 'Switzerland'),
(44, 'CI', 'Ivory Coast'),
(45, 'CK', 'Cook Islands'),
(46, 'CL', 'Chile'),
(47, 'CM', 'Cameroon'),
(48, 'CN', 'China'),
(49, 'CO', 'Colombia'),
(50, 'CR', 'Costa Rica'),
(51, 'CU', 'Cuba'),
(52, 'CV', 'Cape Verde'),
(53, 'CW', 'Curacao'),
(54, 'CX', 'Christmas Island'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DE', 'Germany'),
(58, 'DJ', 'Djibouti'),
(59, 'DK', 'Denmark'),
(60, 'DM', 'Dominica'),
(61, 'DO', 'Dominican Republic'),
(62, 'DZ', 'Algeria'),
(63, 'EC', 'Ecuador'),
(64, 'EE', 'Estonia'),
(65, 'EG', 'Egypt'),
(66, 'EH', 'Western Sahara'),
(67, 'ER', 'Eritrea'),
(68, 'ES', 'Spain'),
(69, 'ET', 'Ethiopia'),
(70, 'FI', 'Finland'),
(71, 'FJ', 'Fiji'),
(72, 'FK', 'Falkland Islands'),
(73, 'FM', 'Micronesia'),
(74, 'FO', 'Faroe Islands'),
(75, 'FR', 'France'),
(76, 'GA', 'Gabon'),
(77, 'GB', 'United Kingdom'),
(78, 'GD', 'Grenada'),
(79, 'GE', 'Georgia'),
(80, 'GF', 'French Guiana'),
(81, 'GG', 'Guernsey'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GL', 'Greenland'),
(85, 'GM', 'Gambia'),
(86, 'GN', 'Guinea'),
(87, 'GP', 'Guadeloupe'),
(88, 'GQ', 'Equatorial Guinea'),
(89, 'GR', 'Greece'),
(90, 'GS', 'South Georgia and the South Sandwich Islands'),
(91, 'GT', 'Guatemala'),
(92, 'GU', 'Guam'),
(93, 'GW', 'Guinea-Bissau'),
(94, 'GY', 'Guyana'),
(95, 'HK', 'Hong Kong'),
(96, 'HM', 'Heard Island and McDonald Islands'),
(97, 'HN', 'Honduras'),
(98, 'HR', 'Croatia'),
(99, 'HT', 'Haiti'),
(100, 'HU', 'Hungary'),
(101, 'ID', 'Indonesia'),
(102, 'IE', 'Ireland'),
(103, 'IL', 'Israel'),
(104, 'IM', 'Isle of Man'),
(105, 'IN', 'India'),
(106, 'IO', 'British Indian Ocean Territory'),
(107, 'IQ', 'Iraq'),
(108, 'IR', 'Iran'),
(109, 'IS', 'Iceland'),
(110, 'IT', 'Italy'),
(111, 'JE', 'Jersey'),
(112, 'JM', 'Jamaica'),
(113, 'JO', 'Jordan'),
(114, 'JP', 'Japan'),
(115, 'KE', 'Kenya'),
(116, 'KG', 'Kyrgyzstan'),
(117, 'KH', 'Cambodia'),
(118, 'KI', 'Kiribati'),
(119, 'KM', 'Comoros'),
(120, 'KN', 'Saint Kitts and Nevis'),
(121, 'KP', 'North Korea'),
(122, 'KR', 'South Korea'),
(123, 'KW', 'Kuwait'),
(124, 'KY', 'Cayman Islands'),
(125, 'KZ', 'Kazakhstan'),
(126, 'LA', 'Laos'),
(127, 'LB', 'Lebanon'),
(128, 'LC', 'Saint Lucia'),
(129, 'LI', 'Liechtenstein'),
(130, 'LK', 'Sri Lanka'),
(131, 'LR', 'Liberia'),
(132, 'LS', 'Lesotho'),
(133, 'LT', 'Lithuania'),
(134, 'LU', 'Luxembourg'),
(135, 'LV', 'Latvia'),
(136, 'LY', 'Libya'),
(137, 'MA', 'Morocco'),
(138, 'MC', 'Monaco'),
(139, 'MD', 'Moldova'),
(140, 'ME', 'Montenegro'),
(141, 'MF', 'Saint Martin'),
(142, 'MG', 'Madagascar'),
(143, 'MH', 'Marshall Islands'),
(144, 'MK', 'Macedonia'),
(145, 'ML', 'Mali'),
(146, 'MM', 'Myanmar [Burma]'),
(147, 'MN', 'Mongolia'),
(148, 'MO', 'Macao'),
(149, 'MP', 'Northern Mariana Islands'),
(150, 'MQ', 'Martinique'),
(151, 'MR', 'Mauritania'),
(152, 'MS', 'Montserrat'),
(153, 'MT', 'Malta'),
(154, 'MU', 'Mauritius'),
(155, 'MV', 'Maldives'),
(156, 'MW', 'Malawi'),
(157, 'MX', 'Mexico'),
(158, 'MY', 'Malaysia'),
(159, 'MZ', 'Mozambique'),
(160, 'NA', 'Namibia'),
(161, 'NC', 'New Caledonia'),
(162, 'NE', 'Niger'),
(163, 'NF', 'Norfolk Island'),
(164, 'NG', 'Nigeria'),
(165, 'NI', 'Nicaragua'),
(166, 'NL', 'Netherlands'),
(167, 'NO', 'Norway'),
(168, 'NP', 'Nepal'),
(169, 'NR', 'Nauru'),
(170, 'NU', 'Niue'),
(171, 'NZ', 'New Zealand'),
(172, 'OM', 'Oman'),
(173, 'PA', 'Panama'),
(174, 'PE', 'Peru'),
(175, 'PF', 'French Polynesia'),
(176, 'PG', 'Papua New Guinea'),
(177, 'PH', 'Philippines'),
(178, 'PK', 'Pakistan'),
(179, 'PL', 'Poland'),
(180, 'PM', 'Saint Pierre and Miquelon'),
(181, 'PN', 'Pitcairn Islands'),
(182, 'PR', 'Puerto Rico'),
(183, 'PS', 'Palestine'),
(184, 'PT', 'Portugal'),
(185, 'PW', 'Palau'),
(186, 'PY', 'Paraguay'),
(187, 'QA', 'Qatar'),
(188, 'RE', 'Réunion'),
(189, 'RO', 'Romania'),
(190, 'RS', 'Serbia'),
(191, 'RU', 'Russia'),
(192, 'RW', 'Rwanda'),
(193, 'SA', 'Saudi Arabia'),
(194, 'SB', 'Solomon Islands'),
(195, 'SC', 'Seychelles'),
(196, 'SD', 'Sudan'),
(197, 'SE', 'Sweden'),
(198, 'SG', 'Singapore'),
(199, 'SH', 'Saint Helena'),
(200, 'SI', 'Slovenia'),
(201, 'SJ', 'Svalbard and Jan Mayen'),
(202, 'SK', 'Slovakia'),
(203, 'SL', 'Sierra Leone'),
(204, 'SM', 'San Marino'),
(205, 'SN', 'Senegal'),
(206, 'SO', 'Somalia'),
(207, 'SR', 'Suriname'),
(208, 'SS', 'South Sudan'),
(209, 'ST', 'São Tomé and Príncipe'),
(210, 'SV', 'El Salvador'),
(211, 'SX', 'Sint Maarten'),
(212, 'SY', 'Syria'),
(213, 'SZ', 'Swaziland'),
(214, 'TC', 'Turks and Caicos Islands'),
(215, 'TD', 'Chad'),
(216, 'TF', 'French Southern Territories'),
(217, 'TG', 'Togo'),
(218, 'TH', 'Thailand'),
(219, 'TJ', 'Tajikistan'),
(220, 'TK', 'Tokelau'),
(221, 'TL', 'East Timor'),
(222, 'TM', 'Turkmenistan'),
(223, 'TN', 'Tunisia'),
(224, 'TO', 'Tonga'),
(225, 'TR', 'Turkey'),
(226, 'TT', 'Trinidad and Tobago'),
(227, 'TV', 'Tuvalu'),
(228, 'TW', 'Taiwan'),
(229, 'TZ', 'Tanzania'),
(230, 'UA', 'Ukraine'),
(231, 'UG', 'Uganda'),
(232, 'UM', 'U.S. Minor Outlying Islands'),
(233, 'US', 'United States'),
(234, 'UY', 'Uruguay'),
(235, 'UZ', 'Uzbekistan'),
(236, 'VA', 'Vatican City'),
(237, 'VC', 'Saint Vincent and the Grenadines'),
(238, 'VE', 'Venezuela'),
(239, 'VG', 'British Virgin Islands'),
(240, 'VI', 'U.S. Virgin Islands'),
(241, 'VN', 'Vietnam'),
(242, 'VU', 'Vanuatu'),
(243, 'WF', 'Wallis and Futuna'),
(244, 'WS', 'Samoa'),
(245, 'XK', 'Kosovo'),
(246, 'YE', 'Yemen'),
(247, 'YT', 'Mayotte'),
(248, 'ZA', 'South Africa'),
(249, 'ZM', 'Zambia'),
(250, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_states`
--

CREATE TABLE IF NOT EXISTS `tbl_states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `tbl_states`
--

INSERT INTO `tbl_states` (`id`, `state_name`) VALUES
(1, 'Kinshasa'),
(2, 'Kongo Central'),
(3, 'Kwango'),
(4, 'Kwilu'),
(5, 'Mai-Ndombe'),
(6, 'Kasai'),
(7, 'Kasai-Central'),
(8, 'Kasai-Oriental'),
(9, 'Lomami'),
(10, 'Sankuru'),
(11, 'Maniema'),
(12, 'South Kivu'),
(13, 'North Kivu'),
(14, 'Ituri'),
(15, 'Haut-Uele'),
(16, 'Tshopo'),
(17, 'Bas-Uele'),
(18, 'Nord-Ubangi'),
(19, 'Mongala'),
(20, 'Sud-Ubangi'),
(21, 'Équateur'),
(22, 'Tshuapa'),
(23, 'Tanganyika'),
(24, 'Haut-Lomami'),
(25, 'Lualaba'),
(26, 'Haut-Katanga');

-- --------------------------------------------------------

--
-- Table structure for table `visa_extension`
--

CREATE TABLE IF NOT EXISTS `visa_extension` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_profile_id` int(11) NOT NULL,
  `have_you_visiting_rdcongo_before` varchar(128) NOT NULL,
  `if_yes_year` varchar(30) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `reason_for_ext` varchar(258) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
