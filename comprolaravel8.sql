-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2021 pada 08.13
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comprolaravel8`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori_agenda` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_agenda` varchar(255) NOT NULL,
  `judul_agenda` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `status_agenda` varchar(20) NOT NULL,
  `jenis_agenda` varchar(20) NOT NULL,
  `keywords` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `hits` int(11) NOT NULL DEFAULT 0,
  `urutan` int(11) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `tempat` text DEFAULT NULL,
  `google_map` text DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_publish` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `id_user`, `id_kategori_agenda`, `bahasa`, `slug_agenda`, `judul_agenda`, `isi`, `status_agenda`, `jenis_agenda`, `keywords`, `gambar`, `icon`, `hits`, `urutan`, `tanggal_mulai`, `tanggal_selesai`, `jam_mulai`, `jam_selesai`, `tempat`, `google_map`, `tanggal_post`, `tanggal_publish`, `tanggal`) VALUES
(1, 15, 6, 'ID', 'nanda', 'Nanda', '<p>Kursus Advanced Web Programming</p>', 'Publish', 'Agenda', 'adad', NULL, 'daad', 0, NULL, '2020-09-12', '2020-09-12', '08:00:00', '17:00:00', 'Google Meet', NULL, '2020-09-12 23:46:53', '2021-05-30 23:42:16', '2021-05-29 14:16:05'),
(2, 15, 6, 'ID', 'ahmad', 'Ahmad', '<p>KURSUS ANDROID DEVELOPER</p>', 'Publish', 'Agenda', NULL, NULL, NULL, 0, NULL, '2021-05-30', '2021-05-30', '08:00:00', '17:00:00', 'Google Meet dan Zoom', '<iframe src=\"https://www.google.com/maps/place/STMIK+Akakom+Yogyakarta/@-7.8723337,109.9319556,10z/data=!4m19!1m13!4m12!1m4!2m2!1d110.0135714!2d-7.8248146!4e1!1m6!1m2!1s0x2e7a59e18b1c28d1:0xe2d750662f2edace!2sakakom!2m2!1d110.4083417!2d-7.7927142!3m4!1s0x2e7a59e18b1c28d1:0xe2d750662f2edace!8m2!3d-7.7927142!4d110.4083417\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', '2021-05-30 05:35:06', '2021-05-30 05:33:28', '2021-05-30 05:35:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT 0,
  `bahasa` enum('ID','EN') NOT NULL,
  `updater` varchar(32) DEFAULT '-',
  `slug_berita` varchar(255) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `status_berita` varchar(20) NOT NULL,
  `jenis_berita` varchar(20) DEFAULT 'Berita',
  `keywords` text DEFAULT '',
  `gambar` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_publish` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_user`, `id_kategori`, `bahasa`, `updater`, `slug_berita`, `judul_berita`, `isi`, `status_berita`, `jenis_berita`, `keywords`, `gambar`, `icon`, `hits`, `urutan`, `tanggal_mulai`, `tanggal_selesai`, `tanggal_post`, `tanggal_publish`, `tanggal`) VALUES
