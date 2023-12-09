
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Home Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styleku.css">
	<script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
	<script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
<?php
//memanggil file berisi fungsi2 yang sering dipakai
require "fungsi.php";
require "head.php";

//cek logout
if (!isset($_SESSION['username'])){
	header("location:index.php");
}

$sqlUser = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
$dataUser = mysqli_fetch_assoc($sqlUser);
?>
<div class="utama">
	<br><br>
	<h1 class="text-center" style="color:black;">Selamat Datang di Halaman 
	<?php if($dataUser['status'] == 'admin') { ?> Administrator <?php } ?> 
	<?php if($dataUser['status'] == 'dsn' || $dataUser['status'] == 'dosen') { ?> Dosen <?php } ?>
	<?php if($dataUser['status'] == 'mhs') { ?> Mahasiswa <?php } ?>
	<?php echo strtoupper($_SESSION['username'])?></h1>
</div>
</body>
</html>	
