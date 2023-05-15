<?php 
    // Login aktif
    session_start();

    include 'koneksi.php';
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Mengambil data dari table akun
    $data = mysqli_query($koneksi, "SELECT * FROM akun WHERE username='$username' AND password='$password'");
    
    // Total data yang ditemukan
    $cek = mysqli_num_rows($data);
    
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:data_pribadi.php");
    }else{
        header("location:login.php?pesan=gagal");
    }
?>
