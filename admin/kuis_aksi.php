<?php
// menghubungkan dengan koneksi
include '../koneksi.php';
// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];
$jk = $_POST['jk'];
$nilai1 = $_POST['nilai1'];
$nilai2 = $_POST['nilai2'];
$nilai3 = $_POST['nilai3'];
$nilai4 = $_POST['nilai4'];
$nilai5 = $_POST['nilai5'];
// input data ke tabel pelanggan
mysqli_query($koneksi, "insert into kuis
values('','$nama','$alamat','$hp','$jk', '$nilai1','$nilai2','$nilai3','$nilai4','$nilai5')");
header("location:kuis.php");