(8, 18, 0, 'ID', '', 'kursus-wordpress-mastering-cms', 'Kursus Wordpress (Mastering CMS)', '<h2>Deskripsi ringkas</h2>\r\n\r\n<p>Anda akan belajar membangun website pribadi, perusahaan, toko online dengan platform CMS (Content Management System) Wordpress dan database MySQL. Kursus ini tidak memerlukan koding yang berat. Cocok untuk yang ingin membuat website instan dengan cepat.</p>\r\n\r\n<hr />\r\n<p>Anda akan belajar membangun website pribadi, perusahaan,&nbsp;<strong>toko online&nbsp;</strong>dengan platform&nbsp;<strong>CMS (<em>Content Management System)&nbsp;</em>Wordpress</strong>&nbsp;dan database MySQL. Kursus ini tidak memerlukan koding yang berat. Cocok untuk yang ingin membuat website instan dengan cepat.</p>\r\n\r\n<h2><a name=\"_Toc32320282\"></a>Materi kursus</h2>\r\n\r\n<p>Anda akan mempelajari hal-hal berikut ini:</p>\r\n\r\n<ul>\r\n	<li>Dasar-dasar HTML5, CSS3 dan Bootstrap</li>\r\n	<li>Pembuatan website profil perusahaan dengan Wordpress</li>\r\n	<li>Pembuatan website&nbsp;<strong><em>online store</em></strong>&nbsp;dengan Wordpress dengan plugin Woocommerce</li>\r\n</ul>\r\n\r\n<h2><a name=\"_Toc32320283\"></a>Tujuan Kursus</h2>\r\n\r\n<p>Setelah Anda belajar&nbsp;di&nbsp;<strong>Kursus Web Design</strong>, Anda dapat:</p>\r\n\r\n<ul>\r\n	<li>Mengelola konten website dengan CMS.</li>\r\n	<li>Membangun website profil perusahaan dan&nbsp;<strong><em>online store</em></strong>&nbsp;dengan CMS Wordpress</li>\r\n	<li>Bekerja sebagai&nbsp;<strong>Content Creator dan Admin Toko Online.</strong></li>\r\n</ul>\r\n\r\n<h2><a name=\"_Toc32320284\"></a>Urutan materi</h2>\r\n\r\n<ol>\r\n	<li>Installasi Software pendukung</li>\r\n	<li>Dasar-dasar layouting dengan HTML dan CSS</li>\r\n	<li>Installasi CMS Wordpress</li>\r\n	<li>Pembuatan website&nbsp;<strong><em>company profile</em></strong></li>\r\n	<li>Mengelola plugin, widget dan menu</li>\r\n	<li>Memilih, mengelola dan mengubah template Wordpress</li>\r\n	<li>Pembuatan toko online dengan Plugin Woocommerce</li>\r\n	<li>Pengelolaan konten website, produk dan order toko online</li>\r\n	<li>Optimasi website Wordpress</li>\r\n	<li>Security website Wordpress</li>\r\n	<li>Pendaftaran website&nbsp;<em>Google Webmaster, Google Anayltic dan Google Business</em></li>\r\n</ol>\r\n\r\n<h2><a name=\"_Toc32320285\"></a>Software yang digunakan</h2>\r\n\r\n<p>XAMPP, Sublime Text/Notepad/Visual Studio, Browser, Aplikasi pengolah gambar</p>\r\n\r\n<h3>&nbsp;</h3>', 'Publish', 'Layanan', 'Anda akan belajar membangun website pribadi, perusahaan, toko online dengan Wordpress. Kursus ini tidak memerlukan koding yang berat. Cocok untuk membuat website instan dengan cepat.', '1491566673574-1622340146.jpg', 'fa fa-globe', 82, 3, NULL, NULL, '2020-01-16 08:04:58', '2021-05-30 08:01:54', '2021-05-30 02:02:26'),
(9, 17, 0, 'ID', '', 'kursus-advanced-web-programming', 'Kursus Advanced Web Programming', '<h2>Deskripsi ringkas</h2>\r\n\r\n<p>Anda akan belajar membangun aplikasi berbasis website (web based application) dengan menggunakan bootstrap, framework JavaScript, PHP framework Codeigniter/Laravel dan database MySQL.</p>\r\n\r\n<hr />\r\n<p>Anda akan belajar membangun&nbsp;<strong>aplikasi berbasis website (<em>web based application</em>)</strong>&nbsp;dengan menggunakan bootstrap, framework JavaScript,&nbsp;<strong><em>PHP framework</em></strong><em>&nbsp;<strong>Codeigniter/Laravel&nbsp;</strong></em>dan database MySQL.</p>\r\n\r\n<h2><a name=\"_Toc32320307\"></a>Materi kursus</h2>\r\n\r\n<p>Anda akan mempelajari hal-hal berikut ini:</p>\r\n\r\n<ul>\r\n	<li>Membangun aplikasi berbasis website</li>\r\n	<li>Membuat laporan dengan berbagai format (PDF, Excel, Word dll)</li>\r\n	<li>Membangun web service (API)</li>\r\n	<li>Membangun aplikasi web dengan berbagai database (MySQL, Oracle, SQL Server, PostgreSQL dll)</li>\r\n	<li><strong><em>Data visualization</em></strong>&nbsp;(format grafik dan peta digital)</li>\r\n</ul>\r\n\r\n<h2><a name=\"_Toc32320308\"></a>Tujuan Kursus</h2>\r\n\r\n<p>Setelah Anda belajar&nbsp;di&nbsp;<strong>Kursus Web Development</strong>, Anda akan dapat:</p>\r\n\r\n<ul>\r\n	<li>Membangun aplikasi kompleks berbasis web dengan berbagai database</li>\r\n	<li>Bekerja sebagai&nbsp;<strong>&nbsp;Senior Web Web Developer.</strong></li>\r\n</ul>\r\n\r\n<h2><a name=\"_Toc32320309\"></a>Urutan materi</h2>\r\n\r\n<ol>\r\n	<li>Installasi Software pendukung</li>\r\n	<li>Merencanakan, membuat &amp; mengelola database MySQL</li>\r\n	<li>Integrasi template&nbsp;<em>front end&nbsp;</em>dan&nbsp;<em>back end&nbsp;</em>dengan framework PHP</li>\r\n	<li>Authentication (Login, Logout &amp; Proteksi Halaman)</li>\r\n	<li>CRUD&nbsp;<em>(Create, Read, Update &amp; Delete)&nbsp;</em>Dasar</li>\r\n	<li>CRUD Kompleks dengan relasi database</li>\r\n	<li>Membuat berbagai jenis laporan (PDF, Excel, Word, Web Service/API, dll)</li>\r\n	<li>Membuat data visualization (Grafik dan Peta Digital)</li>\r\n	<li>Security review atas aplikasi yang telah dibuat</li>\r\n	<li>Version control dengan Git</li>\r\n	<li>Upload web ke hosting atau meng-onlinekan website</li>\r\n</ol>\r\n\r\n<h2><a name=\"_Toc32320310\"></a>Software yang digunakan</h2>\r\n\r\n<p>XAMPP, Sublime Text/Notepad/Visual Studio, Browser, Aplikasi pengolah gambar, Composer dll.</p>', 'Publish', 'Layanan', 'Anda akan belajar membangun aplikasi berbasis website (web based application) dengan menggunakan bootstrap, framework JavaScript, PHP framework Codeigniter/Laravel dan database MySQL.', 'cc-20200715-094623-1622336622.png', 'fa fa-laptop', 69, 2, NULL, NULL, '2020-01-16 08:08:16', '2021-05-30 08:07:46', '2021-05-30 01:45:32'),
(18, 15, 0, 'ID', '-', 'kursus-web-development', 'Kursus Web Development', '<h2>Deskripsi ringkas</h2>\r\n\r\n<p>Anda akan belajar membangun website profil perusahaan dengan menggunakan bootstrap, framework JavaScript, PHP framework Codeigniter / Larevel dan database MySQL.</p>\r\n\r\n<hr />\r\n<p>Anda akan belajar membangun website&nbsp;<strong>profil perusahaan</strong>&nbsp;dengan menggunakan bootstrap, framework JavaScript,&nbsp;<strong><em>PHP framework</em></strong><em>&nbsp;<strong>Codeigniter / Laravel</strong></em>&nbsp;dan database MySQL.</p>\r\n\r\n<h2><a name=\"_Toc32320297\"></a>Materi kursus</h2>\r\n\r\n<p>Anda akan mempelajari hal-hal berikut ini:</p>\r\n\r\n<ul>\r\n	<li>Dasar-dasar HTML, CSS dan Bootstrap</li>\r\n	<li>Mengembangkan website profil perusahaan dengan framework Codeigniter / Laraveldan database MySQL</li>\r\n	<li>Integrasi framework JavaScript dengan Codeigniter / Laravel</li>\r\n</ul>\r\n\r\n<h2><a name=\"_Toc32320298\"></a>Tujuan Kursus</h2>\r\n\r\n<p>Setelah Anda belajar&nbsp;di&nbsp;<strong>Kursus Web Development</strong>, Anda akan dapat:</p>\r\n\r\n<ul>\r\n	<li>Membuat website profil perusahaan (<em>company profile</em>) dengan framework Codeigniter / Laravel dan database MySQL</li>\r\n	<li>Aplikasi pendaftaran online sederhana</li>\r\n	<li>Bekerja sebagai&nbsp;<strong>&nbsp;Web Programmer&nbsp;</strong>atau&nbsp;<strong>Web Developer dengan keahlian Bootstrap, HTML, CSS, JavaScript dan framework Codeigniter / Larevel.</strong></li>\r\n</ul>\r\n\r\n<h2><a name=\"_Toc32320299\"></a>Urutan materi</h2>\r\n\r\n<ol>\r\n	<li>Installasi Software pendukung</li>\r\n	<li>Dasar-dasar HTML, CSS dan Bootstrap</li>\r\n	<li>Membuat&nbsp;<em><strong>Brief project ,&nbsp;</strong></em>yaitu merencanakan website yang akan dibuat sehingga nantinya bisa diwujudkan menjadi website sebenarnya</li>\r\n	<li>Merencanakan, membuat dan mengelola database MySQL</li>\r\n	<li>Integrasi template&nbsp;<em>front end&nbsp;</em>dan&nbsp;<em>back end&nbsp;</em>dengan framework Codeigniter / Laravel</li>\r\n	<li>Authentication (Login, Logout &amp; Proteksi Halaman)</li>\r\n	<li>CRUD&nbsp;<em>(Create, Read, Update &amp; Delete)&nbsp;</em>Dasar</li>\r\n	<li>CRUD Kompleks dengan relasi database</li>\r\n	<li>Laporan PDF dengan MPDF</li>\r\n	<li>Security review atas aplikasi yang telah dibuat</li>\r\n	<li>Upload web ke hosting atau meng-onlinekan website</li>\r\n</ol>\r\n\r\n<h2><a name=\"_Toc32320300\"></a>Software yang digunakan</h2>\r\n\r\n<p>XAMPP, Sublime Text/Notepad/Visual Studio, Browser, Aplikasi pengolah gambar, Composer dll.</p>', 'Publish', 'Layanan', 'Anda akan belajar membangun website profil perusahaan dengan menggunakan bootstrap, framework JavaScript, PHP framework Codeigniter / Larevel dan database MySQL.', '1491566673574-1622340436.jpg', NULL, NULL, 1, NULL, NULL, '2020-09-15 23:29:49', '2021-05-30 23:29:03', '2021-05-30 02:08:09'),
(23, 4, 0, 'ID', '-', 'layanan-konsultasi-strategis', 'Layanan Konsultasi Strategis', '<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Layanan Konsultasi kami ideal untuk Anda saat membutuhkan dukungan dalam menyelaraskan tujuan strategis keberlanjutan perusahaan Anda dengan penatalayanan air yang baik dan mengembangkan rencana untuk tindakan tingkat wilayah operasional dan daerah tangkapan air. </span></span></p>\r\n\r\n<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Dari menilai kesiapan wilayah operasional Anda terhadap Standar AWS, hingga penilaian risiko air dalam rantai pasokan dan mengembangkan peta jalan menuju tindakan pengelolaan air yang baik di lokasi, rantai pasokan, dan tingkat daerah tangkapan, kami dapat membantu Anda dalam perjalanan. </span></span></p>\r\n\r\n<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Kami bekerja sama dengan penyedia layanan terakreditasi, kredensial profesional, dan terlatih AWS, bergantung pada kebutuhan spesifik perusahaan Anda. Ingin tahu lebih banyak? Hubungi kami dan untuk sesi konsultasi terbuka.</span></span></p>', 'Publish', 'Terjadi', 'Layanan Konsultasi Strategis', '26-image-section-aws-indonesia-contact-1600218408.jpg', NULL, NULL, 1, NULL, NULL, '2020-09-16 01:06:48', '2020-09-16 01:06:08', '2020-09-16 01:06:48'),
(24, 4, 0, 'ID', '-', 'pelatihan-standar-dan-sistem-aws', 'Pelatihan Standar dan Sistem AWS', '<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Program pelatihan Standar dan Sistem AWS interaktif selama 1, 2, dan 3 hari mencakup presentasi, studi kasus, serta latihan individu dan kelompok. </span></span></p>\r\n\r\n<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Berhasil menyelesaikan program pelatihan Spesialis memungkinkan Anda memenuhi syarat untuk menjadi penyedia layanan AWS yang terakreditasi, sebagai auditor, pelatih, dan konsultan. Ini juga mendukung Anda untuk membangun kapasitas internal untuk mengelola dan mengimplementasikan penatalayanan air dan sertifikasi AWS. Kami memberikan pelatihan dalam Bahasa Indonesia dan Bahasa Inggris.</span></span></p>', 'Publish', 'Terjadi', 'Pelatihan Standar dan Sistem AWS', '26-image-section-aws-indonesia-contact-1600218481.jpg', NULL, NULL, NULL, NULL, NULL, '2020-09-16 01:08:01', '2020-09-16 01:07:31', '2020-09-16 01:08:01'),
(25, 4, 0, 'ID', '-', 'studi-kasus', 'Studi Kasus', '<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Jelajahi studi kasus Indonesia dan contoh penerapan penatalayanan air yang baik di seluruh Indonesia dari berbagai sektor.</span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Natural Rubber 2019 Hevea |</span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Natural Rubber Processing Site Online Survey 2019 Hevea I</span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Hospitality Sector Hotel Indigo Seminyak IHG |</span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">GAA Hevea Connect<strong>&nbsp;|&nbsp;</strong></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Brantas mapping |&nbsp;</span></span></li>\r\n</ul>', 'Publish', 'Materi', 'Studi Kasus', NULL, NULL, NULL, 1, NULL, NULL, '2020-09-16 01:26:05', '2020-09-16 01:23:28', '2020-09-16 01:26:05'),
(26, 4, 0, 'ID', '-', 'platform-e-tools-untuk-anggota-aws', 'Platform e-Tools untuk Anggota AWS', '<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Cari tahu lebih lanjut tentang e-standar AWS, Panduan juga Modul Pembelajaran Online penatalayanan air di <a href=\"https://tools.a4ws.org/my-account/subscriptions/\" style=\"color:#0563c1; text-decoration:underline\">AWS Tool Hub</a>. Akses gratis untuk semua Anggota AWS dan non-anggota dapat membayar biaya untuk membuat akun.</span></span></p>', 'Publish', 'Materi', 'Platform e-Tools untuk Anggota AWS', NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-16 01:28:44', '2020-09-16 01:27:50', '2020-09-16 01:28:44'),
(27, 4, 0, 'ID', '-', 'webinars', 'Webinars', '<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Dapatkan wawasan Anda mengenai Standar dan Sistem AWS melalui webinar AWS dan diskusi penting lainnya tentang topik penatalayanan air di Indonesia.</span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">World Water Development Report 2020 Launch by UNESCO &amp; Climate Tracker </span></span><br />\r\n	<span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Lainnya: <a href=\"https://unesdoc.unesco.org/ark:/48223/pf0000372985.locale=en\" style=\"color:#0563c1; text-decoration:underline\">Laporan</a></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">GWPSEA Webinar COVID-19 Belajar dari Krisis untuk Pengelolaan Air Terpadu yang Lebih<br />\r\n	Rekaman: <a href=\"https://www.facebook.com/GlobalWaterPartnershipSoutheastAsia/videos/271658824268924/?_rdc=1&amp;_rdr\" style=\"color:#0563c1; text-decoration:underline\">Tersedia</a></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Air Tanah untuk Tanah Air</span></span><br />\r\n	<span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Rekaman: <a href=\"bit.ly/youtube-airtanah\" style=\"color:#0563c1; text-decoration:underline\">Tersedia</a></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Online Consultation &ndash; the Principles for Addressing Water-related Disaster Risk Reduction and COVID-19 </span></span><br />\r\n	<span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Lainnya: <a href=\"https://www.gwp.org/en/GWP-South-East-Asia/WE-ACT/keep-updated/News-and-Activities/2020/help-gwp-pan-asia-consultation-meeting/\" style=\"color:#0563c1; text-decoration:underline\">Summary</a></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">AWS Member Webinars: Spotlight on Indonesia Brantas River Basin, East Java</span></span><br />\r\n	<span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Rekaman: <a href=\"https://register.gotowebinar.com/recording/4530186227396155147\" style=\"color:#0563c1; text-decoration:underline\">Tersedia</a></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">World Water Week #AtHome 2020 &ndash; Water Stewardship in Agriculture</span></span><br />\r\n	<span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Rekaman: <a href=\"https://register.gotowebinar.com/recording/8511901561510833158\" style=\"color:#0563c1; text-decoration:underline\">Tersedia</a></span></span></li>\r\n</ul>', 'Publish', 'Materi', 'Webinars', NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-16 01:31:45', '2020-09-16 01:30:55', '2020-09-16 01:31:45'),
(28, 15, 6, 'ID', '-', '5-kursus-online-gratis-karena-corona-yang-bisa-dimanfaatkan', '5 Kursus Online Gratis Karena Corona yang Bisa Dimanfaatkan', '<h2 style=\"text-align:justify\">1. Class Central</h2>\r\n\r\n<p style=\"text-align:justify\"><a href=\"https://glints.com/id/lowongan/wp-content/uploads/2020/04/https___www.classcentral.com_bundles_classcentralsite_images_collections_collection-ivy-league-moocs-social.jpg\" target=\"_blank\"><img alt=\"kursus online gratis karena corona\" src=\"https://glints.com/id/lowongan/wp-content/uploads/2020/04/https___www.classcentral.com_bundles_classcentralsite_images_collections_collection-ivy-league-moocs-social-300x150.jpg\" style=\"height:300px; width:600px\" /></a></p>\r\n\r\n<p style=\"text-align:justify\"><a href=\"https://www.classcentral.com/\" rel=\"noopener noreferrer\" target=\"_blank\">Class Central</a>&nbsp;dikenal dengan kursus<em>&nbsp;online</em>&nbsp;nomor satu di dunia. Bagaimana tidak, Class Central menyajikan beragam kursus online di berbagai macam bidang.</p>\r\n\r\n<p style=\"text-align:justify\">Dilansir dari&nbsp;<a href=\"https://parade.com/1014515/jessicasager/free-online-courses/\" rel=\"noopener noreferrer\" target=\"_blank\">Parade</a>, Class Central menyajikan kursus online secara gratis yang tidak ada habisnya, bahkan sampai saat ini sedang berlangsung wabah virus corona.</p>\r\n\r\n<p style=\"text-align:justify\">Seperti yang sudah dijelaskan di atas, kursus&nbsp;<em>online</em>&nbsp;dari Class Central berbagai macam topik, seperti seni dan desain, sastra, bisnis, dan masih banyak lagi.</p>\r\n\r\n<p style=\"text-align:justify\">Kursus&nbsp;<em>online</em>&nbsp;gratis ini tentu cocok menemani kamu ketika sedang menjalani masa karantina karena corona.</p>\r\n\r\n<h2 style=\"text-align:justify\">2. Coursera</h2>\r\n\r\n<p style=\"text-align:justify\"><a href=\"https://glints.com/id/lowongan/wp-content/uploads/2020/04/coursera.png\" target=\"_blank\"><img alt=\"kursus online gratis karena corona\" src=\"https://glints.com/id/lowongan/wp-content/uploads/2020/04/coursera-300x287.png\" style=\"height:574px; width:600px\" /></a></p>\r\n\r\n<p style=\"text-align:justify\"><a href=\"https://www.coursera.org/\" rel=\"noopener noreferrer\" target=\"_blank\">Coursera</a>&nbsp;merupakan&nbsp;<em>platform</em>&nbsp;pembelajaran&nbsp;<em>online</em>&nbsp;di Amerika yang didirikan oleh profesor Stanford Andrew dan Daphne Koller pada tahun 2012.</p>\r\n\r\n<p style=\"text-align:justify\">Kursus&nbsp;<em>online</em>&nbsp;yang satu ini menyediakan lebih dari 3.900 kursus yang dapat kamu pelajari dengan berbagai bidang, yaitu sekolah seni, data analisis, dan lain sebagainya.</p>\r\n\r\n<p style=\"text-align:justify\">Selain menyajikan kursus&nbsp;<em>online</em>&nbsp;gratis, Coursera juga menyediakan kursus berbayar di kursus-kursus tertentu serta tentunya mendapatkan sertifikat ketika kamu selesai mengikuti kursus.</p>\r\n\r\n<h2 style=\"text-align:justify\">3. edX</h2>\r\n\r\n<p style=\"text-align:justify\"><a href=\"https://glints.com/id/lowongan/wp-content/uploads/2020/04/edx_courses1200x630_v2-1.png\" target=\"_blank\"><img alt=\"kursus online gratis karena corona\" src=\"https://glints.com/id/lowongan/wp-content/uploads/2020/04/edx_courses1200x630_v2-1-300x158.png\" style=\"height:315px; width:600px\" /></a></p>\r\n\r\n<p style=\"text-align:justify\">Apakah kamu sudah merasa suntuk dan bosan berada di rumah selama virus corona?</p>\r\n\r\n<p style=\"text-align:justify\">Mungkin kamu harus mempertimbangkan untuk mengembangkan diri mengikuti kursus-kursus online dari&nbsp;<a href=\"https://www.edx.org/\" rel=\"noopener noreferrer\" target=\"_blank\">edX</a>.</p>\r\n\r\n<p style=\"text-align:justify\">Dengan edX, kamu dapat mengakses lebih dari 2.500 kursus dengan berbagai bidang yang disajikan, seperti seni,&nbsp; budaya, ilmu komputer, bisnis, manajemen, desain, dan lain sebagainya.</p>\r\n\r\n<p style=\"text-align:justify\">Sudah banyak profesional yang ikut dalam&nbsp;<em>platform</em>&nbsp;kursus online ini. Secara khusus, edX telah bekerja sama dengan 140 institusi di dunia.</p>\r\n\r\n<p style=\"text-align:justify\">Tak ada salahnya bagi kamu untuk mencoba kursus&nbsp;<em>online</em>&nbsp;ini ketika masa pandemi virus corona karena ada program yang bersifat gratis.</p>\r\n\r\n<h2 style=\"text-align:justify\">4. Fender Play</h2>\r\n\r\n<p style=\"text-align:justify\"><a href=\"https://glints.com/id/lowongan/wp-content/uploads/2020/04/fender-play-og.jpg\" target=\"_blank\"><img alt=\"\" src=\"https://glints.com/id/lowongan/wp-content/uploads/2020/04/fender-play-og-300x158.jpg\" style=\"height:315px; width:600px\" /></a></p>\r\n\r\n<p style=\"text-align:justify\">Mungkin bagi pencinta musik sudah tidak asing dengan Fender yang merupakan salah satu merek gitar ternama di dunia.</p>\r\n\r\n<p style=\"text-align:justify\">Kabar baiknya, Fender menyediakan kursus&nbsp;<em>online</em>&nbsp;untuk bermain musik lewat platform&nbsp;<em>online</em>&nbsp;yang bernama&nbsp;<a href=\"https://www.fender.com/play?clickref=1011l837APW2&amp;aff_id=305950\" rel=\"noopener noreferrer\" target=\"_blank\">Fender Play</a>.</p>\r\n\r\n<p style=\"text-align:justify\">Kursus&nbsp;<em>online</em>&nbsp;gratis ini wajib dicoba untuk kamu yang senang musik, karena kamu dapat belajar memainkan, gitar, bass, dan ukulele saat wabah corona.</p>\r\n\r\n<p style=\"text-align:justify\">Fender Play hanya gratis dalam tiga bulan pertama saja untuk pengguna baru. Namun, setelah itu kamu dapat membatalkannya jika kamu tidak ingin melanjutkannya lagi.</p>\r\n\r\n<h2 style=\"text-align:justify\">5. Course Private</h2>\r\n\r\n<p style=\"text-align:justify\">Course Private menyediakan kursus dengan berbagai macam kategori kursus yang tersedia, mulai dari pemrogramman web, mobile, statistika, dan lain-lain.</p>\r\n\r\n<p style=\"text-align:justify\">Selain itu, Course Private juga menyediakan tipe kursus yang bermacam-macam, seperti kursus bersertifikat, kursus diploma dan belajar secara bertahap.</p>\r\n\r\n<p style=\"text-align:justify\">Jika kamu tertarik, tidak ada salahnya untuk mulai kursus&nbsp;<em>online</em>&nbsp;lewat Course Private.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Itu dia 5 kursus<em>&nbsp;online</em>&nbsp;gratis yang dapat kamu gunakan karena adanya wabah virus corona. Program-program gratis ini bisa membantu ketika harus menyiasati&nbsp;<a href=\"https://glints.com/id/lowongan/mengatur-keuangan-saat-wabah-virus-corona/\" rel=\"noopener noreferrer\" target=\"_blank\">keuangan saat corona</a>.</p>\r\n\r\n<p style=\"text-align:justify\">Yang jelas, jangan biarkan dirimu berdiam diri saja selama virus corona. Terus bergerak dan pelajari hal-hal baru.</p>\r\n\r\n<p style=\"text-align:justify\">Selain kursus-kursus&nbsp;<em>online&nbsp;</em>di atas, kamu juga bisa mengikuti kelas yang diadakan oleh Glints ExpertClass, lho.</p>\r\n\r\n<p style=\"text-align:justify\">Glints ExpertClass adalah kelas yang akan dibawakan oleh profesional dari berbagai macam bidang, dengan topik-topik yang sangat bermanfaat untuk kariermu.</p>\r\n\r\n<p style=\"text-align:justify\">Kamu bisa belajar mengenai topik&nbsp;<em>marketing</em>, desain,&nbsp;<em>tech</em>, dan lain-lain langsung para ahlinya secara&nbsp;<em>online</em>.</p>\r\n\r\n<p style=\"text-align:justify\">Menarik, kan? Yuk,&nbsp;<a href=\"https://glints.com/id/expert-class\" rel=\"noopener\" target=\"_blank\">cari kelas yang ingin diikuti</a>&nbsp;dan daftarkan dirimu sekarang!</p>', 'Publish', 'Berita', 'kursus online', NULL, NULL, NULL, 1, NULL, NULL, '2021-05-29 14:29:02', '2021-05-30 14:19:53', '2021-05-29 14:29:53'),
(29, 19, 0, 'ID', '-', 'kursus-android-android-developer-course', 'Kursus Android (Android Developer Course)', '<h2>Deskripsi ringkas</h2>\r\n\r\n<p>Anda akan belajar membuat aplikasi Android dengan menggunakan Android Studio, Genie Motion dan software-software pendukung lainnya. Aplikasi Android yang dibuat nantinya akan support terhadap berbagai ukuran device dan bisa dipublikasikan di Google Play Store.</p>\r\n\r\n<hr />\r\n<p>Anda akan belajar&nbsp;membuat aplikasi Android dengan menggunakan Android Studio, Genie Motion dan software-software pendukung lainnya. Aplikasi Android yang dibuat nantinya akan support terhadap berbagai ukuran&nbsp;<em>device</em>&nbsp;dan bisa dipublikasikan di Google Play Store.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Level Kursus (Tingkat Kesulitan)</h3>\r\n\r\n<p>Secara umum kursus ini dibagi menjadi dua paket utama, yaitu:</p>\r\n\r\n<ul>\r\n	<li>Level&nbsp;<strong><em>Beginner Class</em></strong><br />\r\n	Level ini diperuntukkan bagi yang benar-benar pemula atau baru belajar membuat aplikasi Android.</li>\r\n	<li>Level&nbsp;<em><strong>Intermediate Class&nbsp;</strong></em><br />\r\n	Bagi Anda yang telah memiliki dasar-dasar pembuatan aplikasi Android maka Anda dapat mengambil kelas lanjut ini.<br />\r\n	&nbsp;</li>\r\n</ul>\r\n\r\n<h3>Tujuan Kursus</h3>\r\n\r\n<p>Setelah Anda belajar&nbsp;di&nbsp;<em><strong>Kursus Android (Android Developer Course)</strong></em>, Anda akan dapat:</p>\r\n\r\n<ul>\r\n	<li>Membuat&nbsp;aplikasi Android</li>\r\n	<li>Membuat aplikasi Android untuk situs berita</li>\r\n	<li>Membuat aplikasi chat realtime</li>\r\n	<li>Bekerja sebagai&nbsp;<strong>Junior Mobile Developer/Programmer</strong></li>\r\n</ul>\r\n\r\n<h3>Materi untuk&nbsp;<em>Beginner Class</em></h3>\r\n\r\n<ol>\r\n	<li>Activity dan layout aplikasi</li>\r\n	<li>View/tampilan</li>\r\n	<li>Resource</li>\r\n	<li>Java dan XML</li>\r\n	<li>SQLite dan shared preferences</li>\r\n	<li>List view</li>\r\n	<li>List adapter dan activity lifecycle</li>\r\n	<li>Menu dan style</li>\r\n	<li>Dialog</li>\r\n	<li>Android Volley</li>\r\n</ol>\r\n\r\n<h3>Materi untuk&nbsp;<em>Intermediate</em><em>&nbsp;Class</em></h3>\r\n\r\n<ol>\r\n	<li>Constraint layout</li>\r\n	<li>Fragment</li>\r\n	<li>Navigation drawer</li>\r\n	<li>Custom Drawable</li>\r\n	<li>Android Animation</li>\r\n	<li>Google Maps</li>\r\n	<li>Firebase Cloud Messaging</li>\r\n	<li>Service and intent services</li>\r\n	<li>Task schedulling</li>\r\n	<li>Multil anguage</li>\r\n	<li>Google analytic and ad mobs</li>\r\n	<li>Unit test framework</li>\r\n</ol>', 'Publish', 'Layanan', 'Anda akan belajar membuat aplikasi Android dengan menggunakan Android Studio, Genie Motion dan software-software pendukung lainnya. Aplikasi Android yang dibuat nantinya akan support terhadap berbagai ukuran device dan bisa dipublikasikan di Google Play Store.', '1491566673574-1622345843.jpg', NULL, NULL, NULL, NULL, NULL, '2021-05-30 01:59:41', '2021-05-30 01:56:21', '2021-05-30 04:02:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_kategori_galeri` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `judul_galeri` varchar(200) DEFAULT NULL,
  `jenis_galeri` varchar(20) NOT NULL,
  `isi` text DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `popup_status` enum('Publish','Draft','','') NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `status_text` enum('Ya','Tidak','','') NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `id_kategori_galeri`, `id_user`, `bahasa`, `judul_galeri`, `jenis_galeri`, `isi`, `gambar`, `website`, `hits`, `popup_status`, `urutan`, `status_text`, `tanggal`) VALUES
(15, 4, 4, 'ID', 'Course Private', 'Homepage', NULL, 'banner-3-1-1600727828.jpg', 'https://courseprivate.com/kursus', NULL, 'Publish', NULL, 'Ya', '2021-05-25 09:50:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `heading`
--

CREATE TABLE `heading` (
  `id_heading` int(11) NOT NULL,
  `id_user` int(11) DEFAULT 0,
  `judul_heading` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `halaman` varchar(255) DEFAULT 'NULL',
  `tanggal` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `heading`
--

INSERT INTO `heading` (`id_heading`, `id_user`, `judul_heading`, `keterangan`, `gambar`, `halaman`, `tanggal`) VALUES
(1, 0, 'Berita dan Updates', '<p>Berita dan Updates</p>', 'heading-03-1600256326.jpg', 'Berita', '2020-09-16 11:38:46'),
(2, 0, 'AWS Indonesia', '<p>AWS Indonesia</p>', 'aws-indonesia-1600259780.jpg', 'AWS', '2020-09-16 12:36:20'),
(3, 0, 'Halaman Kontak', '<p>Halaman Kontak</p>', 'kontak-1600257025.jpg', 'Kontak', '2020-09-16 11:50:25'),
(4, 0, 'Board and Team', '<p>Board and Team</p>', 'board-and-team-300-1600260175.jpg', 'Team', '2020-09-16 12:42:55'),
(5, 0, 'Layanan', '<p>Penatalayanan air memungkinkan pengguna air bekerjasama untuk mengidentifikasi dan mencapai tujuan bersama untuk pengelolaan air yang berkelanjutan dan keamanan air bersama. Penatalayanan air yang baik didefinisikan sebagai penggunaan air yang adil secara sosial dan budaya, berkelanjutan secara lingkungan dan menguntungkan secara ekonomi, dicapai melalui proses inklusif pemangku kepentingan yang mencakup tindakan berbasis wilayah operasional dan daerah tangkapan air (DAS).</p>\r\n<p>AWS Indonesia meripakan promosi dan penerapan penatalayanan air yang baik dan standar penatalayanan air internasional (<a href=\"https://a4ws.org/the-aws-standard-2-0/\">AWS Standard</a>) di Indonesia sebagai mitra negara <a href=\"https://waterstewardship.org.au/\">Alliance for Water Stewardship Asia-Pacific</a> dan <a href=\"https://a4ws.org/about/\">Alliance for Water Stewardship SCIO</a>.</p>\r\n<p>Apakah Anda tertarik untuk mempelajari lebih lanjut mengenai penatalayanan air dan aktivitas kami di Indonesia? Apakah Anda Manajer Sustainability atau Engineer Air yang ingin menerapkan penatalayanan air di wilayah operasional Anda? Hubungi kami dan mari kita mulai penatalayanan air bersama-sama.</p>', 'layanan-1600315713.jpg', 'Layanan', '2020-09-17 04:08:33'),
(6, 0, 'Dokumen', '<p>Dokumen</p>', 'dokumen-1600317093.jpg', 'Dokumen', '2020-09-17 04:31:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `id_user`, `bahasa`, `slug_kategori`, `nama_kategori`, `urutan`, `hits`, `tanggal`) VALUES
(6, 4, 'ID', 'berita', 'Berita', 3, 0, '2020-09-12 21:36:42'),
(8, 4, 'ID', 'updates', 'Updates', 2, NULL, '2020-09-12 21:36:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_agenda`
--

CREATE TABLE `kategori_agenda` (
  `id_kategori_agenda` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_kategori_agenda` varchar(255) NOT NULL,
  `nama_kategori_agenda` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_agenda`
--

INSERT INTO `kategori_agenda` (`id_kategori_agenda`, `bahasa`, `slug_kategori_agenda`, `nama_kategori_agenda`, `keterangan`, `urutan`) VALUES
(4, 'ID', 'kursus-offline', 'Kursus Offline', 'STMIK AKAKOM YOGYAKARTA', 2),
(6, 'ID', 'kursus-online', 'Kursus Online', 'Google Meet dan Zoom', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_kursus`
--

CREATE TABLE `kategori_kursus` (
  `id_kategori_kursus` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_kategori_kursus` varchar(255) NOT NULL,
  `nama_kategori_kursus` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_kursus`
--

INSERT INTO `kategori_kursus` (`id_kategori_kursus`, `bahasa`, `slug_kategori_kursus`, `nama_kategori_kursus`, `keterangan`, `urutan`) VALUES
(4, 'ID', 'Kursus-Android', 'Kursus Android (Android Developer Course) - Rp. 4.000.000', 'Rp. 4.000.000', 0),
(5, 'ID', 'Kusus-Desain-Grafis', 'Kursus Desain Grafis - Rp. 2.900.000', 'Rp. 2.900.000', 4),
(6, 'ID', 'Kursus-Web-Desain', 'Kursus Web Desain - Rp. 2.500.000', 'Rp. 2.500.000', 3),
(7, 'ID', 'Kursus-Web-Development', 'Kursus Web Development - Rp. 3.250.000', 'Rp. 3.250.000', 1),
(8, 'ID', 'Kursus-Web-Programming', 'Kursus Web Programming - Rp. 2.700.000', 'Rp. 2.700.000', 2),
(9, 'ID', 'Kursus-Wordpress', 'Kursus Wordpress (Mastering CMS) - Rp. 2.750.000', 'Rp. 2.750.000', 5),
(10, 'ID', 'kursus-advanced-web-programming-rp-3750000', 'Kursus Advanced Web Programming - Rp. 3.750.000', 'Rp. 3.750.000', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_staff`
--

CREATE TABLE `kategori_staff` (
  `id_kategori_staff` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_kategori_staff` varchar(255) NOT NULL,
  `nama_kategori_staff` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_staff`
--

INSERT INTO `kategori_staff` (`id_kategori_staff`, `bahasa`, `slug_kategori_staff`, `nama_kategori_staff`, `keterangan`, `urutan`) VALUES
(4, 'ID', 'tutor-programmer', 'Tutor Programmer', 'Yeay...selain tim mentor kita juga ada tim programmer yang bekerja full time maupun part time', 2),
(6, 'ID', 'mentor', 'Mentor', 'Course Private didampingi oleh mentor-mentor dan instruktur yang berpengalaman di bidangnya.', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `namaweb` varchar(200) NOT NULL,
  `nama_singkat` varchar(200) DEFAULT NULL,
  `tagline` varchar(200) DEFAULT NULL,
  `tagline2` varchar(255) DEFAULT NULL,
  `tentang` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_cadangan` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `hp` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `keywords` varchar(400) DEFAULT NULL,
  `metatext` text DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `google_plus` varchar(255) DEFAULT NULL,
  `nama_facebook` varchar(255) NOT NULL,
  `nama_twitter` varchar(255) NOT NULL,
  `nama_instagram` varchar(255) NOT NULL,
  `nama_google_plus` varchar(255) NOT NULL,
  `singkatan` varchar(255) NOT NULL,
  `google_map` text DEFAULT NULL,
  `judul_1` varchar(200) DEFAULT NULL,
  `pesan_1` varchar(200) DEFAULT NULL,
  `judul_2` varchar(200) DEFAULT NULL,
  `pesan_2` varchar(200) DEFAULT NULL,
  `judul_3` varchar(200) DEFAULT NULL,
  `pesan_3` varchar(200) DEFAULT NULL,
  `judul_4` varchar(200) DEFAULT NULL,
  `pesan_4` varchar(200) DEFAULT NULL,
  `judul_5` varchar(200) DEFAULT NULL,
  `pesan_5` varchar(200) NOT NULL,
  `judul_6` varchar(200) DEFAULT NULL,
  `pesan_6` varchar(200) NOT NULL,
  `isi_1` varchar(500) DEFAULT NULL,
  `isi_2` varchar(500) DEFAULT NULL,
  `isi_3` varchar(500) DEFAULT NULL,
  `isi_4` varchar(500) DEFAULT NULL,
  `isi_5` varchar(500) DEFAULT NULL,
  `isi_6` varchar(500) DEFAULT NULL,
  `link_1` varchar(255) DEFAULT NULL,
  `link_2` varchar(255) DEFAULT NULL,
  `link_3` varchar(255) DEFAULT NULL,
  `link_4` varchar(255) DEFAULT NULL,
  `link_5` varchar(255) DEFAULT NULL,
  `link_6` varchar(255) DEFAULT NULL,
  `javawebmedia` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `rekening` text DEFAULT NULL,
  `prolog_topik` text DEFAULT NULL,
  `prolog_program` text DEFAULT NULL,
  `prolog_sekretariat` text DEFAULT NULL,
  `prolog_aksi` text DEFAULT NULL,
  `prolog_kolaborasi` text DEFAULT NULL,
  `prolog_sebaran` text DEFAULT NULL,
  `gambar_berita` varchar(255) DEFAULT NULL,
  `prolog_agenda` text DEFAULT NULL,
  `prolog_wawasan` text DEFAULT NULL,
  `protocol` varchar(255) DEFAULT NULL,
  `smtp_host` varchar(255) DEFAULT NULL,
  `smtp_port` varchar(255) DEFAULT NULL,
  `smtp_timeout` varchar(255) DEFAULT NULL,
  `smtp_user` varchar(255) DEFAULT NULL,
  `smtp_pass` varchar(255) DEFAULT NULL,
  `judul_pembayaran` varchar(255) DEFAULT NULL,
  `isi_pembayaran` text DEFAULT NULL,
  `gambar_pembayaran` varchar(255) DEFAULT NULL,
  `link_bawah_peta` varchar(255) DEFAULT NULL,
  `text_bawah_peta` varchar(255) DEFAULT NULL,
  `cara_pesan` enum('Keranjang Belanja','Formulir Pemesanan') DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `bahasa`, `namaweb`, `nama_singkat`, `tagline`, `tagline2`, `tentang`, `deskripsi`, `website`, `email`, `email_cadangan`, `alamat`, `telepon`, `hp`, `fax`, `logo`, `icon`, `keywords`, `metatext`, `facebook`, `twitter`, `instagram`, `google_plus`, `nama_facebook`, `nama_twitter`, `nama_instagram`, `nama_google_plus`, `singkatan`, `google_map`, `judul_1`, `pesan_1`, `judul_2`, `pesan_2`, `judul_3`, `pesan_3`, `judul_4`, `pesan_4`, `judul_5`, `pesan_5`, `judul_6`, `pesan_6`, `isi_1`, `isi_2`, `isi_3`, `isi_4`, `isi_5`, `isi_6`, `link_1`, `link_2`, `link_3`, `link_4`, `link_5`, `link_6`, `javawebmedia`, `gambar`, `video`, `rekening`, `prolog_topik`, `prolog_program`, `prolog_sekretariat`, `prolog_aksi`, `prolog_kolaborasi`, `prolog_sebaran`, `gambar_berita`, `prolog_agenda`, `prolog_wawasan`, `protocol`, `smtp_host`, `smtp_port`, `smtp_timeout`, `smtp_user`, `smtp_pass`, `judul_pembayaran`, `isi_pembayaran`, `gambar_pembayaran`, `link_bawah_peta`, `text_bawah_peta`, `cara_pesan`, `id_user`, `tanggal`) VALUES
(1, 'ID', 'Course Private', 'Course Private', 'Pusat Kursus Private &  Kelas Web, Mobile Apps, Desain Grafis dan Statistik', 'Pusat Kursus Private &  Kelas Web, Mobile Apps, Desain Grafis dan Statistik', '<p>Course Private adalah Pusat Kursus Private dan Reguler bidang Desain Grafis, Web Programming, Mobile Application dan Statistik</p>\r\n\r\n<p>Cousre Private berdiri pada tanggal 25 Mei 2021. Course Private awalnya hanya bergerak di bidang pembuatan dan pengembangan website kemudian mulai bergerak di bidang pengembangan sumber daya manusia, khususnya di bidang keahlian computer&nbsp;<em>Graphic Design</em>,&nbsp;<em>Web Design</em>&nbsp;dan&nbsp;<em>Web Development.</em></p>\r\n\r\n<p>Course Private adalah lembaga kursus yang bergerak di bidang pendidikan khususnya kursus website, digital marketing, desain grafis dan statistik.</p>\r\n\r\n<p>&nbsp;</p>', 'Code fo Life', 'https://courseprivate.com', 'contact@courseprivate.com', 'courseprivate@gmail.com', 'Jl. Raya Janti No.143, Jaranan, Banguntapan, Kec. Banguntapan, Bantul, Daerah Istimewa Yogyakarta 55198', '08132224455', '+62822334455', '08123456789', 'imageedit-1-2901879195.png', 'imageedit-1-2901879195.png', 'course private, laravel, online course, kursus online', NULL, 'https://www.facebook.com/courseprivate', 'http://twitter.com/courseprivate', 'https://instagram.com/courseprivate', 'https://www.youtube.com/channel/UCOtafetLdHyL8QL8lA4kwbw', 'CoursePrivate', 'CoursePrivate', 'CoursePrivate', '', 'CP', '<iframe src=\"https://www.google.com/maps/place/STMIK+Akakom+Yogyakarta/@-7.8723337,109.9319556,10z/data=!4m19!1m13!4m12!1m4!2m2!1d110.0135714!2d-7.8248146!4e1!1m6!1m2!1s0x2e7a59e18b1c28d1:0xe2d750662f2edace!2sakakom!2m2!1d110.4083417!2d-7.7927142!3m4!1s0x2e7a59e18b1c28d1:0xe2d750662f2edace!8m2!3d-7.7927142!4d110.4083417\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', 'Tempat belajar nyaman', 'fa fa-home', 'Materi Kursus Selalu Update', 'fa fa-laptop', 'Jadwal Flexibel', 'fa fa-thumbs-up', 'Menjaga Amanah', 'fa-check-square-o', 'Tempat belajar nyaman', 'fa-home', 'Online service', 'fa-laptop', 'Kami menyediakan tempat belajar yang nyaman dan menyenangkan serasa di rumah sendiri', 'Materi kursus kamu selalu uptodate, Anda bisa mengunduh apa yang dipelajari', 'Bagi Anda siswa yang ingin belajar, kami menerapkan jadwal flexibel', 'Kami senantiasa menjaga amanah yang diberikan kepada donatur agar sampai di tangan yang berhak.', 'Kami menyediakan tempat belajar yang nyaman dan menyenangkan', 'Website kamu selalu uptodate, Anda bisa mengunduh apa yang dipelajari', '', '', '', '', '', '', '<p>Berawal dari keinginan ibunda Hj.Masah Muhari diakhir hidupnya untuk mewakaan sebagian hartanya dijalan Allah, gayungpun bersambut pada bulan Mei 2011 saat kami akan melaksanakan ibadah umrah, Seorang rekan kami sesama Jamaah bernama ustadzah Hj. Zainur Fahmid memberikan informasi Tentang Anggota yang hendak mewakaan sebidang tanahnya di wilayah Beji Timur. Kami pun memanjatkan doa di kota suci dengan penuh rasa harap pertolongan Allah untuk menunjukan jalan terbaik-Nya, maka sepulang umroh kami mengadakan pertemuan di kediaman Ibu Dra Hj Ratna Mardjanah untuk membicarakan visi misi kami dalam wakaf tersebut dan sepakat untuk mendirikan Istana Yatim Riyadhul Jannah ini.</p>\r\n<p>Nama Riyadhul Jannah Sendiri diambil dari nama pengelola wakaf (H. Ahmad Riyadh Muchtar, Lc) dan pemberi wakaf (Dra Hj Ratna Mardjanah). Istana Yatim Riyadhul Jannah hadir untuk melayani dan memfasilitasi segala kebutuhan anak yatim, terutama pendidikan agama, akhlak dan kehidupan yang layak untuk bekal masa depan mereka yang cerah agar bisa memberi manfaat bagi umat. Harapan kami semoga dengan membangunkan istana untuk anak yatim, maka Allah akan berikan istana-Nya di surga kelak dan kita termasuk manusia yang bisa memberika manfaat bagi sesama sebagaimana sabda Rasulullah SAW yang artinya:&nbsp;</p>\r\n<p>&ldquo;Sebaik-baik manusia adalah yang paling bermanfaat bagi manusia lainnya&rdquo;&nbsp;</p>\r\n<p>erimakasih atas segala bentuk bantuan yang dipercayakan kepada kami baik secara materi, tenaga dan kiran serta doa para muhsinin dan muhsinat Istana Yatim Riyadhul Jannah selama ini, mulai dari rencana pendirian hingga berkembang seperti saat ini. Semoga segala amal menjadi shadaqah jariyah disisi-Nya.&nbsp;</p>\r\n<p>&nbsp;</p>', '1491566673574.jpg', 'fsH_KhUWfho', '<table id=\"dataTables-example\" class=\"table table-bordered\" width=\"100%\">\r\n<thead>\r\n<tr>\r\n<th tabindex=\"0\" colspan=\"1\" rowspan=\"1\" width=\"19%\">Nama Bank</th>\r\n<th tabindex=\"0\" colspan=\"1\" rowspan=\"1\" width=\"21%\">Nomor Rekening</th>\r\n<th tabindex=\"0\" colspan=\"1\" rowspan=\"1\" width=\"7%\">Atas nama</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>BCA KCP Margo City</td>\r\n<td>4212548204</td>\r\n<td>Andoyo</td>\r\n</tr>\r\n<tr>\r\n<td>Bank Mandiri KCP Universitas Indonesia</td>\r\n<td>1570001807768</td>\r\n<td>Eflita Meiyetriani</td>\r\n</tr>\r\n<tr>\r\n<td>Bank BNI Syariah Kantor Cabang Jakarta Selatan</td>\r\n<td>0105301001</td>\r\n<td>Eflita Meiyetriani</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<p>Dalam mewujudkan pembangunan berkelanjutan, pemerintah kabupaten anggota LTKL telah mengidentifikasi dan memilih topik yang sesuai dengan kondisi di daerahnya. Ada 5 topik prioritas yang dipilih dengan penerapan yang disesuaikan kembali di masing-masing kabupaten.</p>', NULL, '<p>Setelah Lingkar Temu Kabupaten Lestari (LTKL) diinisiasi, kesekretariatan dibentuk untuk membantu para pemerintah kabupaten anggota bekerja dan berkolaborasi. Walaupun tidak memiliki mandat implementasi, Sekretariat LTKL menjadi vital dalam melancarkan koordinasi, pengumpulan basis data, hingga pelaporan perkembangan. Sekretariat LTKL juga diperkuat dengan kehadiran personil yang telah berpengalaman di bidang management pengetahuan, program pembangunan berkelanjutan hingga kebijakan.</p>', '', '<p>Lingkar Temu Kabupaten Lestari (LTKL) mengedepankan kolaborasi dalam mewududkan pembangunan berkelanjutan. Ada 10 kabupaten yang tersebar di 6 provinsi di Indonesia telah menjadi anggota LTKL.</p>\r\n<p>Hingga kini, berbagai pihak telah ikut berkolaborasi, mulai dari pemerintah kabupaten, sekeretariat LTKL, mitra pembangunan hingga pihak swasta.</p>', '', 'balairung-budiutomo-01.jpg', '<p>Acara yang ditampilkan merupakan kumpulan acara LTKL, mitra, maupun pemerintah kabupaten anggota LTKL, mulai dari acara seminar hingga festival.</p>', '<p>LTKL bukan satu-satunya yang bergerak dalam mewujudkan pembangunan berkelanjutan, serta upaya penanggulangan perubahan iklim. Ikuti terus perkembangan usaha LTKL serta rekan-rekan lain menuju bumi dan Indonesia yang lestari.</p>', 'smtp', 'ssl://mail.courseprivate.com', '465', '12', 'info@courseprivate.com', 'courseprivate', 'Metode Pembayaran Produk', '<p>Anda dapat melakukan pembayaran dengan beberapa cara, yaitu:</p>\r\n<ol>\r\n<li><strong>Pembayaran Tunai</strong>, dapat Anda serahkan secara langsung ke salah satu staff Java Web Media</li>\r\n<li><strong>Pembayar Via Transfer Rekening</strong></li>\r\n</ol>\r\n<p>Lakukan transfer biaya atas layanan dan produk&nbsp;<strong>Java Web Media</strong>&nbsp;ke salah satu rekening di bawah ini.</p>\r\n<h3>Konfirmasi Pembayaran</h3>\r\n<p>Anda dapat melakukan konfirmasi pembayaran melalui:</p>\r\n<ul>\r\n<li><strong>Melalui Email</strong>, silakan kirim bukti pembayaran ke:&nbsp;<strong><a href=\"mailto:contact@javawebmedia.co.id?subject=Konfirmasi%20Pembayaran\">contact@javawebmedia.co.id</a></strong></li>\r\n<li><strong>Melalui Whatsapp</strong>, kirimkan bukti pembayaran Anda ke&nbsp;<strong>+6281210697841</strong></li>\r\n<li><strong>Melalui Formulir Konfirmasi Pembayaran</strong>, Anda dapat mengunggah bukti pembayaran Anda melalui form&nbsp;<strong><a title=\"Konfirmasi Pembayaran\" href=\"https://javawebmedia.com/konfirmasi\">&nbsp;Konfirmasi Pembayaran</a></strong></li>\r\n</ul>', 'payment.jpg', NULL, NULL, 'Formulir Pemesanan', 15, '2021-05-30 01:17:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `murid`
--

CREATE TABLE `murid` (
  `id_murid` int(11) NOT NULL,
  `id_kategori_kursus` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `slug_murid` varchar(255) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `kursus` varchar(200) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `telepon` varchar(200) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `pembayaran` varchar(200) DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  `keywords` varchar(200) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `murid`
--

INSERT INTO `murid` (`id_murid`, `id_kategori_kursus`, `id_user`, `slug_murid`, `nama`, `kursus`, `alamat`, `email`, `telepon`, `isi`, `gambar`, `status`, `pembayaran`, `urutan`, `keywords`, `tanggal`) VALUES
(85, 7, 15, 'nanda-7', 'Nanda', NULL, 'Purworejo', 'nanda@gmail.com', '081322455678', '<p>mahasiswa jurusan rpla</p>', 'whatsapp-image-2021-02-08-at-103634-1622334598.jpeg', 'Lunas', 'BNI', 1, 'Nanda', '2021-05-30 00:29:58'),
(87, 4, 15, 'ahmad-4', 'Ahmad', NULL, 'Klaten', 'ahmad@gmail.com', '0899922232', '<p>SMK Jurusan TKJ&nbsp;</p>', 'celo-1622350872.jpg', 'Belum Bayar', 'BANK MANDIRI', 2, 'ahmad', '2021-05-30 05:01:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `nomor_rekening` varchar(255) NOT NULL,
  `atas_nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nama_bank`, `nomor_rekening`, `atas_nama`, `gambar`, `urutan`, `tanggal`) VALUES
(1, 'BCA', '4212-5482-04', 'PRISKANANDA', 'bca.jpg', 1, '2021-05-25 10:02:39'),
(2, 'BNI SYARIAH ', '0611-9927-06', 'NUR KOFIFAH', 'Logo_BNI_Syariah.png', 2, '2021-05-25 10:03:02'),
(4, 'BANK MANDIRI', '157-00-0180776-8', 'MUHAMMAD DEWA ERLANG', 'mandiri.png', 4, '2021-05-25 10:04:30'),
(5, 'BANK BNI ', '0105-3010-01', 'YANUAR PRIYANTO', 'bni.png', 5, '2021-05-25 10:18:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_kategori_staff` int(11) NOT NULL,
  `slug_staff` varchar(255) NOT NULL,
  `nama_staff` varchar(255) NOT NULL,
  `jabatan` varchar(200) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `expertise` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  `status_staff` varchar(20) NOT NULL,
  `keywords` varchar(200) DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`id_staff`, `id_user`, `id_kategori_staff`, `slug_staff`, `nama_staff`, `jabatan`, `pendidikan`, `expertise`, `email`, `telepon`, `isi`, `gambar`, `status_staff`, `keywords`, `urutan`, `tanggal`) VALUES
(1, 16, 4, 'priskananda-surya-nindiya-mentor', 'Priskananda Surya Nindiya', 'Mentor', 'D3', 'PHP, MYSQL, JAVA, HTML', 'nandasuria@gmail.com', '081326673771', NULL, 'img-20170610-061555-1621999906.jpg', 'Ya', NULL, 1, '2021-05-26 03:31:47'),
(3, 16, 4, 'muhammad-dewa-erlang-mentor', 'Muhammad Dewa Erlang', 'Mentor', 'D3', 'PHP, MYSQL, JAVA, HTML', 'dewa@gmail.com', '089233456221', NULL, '143381037-887657265316877-3511392841100697001-n-1-1621999466.jpg', 'Ya', NULL, 3, '2021-05-26 03:24:27'),
(4, 16, 6, 'yanuar-priyanto-wakil-ketua-dan-mentor', 'Yanuar Priyanto', 'Wakil Ketua dan Mentor', 'D3', 'PHP, MYSQL, JAVA, HTML', 'Yanuar@gmail.com', '089222333444', NULL, 'board-and-team-07-1599999946.png', 'Ya', NULL, 0, '2021-05-26 03:04:58'),
(5, 16, 6, 'nur-khofifah-ketua-dan-mentor', 'Nur Khofifah', 'Ketua dan Mentor', 'D3', 'PHP, MYSQL, JAVA, HTML', 'fifah@gmail.com', '08112222233', NULL, '127280777-2466902240279004-3864743771555670928-n-1621996571.jpg', 'Ya', NULL, 2, '2021-05-26 03:22:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `kode_rahasia` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `kode_rahasia`, `gambar`, `tanggal`) VALUES
(15, 'Priskananda Surya Nindiya', 'nandasuria@gmail.com', 'nanda', '16e8b7d240c81a0cbc6c0d5dcf00ef946b771823', 'Admin', NULL, 'img-20170610-061555-1621901394.jpg', '2021-05-30 02:05:14'),
(16, 'nanda surya', 'nanda@gmail.com', 'ciput', 'c6b429bd8264d4738ac45bf7fb218ed57583264c', 'User', NULL, '1491566673574-1621901478.jpg', '2021-05-25 00:11:18'),
(17, 'Nur Khofifah', 'fifah@gmail.com', 'fifah', 'a5efc3feb8a585d9ef82650ac43b0866b37824f1', 'Admin', NULL, '127280777-2466902240279004-3864743771555670928-n-1622338854.jpg', '2021-05-30 01:40:54'),
(18, 'Muhammad Dewa Erlang', 'dewa@gmail.com', 'dewa', '45287b4555edc553af9edfe221e2542e71ece570', 'Admin', NULL, '143381037-887657265316877-3511392841100697001-n-1-1622338916.jpg', '2021-05-30 01:41:56'),
(19, 'Yanuar Priyanto', 'Yanuar@gmail.com', 'yanuar', 'fa9286526bda8e21c8f264ed3a9cc1bcd706b571', 'Admin', NULL, NULL, '2021-05-30 01:42:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `heading`
--
ALTER TABLE `heading`
  ADD PRIMARY KEY (`id_heading`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `nama_kategori` (`nama_kategori`);

--
-- Indeks untuk tabel `kategori_agenda`
--
ALTER TABLE `kategori_agenda`
  ADD PRIMARY KEY (`id_kategori_agenda`);

--
-- Indeks untuk tabel `kategori_kursus`
--
ALTER TABLE `kategori_kursus`
  ADD PRIMARY KEY (`id_kategori_kursus`);

--
-- Indeks untuk tabel `kategori_staff`
--
ALTER TABLE `kategori_staff`
  ADD PRIMARY KEY (`id_kategori_staff`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id_murid`);

--
-- Indeks untuk tabel `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `heading`
--
ALTER TABLE `heading`
  MODIFY `id_heading` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kategori_agenda`
--
ALTER TABLE `kategori_agenda`
  MODIFY `id_kategori_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori_kursus`
--
ALTER TABLE `kategori_kursus`
  MODIFY `id_kategori_kursus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kategori_staff`
--
ALTER TABLE `kategori_staff`
  MODIFY `id_kategori_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `murid`
--
ALTER TABLE `murid`
  MODIFY `id_murid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT untuk tabel `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
