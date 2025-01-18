<table class="table table-hover text-nowrap">
    <thead>
        <tr>
            <th>No Polisi</th>
            <th>Jenis Kendaraan</th>
            <th>Merk</th>
            <th>Tahun Pembuatan</th>
            <th>Jumlah Roda</th>
            <th>Warna</th>
            <th>Nomor Mesin</th>
            <th>Nomor Rangka</th>
            <th>Bahan Bakar</th>
            <th>No Polisi Lama</th>
            <th>Nomor Registrasi</th>
            <th>Diberikan Kepada</th>
            <th>Berlaku Dari</th>
            <th>Sampai</th>
        </tr>
    </thead>
    <tbody>
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

        $s_keyword = "";
        if (isset($_POST['keyword'])){
            $s_keyword = $_POST['keyword'];
        }

        $search_keyword = '%'. $s_keyword . '%';
        // Query untuk mengambil data dari tabel
        $query = "SELECT * FROM $table_name WHERE no_polisi LIKE ? OR jenis_kendaraan LIKE ? OR merk LIKE ? OR tahun_pembuatan LIKE ? OR jumlah_roda LIKE ? OR warna LIKE ? OR nomor_mesin LIKE ? OR nomor_rangka LIKE ? OR bahan_bakar LIKE ? OR no_polisi_lama LIKE ? OR nomor_registrasi LIKE ? OR diberikan_kepada LIKE ? OR berlaku_dari LIKE ? OR sampai LIKE ?";
        $cari = $conn->prepare($query);
        $cari->bind_param('ssssssssssssss', $search_keyword, $search_keyword, $search_keyword, $search_keyword, $search_keyword, $search_keyword, $search_keyword, $search_keyword, $search_keyword, $search_keyword, $search_keyword, $search_keyword, $search_keyword, $search_keyword);
        $cari->execute();
        $result = $cari->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["no_polisi"] . "</td>";
                echo "<td>" . $row["jenis_kendaraan"] . "</td>";
                echo "<td>" . $row["merk"] . "</td>";
                echo "<td>" . $row["tahun_pembuatan"] . "</td>";
                echo "<td>" . $row["jumlah_roda"] . "</td>";
                echo "<td>" . $row["warna"] . "</td>";
                echo "<td>" . $row["nomor_mesin"] . "</td>";
                echo "<td>" . $row["nomor_rangka"] . "</td>";
                echo "<td>" . $row["bahan_bakar"] . "</td>";
                echo "<td>" . $row["no_polisi_lama"] . "</td>";
                echo "<td>" . $row["nomor_registrasi"] . "</td>";
                echo "<td>" . $row["diberikan_kepada"] . "</td>";
                echo "<td>" . $row["berlaku_dari"] . "</td>";
                echo "<td>" . $row["sampai"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='14'>Tidak ada data dalam tabel.</td></tr>";
        }

        // Menutup koneksi database
        // $conn->close();
        ?>
    </tbody>
</table>