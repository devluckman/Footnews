create database sepakbola;
use sepakbola;
-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2018 at 09:06 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- --------------------------------------------------------

--
-- Table structure for table `sepakbola`
--

CREATE TABLE `sepakbola` (
  `id` int(11) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi_gambar` text,
  `deskripsi_berita1` text,
  `deskripsi_berita2` text,
  `deskripsi_berita3` text,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sepakbola`
--

INSERT INTO `sepakbola` (`id`, `judul_berita`, `tanggal`, `gambar`, `deskripsi_gambar`, `deskripsi_berita1`, `deskripsi_berita2`, `deskripsi_berita3`, `create_at`, `update_at`) VALUES
(2, 'Lebih Progresif dari Madrid, Man City Temui Agen Umtiti', '3 Januari 2018', 'berita1.jpg', 'Samuel Umtiti',
'Footnews - Real Madrid nampaknya kalah progresif dibandingkan Manchester City untuk urusan saga transfer Samuel Umtiti. Sebab, Man City dikabarkan lebih dulu bertemu dengan agen pemain Barcelona tersebut. Umtiti disebut jadi incaran utama Madrid di bursa transfer bulan Januari. El Real ingin menggaet pemain berusia 24 tahun untuk menambal titik lemah mereka di lini belakang. Namun, seperti dikutip dari LEquipe, Madrid sepertinya bergerak lambat dalam proses transfer ini. Belum ada manuver pasti yang dilakukan oleh Madrid untuk mendapatkan pemain asal Prancis. Berbeda dengan Man City.',
'Man City sudah bertemu dengan agen Umtiti dan membicarakan potensi transfer. Namun, pihak klub asal Premier League disebut tidak ingin tergesa-gesa untuk membeli Umtiti. Kemungkinan transfer baru akan dilakukan pada musim panas mendatang. Umtiti memang punya potensi besar untuk pindah dari Barca. Eks pemain Lyon punya klausul pelepasan senilai 60 juta euro. Harga yang terjangkau bagi Man City dan Real Madrid.',
'Tapi, Barca sejatinya tidak tinggal diam terkait isu Umtiti. Klub asal Catalunya tersebut telah menyiapkan draf kontrak baru kepada Umtiti. Barca akan memberi kenaikan gaji dan juga menaikkan klausul pelepasan dalam kontraknya.',
'2018-01-03 08:03:27', '0000-00-00 00:00:00'),
(3, 'Unggul Jauh dari Madrid, Apa Barca Minat Beli Pemain Baru?', '3 Januari 2018', 'berita2.jpg', 'Ernesto Valverde',
'FootNews - Barcelona boleh jadi disebut sudah punya komposisi pemain yang amat mumpuni pada musim 2017/18 ini. Buktinya, Barca mampu memimpin klasemen La Liga plus dengan catatan belum pernah kalah. Saat ini, Barca berada di puncak klasemen dengan 45 poin. Unggul sembilan poin dari Atletico Madrid yang ada di posisi kedua. Dari Real Madrid? Barca unggul jauh. Barca telah mendapatkan 14 poin lebih banyak dari Madrid yang ada di posisi ke-4.',
'Barca juga telah memastikan lolos ke babak 16 besar Liga Champions dan akan berjumpa dengan Chelsea. Dengan catatan yang begitu impresif, apa Barca masih membutuhkan tambahan pemain baru di bursa transfer bulan Januari? Masih. Barca masih berada adalah banyak celah dalam tim yang harus diperbaiki.  Kami adalah sebuah klub dan kami akan selalu punya keinginan untuk menjadi lebih baik, ucap pelatih Barca, Ernesto Valverde kepada Barca TV.',
'Kami juga akan melakukan dengan cara yang sama dengan klub lain yang ingin membuat skuat mereka menjadi lebih baik. Kami juga akan melakukannya [membeli pemain baru], sambung eks pelatih Athletic Bilbao. Saat ini, memang ada beberapa nama pemain yang jadi incaran Barca. Dua nama paling banter dikabarkan oleh media di Spanyol yakni Philippe Coutinho [Liverpool] dan Angel Di Maria [PSG]. Tapi, di sisi lain Barca juga disebut ingin melakukan cuci gudang dengan menjual sejumlah pemain yang sudah minim kontribusi. Sejumlah nama seperti Arda Turan, Rafinha hingga Gerard Deulofeu disebut telah masuk dalam daftar jual.',
'2018-01-03 07:51:21', '0000-00-00 00:00:00'),
(4, 'Bos Barcelona Akui Kepergian Neymar Buat Situasi Semakin Sulit', '2 Januari 2018', 'berita3.jpg', 'Neymar',
'FootNews- Bos Barcelona, Ernesto Valverde, belum lama ini berbicara mengenai bagaimana klubnya harus menyesuaikan diri usai mereka secara mendadak ditinggalkan oleh Neymar. Pemain Brasil mengejutkan banyak orang usai ia memutuskan menerima pinangan PSG. Klub Paris menjadikannya bintang termahal dunia dengan harga 222 juta euro.',
'Banyak orang lantas memprediksi Barca akan mengalami krisis usai melepas eks pemain Santos tersebut. Namun nyatanya hingga kini mereka belum tersentuh kekalahan dan memuncaki klasemen La Liga. Meski begitu, Valverde mengatakan di Barca TV:  Kepergian Neymar merupakan momen yang sulit untuk klub. Kami tak bisa membantah itu.',
'Ousmane Dembele, yang dihadirkan dari Dortmund untuk menggantikan Neymar, baru saja fit dari cedera dan banyak orang mulai berdebat apakah kehadiran pemain Prancis nantinya bakal mengubah strategi Barca. Valverde kemudian mengatakan:  Kami akan menilai semuanya. Kami harus mempertimbangkan posisi yang ditempati Leo Messi dan Luis Suarez, Kami harus beradaptasi, namun kami tahu Messi bisa bermain di manapun, kami ingin dia ada di posisi yang bisa membuatnya memimpin serangan kami.',
'2018-01-03 07:56:47', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sepakbola`
--
ALTER TABLE `sepakbola`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sepakbola`
--
ALTER TABLE `sepakbola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
