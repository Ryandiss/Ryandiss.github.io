<html>
	<head>
		<title>Operator String</title>
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
			$teks1 = "Aku Sedang Belajar";
			$teks2 = "Pemrograman WEB 2";
			$teks3 = "Menggunakan PHP";
			
			$hasil = $teks1 . $teks2 . $teks3;
			printf("hasil : %s<br/>",$hasil);
			$hasil = $teks1 . " " . $teks2 . " " . $teks3;
			echo "hasil : " . $hasil;
		?>
	</body>
</html>