<?php
// mengaktifkan session php
session_start();
// menghubungkan dengan koneksi
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menangkap data yang dikirim dari form
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    // Fungsi md5 di atas untuk mengenkripsi ke dalam bentuk md5
    // Menyeleksi data admin dengan username dan password yang sesuai
    $data = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
    // Menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
    // Cek jika username dan password yang diinput ditemukan
    if ($cek > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";

        // Tambahkan pesan berhasil login
        $_SESSION['pesan'] = "Selamat datang Admin";

        header("location:admin/index.php");
    } else {
        header("location:index.php?pesan=gagal");
    }
}
