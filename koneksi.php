<?php
    // membuat koneksi dengan database
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "psd_baru2";

    // query php untuk mengakses database
    $koneksi = mysqli_connect($host, $username, $password, $db);

    // cek koneksi
    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>
