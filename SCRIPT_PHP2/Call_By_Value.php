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
	function jumlahkan($x,$y) {
		$hasil = $x + $y;
		return $hasil;
	}
	echo "Hasilnya = " . jumlahkan(10,2);
	$bil = 0;
	$bil = jumlahkan(9,9);
	echo "<br>Hasilnya = " . $bil;

?>
</body>
</html>