-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3307
-- Létrehozás ideje: 2022. Feb 02. 09:02
-- Kiszolgáló verziója: 10.4.6-MariaDB
-- PHP verzió: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `endlessrunner1`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `achievableranks`
--

CREATE TABLE `achievableranks` (
  `id` int(11) NOT NULL,
  `rank` varchar(255) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `achievableranks`
--

INSERT INTO `achievableranks` (`id`, `rank`) VALUES
(1, 'Iron'),
(2, 'Bronze'),
(3, 'Silver'),
(4, 'Gold'),
(5, 'Plat'),
(6, 'Diamond'),
(7, 'Master'),
(8, 'GrandMaster'),
(9, 'Runner');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `currency`
--

CREATE TABLE `currency` (
  `userid` int(11) NOT NULL,
  `coins` int(11) DEFAULT NULL,
  `eastereggclaimed` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `elo`
--

CREATE TABLE `elo` (
  `userid` int(11) NOT NULL,
  `elo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `elo`
--

INSERT INTO `elo` (`userid`, `elo`) VALUES
(1, 3000),
(6324, 3481),
(6325, 3441),
(6326, 345),
(6327, 5928),
(6328, 2201),
(6329, 1030),
(6330, 6103),
(6331, 655),
(6332, 6363),
(6333, 780),
(6334, 1371),
(6335, 1303),
(6336, 4930),
(6337, 1419),
(6338, 1899),
(6339, 1556),
(6340, 6370),
(6341, 6770),
(6342, 400),
(6343, 5364),
(6344, 6449),
(6345, 4246),
(6346, 3868),
(6347, 2340),
(6348, 5172),
(6349, 1584),
(6350, 5086),
(6351, 3689),
(6352, 5319),
(6353, 3758),
(6354, 6829),
(6355, 2936),
(6356, 3926),
(6357, 4946),
(6358, 4004),
(6359, 4462),
(6360, 4904),
(6361, 3651),
(6362, 156),
(6363, 716),
(6364, 2557),
(6365, 4884),
(6366, 4015),
(6367, 3465),
(6368, 4668),
(6369, 2042),
(6370, 2507),
(6371, 5323),
(6372, 5148),
(6373, 2374),
(6374, 445),
(6375, 3503),
(6376, 3910),
(6377, 4860),
(6378, 4938),
(6379, 3067),
(6380, 5952),
(6381, 1075),
(6382, 3252),
(6383, 4907),
(6384, 4247),
(6385, 3804),
(6386, 2477),
(6387, 2740),
(6388, 2658),
(6389, 640),
(6390, 1029),
(6391, 6149),
(6392, 3034),
(6393, 756),
(6394, 3321),
(6395, 2488),
(6396, 6905),
(6397, 6810),
(6398, 2486),
(6399, 2610),
(6400, 4660),
(6401, 3940),
(6402, 2035),
(6403, 1790),
(6404, 3345),
(6405, 6496),
(6406, 1280),
(6407, 1704),
(6408, 5998),
(6409, 6479),
(6410, 4785),
(6411, 4539),
(6412, 1505),
(6413, 1828),
(6414, 585),
(6415, 1767),
(6416, 3902),
(6417, 951),
(6418, 3628),
(6419, 4597),
(6420, 3164),
(6421, 5211),
(6422, 2796),
(6423, 3375);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `rarity` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `onsale` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `items`
--

INSERT INTO `items` (`id`, `name`, `rarity`, `price`, `img`, `description`, `onsale`) VALUES
(1, 'Test legendary', 'Legendary', 1000, 'placeholder.jpg\r\n', 'test description', 1),
(2, 'Test Epic', 'Epic', 800, 'placeholder.jpg\r\n', 'test description', 1),
(3, 'Test Rare', 'Rare', 500, 'placeholder.jpg\r\n', 'test description', 1),
(4, 'Test Uncommon', 'Uncommon', 250, 'placeholder.jpg\r\n', 'test description', 1),
(5, 'Test Common', 'Common', 100, 'placeholder.jpg\r\n', 'test description', 0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `ranks`
--

CREATE TABLE `ranks` (
  `userid` int(11) NOT NULL,
  `rankid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `ranks`
--

INSERT INTO `ranks` (`userid`, `rankid`) VALUES
(6326, 1),
(6328, 1),
(6333, 1),
(6336, 1),
(6343, 1),
(6347, 1),
(6360, 1),
(6369, 1),
(6380, 1),
(6388, 1),
(6389, 1),
(6400, 1),
(6410, 1),
(6415, 1),
(6422, 1),
(6334, 2),
(6338, 2),
(6346, 2),
(6355, 2),
(6359, 2),
(6368, 2),
(6377, 2),
(6379, 2),
(6383, 2),
(6386, 2),
(6405, 2),
(6409, 2),
(6411, 2),
(6421, 2),
(6337, 3),
(6349, 3),
(6354, 3),
(6372, 3),
(6413, 3),
(6414, 3),
(6419, 3),
(6324, 4),
(6325, 4),
(6329, 4),
(6331, 4),
(6341, 4),
(6364, 4),
(6366, 4),
(6367, 4),
(6381, 4),
(6420, 4),
(6335, 5),
(6340, 5),
(6350, 5),
(6352, 5),
(6358, 5),
(6361, 5),
(6370, 5),
(6391, 5),
(6401, 5),
(6404, 5),
(6407, 5),
(6417, 5),
(6332, 6),
(6345, 6),
(6363, 6),
(6376, 6),
(6382, 6),
(6387, 6),
(6390, 6),
(6392, 6),
(6393, 6),
(6394, 6),
(6398, 6),
(6402, 6),
(6412, 6),
(6418, 6),
(1, 7),
(6327, 7),
(6344, 7),
(6348, 7),
(6351, 7),
(6353, 7),
(6356, 7),
(6374, 7),
(6375, 7),
(6396, 7),
(6397, 7),
(6403, 7),
(6406, 7),
(6416, 7),
(6423, 7),
(6330, 8),
(6339, 8),
(6342, 8),
(6357, 8),
(6362, 8),
(6365, 8),
(6371, 8),
(6373, 8),
(6378, 8),
(6384, 8),
(6385, 8),
(6395, 8),
(6399, 8),
(6408, 8);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `userhighscore`
--

CREATE TABLE `userhighscore` (
  `userid` int(11) NOT NULL,
  `highscore` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `userhighscore`
--

INSERT INTO `userhighscore` (`userid`, `highscore`) VALUES
(1, 5000),
(6324, 100),
(6325, 3147),
(6326, 3622),
(6327, 7871),
(6328, 8780),
(6329, 7484),
(6330, 5673),
(6331, 287),
(6332, 2028),
(6333, 5194),
(6334, 1674),
(6335, 6578),
(6336, 7337),
(6337, 7881),
(6338, 7366),
(6339, 6005),
(6340, 6848),
(6341, 6262),
(6342, 7902),
(6343, 4154),
(6344, 5807),
(6345, 9375),
(6346, 6638),
(6347, 1388),
(6348, 4403),
(6349, 6821),
(6350, 8214),
(6351, 6996),
(6352, 1979),
(6353, 2253),
(6354, 1396),
(6355, 9376),
(6356, 2782),
(6357, 6632),
(6358, 6683),
(6359, 5883),
(6360, 2393),
(6361, 8300),
(6362, 499),
(6363, 4059),
(6364, 8460),
(6365, 258),
(6366, 3558),
(6367, 3308),
(6368, 6639),
(6369, 301),
(6370, 9547),
(6371, 1329),
(6372, 8355),
(6373, 4660),
(6374, 4088),
(6375, 4706),
(6376, 3527),
(6377, 8737),
(6378, 741),
(6379, 2163),
(6380, 8539),
(6381, 7293),
(6382, 7429),
(6383, 6031),
(6384, 9621),
(6385, 2455),
(6386, 4433),
(6387, 1772),
(6388, 7320),
(6389, 6623),
(6390, 652),
(6391, 3085),
(6392, 4865),
(6393, 9096),
(6394, 460),
(6395, 8569),
(6396, 980),
(6397, 1726),
(6398, 946),
(6399, 4708),
(6400, 7727),
(6401, 3847),
(6402, 5664),
(6403, 7271),
(6404, 1204),
(6405, 2569),
(6406, 9167),
(6407, 344),
(6408, 1011),
(6409, 1704),
(6410, 5354),
(6411, 709),
(6412, 4398),
(6413, 9111),
(6414, 749),
(6415, 7439),
(6416, 5071),
(6417, 4247),
(6418, 2007),
(6419, 4341),
(6420, 7048),
(6421, 3624),
(6422, 5702),
(6423, 8287);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `useritems`
--

CREATE TABLE `useritems` (
  `userid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `useritems`
--

INSERT INTO `useritems` (`userid`, `itemid`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userName` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `userEmail` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `userPassword` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `issuspended` varchar(1) COLLATE utf8_hungarian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`userID`, `userName`, `userEmail`, `userPassword`, `issuspended`) VALUES
(1, 'Primeloryz', 'primeloryz1@gmail.com', 'bfd59291e825b5f2bbf1eb76569f8fe7', NULL),
(6324, 'fame	literature', 'fame	literature@outlook.com', 'fame	literature', NULL),
(6325, 'twincredit', 'twincredit@outlook.com', 'twincredit', NULL),
(6326, 'glarelack', 'glarelack@outlook.com', 'glarelack', NULL),
(6327, 'skipexpertise', 'skipexpertise@outlook.com', 'skipexpertise', NULL),
(6328, 'TRUEelegant', 'TRUEelegant@outlook.com', 'TRUEelegant', NULL),
(6329, 'factoryleft', 'factoryleft@gmail.com', 'factoryleft', NULL),
(6330, 'coupprey', 'coupprey@yahoomail.com', 'coupprey', NULL),
(6331, 'sexcirculation', 'sexcirculation@outlook.com', 'sexcirculation', NULL),
(6332, 'bedadopt', 'bedadopt@yahoomail.com', 'bedadopt', NULL),
(6333, 'mentionvague', 'mentionvague@gmail.com', 'mentionvague', NULL),
(6334, 'elapsecheck', 'elapsecheck@outlook.com', 'elapsecheck', NULL),
(6335, 'uncertaintytiptoe', 'uncertaintytiptoe@gmail.com', 'uncertaintytiptoe', NULL),
(6336, 'unpleasantimage', 'unpleasantimage@gmail.com', 'unpleasantimage', NULL),
(6337, 'barrierinterest', 'barrierinterest@gmail.com', 'barrierinterest', NULL),
(6338, 'doubtbaby', 'doubtbaby@outlook.com', 'doubtbaby', NULL),
(6339, 'ohvalley', 'ohvalley@gmail.com', 'ohvalley', NULL),
(6340, 'accessiblewater', 'accessiblewater@outlook.com', 'accessiblewater', NULL),
(6341, 'snowabsence', 'snowabsence@outlook.com', 'snowabsence', NULL),
(6342, 'checksouth', 'checksouth@yahoomail.com', 'checksouth', NULL),
(6343, 'arrangementjustify', 'arrangementjustify@outlook.com', 'arrangementjustify', NULL),
(6344, 'dismissalglimpse', 'dismissalglimpse@gmail.com', 'dismissalglimpse', NULL),
(6345, 'additionliterature', 'additionliterature@outlook.com', 'additionliterature', NULL),
(6346, 'southtune', 'southtune@yahoomail.com', 'southtune', NULL),
(6347, 'establisharrange', 'establisharrange@gmail.com', 'establisharrange', NULL),
(6348, 'husbandsink', 'husbandsink@yahoomail.com', 'husbandsink', NULL),
(6349, 'arrangecontempt', 'arrangecontempt@yahoomail.com', 'arrangecontempt', NULL),
(6350, 'earwaxdismissal', 'earwaxdismissal@gmail.com', 'earwaxdismissal', NULL),
(6351, 'dutymatch', 'dutymatch@outlook.com', 'dutymatch', NULL),
(6352, 'dictionaryextract', 'dictionaryextract@outlook.com', 'dictionaryextract', NULL),
(6353, 'shotleft', 'shotleft@gmail.com', 'shotleft', NULL),
(6354, 'productionwater', 'productionwater@outlook.com', 'productionwater', NULL),
(6355, 'infectinterest', 'infectinterest@gmail.com', 'infectinterest', NULL),
(6356, 'accompanyvision', 'accompanyvision@outlook.com', 'accompanyvision', NULL),
(6357, 'heavenbaby', 'heavenbaby@yahoomail.com', 'heavenbaby', NULL),
(6358, 'smallvegetation', 'smallvegetation@yahoomail.com', 'smallvegetation', NULL),
(6359, 'recordingsequence', 'recordingsequence@outlook.com', 'recordingsequence', NULL),
(6360, 'holeserve', 'holeserve@yahoomail.com', 'holeserve', NULL),
(6361, 'valleymoving', 'valleymoving@outlook.com', 'valleymoving', NULL),
(6362, 'colleagueestablish', 'colleagueestablish@outlook.com', 'colleagueestablish', NULL),
(6363, 'criticismdepressed', 'criticismdepressed@gmail.com', 'criticismdepressed', NULL),
(6364, 'pollutionarrow', 'pollutionarrow@outlook.com', 'pollutionarrow', NULL),
(6365, 'retireeinfect', 'retireeinfect@gmail.com', 'retireeinfect', NULL),
(6366, 'bedreservoir', 'bedreservoir@gmail.com', 'bedreservoir', NULL),
(6367, 'gregariouswarrant', 'gregariouswarrant@outlook.com', 'gregariouswarrant', NULL),
(6368, 'extensionmail', 'extensionmail@gmail.com', 'extensionmail', NULL),
(6369, 'mailmatch', 'mailmatch@yahoomail.com', 'mailmatch', NULL),
(6370, 'meritfreedom', 'meritfreedom@yahoomail.com', 'meritfreedom', NULL),
(6371, 'promotionagenda', 'promotionagenda@gmail.com', 'promotionagenda', NULL),
(6372, 'extractbarrier', 'extractbarrier@yahoomail.com', 'extractbarrier', NULL),
(6373, 'justifybed', 'justifybed@gmail.com', 'justifybed', NULL),
(6374, 'changematch', 'changematch@yahoomail.com', 'changematch', NULL),
(6375, 'foolmonk', 'foolmonk@gmail.com', 'foolmonk', NULL),
(6376, 'arrowlack', 'arrowlack@yahoomail.com', 'arrowlack', NULL),
(6377, 'sexwrist', 'sexwrist@gmail.com', 'sexwrist', NULL),
(6378, 'drownhandy', 'drownhandy@yahoomail.com', 'drownhandy', NULL),
(6379, 'bleedshadow', 'bleedshadow@outlook.com', 'bleedshadow', NULL),
(6380, 'tidystretch', 'tidystretch@gmail.com', 'tidystretch', NULL),
(6381, 'culturetwin', 'culturetwin@outlook.com', 'culturetwin', NULL),
(6382, 'favouriteextension', 'favouriteextension@outlook.com', 'favouriteextension', NULL),
(6383, 'pieglimpse', 'pieglimpse@gmail.com', 'pieglimpse', NULL),
(6384, 'civilizationbread', 'civilizationbread@outlook.com', 'civilizationbread', NULL),
(6385, 'matchrough', 'matchrough@outlook.com', 'matchrough', NULL),
(6386, 'wordcorpse', 'wordcorpse@yahoomail.com', 'wordcorpse', NULL),
(6387, 'citycheck', 'citycheck@yahoomail.com', 'citycheck', NULL),
(6388, 'civilizationexemption', 'civilizationexemption@outlook.com', 'civilizationexemption', NULL),
(6389, 'earwaxfuss', 'earwaxfuss@outlook.com', 'earwaxfuss', NULL),
(6390, 'stresslight', 'stresslight@gmail.com', 'stresslight', NULL),
(6391, 'hikesofa', 'hikesofa@gmail.com', 'hikesofa', NULL),
(6392, 'steptwin', 'steptwin@gmail.com', 'steptwin', NULL),
(6393, 'exchangerecover', 'exchangerecover@gmail.com', 'exchangerecover', NULL),
(6394, 'skatestretch', 'skatestretch@gmail.com', 'skatestretch', NULL),
(6395, 'cylinderskate', 'cylinderskate@yahoomail.com', 'cylinderskate', NULL),
(6396, 'husbandrecording', 'husbandrecording@yahoomail.com', 'husbandrecording', NULL),
(6397, 'panaccessible', 'panaccessible@outlook.com', 'panaccessible', NULL),
(6398, 'expertiseinn', 'expertiseinn@gmail.com', 'expertiseinn', NULL),
(6399, 'literaturematch', 'literaturematch@outlook.com', 'literaturematch', NULL),
(6400, 'checkjustify', 'checkjustify@gmail.com', 'checkjustify', NULL),
(6401, 'cliqueselection', 'cliqueselection@outlook.com', 'cliqueselection', NULL),
(6402, 'lacecoup', 'lacecoup@yahoomail.com', 'lacecoup', NULL),
(6403, 'unlikewrist', 'unlikewrist@gmail.com', 'unlikewrist', NULL),
(6404, 'monkumbrella', 'monkumbrella@outlook.com', 'monkumbrella', NULL),
(6405, 'additionarrange', 'additionarrange@outlook.com', 'additionarrange', NULL),
(6406, 'vegetationopinion', 'vegetationopinion@outlook.com', 'vegetationopinion', NULL),
(6407, 'ageafford', 'ageafford@gmail.com', 'ageafford', NULL),
(6408, 'commemoratearena', 'commemoratearena@gmail.com', 'commemoratearena', NULL),
(6409, 'vegetationprogress', 'vegetationprogress@outlook.com', 'vegetationprogress', NULL),
(6410, 'fussdiscuss', 'fussdiscuss@yahoomail.com', 'fussdiscuss', NULL),
(6411, 'arrowfactory', 'arrowfactory@gmail.com', 'arrowfactory', NULL),
(6412, 'adventurefool', 'adventurefool@outlook.com', 'adventurefool', NULL),
(6413, 'appearexpertise', 'appearexpertise@outlook.com', 'appearexpertise', NULL),
(6414, 'exchangevelvet', 'exchangevelvet@yahoomail.com', 'exchangevelvet', NULL),
(6415, 'husbandsiege', 'husbandsiege@yahoomail.com', 'husbandsiege', NULL),
(6416, 'representcivilization', 'representcivilization@outlook.com', 'representcivilization', NULL),
(6417, 'shotmainstream', 'shotmainstream@outlook.com', 'shotmainstream', NULL),
(6418, 'provincialaccessible', 'provincialaccessible@gmail.com', 'provincialaccessible', NULL),
(6419, 'resistfist', 'resistfist@yahoomail.com', 'resistfist', NULL),
(6420, 'velvetlie', 'velvetlie@outlook.com', 'velvetlie', NULL),
(6421, 'glareblade', 'glareblade@gmail.com', 'glareblade', NULL),
(6422, 'representribbon', 'representribbon@gmail.com', 'representribbon', NULL),
(6423, 'corpsevillage', 'corpsevillage@yahoomail.com', 'corpsevillage', NULL),
(6524, 'radiofollow', 'radiofollow@outlook.com', 'radiofollow', NULL),
(6525, 'charterexpansion', 'charterexpansion@yahoomail.com', 'charterexpansion', NULL),
(6526, 'talentedagenda', 'talentedagenda@outlook.com', 'talentedagenda', NULL),
(6527, 'routinecalorie', 'routinecalorie@outlook.com', 'routinecalorie', NULL),
(6528, 'eragallon', 'eragallon@yahoomail.com', 'eragallon', NULL),
(6529, 'gallonarrow', 'gallonarrow@gmail.com', 'gallonarrow', NULL),
(6530, 'flattrunk', 'flattrunk@outlook.com', 'flattrunk', NULL),
(6531, 'delivercharter', 'delivercharter@gmail.com', 'delivercharter', NULL),
(6532, 'wordarrange', 'wordarrange@gmail.com', 'wordarrange', NULL),
(6533, 'gradualbite', 'gradualbite@outlook.com', 'gradualbite', NULL),
(6534, 'lackcontempt', 'lackcontempt@gmail.com', 'lackcontempt', NULL),
(6535, 'lackcirculation', 'lackcirculation@gmail.com', 'lackcirculation', NULL),
(6536, 'accuratefish', 'accuratefish@yahoomail.com', 'accuratefish', NULL),
(6537, 'mainstreamsink', 'mainstreamsink@outlook.com', 'mainstreamsink', NULL),
(6538, 'monkgreeting', 'monkgreeting@gmail.com', 'monkgreeting', NULL),
(6539, 'corpsepossession', 'corpsepossession@gmail.com', 'corpsepossession', NULL),
(6540, 'matchfile', 'matchfile@gmail.com', 'matchfile', NULL),
(6541, 'villageabsence', 'villageabsence@yahoomail.com', 'villageabsence', NULL),
(6542, 'sparetwitch', 'sparetwitch@yahoomail.com', 'sparetwitch', NULL),
(6543, 'umbrelladrum', 'umbrelladrum@yahoomail.com', 'umbrelladrum', NULL),
(6544, 'matchcontempt', 'matchcontempt@outlook.com', 'matchcontempt', NULL),
(6545, 'illusionnursery', 'illusionnursery@gmail.com', 'illusionnursery', NULL),
(6546, 'dictionaryfailure', 'dictionaryfailure@yahoomail.com', 'dictionaryfailure', NULL),
(6547, 'absencearrange', 'absencearrange@yahoomail.com', 'absencearrange', NULL),
(6548, 'servefeedback', 'servefeedback@yahoomail.com', 'servefeedback', NULL),
(6549, 'expectationaware', 'expectationaware@outlook.com', 'expectationaware', NULL),
(6550, 'bragwater', 'bragwater@yahoomail.com', 'bragwater', NULL),
(6551, 'infectgradual', 'infectgradual@gmail.com', 'infectgradual', NULL),
(6552, 'sinkbomber', 'sinkbomber@gmail.com', 'sinkbomber', NULL),
(6553, 'freedomdoubt', 'freedomdoubt@gmail.com', 'freedomdoubt', NULL),
(6554, 'productionvelvet', 'productionvelvet@yahoomail.com', 'productionvelvet', NULL),
(6555, 'interestwater', 'interestwater@yahoomail.com', 'interestwater', NULL),
(6556, 'dutydrown', 'dutydrown@outlook.com', 'dutydrown', NULL),
(6557, 'locatedescent', 'locatedescent@yahoomail.com', 'locatedescent', NULL),
(6558, 'southarrange', 'southarrange@gmail.com', 'southarrange', NULL),
(6559, 'arrangelace', 'arrangelace@gmail.com', 'arrangelace', NULL),
(6560, 'flatdismissal', 'flatdismissal@yahoomail.com', 'flatdismissal', NULL),
(6561, 'spontaneoussequence', 'spontaneoussequence@outlook.com', 'spontaneoussequence', NULL),
(6562, 'prayercrackpot', 'prayercrackpot@outlook.com', 'prayercrackpot', NULL),
(6563, 'fitnessmainstream', 'fitnessmainstream@outlook.com', 'fitnessmainstream', NULL),
(6564, 'resistaccompany', 'resistaccompany@outlook.com', 'resistaccompany', NULL),
(6565, 'arrangementage', 'arrangementage@yahoomail.com', 'arrangementage', NULL),
(6566, 'justifygraphic', 'justifygraphic@outlook.com', 'justifygraphic', NULL),
(6567, 'elegantcredit', 'elegantcredit@yahoomail.com', 'elegantcredit', NULL),
(6568, 'accuratelight', 'accuratelight@gmail.com', 'accuratelight', NULL),
(6569, 'preachblade', 'preachblade@yahoomail.com', 'preachblade', NULL),
(6570, 'arenainterface', 'arenainterface@gmail.com', 'arenainterface', NULL),
(6571, 'digitalreview', 'digitalreview@yahoomail.com', 'digitalreview', NULL),
(6572, 'familybread', 'familybread@gmail.com', 'familybread', NULL),
(6573, 'cliqueestablish', 'cliqueestablish@outlook.com', 'cliqueestablish', NULL),
(6574, 'tiptoeresist', 'tiptoeresist@gmail.com', 'tiptoeresist', NULL),
(6575, 'freedomuncertainty', 'freedomuncertainty@gmail.com', 'freedomuncertainty', NULL),
(6576, 'discussclearance', 'discussclearance@gmail.com', 'discussclearance', NULL),
(6577, 'sniffclearance', 'sniffclearance@outlook.com', 'sniffclearance', NULL),
(6578, 'opposedtwitch', 'opposedtwitch@gmail.com', 'opposedtwitch', NULL),
(6579, 'eraskip', 'eraskip@gmail.com', 'eraskip', NULL),
(6580, 'fistimage', 'fistimage@yahoomail.com', 'fistimage', NULL),
(6581, 'familyhurt', 'familyhurt@gmail.com', 'familyhurt', NULL),
(6582, 'taxireservoir', 'taxireservoir@yahoomail.com', 'taxireservoir', NULL),
(6583, 'transmissionskip', 'transmissionskip@gmail.com', 'transmissionskip', NULL),
(6584, 'deficiencyfuss', 'deficiencyfuss@yahoomail.com', 'deficiencyfuss', NULL),
(6585, 'routeradio', 'routeradio@gmail.com', 'routeradio', NULL),
(6586, 'cityreservoir', 'cityreservoir@gmail.com', 'cityreservoir', NULL),
(6587, 'reviewfame	', 'reviewfame	@outlook.com', 'reviewfame	', NULL),
(6588, 'arrowarrangement', 'arrowarrangement@outlook.com', 'arrowarrangement', NULL),
(6589, 'screwmonk', 'screwmonk@gmail.com', 'screwmonk', NULL),
(6590, 'agendaaward', 'agendaaward@yahoomail.com', 'agendaaward', NULL),
(6591, 'taxiera', 'taxiera@yahoomail.com', 'taxiera', NULL),
(6592, 'justifycolleague', 'justifycolleague@yahoomail.com', 'justifycolleague', NULL),
(6593, 'modestcirculation', 'modestcirculation@gmail.com', 'modestcirculation', NULL),
(6594, 'shadowskate', 'shadowskate@gmail.com', 'shadowskate', NULL),
(6595, 'vaguesink', 'vaguesink@gmail.com', 'vaguesink', NULL),
(6596, 'greetingpie', 'greetingpie@gmail.com', 'greetingpie', NULL),
(6597, 'nooh', 'nooh@yahoomail.com', 'nooh', NULL),
(6598, 'panactive', 'panactive@outlook.com', 'panactive', NULL),
(6599, 'affordmodest', 'affordmodest@yahoomail.com', 'affordmodest', NULL),
(6600, 'opposedfitness', 'opposedfitness@outlook.com', 'opposedfitness', NULL),
(6601, 'feedbackprint', 'feedbackprint@outlook.com', 'feedbackprint', NULL),
(6602, 'creditfitness', 'creditfitness@gmail.com', 'creditfitness', NULL),
(6603, 'reproductionwrist', 'reproductionwrist@outlook.com', 'reproductionwrist', NULL),
(6604, 'establishfitness', 'establishfitness@outlook.com', 'establishfitness', NULL),
(6605, 'opposedwrist', 'opposedwrist@gmail.com', 'opposedwrist', NULL),
(6606, 'bragelegant', 'bragelegant@gmail.com', 'bragelegant', NULL),
(6607, 'cultureretiree', 'cultureretiree@gmail.com', 'cultureretiree', NULL),
(6608, 'representcheck', 'representcheck@yahoomail.com', 'representcheck', NULL),
(6609, 'locatefish', 'locatefish@outlook.com', 'locatefish', NULL),
(6610, 'caneequip', 'caneequip@yahoomail.com', 'caneequip', NULL),
(6611, 'stretchestablish', 'stretchestablish@yahoomail.com', 'stretchestablish', NULL),
(6612, 'depressedwater', 'depressedwater@gmail.com', 'depressedwater', NULL),
(6613, 'tuneextract', 'tuneextract@yahoomail.com', 'tuneextract', NULL),
(6614, 'arrangementmoving', 'arrangementmoving@outlook.com', 'arrangementmoving', NULL),
(6615, 'paperretiree', 'paperretiree@yahoomail.com', 'paperretiree', NULL),
(6616, 'crackpotcrackpot', 'crackpotcrackpot@yahoomail.com', 'crackpotcrackpot', NULL),
(6617, 'paperselection', 'paperselection@yahoomail.com', 'paperselection', NULL),
(6618, 'TRUEvirtue', 'TRUEvirtue@outlook.com', 'TRUEvirtue', NULL),
(6619, 'graphicunlike', 'graphicunlike@yahoomail.com', 'graphicunlike', NULL),
(6620, 'publisherstep', 'publisherstep@yahoomail.com', 'publisherstep', NULL),
(6621, 'cottagego', 'cottagego@yahoomail.com', 'cottagego', NULL),
(6622, 'lackdismissal', 'lackdismissal@yahoomail.com', 'lackdismissal', NULL),
(6623, 'teszt', 'teszt@gmail.com', '6c90aa3760658846a86a263a4e92630e', NULL);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `achievableranks`
--
ALTER TABLE `achievableranks`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `currency`
--
ALTER TABLE `currency`
  ADD UNIQUE KEY `userid` (`userid`),
  ADD KEY `userid1` (`userid`);

--
-- A tábla indexei `elo`
--
ALTER TABLE `elo`
  ADD UNIQUE KEY `userid` (`userid`),
  ADD KEY `userid2` (`userid`);

--
-- A tábla indexei `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `ranks`
--
ALTER TABLE `ranks`
  ADD UNIQUE KEY `userid` (`userid`),
  ADD KEY `rankid` (`rankid`);

--
-- A tábla indexei `userhighscore`
--
ALTER TABLE `userhighscore`
  ADD UNIQUE KEY `userid` (`userid`),
  ADD KEY `userid3` (`userid`);

--
-- A tábla indexei `useritems`
--
ALTER TABLE `useritems`
  ADD KEY `userid` (`userid`),
  ADD KEY `itemid` (`itemid`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `userName` (`userName`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `achievableranks`
--
ALTER TABLE `achievableranks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT a táblához `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6624;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `currency`
--
ALTER TABLE `currency`
  ADD CONSTRAINT `currency_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userID`);

--
-- Megkötések a táblához `elo`
--
ALTER TABLE `elo`
  ADD CONSTRAINT `elo_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userID`);

--
-- Megkötések a táblához `ranks`
--
ALTER TABLE `ranks`
  ADD CONSTRAINT `ranks_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `ranks_ibfk_2` FOREIGN KEY (`rankid`) REFERENCES `achievableranks` (`id`);

--
-- Megkötések a táblához `userhighscore`
--
ALTER TABLE `userhighscore`
  ADD CONSTRAINT `userhighscore_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userID`);

--
-- Megkötések a táblához `useritems`
--
ALTER TABLE `useritems`
  ADD CONSTRAINT `useritems_ibfk_1` FOREIGN KEY (`itemid`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `useritems_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
