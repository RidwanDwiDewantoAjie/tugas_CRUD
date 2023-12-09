
<?php
//memanggil file pustaka fungsi
require "fungsi.php";

//memindahkan data kiriman dari form ke var biasa
$npp = $_POST["npp1"] . "." . $_POST["npp2"] . "." . $_POST["npp3"];
$nama=$_POST["namadosen"];
$homebase=$_POST["homebase"];

$sql="INSERT INTO dosen VALUES('$npp','$nama','$homebase')";
mysqli_query($koneksi,$sql);
header("location:updateDosen.php");
?>