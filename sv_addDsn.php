
<?php
include "fungsi.php"; // masukan konekasi DB
// ambil variable
$npp1=$_POST['npp1'];
$npp2=$_POST['npp2'];
$npp3=$_POST['npp3'];
$nama=$_POST['namadosen'];
$npp = $npp1.".".$npp2.".".$npp3;
$homebase=$_POST['homebase'];

//Proses query simpan
$simpan=mysqli_query($koneksi,"insert into dosen (npp,namadosen,homebase) values ('$npp','$nama','$homebase')");
if($simpan){
    echo "Data berhasil disimpan: <a href='addDsn.php'> + Tambah data. </a>";
}else{
    echo "Gagal simpan data!";
}
?>