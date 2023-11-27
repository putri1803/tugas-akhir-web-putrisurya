<?php
$server     = "localhost";
$username   = "root";
$password   = "";
$database   = "db_resep";

// Mengatur zona waktu default ke "Asia/Singapore"
date_default_timezone_set('Asia/Singapore');

$koneksi    = mysqli_connect($server, $username, $password, $database);

if (!$koneksi) {
    echo 'Koneksi ke database gagal: ' . mysqli_connect_error();
}
