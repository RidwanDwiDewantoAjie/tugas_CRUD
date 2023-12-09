<?php
session_start();
require "fungsi.php";
$username = $_SESSION['username'];
$sqlUser = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
$dataUser = mysqli_fetch_assoc($sqlUser);
?>

<div class="menusamping">
  <h1>SIA Administrator</h1>
  <a href="homeadmin.php">Home</a>
  <?php 
  if ($dataUser['status'] == 'admin') 
  { 
  ?>
  <a href="addUser.php">User</a>
  <?php 
  } 
  ?>
  <?php 
  if ($dataUser['status'] == 'mhs' ||  $dataUser['status'] == 'admin') 
  { 
  ?>
  <a href="updateMhs.php">Mahasiswa</a>
  <?php 
  } 
  ?>
  <?php 
  if ($dataUser['status'] == 'dsn' || $dataUser['status'] == 'dosen' ||  $dataUser['status'] == 'admin') 
  { 
  ?>
  <a href="updateDosen.php">Dosen</a>
  <?php 
  } 
  ?>
  <?php 
  if ($dataUser['status'] == 'admin') 
  { 
  ?>
  <a href="updateMatkul.php">Mata Kuliah</a>
  <?php 
  } 
  ?>
  <a href="logout.php">Logout</a>
</div>
