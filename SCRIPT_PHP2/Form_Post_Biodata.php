<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
    <style>
        table {
            width: 65%;
        }
        table, th, td {
           
            border-collapse: collapse;
        }
        th, td {
            
            text-align: left;
        }
        th {
            width: 50px;
        }
    </style>
</head>
<body>
    <h2>Form Biodata</h2>
    <form action="process_biodata.php" method="POST">
        <table>
            <tr>
                <th>Nama</th>
                <td>:</td>
                <td><input type="text" id="nama" name="nama"></td>
            </tr>
            <tr>
                <th>Umur</th>
                <td>:</td>
                <td><input type="number" id="umur" name="umur"></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>:</td>
                <td>
                    <input type="radio" id="pria" name="gender" value="pria">
                    <label for="pria">Pria</label>
                    <input type="radio" id="wanita" name="gender" value="wanita">
                    <label for="wanita">Wanita</label>
                </td>
            </tr>
            <tr>
                <th>Hobi</th>
                <td>:</td>
                <td>
                    <input type="checkbox" id="membaca" name="hobi[]" value="membaca">
                    <label for="membaca">Membaca</label><br>
                    <input type="checkbox" id="olahraga" name="hobi[]" value="olahraga">
                    <label for="olahraga">Olahraga</label><br>
                    <input type="checkbox" id="traveling" name="hobi[]" value="traveling">
        <label for="traveling">Traveling</label>
                </td>
            </tr>
            <tr>
                <th>Pendidikan</th>
                <td>:</td>
                <td>
                    <select id="pendidikan" name="pendidikan">
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA/SMK">SMA/SMK</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Sarjana">Sarjana</option>
                        <option value="Magister">Magister</option>
                        <option value="Doktor">Doktor</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td><textarea id="alamat" name="alamat"></textarea></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
