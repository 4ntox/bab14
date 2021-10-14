<?php

//mengkoneksi ke mysql
require_once ("koneksi.php");

//mengeksekui query
$query = "SELECT `id_barang`, `nama_barang`, `jenis`, `satuan`, `stok` FROM `barang`";
$result = mysqli_query ($mysqli, $query);

//get data jenis
$queryJenis = "SELECT * FROM `jenis`";
$dataJenis = mysqli_query($mysqli, $queryJenis);

//get data satuan
$querySatuan = "SELECT * FROM `satuan`";
$dataSatuan = mysqli_query($mysqli, $querySatuan);

//get data ijin edar
$queryIjinEdar = "SELECT * FROM `ijin_edar`";
$dataIjinEdar = mysqli_query($mysqli, $queryIjinEdar);

//get data ijin bpom
$queryIjinBpom = "SELECT * FROM `ijin_bpom`";
$dataIjinBpom = mysqli_query($mysqli, $queryIjinBpom);

//get data status ekspor
$queryEkspor = "SELECT * FROM `ekspor`";
$dataEkspor = mysqli_query($mysqli, $queryEkspor);




// foreach ( $result as $data) {

    //     var_dump($data);
    //     echo "<br>" ."<br>"."barang : " .$data['nama_barang'];
    // }
    

?>


