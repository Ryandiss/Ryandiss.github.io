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
	function salam($nama = " PHP") {
		echo "Halo".$nama;
		}
		
	salam(" Mahasiswa <br>");
	salam();
?>
</body>
</html>