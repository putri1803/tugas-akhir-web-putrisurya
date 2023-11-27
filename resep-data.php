<?php
$page = "resep";

include 'template/_header.php';

include 'template/_navbar.php';

include 'template/_koneksi.php';
?>

<main>
    <section class="container px-4 ">
        <h2 class="fw-semibold text-center mb-4">Daftar Resep</h2>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="resep-tambah.php" class="btn btn-primary"><i class="bi bi-plus-square-fill"></i><span class="ms-2 d-none d-lg-inline">Resep Baru</span></a>
            <form action="" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" name="kata_kunci" placeholder="Masukkan kata kunci">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
            </form>
        </div>

        <div class="row justify-content-center">
            <?php
            $itemPerHalaman = 8;
            $halamanSaatIni = isset($_GET['page']) ? $_GET['page'] : 1;
            $mulaiDari = ($halamanSaatIni - 1) * $itemPerHalaman;

            if (isset($_GET['kata_kunci'])) {
                $kata_kunci = $_GET['kata_kunci'];

                $sql = "SELECT * FROM tb_resep 
                        WHERE nama_resep LIKE '%$kata_kunci%' 
                            OR nama_pembuat LIKE '%$kata_kunci%' 
                            OR DATE_FORMAT(tanggal_edit, '%Y-%m-%d') LIKE '%$kata_kunci%'
                        ORDER BY tanggal_edit DESC
                        LIMIT $mulaiDari, $itemPerHalaman";
            } else {
                $sql = "SELECT * FROM tb_resep 
                        ORDER BY tanggal_edit DESC
                        LIMIT $mulaiDari, $itemPerHalaman";
            }

            $query = mysqli_query($koneksi, $sql);

            if (mysqli_num_rows($query) > 0) {
                while ($hasil = mysqli_fetch_array($query)) {
            ?>
                    <div class="col col-lg-3 mb-4">
                        <div class="card border-0 shadow-sm rounded-4 h-100 w-100">
                            <img src="img/<?= $hasil['gambar']; ?>" alt="<?= $hasil['nama_resep']; ?>" class="card-img-top rounded-top-4 object-fit-cover" height="200">
                            <div class="card-body">
                                <h5 class="card-title text-overflow-clamp"><?= $hasil['nama_resep']; ?></h5>

                                <div class="d-flex flex-column gap-2 mb-4">
                                    <h6 class="card-subtitle text-body-secondary"><?= $hasil['nama_pembuat']; ?></h6>
                                    <small class="card-subtitle text-body-secondary d-lg-none"><?= date('d-m-Y H:i', strtotime($hasil['tanggal_edit'])); ?></small>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="resep-detail.php?id_resep=<?= $hasil['id_resep']; ?>" class="btn btn-primary px-4">Lihat</a>
                                    <small class="text-body-secondary d-none d-lg-inline"><?= date('d-m-Y H:i', strtotime($hasil['tanggal_edit'])); ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo '<div class="col">
                        <div class="alert alert-danger mb-4" role="alert">
                            <strong>Resep tidak ditemukan!</strong> Klik link berikut untuk menampilkan semua resep. <a href="resep-data.php">KLIK DISINI</a>
                        </div>
                    </div>';
            }
            ?>
        </div>

        <nav aria-label="Page navigation" class="mb-4">
            <ul class="pagination justify-content-center">
                <li class="page-item <?= - ($halamanSaatIni == 1) ? 'disabled' : ''; ?>">
                    <a class="page-link" href="?page=<?= ($halamanSaatIni - 1); ?>">Sebelumnya</a>
                </li>
                <?php
                $hitungData = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM tb_resep");
                $hasilBaris = mysqli_fetch_array($hitungData);
                $totalHalaman = ceil($hasilBaris['total'] / $itemPerHalaman);

                for ($i = 1; $i <= $totalHalaman; $i++) {
                    echo '<li class="page-item ' . (($halamanSaatIni == $i) ? 'active' : '') . '">';
                    echo '<a class="page-link" href="?page=' . $i . '">' . $i . '</a>';
                    echo '</li>';
                }
                ?>
                <li class="page-item <?= ($halamanSaatIni == $totalHalaman) ? 'disabled' : ''; ?>">
                    <a class="page-link" href="?page=<?= ($halamanSaatIni + 1); ?>">Selanjutnya</a>
                </li>
            </ul>
        </nav>
    </section>
</main>

<?php include 'template/_footer.php'; ?>