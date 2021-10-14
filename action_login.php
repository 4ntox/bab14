<?php

    // panggil file koneksi php
    require_once ("koneksi.php");

    // status no error
    $error=0;

    // memvalidasi inputan
    if (isset($_POST['email']))
        $email=$_POST['email'];

    else $error=1; // status error

    if (isset($_POST['password']))
        $password=$_POST['password'];

    else $error=1; // status error

    // mengatasi jika terdapat error pada inputan
    if ($error==1) {
        echo "Terjadi kesalahan pada data inputan <a href='login.php'>Kembali</a>";
        exit();
    }


    // hashing password
    $password = hash("sha256", $password);

    // menyiapkan query MySql utk dieksekusi
    $query = "SELECT * FROM petugas WHERE email = '{$email}'";

    // mengeksekusi My Sql query
    $hasil = mysqli_query ($mysqli, $query);

    $data = mysqli_fetch_assoc ($hasil);

    if ( is_null($data) ) {
        echo "Email belum terdaftar <a href='login.php'>Kembali</a>";
        exit();
    }

    elseif ($data['password'] != $password) {
        echo "Password salah <a href='login.php'>Kembali</a>";
        exit();
    }

    else {
        
        //memulai fungsi session (session hanya dapat digunakan setelah fungsi ini)
        session_start();

        $_SESSION["status"] = true;
        $_SESSION["name"] = $data ["name"];
        $_SESSION["email"] = $data ["email"];
        
        header("location: index.php");

    }


    //


?>