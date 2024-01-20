-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 20, 2024 at 02:00 AM
-- Server version: 10.6.16-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u444096365_suppress_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `beverages`
--

CREATE TABLE `beverages` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `details` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beverages`
--

INSERT INTO `beverages` (`id`, `name`, `price`, `details`, `image`) VALUES
(1, 'MILO', 16000, '500g', 'milo.png'),
(2, 'OVALTINE', 70000, '820g', 'ovaltine.png'),
(3, 'HOT COCOA', 55000, '500g', 'hot_cocoa.png'),
(4, 'VICO MALT', 40000, '200g', 'vico.png'),
(5, 'INDOMILK BANANA', 5000, '180ml', 'indomilk.png'),
(6, 'COCA – COLA', 13000, '1.5L', 'coca_cola.png'),
(7, 'FANTA', 13000, '1.5L', 'fanta.png'),
(8, 'SPRITE', 13000, '1.5L', 'sprite.png'),
(9, 'YAKULT', 12000, '350ml', 'yakult.png'),
(10, 'HYDRO COCO', 6000, '250ml', 'hydrococo.png'),
(11, 'FLORIDINA', 3000, '350ml', 'floridina.png'),
(12, 'A&W ROOTBEER', 8000, '250ml', 'rootbeer.png'),
(13, 'TEH BOTOL', 8500, '1L', 'teh_botol.png');

-- --------------------------------------------------------

--
-- Table structure for table `cooking_essentials`
--

CREATE TABLE `cooking_essentials` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `details` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cooking_essentials`
--

INSERT INTO `cooking_essentials` (`id`, `name`, `price`, `details`, `image`) VALUES
(1, 'BLACK PEPPER', 20000, '50g', 'black_pepper.png'),
(2, 'CUMIN', 16000, '50g', 'cumin.png'),
(3, 'CURRY', 20000, '50g', 'curry.png'),
(4, 'GALANGAL POWDER', 4000, '22g', 'galangel_powder.png'),
(5, 'GINGER POWDER', 8000, '500g', 'ginger_powder.png'),
(6, 'ITALIAN SEASONING', 25000, '50g', 'italian.png'),
(7, 'LEMON PEPPER', 50000, '75g', 'lemon_pepper.png'),
(8, 'OREGANO', 13000, '50g', 'oregano.png'),
(9, 'LEMONGRASS POWDER', 15000, '50g', 'lemongrass_powder.png'),
(10, 'SHALLOT POWDER', 15000, '50g', 'red_onion_powder.png'),
(11, 'TURMERIC POWDER', 10000, '40g', 'turmeric_powder.png'),
(12, 'PAPRIKA POWDER', 25000, '50g', 'paprika.png');

-- --------------------------------------------------------

--
-- Table structure for table `fruit`
--

