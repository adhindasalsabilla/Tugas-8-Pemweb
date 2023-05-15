<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pengisian Data Orangtua</title>
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

            if(isset($_GET['nama_ayah'])){
                if($_GET['nama_ayah'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi Nama Ayah Anda!</h5>";
                }
            }
            if(isset($_GET['tahun_lahir_ayah'])){
                if($_GET['tahun_lahir_ayah'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi Tahun Lahir Ayah Anda!</h5>";
                }
            }
            if(isset($_GET['pendidikan_ayah'])){
                if($_GET['pendidikan_ayah'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi Pendidikan Ayah Anda!</h5>";
                }
            }
            if(isset($_GET['pekerjaan_ayah'])){
                if($_GET['pekerjaan_ayah'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi Pekerjaan Ayah Anda!</h5>";
                }
            }
            if(isset($_GET['penghasilan_ayah'])){
                if($_GET['penghasilan_ayah'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi Penghasilan Ayah Anda!</h5>";
                }
            }
            if(isset($_GET['khusus_ayah'])){
                if($_GET['khusus_ayah'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi Kebutuhan Khusus Ayah Anda!</h5>";
                }
            }
            if(isset($_GET['nama_ibu'])){
                if($_GET['nama_ibu'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi Nama Ibu Anda!</h5>";
                }
            }
            if(isset($_GET['tahun_lahir_ibu'])){
                if($_GET['tahun_lahir_ibu'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi Tahun Lahir Ibu Anda!</h5>";
                }
            }
            if(isset($_GET['pendidikan_ibu'])){
                if($_GET['pendidikan_ibu'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi Pendidikan Ibu Anda!</h5>";
                }
            }
            if(isset($_GET['pekerjaan_ibu'])){
                if($_GET['pekerjaan_ibu'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi Pekerjaan Ibu Anda!</h5>";
                }
            }
            if(isset($_GET['penghasilan_ibu'])){
                if($_GET['penghasilan_ibu'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi Penghasilan Ibu Anda!</h5>";
                }
            }
            if(isset($_GET['khusus_ibu'])){
                if($_GET['khusus_ibu'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Silahkan isi Kebutuhan Khusus Ibu Anda!</h5>";
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
            <form action="lihat_data_ortu.php" method="post">
                <div class="judulbghitam mt-2">
                    <p> DATA AYAH KANDUNG </p>
                </div>
                <table>
                    <tr>
                        <td width="40px">34. </td>
                        <td width="250px">Nama Ayah Kandung</td>
                        <td>: <input style="width:500px;" type="text" name="nama_ayah"></td>
                    </tr>
                    <tr>
                        <td>35. </td>
                        <td>Tahun Lahir</td>
                        <td>: <input style="width:100px;" type="text" name="tahun_lahir_ayah"></td>
                    </tr>
                    <tr>
                        <td>36. </td>
                        <td>Pendidikan</td>
                        <td>: 
                            <select name="pendidikan_ayah">
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="Putus SD">Putus SD</option>
                                <option value="SD Sederajat">SD Sederajat</option>
                                <option value="SMP Sederajat">SMP Sederajat</option>
                                <option value="SMA Sederajat">SMA Sederajat</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </td>    
                    </tr>
                    <tr>
                        <td>37. </td>
                        <td>Pekerjaan</td>
                        <td>: 
                            <select name="pekerjaan_ayah">
                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Petani">Petani</option>
                                <option value="Peternak">Peternak</option>
                                <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                <option value="Karyawan Swasta">Karyawan Swasta</option>
                                <option value="Pedagang Kecil">Pedagang Kecil</option>
                                <option value="Pedagang Besar">Pedagang Besar</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Wirausaha">Wirausaha</option>
                                <option value="Buruh">Buruh</option>
                                <option value="Pensiunan">Pensiunan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </td>    
                    </tr>
                    <tr>
                        <td>38. </td>
                        <td>Penghasilan Bulanan</td>
                        <td>: 
                            <input type="radio" name="penghasilan_ayah" value="< 500.000"> < 500.000 
                            <input type="radio" name="penghasilan_ayah" value="500.000 - 999.999"> 500.000 - 999.999
                            <input type="radio" name="penghasilan_ayah" value="1 Juta - 1.999.999"> 1 Juta - 1.999.999
                            <br> <span>:</span>
                            <input type="radio" name="penghasilan_ayah" value="2 Juta - 4.999.999"> 2 Juta - 4.999.999
                            <input type="radio" name="penghasilan_ayah" value="5 Juta - 20 Juta"> 5 Juta - 20 Juta 
                            <input type="radio" name="penghasilan_ayah" value="Lebih dari 20 Juta"> Lebih dari 20 Juta
                        </td>
                    </tr>
                    <tr>
                        <td>39. </td>
                        <td>Berkebutuhan Khusus</td>
                        <td>: 
                            <select name="khusus_ayah">
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
                </table>
                <div class="judulbghitam mt-2">
                    <p> DATA IBU KANDUNG </p>
                </div>
                <table>
                    <tr>
                        <td width="40px">40. </td>
                        <td width="250px">Nama Ibu Kandung</td>
                        <td>: <input style="width:500px;" type="text" name="nama_ibu"></td>
                    </tr>
                    <tr>
                        <td>41. </td>
                        <td>Tahun Lahir</td>
                        <td>: <input style="width:100px;" type="text" name="tahun_lahir_ibu"></td>
                    </tr>
                    <tr>
                        <td>42. </td>
                        <td>Pendidikan</td>
                        <td>: 
                            <select name="pendidikan_ibu">
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="Putus SD">Putus SD</option>
                                <option value="SD Sederajat">SD Sederajat</option>
                                <option value="SMP Sederajat">SMP Sederajat</option>
                                <option value="SMA Sederajat">SMA Sederajat</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </td>    
                    </tr>
                    <tr>
                        <td>43. </td>
                        <td>Pekerjaan</td>
                        <td>: 
                            <select name="pekerjaan_ibu">
                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Petani">Petani</option>
                                <option value="Peternak">Peternak</option>
                                <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                <option value="Karyawan Swasta">Karyawan Swasta</option>
                                <option value="Pedagang Kecil">Pedagang Kecil</option>
                                <option value="Pedagang Besar">Pedagang Besar</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Wirausaha">Wirausaha</option>
                                <option value="Buruh">Buruh</option>
                                <option value="Pensiunan">Pensiunan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </td>    
                    </tr>
                    <tr>
                        <td>44. </td>
                        <td>Penghasilan Bulanan</td>
                        <td>: 
                            <input type="radio" name="penghasilan_ibu" value="< 500.000"> < 500.000 
                            <input type="radio" name="penghasilan_ibu" value="500.000 - 999.999"> 500.000 - 999.999
                            <input type="radio" name="penghasilan_ibu" value="1 Juta - 1.999.999"> 1 Juta - 1.999.999
                            <br> <span>:</span>
                            <input type="radio" name="penghasilan_ibu" value="2 Juta - 4.999.999"> 2 Juta - 4.999.999
                            <input type="radio" name="penghasilan_ibu" value="5 Juta - 20 Juta"> 5 Juta - 20 Juta 
                            <input type="radio" name="penghasilan_ibu" value="Lebih dari 20 Juta"> Lebih dari 20 Juta
                        </td>
                    </tr>
                    <tr>
                        <td>45. </td>
                        <td>Berkebutuhan Khusus</td>
                        <td>: 
                            <select name="khusus_ibu">
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
                </table>
                <button class="mt-3 mb-3" type="submit" value="simpan">Next</button>
            </form>
        </div>
        <br>
</body>
</html>