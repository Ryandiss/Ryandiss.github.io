<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan variabel $_POST telah terdefinisi sebelum mengaksesnya
    $nama = isset($_POST['nama']) ? ucwords($_POST['nama']) : '';
    $umur = isset($_POST['umur']) ? $_POST['umur'] : '';
    $gender = isset($_POST['gender']) ? ucwords($_POST['gender']) : '';

    $hobi = isset($_POST['hobi']) ? $_POST['hobi'] : [];
    $pendidikan = isset($_POST['pendidikan']) ? $_POST['pendidikan'] : '';
    $alamat = isset($_POST['alamat']) ? ucwords($_POST['alamat']) : '';

    // Proses untuk setiap nilai dalam array $hobi
    $hobi_ucwords = [];
    foreach ($hobi as $nilai_hobi) {
        $hobi_ucwords[] = ucwords($nilai_hobi);
    }

    // Output data dalam tabel dengan teks rata kiri
    echo "<h2>Biodata</h2>";
    echo "<table>";
    echo "<tr><th style='text-align: left;'>Nama</th><td>:</td><td style='text-align: left;'>" . $nama . "</td></tr>";
    echo "<tr><th style='text-align: left;'>Umur</th><td>:</td><td style='text-align: left;'>" . $umur . " Tahun</td></tr>";
    echo "<tr><th style='text-align: left;'>Gender</th><td>:</td><td style='text-align: left;'>" . $gender . "</td></tr>";
    echo "<tr><th style='text-align: left;'>Hobi</th><td>:</td><td style='text-align: left;'>" . implode(", ", $hobi_ucwords) . "</td></tr>";
    echo "<tr><th style='text-align: left;'>Pendidikan</th><td>:</td><td style='text-align: left;'>" . $pendidikan . "</td></tr>";
    echo "<tr><th style='text-align: left;'>Alamat</th><td>:</td><td style='text-align: left;'>" . $alamat . "</td></tr>";
    echo "</table>";
}
?>