CREATE TABLE `fruit` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `details` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fruit`
--

INSERT INTO `fruit` (`id`, `name`, `price`, `details`, `image`) VALUES
(1, 'BANANA', 10000, '500g', 'banana.png'),
(2, 'GREEN APPLE', 10000, '500g', 'green_apple.png'),
(3, 'ORANGE', 20000, '500g', 'orange.png'),
(4, 'POMEGRANATE', 15000, '500g', 'pomegranate.png'),
(5, 'GUAVA', 8000, '500g', 'guava.png'),
(6, 'PEAR', 15000, '500g', 'pear.png'),
(7, 'MANDARIN', 30000, '500g', 'mandarin.png'),
(8, 'RED GRAPES', 30000, '500g', 'red_grape.png'),
(9, 'WHITE GRAPES', 40000, '500g', 'white_grape.png'),
(10, 'FUJI APPLE', 18000, '500g', 'fuji_apple.png'),
(11, 'STRAWBERRY', 25000, '500g', 'strawberry.png'),
(12, 'GREEN KIWI', 20000, '500g', 'kiwi.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `admin_name`, `admin_email`, `password`) VALUES
(1, 'angga', 'refanggalintar@gmail.com', 'angga'),
(2, 'Angga', 'angga@gmail.com', '$2y$10$nU9ljBWVFmvb7kYWaysg8e52KD39K8FhmTQLgnDdj6VaB5Do5GSMO'),
(3, 'Refa', 'refa@gmail.com', '$2y$10$R89ch7ecBiK7xIULN3Ja/.B5T0twYMmLfkoNTBZDp3tCXrTHaeID.'),
(4, 'amiralutfia', 'amiraramadhani@gmail.com', '$2y$10$0gChD5B2kNPUQsjCAU2ukurYHmHnTietrTdQdhzXhXFA/QYj91EKW'),
(5, 'masboy', 'rendyrendy3321@gmail.com', '$2y$10$tt.sCCLyGZDa8fPaciJn0O/8W.tr/D.SXH49W/JWboPisX9uVzDZW'),
(6, 'alief', 'Aliefsd84@gmail.com', '$2y$10$9xd/YVDqCKEka7RpgvnLHOCpuda4bczCNnZM6jkVNTa5xwexK8y02'),
(7, 'AnggaGud', 'anggagud@gmail.com', '$2y$10$ck2rsdim/a7gyr7gbacW0.RT4K3rFtJUSHXaSxxJsj0ayCqNNzWOK'),
(8, 'Percobaan', 'percobaan@gmail.com', '$2y$10$QcxaPPrSo4XCPaTpP0UDfe7cdPGLlI0ioKUBsfzqmAK3xs9RZZDym');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `PostalCode` char(5) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`CustomerID`, `CustomerName`, `Address`, `City`, `PostalCode`, `Country`, `Email`, `password`) VALUES
(1, 'Refangga Lintar Prayoga', 'Jl. Karang Rejo Gang Baru 6B', 'Surabaya', '60243', 'Indonesia', 'refanggalintar@gmail.com', 'angga'),
(2, 'Angga50', 'Coba', 'Surabaya', '60243', 'Indonesia', 'angga50@gmail.com', 'angga'),
(3, 'Angga51@gmail.com', 'Coba', 'Surabaya', '60243', 'Indonesia', 'angga51@gmail.com', 'angga'),
(4, 'angga60@gmail.com', 'Coba', 'Surabaya', '60243', 'Indonesia', 'angga60@gmail.com', 'angga'),
(5, 'angga70', 'Coba', 'Surabaya', '60243', 'Indonesia', 'angga70@gmail.com', 'angga'),
(6, 'angga10', 'Coba', 'Surabaya', '60243', 'Indonesia', 'angga10@gmail.com', 'angga'),
(7, 'angga11', 'Coba', 'Surabaya', '60243', 'Indonesia', 'angga11@gmail.com', 'angga'),
(8, 'angga12@gmail.com', 'Coba', 'Surabaya', '60243', 'Indonesia', 'angga12@gmail.com', 'angga'),
(9, 'angga13', 'Coba', 'Surabaya', '60243', 'Indonesia', 'angga13@gmail.com', '$2y$10$eP9zpf.OipscMvVXNT4pNeFFTj3Wgp0yTVcsOtTWNS7z5asaa7yIy'),
(10, 'Julie Roux', '34840 Lilou de Caumartin', 'Léafurt', '41708', 'quantify', 'jules_denis50@twinbash.co', '$2y$10$DnlSgdRQHo76JVpd9a2gBe5pBA34RZGaK1sWqjs8ibePINfP4cD/S'),
(11, 'Julie Roux', '34840 Lilou de Caumartin', 'Léafurt', '41708', 'quantify', 'jules_denis50@twinbash.co', '$2y$10$W7KzNW7aYrCj/oEUwchZfuZlA4prwU7Pwno4YBGbivv/ITmFOqzKe'),
(12, 'Julie Roux', '34840 Lilou de Caumartin', 'Léafurt', '41708', 'quantify', 'jules_denis50@twinbash.co', '$2y$10$ED0HfjttMud1i7WXRtuyoe65Qrp1fyT8LXO51zNn0NW0pRr1qKcIG'),
(13, 'Tanner Hauck', '387 Myah Square', 'Bruceshire', '04970', 'Direct', 'taylor.green@twinbash.co', '$2y$10$SwcnichRy5ZU6RFUXg2kpugBrKEcCk.n7daQw8cWDZTkCm4WJaRD2'),
(14, 'Tanner Hauck', '387 Myah Square', 'Bruceshire', '04970', 'Direct', 'taylor.green@twinbash.co', '$2y$10$a6vmn58UxgBwHGJ8kJdNyO9AgDlVlAm1QtnLT9DD4bbwsk2lsHVkq'),
(15, 'Tanner Hauck', '387 Myah Square', 'Bruceshire', '04970', 'Direct', 'taylor.green@twinbash.co', '$2y$10$NESMXVFc.uatkdEnryP4TuKJIjeKFA.uVdsheJy1hxf423roECMOu'),
(16, 'Tim Meijer', '1210 Britt park', 'Petersdorp', '6067', 'GB', 'fleur57@twinbash.co', '$2y$10$B.nwEye2S4bRr2HIuznPcOaxo4UdpFhW5VMxoHfD7YdlEeaCKxbE2'),
(17, 'Tim Meijer', '1210 Britt park', 'Petersdorp', '6067', 'GB', 'fleur57@twinbash.co', '$2y$10$9y7hziPAe1AfQCvdJ4/VnuhcYCrRyEz03AUonEzVNi0KnrlZMWnRC'),
(18, 'Tim Meijer', '1210 Britt park', 'Petersdorp', '6067', 'GB', 'fleur57@twinbash.co', '$2y$10$RWer5kU3eVPxZ5SaC9shwuph4tL7e01SR54bv3tPDwXJyRIthBADC'),
(19, 'Shanna Lind', '7703 Rowena Pass', 'Shayleemouth', '83941', 'Run', 'mekhi_skiles@jephy-webmail.com', '$2y$10$3fiCCY2gaSosUnGMraRIwurMK/WWxUKSpK5IwfZ/Clx0rMePipxte'),
(20, 'Shanna Lind', '7703 Rowena Pass', 'Shayleemouth', '83941', 'Run', 'mekhi_skiles@jephy-webmail.com', '$2y$10$P4YXgKwmCv/Wex/d6KanJ.YAesbWW9mdpdHz88FyKW6PpQDrapRNu'),
(21, 'Shanna Lind', '7703 Rowena Pass', 'Shayleemouth', '83941', 'Run', 'mekhi_skiles@jephy-webmail.com', '$2y$10$NHh7TPC6t1GJRb8SsV5OVOEgNJZ4qiF.bDCYk7wDa6sLBpzoKLil2'),
(22, 'Rachelle Skiles', '67168 Turner Unions', 'South Dulce', '45180', 'Synchronised', 'mireya.lueilwitz@jephy-webmail.com', '$2y$10$iXkubaNESHlUv0wM6COGzeB6Kop2it4v6u4VJBBJD5TY70UfqdOLi'),
(23, 'Rachelle Skiles', '67168 Turner Unions', 'South Dulce', '45180', 'Synchronised', 'mireya.lueilwitz@jephy-webmail.com', '$2y$10$EPr2OjcYR9gIyEd3jzluzOuSqJdYEAsbtDoH4o.bdWRmdzHHxWjZG'),
(24, 'Rachelle Skiles', '67168 Turner Unions', 'South Dulce', '45180', 'Synchronised', 'mireya.lueilwitz@jephy-webmail.com', '$2y$10$bfVtL565ArN1/guv/IkhBeH23IrzosjGAiGS21A5m7IFLmWPVc1.i'),
(25, 'Emerald Brakus', '86722 Kendall Walks', 'Friesenville', '09961', 'paradigm', 'peter_herman54@usaaxa.com', '$2y$10$L25OrJzsl5VrKvWkiaGa9.b3l7EyyD16G6COQoZM6DLbACiT3H9bi'),
(26, 'Emerald Brakus', '86722 Kendall Walks', 'Friesenville', '09961', 'paradigm', 'peter_herman54@usaaxa.com', '$2y$10$oe0/B1Bjg79Fj5G7rQpzDu2snjJLqYyjTN8gQx4v8cFeScWCbehZG'),
(27, 'Emerald Brakus', '86722 Kendall Walks', 'Friesenville', '09961', 'paradigm', 'peter_herman54@usaaxa.com', '$2y$10$MM6h8xJhKLV08M80fxn2i.7MxPnNwuHcY98Irqkfsq1qVUC5TMmEC'),
(28, 'Bud Fay', '8491 Flatley Via', 'Romagueraport', '20028', 'Visionary', 'abigayle.bednar@usaaxa.com', '$2y$10$ZSXAkucmIY7VZjWRUEJmEuH1nfds61Ji262w/iA65/OiaaxSlOt4G'),
(29, 'Bud Fay', '8491 Flatley Via', 'Romagueraport', '20028', 'Visionary', 'abigayle.bednar@usaaxa.com', '$2y$10$jgtJrXJSeMSJlyJQVr2Ane0FwjsHanR4U6T3AqWpdKSYErnlbf7CG'),
(30, 'Bud Fay', '8491 Flatley Via', 'Romagueraport', '20028', 'Visionary', 'abigayle.bednar@usaaxa.com', '$2y$10$fzHHcTe9wSUWDQexjFKKw.Aenfd3j7yw1fq/QBKnB83K1Qz28SX3u'),
(31, 'Rosalinda Johnson', '29608 Rosella Plain', 'Norbertstad', '88632', 'collaborative', 'gennaro93@usaaxa.com', '$2y$10$9wmTFSVeZsR2wshHAWhw8uAmtX3GAFuY74/7sXNmo5PENB1K4UIJS'),
(32, 'Rosalinda Johnson', '29608 Rosella Plain', 'Norbertstad', '88632', 'collaborative', 'gennaro93@usaaxa.com', '$2y$10$JGJbpzFyPNE6uqkgEv7SgOvlFx20Tv0yVz8sRiQBiHybvj9oDI0zm'),
(33, 'Rosalinda Johnson', '29608 Rosella Plain', 'Norbertstad', '88632', 'collaborative', 'gennaro93@usaaxa.com', '$2y$10$hFVhgvx8xsGQ419a7g4Zwe.Zkf404THvJSd4qjcTnEUalJdlLOs8y'),
(34, 'amiralutfia', 'Jalan MT Haryono no 5', 'Ngawi', '62435', 'Indonesia', 'amiraramadhani@gmail.com', '$2y$10$5fOLTgQsI1dU6HxVcFoU9.GfnQqLHWvrVWh.Md5C8hN1jwz8orYwG'),
(35, 'Alief Sukma Dewanta', 'Jl. Gubeng kertajaya VII E No.46', 'Surabaya', '60286', 'Indonesia', 'Aliefsd84@gmail.com', '$2y$10$jU4Xp0/fGX7jqBGfwi3HX.4VXGHBngrPcHaQTGQKTqa7NXJfGg.kS'),
(36, 'Rusty Bins', '225 Crist Tunnel', 'South Judson', '88279', 'pixel', 'preston67@goodpostman.com', '$2y$10$INQsE1529hOghevovyM8ie5LaFTl/cklFvti1y8KOckE3Vg24RcQy'),
(37, 'Rusty Bins', '225 Crist Tunnel', 'South Judson', '88279', 'pixel', 'preston67@goodpostman.com', '$2y$10$SI7QaoPXEU0zqX/Dh03H5OUxsVTd2UhXNQftltOvOgYZKvbaqg8Ra'),
(38, 'Rusty Bins', '225 Crist Tunnel', 'South Judson', '88279', 'pixel', 'preston67@goodpostman.com', '$2y$10$EmJ/FZR3R/vM.zTrYq44oOVR0PFts57oAul/F.GD8bSZ/vIDylzTm'),
(39, 'Norma Morar', '886 Hermina Plains', 'South Hayleeside', 'X0J 2', 'Home Loan Account', 'georgette_bernhard15@ifastnet1.com', '$2y$10$p9C7HO.dNQyThRr9oQFogeLy0YC.1Fi8joqsMbvLQqrftdJGHJ0me'),
(40, 'Norma Morar', '886 Hermina Plains', 'South Hayleeside', 'X0J 2', 'Home Loan Account', 'georgette_bernhard15@ifastnet1.com', '$2y$10$FrbS2xGNoX1DBiLCOVjmDO7X.jmS1Y//RhoEgzjBbK4Mgh4wfwJ4e'),
(41, 'Norma Morar', '886 Hermina Plains', 'South Hayleeside', 'X0J 2', 'Home Loan Account', 'georgette_bernhard15@ifastnet1.com', '$2y$10$XraK0qCbuBC1b4gWjSbOm..7I6ehYCdoKrtkebSDFM2H9CX8BtoRq'),
(42, 'Herbert Ritchie', '1020 Brandt Mission', 'Jakubowskiview', 'YP3 6', 'Jordanian Dinar', 'katherine68@ifastnet1.com', '$2y$10$C/LLpxNck3X1rLRa.Y6PUeg.eh8bOC0Rxr4zV3Ab5ujgn4kUWNZei'),
(43, 'Herbert Ritchie', '1020 Brandt Mission', 'Jakubowskiview', 'YP3 6', 'Jordanian Dinar', 'katherine68@ifastnet1.com', '$2y$10$MiBYlLlceijZ0GJCcVSqUuk3EdEpBQd6FettZGYdFAqvEpU7J767W'),
(44, 'Herbert Ritchie', '1020 Brandt Mission', 'Jakubowskiview', 'YP3 6', 'Jordanian Dinar', 'katherine68@ifastnet1.com', '$2y$10$iNOVGJF3xwKRrcfOjB75HeYKznONNVzGAwni7Yi5cloOS5FI2eGLi'),
(45, 'William Blick', '22458 Haley Roads', 'Geraldinetown', 'ZB45', 'hardware', 'camryn_wilkinson91@approject.net', '$2y$10$g9csMLPb4xH/wQlM6raMEuWR9ig/zKcSNUY7yRRfBM8cRRcCo6tFm'),
(46, 'William Blick', '22458 Haley Roads', 'Geraldinetown', 'ZB45', 'hardware', 'camryn_wilkinson91@approject.net', '$2y$10$Q97bc.ImDD.4LRFBuedUsuKI8uVOEWHTvCMtxx9oL3Zt1tFXt6s2y'),
(47, 'William Blick', '22458 Haley Roads', 'Geraldinetown', 'ZB45', 'hardware', 'camryn_wilkinson91@approject.net', '$2y$10$O8cWuQzlOK67B3sE.L4Ere3fhsWDu3.8.O.sONdd8D1ss0t6CEX9i'),
(48, 'Consuelo Schamberger', '292 Sandra Forest', 'Oranview', '55815', 'orchid', 'moises.grady31@approject.net', '$2y$10$J6.QLViLtRiYJnDxLulwoueDnFy7N0Pfe1bGGoca4xcFeSvK93IN.'),
(49, 'Consuelo Schamberger', '292 Sandra Forest', 'Oranview', '55815', 'orchid', 'moises.grady31@approject.net', '$2y$10$JzCoOJQK2xdjBDuHKLYeiOxA7zddB6MjHzrFufS1rUMt7JvxaHQ.S'),
(50, 'Consuelo Schamberger', '292 Sandra Forest', 'Oranview', '55815', 'orchid', 'moises.grady31@approject.net', '$2y$10$birewGG9xb93jxY4Bn9afun8eiFufhfNbvmOGcOTrV2PFZI396XT.'),
(51, 'Daryl Satterfield', '5930 Frank Wells', 'Uptonberg', 'GL3 5', 'Taka', 'antwon95@approject.net', '$2y$10$KNUMGjFhY2YoB9fV0YMcfOsXz0CYY0JOSNdYASR9i6F5F1Hce.Fnq'),
(52, 'Daryl Satterfield', '5930 Frank Wells', 'Uptonberg', 'GL3 5', 'Taka', 'antwon95@approject.net', '$2y$10$7hZ0YHAOOQZKQXUixXAne.il6j3KKlZNbIOYuk.9kQ/FGGALjoqIm'),
(53, 'Daryl Satterfield', '5930 Frank Wells', 'Uptonberg', 'GL3 5', 'Taka', 'antwon95@approject.net', '$2y$10$bhpgZ8Mkcryalfxpv5nFc.Rk.d.n/finWvJDGDxeHMrC5fzbN6wIC'),
(54, 'Patsy Deckow', '299 Queen Crossing', 'North Lianaland', '01392', 'project', 'josiane.smitham54@approject.net', '$2y$10$.4F8xWsBVUJAB4THNxVT0.8o.0M8nTsAyyu2USwCFnu3G0n39VQly'),
(55, 'Patsy Deckow', '299 Queen Crossing', 'North Lianaland', '01392', 'project', 'josiane.smitham54@approject.net', '$2y$10$oxiS4r54w70Njk0vnzS9R.4CT0qThLYy0AXBlPQqQpXp1GblgC2Ai'),
(56, 'Patsy Deckow', '299 Queen Crossing', 'North Lianaland', '01392', 'project', 'josiane.smitham54@approject.net', '$2y$10$/U91qs2ROBESZe.Azgy.XuLl9q3VbIeBQtKgaMUcL3yMLmWOuLiJi'),
(57, 'Paula Mertz', '45656 Jacklyn Lights', 'New Vance', '77837', 'encryption', 'aditya.fay56@approject.net', '$2y$10$BMkWCM5Z5YJafSASyFLnsOqNhP9RNCwXhxbAyx0pBYQa3tagbfpxi'),
(58, 'Paula Mertz', '45656 Jacklyn Lights', 'New Vance', '77837', 'encryption', 'aditya.fay56@approject.net', '$2y$10$tEK8Km95ObA3dJ2gESBCjuGLn/V6UrhO4QpPz1Mf8wHKpBWeDVrpO'),
(59, 'Paula Mertz', '45656 Jacklyn Lights', 'New Vance', '77837', 'encryption', 'aditya.fay56@approject.net', '$2y$10$RJSwNZr0C3VtJTDlqdNMBuxgidAWkovRVJhRKs8yffMEXhJzlMYT2'),
(60, 'Blanca Corkery', '832 Caleigh Shore', 'Gutkowskimouth', 'JH26', 'e-services', 'lamar_green90@moneysquad.org', '$2y$10$XC4OkHP7054FdDOfRCLYdugm9rIrrxFHnUKyq6RxbXSUw1YG05iw.'),
(61, 'Blanca Corkery', '832 Caleigh Shore', 'Gutkowskimouth', 'JH26', 'e-services', 'lamar_green90@moneysquad.org', '$2y$10$A4r4jcfM8H756skRUUySGO.VHDT7H005YNNqx5pBdhZOzgFYtOKru'),
(62, 'Blanca Corkery', '832 Caleigh Shore', 'Gutkowskimouth', 'JH26', 'e-services', 'lamar_green90@moneysquad.org', '$2y$10$3/rv8HvHPGkaaEpJpUeRpOaosR.T39CyNfApb4dsa7gRLPjkeFUuG'),
(63, 'Barbara Haag', '0355 Claire Ports', 'Huelshire', '25003', 'Bedfordshire', 'keagan83@moneysquad.org', '$2y$10$RiAkbSJ2t.QHUxDe6RmGo.bNqn1u59VbooZ9Ok9OYuV.hLJ8ym4hy'),
(64, 'Barbara Haag', '0355 Claire Ports', 'Huelshire', '25003', 'Bedfordshire', 'keagan83@moneysquad.org', '$2y$10$R/bSStNUryCr3IaxysnjuOCh8YH3N5zf.LflelVyxZsnOTQ1kP.D2'),
(65, 'Barbara Haag', '0355 Claire Ports', 'Huelshire', '25003', 'Bedfordshire', 'keagan83@moneysquad.org', '$2y$10$mN0h9Gj9WeAdTe/xOwIB8ejtdtOZgDPXsJeI0PcRhS4BtWrXOGEZe'),
(66, 'Janae Kohler', '4957 Vivian Forest', 'Fionaburgh', '61779', 'Checking Account', 'bridget_hettinger81@moneysquad.org', '$2y$10$YyBUx47zalBBQWDCM8hDZOKtDJ7BQ.H9Hkt27KdPsm9SN/6avhuLS'),
(67, 'Janae Kohler', '4957 Vivian Forest', 'Fionaburgh', '61779', 'Checking Account', 'bridget_hettinger81@moneysquad.org', '$2y$10$P4vywkTO3MuCfp.gTVRcX.v61dc0aP0jxkd.3d1QuhPmWraLS/C8u'),
(68, 'Janae Kohler', '4957 Vivian Forest', 'Fionaburgh', '61779', 'Checking Account', 'bridget_hettinger81@moneysquad.org', '$2y$10$c0tsDp45/F9hOtWMJsSzeu2jn5QXzKwI6uZiYd.1yYzUxFdU74TSq'),
(69, 'Althea Witting', '585 Hermann Cliff', 'Dareburgh', '87239', 'Gloves', 'jalyn.weissnat27@moneysquad.org', '$2y$10$7/aMLCYm2cpFGqHNEgghCOD13YmwDYHWRDdEAt8ylP1fmKFISvlWi'),
(70, 'Althea Witting', '585 Hermann Cliff', 'Dareburgh', '87239', 'Gloves', 'jalyn.weissnat27@moneysquad.org', '$2y$10$i4IzU1miTqiP712B0ecRWu0l2S4Wr4DvSF9N4FDvR0YZK/1./NfMa'),
(71, 'Althea Witting', '585 Hermann Cliff', 'Dareburgh', '87239', 'Gloves', 'jalyn.weissnat27@moneysquad.org', '$2y$10$owVVEb3W/67SfiAgnyjroescu9r3R5H/WBBCm7ruZehJkxf3bSn7W'),
(72, 'Deonte Bahringer', '4498 Lora Ridge', 'Lake Eldredton', '91713', 'value-added', 'amparo_schaefer30@moneysquad.org', '$2y$10$ZiOb.ix5uYgMX40j3Od2h.6ec9C1qMwa8swj1/q9XiN/0DuDMQN/i'),
(73, 'Deonte Bahringer', '4498 Lora Ridge', 'Lake Eldredton', '91713', 'value-added', 'amparo_schaefer30@moneysquad.org', '$2y$10$TNA2/y.B4k//YyCzoTXlge/9FJTpg.ZcNc5jiICxuD3rIG6CjnyV2'),
(74, 'Deonte Bahringer', '4498 Lora Ridge', 'Lake Eldredton', '91713', 'value-added', 'amparo_schaefer30@moneysquad.org', '$2y$10$snWXROd/NcdwgbSafE.eN.6nPB31JrOfDYav58V2q8VOqCIsMQDea'),
(75, 'Refangga Lintar Prayoga', 'Jl. Karang Rejo Baru 6B', 'Surabaya', '60243', 'Indonesia', 'refanggalintarprayoga@gmail.com', '$2y$10$JLoRCzmV76NTzJTdFDlHiu7d10dCB/stGU7yPY35o7CXkPMVU/3Tq'),
(76, 'Angga99', 'Coba', 'Coba', '60243', 'Indonesia', 'angga99@gmail.com', '$2y$10$riFItcnqPCp8cvNgJ/YKV.lwL6POvYlJd31AHK3bq4MwScs.ivjl6');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `creation_date` date NOT NULL,
  `order_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `creation_date`, `order_status`) VALUES
