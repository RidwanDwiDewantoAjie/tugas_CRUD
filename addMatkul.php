<!DOCTYPE html>
<html>
	<head>
		<title>Sistem Informasi Akademik::Tambah Matkul</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/styleku.css">
		<script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
		<script src="bootstrap4/js/bootstrap.js"></script>
	</head>
	<body>
		<?php
			require "head.html";
		?>
		<div class="utama">		
			<br><br><br>		
			<h3>TAMBAH MATKUL</h3>
			<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
			</div>	
			<form method="post" action="sv_addMatkul.php" enctype="multipart/form-data">
				<div class="form-group">
					<label for="nim">ID Mata Kuliah:</label>
					<input class="form-control" type="text" name="idmatkul" id="idmatkul" required>
				</div>
				<div class="form-group">
					<label for="nama">Nama Mata Kuliah:</label>
					<input class="form-control" type="text" name="namamatkul" id="namamatkul">
				</div>
				<div class="form-group">
					<label for="email">SKS:</label>
					<input class="form-control" type="text" name="sks" id="sks">
				</div>
                <div class="form-group">
					<label for="email">JNS:</label>
					<input class="form-control" type="text" name="jns" id="jns">
				</div>
                <div class="form-group">
					<label for="email">Semester:</label>
					<input class="form-control" type="text" name="smt" id="smt">
				</div>
				<div>		
					<button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
				</div>
			</form>
		</div>
	</body>
</html>