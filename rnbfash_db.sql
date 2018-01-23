-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Mei 2017 pada 10.08
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rnbfash_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category`
--

CREATE TABLE `tb_category` (
  `p_id_category` int(11) UNSIGNED NOT NULL,
  `c_nama_kategori` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_category`
--

INSERT INTO `tb_category` (`p_id_category`, `c_nama_kategori`) VALUES
(1, 'baju'),
(2, 'celana');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `g_id_gallery` int(11) NOT NULL,
  `g_nama_produk` varchar(253) NOT NULL,
  `g_category` varchar(253) NOT NULL,
  `g_deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gallery`
--

INSERT INTO `tb_gallery` (`g_id_gallery`, `g_nama_produk`, `g_category`, `g_deskripsi`) VALUES
(8, 'Baju 2', '1', 'Baju 2'),
(10, 'Baju 2', '1', 'Baju yang stoknya ready'),
(11, 'Baju 3', '1', 'ukuran XL dan stoknya juga ready'),
(12, 'Baju 4', '1', 'stoknya ini ready semua'),
(13, 'Celana 1', '2', 'Cocok untuk Kamu yang suka'),
(14, 'ede', '1', 'wdw');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_garmen`
--

CREATE TABLE `tb_garmen` (
  `id_garmen` int(11) UNSIGNED NOT NULL,
  `tmp_garmen` varchar(253) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_garmen`
--

INSERT INTO `tb_garmen` (`id_garmen`, `tmp_garmen`) VALUES
(1, 'image/garmen/Fibrinana foto_170427_0014.jpg'),
(2, 'image/garmen/Fibrinana foto_170427_0015.jpg'),
(3, 'image/garmen/Fibrinana foto_170427_0017.jpg'),
(4, 'image/garmen/Fibrinana foto_170427_0016.jpg'),
(5, 'image/garmen/Fibrinana foto_170427_0018.jpg'),
(6, 'image/garmen/Fibrinana foto_170427_0019.jpg'),
(7, 'image/garmen/Fibrinana foto_170427_0020.jpg'),
(8, 'image/garmen/Fibrinana foto_170427_0021.jpg'),
(9, 'image/garmen/Fibrinana foto_170427_0023.jpg'),
(10, 'image/garmen/Fibrinana foto_170427_0024.jpg'),
(11, 'image/garmen/Fibrinana foto_170427_0068.jpg'),
(12, 'image/garmen/Fibrinana foto_170427_0069.jpg'),
(13, 'image/garmen/Fibrinana foto_170427_0067.jpg'),
(14, 'image/garmen/Fibrinana foto_170427_0070.jpg'),
(15, 'image/garmen/Fibrinana foto_170427_0071.jpg'),
(16, 'image/garmen/Fibrinana foto_170427_0072.jpg'),
(17, 'image/garmen/Fibrinana foto_170427_0073.jpg'),
(18, 'image/garmen/Fibrinana foto_170427_0084.jpg'),
(19, 'image/garmen/Fibrinana foto_170427_0085.jpg'),
(20, 'image/garmen/Fibrinana foto_170427_0086.jpg'),
(21, 'image/garmen/Fibrinana foto_170427_0087.jpg'),
(22, 'image/garmen/Fibrinana foto_170427_0088.jpg'),
(23, 'image/garmen/Fibrinana foto_170427_0091.jpg'),
(24, 'image/garmen/Fibrinana foto_170427_0092.jpg'),
(25, 'image/garmen/Fibrinana foto_170427_0090.jpg'),
(26, 'image/garmen/Fibrinana foto_170427_0089.jpg'),
(27, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `m_id_user` int(10) UNSIGNED NOT NULL,
  `m_user_name` varchar(50) NOT NULL,
  `m_pass` varchar(96) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`m_id_user`, `m_user_name`, `m_pass`) VALUES
(1, 'admin_mbfash', '7f99089a4e938936476e195091bfa151');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prod_gallery`
--

CREATE TABLE `tb_prod_gallery` (
  `p_id_product` int(11) NOT NULL,
  `p_tmp_pict` varchar(253) NOT NULL,
  `g_id_gallery` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_prod_gallery`
--

