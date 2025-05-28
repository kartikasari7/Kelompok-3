-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Nov 2024 pada 03.17
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: db_toko
--

-- --------------------------------------------------------

--
-- Struktur dari tabel barang
--

CREATE TABLE barang (
  id int(11) NOT NULL,
  id_barang varchar(255) NOT NULL,
  id_kategori int(255) NOT NULL,
  nama_barang text NOT NULL,
  merk varchar(255) NOT NULL,
  harga_beli varchar(255) NOT NULL,
  harga_jual varchar(255) NOT NULL,
  satuan_barang varchar(255) NOT NULL,
  stok text NOT NULL,
  tgl_input varchar(255) NOT NULL,
  tgl_update varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel barang
--

INSERT INTO barang (id, id_barang, id_kategori, nama_barang, merk, harga_beli, harga_jual, satuan_barang, stok, tgl_input, tgl_update) VALUES
(1, 'BR001', 1, 'Serum 10% Niacinamide', 'Hanasui', '27000', '30000', 'PCS', '98', '6 October 2020, 0:41', '18 November 2024, 10:32'),
(2, 'BR002', 2, 'Masker rambut', 'CBD', '54000', '59000', 'PCS', '38', '6 October 2020, 0:41', '6 October 2024, 0:54'),
(3, 'BR003', 3, 'Hand Body', 'Marina', '4500', '7000', 'PCS', '70', '6 October 2020, 1:34', '18 November 2024, 10:25'),
(5, 'BR004', 3, 'Body Scrub', 'Hanasui', '70580', '82974', 'PCS', '79', '2020-10-06 19:00:00', '2024-11-18 23:59:00'),
(6, 'BR005', 2, 'Hair Mask', 'Hanasui', '42323', '61426', 'PCS', '85', '2020-10-07 18:00:00', '2024-11-18 03:18:00'),
(7, 'BR006', 3, 'Body Wash', 'CBD', '63387', '75955', 'PCS', '60', '2020-10-07 18:00:00', '2024-11-18 14:07:00'),
(8, 'BR007', 3, 'Body Lotion', 'Nivea', '79171', '95602', 'PCS', '186', '2020-10-06 05:00:00', '2024-11-18 11:18:00'),
(9, 'BR008', 3, 'Body Wash', 'Wardah', '98638', '115284', 'PCS', '196', '2020-10-06 01:00:00', '2024-11-18 00:16:00'),
(10, 'BR009', 1, 'Toner', 'CBD', '46201', '51190', 'PCS', '133', '2020-10-07 01:00:00', '2024-11-18 00:07:00'),
(11, 'BR010', 1, 'Toner', 'Wardah', '40147', '58768', 'PCS', '146', '2020-10-06 03:00:00', '2024-11-18 23:56:00'),
(12, 'BR011', 1, 'Sunscreen', 'Garnier', '74981', '86706', 'PCS', '126', '2020-10-06 05:00:00', '2024-11-18 07:37:00'),
(13, 'BR012', 1, 'Serum Vitamin C', 'Wardah', '32659', '45481', 'PCS', '108', '2020-10-06 15:00:00', '2024-11-18 15:02:00'),
(14, 'BR013', 3, 'Body Lotion', 'Wardah', '20840', '35559', 'PCS', '42', '2020-10-07 10:00:00', '2024-11-18 15:22:00'),
(15, 'BR014', 1, 'Toner', 'Loreal', '96620', '98306', 'PCS', '199', '2020-10-06 08:00:00', '2024-11-18 22:17:00'),
(16, 'BR015', 3, 'Hand Cream', 'Nivea', '22302', '30559', 'PCS', '168', '2020-10-06 13:00:00', '2024-11-18 02:29:00'),
(17, 'BR016', 2, 'Hair Serum', 'Wardah', '84150', '89611', 'PCS', '148', '2020-10-07 07:00:00', '2024-11-18 03:49:00'),
(18, 'BR017', 2, 'Conditioner', 'Emina', '45471', '47865', 'PCS', '53', '2020-10-06 21:00:00', '2024-11-18 08:48:00'),
(19, 'BR018', 3, 'Foot Cream', 'Marina', '59110', '70626', 'PCS', '52', '2020-10-06 16:00:00', '2024-11-18 15:41:00'),
(20, 'BR019', 2, 'Scalp Treatment', 'Emina', '37260', '46884', 'PCS', '24', '2020-10-06 07:00:00', '2024-11-18 02:18:00'),
(21, 'BR020', 1, 'Sunscreen', 'Hanasui', '69145', '86583', 'PCS', '76', '2020-10-06 05:00:00', '2024-11-18 11:27:00'),
(22, 'BR021', 1, 'Sunscreen', 'Nivea', '19111', '33202', 'PCS', '73', '2020-10-07 05:00:00', '2024-11-18 13:49:00'),
(23, 'BR022', 1, 'Serum Vitamin C', 'Loreal', '21868', '32724', 'PCS', '166', '2020-10-07 00:00:00', '2024-11-18 23:13:00'),
(24, 'BR023', 1, 'Toner', 'Garnier', '17640', '30077', 'PCS', '172', '2020-10-06 16:00:00', '2024-11-18 17:15:00'),
(25, 'BR024', 1, 'Serum Vitamin C', 'Hanasui', '43380', '44961', 'PCS', '197', '2020-10-06 19:00:00', '2024-11-18 19:05:00'),
(26, 'BR025', 1, 'Serum Vitamin C', 'Nivea', '19390', '24501', 'PCS', '191', '2020-10-06 22:00:00', '2024-11-18 15:05:00'),
(27, 'BR026', 3, 'Body Wash', 'Hanasui', '13211', '25138', 'PCS', '29', '2020-10-07 19:00:00', '2024-11-18 17:19:00'),
(28, 'BR027', 2, 'Scalp Treatment', 'Wardah', '66431', '67906', 'PCS', '160', '2020-10-07 03:00:00', '2024-11-18 15:45:00'),
(29, 'BR028', 2, 'Hair Serum', 'Emina', '49620', '51667', 'PCS', '137', '2020-10-06 08:00:00', '2024-11-18 10:12:00'),
(30, 'BR029', 1, 'Sunscreen', 'Wardah', '59189', '74688', 'PCS', '120', '2020-10-06 07:00:00', '2024-11-18 10:31:00'),
(31, 'BR030', 1, 'Serum Vitamin C', 'Nivea', '10330', '29141', 'PCS', '164', '2020-10-06 18:00:00', '2024-11-18 13:39:00'),
(32, 'BR031', 1, 'Moisturizer', 'Marina', '58675', '74848', 'PCS', '193', '2020-10-07 13:00:00', '2024-11-18 16:29:00'),
(33, 'BR032', 1, 'Serum Vitamin C', 'Hanasui', '41619', '51914', 'PCS', '79', '2020-10-06 08:00:00', '2024-11-18 10:43:00'),
(34, 'BR033', 3, 'Foot Cream', 'Garnier', '71580', '79960', 'PCS', '71', '2020-10-06 17:00:00', '2024-11-18 19:35:00'),
(35, 'BR034', 3, 'Body Lotion', 'Loreal', '32590', '52236', 'PCS', '137', '2020-10-07 14:00:00', '2024-11-18 19:16:00'),
(36, 'BR035', 1, 'Moisturizer', 'Hanasui', '21786', '31090', 'PCS', '147', '2020-10-06 12:00:00', '2024-11-18 22:46:00'),
(37, 'BR036', 3, 'Hand Cream', 'Nivea', '50117', '68987', 'PCS', '80', '2020-10-06 11:00:00', '2024-11-18 10:19:00'),
(38, 'BR037', 2, 'Shampoo', 'Garnier', '32995', '50151', 'PCS', '36', '2020-10-08 00:00:00', '2024-11-18 14:42:00'),
(39, 'BR038', 3, 'Body Scrub', 'Nivea', '39716', '46327', 'PCS', '177', '2020-10-06 06:00:00', '2024-11-18 22:33:00'),
(40, 'BR039', 2, 'Scalp Treatment', 'Nivea', '93010', '108062', 'PCS', '61', '2020-10-06 22:00:00', '2024-11-18 00:22:00'),
(42, 'BR041', 1, 'Moisturizer', 'Garnier', '7018', '9763', 'PCS', '12', '2020-10-06 21:00:00', '2024-11-18 12:57:00'),
(43, 'BR042', 2, 'Hair Mask', 'Garnier', '25292', '44706', 'PCS', '97', '2020-10-06 01:00:00', '2024-11-18 13:22:00'),
(44, 'BR043', 3, 'Body Wash', 'Hanasui', '52482', '57339', 'PCS', '147', '2020-10-07 10:00:00', '2024-11-18 15:44:00'),
(45, 'BR044', 2, 'Shampoo', 'Loreal', '40051', '47577', 'PCS', '123', '2020-10-06 09:00:00', '2024-11-18 06:27:00'),
(46, 'BR045', 1, 'Sunscreen', 'Garnier', '8583', '10138', 'PCS', '152', '2020-10-07 17:00:00', '2024-11-18 05:49:00'),
(47, 'BR046', 1, 'Moisturizer', 'Loreal', '68737', '85562', 'PCS', '110', '2020-10-07 11:00:00', '2024-11-18 21:26:00'),
(49, 'BR048', 2, 'Scalp Treatment', 'Wardah', '68240', '76681', 'PCS', '184', '2020-10-07 01:00:00', '2024-11-18 22:15:00'),
(50, 'BR049', 1, 'Serum Vitamin C', 'Garnier', '8507', '14382', 'PCS', '73', '2020-10-07 02:00:00', '2024-11-18 22:46:00'),
(51, 'BR050', 1, 'Facial Wash', 'Emina', '58122', '61563', 'PCS', '167', '2020-10-07 09:00:00', '2024-11-18 20:33:00'),
(56, 'BR054', 1, 'Sunscreen', 'Loreal', '141000', '150000', 'PCS', '19', '19 November 2024, 22:06', '19 November 2024, 22:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel kategori
--

CREATE TABLE kategori (
  id_kategori int(11) NOT NULL,
  nama_kategori varchar(255) NOT NULL,
  tgl_input varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel kategori
--

INSERT INTO kategori (id_kategori, nama_kategori, tgl_input) VALUES
(1, 'Skincare', '7 May 2024, 10:23'),
(2, 'Haircare', '7 May 2024, 10:28'),
(3, 'Bodycare', '6 October 2024, 0:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel login
--

CREATE TABLE login (
  id_login int(11) NOT NULL,
  user varchar(255) NOT NULL,
  pass char(32) NOT NULL,
  id_member int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel login
--

INSERT INTO login (id_login, user, pass, id_member) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel member
--

CREATE TABLE member (
  id_member int(11) NOT NULL,
  nm_member varchar(255) NOT NULL,
  alamat_member text NOT NULL,
  telepon varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  gambar text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel member
--

INSERT INTO member (id_member, nm_member, alamat_member, telepon, email, gambar) VALUES
(1, 'Kelompok 2', 'uj harapan', '081234567890', 'example@gmail.com', '1732014460Classy Colorful Outfits.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel nota
--

CREATE TABLE nota (
  id_nota int(11) NOT NULL,
  id_barang varchar(255) NOT NULL,
  id_member int(11) NOT NULL,
  jumlah varchar(255) NOT NULL,
  total varchar(255) NOT NULL,
  tanggal_input varchar(255) NOT NULL,
  periode varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel nota
--

INSERT INTO nota (id_nota, id_barang, id_member, jumlah, total, tanggal_input, periode) VALUES
(1, 'BR054', 1, '1', '150000', '19 November 2024, 22:09', '11-2024'),
(2, 'BR012', 1, '1', '45481', '19 November 2024, 22:09', '11-2024'),
(3, 'BR023', 1, '1', '30077', '19 November 2024, 22:24', '11-2024'),
(4, 'BR044', 1, '1', '47577', '19 November 2024, 22:24', '11-2024'),
(5, 'BR023', 1, '1', '30077', '19 November 2024, 22:24', '11-2024'),
(6, 'BR044', 1, '1', '47577', '19 November 2024, 22:24', '11-2024'),
(7, 'BR014', 1, '1', '98306', '20 November 2024, 9:04', '11-2024');

-- --------------------------------------------------------

--
-- Struktur dari tabel penjualan
--

CREATE TABLE penjualan (
  id_penjualan int(11) NOT NULL,
  id_barang varchar(255) NOT NULL,
  id_member int(11) NOT NULL,
  jumlah varchar(255) NOT NULL,
  total varchar(255) NOT NULL,
  tanggal_input varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel toko
--

CREATE TABLE toko (
  id_toko int(11) NOT NULL,
  nama_toko varchar(255) NOT NULL,
  alamat_toko text NOT NULL,
  tlp varchar(255) NOT NULL,
  nama_pemilik varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel toko
--

INSERT INTO toko (id_toko, nama_toko, alamat_toko, tlp, nama_pemilik) VALUES
(1, 'Elvée', 'Jl. Cantika', '081234567890', 'Kelompok 3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel barang
--
ALTER TABLE barang
  ADD PRIMARY KEY (id);

--
-- Indeks untuk tabel kategori
--
ALTER TABLE kategori
  ADD PRIMARY KEY (id_kategori);

--
-- Indeks untuk tabel login
--
ALTER TABLE login
  ADD PRIMARY KEY (id_login);

--
-- Indeks untuk tabel member
--
ALTER TABLE member
  ADD PRIMARY KEY (id_member);

--
-- Indeks untuk tabel nota
--
ALTER TABLE nota
  ADD PRIMARY KEY (id_nota);

--
-- Indeks untuk tabel penjualan
--
ALTER TABLE penjualan
  ADD PRIMARY KEY (id_penjualan);

--
-- Indeks untuk tabel toko
--
ALTER TABLE toko
  ADD PRIMARY KEY (id_toko);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel barang
--
ALTER TABLE barang
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel kategori
--
ALTER TABLE kategori
  MODIFY id_kategori int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel login
--
ALTER TABLE login
  MODIFY id_login int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel member
--
ALTER TABLE member
  MODIFY id_member int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel nota
--
ALTER TABLE nota
  MODIFY id_nota int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel penjualan
--
ALTER TABLE penjualan
  MODIFY id_penjualan int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel toko
--
ALTER TABLE toko
  MODIFY id_toko int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;