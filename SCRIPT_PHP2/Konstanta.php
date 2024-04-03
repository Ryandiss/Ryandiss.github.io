<html>
	<head>
		<title>Konstanta</title>
		<style>
			body {
				display: flex;
				justify-content: center;
				align-items: center;
				height: 100vh;
				margin: 0;
				font-size: 20px;
			}
		</style>
	</head>
	<body>
		<?php
			define('JUDUL', 'Hitung Luas Lingkaran');
			define("PHI", 3.14);
			
			echo JUDUL;
			
			$r = 10;
			echo "<br>Jari-jari : $r<br/>";
			
			$luas = PHI * $r * $r;
			echo "Luas Lingkaran = $luas";
		?>
	</body>
</html>