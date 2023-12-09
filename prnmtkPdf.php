<?php

use Mpdf\Mpdf;

require_once __DIR__ . '/vendor/autoload.php';
require "fungsi.php";

$mpdf = new Mpdf();

// Write some HTML code:

$mpdf->WriteHTML('
	<!DOCTYPE html>
	<html>
	<head>
	    <title>Sistem Informasi Akademik::Daftar Dosen</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/stylepdf.css">
	</head>
	<body>
	<h1>Mata Kuliah<br>
	<sub>Sistem Informasi - Fakultas Ilmu Komputer - Universitas Dian Nuswantoro<sub><br>
	<small>Tahun Akademik 2020-2021</small></h1>
	<table>	
	<tr>
		<th>No.</th>
		<th>id matkul</th>
		<th>Nama matkul</th>
		<th>SKS</th>
		<th>JNS</th>
		<th>SkS</th>
	</tr>
	');
$sql="select * from matkul";		
$qry = mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
$no=0;
while($row=mysqli_fetch_assoc($qry)){
	$no++;
	$mpdf->WriteHTML('
	<tr>
		<td>'.$no.'</td>
		<td>'.$row["idmatkul"].'</td>
		<td>'.$row["namamatkul"].'</td>
		<td>'.$row["sks"].'</td>
		<td>'.$row["jns"].'</td>	
		<td>'.$row["smt"].'</td>		
	</tr>
	');
}
$mpdf->WriteHTML('</table>');
$mpdf->WriteHTML('</body></html>');
// Output a PDF file directly to the browser
$mpdf->Output();




	
		
	
