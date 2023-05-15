<?php 
    include 'koneksi.php';
    
    $nama_ayah = $_POST['nama_ayah'];
    $tahun_lahir_ayah = $_POST['tahun_lahir_ayah'];
    $pendidikan_ayah = $_POST['pendidikan_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $penghasilan_ayah = $_POST['penghasilan_ayah'];
    $khusus_ayah = $_POST['khusus_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $tahun_lahir_ibu = $_POST['tahun_lahir_ibu'];
    $pendidikan_ibu = $_POST['pendidikan_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $penghasilan_ibu = $_POST['penghasilan_ibu'];
    $khusus_ibu = $_POST['khusus_ibu'];
    
    $query = "INSERT INTO data_ortu SET nama_ayah='$nama_ayah', tahun_lahir_ayah='$tahun_lahir_ayah', pendidikan_ayah='$pendidikan_ayah', pekerjaan_ayah='$pekerjaan_ayah', penghasilan_ayah='$penghasilan_ayah', khusus_ayah='$khusus_ayah', nama_ibu='$nama_ibu', tahun_lahir_ibu='$tahun_lahir_ibu', pendidikan_ibu='$pendidikan_ibu', pekerjaan_ibu='$pekerjaan_ibu', penghasilan_ibu='$penghasilan_ibu', khusus_ibu='$khusus_ibu'";
    mysqli_query($koneksi, $query);

    // Mengalihkan ke halaman form-input.php
    header("location:hasil_formulir.php");
    
    // Pengecekan apakah data inputan kosong
    if($nama_ayah == ""){
        header("location:data_ortu.php?nama_ayah=kosong");
    }
    // else{echo "nama_ayah anda adalah". $nama_ayah;}
    if($tahun_lahir_ayah == ""){
        header("location:data_ortu.php?tahun_lahir_ayah=kosong");
    }
    // else{echo "tahun_lahir_ayah anda adalah". $tahun_lahir_ayah;}
    if($pendidikan_ayah == ""){
        header("location:data_ortu.php?pendidikan_ayah=kosong");
    }
    // else{echo "pendidikan_ayah anda adalah". $pendidikan_ayah;}
    if($pekerjaan_ayah == ""){
        header("location:data_ortu.php?pekerjaan_ayah=kosong");
    }
    // else{echo "pekerjaan_ayah anda adalah". $pekerjaan_ayah;}
    if($penghasilan_ayah == ""){
        header("location:data_ortu.php?penghasilan_ayah=kosong");
    }
    // else{echo "penghasilan_ayah anda adalah". $penghasilan_ayah;}
    if($khusus_ayah == ""){
        header("location:data_ortu.php?khusus_ayah=kosong");
    }
    // else{echo "khusus_ayah anda adalah". $khusus_ayah;}
    if($nama_ibu == ""){
        header("location:data_ortu.php?nama_ibu=kosong");
    }
    // else{echo "nama_ibu anda adalah". $nama_ibu;}
    if($tahun_lahir_ibu == ""){
        header("location:data_ortu.php?tahun_lahir_ibu=kosong");
    }
    // else{echo "tahun_lahir_ibu anda adalah". $tahun_lahir_ibu;}
    if($pendidikan_ibu == ""){
        header("location:data_ortu.php?pendidikan_ibu=kosong");
    }
    // else{echo "pendidikan_ibu anda adalah". $pendidikan_ibu;}
    if($pekerjaan_ibu == ""){
        header("location:data_ortu.php?pekerjaan_ibu=kosong");
    }
    // else{echo "pekerjaan_ibu anda adalah". $pekerjaan_ibu;}
    if($penghasilan_ibu == ""){
        header("location:data_ortu.php?penghasilan_ibu=kosong");
    }
    // else{echo "penghasilan_ibu anda adalah". $penghasilan_ibu;}
    if($khusus_ibu == ""){
        header("location:data_ortu.php?khusus_ibu=kosong");
    }
    // else{echo "khusus_ibu anda adalah". $khusus_ibu;}
?>
