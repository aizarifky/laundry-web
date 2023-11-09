<?php
// menghubungkan koneksi
include '../koneksi.php';
// menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];
$jk = $_POST['jk'];
$nilai1 = $_POST['nilai1'];
$nilai2 = $_POST['nilai2'];
$nilai3 = $_POST['nilai3'];
$nilai4 = $_POST['nilai4'];
$nilai5 = $_POST['nilai5'];

// update data
mysqli_query($koneksi, "update kuis set nama='$nama',alamat='$alamat',hp='$hp',jk='$jk',nilai1='$nilai1',nilai2='$nilai2',nilai3='$nilai3',nilai4='$nilai4',nilai5='$nilai5' where id='$id'");
// mengalihkan halaman kembali ke halaman pelanggan
header("location:kuis.php");