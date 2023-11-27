<?php
include 'template/_koneksi.php';

$id_resep = $_GET['id_resep'];

if (isset($id_resep)) {
    $resep = mysqli_query($koneksi, "SELECT gambar FROM tb_resep WHERE id_resep='$id_resep'");
    $hasil = mysqli_fetch_array($resep);

    $sql = "DELETE FROM tb_resep WHERE id_resep='$id_resep'";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        if ($hasil['gambar']) {
            $pathGambar = 'img/' . $hasil['gambar'];
            if (file_exists($pathGambar)) {
                unlink($pathGambar);
            }
        }
        header("Location: resep-data.php");
    } else {
        header("Location: resep-data.php");
    }
} else {
    header("Location: resep-data.php");
}
