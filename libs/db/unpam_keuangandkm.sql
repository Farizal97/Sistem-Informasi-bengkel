-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2018 at 04:34 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unpam_keuangandkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `kd_barang` int(4) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(35) NOT NULL,
  `keterangan_barang` varchar(75) NOT NULL,
  PRIMARY KEY (`kd_barang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kd_barang`, `nama_barang`, `keterangan_barang`) VALUES
(1, 'Sapu Ijuk', 'Sapu dengan jenis ijuk'),
(2, 'Sapu Lidi', 'Sapu dengan jenis lidi'),
(3, 'Gelas Plastik Kecil', 'Gelas kecil biasa berbahan plastik'),
(4, 'Piring Keramik', 'Piring dengan bahan keramik'),
(5, 'Golok', 'Golok untuk keperluan penyembelihan hewan qurban');

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE IF NOT EXISTS `donatur` (
  `id_donatur` int(4) NOT NULL AUTO_INCREMENT,
  `nama_donatur` varchar(35) NOT NULL,
  `tpt_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `j_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(75) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  PRIMARY KEY (`id_donatur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10001 ;

--
-- Dumping data for table `donatur`
--

INSERT INTO `donatur` (`id_donatur`, `nama_donatur`, `tpt_lahir`, `tgl_lahir`, `j_kelamin`, `alamat`, `telepon`) VALUES
(1, 'Selamet Priyadi', 'Klaten', '1972-01-10', 'Laki-laki', 'Pondok Benda Tangerang Selatan', '082356721819'),
(2, 'Budi Santoro', 'Pemalang', '1981-05-11', 'Laki-laki', 'Pondok Benda Tangerang Selatan', '081389141511'),
(3, 'Yati Maesaroh', 'Jakarta', '1978-08-11', 'Perempuan', 'Pondok Benda Tangerang Selatan', '081217846291'),
(4, 'Endang Suherman', 'Bandung', '1979-04-12', 'Laki-laki', 'Pamulang Tangerang Selatan', '085714965289'),
(5, 'Jamal Nasrudin', 'Bekasi', '1987-08-27', 'Laki-laki', 'Villa Pamulang, Tangerang Selatan', '081214158875'),
(6, 'Apriyanto Susanto', 'Brebes', '1969-06-10', 'Laki-laki', 'Pondok Petir Tangerang Selatan', '087825215264'),
(8, 'Faisal Ali', 'Lampung', '1986-02-16', 'Laki-laki', 'Pondok Petir Tangerang Selatan', '089685114155'),
(9, 'Yogi Irwanto', 'Banyumas', '1982-05-28', 'Laki-laki', 'Pondok Benda Pamulang', '081274388519'),
(9999, 'Hamba Allah', 'Bumi', '0000-00-00', 'Laki-laki', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `infaq`
--

CREATE TABLE IF NOT EXISTS `infaq` (
  `no_infaq` int(6) NOT NULL AUTO_INCREMENT,
  `jns_infaq` enum('jumat','zakat') NOT NULL,
  `terima_dari` varchar(35) NOT NULL,
  `tgl_infaq` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(75) NOT NULL,
  PRIMARY KEY (`no_infaq`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `infaq`
--

INSERT INTO `infaq` (`no_infaq`, `jns_infaq`, `terima_dari`, `tgl_infaq`, `jumlah`, `keterangan`) VALUES
(1, 'jumat', 'Infaq Jum''at', '2018-01-05', 2642900, 'Penerimaan Infaq Jum''at'),
(2, 'jumat', 'Infaq Jum''at', '2018-01-12', 2389700, 'Penerimaan Infaq Jum''at'),
(3, 'jumat', 'Infaq Jum''at', '2018-01-19', 2420800, 'Penerimaan Infaq Jum''at'),
(4, 'jumat', 'Infaq Jum''at', '2018-01-26', 1985700, 'Penerimaan Infaq Jum''at'),
(5, 'zakat', 'Infaq Zakat', '2018-01-01', 4759000, 'Penerimaan Infaq Zakat Januari 2018'),
(6, 'zakat', 'Infaq Zakat', '2017-12-01', 2485000, 'Penerimaan Infaq Zakat Desember 2017'),
(7, 'jumat', 'Infaq Jum''at', '2017-12-29', 2487500, 'Penerimaan Infaq Jum''at'),
(8, '', 'Infaq Jum''at', '2017-12-22', 2105800, 'Penerimaan Infaq Jum''at'),
(9, 'jumat', 'Infaq Jum''at', '2017-12-15', 2148200, 'Penerimaan Infaq Jum''at'),
(10, 'jumat', 'Infaq Jum''at', '2017-12-08', 1987800, 'Penerimaan Infaq Jum''at'),
(11, 'zakat', 'Infaq Zakat', '2017-01-01', 2500000, 'Penerimaan Ifaq Zakat Januari 2017'),
(12, 'zakat', 'Infaq Zakat', '2017-02-01', 2750000, 'Penerimaan Ifaq Zakat Februari 2017'),
(13, 'zakat', 'Infaq Zakat', '2017-03-01', 1950000, 'Penerimaan Ifaq Zakat Maret 2017'),
(14, 'zakat', 'Infaq Zakat', '2017-04-01', 2145000, 'Penerimaan Ifaq Zakat April 2017'),
(15, 'zakat', 'Infaq Zakat', '2017-05-01', 1250000, 'Penerimaan Infaq Zakat Mei 2017'),
(16, 'zakat', 'Infaq Zakat', '2017-06-01', 2017000, 'Penerimaan Infaq Zakat Juni 2017'),
(17, 'zakat', 'Infaq Zakat', '2017-07-01', 1500500, 'Penerimaan Infaq Zakat Juni 2017'),
(18, 'zakat', 'Infaq Zakat', '2017-07-01', 1250000, 'Penerimaan Infaq Zakat Juli 2017'),
(19, 'zakat', 'Infaq Zakat', '2017-08-01', 1925000, 'Penerimaan Infaq Zakat Agustus 2017'),
(20, 'zakat', 'Infaq Zakat', '2017-09-01', 1135000, 'Penerimaan Infaq Zakat September 2017'),
(21, 'zakat', 'Infaq Zakat', '2017-10-01', 1726000, 'Penerimaan Infaq Zakat Oktober 2017'),
(22, 'zakat', 'Infaq Zakat', '2017-11-01', 1050500, 'Penerimaan Infaq Zakat November 2017');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE IF NOT EXISTS `inventaris` (
  `no_inventaris` int(6) NOT NULL AUTO_INCREMENT,
  `kd_barang` int(4) NOT NULL,
  `tgl_terima` date NOT NULL,
  `jumlah` int(4) NOT NULL,
  `keterangan` varchar(75) NOT NULL,
  PRIMARY KEY (`no_inventaris`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`no_inventaris`, `kd_barang`, `tgl_terima`, `jumlah`, `keterangan`) VALUES
(1, 3, '2018-02-04', 24, 'Sumbangan dari RT 002/012'),
(2, 1, '2018-02-04', 5, 'Sumbangan dari warga setempat'),
(3, 5, '2017-10-14', 4, 'Sumbangan dari warga RT 004/001');

-- --------------------------------------------------------

--
-- Table structure for table `konten_organisasi`
--

CREATE TABLE IF NOT EXISTS `konten_organisasi` (
  `id_konten` int(4) NOT NULL AUTO_INCREMENT,
  `judul_konten` varchar(50) NOT NULL,
  `isi_konten` text NOT NULL,
  `menu_konten` varchar(25) NOT NULL,
  PRIMARY KEY (`id_konten`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `konten_organisasi`
--

INSERT INTO `konten_organisasi` (`id_konten`, `judul_konten`, `isi_konten`, `menu_konten`) VALUES
(1, 'Struktur Organisasi DKM', '<h2>SUSUNAN PENGURUS DKM AL-KAHFI</h2>\r\n\r\n<h2>PERIODE 2017-2020</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>DEWAN PENASEHAT:</h3>\r\n\r\n<ol>\r\n	<li>Lurah Pondok Benda, Kecamatan Pamulang, Tangerang Selatan</li>\r\n	<li>Ketua RW 020 Keluarahan Pondok Benda</li>\r\n	<li>Ketua RT 001 s/d 004 RW 20 Kelurahan Pondok Benda</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>DEWAN SYURO:</h3>\r\n\r\n<table border="0" cellpadding="1" cellspacing="0" style="margin-left:15px;">\r\n	<tbody>\r\n		<tr>\r\n			<td>Ketua</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :&nbsp; &nbsp;</td>\r\n			<td>Dr. Saifuddin Zuhri, MA.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sekretaris</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :</td>\r\n			<td>Drs. Isqowi Indadin Masya</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Anggota</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :</td>\r\n			<td>Fathul Amam, SQ.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>Drs. Watoni</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>Daud Damsyik, M.Ag.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>Taswirman, S.Ag.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td><span background-color:="" font-size:="" style="color: rgb(51, 51, 51); font-family: sans-serif, Arial, Verdana, " trebuchet="">Dinan Hasbuddin, S.Ag.</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td><span background-color:="" font-size:="" style="color: rgb(51, 51, 51); font-family: sans-serif, Arial, Verdana, " trebuchet="">Zulhadi Piliang, ST.</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td><span background-color:="" font-size:="" style="color: rgb(51, 51, 51); font-family: sans-serif, Arial, Verdana, " trebuchet="">H. Rahmat, MA.</span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>DEWAN PENGURUS HARIAN:</h3>\r\n\r\n<table border="0" cellpadding="1" cellspacing="0" style="margin-left: 15px;">\r\n	<tbody>\r\n		<tr>\r\n			<td>Ketua Umum</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :&nbsp; &nbsp;</td>\r\n			<td>Miftahuddin</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Wakil Ketua Umum</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :</td>\r\n			<td>Toba Ristani</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ketua 1</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :</td>\r\n			<td>Didin Syahidin</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ketua 2</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :</td>\r\n			<td>Sri Suharti</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ketua 3</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :</td>\r\n			<td>Iskandar Zulkarnain</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sekretaris Umum</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :</td>\r\n			<td>Ahmad Miska</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sekretaris 1</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :</td>\r\n			<td>Iswandi</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sekretaris 2</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :</td>\r\n			<td>Lenny</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sekretaris 3</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :</td>\r\n			<td>M. Nursyafruddin</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bendahara Umum</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :</td>\r\n			<td>H. Ngatmin</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bendahara</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :</td>\r\n			<td>H. Fattahullah</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>BIRO-BIRO:</h3>\r\n\r\n<h4>BIDANG 1</h4>\r\n\r\n<table border="0" cellpadding="1" cellspacing="0" style="margin-left:15px">\r\n	<tbody>\r\n		<tr>\r\n			<td>Pendidikan</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :&nbsp; &nbsp;</td>\r\n			<td>Juni Cyser, S.Sos</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Peribadatan</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :</td>\r\n			<td>Muhammad Faisal, S.Pd.I</td>\r\n		</tr>\r\n		<tr>\r\n			<td>PHBI</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :&nbsp;</td>\r\n			<td>Dasa&#39;ad</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pengelolaan Qurban</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :&nbsp;</td>\r\n			<td>Akmal Roesly</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ZISWAF</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :&nbsp;</td>\r\n			<td>Yunus dan Riono Cahyadi</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bimbel</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :&nbsp;</td>\r\n			<td>Edo Alfin dan Charuddin</td>\r\n		</tr>\r\n		<tr>\r\n			<td>TPA</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :&nbsp;</td>\r\n			<td>Rustiyah Dinan, S.Ag</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Majelis Ta&#39;lim</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :&nbsp;</td>\r\n			<td>Siti Nursyafa&#39;atillah</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 'DKM'),
(2, 'Struktur Organisasi Majelis Taklim', '<h2>STRUKTUR PENGURUS MAJELIS TAKLIM AR RAHMAN</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pembina:</p>\r\n\r\n<ul>\r\n	<li>Fasikha, S.HI</li>\r\n	<li>DR. Cucu Nurhayati, M.Sc.</li>\r\n	<li>Raisah</li>\r\n	<li>Sri Suharti</li>\r\n</ul>\r\n\r\n<p>Ketua:</p>\r\n\r\n<ul>\r\n	<li>Nur Syafa&#39;atiah</li>\r\n</ul>\r\n\r\n<p>Wakil:</p>\r\n\r\n<ul>\r\n	<li>Nani Rusnaeni</li>\r\n</ul>\r\n\r\n<p>Sekretaris:</p>\r\n\r\n<ul>\r\n	<li>Anita Widiastuti</li>\r\n</ul>\r\n\r\n<p>Bendahara:</p>\r\n\r\n<ul>\r\n	<li>Lenni</li>\r\n	<li>Herlina</li>\r\n</ul>\r\n\r\n<p>Seksi Pendidikan dan Dakwah:</p>\r\n\r\n<ul>\r\n	<li>Rustiyah</li>\r\n	<li>Hj. Nur Kholisoh</li>\r\n	<li>Endah Prasetyani</li>\r\n</ul>\r\n\r\n<p>Seksi Sosial:</p>\r\n\r\n<ul>\r\n	<li>Rahmawati</li>\r\n	<li>Dyah Puspasari</li>\r\n	<li>Ika</li>\r\n	<li>Mihrab</li>\r\n</ul>\r\n', 'Majelis Taklim'),
(3, 'Struktur Organisasi TPA', '<h2>KEPENGURUSAN TPA AL KAHFI</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border="0" cellpadding="1" cellspacing="0" style="margin-left: 15px;">\r\n	<tbody>\r\n		<tr>\r\n			<td>Kepala</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :&nbsp; &nbsp;</td>\r\n			<td>Didin Syahidin</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Wakil</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :</td>\r\n			<td>Rustiyah</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bendahara</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :</td>\r\n			<td>Ibu Nursyafa&#39;atiyah</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sekretaris</td>\r\n			<td>&nbsp; &nbsp; &nbsp; :</td>\r\n			<td>Hj. Nurkholishah</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 'TPA'),
(4, 'Struktur Organisasi Remaja Masjid', '<p>Struktur Organisasi Remaja Islam Masjid Jami An Nur Pondok Benda.</p>\r\n', 'Remaja Masjid');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE IF NOT EXISTS `pengeluaran` (
  `no_keluar` int(6) NOT NULL AUTO_INCREMENT,
  `jns_keluar` varchar(25) NOT NULL,
  `keluar_oleh` varchar(35) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(75) NOT NULL,
  PRIMARY KEY (`no_keluar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`no_keluar`, `jns_keluar`, `keluar_oleh`, `tgl_keluar`, `jumlah`, `keterangan`) VALUES
(1, 'Pemb Fisik', 'DKM', '2018-01-14', 700000, 'Beli Lampu PLN'),
(2, 'Pemb Fisik', 'DKM', '2018-01-24', 3000000, 'Air Cond TPA'),
(3, 'Pemb Fisik', 'DKM', '2018-01-24', 260000, 'Ongkos TK'),
(4, 'Pemb Fisik', 'DKM', '2018-01-24', 240750, 'Cetak Banner Kegiatan 2018'),
(5, 'Pemb Fisik', 'DKM', '2017-12-10', 659000, 'Pembayaran PLN');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_pengguna` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `rekap_kas`
--

CREATE TABLE IF NOT EXISTS `rekap_kas` (
  `no_rekap` int(6) NOT NULL AUTO_INCREMENT,
  `tgl_rekap` date NOT NULL,
  `tgl_tampil` date NOT NULL,
  `infaq` int(11) NOT NULL,
  `sodaqoh` int(11) NOT NULL,
  `pengeluaran` int(11) NOT NULL,
  PRIMARY KEY (`no_rekap`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `rekap_kas`
--

INSERT INTO `rekap_kas` (`no_rekap`, `tgl_rekap`, `tgl_tampil`, `infaq`, `sodaqoh`, `pengeluaran`) VALUES
(1, '2017-12-31', '2018-01-01', 32413300, 300000, 659000),
(2, '2018-01-31', '2018-02-01', 46611400, 14858000, 4859750),
(3, '2017-01-31', '2017-02-01', 2500000, 0, 0),
(4, '2017-03-31', '2017-04-01', 7200000, 0, 0),
(5, '2017-02-28', '2017-03-01', 5250000, 0, 0),
(6, '2017-04-30', '2017-05-01', 9345000, 0, 0),
(7, '2017-05-31', '2017-06-01', 10595000, 0, 0),
(8, '2017-06-30', '2017-07-01', 12612000, 0, 0),
(9, '2017-07-31', '2017-08-01', 15362500, 0, 0),
(10, '2017-08-31', '2017-09-01', 17287500, 0, 0),
(11, '2017-09-30', '2017-10-01', 18422500, 0, 0),
(12, '2017-10-31', '2017-11-01', 20148500, 0, 0),
(13, '2017-11-30', '2017-12-01', 21199000, 0, 0),
(14, '2018-02-28', '2018-03-01', 25412400, 14858000, 4859750);

-- --------------------------------------------------------

--
-- Table structure for table `sodaqoh`
--

CREATE TABLE IF NOT EXISTS `sodaqoh` (
  `no_sodaqoh` int(6) NOT NULL AUTO_INCREMENT,
  `id_donatur` int(4) NOT NULL,
  `tgl_sodaqoh` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(75) NOT NULL,
  PRIMARY KEY (`no_sodaqoh`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sodaqoh`
--

INSERT INTO `sodaqoh` (`no_sodaqoh`, `id_donatur`, `tgl_sodaqoh`, `jumlah`, `keterangan`) VALUES
(1, 1, '2018-01-06', 2500000, 'Penerimaan Shodaqoh'),
(2, 2, '2018-01-07', 1500000, 'Penerimaan Shodaqoh'),
(3, 3, '2018-01-07', 750000, 'Penerimaan Shodaqoh'),
(4, 6, '2018-01-27', 958000, 'Penerimaan Shodaqoh'),
(5, 9999, '2018-01-28', 8850000, 'Penerimaan Sodaqoh'),
(6, 9999, '2017-12-21', 300000, 'Penerimaan Shodaqoh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
