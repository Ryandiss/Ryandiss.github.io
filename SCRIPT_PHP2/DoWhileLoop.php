<html>
	<head>
		<title>Do - While Loop</title>
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
			$i = 0;
			
			do {
				echo $i;
				$i++;
			}
			while ($i < 10);
		?>
	</body>
</html>