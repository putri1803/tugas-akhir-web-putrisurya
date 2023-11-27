-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2023 pada 16.32
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_resep`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengunjung`
--

CREATE TABLE `tb_pengunjung` (
  `id_pengunjung` char(7) NOT NULL,
  `nim` char(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_akses` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengunjung`
--

INSERT INTO `tb_pengunjung` (`id_pengunjung`, `nim`, `nama`, `tanggal_akses`) VALUES
('P86424', 'IT001', 'Alfian', '2023-11-23 01:55:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_resep`
--

CREATE TABLE `tb_resep` (
  `id_resep` char(7) NOT NULL,
  `nama_resep` varchar(255) NOT NULL,
  `nama_pembuat` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_buat` datetime NOT NULL,
  `tanggal_edit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_resep`
--

INSERT INTO `tb_resep` (`id_resep`, `nama_resep`, `nama_pembuat`, `deskripsi`, `gambar`, `tanggal_buat`, `tanggal_edit`) VALUES
('R16438', 'Ikan Bakar', 'Putri', '<p><strong>Bahan-bahan:</strong></p><ul><li>1 ekor ikan (pilih jenis ikan yang segar dan cocok untuk panggang, seperti ikan kakap, ikan gurame, atau ikan bandeng)</li><li>2 sendok makan kecap manis</li><li>2 sendok makan minyak sayur</li><li>2 sendok teh air jeruk nipis</li><li>1 sendok teh garam</li><li>1 sendok teh merica bubuk</li><li>3 siung bawang putih, haluskan</li><li>1 sendok teh jahe, parut halus</li><li>2 batang serai, memarkan</li><li>Daun pisang secukupnya untuk membungkus ikan (opsional)</li></ul><p><strong>Bumbu Rujak Ikan:</strong></p><ul><li>5 buah cabai merah (sesuai selera)</li><li>3 buah cabai rawit (sesuai selera)</li><li>2 buah tomat, potong kecil</li><li>3 buah bawang merah</li><li>2 sendok makan petis udang</li><li>2 sendok makan air asam jawa</li><li>Gula dan garam secukupnya</li></ul><p><strong>Alat Dapur:</strong></p><ul><li>Mangkok</li><li>Pisau dapur</li><li>Wajan</li><li>Sendok kayu atau spatula</li><li>Panggangan atau kompor</li></ul><p><strong>Cara Membuat:</strong></p><p><strong>1. Persiapkan Ikan:</strong></p><ul><li>Bersihkan ikan, cuci bersih, dan lumuri dengan air jeruk nipis. Beri garam dan merica ke seluruh bagian ikan, termasuk bagian perut.</li></ul><p><strong>2. Marinasi Ikan:</strong></p><ul><li>Campur kecap manis, minyak sayur, air jeruk nipis, garam, merica bubuk, bawang putih, dan jahe. Aduk rata. Olesi ikan dengan campuran ini, termasuk bagian perut dan insang. Diamkan selama 30 menit.</li></ul><p><strong>3. Siapkan Bumbu Rujak Ikan:</strong></p><ul><li>Haluskan cabai merah, cabai rawit, bawang merah, dan petis udang. Tambahkan air asam jawa, gula, dan garam. Aduk rata hingga bumbu rujak tercampur dengan baik.</li></ul><p><strong>4. Bakar Ikan:</strong></p><ul><li>Panaskan panggangan atau kompor. Bisa juga menggunakan panggangan atau oven dengan suhu tinggi.</li><li>Jika menggunakan daun pisang, bungkus ikan dengan daun pisang sebelum dibakar.</li><li>Panggang ikan hingga matang, bolak-balik dan olesi dengan sisa marinasi untuk menjaga kelembutan ikan.</li></ul><p><strong>5. Sajikan:</strong></p><ul><li>Letakkan ikan bakar di atas piring saji, siram dengan bumbu rujak, dan hidangkan bersama nasi putih.</li></ul>', '655f3eb8d6768.jpg', '2023-11-23 19:59:52', '2023-11-23 20:15:18'),
('R16663', 'Iga Bakar', 'Putri', '<p><strong>Bahan:</strong></p><ul><li>1 kg iga sapi, potong-potong sesuai selera</li><li>4 sendok makan kecap manis</li><li>2 sendok makan minyak sayur</li><li>2 sendok makan saus tomat</li><li>2 sendok makan saus sambal (sesuai selera)</li><li>2 sendok makan air asam jawa</li><li>1 sendok makan madu atau gula kelapa</li><li>4 siung bawang putih, haluskan</li><li>1 sendok teh merica bubuk</li><li>Garam secukupnya</li></ul><p><strong>Bumbu Halus:</strong></p><ul><li>4 butir bawang merah</li><li>3 siung bawang putih</li><li>2 buah kemiri, sangrai</li><li>1 ruas jahe</li></ul><p><strong>Alat Dapur:</strong></p><ul><li>Mangkuk</li><li>Wajan atau panci</li><li>Wadah untuk merendam iga</li><li>Panggangan atau grill</li><li>Sendok atau kuas untuk melumuri bumbu</li></ul><p><strong>Cara Membuat:</strong></p><p><strong>Persiapkan Iga:</strong></p><ul><li>Cuci bersih iga sapi, tiriskan.</li></ul><p><strong>Bumbui Iga:</strong></p><ul><li>Haluskan bumbu halus, kemudian campur dengan kecap manis, minyak sayur, saus tomat, saus sambal, air asam jawa, madu atau gula kelapa, bawang putih yang telah dihaluskan, merica bubuk, dan garam. Aduk rata.</li></ul><p><strong>Rendam Iga:</strong></p><ul><li>Rendam iga dalam campuran bumbu selama minimal 2 jam atau lebih baik semalam di dalam lemari es agar bumbu meresap.</li></ul><p><strong>Bakar Iga:</strong></p><ul><li>Panaskan panggangan atau grill. Panggang iga di atas panggangan yang telah dipanaskan dengan api sedang hingga matang dan warna kecokelatan. Sambil memanggang, oleskan sisa bumbu rendaman untuk memberikan rasa yang lebih meresap.</li></ul><p><strong>Bolak-balik dan Oles Bumbu:</strong></p><ul><li>Bolak-balik iga secara berkala dan oleskan bumbu sisa agar iga matang merata dan beraroma.</li></ul><p><strong>Sajikan:</strong></p><ul><li>Angkat iga bakar dan sajikan di atas piring saji.</li></ul><p><strong>Hidangkan:</strong></p><ul><li>Hidangkan iga bakar panas sebagai hidangan utama. Iga bakar ini cocok disajikan dengan nasi putih hangat dan sayuran segar.</li></ul>', '655f3f82e9a97.jpg', '2023-11-23 20:03:14', '2023-11-23 20:15:58'),
('R33019', 'Soto Ayam', 'Putri', '<p><strong>Bahan:</strong></p><p><strong>Bagian Ayam dan Kaldu:</strong></p><ul><li>1 ekor ayam, potong menjadi bagian-bagian</li><li>2 liter air</li><li>2 batang serai, memarkan</li><li>3 lembar daun jeruk</li><li>2 lembar daun salam</li><li>Garam secukupnya</li><li>Merica secukupnya</li></ul><p><strong>Bumbu Halus:</strong></p><ul><li>4 siung bawang putih</li><li>6 butir bawang merah</li><li>2 cm jahe</li><li>2 cm kunyit, bisa diganti dengan 1 sendok teh kunyit bubuk</li><li>1 sendok teh ketumbar</li><li>1 sendok teh merica</li></ul><p><strong>Pelengkap:</strong></p><ul><li>200 gram bihun, seduh air panas</li><li>200 gram tauge, seduh air panas</li><li>Kecambah</li><li>Sambal</li><li>Daun seledri, iris halus</li><li>Bawang merah goreng</li><li>Jeruk nipis, potong-potong</li></ul><p><strong>Cara Memasak:</strong></p><p><strong>1. Membuat Kaldu Ayam:</strong></p><ul><li>Rebus potongan ayam dalam air bersama serai, daun jeruk, daun salam, garam, dan merica hingga ayam matang dan kaldu kental. Angkat ayam, tiriskan, dan suwir-suwir dagingnya.</li></ul><p><strong>2. Membuat Bumbu Halus:</strong></p><ul><li>Haluskan bawang putih, bawang merah, jahe, kunyit, ketumbar, dan merica.</li></ul><p><strong>3. Menyeduh Bihun dan Tauge:</strong></p><ul><li>Seduh bihun dan tauge dengan air panas hingga matang. Tiriskan.</li></ul><p><strong>4. Membuat Soto:</strong></p><ul><li>Tumis bumbu halus hingga harum dan matang. Masukkan ke dalam kaldu ayam dan rebus sebentar hingga bumbu tercampur rata.</li></ul><p><strong>5. Penyajian:</strong></p><ul><li>Sajikan soto ayam dalam mangkuk. Tambahkan suwiran daging ayam, bihun, tauge, kecambah, daun seledri, dan bawang merah goreng.</li><li>Beri sambal dan jeruk nipis di atas soto sesuai selera.</li></ul>', '655f42c6013d0.jpg', '2023-11-23 20:17:10', '2023-11-23 20:17:10'),
('R33514', 'Nasi Goreng', 'Putri', '<p>Bahan Utama:</p><ul><li>3 gelas nasi putih (beku atau dingin, yang sudah satu hari)</li><li>2 telur</li><li>150 gram daging ayam/sapi/udang (opsional), potong dadu kecil</li><li>3 siung bawang putih, cincang halus</li><li>1 batang daun bawang, iris tipis</li><li>1 batang seledri, iris tipis</li><li>Minyak untuk menumis</li></ul><p>Bumbu-bumbu:</p><ul><li>2 sendok makan kecap manis</li><li>1 sendok makan kecap asin</li><li>1 sendok makan saus tiram</li><li>1/2 sendok teh merica bubuk</li><li>1/2 sendok teh garam (sesuai selera)</li><li>Bumbu penyedap (opsional)</li></ul><p>&nbsp;</p><p>Alat:</p><ul><li>Wajan/telur besar</li><li>Spatula atau sendok kayu</li><li>Pisau dan talenan</li><li>Mangkuk untuk memecahkan telur dan mencampur bumbu</li><li>Kompor</li></ul><p>&nbsp;</p><p>Cara Memasak:</p><ol><li>Persiapan Bahan: Potong semua bahan seperti daging, bawang putih, daun bawang, dan seledri. Pecahkan telur ke dalam mangkuk, kocok hingga rata, tambahkan sedikit garam dan merica bubuk. Sisihkan.</li><li>Pemanasan Wajan: Panaskan wajan dengan sedikit minyak di atas api sedang hingga minyak cukup panas.</li><li>Tumis Bawang Putih dan Daging: Tumis bawang putih cincang hingga harum. Jika menggunakan daging, tumis daging hingga matang dan berubah warna.</li><li>Tambah Telur dan Nasi: Setelah daging matang, tuangkan telur yang sudah dikocok ke dalam wajan. Aduk cepat hingga telur setengah matang. Masukkan nasi putih ke dalam wajan, aduk rata dengan telur dan daging. Pastikan nasi tidak bergerombol.<br>Penyedap dan Bumbu: Tambahkan kecap manis, kecap asin, saus tiram, merica bubuk, garam, dan bumbu penyedap (jika digunakan). Aduk rata hingga semua bumbu tercampur merata dengan nasi.</li><li>Penyajian: Terakhir, tambahkan irisan daun bawang dan seledri. Aduk sebentar sampai tercampur merata. Angkat nasi goreng dari wajan, sajikan di piring saji, dan hidangkan selagi hangat.</li></ol>', '655cc2aa616ab.jpg', '2023-11-21 22:46:02', '2023-11-23 20:14:39'),
('R5594', 'Mie Goreng', 'Putri', '<p><strong>Alat yang Diperlukan:</strong></p><ol><li>Panci besar untuk merebus mie</li><li>Wajan atau penggorengan untuk memasak</li><li>Pisau dapur dan alat pemotong</li><li>Sendok, spatula, atau alat masak lainnya</li><li>Mangkuk untuk menyiapkan bahan-bahan</li></ol><p><strong>Bahan-bahan:</strong></p><ol><li>Mie kuning (biasanya mie telur) - sekitar 200-300 gram</li><li>Minyak sayur atau minyak wijen</li><li>Bawang putih cincang (2-3 siung)</li><li>Bawang bombay cincang (1 buah)</li><li>Sayuran, seperti wortel, kubis, kacang polong (opsional)</li><li>Daging atau seafood (ayam, udang, atau daging sapi) - jika diinginkan</li><li>Bumbu-bumbu: kecap manis, kecap asin, saus tiram, garam, merica, gula, kaldu bubuk (sesuai selera)</li><li>Bahan pelengkap, seperti daun bawang cincang, bawang goreng, atau irisan cabai (opsional)</li></ol><p><strong>Cara Pembuatan:</strong></p><ol><li><strong>Rebus mie</strong>: Rebus mie kuning dalam air mendidih selama beberapa menit hingga matang. Tiriskan dan sisihkan.</li><li><strong>Panaskan minyak</strong>: Panaskan sedikit minyak sayur atau minyak wijen di wajan besar atau penggorengan.</li><li><strong>Tumis bawang</strong>: Tumis bawang putih cincang dan bawang bombay cincang hingga harum dan kecokelatan.</li><li><strong>Tambahkan daging atau seafood (jika ada)</strong>: Masukkan daging/ayam/udang/daging sapi, dan tumis hingga matang.</li><li><strong>Tambahkan sayuran</strong>: Jika Anda menggunakan sayuran seperti wortel, kubis, atau kacang polong, tambahkan sekarang dan tumis hingga setengah matang.</li><li><strong>Bumbui</strong>: Tambahkan bumbu seperti kecap manis, kecap asin, saus tiram, garam, merica, gula, dan kaldu bubuk sesuai selera.</li><li><strong>Masukkan mie</strong>: Setelah bumbu meresap, tambahkan mie yang sudah direbus ke dalam wajan. Aduk rata dengan bumbu dan tumis hingga mie tercampur dengan baik dan terasa matang.</li><li><strong>Tambahkan bahan pelengkap</strong>: Terakhir, tambahkan bahan pelengkap seperti daun bawang cincang, bawang goreng, atau irisan cabai sesuai selera. Aduk sebentar, lalu angkat dari api.</li><li><strong>Sajikan</strong>: Mie goreng siap disajikan panas. Bisa ditaburi bahan pelengkap tambahan jika diinginkan.</li></ol>', '655e02d468ff8.jpg', '2023-11-22 21:32:04', '2023-11-23 01:00:50'),
('R59952', 'Omelet', 'Putri', '<p><strong>Bahan:</strong></p><ul><li>2-3 butir telur</li><li>Garam secukupnya</li><li>Merica secukupnya</li><li>2 sendok makan susu (opsional)</li><li>Minyak atau mentega secukupnya</li><li>Bahan tambahan (opsional):<ul><li>Keju parut</li><li>Daging ham atau sosis, potong kecil</li><li>Tomat, potong dadu</li><li>Bawang bombay, cincang halus</li><li>Jamur, potong kecil</li><li>Daun bawang, iris halus</li></ul></li></ul><p><strong>Alat Dapur:</strong></p><ul><li>Wajan anti lengket</li><li>Sendok atau spatula</li></ul><p><strong>Cara Membuat:</strong></p><p><strong>Persiapkan Bahan:</strong></p><ul><li>Pecahkan telur ke dalam mangkuk.</li><li>Tambahkan garam, merica, dan susu (jika menggunakan). Kocok telur hingga rata.</li></ul><p><strong>Panaskan Wajan:</strong></p><ul><li>Panaskan wajan dengan minyak atau mentega secukupnya di atas api sedang.</li></ul><p><strong>Tuangkan Telur ke Wajan:</strong></p><ul><li>Tuangkan telur yang telah dikocok ke wajan. Pastikan wajan terlapisi dengan telur.</li></ul><p><strong>Tambahkan Bahan Tambahan (Opsional):</strong></p><ul><li>Jika menggunakan bahan tambahan seperti keju, ham, tomat, bawang bombay, jamur, atau daun bawang, sebarkan di atas telur yang sudah mulai menggumpal.</li></ul><p><strong>Lipat Omelet:</strong></p><ul><li>Biarkan telur setengah matang dan mulai menggumpal di bagian bawahnya. Gunakan spatula untuk melipat omelet menjadi setengah bulan atau lipatan segitiga.</li></ul><p><strong>Sajikan:</strong></p><ul><li>Angkat omelet dari wajan dan letakkan di atas piring saji.</li></ul><p><strong>Hidangkan:</strong></p><ul><li>Hidangkan omelet panas sebagai sarapan atau makanan ringan. Bisa disajikan langsung atau dengan tambahan saus atau saus tomat jika diinginkan.</li></ul>', '655f3f0cd4ae9.jpg', '2023-11-23 20:01:16', '2023-11-23 20:15:37'),
('R64085', 'Mie Kuah', 'Putri', '<p><strong>Bahan-bahan:</strong></p><ul><li>200 gram mie (bisa mie instan atau mie basah)</li><li>2 telur</li><li>2 siung bawang putih, cincang halus</li><li>1 batang daun bawang, iris tipis</li><li>Minyak untuk menumis</li><li>Kecap manis secukupnya</li><li>Kecap asin secukupnya</li><li>Merica bubuk secukupnya</li><li>Garam secukupnya</li><li>Bumbu penyedap (opsional)</li></ul><p><strong>Alat:</strong></p><ul><li>Wajan</li><li>Panci untuk merebus mie</li><li>Spatula atau sendok kayu</li><li>Pisau dan talenan</li><li>Mangkuk untuk memecahkan telur dan mencampur bumbu</li></ul><p><strong>Cara Memasak:</strong></p><p><strong>Persiapan Mie:</strong></p><ul><li>Rebus mie dalam panci air mendidih sesuai petunjuk kemasan. Tiriskan dan sisihkan.</li></ul><p><strong>Pemanasan Wajan:</strong></p><ul><li>Panaskan sedikit minyak di wajan dengan api sedang.</li></ul><p><strong>Tumis Bawang Putih:</strong></p><ul><li>Tumis bawang putih cincang hingga harum.</li></ul><p><strong>Tambah Telur dan Mie:</strong></p><ul><li>Pecahkan telur ke dalam wajan, kocok telur dan biarkan setengah matang.</li><li>Masukkan mie yang sudah direbus ke dalam wajan, aduk rata dengan telur.</li></ul><p><strong>Penyedap dan Bumbu:</strong></p><ul><li>Tuangkan kecap manis dan kecap asin sesuai selera.</li><li>Tambahkan garam, merica bubuk, dan bumbu penyedap (jika digunakan). Aduk rata hingga bumbu merata ke seluruh mie.</li></ul><p><strong>Penyajian:</strong></p><ul><li>Terakhir, tambahkan irisan daun bawang. Aduk sebentar sampai tercampur merata.</li><li>Angkat mie goreng dari wajan, sajikan di piring saji, dan hidangkan selagi hangat.</li></ul>', '655e39d99cac5.jpg', '2023-11-23 01:26:49', '2023-11-23 01:26:49'),
('R64405', 'Ayam Goreng', 'Putri', '<p><strong>Bahan-bahan:</strong></p><ul><li>1 ekor ayam, potong menjadi bagian yang diinginkan</li><li>Bumbu marinasi:<ul><li>4 siung bawang putih, haluskan</li><li>1 ruas jahe, parut</li><li>2 sendok makan kecap manis</li><li>1 sendok makan kecap asin</li><li>1 sendok teh merica bubuk</li><li>1 sendok teh garam (atau sesuai selera)</li><li>1 sendok teh bubuk ketumbar (opsional)</li></ul></li><li>Minyak untuk menggoreng</li></ul><p><strong>Alat:</strong></p><ul><li>Wadah untuk marinasi</li><li>Wajan atau penggorengan</li><li>Spatula atau sendok kayu</li><li>Pisau dan talenan</li></ul><p><strong>Cara Memasak:</strong></p><p><strong>Persiapan Ayam:</strong></p><ul><li>Bersihkan ayam, potong sesuai selera (misalnya, paha, dada, atau sayap). Buang lemak yang berlebih dan cuci ayam hingga bersih.</li></ul><p><strong>Marinasi Ayam:</strong></p><ul><li>Campurkan semua bumbu marinasi (bawang putih, jahe parut, kecap manis, kecap asin, merica bubuk, garam, dan bubuk ketumbar jika digunakan) dalam wadah.</li><li>Lumuri potongan ayam dengan campuran bumbu marinasi hingga rata. Biarkan meresap selama minimal 30 menit hingga semalaman di dalam lemari es untuk hasil yang lebih baik.</li></ul><p><strong>Penggorengan:</strong></p><ul><li>Panaskan minyak dalam jumlah cukup di wajan atau penggorengan dengan api sedang-hingga-panas.</li></ul><p><strong>Goreng Ayam:</strong></p><ul><li>Setelah minyak cukup panas, masukkan potongan ayam satu per satu ke dalam minyak panas dengan hati-hati.</li><li>Goreng ayam hingga kecokelatan dan matang sempurna. Pastikan untuk membaliknya agar matang merata di kedua sisinya. Gunakan api sedang agar ayam matang merata di dalamnya tanpa terlalu cepat kecokelatan di luar.</li></ul><p><strong>Penyajian:</strong></p><ul><li>Angkat ayam goreng dan tiriskan di atas kertas minyak atau tisu dapur untuk menghilangkan kelebihan minyak.</li><li>Sajikan ayam goreng hangat sebagai hidangan utama bersama nasi dan acar.</li></ul>', '655e40e78d4e4.jpg', '2023-11-23 01:56:55', '2023-11-23 01:56:55'),
('R77008', 'Sate Ayam', 'Putri', '<p><strong>Bahan-bahan:</strong></p><ul><li>500 gram daging ayam, potong dadu</li><li>2 sendok makan kecap manis</li><li>1 sendok makan minyak goreng</li><li>1 sendok makan air jeruk nipis</li><li>2 sendok teh garam</li><li>1 sendok teh merica bubuk</li><li>2 sendok makan bawang merah goreng untuk taburan (opsional)</li></ul><p><strong>Bahan Saus Kacang:</strong></p><ul><li>150 gram kacang tanah, sangrai dan haluskan</li><li>2 siung bawang putih, haluskan</li><li>2 sendok makan kecap manis</li><li>1 sendok teh garam</li><li>1 sendok teh gula merah, serut halus</li><li>200 ml air</li><li>1 sendok teh air jeruk nipis</li></ul><p><strong>Bahan Bumbu Halus:</strong></p><ul><li>3 siung bawang putih</li><li>2 butir kemiri, sangrai</li><li>1 sendok teh ketumbar, sangrai</li><li>1 sendok teh gula merah, serut halus</li><li>Garam secukupnya</li></ul><p><strong>Alat Dapur:</strong></p><ul><li>Tusuk sate</li><li>Blender atau ulekan</li><li>Wajan</li><li>Mangkuk</li><li>Piring saji</li></ul><p><strong>Cara Membuat:</strong></p><p><strong>1. Marinasi Ayam:</strong></p><ul><li>Campur daging ayam dengan kecap manis, minyak goreng, air jeruk nipis, garam, dan merica bubuk. Diamkan selama minimal 30 menit agar bumbu meresap.</li></ul><p><strong>2. Tusuk Sate:</strong></p><ul><li>Ambil tusuk sate dan tusukkan potongan daging ayam yang telah dimarinasi.</li></ul><p><strong>3. Bakar Sate:</strong></p><ul><li>Panggang sate di atas bara api atau panggangan hingga matang dan berwarna kecokelatan. Sambil memanggang, olesi sate dengan sisa marinasi agar lebih beraroma.</li></ul><p><strong>4. Saus Kacang:</strong></p><ul><li>Campur semua bahan saus kacang. Jika suka, bisa ditambahkan sambal sesuai selera.</li></ul><p><strong>5. Bumbu Halus:</strong></p><ul><li>Haluskan bawang putih, kemiri, ketumbar, gula merah, dan garam. Campurkan dengan daging ayam yang sudah dimarinasi.</li></ul><p><strong>6. Sajikan:</strong></p><ul><li>Tata sate ayam di atas piring saji, taburi dengan bawang merah goreng (jika diinginkan), dan sajikan dengan saus kacang.</li></ul>', '655f3e0910464.jpg', '2023-11-23 19:56:57', '2023-11-23 20:15:01'),
('R7887', 'Rendang', 'Putri', '<p><strong>Bahan:</strong></p><ul><li>500 gram daging sapi (pilih potongan daging yang bagus untuk direndang, seperti daging sandung lamur atau daging tetelan)</li><li>2 batang serai, memarkan bagian putihnya</li><li>4 lembar daun jeruk</li><li>4 lembar daun salam</li><li>2 lembar daun kunyit (opsional)</li><li>400 ml santan kelapa kental</li><li>200 ml santan kelapa encer</li><li>1 lembar asam kandis</li><li>Garam secukupnya</li><li>Gula secukupnya</li><li>Minyak goreng secukupnya untuk menumis</li></ul><p><strong>Bumbu halus:</strong></p><ul><li>10 buah cabai merah (sesuai selera kepedasan)</li><li>8 buah cabai keriting</li><li>6 butir bawang merah</li><li>4 siung bawang putih</li><li>3 cm jahe</li><li>3 cm lengkuas</li><li>1 sdm ketumbar</li><li>1 sdt jintan</li><li>1 sdt merica butiran</li><li>½ sdt kunyit bubuk</li></ul><p><strong>Alat Dapur:</strong></p><ul><li>Wajan</li><li>Blender atau ulekan</li><li>Pisau dapur</li><li>Talenan</li><li>Sendok kayu atau spatula</li><li>Gelas ukur untuk mengukur santan</li><li>Kompor</li></ul><p><strong>Cara Memasak:</strong></p><p><strong>Persiapkan Bahan:</strong></p><ul><li>Potong daging menjadi ukuran sesuai selera.</li><li>Haluskan semua bumbu halus dengan menggunakan blender atau ulekan.</li></ul><p><strong>Tumis Bumbu:</strong></p><ul><li>Panaskan minyak goreng dalam wajan, tumis bumbu halus hingga harum dan matang.</li></ul><p><strong>Tambahkan Daun-Daunan:</strong></p><ul><li>Setelah bumbu matang, tambahkan serai, daun jeruk, daun salam, dan daun kunyit. Aduk rata.</li></ul><p><strong>Masukkan Daging:</strong></p><ul><li>Masukkan potongan daging ke dalam bumbu yang telah ditumis. Aduk rata hingga daging berubah warna.</li></ul><p><strong>Tambahkan Santan:</strong></p><ul><li>Tuangkan santan kelapa kental dan santan kelapa encer ke dalam wajan. Aduk rata.</li></ul><p><strong>Masak dengan Api Kecil:</strong></p><ul><li>Masak rendang dengan api kecil hingga santan menyusut dan bumbu meresap ke dalam daging. Ini memerlukan waktu cukup lama, sekitar 2-3 jam. Aduk sesekali agar rendang tidak gosong.</li></ul><p><strong>Tambahkan Asam Kandis, Garam, dan Gula:</strong></p><ul><li>Setelah santan menyusut, tambahkan asam kandis, garam, dan gula secukupnya sesuai selera. Aduk rata dan terus masak hingga daging menjadi empuk dan bumbu meresap.</li></ul><p><strong>Koreksi Rasa:</strong></p><ul><li>Cicipi rendang dan sesuaikan rasa sesuai selera. Tambahkan garam, gula, atau bumbu lain jika diperlukan.</li></ul><p><strong>Sajikan:</strong></p><ul><li>Setelah daging empuk dan bumbu meresap, rendang siap disajikan. Hidangkan rendang bersama nasi putih hangat.</li></ul>', '655f3d7713816.jpg', '2023-11-23 19:54:31', '2023-11-23 20:14:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_review`
--

CREATE TABLE `tb_review` (
  `id_review` char(7) NOT NULL,
  `id_resep` char(7) NOT NULL,
  `nama_reviewer` varchar(50) NOT NULL,
  `rating` varchar(5) NOT NULL,
  `ulasan` text NOT NULL,
  `tanggal_review` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_review`
--

INSERT INTO `tb_review` (`id_review`, `id_resep`, `nama_reviewer`, `rating`, `ulasan`, `tanggal_review`) VALUES
('I75730', 'R33019', 'Alfian', '5', 'Terimakasih, resepnya mudah diikuti dan sangat bagus untuk pemula.', '2023-11-23 20:18:57');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pengunjung`
--
ALTER TABLE `tb_pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indeks untuk tabel `tb_resep`
--
ALTER TABLE `tb_resep`
  ADD PRIMARY KEY (`id_resep`);

--
-- Indeks untuk tabel `tb_review`
--
ALTER TABLE `tb_review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `id_resep` (`id_resep`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_review`
--
ALTER TABLE `tb_review`
  ADD CONSTRAINT `tb_review_ibfk_1` FOREIGN KEY (`id_resep`) REFERENCES `tb_resep` (`id_resep`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
