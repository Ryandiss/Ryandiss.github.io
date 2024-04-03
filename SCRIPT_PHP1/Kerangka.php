<!DOCTYPE html>
<html>
<head>
    <title>Ryan_S6A_202143500031</title>
    <style>
        body {
            font-family: Verdana, sans-serif;
			font-size: 13px;
        }
					
        .centered-text {
			font-family: Verdana, sans-serif;
            text-align: center;
			font-size: 20px;
            background-color: #ADD8E6	;
            color: black;
            padding: 10px;
        }

        /* Warna teks pada link di dalam daftar menu */
        #menu-container {
            max-height: 465px; /* Batas ketinggian maksimum */
            overflow-y: auto; /* Aktifkan scroll vertikal jika konten melebihi batas ketinggian */
        }

        #menu-container a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
            transition: background-color 0.3s;
        }

        #menu-container a:hover {
            background-color: #ADD8E6;
            color: #333;
        }

        /* Warna latar belakang dan teks untuk footer */
        footer {
            text-align: center;
            background-color: blue;
            color: blue;
            padding: 10px;
			font-size: 15px;
        }
		img {
		max-width: 20%;
    height: auto;
    display: block;
    margin-left: auto;
    margin-right: auto;
		}
    </style>
</head>
<body>
    <table width="100%" border="1">
        <tr>
            <td colspan="2" class="centered-text">Ryandi Syahputra - 202143500031</td>
        </tr>
        <tr>
             <td width="20%">
                <div id="menu-container">
                    <h2>List Menu :</h2>
                    <?php include 'Menu.php'; ?>
                </div>
            </td>
            <td>
				<img src="cropped-logo_unindra_3.png" alt="">
                <iframe name="content" style="width: 100%; height: 400px; border: none;"></iframe>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="centered-text" style="font-size: 15px;">Copyright - Ryandi Syahputra</td>

        </tr>
    </table>
</body>
</html>
