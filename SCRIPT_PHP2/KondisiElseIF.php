<html>
	<head>
		<title>If - Elseif - Else</title>
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
			$hari = 5;
			if ($hari == 1) echo "Senin";
			elseif ($hari == 2) echo "Selasa";
			elseif ($hari == 3) echo "Rabu";
			elseif ($hari == 4) echo "Kamis";
			elseif ($hari == 5) echo "Jumat";
			elseif ($hari == 6) echo "Sabtu";
			elseif ($hari == 7) echo "Minggu";
			else echo "Salah kode hari";
		?>
	</body>
</html>