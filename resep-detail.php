<?php
$page = "resep";

include 'template/_header.php';

include 'template/_navbar.php';

include 'template/_koneksi.php';

$id_resep = $_GET['id_resep'];

if (isset($id_resep)) {
    $sqlResep   = "SELECT * FROM tb_resep WHERE id_resep='$id_resep'";
    $queryResep = mysqli_query($koneksi, $sqlResep);
    $hasilResep = mysqli_fetch_array($queryResep);
} else {
    header("Location: resep-data.php");
}
?>

<main>
    <section class="container px-4 ">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex gap-2 align-items-center">
                <a href="resep-data.php" class="btn btn-sm btn-dark"><i class="bi bi-arrow-left"></i></a>
                <h2 class="fw-semibold text-center my-auto">Detail Resep</h2>
            </div>

            <div class="d-flex gap-2 align-items-center">
                <a href="resep-ubah.php?id_resep=<?= $hasilResep['id_resep']; ?>" class="btn btn-sm btn-primary">
                    <i class="bi bi-pencil-square"></i>
                    <span class="ms-2 d-none d-md-inline">Ubah Resep</span>
                </a>
                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteResepModal">
                    <i class="bi bi-trash"></i>
                    <span class="ms-2 d-none d-md-inline">Hapus Resep</span>
                </button>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <img src="img/<?= $hasilResep['gambar']; ?>" alt="<?= $hasilResep['nama_resep']; ?>" class="rounded-4 shadow-sm object-fit-cover mb-4 d-md-block mx-auto img-detail w-100 mb-4">

                <h3 class="text-center mb-2"><?= $hasilResep['nama_resep']; ?></h3>

                <div>
                    <?= $hasilResep['deskripsi']; ?>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Ulasan
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <div class="row mb-4">
                                    <div class="col">
                                        <?php
                                        if (isset($_POST['simpan'])) {
                                            $id_review = 'I' . str_pad(mt_rand(1, 99999), 3, '0', STR_PAD_LEFT);
                                            $idResep = $hasilResep['id_resep'];
                                            $nama_reviewer = htmlspecialchars($_POST['nama_reviewer']);
                                            $rating = htmlspecialchars($_POST['rating']);
                                            $ulasan = htmlspecialchars($_POST['ulasan']);
                                            $tanggal_review = date('Y-m-d H:i:s');

                                            $sqlReview = "INSERT INTO tb_review VALUES ('$id_review', '$idResep', '$nama_reviewer', '$rating', '$ulasan', '$tanggal_review')";

                                            $queryReview = mysqli_query($koneksi, $sqlReview);

                                            if ($queryReview) {
                                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                        <strong>Ulasan berhasil dikirim!</strong> 
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>';
                                            } else {
                                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                        <strong>Ulasan gagal dikirim!</strong> Silahkan coba kembali.
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>';
                                            }
                                        }
                                        ?>

                                        <form action="" method="POST" class="border-2 border-bottom boerder-primary">
                                            <div class="row mb-4">
                                                <label for="nama_reviewer" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="nama_reviewer" name="nama_reviewer" placeholder="Masukan Nama Anda">
                                                </div>
                                            </div>

                                            <fieldset class="row mb-4">
                                                <legend class="col-form-label col-sm-2 pt-0">Rating</legend>
                                                <div class="col-sm-10">
                                                    <div class="d-flex flex-row gap-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="rating" id="rating1" value="1" checked>
                                                            <label class="form-check-label" for="rating1">
                                                                1
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="rating" id="rating2" value="2">
                                                            <label class="form-check-label" for="rating2">
                                                                2
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="rating" id="rating3" value="3">
                                                            <label class="form-check-label" for="rating3">
                                                                3
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="rating" id="rating4" value="4">
                                                            <label class="form-check-label" for="rating4">
                                                                4
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="rating" id="rating5" value="5">
                                                            <label class="form-check-label" for="rating5">
                                                                5
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <div class="row mb-4">
                                                <label for="ulasan" class="col-sm-2 col-form-label">Ulasan</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" id="ulasan" name="ulasan" rows="4" placeholder="Buat ulasan"></textarea>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-end mb-4">
                                                <button type="submit" name="simpan" class="btn btn-primary">Kirim</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 mb-4">
                                        <h4>Ulasan Resep</h4>
                                    </div>

                                    <?php
                                    if (isset($id_resep)) {
                                        $sqlUlasan = "SELECT * FROM tb_review AS review
                                                        LEFT JOIN tb_resep AS resep ON review.id_resep = resep.id_resep 
                                                        WHERE review.id_resep='$id_resep' 
                                                        ORDER BY tanggal_review DESC";

                                        $queryUlasan = mysqli_query($koneksi, $sqlUlasan);

                                        if (mysqli_num_rows($queryUlasan) > 0) {
                                            while ($hasilReview = mysqli_fetch_array($queryUlasan)) {
                                    ?>
                                                <div class="col-12 mb-4">
                                                    <div class="d-flex flex-column gap-2">
                                                        <h5><?= $hasilReview['nama_reviewer']; ?></h5>

                                                        <div class="d-flex gap-2 mb-2">
                                                            <?php
                                                            echo date('d-m-Y H:i', strtotime($hasilReview['tanggal_review']));

                                                            echo '<div class="vr"></div>';

                                                            if ($hasilReview['rating'] == "5") {
                                                                echo '<span class="d-flex flex-row gap-1 text-warning">
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                            </span>';
                                                            } elseif ($hasilReview['rating'] == "4") {
                                                                echo '<span class="d-flex flex-row gap-1 text-warning">
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star"></i>
                                                            </span>';
                                                            } elseif ($hasilReview['rating'] == "3") {
                                                                echo '<span class="d-flex flex-row gap-1 text-warning">
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star"></i>
                                                                <i class="bi bi-star"></i>
                                                            </span>';
                                                            } elseif ($hasilReview['rating'] == "2") {
                                                                echo '<span class="d-flex flex-row gap-1 text-warning">
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star"></i>
                                                                <i class="bi bi-star"></i>
                                                                <i class="bi bi-star"></i>
                                                            </span>';
                                                            } elseif ($hasilReview['rating'] == "1") {
                                                                echo '<span class="d-flex flex-row gap-1 text-warning">
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star"></i>
                                                                <i class="bi bi-star"></i>
                                                                <i class="bi bi-star"></i>
                                                                <i class="bi bi-star"></i>
                                                            </span>';
                                                            } else {
                                                                echo '<span class="text-danger">Error</span>';
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <?= $hasilReview['ulasan']; ?>
                                                    </div>

                                                    <hr class="hr">
                                                </div>
                                    <?php
                                            }
                                        } else {
                                            echo '<div class="col-12 mb-4">
                                                <div class="alert alert-warning" role="alert">
                                                    Belum ada ulasan untuk resep ini, jadilah yang pertama!
                                                </div>
                                            </div>';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<div class="modal fade" id="deleteResepModal" tabindex="-1" aria-labelledby="deleteResepModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteResepModalLabel">Hapus Resep</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah anda yakin untuk menghapus <?= $hasilResep['nama_resep']; ?>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary fw-medium" data-bs-dismiss="modal" style="width: 80px;">Tidak</button>
                <a href="resep-hapus.php?id_resep=<?= $hasilResep['id_resep']; ?>" class="btn btn-danger fw-medium" style="width: 80px;">Ya</a>
            </div>
        </div>
    </div>
</div>

<?php include 'template/_footer.php'; ?>