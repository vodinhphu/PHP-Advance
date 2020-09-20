-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 20, 2020 at 04:39 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `fullname`) VALUES
(1, 'vodinhphu', '123456', 'vo dinh phu'),
(2, 'vuthihuyen', '123456', 'vu thi huyen');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

DROP TABLE IF EXISTS `game`;
CREATE TABLE IF NOT EXISTS `game` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `producer` varchar(255) NOT NULL,
  `quantity_available` int(11) NOT NULL,
  `details` longtext NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`product_id`, `pro_name`, `price`, `image`, `producer`, `quantity_available`, `details`) VALUES
(1, 'Pubg Mobile', 100, 'pubg.jpg', 'Tencent Game', 20, 'The official PLAYERUNKNOWN\'S BATTLEGROUNDS designed exclusively for mobile. Play free anywhere, anytime. PUBG MOBILE delivers the most intense free-to-play multiplayer action on mobile. Drop in, gear up, and compete. Survive epic 100-player classic battles, payload mode and fast-paced 4v4 team deathmatch and zombie modes. Survival is key and the last one standing wins. When duty calls, fire at will!\r\n\r\n2018 Mobile Game of the Year – Golden Joystick Award\r\nBest game, fan favorite games, most competitive games - Google Play 2018 Awards\r\n\r\n\"Absolutely remarkable\" - IGN\r\n\"It\'s awesome.\" - Pocket Gamer\r\n\"Keeps players coming back\" - Vice\r\n\r\nFREE ON MOBILE - Powered by the Unreal Engine 4. Play console quality gaming on the go. Delivers jaw-dropping HD graphics and 3D sound. Featuring customizable mobile controls, training modes, and voice chat. Experience the most smooth control and realistic ballistics, weapon behavior on mobile.\r\n\r\nMASSIVE BATTLE MAPS - From Erangel to Miramar, Vikendi to Sanhok, compete on these enormous and detailed battlegrounds varying in size, terrain, day/night cycles and dynamic weather – from urban city spaces to frozen tundra, to dense jungles, master each battleground\'s secrets to create your own strategic approach to win.\r\n\r\nDEPTH AND VARIETY – From the 100-player classic mode, the exhilarating payload mode to the lightning-fast Arcade and 4v4 Team Deathmatch modes, as well as the intense Zombie modes. There is something for everyone! There is something for everyone. Play Solo, Duo, and in 4-player Squads. Fire your weapon to your heart\'s content! Be a lone wolf soldier or play with a Clan and answer the duty calls when help is needed! Offers FPS (First-Person Shooter) and TPS (Third-Person Shooter) play, lots of vehicles for all the different terrains in the game and an arsenal of realistic weapons. Find your perfect ride and pieces to cruise towards the final circle!\r\n\r\nALWAYS GROWING - Daily events & challenges, and monthly updates delivering new gameplay features and modes that keep PUBG MOBILE always growing and expanding. Our powerful and serious anti-cheating mechanisms ensure a fair and balanced gaming environment where everyone plays by the rules.\r\n\r\n* Requires a stable internet connection.\r\n* PUBG MOBILE recommended system requirements: Android 5.1.1 or above and at least 2 GB memory. For other devices can try out PUBG MOBILE LITE'),
(2, 'Asphalt 9', 50, 'asphalt9.jpg', 'Gameloft SE', 10, 'Get in gear and take on the world’s best, most fearless street racer pros to become the next Asphalt Legend – from the creators of Asphalt 8: Airborne.\r\n\r\nAsphalt 9: Legends features a top roster of real hypercars for you to drive that is unlike that found in any other game, from renowned car manufacturers like Ferrari, Porsche, Lamborghini and W Motors. You’re free to pick the dream car you need and race across spectacular locations against rival speed machines around the world. Hit the fast track and leave your limits in the dust to become a Legend of the Track!\r\n\r\nA CONSOLE EXPERIENCE IN THE PALMS OF YOUR HANDS\r\nImmerse yourself in one of the most hyper-realistic arcade racing games, with meticulously detailed real cars, cool HDR techniques, and stunning visual and particle effects that turn every race into a real blockbuster race movie.\r\n\r\nTHE MOST PRESTIGIOUS MOTOR CARS\r\nCollect over 50 of the world’s best speed machines. Each cool vehicle has been carefully selected based on its aesthetics and the top driving performance you need in the most desirable line-up of any Asphalt games to date.\r\n\r\nCUSTOMISATION AT YOUR FINGERTIPS\r\nUse the new car editor to define the exact color and material of your car. You can also pick the color of the Rims, and more, to look your best on the track.\r\n\r\nA BLAST OF ARCADE FUN\r\nCharge your nitro to unleash the ultimate Nitro Pulse for the ultimate boost of speed you need to make your car break the sound barrier! Double-tap the brake to do a 360° at any time to take down your multiplayer or AI opponents in style and watch the burnout behind you!\r\n\r\nBECOME A STREET LEGEND\r\nStart your street journey in Career mode by completing over 60 seasons and 800 events. And become a real Asphalt racer legend by racing against up to 7 rival players from all over the world in the online multiplayer mode.\r\n\r\nULTIMATE RACING CONTROL\r\nMaster the innovative TouchDrive, a new driving control scheme that streamlines car steering to free your mind to focus on the arcade fun and fast speed.\r\n\r\nSTRENGTH IN NUMBERS\r\nFor the first time in any of the Asphalt games, you can create your own online community of like-minded racer friends with the Club feature. Collaborate with your fellow speed freaks and motor heads to race your best and unlock the best Milestone rewards as you drive up the ranks of the multiplayer Club leaderboard.\r\n\r\nThe perfect game for fans of free games, arcade racing, driving fast, drift racing, weaving through traffic, and nitro-charged, power motor competition!'),
(3, 'Far Cry New Dawn', 200, 'farcrynewdawn.jpg', 'Ubisoft', 15, 'Dive into a transformed vibrant post-apocalyptic Hope County, Montana, 17 years after a global nuclear catastrophe.\r\nJoin fellow survivors and lead the fight against the dangerous new threat the Highwaymen, and their ruthless leaders The Twins, as they seek to take over the last remaining resources.\r\n\r\n\r\nFIGHT FOR SURVIVAL IN A POST-APOCALYPTIC WORLD\r\n• Take up arms on your own or with a friend in two player co-op in an unpredictable and transformed world\r\n\r\n\r\nCOLLIDE AGAINST TWO ALL NEW VILLAINS\r\n• Recruit an eclectic cast of Guns and Fangs for Hire and form alliances to fight by your side against the Highwaymen\'s unruly leaders The Twins'),
(4, 'Metro Exodus', 250, 'metroexodus.jpg', 'Deep Silver', 30, 'The year is 2036.\r\n\r\nA quarter-century after nuclear war devastated the earth, a few thousand survivors still cling to existence beneath the ruins of Moscow, in the tunnels of the Metro.\r\n\r\nThey have struggled against the poisoned elements, fought mutated beasts and paranormal horrors, and suffered the flames of civil war.\r\n\r\nBut now, as Artyom, you must flee the Metro and lead a band of Spartan Rangers on an incredible, continent-spanning journey across post-apocalyptic Russia in search of a new life in the East.\r\n\r\nMetro Exodus is an epic, story-driven first person shooter from 4A Games that blends deadly combat and stealth with exploration and survival horror in one of the most immersive game worlds ever created.\r\n\r\nExplore the Russian wilderness across vast, non-linear levels and follow a thrilling story-line that spans an entire year through spring, summer and autumn to the depths of nuclear winter.\r\n\r\nInspired by the novels of Dmitry Glukhovsky, Metro Exodus continues Artyom’s story in the greatest Metro adventure yet.\r\nFeatures\r\nEmbark on an incredible journey - board the Aurora, a heavily modified steam locomotive, and join a handful of survivors as they search for a new life in the East\r\nExperience Sandbox Survival - a gripping story links together classic Metro gameplay with new huge, non-linear levels\r\nA beautiful, hostile world - discover the post-apocalyptic Russian wilderness, brought to life with stunning day / night cycles and dynamic weather\r\nDeadly combat and stealth - scavenge and craft in the field to customize your arsenal of hand-made weaponry, and engage human and mutant foes in thrilling tactical combat\r\nYour choices determine your comrades’ fate - not all your companions will survive the journey; your decisions have consequence in a gripping storyline that offers massive re-playability\r\nThe ultimate in atmosphere and immersion - a flickering candle in the darkness; a ragged gasp as your gasmask frosts over; the howl of a mutant on the night wind - Metro will immerse and terrify you like no other game…'),
(5, 'Total War THREE KINGDOMS', 300, 'totalwarthreekingdoms.jpg', 'SEGA', 30, 'Total War: THREE KINGDOMS is the first in the multi award-winning strategy series to recreate epic conflict across ancient China. Combining a gripping turn-based campaign game of empire-building, statecraft and conquest with stunning real-time battles, Total War: THREE KINGDOMS redefines the series in an age of heroes and legends.\r\n\r\n\r\n\r\nChina in 190CE\r\n\r\nWelcome to a new era of legendary conquest.\r\n\r\nThis beautiful but fractured land calls out for a new emperor and a new way of life. Unite China under your rule, forge the next great dynasty, and build a legacy that will last through the ages.\r\nChoose from a cast of 12 legendary Warlords and conquer the realm. Recruit heroic characters to aide your cause and dominate your enemies on military, technological, political, and economic fronts.\r\n\r\nWill you build powerful friendships, form brotherly alliances, and earn the respect of your many foes? Or would you rather commit acts of treachery, inflict heart-wrenching betrayals, and become a master of grand political intrigue?\r\n\r\nYour legend is yet to be written, but one thing is certain: glorious conquest awaits.');

-- --------------------------------------------------------

--
-- Table structure for table `producer`
--

DROP TABLE IF EXISTS `producer`;
CREATE TABLE IF NOT EXISTS `producer` (
  `producer_id` int(11) NOT NULL AUTO_INCREMENT,
  `producer_name` varchar(255) NOT NULL,
  PRIMARY KEY (`producer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `producer`
--

INSERT INTO `producer` (`producer_id`, `producer_name`) VALUES
(1, 'Tencent Game'),
(2, 'Gameloft SE'),
(3, 'Ubisoft'),
(4, 'Deep Silver'),
(5, 'SEGA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
