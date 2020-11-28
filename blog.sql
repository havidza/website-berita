-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2019 at 02:38 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) DEFAULT NULL,
  `gambar` varchar(50) NOT NULL,
  `waktu_terbit` date DEFAULT NULL,
  `isi` text,
  `headline` varchar(100) DEFAULT NULL,
  `penulis_id` int(11) NOT NULL,
  `berita_jenis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `gambar`, `waktu_terbit`, `isi`, `headline`, `penulis_id`, `berita_jenis_id`) VALUES
(1, 'Jefri Nichol: Terima Kasih Polisi, Kalau Tak Ditangkap Saya Makin Terjerumus', 'img3.jpeg', '2019-07-24', '<p>Jakarta - Polisi menahan Jefri Nichol sebagai tersangka kasus narkoba. Jefri menyampaikan terima kasih kepada polisi karena merasa diselamatkan. \r\n</p>\r\n\r\n<p>"Terima kasih juga buat polisi. Kalau nggak ada mereka, saya makin terjerumus lebih dalam lagi. Ditangkap pas masih baru," ujar Jefri kepada wartawan di Polres Jakarta Selatan, Jl Wijaya II, Kebayoran Baru, Jakarta Selatan, Rabu (24/7/2019).</p>\r\n\r\n<p>Selain itu, Jefri menyampaikan permintaan maaf kepada keluarga, teman-teman, dan para fans-nya. Jefri menyadari, dengan terjeratnya dia ke dalam kasus narkoba, banyak pihak yang kecewa, termasuk rumah produksi yang menaungi film Ellyas Pical, ''The Exocet'', yang akan Jefri bintangi. \r\n</p>\r\n\r\n<p>"Saya minta maaf kepada mereka semua, sudah ngecewain semua," kata Jefri. </p>\r\n\r\n<p>Jefri ditangkap di kawasan Santa, Jakarta Selatan, pada Senin (22/7) malam. Saat itu dia sedang membeli kertas pembungkus tembakau atau yang dikenal papir di sebuah minimarket.</p>\r\n\r\n<p>Dari situ polisi kemudian membawanya ke rumahnya di Kemang, Jaksel. Di rumahnya ditemukan ganja seberat 6,01 gram.</p>', 'Polisi menahan Jefri Nichol sebagai tersangka kasus narkoba.', 1, 5),
(2, 'PDIP Kecewa NasDem Capreskan Anies: Kasihan Pak Jokowi', 'img1.jpeg', '2019-07-24', '<p>Jakarta<span style="color: #2d2d2d; font-family: Helvetica, Arial; font-size: 16px; background-color: #ffffff;">&nbsp;-&nbsp;</span><a style="text-decoration-line: none; color: #19378f; font-weight: bold; font-family: Helvetica, Arial; font-size: 16px; background-color: #ffffff;" href="https://detik.com/tag/pdip">PDIP</a><span style="color: #2d2d2d; font-family: Helvetica, Arial; font-size: 16px; background-color: #ffffff;">&nbsp;menyayangkan sikap Partai&nbsp;</span><a style="text-decoration-line: none; color: #19378f; font-weight: bold; font-family: Helvetica, Arial; font-size: 16px; background-color: #ffffff;" href="https://detik.com/tag/nasdem">NasDem</a><span style="color: #2d2d2d; font-family: Helvetica, Arial; font-size: 16px; background-color: #ffffff;">&nbsp;yang menyatakan siap mencalonkan Gubernur DKI Jakarta&nbsp;</span><a style="text-decoration-line: none; color: #19378f; font-weight: bold; font-family: Helvetica, Arial; font-size: 16px; background-color: #ffffff;" href="https://detik.com/tag/anies-baswedan">Anies Baswedan</a><span style="color: #2d2d2d; font-family: Helvetica, Arial; font-size: 16px; background-color: #ffffff;">&nbsp;di Pilpres 2024. PDIP mengaku kaget dan kecewa.&nbsp;</span></p>\r\n<p><span style="color: #2d2d2d; font-family: Helvetica, Arial; font-size: 16px; background-color: #ffffff;">"Manuver Pak Surya Paloh dengan mendukung Anies Baswedan tentu mengagetkan dan mengecewakan, walau itu hak beliau sih. Saya khawatir bikin polarisasi baru dan mewadahi residu-residu yang potensial mengganggu konsolidasi Pak Jokowi," tutur Eva.&nbsp;</span></p>\r\n\r\n<p>Kendati demikian, Eva mengatakan tidak bisa melarang manuver NasDem itu. Eva pun berharap semua parpol koalisinya untuk bersabar dan tidak memunculkan manuver-manuver baru.</p>\r\n\r\n\r\n<p> "Walau agak menyesali, tapi kita tidak bisa melarang, hanya berharap saat ini kita semua memenangkan kepentingan bersama, bukan pribadi atau golongan. Kedua, harusnya nunggu sampai KPU menetapkan tahapan pilpres baru 2024. Sabarlah, kecuali ada maksud tertentu misalnya naikin bargaining ke Pak Jokowi. Jadi keingat Pak ahok, pasti dia yang paling kaget, kok cepet pindah ke lain hati," katanya.</p>\r\n\r\n<p>NasDem sudah mengklarifikasi soal pemberitaan dukungan Surya Paloh ke Anies. NasDem menegaskan Surya mendukung Anies sebagai gubernur DKI, bukan capres 2024</p> ', 'PDIP menyayangkan sikap Partai NasDem yang menyatakan siap mencalonkan..', 1, 1),
(3, 'Menyempurnakan Makro Pariwisata Kita', 'img5.jpeg', '2019-07-24', '<p>&nbsp;<b>Jakarta </b>- Sektor pariwisata Indonesia mengalami pertumbuhan yang apik dalam lima tahun terakhir. Berdasarkan data Badan Pusat Statistik (BPS), jumlah wisatawan mancanegara pada periode 2014-2018 tumbuh sebesar 67,6 persen. Naik hampir dua kali lipat dibandingkan pertumbuhan periode 2009-2013 yang sebesar 39,2 persen. Selain itu, menurut Travel and Tourism Competitiveness Index yang dikeluarkan World Economic Forum, daya saing pariwisata Indonesia merangsek naik dari peringkat 81 di 2009 menjadi urutan 42 pada 2017.</p>\r\n\r\n<p>Kinerja pariwisata yang apik turut mendongkrak penerimaan devisa negara di mana pada 2018 angka sementaranya mencapai 16,11 miliar dolar AS. Lebih tinggi dibandingkan 2017 yang sebesar 15,24 miliar dolar AS. Tentu, menurut Kemenpar, berbagai capaian tersebut tidak lepas dari berbagai strategi yang dilakukan. Di antaranya program empat destinasi super prioritas "Bali Baru" yakni Danau Toba, Candi Borobudur, Mandalika, dan Labuan Bajo, serta penerapan strategi branding, advertising, dan selling. Penguatan branding Wonderful Indonesia juga terus digalakkan di mana selama periode 2016 sampai Maret 2019 berhasil mendapatkan 150 penghargaan</p>\r\n\r\n<p>BPS mencatat kunjungan turis asing Januari-Mei 2019 sebesar 6,37 juta orang, meningkat 2,7% dibanding periode yang sama tahun lalu sebesar 6,2 juta kunjungan. Adapun realisasi 6,37 juta wisatawan tersebut baru mencapai sekitar 35% terhadap total wisatawan mancanegara yang ditargetkan pemerintah tahun ini sebanyak 18 juta orang. Sementara pada tahun lalu, total kunjungan turis asing juga hanya mencapai 15,81 juta orang. Angka itu meleset dari target yang ditetapkan sebesar 17 juta kunjungan.</p>', 'pariwisata Indonesia mengalami pertumbuhan yang apik', 3, 2),
(4, '4 Tips Ampuh Berburu Mobil Baru dan Berkualitas Saat Pameran', 'img6.jpeg', '2019-07-24', '<p><strong style="color: #2d2d2d; font-family: Helvetica, Arial; font-size: 16px; background-color: #ffffff;">Jakarta</strong><span style="color: #2d2d2d; font-family: Helvetica, Arial; font-size: 16px; background-color: #ffffff;">&nbsp;-</span></p>\r\n<p style="margin-top: 0px; margin-bottom: 20px; color: #2d2d2d; font-family: Helvetica, Arial; font-size: 16px; background-color: #ffffff;">Promosi besar-besaran dengan iming-iming hadiah yang lebih banyak, membuat setiap pameran otomotif menjadi salah satu pilihan tepat untuk memilih kendaraan baru.<br /><br />Membeli kendaraan saat pameran memang lebih menarik dibanding mengunjungi showroom. Karena biasanya, beberapa produsen berlomba-lomba menyediakan beragam promo dan hadiah untuk menggaet konsumen.</p>\r\n<p style="margin-top: 0px; margin-bottom: 20px; color: #2d2d2d; font-family: Helvetica, Arial; font-size: 16px; background-color: #ffffff;">Namun, membeli mobil di pameran harus memiliki persiapan yang matang. Untuk itu, ada beberapa strategi yang harus dipersiapkan sebagai konsumen, agar waktu Anda mengunjungi pameran tersebut tidak malah membuat Anda rugi.<br /><br /><strong>1. Cari Mobil Sesuai Kebutuhan<br /><br /></strong>Membeli mobil tentu harus disesuaikan dengan kebutuhan. Apabila mobil menjadi suatu keputusan yang bulat, berikutnya adalah memperhatikan tipe mobil yang yang memang sesuai kebutuhan.<br /><br />Seiring perkembangan kebutuhan masyarakat, tentu setiap orang memiliki kebutuhan berbeda. Para produsen mobil pun terus berupaya mengeluarkan model sesuai kebutuhan, baik itu untuk keperluan sehari-hari, bertualang, atau pun untuk gaya.</p>\r\n<p style="margin-top: 0px; margin-bottom: 20px; color: #2d2d2d; font-family: Helvetica, Arial; font-size: 16px; background-color: #ffffff;"><strong>2. Cek Diskon dan Promo<br /><br /></strong>Saat datang ke pameran, manfaatkanlah promo atau diskon terhadap mobil idaman Anda. Carilah informasi sebanyak mungkin tentang diskon atau promo mobil idaman Anda.<br /><br />Agar lebih matang lagi, sebelum datang ke pameran, Anda harus berbekal informasi produk yang cukup, agar Anda juga bisa lebih menghemat waktu dan tenaga. Selain itu, jika sudah mengetahui informasi promo yang berlaku selama pameran, Anda punya lebih banyak kesempatan untuk mendapatkan diskon besar.</p>\r\n<p style="margin-top: 0px; margin-bottom: 20px; color: #2d2d2d; font-family: Helvetica, Arial; font-size: 16px; background-color: #ffffff;"><strong>3. Cek Tipe Mobil yang Mirip/Sekelas, Bandingkan Fiturnya<br /><br /></strong>Saat membeli mobil di pameran, Anda tak perlu terburu-buru memilih salah satu mobil incaran. Bandingkanlah lebih dari satu produk, karena para konsumen dapat melihat fisik produk secara langsung di pameran. Bahkan, Anda juga bisa memanfaatkan test ride saat pameran, sehingga bisa betul-betul merasakan kondisi kendaraan sesuai yang Anda harapkan.</p>\r\n<p style="margin-top: 0px; margin-bottom: 20px; color: #2d2d2d; font-family: Helvetica, Arial; font-size: 16px; background-color: #ffffff;"><strong>4. Cek Pembiayaan dan Promonya<br /><br /></strong>Terakhir, jika Anda akan membeli mobil secara kredit, cek pula pembiayaan dan promonya. Salah satunya melalui PT BCA Finance, selaku anak perusahaan PT Bank Central Asia (BCA) yang bergerak dibidang pembiayaan.<br /><br />Selain menawarkan suku bunga yang sangat kompetitif, BCA Finance juga memberikan promo yang sangat menarik untuk calon konsumen dengan Program Kredit Mobil Gratis Asuransi 1 Tahun.</p>', 'Membeli mobil di pameran harus memiliki persiapan yang matang', 2, 4),
(5, 'Tidak Laku, Neymar Batal Pindah dari PSG', 'img7.jpg', '2019-07-24', '<p><b>Bola.net</b> - Keinginan Neymar untuk pindah dari PSG nampaknya tidak akan terwujud di musim panas ini. Sang penyerang diberitakan sulit dijual di bursa transfer musim panas ini.</p>\r\n\r\n<p>Dua tahun yang lalu, Neymar resmi bergabung dengan PSG. Kepindahannya ke Paris memecahkan rekor transfer termahal dunia, di mana PSG menyetorkan uang sebesar 222 juta Euro kepada Barcelona.</p>\r\n\r\n<p>Namun pada musim panas ini Neymar membuat ulah. Ia mengatakan bahwa ia ingin pergi dari Parc Des Princes kendati ia masih seumur jagung berada di klub Prancis tersebut.</p>\r\n\r\n<p>L''Equipe mengklaim bahwa Neymar kemungkinan besar tidak akan berpindah klub. Pasalnya ia sulit dijual di musim panas ini.</p>', 'Sang penyerang diberitakan sulit dijual di bursa transfer musim panas ini', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `berita_jenis`
--

CREATE TABLE `berita_jenis` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_jenis`
--

INSERT INTO `berita_jenis` (`id`, `judul`) VALUES
(1, 'POLITIK'),
(2, 'TRAVELLING'),
(3, 'OLAHRAGA'),
(4, 'OTOMOTIF'),
(5, 'Lain - Lain');

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id`, `nama`, `telepon`, `alamat`, `email`) VALUES
(1, 'Sylke Febrina Laucereno', '081823112394', 'Denpasar, Bali', 'sylkef@gmail.com'),
(2, 'Junaidia', '081823112394', 'Banyuanyar', 'junaidi@gmail.com'),
(3, 'Havid Zaeni', '087122891230', 'Solo', 'maksimaltamvan7@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_berita_penulis1_idx` (`penulis_id`),
  ADD KEY `fk_berita_berita_jenis1_idx` (`berita_jenis_id`);

--
-- Indexes for table `berita_jenis`
--
ALTER TABLE `berita_jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `berita_jenis`
--
ALTER TABLE `berita_jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `fk_berita_berita_jenis1` FOREIGN KEY (`berita_jenis_id`) REFERENCES `berita_jenis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_berita_penulis1` FOREIGN KEY (`penulis_id`) REFERENCES `penulis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
