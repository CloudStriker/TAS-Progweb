-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 03:43 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `user` varchar(15) NOT NULL,
  `about` text NOT NULL,
  `profile` text NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `tahun` int(4) NOT NULL,
  `bulan` int(2) NOT NULL,
  `tanggal` tinyint(4) NOT NULL,
  `job` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `CV` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`user`, `about`, `profile`, `fullname`, `tahun`, `bulan`, `tanggal`, `job`, `website`, `email`, `phone`, `address`, `photo`, `CV`) VALUES
('david', 'Seseorang yang berusaha sebaik mungkin untuk bisa membantu sesamanya.', 'Seseorang yang berusaha sebaik mungkin untuk bisa membantu sesamanya.', 'Imanuel David Pratista', 1997, 8, 12, 'Mahasiswa', '-', 'imanuel.david@ti.ukdw.ac.id', '085975204636', 'Sentolo Lor RT 18 RW 09, Sentolo, Sentolo, Kulon Progo', 'images/users/david.jpg', 'uploads/\r\n                    '),
('michael', 'Seorang pemuda yang gagal untuk mendapatkan cintanya dan berakhir dengan tertikung oleh teman sendiri. Selalu terdiam dan mencoba mendapatkan ketenangan serta kedamaian akan hidupnya.', 'sangat suka dengan hobynya', 'R. Michael Joedhitya', 2000, 5, 30, 'Mahasiswa', 'clicknow.my.id', 'raden.michael@ti.ukdw.ac.id', '085155223221', 'jl. Madumurti no. 37 Yogyakarta', 'images/users/mic.jpg\r\n\r\n', 'uploads/\r\n                    Jadwal.pdf'),
('philip', 'Seorang pemuda yang ceria dan selalu berjuang akan yang namanya cinta, perjuangan panjang dan sepertinya akan membuahkan hasil yang baik. Suka dengan olahraga terutama sepakbola, futsal dan badminton.', 'Informatics Students', 'Philip Andrew Sumolang', 1999, 9, 15, 'Mahasiswa', '-', 'philip.andrew@ti.ukdw.ac.id', '0813413145665', 'Jalan Telaga Utama No. 17 Taman Losari Makassar Sulawesi Selatan', 'images/users/philip.jpg', 'uploads/\r\n                    Jadwal.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `contactName` varchar(255) NOT NULL,
  `contactEmail` varchar(30) NOT NULL,
  `contactSubject` text NOT NULL,
  `contactMessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `contactName`, `contactEmail`, `contactSubject`, `contactMessage`) VALUES
(32, 'asd', 'asd@sadsa.comasd', 'TUGAS-KAKOM', 'INI TUGAS KAKOM YA');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `label` varchar(25) NOT NULL,
  `start` int(4) NOT NULL,
  `end` int(4) NOT NULL,
  `title` varchar(25) NOT NULL,
  `info` text NOT NULL,
  `user` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `label`, `start`, `end`, `title`, `info`, `user`) VALUES
(13, 'UKDW', 2018, 0, 'Mahasiswa Informatika', 'Mengambil jurusan Prodi Informatika', 'david'),
(14, 'UAJY', 2016, 2017, 'Mahasiswa Teknik Sipil', 'Mengambil jurusan Teknik Sipil, namun keluar', 'david'),
(16, 'SMA', 2013, 2016, 'SMAN 8 Yogya', 'Pertama kali ngekos', 'david'),
(17, 'SMP', 2010, 2013, 'SMP PL 1 Yogya', 'Pernah sambil jualan nasi bungkus', 'david'),
(18, 'SD', 2004, 2010, 'SD Marsudirini', 'Pernah menjadi ketua kelas, menjadi juara kelas', 'david'),
(19, 'TK', 2002, 2004, 'TK Materdei', 'Sering Bolos, masuk cuma 2x seminggu rata-rata', 'david'),
(20, 'UKDW', 2018, 0, 'Mahasiswa Informatika', 'Mengambil jurusan Prodi Informatika', 'philip'),
(21, 'SMA', 2014, 2017, 'SMAN 2', '', 'philip'),
(22, 'SMP', 2011, 2014, 'Rajawali JHS', 'Rajawali Junior High School', 'philip'),
(23, 'SD', 2005, 2011, 'Rajawali', 'Rajawali Elementary School', 'philip'),
(24, 'TK', 2004, 2005, 'Rajawali', 'Rajawali Kindergarden', 'philip'),
(25, 'UKDW', 2018, 0, 'Mahasiswa Informatika', 'Mengambil jurusan Prodi Informatika', 'michael'),
(26, 'SMA', 2016, 2018, 'SMA LAB', 'SMA LAB SALATIGA, UKSW', 'michael'),
(27, 'SMP', 2013, 2016, 'SMP BU', 'SMP BUDI UTAMA SALATIGA', 'michael');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `label` varchar(25) NOT NULL,
  `start` int(4) NOT NULL,
  `end` int(4) NOT NULL,
  `title` varchar(25) NOT NULL,
  `info` text NOT NULL,
  `user` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `label`, `start`, `end`, `title`, `info`, `user`) VALUES
(37, 'Aksara Jawa', 2008, 2008, 'Lomba Aksara Jawa', 'Juara 3 Lomba Aksara Jawa Tingkat Kota waktu SD kelas 4', 'david'),
(39, 'Paduan Suara', 2008, 2008, 'Lomba Paduan Suara', 'juara 1 saat masih di SD kelas 4', 'david'),
(40, 'Baris berbaris', 2013, 2016, 'Pleton Inti', 'Menjadi anggota pleton inti saat SMA kelas 1-3', 'david'),
(41, 'Badminton Competiton', 2005, 2005, 'Badminton Competiton', 'Badminton Competiton in Elementary School (juara 3)', 'philip'),
(42, 'Robotics Competition', 2010, 2010, 'Robotics Competition', 'Peserta Robotics Competition', 'philip'),
(44, 'JILC Mathematics Comp', 2011, 2011, 'JILC Mathematics Comp', 'Peserta JILC Mathematics Competition', 'philip'),
(45, 'Futsal Cup', 2014, 2017, 'Futsal Cup', 'Pocari Sweat Futsal Cup (Peserta dan pernah juara 2 )', 'philip'),
(46, 'Futsal Rector Cup ', 2019, 2019, 'Futsal Rector Cup', 'Peserta Futsal Rector Cup', 'philip'),
(47, 'Kepala Gudang', 2018, 2018, 'Kepala Gudang', 'Kepala Gudang Impact Aksesoris', 'michael'),
(48, 'Panitia', 2017, 2017, 'Panitia', 'Panitia Acara LabCup se-Jateng di SMA LAB SALATIGA', 'michael');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `label` varchar(25) NOT NULL,
  `labelInfo` varchar(25) NOT NULL,
  `info` text NOT NULL,
  `src` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `user` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `label`, `labelInfo`, `info`, `src`, `link`, `user`) VALUES
(1, 'liberty', 'graphic design', 'liberty itu outih', 'images/portfolio/liberty.jpg', 'http://www.behance.net', 'david'),
(2, 'shutterbug', 'web design', 'photo photo', 'images/portfolio/shutterbug.jpg', 'http://www.behance.net', 'david'),
(4, 'beetle', 'branding', 'shadownya gilak', 'images/portfolio/beetle.jpg', 'http://www.behance.net', 'michael'),
(5, 'lighthouse', 'web development', 'pencahayaan yang tak pernah mati', 'images/portfolio/lighthouse.jpg', 'http://www.behance.net', 'philip'),
(6, 'salad', 'branding', 'laper...', 'images/portfolio/salad.jpg', 'http://www.behance.net', 'philip');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `label` varchar(25) NOT NULL,
  `percentage` int(3) NOT NULL,
  `user` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `label`, `percentage`, `user`) VALUES
(20, 'Chess', 85, 'david'),
(21, 'Coding', 80, 'david'),
(22, 'English', 80, 'david'),
(23, 'Games', 80, 'david'),
(24, 'CODE', 60, 'philip'),
(25, 'SPORT', 80, 'philip'),
(26, 'COMMUNICATION', 85, 'philip'),
(27, 'SOCIAL', 90, 'philip'),
(29, 'Wordpress', 65, 'michael'),
(30, 'Davinci Resolve', 80, 'michael'),
(31, 'ruby', 30, 'michael'),
(32, 'Japanese Language', 85, 'michael'),
(33, '', 0, 'david');

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL,
  `user` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `icon`, `link`, `user`) VALUES
(10, 'fa fa-facebook', 'www.facebook.com/imanuel.david.pratista', 'david'),
(11, 'fa fa-instagram', 'www.instagram.com/ddante1724/', 'david'),
(12, 'fa fa-twitter', 'twitter.com/daviddante17', 'david'),
(13, 'fa fa-instagram', 'www.instagram.com/philipsumolang/', 'philip'),
(14, 'fa fa-twitter', 'twitter.com/philipsumolang/', 'philip'),
(15, 'fa fa-facebook', 'www.facebook.com/philipsumolang', 'philip'),
(16, 'fa fa-facebook', 'https://www.facebook.com/michael.joedhitya/', 'michael'),
(17, 'fa fa-instagram', '', 'david');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `role`) VALUES
(2, 'david', 'aa743a0aaec8f7d7a1f01442503957f4d7a2d634', 'Imanuel David P.', 'Content Manager'),
(3, 'michael', '17b9e1c64588c7fa6419b4d29dc1f4426279ba01', 'R. Michael Joedhitya', 'administrator'),
(4, 'philip', '3ba3974e96044dcde818e6310ed799abe10671d4', 'Philip Andrew S.', 'Content Manager');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `sapaan` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `skillsInfo` text NOT NULL,
  `resumeInfo` text NOT NULL,
  `galleriesInfo` text NOT NULL,
  `contactInfo` text NOT NULL,
  `copyright` varchar(30) NOT NULL,
  `byy` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`sapaan`, `title`, `skillsInfo`, `resumeInfo`, `galleriesInfo`, `contactInfo`, `copyright`, `byy`) VALUES
('HELLO, WORLD.', 'Team ∞', 'Berikut adalah skills yang saya punyai  dan sudah saya kembangkan', 'Ini adalah cerita dari bagian hidup kami masing-masing', 'Berikut foto-foto dari kami', 'Jika anda ingin mengetahui atau menanyakan sesuatu kepada kami, tanyalah dengan mengisi konten dibawah ini', '© Copyright Team ∞', 'Design by Kards');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
