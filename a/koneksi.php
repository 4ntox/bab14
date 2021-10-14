<?php

// Buat koneksi
$mysqli = new mysqli("localhost", "root", "", "gudang");

// Periksa Koneksi
if ($mysqli -> connect_errno) {
    echo "Gagal terhubung ke MySQL: " . $mysqli -> connect_error;
    exit();
}

?>