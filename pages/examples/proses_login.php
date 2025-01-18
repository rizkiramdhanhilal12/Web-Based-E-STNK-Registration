<?php
// Koneksi ke database (gantilah dengan informasi database Anda)
$host = "localhost";
$username = "root";
$password = "";
$database = "e_stnk";

$conn = mysqli_connect($host, $username, $password, $database);

// Periksa apakah koneksi berhasil
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Nama tabel yang digunakan untuk autentikasi
$tablename = "admin";

// Ambil data yang dikirim dari formulir login
$pengguna = $_POST['pengguna'];
$sandi = $_POST['sandi'];

// Hindari serangan SQL Injection dengan menggunakan prepared statement
$query = "SELECT * FROM $tablename WHERE pengguna=? AND sandi=?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "ss", $pengguna, $sandi);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) == 1) {
    // Autentikasi berhasil
    session_start();
    $_SESSION['pengguna'] = $pengguna; // Simpan username dalam sesi jika diperlukan
    echo "Login berhasil!";
    // Redirect ke halaman beranda atau halaman lain yang sesuai
    header("Location: ../../index.html");
    exit();
} else {
    // Autentikasi gagal
    echo "Login gagal. Silakan cek kembali username dan password Anda.";
}

// Tutup prepared statement dan koneksi database
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>

