<?php
// Konfigurasi koneksi ke database
$servername = "localhost"; // Ganti dengan nama server database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "e_stnk"; // Ganti dengan nama database Anda
$table_name = "pendaftaran"; // Ganti dengan nama tabel Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Memeriksa apakah formulir telah diajukan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $no_polisi = $_POST["no_polisi"];
    $jenis_kendaraan = $_POST["jenis_kendaraan"];
    $merk = $_POST["merk"];
    $tahun_pembuatan = $_POST["tahun_pembuatan"];
    $jumlah_roda = $_POST["jumlah_roda"];
    $warna = $_POST["warna"];
    $nomor_mesin = $_POST["nomor_mesin"];
    $nomor_rangka = $_POST["nomor_rangka"];
    $bahan_bakar = $_POST["bahan_bakar"];
    $no_polisi_lama = $_POST["no_polisi_lama"];
    $nomor_registrasi = $_POST["nomor_registrasi"];
    $diberikan_kepada = $_POST["diberikan_kepada"];
    $berlaku_dari = $_POST["berlaku_dari"];
    $sampai = $_POST["sampai"];

    // Query untuk memasukkan data ke dalam tabel
    $sql = "INSERT INTO $table_name (no_polisi, jenis_kendaraan, merk, tahun_pembuatan, jumlah_roda, warna, nomor_mesin, nomor_rangka, bahan_bakar, no_polisi_lama, nomor_registrasi, diberikan_kepada, berlaku_dari, sampai) 
            VALUES ('$no_polisi', '$jenis_kendaraan', '$merk', '$tahun_pembuatan', '$jumlah_roda', '$warna', '$nomor_mesin', '$nomor_rangka', '$bahan_bakar', '$no_polisi_lama', '$nomor_registrasi', '$diberikan_kepada','$berlaku_dari', '$sampai')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan. Anjaiiiii";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Menutup koneksi database
    $conn->close();
}
?>
