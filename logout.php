<?php 
    // Untuk login
    session_start();
    
    // Untuk logout
    session_destroy();
    
    // Mengalihkan halaman 
    header("location:login.php?pesan=logout");
?>
