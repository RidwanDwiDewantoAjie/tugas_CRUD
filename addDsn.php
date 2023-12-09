<!DOCTYPE html>
<html>
	<head>
		<title>Sistem Informasi Akademik::Tambah Data Dosen</title>
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
			<h3>TAMBAH DATA DOSEN</h3>
			<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
			</div>	
			<form action="./sv_addDsn.php" method="POST" class="mt-4">
      <div class="form-row">
        <div class="form-group col-4">
          <label for="npp1">NIP</label>
          <input type="text" class="form-control" id="npp1" name="npp1" value="0686.11" placeholder="0686.11" readonly>
        </div>
        <div class="form-group col-4">
          <label for="npp2">Tahun</label>
          <select class="form-control" id="npp2" name="npp2">
            <option value="1980">1980</option>
            <option value="1981">1981</option>
            <option value="1982">1982</option>
            <option value="1983">1983</option>
            <option value="1984">1984</option>
            <option value="1985">1985</option>
            <option value="1986">1986</option>
            <option value="1987">1987</option>
            <option value="1988">1988</option>
            <option value="1990">1990</option>
            <option value="1991">1991</option>
            <option value="1992">1992</option>
            <option value="1993">1993</option>
            <option value="1994">1994</option>
            <option value="1995">1995</option>
          </select>
        </div>
        <div class="form-group col-4">
          <label for="npp3">Home</label>
          <input type="text" class="form-control" id="npp3" name="npp3">
        </div>
      </div>


      <div class="form-group">
        <label for="namadosen">Nama Dosen</label>
        <input type="text" class="form-control" id="namadosen" name="namadosen">
      </div>

      <div class="form-group">
        <label for="homebase">Homebase</label>
        <input type="text" class="form-control" id="homebase" name="homebase">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>

</html>