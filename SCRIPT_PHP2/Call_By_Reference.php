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
	function nilaiKuadrat(&$nilai) {
		$nilai = $nilai * $nilai;
	}
	$bil = 3;
	echo "Nilai = " . $bil;
	
	nilaiKuadrat($bil);
	echo "<br>Nilai = " . $bil;

?>
</body>
<html>