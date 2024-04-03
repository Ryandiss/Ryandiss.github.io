<html>
	<head>
		<title>Operator Aritmatika</title>
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
			$bil1 = 110;
			$bil2 = 25;
			
			$hasil = $bil1 + $bil2;
			echo "$bil1 + $bil2 = $hasil<br/>";
			
			$hasil = $bil1 - $bil2;
			echo "$bil1 - $bil2 = $hasil<br/>";
			
			$hasil = $bil1 * $bil2;
			echo "$bil1 * $bil2 = $hasil<br/>";
			
			$hasil = $bil1 / $bil2;
			echo "$bil1 / $bil2 = $hasil<br/>";
			
			$hasil = $bil1 % $bil2;
			echo "$bil1 % $bil2 = $hasil<br/>";
			
			$hasil = $bil1++;
			echo "$bil1++ = $hasil<br/>";
			
			$hasil = $bil2--;
			echo "$bil2-- = $hasil<br/>";
		?>
	</body>
</html>