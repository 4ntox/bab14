<?php
    require_once ("koneksi.php");
    $error=0;

    if (isset($_POST['email']))
        $email=$_POST['email'];

    else $error=1;

    if (isset($_POST['name']))
        $name=$_POST['name'];

    else $error=1;

    if (isset($_POST['password']))
        $password=$_POST['password'];

    else $error=1;

    if (isset($_POST['re-password']))
        $re_password=$_POST['re-password'];

    else $error=1;

    if ($error==1) {
        echo "Terjadi kesalahan input data";
        exit();

    }

    if ($password != $re_password) {
            echo "Password tidak sama, ulangi pengisian data";
            exit();

    }   else {
            $password = hash("sha256", $password);
    }

    $query = "INSERT INTO petugas (`email`, `nama`, `password`) values ('{$email}', '{$name}','{$password}');";
    $insert= mysqli_query($mysqli,$query);

    if ($insert==false) {
            echo "error dalam menambahkan data";
    }   else {
            header ("location: index.php");
    }

?>