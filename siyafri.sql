-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 25 Jul 2022 pada 00.17
-- Versi server: 5.7.33
-- Versi PHP: 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siyafri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `amfibi`
--

CREATE TABLE `amfibi` (
  `id_amfibi` int(11) NOT NULL,
  `id_pengurus` int(11) DEFAULT NULL,
  `id_anggota` varchar(255) DEFAULT NULL,
  `id_provinsi` char(2) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nama_latin` varchar(255) DEFAULT NULL,
  `family` varchar(255) DEFAULT NULL,
  `persebaran` varchar(255) DEFAULT NULL,
  `kabupaten_kecamatan` varchar(255) DEFAULT NULL,
  `gambar1` varchar(255) DEFAULT NULL,
  `gambar2` varchar(255) DEFAULT NULL,
  `gambar3` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `amfibi`
--

INSERT INTO `amfibi` (`id_amfibi`, `id_pengurus`, `id_anggota`, `id_provinsi`, `nama`, `nama_latin`, `family`, `persebaran`, `kabupaten_kecamatan`, `gambar1`, `gambar2`, `gambar3`, `deskripsi`, `created_at`, `updated_at`) VALUES
(22, NULL, NULL, NULL, 'Kodok sawahh', 'Dendroaspis polylepis', 'Trimeresurus', 'JAWA BARAT12', NULL, 'app/amfibi/1657546838-jTfso.jpg', 'app/amfibi/1657546839-z5VJu.jpg', 'app/amfibi/1657546839-stBuI.jpg', 'KODOK', '2022-07-11 06:40:39', '2022-07-24 08:18:49'),
(23, NULL, NULL, NULL, 'kodok borneo', 'Dendroaspis polylepis', 'Trimeresurus', 'KALIMANTAN BARAT', 'Bengkayang', 'app/amfibi/1657598229-CDxIL.jpg', 'app/amfibi/1657598229-DdV75.jpg', NULL, NULL, '2022-07-11 20:57:09', '2022-07-11 20:57:09'),
(24, NULL, 'erwindaputri@gmail.com', NULL, 'kodok', 'Dendroaspis polylepis', NULL, 'SUMATERA UTARA', 'PAPUA, JAWA, KALIMANTAN', 'app/amfibi/1657614271-I1kXD.jpg', 'app/amfibi/1657614271-CPnrz.jpg', 'app/amfibi/1657614271-uHwJG.jpg', NULL, '2022-07-12 01:24:31', '2022-07-12 01:24:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `no_hp_anggota` varchar(15) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `konfirmasi_password` varchar(255) DEFAULT NULL,
  `status` int(6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`no_hp_anggota`, `username`, `email`, `foto`, `password`, `konfirmasi_password`, `status`, `created_at`, `updated_at`) VALUES
('085753291121', 'erwinda', 'winda1@gmail.com', 'app/anggota/1657687186-0kRWx.jpg', NULL, '123', 1, '2022-07-12 21:39:46', '2022-07-12 21:39:46'),
('085753291181', 'saya', 'saya@gmail.com', 'app/anggota/1657549138-Sxb2S.png', NULL, '123', 2, '2022-07-11 07:18:58', '2022-07-24 15:30:06'),
('0895613492433', 'meong@gmail.com', 'meong@gmail.com', 'app/anggota/1657209414-1m6kW.jpg', NULL, 'meong@gmail.com', 1, '2022-07-07 08:56:54', '2022-07-07 08:56:54'),
('0895613492435', 'erwindaputri@gmail.com', 'erwindaputri@gmail.com', 'app/anggota/1657207970-syqwL.jpg', '$2y$10$8AXxMHP3BUaBKF6J2zx24ujrsy8mu5ZXrqAVDc.rdVhymvd9LN0P6', 'erwindaputri@gmail.com', 2, '2022-07-07 08:32:50', '2022-07-07 15:51:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_pengurus` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_pengurus`, `judul`, `gambar`, `deskripsi`, `created_at`, `updated_at`) VALUES
(12, NULL, '6tahun Yayasan Amfibi Reptil Indonesia MERDEKA JAYA JAYA SELALU', 'app/seminar/1657290912-zDhFA.jpg', 'Hallo sobat AFRI dalam rangka 6tahun Yayasan Amfibi Reptil Indonesia, kali ini kami bersama mitra kami @politekniknegeriketapang sedang membuat sistem informasi yang dapat memudahkan masyarakat dalam menggali informasi serta mencari bantuan.1', '2022-07-09 06:58:06', '2022-07-08 23:58:06'),
(14, NULL, 'Gathring Rutin Bulanan', 'app/seminar/1657291226-CvQOd.jpg', 'Hallo guys, hari ini Yayasan Amfibi Reptil Indonesia kembali melaksanakan gathring rutin bulanan dalam rangka mengedukasi masyarakat setempat.', '2022-07-08 14:40:26', '2022-07-08 07:40:26'),
(15, NULL, 'Gath', 'app/seminar/1657290877-BesjQ.jpg', 'Hallo AFRIER seru ya tadi sore dapat berinteraksi langsung bersama hewan exotic.\r\n\r\nJangan lupa datang kembali pada gath kita sebelum bulan ramadhan yaa.', '2022-07-08 14:34:37', '2022-07-08 07:34:37'),
(16, NULL, 'Gath di Taman Tanjungpura', 'app/seminar/1657291261-QkcGD.jpg', 'Hai sahabat AFRIER yuk sore ini ramekan Taman Tanjungpura yang bertempat di Ketapang, Kalimantan Barat', '2022-07-08 14:41:01', '2022-07-08 07:41:01'),
(17, NULL, 'Giat Diksar Fan', 'app/seminar/1657291072-FIuoD.jpg', 'Hari ini kami diminta melakukan giat diksar fan penerimaan pengurus baru oleh @dpdafriketapang dan @dpdafrikayong\r\n\r\nKegiatan ini sebagai salah satu pemantapan bagi calon pengurus sebelum mereka di terima sebagai bagian dari keluarga AFRIER yang akan diterjunkan di lapangan.', '2022-07-08 14:37:52', '2022-07-08 07:37:52'),
(18, NULL, 'Membagikan masker secara gratis', 'app/seminar/1657291174-dSNvO.jpg', 'Minggu, 15 September 2019 Amfibi Reftil Indonesia Regional Landak berhasil membagikan sedikitnya 500 masker secara gratis dan mengkampanyekan pencegahan kebakaran hutan', '2022-07-08 14:39:34', '2022-07-08 07:39:34'),
(19, NULL, 'manfaat sayur', NULL, NULL, '2022-07-08 20:56:42', '2022-07-08 20:56:42'),
(20, NULL, 'manfaat sayur', NULL, NULL, '2022-07-08 20:57:37', '2022-07-08 20:57:37'),
(21, NULL, 'Manfaat sayur organik1234', NULL, NULL, '2022-07-09 03:59:22', '2022-07-08 20:59:22'),
(22, NULL, 'manfaat sayur', NULL, NULL, '2022-07-08 23:56:14', '2022-07-08 23:56:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ebook`
--

CREATE TABLE `ebook` (
  `id_ebook` int(6) NOT NULL,
  `id_pengurus` int(11) DEFAULT NULL,
  `nama_ebook` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ebook`
--

INSERT INTO `ebook` (`id_ebook`, `id_pengurus`, `nama_ebook`, `gambar`, `file`, `created_at`, `updated_at`) VALUES
(11, NULL, 'Sejarah Afri', 'app/kerjasama/1658680211-cLQxM.png', 'app/kerjasama/1658680211-CubD4.pdf', '2022-07-24 09:30:11', '2022-07-24 16:45:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus`
--

CREATE TABLE `pengurus` (
  `id_pengurus` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengurus`
--

INSERT INTO `pengurus` (`id_pengurus`, `username`, `foto`, `password`, `created_at`, `updated_at`) VALUES
(1, 'indra bin slamet1', 'app/pengurus/1656400985-eoft0.png', '$2y$10$nFy3m91OfjzcBDvE8gMYWuBWcYsxYHuIh/3HoZnn7LDSz8mIvFe6y', '2022-06-28 00:23:05', '2022-07-05 21:46:42'),
(2, 'fitri paripurna', 'app/pengurus/1656401085-EJoct.png', '$2y$10$nzwnEUHyRFEMlg3dQzjnFeZ0B9pCIvKtyYkpe0W/p2eleZDR2zRFa', '2022-06-28 00:24:45', '2022-06-28 00:24:45'),
(6, 'vini dawvi', 'app/pengurus/1656439075-gyOwb.png', '$2y$10$8hFuMb3C6lV9dVd/6i/isezzlb8SsABfUUWQoSLZwpJrltpso0mGi', '2022-06-28 10:57:55', '2022-07-09 03:17:10'),
(7, 'pengurus', 'app/pengurus/1658706438-eNwx6.png', '$2y$10$Zrm521Av60KkAOU7DFT7eOG5fWwYCbayu2R9WRkgpoC6JRdVRIByW', '2022-07-24 16:47:18', '2022-07-24 16:47:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `id_pengurus` int(11) DEFAULT NULL,
  `nama_file` varchar(255) DEFAULT NULL,
  `file_data` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `id_pengurus`, `nama_file`, `file_data`, `created_at`, `updated_at`) VALUES
(2, NULL, 'sejarah afri', 'app/profil/SEJARAH AFRI.pdf-1656082424mgurIjDeor.pdf', '2022-06-24 07:53:44', '2022-07-11 10:37:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id`, `name`) VALUES
('11', 'ACEH'),
('12', 'SUMATERA UTARA'),
('13', 'SUMATERA BARAT'),
('14', 'RIAU'),
('15', 'JAMBI'),
('16', 'SUMATERA SELATAN'),
('17', 'BENGKULU'),
('18', 'LAMPUNG'),
('19', 'KEPULAUAN BANGKA BELITUNG'),
('21', 'KEPULAUAN RIAU'),
('31', 'DKI JAKARTA'),
('32', 'JAWA BARAT'),
('33', 'JAWA TENGAH'),
('34', 'DI YOGYAKARTA'),
('35', 'JAWA TIMUR'),
('36', 'BANTEN'),
('51', 'BALI'),
('52', 'NUSA TENGGARA BARAT'),
('53', 'NUSA TENGGARA TIMUR'),
('61', 'KALIMANTAN BARAT'),
('62', 'KALIMANTAN TENGAH'),
('63', 'KALIMANTAN SELATAN'),
('64', 'KALIMANTAN TIMUR'),
('65', 'KALIMANTAN UTARA'),
('71', 'SULAWESI UTARA'),
('72', 'SULAWESI TENGAH'),
('73', 'SULAWESI SELATAN'),
('74', 'SULAWESI TENGGARA'),
('75', 'GORONTALO'),
('76', 'SULAWESI BARAT'),
('81', 'MALUKU'),
('82', 'MALUKU UTARA'),
('91', 'PAPUA BARAT'),
('94', 'PAPUA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reptil`
--

CREATE TABLE `reptil` (
  `id_reptil` int(11) NOT NULL,
  `id_pengurus` int(11) DEFAULT NULL,
  `Id_anggota` varchar(16) DEFAULT NULL,
  `id_provinsi` char(2) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nama_latin` varchar(255) DEFAULT NULL,
  `family` varchar(255) DEFAULT NULL,
  `status_berbisa` enum('Ya','Tidak') DEFAULT NULL,
  `persebaran` varchar(255) DEFAULT NULL,
  `kabupaten_kecamatan` varchar(255) DEFAULT NULL,
  `gambar1` varchar(255) DEFAULT NULL,
  `gambar2` varchar(255) DEFAULT NULL,
  `gambar3` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `reptil`
--

INSERT INTO `reptil` (`id_reptil`, `id_pengurus`, `Id_anggota`, `id_provinsi`, `nama`, `nama_latin`, `family`, `status_berbisa`, `persebaran`, `kabupaten_kecamatan`, `gambar1`, `gambar2`, `gambar3`, `deskripsi`, `created_at`, `updated_at`) VALUES
(3, 0, NULL, '', 'Ular Karung Belang1', 'Acrochordus granulatus', 'Acrochordus', NULL, NULL, NULL, 'app/reptil/1656416576-uyyhB.jpg', NULL, NULL, 'Kontribusi pada ekosistem : Menjaga keseimbangan populasi ikan dan belut\r\n\r\nBahaya bagi manusia: Ular ini dapat memberikan gigitan yang kuat jika diprovokasi atau digganggu, gigi bengkok yang dimiliki ular ini juga dapat ditinggal menancap di korbannya, yang dapat memberikan pengalaman menyakitkan\r\n\r\nStatus konservasi dan ancaman : Ular ini tidak memiliki masalah konservasi di indonesia, namun ular ini sering diperjual belikan untuk tujuan sebgai hewan peliharaan\r\n\r\nPersebaran : Ambon, Flores, Irian Jaya, Jawa, Jobi, Schouten, Sulawesi, Sumatera, Ternate, Timor, Kami, Komodo\r\n\r\nUlar ini berbeda dengan A.arafurae dan A.javanicus, yang hanya dapat hidup di air tawar, ular ini memiliki toleransi terhadap kadar garam di air sehingga dapat ditemukan di perairan payau seperti pesisiran pantai, hutan bakau, rumput lamun dan muara, ular ini juga dapat ditemukan di sungai, kali, rawa-rawa dan badan air lainnya.\r\n\r\nUlar ini menghabiskan seluruh hidupnya di air, dapat ditemukan pada kedalaman hingga 20m, dimana ia berbagi habitatnya dengan ular laut asli (Hydrophiidae), namun mereka lebih sering ditemukan di perairan dangkal karena mereka perlu sering ke permukaan untuk mengambil udara.\r\n\r\nSpesies ini merupakan ular dari marga Acrochordus terkecil, serta memiliki pola paling khas pada tubuhnya. Badan ular ini kasar dan longgar, biasanya abu-abu-coklat,biru atau hitam-abu-abu dengan belang-belang kuning atau putih, sangat kelihatan pada individu muda dan mungkin dapat hilang saat mencapai umur dewasa.\r\n\r\nUlar ini aktif pada malam hari dan sebelum pagi, dimana ia memangsa pada berbagai macam ikan seperti kerapu dan ikan gobi, belut, kepiting dan ular lain menggunakan kulit kasar yang membantunya menangkap mangsa ikan. Karena habitat dan pola pada tubuh ular ini, ia sering dibingungkan dengan Ular Laut asli. Ular induk melahirkan 5 - 10 individu yang berukuran 22cm.', '2022-06-28 04:42:56', '2022-07-08 18:19:37'),
(6, NULL, NULL, NULL, 'Ular Hijau Ekor Merah', 'Fejervarya cancrivora', NULL, 'Ya', 'NUSA TENGGARA BARAT', NULL, 'app/reptil/1657547035-GFNil.jpg', NULL, NULL, NULL, '2022-07-11 06:43:55', '2022-07-11 06:43:55'),
(10, 1, NULL, NULL, 'Ular weling', NULL, NULL, NULL, NULL, NULL, 'app/reptil/1658687551-j79Em.jpg', NULL, NULL, 'Nama ular berbisa ini sedikit mirip ular yang telah dijelaskan karena ular weling memang masih satu jenis dengan ular welang.\r\n\r\nUlar weling atau Bungarus candidus juga termasuk ular spesies lokal yang banyak ditemukan di Pulau Jawa.\r\n\r\nBerbeda dengan ular welang, ular weling ini cenderung memiliki tubuh yang lebih kecil karena panjangnya hanya bisa mencapai 1 meter.\r\n\r\nWarna tubuhnya pun tidak sama, tetapi hampir mirip, yakni memiliki pola lingkaran hitam dan putih berseling.\r\n\r\nMengutip Jurnal Fakultas MIPA Universitas Sriwijaya, ular weling ini dapat dijumpai pada habitat setengah perairan, sawah, sungai, dan daerah berair lainnya.\r\n\r\nNamun, ular ini juga dapat dijumpai pada daerah dataran rendah dan daerah dataran tinggi hingga 1200 mdpl, dan memdiami berbagai habitat termasuk hutan tropis basah dan kering, hutan pegunungan tropis, hutan bakau, semak belukar, perkebunan, dan daerah perumahan.\r\n\r\nUlar weling lebih aktif di malam hari atau nokturnal dan biasanya mereka bertahan hidup dengan memakan ikan, katak, dan hewan kecil di air.', '2022-07-24 11:32:31', '2022-07-24 11:32:31'),
(11, 1, NULL, NULL, 'Ular welang', NULL, NULL, NULL, 'Pulau Jawa', NULL, 'app/reptil/1658687871-EhagS.jpg', NULL, NULL, 'Ular berbisa yang pertama dan biasa ditemui di Indonesia, yakni ular welang (Bungarus fasciatus). Ular berbisa yang satu ini memiliki ciri warna tubuh kuning dan hitam atau putih dan hitam.\r\n\r\nTak main-main, ular welang bisa tumbuh hingga mencapai 2,25 meter, lho. Spesies ular ini memiliki persebaran alami di Pulau Jawa sehingga dapat disebut spesies lokal.\r\n\r\nMengutip Jurnal Fakultas Biologi Universitas Gadjah Mada, ular welang sangat banyak dijumpai di daerah dataran rendah dengan habitat wilayah sedikit berhutan, sekitar rawa, sawah, dan sungai dekat dengan pemukiman warga.\r\n\r\nUlar welang lebih aktif di malam hari dan saat siang hari, mereka lebih banyak bersembunyi di lubang bawah tanah, seperti lubang bekas tikus.', '2022-07-24 11:37:51', '2022-07-24 11:37:51'),
(12, 1, NULL, NULL, 'Ular kobra Jawa', NULL, NULL, NULL, 'Pulau Jawa', NULL, 'app/reptil/1658687999-qQPqh.jpg', NULL, NULL, 'Ular berbisa lainnya yang perlu diwaspadai adalah ular kobra jawa (Naja sputatrix). Kobra jawa biasanya berwarna hitam kecoklatan dan cenderung hidup di atas tanah.\r\n\r\nKetika menggigit mangsanya, ular jenis ini akan menyuntikkan bisa melalui taringnya, kemudian bisa tersebut akan masuk ke dalam pembuluh darah lawannya.\r\n\r\nSelain melalui gigitan, ular kobra yang sangat berbahaya ini dapat menyerang mangsa dengan cara menyemprotkan bisa.\r\n\r\nBagian moncong ular tersebut tumpul dan berwarna keputihan. Kobra jawa juga memiliki bentuk gigi taring yang kecil dengan ujung taring yang pendek.\r\n\r\nUlar kobra jawa dapat mencapai panjang 1,2 meter dan semprotan bisanya mampu menjangkau jarak hingga 2 meter.\r\n\r\nSering kali, ular ini menyemprotkan bisa ke bagian wajah mangsa sehingga dapat membuat targetnya mengalami kebutaan.\r\n\r\nDalam kondisi terancam, ular kobra akan mengembangkan leher dan menegakkan badannya, kemudian siap menyemprotkan bisa kepada lawannya.', '2022-07-24 11:39:20', '2022-07-24 11:39:59'),
(13, 1, NULL, NULL, 'Ular kobra Sumatra', NULL, NULL, 'Ya', NULL, NULL, 'app/reptil/1658688267-IjfkK.jpg', NULL, NULL, 'Ular kobra lainnya yang juga termasuk dalam spesies lokal Indonesia adalah ular kobra sumatra (Naja sumatrana).\r\n\r\nCiri-ciri ular kobra sumatra antara lain tubuh tebal, ekor pendek, kepala elips dan tertekan yang sedikit berbeda dari leher, dengan moncong pendek bulat dan lubang hidung besar.\r\n\r\nSpesies berdarah dingin ini umumnya mendiami kawasan hutan di dataran rendah dan pertengahan perbukitan. Selain itu, ditemukan di perkebunan kelapa sawit, sawah, dan kebun. Bahkan terkadang, memasuki tempat tinggal manusia di kota-kota dan desa-desa yang terletak di dekat tepi hutan.\r\n\r\nSecara alami, ular kobra sumatra bukanlah makhluk yang agresif. Namun, ular berbisa ini akan dengan mudah menyemburkan racun saat merasa dirinya terancam.\r\n\r\nLudah atau bisa yang disemprotkannya mengandung racun neurotoksik dengan zat yang dapat merusak jaringan saraf dan mematikan sel-sel individu.\r\n\r\nRacun bisa menyebabkan kerusakan serius jika masuk ke mata, lubang hidung atau luka kulit. Racun yang disemprotkan ke mata korban dapat menyebabkan kerusakan permanen pada jaringan di sekitar mata yang dapat menyebabkan kebutaan jika tidak ditangani.\r\n\r\nKobra sumatra juga bisa menyerang dengan cara menggigit mangsanya saat merasa terancam. Gigitannya langsung bisa berakibat fatal bagi korban.', '2022-07-24 11:44:27', '2022-07-24 11:44:27'),
(14, 1, NULL, NULL, 'Ular tanah', 'Calloselasma rhodostoma', NULL, NULL, NULL, NULL, 'app/reptil/1658688405-YuxIo.jpg', NULL, NULL, 'Ular berbisa lainnya yang memiliki potensi bahaya besar sehingga perlu diwaspadai, yakni ular tanah (Calloselasma rhodostoma).\r\n\r\nUlar tanah menyebar di wilayah Pulau Jawa. Ular ini juga diketahui dengan nama-nama lokal seperti Bandotan bedor, oray lemah, oray gibug, atau ular edor.\r\n\r\nSeperti namanya, ular tanah ini memiliki warna tubuh cokelat kemerahan dengan beberapa corak hitam di bagian punggung. Mereka memiliki tubuh yang cukup gemuk dan pendek karena panjang tubuh rata-ratanya hanya mencapai 76 cm.\r\n\r\nUlar tanah termasuk dalam predator penyergap, mereka diam melingkar di tanah atau di atas serasah menunggu mangsanya lewat di dekatnya.\r\n\r\nBiasanya, ular tanah menghuni hutan belukar, semak-semak, atau lahan pertanian yang kurang terurus. Terkadang, juga ditemukan pada wilayah pemukiman.\r\n\r\nUlar ini memangsa hewan pengerat, burung, kadal, atau kodok dan cenderung aktif di malam hari (nokturnal).\r\n\r\nGigitan ular tanah bisa sangat menyakitkan, menimbulkan pembengkakan, dan kadang-kadang terjadi kematian jaringan (gangreen, nekrosis). Meskipun gigitan fatal jarang terjadi, tetapi korbannya sering kali mengalami kerusakan atau disfungsi anggota badan, bahkan harus diamputasi.', '2022-07-24 11:46:33', '2022-07-24 11:46:45'),
(15, 1, NULL, NULL, 'Ular kobra', NULL, NULL, 'Ya', NULL, NULL, 'app/reptil/1658688458-rFdb2.jpg', NULL, NULL, 'Jenis ular kobra yang mendiami kawasan Indonesia terbagi ke dalam dua spesies, yakni ular kobra Jawa (Naja sputatrix) dan ular kobra Sumatra (Naja sumatrana).\r\n\r\nUlar kobra juga memiliki nama lain, yakni ular sendok dikarenakan perilakunya yang akan mengangkat dan memipihkan bagian leher saat merasa terancam.\r\n\r\nJenis ular berbisa ini bukan hanya menggigit untuk menyebarkan bisanya yang berbahaya. Namun juga, memiliki kemampuan untuk menyemprotkan bisa hingga jarak lebih dari 2 meter, lho.', '2022-07-24 11:47:38', '2022-07-24 11:47:38'),
(16, 1, NULL, NULL, 'Ular kepala dua', NULL, NULL, NULL, NULL, NULL, 'app/reptil/1658688518-b52yI.jpg', NULL, NULL, 'Nama unik dari ular kepala dua (Cylindrophis ruffus) didapatkan dari bentuk ekornya yang tumpul dan pendek, serta memiliki bentuk mirip seperti kepalanya.\r\n\r\nJenis ular di Indonesia yang mendiami wilayah dataran rendah ini merupakan jenis ular tidak berbisa, sehingga tidak berbahaya bagi manusia.\r\n\r\nTubuhnya dominan berwarna hitam dan corak merah. Sayangnya ular kepala dua sering tertukar dengan ular cabai (Calliophis intestinalis), dikarenakan ekornya yang sama-sama berwarna merah, nih.', '2022-07-24 11:48:38', '2022-07-24 11:48:38'),
(17, 1, NULL, NULL, 'Ular sapi', NULL, NULL, NULL, NULL, NULL, 'app/reptil/1658688597-SOnuG.jpg', NULL, NULL, 'Salah satu jenis ular tikus yang umum ditemui adalah ular sapi (Coelognathus radiatus). Sesuai namanya, tikus menjadi salah satu makanan utama dari ular sapi yang mendiami wilayah persawahan.\r\n\r\nUlar sapi cenderung memiliki tingkah laku yang agresif ketika diganggu, seperti memipihkan leher, melengkungkan tubuh seperti huruf \"S\", dan membuka mulutnya.\r\n\r\nWalaupun tergolong ke dalam jenis ular tidak berbisa, namun air liur ular sapi memiliki kandungan bakteri yang bisa menyebabkan infeksi pada bekas gigitannya.', '2022-07-24 11:49:57', '2022-07-24 11:49:57'),
(18, 1, NULL, NULL, 'Ular kawat', NULL, NULL, NULL, NULL, NULL, 'app/reptil/1658688656-4SxgV.jpg', 'app/reptil/1658688656-CTTEN.jpg', NULL, 'Secara bentuk dan ukuran, ular kawat (Indotyphlops braminus) ini malah menyerupai cacing. Di mana ukuran tubuhnya maksimal 23 centimeter dengan tubuh berwarna kemerahan hingga hitam.\r\nJenis ular yang sangat kecil ini tentu tidak berbahaya bagi manusia. Ular yang cenderung buta ini pun mendapat makanan berupa telur semut, rayap, serangga kecil, dan cacing.\r\n\r\nHal unik dari ular kawat adalah semua individunya adalah betina dan bereproduksi secara aseksual.', '2022-07-24 11:50:56', '2022-07-24 11:50:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trip`
--

CREATE TABLE `trip` (
  `id_trip` int(11) NOT NULL,
  `id_pengurus` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `trip`
--

INSERT INTO `trip` (`id_trip`, `id_pengurus`, `judul`, `gambar`, `deskripsi`, `created_at`, `updated_at`) VALUES
(6, NULL, 'Kunjungan', 'app/trip/1657563476-RYWSq.jpg', NULL, '2022-07-09 03:23:06', '2022-07-11 11:17:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `foto`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'admin cantik', 'app/user/1656404241-WKtro.png', '$2y$10$YOKzDeao9ogQLFYGDnfT2uVSQET0dtYGdYeg/grIWklIfM83EJ6wq', NULL, '2022-06-28 01:17:21', '2022-06-28 01:17:21'),
(8, 'siti latifah', 'app/user/1656414624-DUzcJ.png', '$2y$10$T/uFlj7nAg7nUPuYjwQAae4Y0wN/AQEiS7ckvsJ4IlynFAhFxaTwK', NULL, '2022-06-28 04:10:24', '2022-06-28 04:10:24'),
(11, 'sasq', 'app/user/1657085572-hCrUR.png', '$2y$10$1Ggf5TI29KhXzsaWaFgiSOfdfmBZHNKaYgKQb5r0hKEaEVrUxCipy', NULL, '2022-07-05 22:32:53', '2022-07-08 18:34:13'),
(12, 'admin', 'app/user/1658706381-RoklV.png', '$2y$10$eBEHs/lK8ICSYv.E7njytegWFME9p/5Gc6hQUFu0gEZ0vOvDOY2Ca', NULL, '2022-07-24 16:46:21', '2022-07-24 16:46:21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `amfibi`
--
ALTER TABLE `amfibi`
  ADD PRIMARY KEY (`id_amfibi`),
  ADD KEY `id_user` (`id_pengurus`),
  ADD KEY `id_provinsi` (`id_provinsi`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`no_hp_anggota`) USING BTREE;

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `ebook`
--
ALTER TABLE `ebook`
  ADD PRIMARY KEY (`id_ebook`),
  ADD KEY `id_pengurus` (`id_pengurus`);

--
-- Indeks untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `reptil`
--
ALTER TABLE `reptil`
  ADD PRIMARY KEY (`id_reptil`),
  ADD KEY `id_user` (`id_pengurus`),
  ADD KEY `id_provinsi` (`id_provinsi`),
  ADD KEY `Id_anggota` (`Id_anggota`);

--
-- Indeks untuk tabel `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`id_trip`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `amfibi`
--
ALTER TABLE `amfibi`
  MODIFY `id_amfibi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `ebook`
--
ALTER TABLE `ebook`
  MODIFY `id_ebook` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id_pengurus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `reptil`
--
ALTER TABLE `reptil`
  MODIFY `id_reptil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `trip`
--
ALTER TABLE `trip`
  MODIFY `id_trip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
