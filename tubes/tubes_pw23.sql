-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2023 pada 17.50
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_pw23`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `deskripsi_menu` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `menu`, `deskripsi_menu`, `gambar`) VALUES
(1, 'Pizza', 'Pizza adalah hidangan Italia yang paling terkenal dan dianggap sebagai salah satu makanan cepat saji paling populer di dunia. Ini terdiri dari adonan tipis yang diberi topping dengan saus tomat, keju mozzarella, dan berbagai bahan tambahan seperti daging, sayuran, atau rempah-rempah. Rasanya gurih, sedikit asam dari saus tomat, dan kaya akan rasa keju yang leleh.', 'pizza.jpg'),
(2, 'Pasta', 'Pasta adalah hidangan yang terbuat dari adonan tepung terigu, telur, dan air. Ada berbagai jenis pasta seperti spaghetti, penne, fettuccine, dan banyak lagi. Pasta biasanya disajikan dengan saus seperti bolognese (sauce daging), carbonara (sauce krim, telur, dan bacon), atau aglio e olio (sauce bawang putih dan minyak zaitun). Rasa pasta sendiri biasanya kenyal dan agak tawar, tetapi saus yang disajikan menambahkan kekayaan rasa.', 'pasta.jpg'),
(3, 'Risotto', 'Risotto adalah hidangan nasi Italia yang dimasak dengan kaldu atau wine sehingga menghasilkan tekstur krimi dan cita rasa yang kaya. Risotto biasanya ditambahkan dengan bahan seperti jamur, udang, daging, atau sayuran. Rasanya creamy, gurih, dan memiliki sedikit keasaman dari wine yang digunakan dalam proses memasaknya.', 'risotto.jpg'),
(4, 'Tiramisu', 'Tiramisu adalah hidangan penutup yang terbuat dari lapisan biskuit ladyfinger yang direndam dalam kopi, lalu disusun dengan krim keju mascarpone manis dan diberi taburan bubuk kakao. Rasanya manis, kaya, dan memiliki sentuhan pahit dari kopi yang menyatu dengan krim keju.', 'tiramisu.jpg'),
(5, 'Gelato', 'Gelato adalah versi Italia dari es krim. Ini memiliki konsistensi yang lebih padat dan konsentrasi rasa yang lebih tinggi daripada es krim biasa. Gelato tersedia dalam berbagai rasa, termasuk cokelat, stroberi, pistachio, lemon, dan banyak lagi. Rasanya lembut, krimi, dan menyegarkan.', 'gelato.jpg'),
(6, 'Lasagna', 'Lasagna adalah hidangan panggang yang terdiri dari lapisan pasta lasagna, saus daging, saus tomat, keju, dan kadang-kadang juga sayuran seperti bayam atau zucchini. Hidangan ini memiliki rasa yang kaya, gurih, dan creamy dari keju yang meleleh.', 'lasagna.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resto`
--

