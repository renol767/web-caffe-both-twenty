-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jun 2021 pada 09.29
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarmenu`
--

CREATE TABLE `daftarmenu` (
  `id` int(100) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftarmenu`
--

INSERT INTO `daftarmenu` (`id`, `nama_menu`, `deskripsi`, `harga`) VALUES
(7, 'minuman', 'ini minuman 2', 0),
(8, 'makanan', 'enak', 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `food`
--

CREATE TABLE `food` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `ingredients` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `picturePath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `food`
--

INSERT INTO `food` (`id`, `name`, `description`, `ingredients`, `price`, `rate`, `picturePath`) VALUES
(1, 'Krabby Patty', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'Roti', '150000', '4.2', 'https://hukumbisnis.net/files/media/9d252f5e0e52820c3d8edb2a828e6155.jpg'),
(2, 'Mi Instan ala Warteg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'Mie Instan', '750000', '4.5', 'https://cdn.popbela.com/content-images/post/20200107/unspecified-1-16-d8add8fa28b7c81243157202f57a74de.jpg'),
(3, 'Baso Jedar Jedor', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'Baso', '105000', '3.9', 'https://asset.kompas.com/crops/4cqVtfcnzOkIBPrE9wysDBeyA0I=/0x288:1041x982/750x500/data/photo/2019/11/06/5dc21a0271555.jpeg'),
(4, 'Sup Wortel Pedas', 'Sup wortel pedas yang unik ini cocok banget buat kalian-kalian yang suka pedas namun ingin tetap sehat. Rasanya yang unik akan memanjakan lidah Anda.', 'Wortel, Seledri, Kacang Tanah, Labu, Garam, Gula', '60000', '4.9', 'https://images.immediate.co.uk/production/volatile/sites/2/2016/08/25097.jpg?quality=90&resize=768,574'),
(5, 'Korean Raw Beef Tartare', 'Daging sapi Korea cincang yang disajikan mentah dan disiram saus spesial dengan toping kuning telur dan taburan biji wijen.', 'Daging Sapi Korea, Telur, Biji Wijen', '350000', '3.4', 'https://cmxpv89733.i.lithium.com/t5/image/serverpage/image-id/478345i84598AB4FEB454CB/image-size/large?v=1.0&px=999');

-- --------------------------------------------------------

--
-- Struktur dari tabel `food_rate`
--

CREATE TABLE `food_rate` (
  `id` int(11) NOT NULL,
  `food_id` int(255) NOT NULL,
  `rates` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `food_rate`
--

INSERT INTO `food_rate` (`id`, `food_id`, `rates`) VALUES
(1, 1, 5),
(2, 1, 2),
(3, 2, 4),
(4, 3, 5),
(5, 3, 5),
(6, 5, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, '0a66838fcbd880483b9af2c91c6cef9e', 1, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `picture`) VALUES
(1, 'Promo Cicilan', 'Syarat & Ketentuan Voucher Cashback\r\n\r\n    Cashback akan diberikan dalam bentuk Voucher Belanja Elektronik pecahan Rp 50.000,-.\r\n    Voucher Belanja Elektronik akan dikirimkan ke alamat email konsumen mulai tanggal 4 Mei 2017 dengan masa berlaku 4-31 Mei 2017.\r\n    Voucher Belanja Elektronik nominal Rp 50.000,- tersebut dapat ditukarkan di Klikindomaret.com dengan minimal belanja Rp 100.000,-.\r\n    Penggunaan Voucher Belanja Elektronik tidak dapat digabungkan dalam 1 transaksi pembelanjaan.\r\n    Voucher Belanja Elektronik tidak dapat digunakan untuk pembelian produk gas elpiji, bright gas, air galon, rokok, susu infant (susu anak dibawah 1 tahun), dan produk produk virtual (pulsa, paket data, voucher game).\r\n    Konsumen harap melakukan input kode Voucher Belanja Elektronik di halaman metode pembayaran kolom ‘voucher belanja’.\r\n    Mohon melakukan review order sebelum melakukan input kode voucher untuk menghindari kegagalan penggunaan kode voucher belanja.\r\n    Untuk kode voucher yang hangus/tidak dapat digunakan kembali karena kesalahan dari pihak konsumen baik itu pembayaran yang terlambat dibayarkan atau adanya cancel order sepenuhnya menjadi tanggung jawab konsumen.\r\n    Klikindomaret sewaktu-waktu berhak mengubah syarat dan ketentuan ini yang akan diinformasikan pada website Klikindomaret.\r\n    Dengan melakukan transaksi di dalam program ini, maka konsumen dianggap mengerti dan menyetujui semua syarat dan ketentuan yang berlaku.\r\n    Jika ditemukan konsumen yang melakukan kecurangan, pihak Klikindomaret berhak mendiskualifikasi secara sepihak.\r\n', 'https://i.pinimg.com/originals/3e/7c/71/3e7c711aa57eb0df282cb873bb3958e7.jpg'),
(2, 'UX Reseachers', 'Syarat & Ketentuan Cashback Rp 50.000,- dan Rp 100.000,-\r\n\r\n    Setiap pembelanjaan produk Tonga Bag dan Batik Semar  minimal Rp 100.000,- di Klikindomaret GRATIS Cashback dengan nilai maksimum Rp 100.000,-.\r\n    Periode promosi 1-30 April 2017.\r\n    Konsumen dapat melakukan transaksi berulang selama periode promosi berlangsung.\r\n    Cashback tidak berlaku untuk cara pembayaran Bayar di tempat / COD (Cash on Delivery).\r\n    Konsumen yang melakukan pembatalan order / retur tidak akan mendapatkan Cashback.\r\n    Cashback tidak berlaku untuk kelipatan dan akumulasi transaksi.\r\n    Hanya berlaku untuk konsumen yang telah melakukan pembayaran LUNAS selama periode promo berlangsung.\r\n    Satu konsumen (dengan alamat kirim dan nomor handphone yang sama) hanya berhak mendapatkan Cashback maksimum Rp 100.000,-.\r\n', 'https://miro.medium.com/max/3602/1*zhmW0OXSVB2WsZU81jwX8w.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_wa` int(20) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(200) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `total_harga` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `push`
--

CREATE TABLE `push` (
  `id` int(200) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction`
--

CREATE TABLE `transaction` (
  `id` int(100) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `food_id` int(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaction`
--

INSERT INTO `transaction` (`id`, `uid`, `food_id`, `quantity`, `total`, `status`, `datetime`) VALUES
(1, 'WjZ87zduK5Sp842TxHDT6Q70SZY2', 1, '4', '1400000', 'Belum Bayar', '2021-06-01 14:24:08'),
(2, 'WjZ87zduK5Sp842TxHDT6Q70SZY2', 2, '1', '60000', 'Complete', '2021-06-01 14:24:08'),
(3, 'WjZ87zduK5Sp842TxHDT6Q70SZY2', 3, '1', '105000', 'Complete', '2021-06-01 14:24:08'),
(5, 'WjZ87zduK5Sp842TxHDT6Q70SZY2', 5, '2', '700000', 'Complete', '2021-06-01 14:24:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin1'),
(4, 'admin', 'c84258e9c39059a89ab77d846ddab909', 'admin2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_information`
--

CREATE TABLE `user_information` (
  `uid` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `numberphone` varchar(255) NOT NULL,
  `numberwhatsapp` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_information`
--

INSERT INTO `user_information` (`uid`, `first_name`, `last_name`, `email`, `address`, `numberphone`, `numberwhatsapp`, `createdAt`) VALUES
('WjZ87zduK5Sp842TxHDT6Q70SZY2', 'Renol', 'NindiKara', 'renol@mail.com', 'Majalengka', '+62123456789', '+62123456789', '2021-05-06 09:51:28');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftarmenu`
--
ALTER TABLE `daftarmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `food_rate`
--
ALTER TABLE `food_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `push`
--
ALTER TABLE `push`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftarmenu`
--
ALTER TABLE `daftarmenu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `food`
--
ALTER TABLE `food`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `food_rate`
--
ALTER TABLE `food_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `push`
--
ALTER TABLE `push`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
