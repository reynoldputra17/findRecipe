-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220612.30bcc6535a
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 06:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resep`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahan`
--

CREATE TABLE `bahan` (
  `id` int(11) NOT NULL,
  `id_makanan` varchar(250) NOT NULL,
  `bahan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bahan`
--

INSERT INTO `bahan` (`id`, `id_makanan`, `bahan`) VALUES
(7, '24', '1 kg Ayam potong'),
(8, '24', '3 btg Serai'),
(9, '24', '3 cm Lengkuas'),
(10, '24', '4 lbr Daun salam'),
(11, '24', '5 lbr Daun jeruk purut'),
(12, '24', '3 btg Bawang pre'),
(13, '24', '1 ½ sdt Ketumbar bubuk'),
(14, '24', '½ sdt Merica bubuk'),
(15, '24', '1 sdt Gula pasir'),
(16, '24', '3 ½ sdt Masako® Rasa Ayam'),
(17, '24', '2 L Air'),
(18, '25', '12 ptg Ayam'),
(19, '25', '2 lbr Daun jeruk'),
(20, '25', '2 lbr Daun salam'),
(21, '25', '1 btg Serai (geprek)'),
(22, '25', '½ sdm Gula merah'),
(23, '25', '1 sdm Masako® Rasa Sapi'),
(24, '25', '750 ml Air'),
(25, '26', '170 gr Ikan tuna (cincang kasar)'),
(26, '26', '70 gr Wortel (cincang kasar)'),
(27, '26', '3 bh Buncis (potong 1 cm)'),
(28, '26', '3 bh Buncis (potong 1 cm)'),
(29, '26', '1 sdm Maizena'),
(30, '26', '100 ml Air'),
(31, '26', '1 bks Sajiku® Golden Crispy'),
(32, '26', '600 ml Minyak goreng'),
(33, '27', '10 bh Tahu putih (goreng)'),
(34, '27', '200 gr Taoge'),
(35, '27', '1 bh Timun (iris tipis/potong dadu)'),
(36, '27', 'Gimbal Udang untuk pelengkap');

-- --------------------------------------------------------

--
-- Table structure for table `cara`
--

CREATE TABLE `cara` (
  `id` int(11) NOT NULL,
  `id_makanan` varchar(250) NOT NULL,
  `cara` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cara`
--

INSERT INTO `cara` (`id`, `id_makanan`, `cara`) VALUES
(30, '24', 'Tumis bumbu halus, tambahkan lengkuas, sereh, daun salam, dan daun jeruk, sampai harum.'),
(31, '24', 'Tambahkan ketumbar bubuk, merica bubuk, gula, dan Masako® Rasa Ayam.'),
(32, '24', 'Tambahkan air dan ayam, masak hingga matang.'),
(33, '24', 'Pisahkan ayam, lalu suir untuk bahan pelengkap.'),
(34, '24', 'Tata bahan pelengkap pada mangkuk, siram dengan kuah soto, sajikan.'),
(35, '25', 'Tumis bumbu halus, daun jeruk, daun salam, serai, gula merah, dan Masako® Rasa Sapi.'),
(36, '25', 'Masukkan ayam, lalu ungkep hingga empuk, sisihkan.'),
(37, '25', 'Tumis bumbu gongso secara terpisah, masukkan ayam hasil ungkep.'),
(38, '25', 'Tambahkan kecap manis dan saus tiram, masak hingga merata, sajikan.'),
(39, '26', 'Campurkan tuna, wortel, buncis, maizena dan telur. Bentuk adonan menjadi bulat pipih, lalu kukus selama 15 menit.'),
(40, '26', 'Siapkan adonan basah dengan melarutkan 5 sdm Sajiku® Golden Crispy dengan 100 ml air. Sisanya digunakan sebagai adonan kering.'),
(41, '26', 'Lumuri tuna kedalam adonan kering, lalu celupkan tuna ke dalam adonan basah hingga rata.'),
(42, '26', 'Gulingkan kembali tuna ke adonan kering hingga terbentuk kulit yang keriting. Kemudian, goreng dalam minyak panas hingga berwarna kuning kecoklatan, angkat.'),
(43, '27', 'Potong dan goreng tahu, hingga kecokelatan.'),
(44, '27', 'Haluskan bumbu kacang.'),
(45, '27', 'Tata tahu goreng dan taoge pada piring, siram dengan bumbu kacang. Taburkan gimbal udang sebagai pelengkap.');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `nama_makanan` varchar(250) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id`, `nama_makanan`, `deskripsi`, `foto`) VALUES
(24, 'Soto Ayam Madiun ala Masako', 'Di Indonesia, soto merupakan salah satu jenis makanan yang punya banyak variasi. Kali ini, Dapur Umami mau ajak kamu jalan-jalan ke Madiun dengan resep Soto Ayam Madiun ala Masako. Resep ini bisa bikin semua momen makin spesial karena cocok banget di', '24.jpg'),
(25, 'Ayam Gongso', 'Panggilan kepada para pecinta ayam, harap berkumpul di lapak resep Ayam Gongso ala Masako®. Gongso adalah bahasa jawa yang berarti oseng, jadi masakan ini pas banget buat kamu yang lagi cari variasi masakan ayam. Yuk, langsung siapin bahan-bahan untu', '25.jpg'),
(26, 'Tuna Sayur', 'Bikin camilan menggunakan ikan dan sayur? Siapa takut! Kombinasi ikan tuna dan sayuran bagus banget loh untuk memenuhi kebutuhan protein tubuh. Langsung aja nih, kenalan sama Tuna Sayur Krispi ala Sajiku®. Selain bisa jadi camilan, masakan satu ini j', '26.jpg'),
(27, 'Tahu Gimbal ', 'Makan tahu makin spesial dengan resep Tahu Gimbal ala Masako® yang bisa kamu recook di rumah! Menu cocok banget buat disantap ramai-ramai sambil santai. Selain bahannya yang mudah ditemukan, resep ini juga dijamin mudah untuk dibuat. Rasanya yang ped', '27.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'reynoldputra1@gmail.com', 'rey123'),
(2, 'tatasafirakd@gmail.com', 'tata123'),
(3, 'hamdiwalfy.11@gmail.com', 'hamdiwalfy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cara`
--
ALTER TABLE `cara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahan`
--
ALTER TABLE `bahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `cara`
--
ALTER TABLE `cara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



