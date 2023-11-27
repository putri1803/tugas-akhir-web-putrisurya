<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Masakan</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/recipe-book.svg">
    <link rel="apple-touch-icon" href="assets/img/recipe-book.svg">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Custom css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <main class="d-flex justify-content-center align-items-center w-100 h-100vh bg-doodle">
        <div class="container px-4">
            <div class="card border-0 rounded-4 shadow">
                <div class="card-body">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-6">
                            <img src="assets/img/desktop-computer.svg" alt="Desktop" class="w-100 h-100 d-none d-md-block">
                        </div>

                        <div class="col-md-6">
                            <h4 class="card-title text-center mb-4">Silahkan isi identitas diri anda untuk mengakses website</h4>

                            <?php
                            include 'template/_koneksi.php';

                            if (isset($_POST['simpan'])) {
                                $id_pengunjung = 'P' . str_pad(mt_rand(1, 99999), 3, '0', STR_PAD_LEFT);
                                $nim = htmlspecialchars($_POST['nim']);
                                $nama = htmlspecialchars($_POST['nama']);
                                $tanggal_akses = date('Y-m-d H:i:s');

                                $sql = "INSERT INTO tb_pengunjung VALUES ('$id_pengunjung', '$nim', '$nama', '$tanggal_akses')";

                                $query = mysqli_query($koneksi, $sql);

                                if ($query) {
                                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Terimakasih!</strong> Silahkan klik link berikut untuk melanjutkan. <a href="beranda.php">KLIK DISINI</a>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';
                                }
                            }
                            ?>

                            <form action="" method="POST">
                                <div class="row mb-4">
                                    <div class="col">
                                        <input type="text" class="form-control text-center" name="nim" placeholder="Masukan NIM" autofocus required>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <input type="text" class="form-control text-center" name="nama" placeholder="Masukan Nama" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <button type="submit" name="simpan" class="btn btn-primary fw-medium w-100">KIRIM</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap js bundle with @popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>