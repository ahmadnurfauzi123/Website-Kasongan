-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2018 at 02:50 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kasongan`
--

-- --------------------------------------------------------

--
-- Table structure for table `datakasongan`
--

CREATE TABLE `datakasongan` (
  `id` int(11) NOT NULL,
  `file` varchar(200) NOT NULL,
  `judul` text NOT NULL,
  `penjelasan` text NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datakasongan`
--

INSERT INTO `datakasongan` (`id`, `file`, `judul`, `penjelasan`, `detail`) VALUES
(1, '2a830-kasongan1.jpg', 'Sejarah', 'Kasongan adalah nama daerah tujuan wisata di wilayah kabupaten Bantul, Daerah Istimewa Yogyakarta yang terkenal dengan hasil kerajinan gerabahnya. Terletak di daerah pedukuhan Kajen, Desa Bangunjiwo, Kecamatan Kasihan, Bantul, Daerah Istimewa Yogyakarta, (~ S 7.846567Â° â€“ E 110.344468Â°) sekitar enam kilometer dari alun-alun utara Yogyakarta ke arah selatan.', 'Ada cerita menarik di balik asal-usul Kasongan yang patut Anda ketahui. Kasongan pada mulanya hanya merupakan tanah persawahan milik penduduk desa di selatan kota Yogyakarta. Pada masa penjajahan Belanda di Indonesia, di mana waktu itu di daerah persawahan milik salah satu warga ditemukan seekor kuda yang telah mati, kuda yang diperkirakan milik Reserse Belanda. Warga pemilik tanah merasa takut dan segera melepaskan hak tanahnya sehingga tidak diakui lagi. Ketakutan serupa juga terjadi pada penduduk lain yang memiliki sawah di sekitarnya yang beramai-ramai melepaskan hak tanah mereka. Karena banyak tanah tanpa pemilik, maka penduduk desa lain segera menduduki wilayah tersebut. Penduduk yang tidak memiliki tanah kemudian beralih profesi menjadi pengrajin keramik yang mulanya hanya mengempal-ngempal tanah yang tidak pecah bila disatukan. Sebenarnya tanah tersebut hanya digunakan untuk mainan anak-anak dan perabot dapur saja, namun karena ketekunan dan tradisi turun temurun, Kasongan menjadi desa wisata yang terkenal saat ini.\r\nHasil kerajinan dari gerabah yang diproduksi di Kasongan pada umumnya berupa guci dengan berbagai motif, bisa Anda lihat koleksi gerabah burung merak, naga, bunga mawar, dan sebagainya. Pot berbagai ukuran, dari ukuran kecil hingga seukuran bahu orang dewasa, suvenir, pigura, hiasan dinding, perabotan seperti meja dan kursi, dan lainnya, semuanya diproduksi dengan apik, dibeli, dan dijadikan koleksi pribadi Anda. Perkembangan produk Kasongan pun kian bervariasi, meliputi bunga tiruan dari daun pisang, perabotan dari bambu, maupun topeng-topengan. Hasil kerajinan tersebut berkualitas bagus dan telah diekspor ke mancanegara, negara-negara Eropa dan Amerika. Kasongan selalu ramai dikunjungi oleh wisatawan yang berkunjung ke Yogyakarta.\r\n'),
(2, 'patung loroblonyo .jpg', 'Patung Loro Blonyo', 'Sebagiab besar dari Anda Pasti bertanya-tanya, apa itu Patung Loro Blonyo? Patung Loro Blonyo adalah patung yang merupakan perwujudan visualisasi dari Dewa Wisnu dan Dewi Sri, yakni  patung yang berbentuk sepasang pengantin Jawa dalam posisi duduk berdampingan menggunakan pakaian adat Jawa dengan atribut lengkapnya. Patung ini diadopsi dari sepasang patung pengantin milik Kraton Yogjakarta.', 'Dalam bahasa Jawa, â€˜loroâ€™ berarti dua atau sepasang, sementara â€˜blonyoâ€™ berarti dirias melalui prosesi pemandian dan didandani. Patung Loro Blonyo pada awalnya digunakan sebagai lambang dari dewi padi dan sebagai lambang kesuburan. Kesuburan di sini berarti kesuburan dalam pertanian dan juga kesuburan dalam rumah tangga. Masyarakat Jawa meyakini bahwa patung Loro Blonyo membawa kesuburan dan keharmonisan rumah tangga bagi rumah yang memiliki patung tersebut. Makna simbolik yang terkandung dalam patung Loro Blonyo ini sangat dalam bagi suku Jawa.\r\n\r\nPatung Loro Blonyo ini merupakan ciri khas Desa Kasongan Yogyakarta. Desa Kasongan sendiri merupakan nama sebuah desa yang berada di Kabupaten Bantul  Yogyakarta, dimana desa Kasongan sekarang ini dijadikan sebagai â€œDesa Wisata Provinsi Daerah Istimewa Yogyakartaâ€. Patung Loro Blonyo menjadi ciri khas Desa Kasongan dikarenakan patung ini adalah patung yang legendaris, laris manis, dan tentunya patung yang paling dicari para wisatawan baik lokal maupun mancanegara. Hal ini dikarenakan adanya kepercayaan bahwa patung Loro Blonyo ini membawa hoki bila ditaruh di dalam rumah. Percaya maupun tidak terhadap mitos patung ini, setidaknya Patung Loro Blonyo ciri khas Desa Kasongan Yogyakarta ini bisa menjadi hiasan etnik di sudut rumah Anda.'),
(3, 'kasongan-02.jpg', 'Pusat Kerajinan Gerabah Kasongan Yogyakarta', 'Yogyakarta memang pantas disebut dengan ibu kota budaya. Banyak sekali budaya yang ada di kota ini. Mulai dari kuliner, tempat wisata, kearifan lokal, seni tradisi, hingga kerajinan yang sudah terkenal hingga manca negara.', 'Kota yang selalu memegang teguh budaya dan nilai luhur ini menjadi daya tarik untuk dikunjungi para pelancong dari seluruh penjuru dunia. Memang tidak akan habisnya membicarakan kota Jogja. Mulai dari ujung ke ujung akan selalu menghadirkan keindahan dan keramahan kota pelajar ini.\r\nSalah satunya ada di ujung selatan Jogja. Tepatnya di kabupaten Bantul. Ditempat ini terdapat sentral Kerajinan Gerabah Kasongan Yogyakarta. Sejarah dari desa Kasongan sendiri cukup panjang. Dulu kala saat jaman penjajahan Belanda, terdapat desa dengan warganya yang memiliki pekerjaan sebagai petani. Namun pada suatu hari ditemukan kuda yang mati di desa tersebut. Karena warga tau bahwa kuda itu milik Belanda warga menjadi takut. Dan akhirnya warga melepas semua hak tanah. Berjalannya waktu datanglah beberapa warga yang memiliki kemampuan untuk membuat gerabah dan bersambang ke desa tampa penghuni tersebut. Lama kelamaan desa tersebut menjadi ramai. Para warga juga beralih profesi dari petani menjadi pembuat gerabah. Dan sejak saat itu kasongan terkenal sebagai sentral Kerajinan Gerabah Kasongan Yogyakarta.\r\nWalaupun hasil dari sentral Kerajinan Gerabah Kasongan Yogyakarta banyak dijual di Malioboro ataupun tempat penjual aksesoris khas Jogja. Namun kuranglah jika tidak berkunjung ke Kasongan. Salah satu desa di bantul ini memiliki para penduduk yang mayoritas bekerja sebagai pengrajin gerabah. Desa yang berjarak sekitar 20 km dari pusat kota Jogja ini sudah menjadi sentral gerbah sejak tahun 1970an. Dari sana desa Kasongan sudah sangat terkenal untuk komoditas gerabahnya. Bahkan gerabah yang dijual sudah menembus pasar internasional.\r\nBanyak sekali jenis kerajinan yang dibuat disini seperti,\r\n1. Kendi\r\n2. Gentong\r\n3. Anglo\r\n4. Cobek\r\n5. Vas\r\n6. Guci\r\n7. Patung Loro Blonyo\r\n\r\nDari semua Kerajinan Gerabah Kasongan Yogyakarta para wisatawan paling suka dengan patung Loro Blonyo. Karena patung ini menjadi khas Jogja. Harga yang ditawarkan pun sangat beragam. Tergantung bagaimana kerumitan dan ukuran dari gerabah. Tentu saja para wisatawan juga bisa melihat proses pembuatannya secara langsung dirumah pengrajin atau digaleri â€“ galeri yang ada di desa Kasongan. Atau bahkan para wisatawan bisa mencoba untuk membuat gerabah. Karena disetiap galeri akan diadakan workshop cara membuat gerabah. Kalian hanya perlu bilang dengan sopan kepada pemilik galeri. Namun jangan sampai kalian mengganggu proses dari kerajinan. Tapi tenang, keramahan warga jogja akan terasa saat kalian berkunjung dan mencoba untuk berkomunikasi.'),
(4, 'Wisata-di-Desa-Kasongan-Jogja.jpg', 'Desa Wisata Kasongan Sentra Industri Keramik', 'Bukan rahasia lagi jika desa Wisata Kasongan ini merupakan daerah pemukiman para kundi, buyung atau gundi, yang artinya orang yang membuat sejenis buyung, gendi, kuali dan lainnya yang tergolong peralatan memasak, juga barang hiasan yang terbuat dari tembikar atau tanah liat.\r\n\r\nDesa wisata Kasongan hingga saat ini menjadi salah satu tujuan desa wisata di Yogyakarta yang banyak diminati oleh wisatawan domestik dan wisatawan asing. ', 'Jika Anda kemari Anda akan melihat deretan rumah-rumah galeri yang menawarkan barang-barang kerajinan dari gerabah serta dari bahan lainnya seperti guci, lampu hias, pot bunga, miniatur alat transfortasi (becak, sepeda, mobil).\r\n\r\nAneka tas, patung, souvenir untuk pengantin, serta hiasan lainnya yang menarik untuk dipajang di rumah pun akan Anda temui di Desa wisata Kasongan ini. Desa ini telah berhasil menarik perhatian para kolektor seni di tanah air. Ada berbagai produk unggulan yang ditawarkan oleh para seniman keramik seperti keramik guci, air mancur, patung Buddha, bahkan terra cotta.\r\n\r\nTidak ketinggalan produk legendaris yang ditawarkan oleh Desa wisata Kasongan adalah patung Loro Blonyo. Patung Loro Blonyo adalah patung sepasang pengantin yang dipercaya akan memberikan keberuntungan jika ditaruh di dalam rumah. Patung ini pertama kali diknalkan oleh Galeri Loro Blonyo yang diadopsi dari patung pengantin milik Kraton Yogyakarta.\r\n\r\nKita bisa menjumpai patung Loro Blonyo ini dalam berbagai pose. Hal ini membuat variasi sendiri dari patung legendaris tersebut. Patung ini juga bisa dijadikan sebagai hadiah bagi pengantin baru yang baru menikah.\r\n\r\nPerbedaan produk di Desa wisata Kasongan dengan tempat lain adalah keunikan produknya yang menggunakan tahap akhir pembuatannya memakai bahan alami yang memakai cat sebagai media sentuhan akhir. Ini yang menyebabkan guci dari Desa wisata Kasongan relatif lebih awet dan jadi incaran wisatawan domestik maupun asing.\r\n\r\nPilihan warna dan motifnya juga mencerminkan jika kerajinan gerabah di Desa wisata Kasongan ini mempunyai estetika yang tinggi. Bagi Anda yang tertarik untuk mengetahui lebih lanjut tentang proses pembuatan kerajinan gerabah, Anda bisa mendatangi beberapa galeri yang menawarkan kursus singkat pembuatan kerajinan gerabah.');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `file` varchar(200) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `file`, `nama`) VALUES
(1, 'Guci pot vas.jpg', 'Guci, Pot & Vas'),
(2, 'guci unggulan.jpg', 'Guci unggulan'),
(3, 'guci+leher+panjang+kaca+putih.jpg', 'Guci  kaca '),
(4, 'motif keramik klasik.jpg', 'motif klasik'),
(5, 'vas dan tempat payung gerabah.jpg', 'vas & tempat payung'),
(6, 'vas gerabah bibir persegi.jpg', 'vas  bibir persegi'),
(7, 'vas gerabah strip pasir.jpg', 'vas strip pasir'),
(8, 'Vas+gerabah+bibir+piring+motif+aneka+1+m+@+Rp400,000.jpg', 'vas bibir piring'),
(9, 'vas gerabah bibir persegi1.jpg', 'vas bibir persegi'),
(10, 'gerabah-kasongan1.jpg', 'Gerabah'),
(11, '1set meja kursi gerabah .jpeg', '1 set Meja dan kursi gerabah'),
(12, 'Gerabah+Gendang+1m+finishing+pasir+@Rp250rb.jpg', 'Gerabah gendang finising pasir'),
(13, 'Guci bibir kecil cemara.jpg', 'Guci bibir kecil cemara'),
(14, 'Guci kasuari.jpg', 'Guci kasuari'),
(15, 'guci klasik.jpg', 'Guci klasik'),
(16, 'guci pot vas.jpeg', 'Guci,pot dan Vas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datakasongan`
--
ALTER TABLE `datakasongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datakasongan`
--
ALTER TABLE `datakasongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
