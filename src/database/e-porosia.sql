-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 09:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-porosia`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `ContactNumber` text NOT NULL,
  `Message` text NOT NULL,
  `Address` text NOT NULL,
  `Contact` text NOT NULL,
  `CompEmail` text NOT NULL,
  `Website` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `Name`, `Email`, `ContactNumber`, `Message`, `Address`, `Contact`, `CompEmail`, `Website`) VALUES
(13, 'driton ramshaj', 'driton.ramshaj@gmail.com', '+38349826096', 'daasxsaxas', '', 'Contact', 'CompEmail', 'Website'),
(18, 'test', 'test@test.com', '3834911111111', 'testtetstetstettetsdkfksgyaf', '', 'Contact', 'CompEmail', 'Website'),
(34, 'flamur', 'flamur@gmail.com', '38349663060', 'vetem per testim', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_content`
--

CREATE TABLE `product_content` (
  `id` int(11) NOT NULL,
  `img_file` varchar(2000) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_rating` varchar(255) NOT NULL,
  `sale` varchar(11) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_description` varchar(500) NOT NULL,
  `product_shipping_fee` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_content`
--

INSERT INTO `product_content` (`id`, `img_file`, `product_title`, `product_rating`, `sale`, `product_price`, `product_description`, `product_shipping_fee`, `category`) VALUES
(10, 'https://th.bing.com/th/id/R.978f53708317208cd3b0846d1b526276?rik=%2bB7egvU3ST5euw&pid=ImgRaw&r=0', 'Pasqyre LED', '5', '', '80', 'Nje pasqyre banjoje LED ofron reflektim te ndriquar per shikueshmeri te shtuar dhe estetik moderne.', '5', 'banjo'),
(12, 'https://th.bing.com/th/id/OIP.d7KVCvNgl0Z_YMHx18VOpgHaDf?pid=ImgDet&rs=1', 'Divan ', '5', '200', '150', 'Nje divan me pelhure te bardhe ofron nje opsion ndenjese elegant dhe te gjithanshem qe shton nje prekje elegance dhe sofistikimi ne qdo hapesire jetese', '50', 'dhome ditore , sale'),
(14, 'https://i5.walmartimages.com/asr/8814e7ce-5853-413f-810a-6f6741f504e0.f9702c5f3d6382e52c8c6a9111072f65.jpeg', 'Karrige pune', '5', '', '99', 'Perqafoni komoditetin e pakrahasueshem dhe stilin e pasur me karrigen tone ergonomike te tavolines prej lekure te larte, duke e ngritur hapesiren tuaj te punes me nje luks te rafinuar.', '10', 'pune'),
(15, 'https://hgtvhome.sndimg.com/content/dam/images/hgtv/fullset/2018/1/5/0/CI_Costa-Farms_Spathiphyllum-Sensation.jpg.rend.hgtvcom.1280.1280.suffix/1515164846613.jpeg', 'plant', '5', '', '39.99', 'Nje bime vazo shtepie sjell bukurine e natyres ne ambiente te mbyllura, duke i dhene nje prekje gjelberimi dhe freski mjedisit tuaj te jeteses.', '5', 'dekor'),
(16, 'https://www.magnonindia.com/wp-content/uploads/2018/06/kidsbedroom_V1.jpg', 'Shtrat per dy persona', '5', '', '400', 'Nje krevat i bardhe per dy persona kombinon komoditetin dhe dizajnin modern, duke ofruar nje hapesire gjumi komode dhe elegante per qiftet', '50', 'gjumi'),
(17, 'https://i.pinimg.com/originals/fb/41/be/fb41be343933b8df155e02e76c8b911a.jpg', 'Kuzhine me dru', '5', '', '3200', 'Dollapet e kuzhines prej druri ofrojne elegance te perjetshme dhe ngrohtesi natyrale, duke rritur estetiken dhe funksionalitetin e qdo hapesire kuzhine.', '200', 'kuzhine'),
(18, 'https://store.reccagniangelo.com/cms-contents/uploads/classic-bedside-table-lamp-old-white-lampshade-fabric-p-9630-p.jpg', 'llamb per dhome gjumi', '', '', '20', 'Nje llambe e holle dhe minimaliste e dhomes se gjumit me shkelqim te rregullueshem dhe nje baze te ndjeshme ndaj prekjes.', '4', 'gjumi'),
(19, 'https://bum.al/wp-content/uploads/2020/01/67198643_10157438489229350_1593437002869506048_n.jpg', 'Varese rrobash', '', '20', '15', 'Organizoni me efikasitet veshjet tuaja me kete varese rrobash te qendrueshme dhe qe kursen hapesire.', '7', 'gjumi , sale'),
(22, 'https://th.bing.com/th/id/OIP.DQAN0JQYCwPa03VqnZuf3QAAAA?pid=ImgDet&rs=1', 'Divan ne form L', '', '', '499', 'KÃ«naqni komoditetin luksoz me divanin tonÃ« nÃ« formÃ« L-je nÃ« kafe tÃ« errÃ«t, i projektuar nÃ« mÃ«nyrÃ« perfekte pÃ«r tÃ« pÃ«rmirÃ«suar hapÃ«sirÃ«n tuaj tÃ« jetesÃ«s.', '20', 'dhome ditore'),
(23, 'https://i5.walmartimages.com/asr/5fe36a2a-c255-41fa-b0af-39c0ab1ac78b_1.9d9f76aa56ad606a72a584cf422a9766.jpeg', 'Tavolin druri', '', '', '79', 'Shtoni nje prekje hijeshie moderne ne shtepine tuaj me tavolinen tone prej druri me kembe te hijshme prej hekuri per nje perzierje perfekte elegance dhe qendrueshmerie.', '10', 'dhome ditore'),
(24, 'https://ae01.alicdn.com/kf/HTB1SV7baiDxK1RjSsphq6zHrpXa1/Floor-Standing-Coat-Racks-Bedroom-Clothes-Hanger-Living-Room-Clothing-Hats-Bags-Hanging-Storage-Shelf-Rack.jpg', 'Vjerrse rrobash', '', '35', '26.25', 'Qendroni te organizuar ne stil me vjerrsen ton elegante, nje zgjidhje funksionale dhe dekorative per ti mbajtur veshjet tuaja te varura mire dhe lehtesisht te arritshme.', '5', 'dhome ditore , sale'),
(25, 'https://i5.walmartimages.com/asr/72420f9c-1a7c-4adf-a3f8-83924c6bf233.2b09b6ff83a775501fbb4af802219723.jpeg', 'Llamp per dhome gjumi elegante', '', '', '25', 'NdriÃ§oni dhomen tuaj te gjumit me ambient te ngrohte dhe stil bashkekohor permes llambes sone elegante te dhomes se gjumit.', '5', 'gjumi'),
(26, 'https://cdn.mos.cms.futurecdn.net/hWptihJgh7dEy4iCEBu96Q.jpg', 'Tavolin dhe Karrige per pune', '', '450', '337.5', 'Permiresoni produktivitetin dhe estetiken e hapesires suaj te punes me tavolinen tone te punes dhe karriges te dizajnuara ne menyre ergonomike ne forme L, duke ofruar hapesire te bollshme dhe rehati per sesione pune pa probleme', '30', 'pune , sale'),
(27, 'https://th.bing.com/th/id/R.e1d3e63423ece0275e32fe90408bd5e2?rik=Qes1B1Cczd4BUg&pid=ImgRaw&r=0', 'Karrike per zyre ', '', '', '180', 'Perjetoni rehati dhe levizshmeri optimale ne zyre me karrigen tone ergonomike prej pelhure me rrota , perfekte per ore te gjata pune.', '10', 'pune'),
(28, 'https://genmice.com/design-ideas/Most-Stunning-Bathroom-Designs-That-Are-Really-Amazing/858.jpeg', 'Set dollape per banjo', '', '', '199', 'Rregulloni hapesiren e  banjes tuaj me grupin tone te gjithanshem dhe elegant te dollapeve, duke ofruar hapesire dhe organizim te bollshem per te gjitha gjerat tuaja thelbesore', '20', 'banjo'),
(29, 'https://th.bing.com/th/id/OIP.9a-wAYvp0fiHSUEEsjubzQHaHa?pid=ImgDet&rs=1', 'Set piktur ', '', '', '39', 'Shnderroni hapesiren tuaj ne nje galeri arti me grupin tone te shkelqyer te pikturave ne mur, duke shtuar nje sperkatje ngjyrash dhe kreativiteti ne ambientet tuaja te brendshme.', '5', 'dekor'),
(30, 'https://th.bing.com/th/id/OIP.F06HuMe5TTL0JH6n6bxIYgAAAA?pid=ImgDet&rs=1', 'Set tavolin dhe karrike ', '', '', '130', 'Maksimizoni hapesiren tuaj te ushqimit me grupin tone kompakt te tavolines dhe karrigeve te kuzhines qe kursen hapesire, duke ofruar shkathtesi funksionale dhe stil modern per ushqime te kendshme', '20', 'kuzhine');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `role`) VALUES
(1, 'Flamur ', 'Shala', 'FlamurShala@gmail.comdd', 'FlamurShala', 1),
(13, 'test', 'test', 'test@test.test', 'testtesttest', 2),
(17, 'admin', 'admin', 'admin@admin.com', 'admin', 2),
(18, 'user', 'user', 'user@user.com', 'user', 1),
(20, 'admin', 'admin', 'admin@add.com', 'adminadmin', 1),
(21, 'test', 'test', 'testing@test.test', 'test', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_content`
--
ALTER TABLE `product_content`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `product_content`
--
ALTER TABLE `product_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
