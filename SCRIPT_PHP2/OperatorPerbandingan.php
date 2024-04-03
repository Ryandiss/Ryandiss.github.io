<html>
	<head>
		<title>Operator Pembandingan</title>
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
			$bil1 = 100;
			$bil2 = 20;
			$teks1 = "PHP";
			$teks2 = "php";
			
			printf("%d == %d hasilnya %d<br/>",$bil1, $bil2, $bil1 == $bil2);
			printf("%d != %d hasilnya %d<br/>",$bil1, $bil2, $bil1 != $bil2);
			printf("%d >= %d hasilnya %d<br/>",$bil1, $bil2, $bil1 >= $bil2);
			printf("%s == %s hasilnya %d<br/>",$teks1, $teks2, $teks1 == $teks2);
			printf("%s != %s hasilnya %d<br/>",$teks1, $teks2, $teks1 != $teks2);
		?>
	</body>
</html>