<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pengisian Data Pribadi</title>
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

            if(isset($_GET['nama_lengkap'])){
                if($_GET['nama_lengkap'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi nama lengkap Anda!</h5>";
                }
            }
            if(isset($_GET['jenis_kelamin'])){
                if($_GET['jenis_kelamin'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi jenis kelamin Anda!</h5>";
                }
            }
            if(isset($_GET['nisn'])){
                if($_GET['nisn'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi NISN Anda!</h5>";
                }
            }
            if(isset($_GET['nik'])){
                if($_GET['nik'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi NIK Anda!</h5>";
                }
            }
            if(isset($_GET['tempat_lahir'])){
                if($_GET['tempat_lahir'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi tempat lahir Anda!</h5>";
                }
            }
            if(isset($_GET['tgl_lahir'])){
                if($_GET['tgl_lahir'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi tanggal lahir Anda!</h5>";
                }
            }
            if(isset($_GET['agama'])){
                if($_GET['agama'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi agama Anda!</h5>";
                }
            }
            if(isset($_GET['kebutuhan_khusus'])){
                if($_GET['kebutuhan_khusus'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi kebutuhan khusus Anda!</h5>";
                }
            }
            if(isset($_GET['alamat_jalan'])){
                if($_GET['alamat_jalan'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi alamat jalan Anda!</h5>";
                }
            }
            if(isset($_GET['rt'])){
                if($_GET['rt'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi RT Anda!</h5>";
                }
            }
            if(isset($_GET['rw'])){
                if($_GET['rw'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi RW Anda!</h5>";
                }
            }
            if(isset($_GET['nama_dusun'])){
                if($_GET['nama_dusun'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi nama dusun Anda!</h5>";
                }
            }
            if(isset($_GET['nama_kelurahan'])){
                if($_GET['nama_kelurahan'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi nama Kelurahan/Desa Anda!</h5>";
                }
            }
            if(isset($_GET['kecamatan'])){
                if($_GET['kecamatan'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi Kecamatan Anda!</h5>";
                }
            }
            if(isset($_GET['kode_pos'])){
                if($_GET['kode_pos'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi kode pos Anda!</h5>";
                }
            }
            if(isset($_GET['tempat_tinggal'])){
                if($_GET['tempat_tinggal'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi tempat tinggal Anda!</h5>";
                }
            }
            if(isset($_GET['moda_transport'])){
                if($_GET['moda_transport'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi Moda Transportasi Anda!</h5>";
                }
            }
            if(isset($_GET['nomor_hp'])){
                if($_GET['nomor_hp'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi Nomor HP Anda!</h5>";
                }
            }
            if(isset($_GET['nomor_telp'])){
                if($_GET['nomor_telp'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi Nomor Telepon Anda!</h5>";
                }
            }
            if(isset($_GET['email'])){
                if($_GET['email'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi alamat email Anda!</h5>";
                }
            }
            if(isset($_GET['kps_pkh_kip'])){
                if($_GET['kps_pkh_kip'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi bagian KPS/PKH/KIP!</h5>";
                }
            }
            if(isset($_GET['kewarganegaraan'])){
                if($_GET['kewarganegaraan'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi kewarganegaraan Anda!</h5>";
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
            <form action="lihat_data_lengkap.php" method="post">
                <div class="judulbghitam mt-2">
                    <p> DATA PRIBADI </p>
                </div>
                <table>
                    <tr>
                        <td width="40px">11. </td>
                        <td width="250px">Nama Lengkap</td>
                        <td>: <input style="width:500px;" type="text" name="nama_lengkap"></td>
                    </tr>
                    <tr>
                        <td>12. </td>
                        <td>Jenis Kelamin</td>
                        <td>: 
                            <input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki 
                            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>13. </td>
                        <td>NISN</td>
                        <td>: <input style="width:300px;" type="text" name="nisn"></td>
                    </tr>
                    <tr>
                        <td>14. </td>
                        <td>NIK</td>
                        <td>: <input style="width:350px;" type="text" name="nik"></td>
                    </tr>
                    <tr>
                        <td>15. </td>
                        <td>Tempat Lahir</td>
                        <td>: <input type="date" name="tempat_lahir"></td>
                    </tr>
                    <tr>
                        <td>16. </td>
                        <td>Tanggal Lahir</td>
                        <td>: <input style="width:500px;" type="text" name="tgl_lahir"></td>
                    </tr>
                    <tr>
                        <td>17. </td>
                        <td>Agama</td>
                        <td>: 
                            <select name="agama">
                                <option value="Islam">Islam</option>
                                <option value="Kristen/Protestan">Kristen/Protestan</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Kong Hu Chu">Kong Hu Chu</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </td>    
                    </tr>
                    <tr>
                        <td>18. </td>
                        <td>Berkebutuhan Khusus</td>
                        <td>: 
                            <select name="kebutuhan_khusus">
                                <option value="Tidak">Tidak</option>
                                <option value="Netra">Netra</option>
                                <option value="Rungu">Rungu</option>
                                <option value="Grahita Ringan">Grahita Ringan</option>
                                <option value="Grahita Sedang">Grahita Sedang</option>
                                <option value="Daksa Ringan">Daksa Ringan</option>
                                <option value="Daksa Sedang">Daksa Sedang</option>
                                <option value="Laras">Laras</option>
                                <option value="Wicara">Wicara</option>
                                <option value="Tuna Ganda">Tuna Ganda</option>
                                <option value="Hiper Aktif">Hiper Aktif</option>
                                <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                                <option value="Bakat Istimewa">Bakat Istimewa</option>
                                <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                                <option value="Narkoba">Narkoba</option>
                                <option value="Indigo">Indigo</option>
                                <option value="Down Syndrome">Down Syndrome</option>
                                <option value="Autis">Autis</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>19. </td>
                        <td>Alamat Jalan</td>
                        <td>: <input style="width:580px;" type="text" name="alamat_jalan"></td>
                    </tr>
                    <tr>
                        <td>20. </td>
                        <td>RT</td>
                        <td>: <input style="width:50px;" type="text" name="rt"></td>
                    </tr>
                    <tr>
                        <td>21. </td>
                        <td>RW</td>
                        <td>: <input style="width:50px;" type="text" name="rw"></td>
                    </tr>
                    <tr>
                        <td>22. </td>
                        <td>Nama Dusun</td>
                        <td>: <input style="width:500px;" type="text" name="nama_dusun"></td>
                    </tr>
                    <tr>
                        <td>23. </td>
                        <td>Nama Kelurahan/Desa</td>
                        <td>: <input style="width:500px;" type="text" name="nama_kelurahan"></td>
                    </tr>
                    <tr>
                        <td>24. </td>
                        <td>Kecamatan</td>
                        <td>: <input style="width:500px;" type="text" name="kecamatan"></td>
                    </tr>
                    <tr>
                        <td>25. </td>
                        <td>Kode Pos</td>
                        <td>: <input style="width:100px;" type="text" name="kode_pos"></td>
                    </tr>
                    <tr>
                        <td>26. </td>
                        <td>Tempat Tinggal</td>
                        <td>: 
                            <input type="radio" name="tempat_tinggal" value="Bersama Orang Tua"> Bersama Orang Tua 
                            <input type="radio" name="tempat_tinggal" value="Wali"> Wali
                            <input type="radio" name="tempat_tinggal" value="Kos"> Kos
                            <input type="radio" name="tempat_tinggal" value="Asrama"> Asrama
                            <input type="radio" name="tempat_tinggal" value="Panti Asuhan"> Panti Asuhan
                            <input type="radio" name="tempat_tinggal" value="Lainnya"> Lainnya
                        </td>
                    </tr>
                    <tr>
                        <td>27. </td>
                        <td>Moda Transportasi</td>
                        <td>: 
                            <select name="moda_transport">
                                <option value="Jalan Kaki">Jalan Kaki</option>
                                <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                                <option value="Kendaraan Umum">Kendaraan Umum</option>
                                <option value="Jempuran Sekolah">Jempuran Sekolah</option>
                                <option value="Kereta Api">Kereta Api</option>
                                <option value="Ojek">Ojek</option>
                                <option value="Ando/Bendi/Dokar/Becak">Ando/Bendi/Dokar/Becak</option>
                                <option value="Perahu Penyebrangan/Rakit/Gelek">Perahu Penyebrangan/Rakit/Gelek</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>28. </td>
                        <td>Nomor HP</td>
                        <td>: <input type="text" name="nomor_hp"></td>
                    </tr>
                    <tr>
                        <td>29. </td>
                        <td>Nomor Telepon</td>
                        <td>: <input type="text" name="nomor_telp"></td>
                    </tr>
                    <tr>
                        <td>30. </td>
                        <td>E-mail Pribadi</td>
                        <td>: <input style="width:250px;" type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td>31. </td>
                        <td>Penerima KPS/PKH/KIP</td>
                        <td>: 
                            <input type="radio" name="kps_pkh_kip" value="Ya"> Ya 
                            <input type="radio" name="kps_pkh_kip" value="Tidak"> Tidak
                        </td>
                    </tr>
                    <tr>
                        <td>32. </td>
                        <td>No. KPS/PKH/KIP</td>
                        <td>: <input style="width:400px;" type="text" name="nomor_kps"><span style="font-style:italic;">*) Apabila Menerima</span></td>
                    </tr>
                    <tr>
                        <td>33. </td>
                        <td>Kewarganegaraan</td>
                        <td>: 
                            <input type="radio" name="kewarganegaraan" value="Indonesia(WNI)"> Indonesia(WNI) 
                            <input type="radio" name="kewarganegaraan" value="Asing(WNA)"> Asing(WNA)
                            <span style="margin-left:20px;">Nama Negara</span>
                            : <input style="width:300px;" type="text" name="nama_negara">
                        </td>
                    </tr>
                </table>
                <button class="mt-3 mb-3" type="submit" value="simpan">Next</button>
            </form>
        </div>
        <br>
</body>
</html>