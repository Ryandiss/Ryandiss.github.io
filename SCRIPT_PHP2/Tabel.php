<!DOCTYPE html>
<html>
<head>
    <title>Form Buat Tabel</title>
</head>
<body>
<h2>Membuat Tabel Yuk...</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="baris">Jumlah Baris:</label>
    <input type="number" name="baris" id="baris" min="1" required><br><br>
    <label for="kolom">Jumlah Kolom:</label>
    <input type="number" name="kolom" id="kolom" min="1" required><br><br>
    <input type="submit" value="Buat Tabel">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $baris = $_POST['baris'];
    $kolom = $_POST['kolom'];

    echo "<h2>Tabel yang Dibuat:</h2>";
    echo "<table border='1'>";
    for ($i = 1; $i <= $baris; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $kolom; $j++) {
            echo "<td>Baris $i, Kolom $j</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>

</body>
</html>
