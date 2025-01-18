<?php
// Konfigurasi koneksi ke database
$servername = "localhost"; // Ganti dengan nama server database Anda
$username = "username"; // Ganti dengan username database Anda
$password = "password"; // Ganti dengan password database Anda
$dbname = "nama_database"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Query untuk mengambil data dari tabel
$sql = "SELECT * FROM nama_tabel"; // Ganti 'nama_tabel' dengan nama tabel Anda
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data dari setiap baris hasil query
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"] . "<br>";
        echo "User: " . $row["User"] . "<br>";
        echo "Date: " . $row["Date"] . "<br>";
        echo "Status: " . $row["Status"] . "<br>";
        echo "Reason: " . $row["Reason"] . "<br>";
        echo "<hr>";
    }
} else {
    echo "Tidak ada data dalam tabel.";
}

// Menutup koneksi database
$conn->close();
?>
