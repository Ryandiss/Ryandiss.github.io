<html>
	<head>
		<title>If - Else</title>
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
			$nilai = 60;
			if ($nilai >= 50)
				echo "Anda Lulus";
			else
				echo "Anda tidak lulus";
		?>
	</body>
</html>