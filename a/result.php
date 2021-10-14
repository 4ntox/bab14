<?php

require_once ("koneksi.php");

// status tidak error
$error = 0;

// validasi data input

if (isset ($post['id_barang']) ) $id_barang = $_POST['id_barang'];
else $error = 1; // status error

if (isset ($post['nama_barang']) ) $nama_barang = $_POST['nama_barang'];
else $error = 1; // status error

if (isset ($post['jenis']) ) $jenis = $_POST['jenis'];
else $error = 1; // status error

if (isset ($post['satuan']) ) $satuan = $_POST['satuan'];
else $error = 1; // status error

if (isset ($post['stok']) ) $stok = $_POST['stok'];
else $error = 1; // status error

if (isset ($post['ijinEdar']) ) $ijinEdar = $_POST['ijinEdar'];

    // if ( $ijinEdar == true ) {
    //     $ijinEdarStatus = "Berijin Edar";
    // }
    // else {
    //     $ijinEdarStatus = "Belum Berijin Edar";
    // }

else $error = 1; // status error


if (isset ($post['ijinBpom']) ) $ijinBpom = $_POST['ijinBpom'];

    // if ( $ijinBpom == true ) {
    //     $ijinBpomStatus = "Berijin BPOM";
    // }
    // else {
    //     $ijinBpomStatus = "Belum Berijin BPOM";
    // }

else $error = 1; // status error

if (isset ($post['ekspor']) ) $ekspor = $_POST['ekspor'];

    // if ( $ekspor == "boleh" ) {
    //     $eksporText = "Boleh diEkspor";
    // }
    // else {
    //     $eksporText = "Tidak Boleh diEkspor";
    // }    

else $error = 1; // status error

if (isset ($post['distributor']) ) $distributor = $_POST['distributor'];
else $error = 1; // status error


// mengatasi error pada input

if ( $error == 1 ) {
    echo "Terjadi Kesalahan Pada Input Data";
    exit();
}

// menyiapkan query MySql utk dieksekusi

$query = "
    INSERT INTO barang
    (id_barang, nama_barang, jenis, satuan, stok, ijinEdar, ijinBpom, ekspor, distributor)
    VALUES
    ('{$id_barang}', '{$nama_barang}','{$jenis}', '{$satuan}','{$stok}','{$ijinEdar}','{$ijinBpom}','{$distributor}');
";

// mengeksekusi MySql query
$insert = mysqli_query($mysqli, $query);

// menangani error pd saat koneksi ke mysql

if ( $insert == false ) {
    echo "Error dalam menambahkan data. <a href= 'index.php'>Back</a>";
}
else {
    header("Location: index.php");
}



// if (isset($_POST["submit"]) ) {
//     $id_barang = $_POST['id_barang'];
//     $nama_barang = $_POST['nama_barang'];
//     $jenis = $_POST['jenis'];
//     $satuan = $_POST['satuan'];
//     $stok = $_POST['stok'];
//     $distributor = $_POST['distributor'];
//     $ekspor = $_POST['ekspor'];

//     $ijinEdar = $_POST['ijinEdar'];
//     $ijinBpom = $_POST['ijinBpom'];

//     if ( $ekspor == "boleh" ) {
//         $eksporText = "Boleh diEkspor";
//     }
//     else {
//         $eksporText = "Tidak Boleh diEkspor";
//     }

//     if ( $ijinEdar == true ) {
//         $ijinEdarStatus = "Berijin Edar";
//     }
//     else {
//         $ijinEdarStatus = "Belum Berijin Edar";
//     }

//     if ( $ijinBpom == true ) {
//         $ijinBpomStatus = "Berijin BPOM";
//     }
//     else {
//         $ijinBpomStatus = "Belum Berijin BPOM";
//     }
// }




?>





<html>

    <head>

         <title>hasil form</title>

    </head>



    <body>

       <table class= "table" border="1">

                            <thead>

                                <tr>

                                <th scope= "col">#</th>
                                <th scope= "col">id_barang</th>
                                <th scope= "col">nama_barang</th>
                                <th scope= "col">jenis_barang</th>
                                <th scope= "col">satuan</th>
                                <th scope= "col">jumlah_stok</th>
                                                                        </th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                <th scope= "row">1</th>
                                <td>id_barang</td> 
                                <td>nama_barang</td>
                                <td>jenis_barang</td>
                                <td>satuan</td>
                                <td>jumlah_stok</td>
                                                                        </th>
                                </tr>

                            </tbody>

                        </table> 
            

            


    </body>

</html>