<?php
session_start();
include '../function/functions.php';
$ID = $_GET['id'];
$sql = pg_query($dbconn,"SELECT * FROM buleleng");
$hasil = pg_fetch_array($sql);
if($_SESSION['username'] != $hasil['username']){
header("Location:login.php");
}
// kategori.php
if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = pg_query($conn, "DELETE FROM hotel22 where id='$ID'") or die(pg_error());
echo '<script>alert("Data Telah Dihapus!!");</script>';
header("Location:tampil.php");
}

?>