CREATE TABLE `resto` (
  `id_resto` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama_resto` varchar(255) NOT NULL,
  `deskripsi_resto` text NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telpon` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `resto`
--

INSERT INTO `resto` (`id_resto`, `gambar`, `nama_resto`, `deskripsi_resto`, `alamat`, `telpon`, `rating`) VALUES
(1, 'rossovivo.jpg', 'Rosso Vivo', 'Restoran ini menyajikan pengalaman kuliner Italia yang autentik dengan sentuhan kontemporer, serta menawarkan suasana yang elegan dan nyaman bagi para pengunjungnya.\r\n\r\nRosso Vivo Kuta dikenal karena memadukan cita rasa klasik Italia dengan inovasi modern dalam setiap hidangan yang disajikan. \r\n\r\nMenu mereka mencakup berbagai hidangan pasta, pizza, hidangan daging, hidangan laut, dan hidangan penutup yang menggugah selera.\r\n\r\nRosso Vivo Kuta sering kali menjadi tempat yang ramai, terutama pada malam hari. Restoran ini menyediakan layanan yang ramah dan profesional, sehingga para pengunjung dapat menikmati hidangan mereka dengan nyaman dan lancar.', 'Jl. Pantai Kuta, Kuta, Kec. Kuta, Kabupaten Badung, Bali - 80361.', '0-361-751-961', '4,2 / 5'),
(3, 'massimo.jpg', 'Massimo - Italian Restaurant', 'Jika Anda mencari pengalaman kuliner Italia yang autentik di Sanur, Bali, Massimo - Italian Restaurant Sanur adalah pilihan yang sempurna.\r\nMassimo dikenal karena menyajikan hidangan Italia yang otentik dan lezat. Para koki di restoran ini menggunakan bahan-bahan segar dan impor berkualitas tinggi untuk menciptakan cita rasa klasik Italia yang autentik. \r\nMenu Massimo mencakup berbagai hidangan pizza, pasta, lasagna, serta hidangan lainnya termasuk risotto, gnocchi, hidangan daging, dan hidangan laut yang segar.\r\nMassimo juga dikenal dengan roti dan kue-kue Italia yang lezat. Beberapa hidangan penutup favoritnya adalah focaccia, dan berbagai kue-kue manis seperti tiramisu dan panna cotta.\r\n', 'Jln. Danau Tamblingan 228, Sanur, Denpasar - 80228.', '0-361-288-942', '4,6 / 5'),
(4, 'mediterranea.png', 'Mediterranea Restaurant', 'Mediterranea Restaurant menghadirkan pengalaman kuliner Mediterania yang autentik dengan sentuhan khas Italia, Yunani, dan Spanyol.\r\nMerea menyuguhkan hidangan klasik seperti pizza, pasta, paella, tapas, serta hidangan daging dan hidangan laut yang menggugah selera. \r\nHidangan-hidangan ini disiapkan dengan keahlian dan keautentikan, mengikuti resep tradisional yang telah diwariskan dari generasi ke generasi.\r\nDesain interior dan dekorasinya menciptakan atmosfer yang nyaman dan santai, dengan sentuhan Mediterania yang terasa dalam setiap sudutnya. Terdapat juga area duduk di luar ruangan yang menawarkan pengalaman makan yang lebih santai dan menikmati udara segar.\r\n', 'Jl. Tirtodipuran No.24A, Mantrijeron, Kec. Mantrijeron, Kota Yogyakarta, Daerah Istimewa Yogyakarta - 55143.', '0-274-371-052', '4,7 / 5'),
(6, 'lapiccola.jpg', 'La Piccola Italy', 'La Piccola Italy memiliki suasana yang hangat dan nyaman, dengan dekorasi yang terinspirasi dari kafe-kafe kecil di Italia. Restoran ini dirancang untuk menciptakan suasana yang mengingatkan pengunjung akan pesona jalan-jalan kecil di Italia yang penuh dengan aroma kopi segar dan makanan lezat. Menu di La Piccola Italy menawarkan beragam hidangan klasik Italia yang disajikan dengan keahlian dan keautentikan, seperti pasta, lasagna, hingga pilihan pizza dengan adonan yang tipis dan renyah serta topping yang beragam. \r\nAnda juga dapat menikmati seleksi anggur Italia yang dipilih dengan cermat untuk melengkapi hidangan Anda. Anggur ini dipilih dengan hati-hati untuk memastikan kecocokan dengan hidangan yang disajikan.\r\n', 'Jl. Lamaddukelleng No.82, Losari, Kec. Makassar, Kota Makassar, Sulawesi Selatan - 90112.', '0812-3604-5922', '4,6 / 5'),
(7, 'tempo.jpg', 'Tempo Gelato Tamansiswa', 'Jika Anda berada di Yogyakarta, jangan lewatkan kesempatan untuk mengunjungi Tempo Gelato dan mencicipi es krim Italia yang lezat. Tempo Gelato menyajikan es krim buatan sendiri dengan menggunakan resep tradisional Italia dan bahan-bahan segar berkualitas yang menciptakana berbagai varian rasa klasik seperti \r\ncokelat, vanilla, stroberi, serta variasi rasa yang lebih unik seperti pistachio, tiramisu, salted caramel, atau green tea. \r\nKedai ini memiliki suasana yang nyaman dan ramah, dengan area duduk dalam ruangan dan luar ruangan yang tersedia\r\n', 'Jl. Tamansiswa no 56, Wirogunan, Yogyakarta - 55151', '0878-8724-7052', '4,7 / 5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `Nama` varchar(225) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `Nama`, `username`, `email`, `password`, `level`) VALUES
(1, '', 'marialoly', 'maria@gmai.com', 'gelato', 'admin'),
(7, '', 'user', '132', '1234', 'user'),
(8, '', 'Galang', 'ang@mail.com', 'gelato', 'user'),
(9, '', 'Mario', 'mario@gmail.com', 'gelato', 'user'),
(10, '', 'dede', 'dede@mail.com', 'gelato', 'user'),
(11, '', 'mathew', 'mat@gmail.com', 'gelato', 'user'),
(12, '', '', '', '', 'user'),
(13, '', '', '', '', 'user'),
(14, '', '', '', '', 'user'),
(15, 'Maria Loly', 'loly', 'marialoly@gmail.com', 'gelato', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `resto`
--
ALTER TABLE `resto`
  ADD PRIMARY KEY (`id_resto`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `resto`
--
ALTER TABLE `resto`
  MODIFY `id_resto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
