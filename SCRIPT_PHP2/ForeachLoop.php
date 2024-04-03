<html>
	<head>
		<title>Foreach Loop</title>
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
			$list_hari = array (
				"Senin",
				"Selasa",
				"Rabu",
				"Kamis",
				"Jumat",
				"Sabtu",
				"Minggu"
			);
			foreach ($list_hari as $hari) {
				echo $hari . ", ";
			}
		?>
	</body>
</html>