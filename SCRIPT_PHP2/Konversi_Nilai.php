<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai Angka ke Huruf</title>
</head>
<body>

<h2>Form Konversi Nilai Angka ke Huruf</h2>

<form method="post">
    Masukkan nilai angka: <input type="text" name="nilai"><br><br>
    <input type="submit" name="submit" value="Konversi">
</form>

<?php
// Fungsi untuk mengkonversi nilai angka ke huruf
function konversi_nilai($nilai) {
    if ($nilai >= 85 && $nilai <= 100) {
        return 'A (Asik)';
    } elseif ($nilai >= 70 && $nilai <= 84) {
        return 'B (Yeay)';
    } elseif ($nilai >= 60 && $nilai < 70) {
        return 'C (Dikit Lagi Nih..)';
    } elseif ($nilai >= 50 && $nilai < 60) {
        return 'D (Ah Gak Asik)';
    } else {
        return 'E (Hilang Dari Lane)';
    }
}

// Memproses inputan jika tombol submit ditekan
if (isset($_POST['submit'])) {
    $nilai = $_POST['nilai'];
    // Validasi input
    if (is_numeric($nilai)) {
        $konversi = konversi_nilai($nilai);
        echo "Nilai angka : $nilai , anda meraih tingkat pencapaian: $konversi.";
    } else {
        echo "Masukkan nilai angka yang valid!";
    }
}
?>

</body>
</html>
