<?php 
    include 'koneksi.php';
    
    $nama_lengkap = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nisn = $_POST['nisn'];
    $nik = $_POST['nik'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $agama = $_POST['agama'];
    $kebutuhan_khusus = $_POST['kebutuhan_khusus'];
    $alamat_jalan = $_POST['alamat_jalan'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $nama_dusun = $_POST['nama_dusun'];
    $nama_kelurahan = $_POST['nama_kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $kode_pos = $_POST['kode_pos'];
    $tempat_tinggal = $_POST['tempat_tinggal'];
    $moda_transport = $_POST['moda_transport'];
    $nomor_hp = $_POST['nomor_hp'];
    $nomor_telp = $_POST['nomor_telp'];
    $email = $_POST['email'];
    $kps_pkh_kip = $_POST['kps_pkh_kip'];
    $nomor_kps = $_POST['nomor_kps'];
    $kewarganegaraan = $_POST['kewarganegaraan'];
    $nama_negara = $_POST['nama_negara'];

    $query = "INSERT INTO data_lengkap SET nama_lengkap='$nama_lengkap', jenis_kelamin='$jenis_kelamin', nisn='$nisn', nik='$nik', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', agama='$agama', kebutuhan_khusus='$kebutuhan_khusus', alamat_jalan='$alamat_jalan', rt='$rt', rw='$rw', nama_dusun='$nama_dusun', nama_kelurahan='$nama_kelurahan', kecamatan='$kecamatan', kode_pos='$kode_pos', tempat_tinggal='$tempat_tinggal', moda_transport='$moda_transport', nomor_hp='$nomor_hp', nomor_telp='$nomor_telp', email='$email', kps_pkh_kip='$kps_pkh_kip', nomor_kps='$nomor_kps', kewarganegaraan='$kewarganegaraan', nama_negara='$nama_negara'";
    mysqli_query($koneksi, $query);

    // Mengalihkan ke halaman form-input.php
    header("location:data_ortu.php");
    
    // Pengecekan apakah data inputan kosong
    if($nama_lengkap == ""){
        header("location:data_lengkap.php?nama_lengkap=kosong");
    }
    // else{echo "nama_lengkap anda adalah". $nama_lengkap;}
    if($jenis_kelamin == ""){
        header("location:data_lengkap.php?jenis_kelamin=kosong");
    }
    // else{echo "jenis_kelamin anda adalah". $jenis_kelamin;}
    if($nisn == ""){
        header("location:data_lengkap.php?nisn=kosong");
    }
    // else{echo "nisn anda adalah". $nisn;}
    if($nik == ""){
        header("location:data_lengkap.php?nik=kosong");
    }
    // else{echo "nik anda adalah". $nik;}
    if($tempat_lahir == ""){
        header("location:data_lengkap.php?tempat_lahir=kosong");
    }
    // else{echo "tgl_lahir anda adalah". $tgl_lahir;}
    if($tgl_lahir == ""){
        header("location:data_lengkap.php?tgl_lahir=kosong");
    }
    // else{echo "tempat_lahir anda adalah". $tempat_lahir;}
    if($alamat_jalan == ""){
        header("location:data_lengkap.php?alamat_jalan=kosong");
    }
    // else{echo "alamat_jalan anda adalah". $alamat_jalan;}
    if($rt == ""){
        header("location:data_lengkap.php?rt=kosong");
    }
    // else{echo "rt anda adalah". $rt;}
    if($rw == ""){
        header("location:data_lengkap.php?rw=kosong");
    }
    // else{echo "rw anda adalah". $rw;}
    if($nama_dusun == ""){
        header("location:data_lengkap.php?nama_dusun=kosong");
    }
    // else{echo "nama_dusun anda adalah". $nama_dusun;}
    if($nama_kelurahan == ""){
        header("location:data_lengkap.php?nama_kelurahan=kosong");
    }
    // else{echo "nama_kelurahan anda adalah". $nama_kelurahan;}
    if($kecamatan == ""){
        header("location:data_lengkap.php?kecamatan=kosong");
    }
    // else{echo "kecamatan anda adalah". $kecamatan;}
    if($kode_pos == ""){
        header("location:data_lengkap.php?kode_pos=kosong");
    }
    // else{echo "kode_pos anda adalah". $kode_pos;}
    if($tempat_tinggal == ""){
        header("location:data_lengkap.php?tempat_tinggal=kosong");
    }
    // else{echo "tempat_tinggal anda adalah". $tempat_tinggal;}
    if($moda_transport == ""){
        header("location:data_lengkap.php?moda_transport=kosong");
    }
    // else{echo "moda_transport anda adalah". $moda_transport;}
    if($nomor_hp == ""){
        header("location:data_lengkap.php?nomor_hp=kosong");
    }
    // else{echo "nomor_hp anda adalah". $nomor_hp;}
    if($nomor_telp == ""){
        header("location:data_lengkap.php?nomor_telp=kosong");
    }
    // else{echo "nomor_telp anda adalah". $nomor_telp;}
    if($email == ""){
        header("location:data_lengkap.php?email=kosong");
    }
    // else{echo "email anda adalah". $email;}
    if($kps_pkh_kip == ""){
        header("location:data_lengkap.php?kps_pkh_kip=kosong");
    }
    // else{echo "kps_pkh_kip anda adalah". $kps_pkh_kip;}
    if($kewarganegaraan == ""){
        header("location:data_lengkap.php?kewarganegaraan=kosong");
    }
    // else{echo "kewarganegaraan anda adalah". $kewarganegaraan;}
?>
