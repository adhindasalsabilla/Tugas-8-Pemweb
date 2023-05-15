<?php 
    include 'koneksi.php';
    
    $jenis_daftar = $_POST['jenis_daftar'];
    $tgl_masuk = $_POST['tgl_masuk'];
    $nis = $_POST['nis'];
    $nomor_ujian = $_POST['nomor_ujian'];
    $pernah_paud = $_POST['pernah_paud'];
    $pernah_tk = $_POST['pernah_tk'];
    $nomor_skhun = $_POST['nomor_skhun'];
    $nomor_ijazah = $_POST['nomor_ijazah'];
    $hobi = $_POST['hobi'];
    $cita_cita = $_POST['cita_cita'];

   
    $query = "INSERT INTO data_pribadi SET jenis_daftar='$jenis_daftar', tgl_masuk='$tgl_masuk', nis='$nis', nomor_ujian='$nomor_ujian', pernah_paud='$pernah_paud', pernah_tk='$pernah_tk', nomor_skhun='$nomor_skhun', nomor_ijazah='$nomor_ijazah', hobi='$hobi', cita_cita='$cita_cita'";
    mysqli_query($koneksi, $query);

    // Mengalihkan ke halaman form-input.php
    header("location:data_lengkap.php");
    
    if($jenis_daftar == ""){
        header("location:data_pribadi.php?jenis_daftar=kosong");
    }
    // else{echo "jenis_daftar anda adalah". $jenis_daftar;}
    if($tgl_masuk == ""){
        header("location:data_pribadi.php?tgl_masuk=kosong");
    }
    // else{echo "tgl_masuk anda adalah". $tgl_masuk;}
    if($nis == ""){
        header("location:data_pribadi.php?nis=kosong");
    }
    // else{echo "nis anda adalah". $nis;}
    if($nomor_ujian == ""){
        header("location:data_pribadi.php?nomor_ujian=kosong");
    }
    // else{echo "nomor_ujian anda adalah". $nomor_ujian;}
    if($pernah_paud == ""){
        header("location:data_pribadi.php?pernah_paud=kosong");
    }
    // else{echo "paud anda adalah". $paud;}
    if($pernah_tk == ""){
        header("location:data_pribadi.php?pernah_tk=kosong");
    }
    // else{echo "tk anda adalah". $tk;}
    if($nomor_skhun == ""){
        header("location:data_pribadi.php?nomor_skhun=kosong");
    }
    // else{echo "nomor_skhun anda adalah". $nomor_skhun;}
    if($nomor_ijazah == ""){
        header("location:data_pribadi.php?nomor_ijazah=kosong");
    }
    // else{ echo "nomor_ijazah anda adalah". $nomor_ijazah;}
    if($hobi == ""){
        header("location:data_pribadi.php?hobi=kosong");
    }
    // else{echo "hobi anda adalah". $hobi;}
    if($cita_cita == ""){
        header("location:data_pribadi.php?cita_cita=kosong");
    }
    // else{echo "cita_cita anda adalah". $cita_cita;}
?>
