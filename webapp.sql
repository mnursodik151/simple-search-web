-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2017 at 12:48 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `analysis`
--

CREATE TABLE `analysis` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `preview` varchar(255) NOT NULL,
  `author` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `klaim` text NOT NULL,
  `content` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analysis`
--

INSERT INTO `analysis` (`id`, `title`, `preview`, `author`, `image`, `klaim`, `content`, `date_created`) VALUES
(1, 'test', 'test', 0, 'test', '', 'test', '2017-03-18 23:30:54'),
(2, 'test2', 'test2', 0, 'test2', '', 'test2', '2017-03-18 23:43:49'),
(3, 'APAKAH BENAR HIMBAUAN UNTUK TIDAK MEMANDIKAN BAYI SEGERA SETEAH LAHIR ?', 'Dilansir dari https://www.ncbi.nlm.nih.gov/pmc/articles/PMC2763724/, Vernix caseosa adalah biofilm alami berwarna putih krem yang meliputi kulit janin selama trimester terakhir kehamilan. Lapisan Vernix pada kulit', 0, 'img/bayi.jpg', 'Jangan mandikan bayi segera setelah lahir (http://www.cerpen.co.id/post_139718)', 'Dilansir dari https://www.ncbi.nlm.nih.gov/pmc/articles/PMC2763724/, Vernix caseosa adalah biofilm alami berwarna putih krem yang meliputi kulit janin selama trimester terakhir kehamilan. Lapisan Vernix pada kulit neonatal melindungi kulit bayi yang baru lahir dan memfasilitasi adaptasi kulit ekstra-uterus pada minggu kelahiran pertama jika tidak dibersihkan setelah lahir. Lapisan ini terdiri dari corneocytes yang tertanam dalam matriks lipid.\r\n\r\n\r\nFungsi lapisan ini di antaranya :\r\nMemfasilitasi Transisi dari lingkungan intra-uterine ke extra-uterine\r\nVernix dalam cairan ketuban saat ditelan oleh janin memiliki efek potensial pada berkembangnya usus. Glutamin > 20% dari vernix memiliki kandungan asam amino yang merupakan faktor trofik yang sudah dikenal untuk perkembangan usus dan umumnya diperlukan oleh perkembangbiakan sel seperti epitel usus dan limfosit. Asparginase juga ditemukan dalam jumlah banyak, membentuk> 30% dari kandungan asam amino.\r\nVernix melakukan fungsi penghalang epidermal dalam rahim untuk memfasilitasi pertumbuhan epidermal bawahnya dan bertindak sebagai penghalang hidrofobik terhadap maserasi cairan ketuban dan hilangnya cairan dan elektrolit atau (Trans Epidermal Water Loss) TEWL.\r\n\r\nVernix juga bertindak sebagai biofilm pelindung dengan meminimalkan gesekan dari bagian janin selama persalinan dan sebagai penutup antimikroba terhadap lingkungan kaya bakteriologis pada saluran kelamin ibu bersamaan dengan efek isolasi pada janin.\r\nPengatur suhu saat lahir\r\nMeskipun metode modern keperawatan dan inkubasi, kontrol suhu selama beberapa jam pertama kehidupan pada bayi dengan berat badan yang sangat rendah tetap menjadi daerah bermasalah di bidang neonatologi.\r\nKarena bayi ini tidak memiliki stratum korneum kompeten dan tingkat TEWL yang tinggi, telah diusulkan oleh beberapa ilmuwan untuk mempertahankan lapisan hidrofobik vernix setelah lahir dan membiarkannya terpisah secara alami, yang biasanya terjadi sekitar hari ke-5, kecuali dalam lipatan tubuh di mana dibutuhkan 5 hari lagi untuk terpisahkan. Hal ini telah menunjukkan penurunan yang cukup besar dalam jumlah kasus suhu di bawah normal.\r\nNamun, ada perdebatan yang cukup besar pada apakah vernix memiliki efek pada regulasi suhu tubuh dan apakah itu harus dipertahankan atau tidak. Shulak berspekulasi bahwa vernix bisa memberikan stabilitas suhu badan, tapi bukan merupakan faktor utama. Studi terbaru tentang masalah ini dengan Visscher et al telah menunjukkan tidak berpengaruh signifikan terhadap regulasi termal oleh retensi verniks . Perlu ada studi lebih lanjut mengenai fungsi ini.\r\nMembantu Adaptasi Permukaan Kulit Bayi\r\nVernix memodulasi proses adaptasi kulit bayi seperti pengurangan pH, pembentukan lapisan kering pada kulit. Vernix juga membantu menjaga kelembaban kulit bayi.\r\nAntioksidan\r\nMelanin dan vitamin E pada vernix memiliki sifat antioksidan pada kulit bayi\r\nAnti infeksi\r\nBeberapa protein dalam vernix seperti Psoriasin, Ubiquitin, Ribonuclease-7, Amnexin memiliki sifat anti bakteri, dan membantu melindungi kulit bayi dari infeksi bakteri.\r\nMenjaga kebersihan kulit bayi\r\nWalau terlihat kotor, vernix memiliki efektifitas dalam membersihkan kulit hampir sama seperti sabun pada umumnya. Dan dengan fungsi tambahan vernix yang sudah dijelaskan, ada manfaat yang dapat diperoleh dengan tidak membersihkan lapisan ini.\r\n\r\nDilansir dari http://www.medscape.com/viewarticle/838253_3 , memang tidak disarankan untuk memandikan bayi segera setelah lahir. AWHONN Neonatal Skin Care Guideline menyarankan bayi untuk dimandikan 2-4 jam pasca kelahiran. WHO menyarankan untuk menunda memandikan bayi sampai 6 jam pasca kelahiran. Langsung memandikan bayi setelah lahir memiliki resiko hipotermia, kelainan pernapasan dan meningkatnya konsumsi oksigen, terutama saat kondisi vital bayi belum stabil. \r\n', '2017-03-20 23:27:16');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `email`, `url`, `question`) VALUES
(1, 'mnursodik151@yahoo.com', 'http://localhost/webapp/submit.php', 'wkwkwkwk sama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analysis`
--
ALTER TABLE `analysis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analysis`
--
ALTER TABLE `analysis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
