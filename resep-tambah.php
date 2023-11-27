<?php
$page = "resep";

include 'template/_header.php';

include 'template/_navbar.php';

include 'template/_koneksi.php';
?>

<main>
    <section class="container px-4 ">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex gap-2 align-items-center">
                <a href="resep-data.php" class="btn btn-sm btn-dark"><i class="bi bi-arrow-left"></i></a>
                <h2 class="fw-semibold text-center my-auto">Buat Resep</h2>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <?php
                $namaResepValue = isset($_POST['nama_resep']) ? htmlspecialchars($_POST['nama_resep']) : '';
                $namaPembuatValue = isset($_POST['nama_pembuat']) ? htmlspecialchars($_POST['nama_pembuat']) : '';
                $deskripsiValue = isset($_POST['deskripsi']) ? $_POST['deskripsi'] : '';

                if (isset($_POST['simpan'])) {
                    $id_resep = 'R' . str_pad(mt_rand(1, 99999), 3, '0', STR_PAD_LEFT);
                    $nama_resep = htmlspecialchars($_POST['nama_resep']);
                    $nama_pembuat = htmlspecialchars($_POST['nama_pembuat']);
                    $deskripsi = $_POST['deskripsi'];
                    $tanggal_buat = date('Y-m-d H:i:s');
                    $tanggal_edit = date('Y-m-d H:i:s');

                    $namaGambar = $_FILES['gambar']['name'];
                    $tmp = $_FILES['gambar']['tmp_name'];
                    $ukuran = $_FILES['gambar']['size'];

                    $fileExtension = pathinfo($namaGambar, PATHINFO_EXTENSION);
                    $randomNamaGambar = uniqid() . '.' . $fileExtension;
                    $ukuranMaksimal = 1 * 1024 * 1024;

                    if ($ukuran > $ukuranMaksimal) {
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Ukuran gambar terlalu besar!</strong> Silahkan unggah gambar maksimal 1 MB.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                    } else {
                        if (move_uploaded_file($tmp, 'img/' . $randomNamaGambar)) {
                            $gambar = $randomNamaGambar;
                        };

                        $sql = "INSERT INTO tb_resep VALUES ('$id_resep', '$nama_resep', '$nama_pembuat', '$deskripsi', '$gambar', '$tanggal_buat', '$tanggal_edit')";

                        $query = mysqli_query($koneksi, $sql);

                        if ($query) {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Resep berhasil disimpan!</strong> Untuk melihat resep silahkan klik <a href="resep-data.php">disini</a>.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                        } else {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Resep gagal disimpan!</strong> Silahkan coba kembali.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                        }
                    }
                }
                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row mb-4">
                        <div class="col-md-9">
                            <div class="row mb-4">
                                <label for="nama_resep" class="col-sm-2 col-form-label">Nama Resep</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_resep" name="nama_resep" placeholder="Masukan nama resep" autofocus required value="<?= $namaResepValue; ?>">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="nama_pembuat" class="col-sm-2 col-form-label">Nama Pembuat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_pembuat" name="nama_pembuat" placeholder="Masukan nama pembuat resep" required value="<?= $namaPembuatValue; ?>">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="editor" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="editor" name="deskripsi" rows="4" placeholder="Masukan alat, bahan, dan cara pembuatan resep"><?= $deskripsiValue; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="gambar" class="text-center mb-4" data-bs-toggle="tooltip" data-bs-title="Unggah gambar">
                                <img src="assets/img/img-placeholder.jpg" alt="Unggah gambar" class="rounded-4 shadow-sm object-fit-cover img-preview" width="180" height="180">
                                <small><strong class="text-danger">*</strong>Note: Format gambar JPG/JPEG/PNG dan ukuran maksimal 1MB</small>
                            </label>
                            <input type="file" class="form-control d-none" id="gambar" name="gambar" onchange="previewImage()" accept="image/jpeg, image/jpg, image/png">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button type="submit" name="simpan" class="btn btn-primary" style="width: 80px;">Simpan</button>
                            <a href="resep-data.php" class="btn btn-danger" style="width: 80px;">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php include 'template/_footer.php'; ?>