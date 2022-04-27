-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2022 pada 07.51
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokojam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `nama_brand` varchar(150) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `id_supplier` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `brand`
--

INSERT INTO `brand` (`id`, `nama_brand`, `logo`, `id_supplier`) VALUES
(2001, 'Alexander Christie', 'alexandre-christie.png', 3002),
(2002, 'Casio', 'casio.png', 3002),
(2003, 'Seiko', 'seiko.png', 3001),
(2004, 'Alba', 'alba.png', 3002),
(2005, 'Fossil', 'fossil.png', 3002),
(2006, 'Spinnaker', 'spinnaker.png', 3003),
(2007, 'POLICE', 'police.png', 3003),
(2008, 'Citizen', 'citizen.png', 3003),
(2009, 'expedition', 'expedition.png', 3003),
(2010, 'aigner', 'aigner.png', 3002),
(2011, 'coach', 'coach.png', 3005),
(2012, 'duxot', 'duxot.png', 3002),
(2013, 'garmin', 'garmin.png', 3001),
(2014, 'giordano', 'giordano.png', 3001),
(2015, 'jeep', 'jeep.png', 3003),
(2016, 'jonas-verus', 'jonas-verus.png', 3005);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(6) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `gender` varchar(16) NOT NULL,
  `model` varchar(50) NOT NULL,
  `series` varchar(50) NOT NULL,
  `movement` varchar(50) NOT NULL,
  `case_diameter` varchar(25) NOT NULL,
  `case_thickness` varchar(25) NOT NULL,
  `lug_width` varchar(25) NOT NULL,
  `glass_material` varchar(50) NOT NULL,
  `case_material` varchar(50) NOT NULL,
  `water_resistant` varchar(50) NOT NULL,
  `case_back` varchar(50) NOT NULL,
  `strap_material` varchar(50) NOT NULL,
  `clasp` varchar(50) NOT NULL,
  `calender` varchar(25) NOT NULL,
  `luminious_lumibrite` varchar(5) NOT NULL,
  `dial_color` varchar(25) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `harga` int(16) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `id_brand`, `nama_produk`, `gender`, `model`, `series`, `movement`, `case_diameter`, `case_thickness`, `lug_width`, `glass_material`, `case_material`, `water_resistant`, `case_back`, `strap_material`, `clasp`, `calender`, `luminious_lumibrite`, `dial_color`, `deskripsi`, `harga`, `stok`, `gambar`) VALUES
