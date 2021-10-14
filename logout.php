<?php

//start session
session_start();

//menghapus semua session yg telah didefinisikan
session_destroy();

//mengarahakan menuju halaman login
header("location: login.php");

?>