(1, 1, '2023-12-27', 'pending'),
(2, 1, '2023-12-27', 'pending'),
(3, 1, '2023-12-27', 'pending'),
(4, 1, '2023-12-27', 'pending'),
(5, 1, '2023-12-27', 'pending'),
(6, 1, '2023-12-27', 'pending'),
(7, 1, '2023-12-29', 'pending'),
(8, 1, '2023-12-29', 'pending'),
(9, 1, '2023-12-29', 'pending'),
(10, 1, '2024-01-07', 'pending'),
(11, 2, '2024-01-07', 'pending'),
(12, 2, '2024-01-07', 'pending'),
(13, 2, '2024-01-07', 'pending'),
(14, 2, '2024-01-07', 'pending'),
(15, 3, '2024-01-07', 'pending'),
(16, 4, '2024-01-07', 'pending'),
(17, 4, '2024-01-07', 'pending'),
(18, 5, '2024-01-07', 'pending'),
(19, 5, '2024-01-07', 'pending'),
(20, 5, '2024-01-07', 'pending'),
(21, 1, '2024-01-07', 'pending'),
(22, 6, '2024-01-07', 'pending'),
(23, 34, '2024-01-08', 'pending'),
(24, 75, '2024-01-11', 'pending'),
(25, 34, '2024-01-16', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`id`, `order_id`, `product_name`, `product_price`, `product_quantity`, `date`) VALUES
(1, 2, '0', 5000, 1, '2023-12-27'),
(2, 3, 'CARROT', 13000, 1, '2023-12-27'),
(3, 4, 'ORANGE', 20000, 1, '2023-12-27'),
(4, 5, 'GALANGAL POWDER', 4000, 1, '2023-12-27'),
(5, 6, 'MILO', 16000, 1, '2023-12-27'),
(6, 7, 'CUMIN', 16000, 2, '2023-12-29'),
(7, 8, 'GALANGAL POWDER', 4000, 1, '2023-12-29'),
(8, 9, 'LEMONGRASS POWDER', 15000, 1, '2023-12-29'),
(9, 10, 'RED GRAPES', 30000, 1, '2024-01-07'),
(10, 11, 'RED GRAPES', 30000, 1, '2024-01-07'),
(11, 11, 'WHITE GRAPES', 40000, 1, '2024-01-07'),
(12, 11, 'FUJI APPLE', 18000, 3, '2024-01-07'),
(13, 12, 'FUJI APPLE', 18000, 1, '2024-01-07'),
(14, 12, 'STRAWBERRY', 25000, 1, '2024-01-07'),
(15, 13, 'RED GRAPES', 30000, 1, '2024-01-07'),
(16, 14, 'FUJI APPLE', 18000, 1, '2024-01-07'),
(17, 15, 'RED GRAPES', 30000, 1, '2024-01-07'),
(18, 15, 'WHITE GRAPES', 40000, 1, '2024-01-07'),
(19, 16, 'FLORIDINA', 3000, 1, '2024-01-07'),
(20, 17, 'TEH BOTOL', 8500, 1, '2024-01-07'),
(21, 18, 'PAPRIKA POWDER', 25000, 1, '2024-01-07'),
(22, 18, 'SHALLOT POWDER', 15000, 1, '2024-01-07'),
(23, 19, 'PAPRIKA POWDER', 25000, 1, '2024-01-07'),
(24, 20, 'BLACK PEPPER', 20000, 1, '2024-01-07'),
(25, 21, 'SHALLOT POWDER', 15000, 1, '2024-01-07'),
(26, 22, 'INDOMILK BANANA', 5000, 1, '2024-01-07'),
(27, 23, 'GREEN APPLE', 10000, 2, '2024-01-08'),
(28, 23, 'GINGER POWDER', 8000, 2, '2024-01-08'),
(29, 24, 'ORANGE', 20000, 1, '2024-01-11'),
(30, 25, 'FUJI APPLE', 18000, 1, '2024-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `vegetables`
--

CREATE TABLE `vegetables` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `details` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vegetables`
--

INSERT INTO `vegetables` (`id`, `name`, `price`, `details`, `image`) VALUES
(1, 'CARROT', 13000, '500g', 'carrot.png'),
(2, 'CABBAGE', 5000, '500g', 'cabbage.png'),
(3, 'RED ONION', 20000, '100g', 'red_onion.png'),
(4, 'SPINACH', 15000, '500g', 'spinach.png'),
(5, 'CAULIFLOWER', 13000, '500g', 'cauliflower.png'),
(6, 'BROCOLLI', 20000, '500g', 'broccoli.png'),
(7, 'POTATO', 10000, '500g', 'potato.png'),
(8, 'MUSTARD GREENS', 10000, '500g', 'mustard.png'),
(9, 'RED TOMATOES', 15000, '500g', 'red_tomatoes.png'),
(10, 'EGGPLANT', 8000, '500g', 'eggplant.png'),
(11, 'CUCUMBER', 5000, '500g', 'timun.png'),
(12, 'RED CHILI', 12000, '100g', 'chili.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beverages`
--
ALTER TABLE `beverages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cooking_essentials`
--
ALTER TABLE `cooking_essentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fruit`
--
ALTER TABLE `fruit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `tbl_order_ibfk_1` (`customer_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_order_details_ibfk_1` (`order_id`);

--
-- Indexes for table `vegetables`
--
ALTER TABLE `vegetables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beverages`
--
ALTER TABLE `beverages`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `cooking_essentials`
--
ALTER TABLE `cooking_essentials`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `fruit`
--
ALTER TABLE `fruit`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `vegetables`
--
ALTER TABLE `vegetables`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customer` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD CONSTRAINT `tbl_order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