INSERT INTO `tb_prod_gallery` (`p_id_product`, `p_tmp_pict`, `g_id_gallery`) VALUES
(1, 'uploads\\11664338img001.jpg', 2),
(2, 'uploads\\99031249img003.jpg', 2),
(3, 'uploads\\104550925img001.jpg', 3),
(4, 'uploads\\143531354932125913-MIT.pdf', 3),
(5, 'uploads\\210423696img002.jpg', 4),
(6, 'uploads\\174833820img003.jpg', 4),
(7, 'uploads\\50090613Fibrinana foto_170427_0025.jpg', 5),
(8, 'uploads\\173419267Fibrinana foto_170427_0007.jpg', 5),
(9, 'uploads\\13873667Fibrinana foto_170427_0006.jpg', 5),
(10, 'uploads\\69245418Fibrinana foto_170427_0008.jpg', 5),
(11, 'uploads\\85381537Fibrinana foto_170427_0148.jpg', 6),
(12, 'uploads\\184006544Fibrinana foto_170427_0149.jpg', 6),
(13, 'uploads\\127329612Fibrinana foto_170427_0137.jpg', 7),
(14, 'uploads\\200281201Fibrinana foto_170427_0139.jpg', 7),
(15, 'uploads\\96566718Fibrinana foto_170427_0141.jpg', 7),
(16, 'uploads\\115123619Fibrinana foto_170427_0148.jpg', 8),
(17, 'uploads\\236476273Fibrinana foto_170427_0149.jpg', 8),
(18, 'uploads\\177283769Fibrinana foto_170427_0146.jpg', 8),
(19, 'uploads\\222746354Fibrinana foto_170427_0059.jpg', 9),
(20, 'uploads\\5153017Fibrinana foto_170427_0061.jpg', 9),
(21, 'uploads\\233967992Fibrinana foto_170427_0062.jpg', 9),
(22, 'uploads\\222600523Fibrinana foto_170427_0009.jpg', 10),
(23, 'uploads\\83157625Fibrinana foto_170427_0030.jpg', 10),
(24, 'uploads\\229578501Fibrinana foto_170427_0032.jpg', 10),
(25, 'uploads\\75530702Fibrinana foto_170427_0028.jpg', 11),
(26, 'uploads\\51344753Fibrinana foto_170427_0025.jpg', 11),
(27, 'uploads\\184764861Fibrinana foto_170427_0026.jpg', 11),
(28, 'uploads\\39656458Fibrinana foto_170427_0126.jpg', 12),
(29, 'uploads\\105775899Fibrinana foto_170427_0119.jpg', 12),
(30, 'uploads\\34340944Fibrinana foto_170427_0008.jpg', 13),
(31, 'uploads\\158420624Fibrinana foto_170427_0007.jpg', 13),
(32, 'uploads\\148854159Fibrinana foto_170427_0009.jpg', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_subs`
--

CREATE TABLE `tb_subs` (
  `p_id_subs` int(10) UNSIGNED NOT NULL,
  `a_name` varchar(253) NOT NULL,
  `a_place` varchar(253) NOT NULL,
  `a_email` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_subs`
--

INSERT INTO `tb_subs` (`p_id_subs`, `a_name`, `a_place`, `a_email`) VALUES
(1, 'eki', 'bekasi', 'eki.corecrysis@gmail.com'),
(2, 'asd', 'qwe', 'dimssora@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`p_id_category`);

--
-- Indexes for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD PRIMARY KEY (`g_id_gallery`);

--
-- Indexes for table `tb_garmen`
--
ALTER TABLE `tb_garmen`
  ADD PRIMARY KEY (`id_garmen`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`m_id_user`);

--
-- Indexes for table `tb_prod_gallery`
--
ALTER TABLE `tb_prod_gallery`
  ADD PRIMARY KEY (`p_id_product`);

--
-- Indexes for table `tb_subs`
--
ALTER TABLE `tb_subs`
  ADD PRIMARY KEY (`p_id_subs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `p_id_category` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `g_id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_garmen`
--
ALTER TABLE `tb_garmen`
  MODIFY `id_garmen` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `m_id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_prod_gallery`
--
ALTER TABLE `tb_prod_gallery`
  MODIFY `p_id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tb_subs`
--
ALTER TABLE `tb_subs`
  MODIFY `p_id_subs` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
