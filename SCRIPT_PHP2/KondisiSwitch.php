<html>
	<head>
		<title>Switch - Case</title>
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
			$bulan = 8;
			Switch ($bulan) {
				case 1 : echo "Januari"; break;
				case 2 : echo "Februari"; break;
				case 3 : echo "Maret"; break;
				case 4 : echo "April"; break;
				case 5 : echo "Mei"; break;
				case 6 : echo "Juni"; break;
				case 7 : echo "Juli"; break;
				case 8 : echo "Agustus"; break;
				case 9 : echo "September"; break;
				case 10 : echo "Oktober"; break;
				case 11 : echo "November"; break;
				case 12 : echo "Desember"; break;
			}
		?>
	</body>
</html>