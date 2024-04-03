<html>
	<head>
		<title>Variabel</title>
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
			$nama = "Ryan";
			$usia = 21;
			$hobi = array("Menggambar", "Melukis", "Berenang");
				
			echo "$nama berusia $usia tahun <br/>";
			echo "Hobi : $hobi[0], $hobi[1], dan $hobi[2]";
		?>
	</body>
</html>