<html>
	<head>
		<title>Variabel Object</title>
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
			$murid = new \stdClass;
			$murid->nama = "Ryan";
			$murid->usia = 21;
			$murid->hobi = array("Menggambar", "Melukis", "Berenang");
			
			echo "$murid->nama berusia $murid->usia tahun <br/>";
			echo "Hobi : ";
			echo $murid->hobi[0];
			echo ", ";
			echo $murid->hobi[1];
			echo " dan ";
			echo $murid->hobi[2];
		?>
	</body>
</html>