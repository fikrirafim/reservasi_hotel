<?php
include '../koneksi.php';

$id_pesanan = $_POST['id_pesanan'];

mysqli_query($koneksi, "delete from pesanan where id_pesanan='$id_pesanan'");
header("location:pesanan.php");
?>