(1, 2003, 'Seiko 5 Sport SRPD57K1 Automatic', 'pria', 'SRPD57K1', 'Seiko-5', 'Automatic', '42.5', '13.4 mm', '22 mm', 'Mineral crystal', 'Stainless Steel', '50 Meters/5 ATM/5 BAR', 'Screw case back', 'Leather/Kulit', 'Buckle', 'Date', 'No', 'No', '', 2513000, 15, 'seiko1.jpg'),
(2, 2003, 'Seiko 5 Sports SNZG13K1 Automatic Black Dial Stainless Steel Bracelet', 'pria', 'SNZG13K1', 'Seiko-5', 'Japan Automatic, 23 Jewels', '43 mm', '12 mm', '22 mm', 'Hardlex crystal', 'Stainless Steel', '100 Meters/10 ATM/10 BARi', 'Screw see-through case back', 'Stainless Steel', 'Fold over with safetyi', 'Day and Datei', 'Yes', 'Black Dial', 'Features\r\nDay and date display\r\nWeight after packing\r\napprox. 500g\r\nWhat\'s Inside Box\r\n1x Seiko 5 Sports SNZG13K1 Automatic Black Dial Stainless Steel Bracelet    \r\n1x Official Seiko Warranty Card\r\n1x Seiko Watch Box', 2000000, 3, 'seiko2.jpg'),
(3, 2003, 'Seiko 5 Sports SRPD59K1 Automatic Orange Dial Stainless Steel Strap', 'pria', 'SRPD59K1', 'Seiko-5', 'Automatic Movement', '42.5 mm', '13.4 mm', '22 mm', 'Hardlex crystal', 'Stainless Steel', '100 Meters/10 ATM/10 BARi', 'Screw see-through case back', 'Stainless Steel', 'Fold over with double pus', 'Day and Datei', 'Yes', '', 'Automatic with manual winding capacity\r\nCaliber\r\n4R36\r\nJewels\r\n24\r\nPower Reserve\r\n41 Hours\r\nAccuracy\r\n\r\n+45 to -35 seconds per day\r\nFeatures\r\nScrew case back\r\nSee-through case back\r\nUnidirectional rotating bezel\r\nDay/Date display\r\nStop second hand function\r\n\r\nWeight after packing\r\napprox. 500 gram\r\nWhat\'s Inside Box\r\n1x Seiko 5 Sports SRPD59K1 Automatic Orange Dial Stainless Steel Strap\r\n1x Official Seiko Warranty Card\r\n1x Seiko Box\r\nInstructions Manual\r\nCal. 4R36', 2513000, 6, 'seiko3.jpg'),
(4, 2003, 'Seiko 5 Military Sports SNZG09K1 Automatic Green Dial Stainless Steel Case', 'pria', 'SNZG09K1', 'Seiko-5', 'Japan Automatic, 23 Jewels', '43 mm', '12 mm', '22 mm', 'Hardlex crystal', 'Stainless Steel', '100 Meters/10 ATM/10 BARi', 'Screw see-through case back', 'Canvas/Nylon/Cloth', 'Bucklei', 'Day and Datei', 'Yes', 'Green Dial', 'Features\r\nDay and date display\r\nWeight after packing\r\napprox. 500g\r\nWhat\'s Inside Box\r\n1x Seiko 5 Military Sports SNZG09K1 Automatic Green Dial Stainless Steel Case    \r\n1x Official Seiko Warranty Card\r\n1x Seiko Watch Box\r\nInstructions Manual \r\nCal. 7S36', 1847000, 3, 'seiko4.jpg'),
(5, 2003, 'Seiko Prospex Penguin Monster Save The Ocean SRPG57K1 Automatic Divers 200M Stainless Steel Strap', 'pria', 'SRPG57K1 ', 'Prospex', 'Automatic with manual winding capacity', '43,8 mm', '12,8 mm', '', 'Hardlex crystal', 'Stainless Steel', 'Divers Watch 200 Meters/20 ATM/20 BAR', 'Screw case back', 'Stainless Steel', 'Fold over with double pus', 'Day and Datei', 'Yes', '', 'Caliber\r\n4R36\r\nJewels\r\n24 Jewels\r\nPower Reserve\r\nApprox. 41 Hours\r\nAccuracy\r\n+25 to -15 seconds per day\r\nFeatures\r\nDay/Date display\r\nStop second hand function\r\nScrew case back\r\nScrew-down crown\r\nSPECIAL EDITION on the case back\r\nThree-fold clasp with secure lock\r\nUnidirectional rotating bezel\r\nWeight after packing\r\napprox. 700 gr\r\nWhat\'s Inside Box\r\n1x Seiko Prospex Penguin Monster Save The Ocean SRPG57K1 Automatic Divers 200M Stainless Steel Strap\r\n1x Official Seiko Warranty Card\r\n1x Manual Boo', 4906000, 7, 'seiko5.jpg'),
(6, 2004, 'Alba Active AG8K21X1 Men Blue Gradation Dial Blue Rubber Strap', 'pria', 'AG8K21X1 ', 'Active', 'Quartz Movement', '41 mm', '12 mm', '20 mm', 'Mineral crystal', 'Stainless Steel', '100 Meters/10 ATM/10 BARi', 'Screw case back', 'Rubber/Silicon/Resin/Karet', 'Bucklei', 'Datei', 'Yes', 'Blue Gradation', 'Weight after packing\r\napprox. 1kg\r\nWhat\'s Inside Box\r\n1x Alba Active AG8K21X1 Men Blue Gradation Dial Blue Rubber Strap\r\n1x Alba Warranty Card\r\n1x Alba Box', 660000, 2, 'alba1.jpg'),
(7, 2004, 'Alba AG2008X1 Ladies Gold Dial Gold Stainless Steel Strap', 'wanita', 'AG2008X1', 'Fashion', 'Quartz Movement', '34 mm', '8 mm', '14 mm', 'Mineral crystal', 'Stainless Steel', '50 Meters/5 ATM/5 BARi', 'Screw case back', 'Stainless Steel', 'Fold over with double push buttoni', 'No Calendari', 'No', 'Gold', 'Weight after packing\r\napprox. 1kg\r\nInside Box\r\n1x Alba AG2008X1 Ladies Gold Dial Gold Stainless Steel Strap\r\n1x Alba Warranty Card\r\n1x Alba Box', 528000, 10, 'alba2.jpg'),
(8, 2004, 'Alba AP6684X1 Ladies Light Gold Dial Gold Stainless Steel Strap', 'Wanita', 'AP6684X1', 'Fashion', 'Quartz Movement', '34 mm', '8 mm', '', 'Mineral crystal', 'Stainless Steel with PVD Coating', '30 Meters/3 ATM/3 BAR', 'Screw case back', 'Stainless Steel', 'Fold over with double push button', 'Day and Date', 'No', 'Light Gold', 'Weight after packing\r\napprox. 1kg\r\nInside Box\r\n1x Alba AP6684X1 Ladies Light Gold Dial Gold Stainless Steel Strap\r\n1x Alba Warranty Card\r\n1x Alba Box', 891000, 5, 'alba3.jpg'),
(9, 2004, 'Alba AM3770X1 Chronograph Silver Pattern Dial Rose Gold Stainless Steel Strap', 'Pria', 'AM3770X1', 'Prestige', 'Japan Quartz Movement', '43 mm', '12 mm', '22 mm', 'Mineral crystal', 'Stainless Steel with PVD Coating', '100 Meters/10 ATM/10 BAR', 'Screw case back', 'Stainless Steel', 'Fold over with double push button', 'Date', 'No', '', 'Features\r\n60 minute chronograph accurate to 1/10 second\r\nSplit time\r\nWeight after packing\r\napprox. 1kg\r\nWhat\'s Inside Box\r\n1x Alba AM3770X1 Chronograph Silver Pattern Dial Rose Gold Stainless Steel Strap\r\n1x Manual Book\r\n1x Machtwatch Warranty Card\r\n1x Alba Box', 1243000, 4, 'alba4.jpg'),
(10, 2004, 'Alba AH7H43X1 Ladies Black Dial Stainless Steel Strap', 'Wanita', 'AH7H43X1', '', 'Quartz battery', '30 mm', '7 mm', '18 mm', 'Mineral crystal', 'Stainless Steel', '30 Meters/3 ATM/3 BAR', 'Screw case back', 'Stainless Steel', 'Fold over with double push button', 'Date', 'No', 'Black Dial', 'Weight after packing\r\napprox. 1kg\r\nWhat\'s Inside Box\r\n1x Alba AH7H43X1 Ladies Black Dial Stainless Steel Strap\r\n1x Alba Warranty Card\r\n1x Alba Box', 615000, 3, 'alba5.jpg'),
(19, 2001, 'Alexandre Christie AC 6597 MC LIPBARE Chronograph Men Black Dial Black Leather Strap', 'pria', 'ACF-6597-MCLIPBARE', 'No', 'Quartz Movement', '46 mm', '13,5 mm', '24 mm', 'Mineral crystal', 'Stainless Steel', '50 Meters/5 ATM/5 BAR', 'Screw case back', 'Leather/Kulit', 'Buckle', 'Date', 'No', 'No', 'Weight after packing\r\napprox. 700 gram\r\nWhats Inside Box\r\n1x Alexandre Christie AC 6597 MC LIPBARE Chronograph Men Black Dial Black Leather Strap\r\n1x Official Alexandre Christie Warranty Card\r\n1x Alexandre Chrstie Watch Box', 1430000, 4, '6267780e27f96.jpg'),
(20, 2001, 'Alexandre Christie AC 6376 MC BBRBA Chronograph Men Black Dial Black Stainless Steel Strap', 'pria', 'ACF-6376-MCBBRBA', 'Ac-Sport', 'Quartz Battery', '44 mm', '14 mm', '24 mm', 'Mineral crystal', 'Stainless Steel', '50 Meters/5 ATM/5 BAR', 'Screw case back', 'Stainless Steel', 'Deployment push button with buckle', 'Date', 'No', 'No', 'Other\r\nHour, Minute, Chronograph Function\r\nWeight after packing\r\napprox. 700 gram\r\nWhats Inside Box\r\n1x Alexandre Christie AC 6376 MC BBRBA Chronograph Men Black Dial Black Stainless Steel Strap\r\n1x Official Alexandre Christie Warranty Card\r\n1x Alexandre Chrstie Watch Box', 1625000, 6, '62677bceea792.jpg'),
(21, 2001, 'Alexandre Christie Classic Steel AC 8658 MD BURBU Men Blue Dial Blue Stainless Steel Strap', 'pria', 'ACF-8658-MDBURBU', 'Ac-Classic', 'Quartz Movement', '42 mm', '10 mm', '22 mm', 'Mineral crystal', 'Stainless Steel', '30 Meters/3 ATM/3 BAR', 'Screw case back', 'Stainless Steel', 'Fold over with double push button', 'Date', 'No', 'No', 'Weight after packing\r\napprox. 700 gram\r\nWhats Inside Box\r\n1x Alexandre Christie Classic Steel AC 8658 MD BURBU Men Blue Dial Blue Stainless Steel Strap\r\n1x Official Alexandre Christie Warranty Card\r\n1x Alexandre Chrstie Watch Box', 780000, 3, '62677d7d1d354.jpg'),
(22, 2001, 'Alexandre Christie AC 6603 MC BIPBAYL Chronograph Men Black Dial Black Stainless Steel Strap', 'pria', 'ACF-6603-MCBIPBAYL', 'Ac-Sport', 'Quartz Movement', '44 mm', '12,5 mm', '22 mm', 'Mineral crystal', 'Stainless Steel', '30 Meters/3 ATM/3 BAR', 'Screw case back', 'Stainless Steel', 'Fold over with double push button', 'Date', 'yes', 'NO', 'Weight after packing\r\napprox. 700 gram\r\nWhats Inside Box\r\n1x Alexandre Christie AC 6603 MC BIPBAYL Chronograph Men Black Dial Black Stainless Steel Strap\r\n1x Official Alexandre Christie Warranty Card\r\n1x Alexandre Chrstie Watch Box', 1202000, 4, '62677e0c56ca0.jpg'),
(23, 2001, 'Alexandre Christie AC 6590 MC RIPGRYL Chronograph Men Black Dial Yellow Rubber Strap', 'pria', 'ACF-6590-MCRIPGRYL', 'no', 'Quartz Movement', '45,5 mm', '12 mm', '20 mm', 'Mineral crystal', 'Stainless Steel', '30 Meters/3 ATM/3 BAR', 'Screw case back', 'Rubber/Silicon/Resin/Karet', 'Buckle', 'Date', 'yes', 'no', 'Weight after packing\r\napprox. 700 gram\r\nWhats Inside Box\r\n1x Alexandre Christie AC 6590 MC RIPGRYL Chronograph Men Black Dial Yellow Rubber Strap\r\n1x Official Alexandre Christie Warranty Card\r\n1x Alexandre Chrstie Watch Box', 1040000, 2, '62677eab6875b.jpg'),
(24, 2009, 'Expedition EXF-6757-MCREPGNYL', 'pria', 'EXF-6757-MCREPGNYL', 'Chronograph', 'Quartz Movement', '44.5 mm', '16 mm', '28 mm', 'Mineral crystal', 'Stainless Steel', '50 Meters/5 ATM/5 BAR', 'Screw case back', 'Rubber/Silicon/Resin/Karet', 'Buckle', 'Date', 'yes', 'yes', 'Weight after packing\r\napprox. 800 gram\r\nWhats Inside Box\r\n1x Expedition EXF-6757-MCREPGNYL\r\n1x Official Expedition Warranty Card\r\n1x Expedition Watch Box', 1885000, 4, '62677fdada849.jpg'),
(25, 2009, 'Expedition E 6768 MC LBRBA Chronograph Man Black Dial Brown Leather Strap', 'pria', 'EXF-6768-MCLBRBA', 'Chronograph', 'Quartz', '46 mm', '14 mm', '22 mm', 'Mineral crystal', 'Stainless Steel', '50 Meters/5 ATM/5 BAR', 'Screw case back', 'Leather/Kulit', 'Buckle', 'Date', 'yes', 'no', 'Subdials\r\nDate display\r\n24 hours display\r\n\r\nWeight after packing\r\napprox. 800 gram\r\nWhats Inside Box\r\n1x Expedition E 6768 MC LBRBA Chronograph Man Black Dial Brown Leather Strap\r\n1x Official Expedition Warranty Card\r\n1x Expedition Watch Box', 1157000, 5, '6267807b31e76.jpg'),
(26, 2009, 'Expedition E 6808 MF RRGPN Ladies Pink Dial Pink Silicon Strap', 'wanita', 'EXF-6808-MFRRGPN', 'no', 'Quartz Movement', '39 mm', '12 mm', '22 mm', 'Mineral crystal', 'Plastic/Resin', '30 Meters/3 ATM/3 BAR', 'Screw case back', 'Rubber/Silicon/Resin/Karet', 'Buckle', 'Day and Date', 'no', 'Purple Dial', 'Features\r\nDay and Date Display\r\n24 hours\r\nWeight after packing\r\napprox. 800 gram\r\nWhats Inside Box\r\n1x Expedition E 6808 MF RRGPN Ladies Pink Dial Pink Silicon Strap\r\n1x Official Expedition Warranty Card\r\n1x Expedition Watch Box', 1014000, 5, '6267810463e03.jpg'),
(27, 2009, 'Expedition E 6823 MF LUBBU Chronograph Men Blue Dial Black Leather Strap', 'pria', 'EXF-6823-MFLUBBU', 'Sport-Edition', 'Quartz Movement', '46 mm', '13 mm', '24 mm', 'Mineral crystal', 'Stainless Steel', '50 Meters/5 ATM/5 BAR', 'Screw case back', 'Leather/Kulit', 'Buckle', 'Date', 'Yes', 'no', 'Weight after packing\r\napprox. 800 gram\r\nWhats Inside Box\r\n1x Expedition E 6823 MF LUBBU Chronograph Men Blue Dial Black Leather Strap \r\n1x Official Expedition Warranty Card\r\n1x Expedition Watch Box', 1098000, 4, '6267817e5ff64.jpg'),
(28, 2009, 'Expedition E 6822 MC LTBBA Chronograph Men Black Dial Black Leather Strap', 'pria', 'EXF-6822-MCLTBBA', 'Sport-Edition', 'Quartz Movement', '45 mm', '14 mm', '24 mm', 'Mineral crystal', 'Stainless Steel', '50 Meters/5 ATM/5 BAR', 'Screw case back', 'Leather/Kulit', 'Buckle', 'Date', 'yes', 'no', 'Weight after packing\r\napprox. 800 gram\r\nWhats Inside Box\r\n1x Expedition E 6822 MC LTBBA Chronograph Men Black Dial Black Leather Strap \r\n1x Official Expedition Warranty Card\r\n1x Expedition Watch Box', 1430000, 3, '6267820f9c3fa.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id` int(8) NOT NULL,
  `nama_supplier` varchar(150) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id`, `nama_supplier`, `telepon`, `alamat`) VALUES
(3001, 'Digital Modern Indonesia', '082237892678', 'Jl. SUltan Alauddin No. 233, Jakarta selatan'),
(3002, 'Digital Batam Import ', '081156673345', 'Jl. Banggai No. 100, Batam'),
(3003, 'Kalix Digital', '088445677888', 'Jl. Jendral Sudirman No.42, Makassar'),
(3005, 'Angkasa Digital', '087564008112', '  Jl. Haji Mabrur no. 189, Jakarta Timur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `hak_akses` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama_user`, `hak_akses`, `username`, `pass`, `foto`) VALUES
(1, 'Administrator', 'Administrator', 'administrator', '$2y$10$YpKx7g.m65ESWyOnqc6WqujzlIDEeU5V5s4kAXkcRVw9sCqdaZsx2', 'admin.png'),
(2, 'Muh. Rizhal Ridwan', 'Administrator', 'izhal', '$2y$10$.nZxEcTKLq4cp8LpS8D4ROYqj72c03hvASF6vroo7xftO/bD4y1uK', 'Rizhal.png'),
(4, 'Raya', 'user', 'raya', '$2y$10$J9XfRgSBdtgXkCOFiK2XH.MS3DHav5d.nu9B0PryC2sMbASsXHSoq', '6263650c6eef8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_supplier` (`id_supplier`) USING BTREE;

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_brand` (`id_brand`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `brand`
--
ALTER TABLE `brand`
  ADD CONSTRAINT `brand_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_brand`) REFERENCES `brand` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
