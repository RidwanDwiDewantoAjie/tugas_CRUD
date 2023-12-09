<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Akademik::Tambah Data USER</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styleku.css">
	<script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
	<script src="bootstrap4/js/bootstrap.js"></script>

</head>
<body>
	<?php
		require "head.php";
	?>
	<div class="utama">		
		<br><br><br>		
		<h3>TAMBAH USER</h3>
		<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		</div>	
		<form method="post" action="sv_addUser.php" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nim">USERNAME:</label>
				<input class="form-control" type="text" name="username" id="username" required>
			</div>
			<div class="form-group">
				<label for="nama">PASSWORD:</label>
				<input class="form-control" type="password" name="password" id="password">
			</div>
			<div class="form-group">
				<label for="email">STATUS:</label>
				<select class="form-control" name="status" id="status">
					<option value="dosen">Dosen</option>
					<option value="mhs">Mahasiswa</option>
				</select>
				<!-- <input class="form-control" type="text" name="status" id="status"> -->
			</div>
			<div>		
				<button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
			</div>
		</form>
	</div>

</body>
</html>