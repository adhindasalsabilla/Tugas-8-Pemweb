<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pengisian Data</title>
	<!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="gambarlogin.jpeg">
    <!-- pengecekan login -->
        <?php 
            session_start();
            if($_SESSION['status']!="login"){
                header("location:login.php?pesan=belum_login");
            }

            if(isset($_GET['tgl_isi'])){
                if($_GET['tgl_isi'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi tanggal pengisian formulir!</h5>";
                }
            }
            if(isset($_GET['jenis_daftar'])){
                if($_GET['jenis_daftar'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi jenis pendaftaran!</h5>";
                }
            }
            if(isset($_GET['tgl_masuk'])){
                if($_GET['tgl_masuk'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi tanggal masuk sekolah!</h5>";
                }
            }
            if(isset($_GET['nis'])){
                if($_GET['nis'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi NIS anda!</h5>";
                }
            }
            if(isset($_GET['nomor_ujian'])){
                if($_GET['nomor_ujian'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi Nomor Peserta Ujian Anda!</h5>";
                }
            }
            if(isset($_GET['pernah_paud'])){
                if($_GET['pernah_paud'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi bagian PAUD!</h5>";
                }
            }
            if(isset($_GET['pernah_tk'])){
                if($_GET['pernah_tk'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi bagian TK!</h5>";
                }
            }
            if(isset($_GET['nomor_skhun'])){
                if($_GET['nomor_skhun'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi Nomor SKHUN Anda!</h5>";
                }
            }
            if(isset($_GET['nomor_ijazah'])){
                if($_GET['nomor_ijazah'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi Nomor Ijazah Anda!</h5>";
                }
            }
            if(isset($_GET['hobi'])){
                if($_GET['hobi'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi bagian Hobi!</h5>";
                }
            }
            if(isset($_GET['cita_cita'])){
                if($_GET['cita_cita'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi bagian Cita-Cita!</h5>";
                }
            }
            
        ?>
        <div style="background-color:white;">
            <h4 class="mt-3">
                Halo, <?php echo $_SESSION['username']; ?>!
            </h4>
        </div>
        <h1 align="center" class="fw-bold">FORMULIR PESERTA DIDIK</h1>

        <div class="container border border-3 border-dark" style="background-color:white;">
            <form action="lihat_data_pribadi.php" method="post">
                <table class="mt-2">
                    <tr>
                        <td>Tanggal </td>
                        <td>: <input type="date" name="tgl_isi"></td>
                    </tr>
                </table>
                <div class="judulbghitam mt-2">
                    <p> REGISTRASI PESERTA DIDIK </p>
                </div>
                <table>
                    <tr>
                        <td width="40px">1. </td>
                        <td width="250px">Jenis Pendaftaran</td>
                        <td>: 
                            <input type="radio" name="jenis_daftar" value="Siswa Baru"> Siswa Baru
                            <input type="radio" name="jenis_daftar" value="Pindahan"> Pindahan
                        </td>
                    </tr>
                    <tr>
                        <td>2. </td>
                        <td>Tanggal Masuk Sekolah</td>
                        <td>: <input type="date" name="tgl_masuk"></td>
                    </tr>
                    <tr>
                        <td>3. </td>
                        <td>NIS</td>
                        <td>: <input style="width:300px;" type="text" name="nis"></td>
                    </tr>
                    <tr>
                        <td>4. </td>
                        <td>Nomor Peserta Ujian</td>
                        <td>: 
                            <input style="width:400px;" type="text" name="nomor_ujian">
                            <br>
                            <p style="margin:0; font-style:italic;">* Nomor peserta Ujian adalah 20 Digit yang tertera dalam sertifikat <span style="color: red; font-weight: bold; font-style:italic;">SKHUN SD</span>, diisi bagi peserta didik jenjang SMP </p>
                        </td>
                    </tr>
                    <tr>
                        <td>5. </td>
                        <td>Apakah Pernah PAUD</td>
                        <td>: 
                            <input type="radio" name="pernah_paud" value="Ya"> Ya 
                            <input type="radio" name="pernah_paud" value="Tidak"> Tidak
                        </td>
                    </tr>
                    <tr>
                        <td>6. </td>
                        <td>Apakah Pernah TK</td>
                        <td>: 
                            <input type="radio" name="pernah_tk" value="Ya"> Ya 
                            <input type="radio" name="pernah_tk" value="Tidak"> Tidak
                        </td>
                    </tr>
                    <tr>
                        <td>7. </td>
                        <td>No. Seri SKHUN Sebelumnya</td>
                        <td>: <input style="width:350px;" type="text" name="nomor_skhun"> <span style="margin:0; font-style:italic;"> Diisi 16 Digit yang tertera di <span style="color: red; font-weight: bold; font-style:italic;"> SKHUN SD </span> - diisi Bagi PD Jenjang SMP</span></td>
                    </tr>
                    <tr>
                        <td>8. </td>
                        <td>No. Seri Ijazah Sebelumnya</td>
                        <td>: <input style="width:350px;" type="text" name="nomor_ijazah"> <span style="margin:0; font-style:italic;"> Diisi 16 Digit yang tertera di <span style="color: red; font-weight: bold; font-style:italic;"> Ijazah SD </span> - diisi Bagi PD Jenjang SMP</span></td>
                    </tr>
                    <tr>
                        <td>9. </td>
                        <td>Hobi</td>
                        <td>: 
                            <select name="hobi">
                                <option value="Olah Raga">Olah Raga</option>
                                <option value="Kesenian">Kesenian</option>
                                <option value="Membaca">Membaca</option>
                                <option value="Menulis">Menulis</option>
                                <option value="Traveling">Traveling</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>10. </td>
                        <td>Cita-Cita</td>
                        <td>: 
                            <select name="cita_cita">
                                <option value="PNS">PNS</option>
                                <option value="TNI/POLRI">TNI/POLRI</option>
                                <option value="Guru/Dosen">Guru/Dosen</option>
                                <option value="Dokter">Dokter</option>
                                <option value="Politikus">Politikus</option>
                                <option value="Seni/Lukis/Artis/Sejenis">Seni/Lukis/Artis/Sejenis</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <button class="mt-3 mb-3" type="submit" value="simpan">Next</button>
            </form>
        </div>
</body>
</html>