<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Login</title>
	<!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="gambarlogin.jpeg">
	<?php 
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                    echo "<script>alert('Cek Kembali Username atau Password Anda.')</script>";
                }else if($_GET['pesan'] == "logout"){
                    echo "<script>alert('Anda melakukan logout.')</script>";
                }else if($_GET['pesan'] == "belum_login"){
                    echo "<script>alert('Silahkan login untuk mengakses halaman ini.')</script>";
                }
            }
        ?>
        <br>
        <br>
        <!-- Main Content -->
        <div class="container">
            <div class="row position-absolute top-50 start-50 translate-middle" style="width: 500px; background-color:#F0F600; padding: 30px; border-radius: 15px; box-shadow: 0px 0px 7px 0px #000;">
                <form method="post" action="lihat_login.php">
                    <h1 style="text-align: center; font-weight: bold;">Welcome</h1>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                    <div class="form-group mt-3">
                        <label>Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="******" name="password">
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="lihatpassword()"> Show Password </input>
                    </div>
                    <br>
                    <input style="background-color: #00E5E8; width: 415px;" type="submit" value="LOGIN" class="rounded"></input>
                </form>
            </div>
        </div>
        
        <!-- Bootstrap core JavaScript dibawah sendiri untuk mempercepat proses load web -->
        <script>
            function lihatpassword(){
                var pass = document.getElementById("exampleInputPassword1");
                if (pass.type=="password") {
                    pass.type="email"
                } 
                else {
                    pass.type="password"
                }
            }
        </script>
</body>
</html>