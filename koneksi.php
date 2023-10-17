<?php
$servername = "localhost"; // Lokasi server database (biasanya "localhost" jika menggunakan XAMPP)
$username = "root"; // Nama pengguna database
$password = ""; // Kata sandi database (kosongkan jika Anda tidak menentukan kata sandi saat menginstal XAMPP)
$database = "loginpageform"; // Nama database yang telah Anda buat

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
