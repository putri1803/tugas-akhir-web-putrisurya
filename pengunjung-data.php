<?php
$page = "pengunjung";

include 'template/_header.php';

include 'template/_navbar.php';

include 'template/_koneksi.php';
?>

<main>
    <section class="container px-4 ">
        <h2 class="fw-semibold text-center mb-4">Data Pengunjung Website</h2>

        <div class="table-responsive mb-4">
            <table class="table table-hover" id="example">
                <thead>
                    <tr class="align-middle">
                        <th>Waktu Akses</th>
                        <th>NIM</th>
                        <th>Nama</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM tb_pengunjung ORDER BY tanggal_akses DESC";

                    $query = mysqli_query($koneksi, $sql);

                    while ($hasil = mysqli_fetch_array($query)) {
                    ?>
                        <tr class="align-middle">
                            <td><?= date('d-m-Y H:i', strtotime($hasil['tanggal_akses'])); ?></td>
                            <td><?= $hasil['nim']; ?></td>
                            <td><?= $hasil['nama']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
</main>

<?php include 'template/_footer.php'; ?>