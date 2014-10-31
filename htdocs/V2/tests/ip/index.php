<html>
	<head>
	<link rel="icon" type="image/png" href="ip.png" />
	<title>IP Address</title>
	</head>
	<body>
		<h1 style="text-align:center;margin-top:10%;">
			<?php $ip = $_SERVER["REMOTE_ADDR"];
			if ($ip == "82.0.182.70") {
				echo "<p style='color:green;'>VPN enabled</p>\n";
			}
			else {
				echo "<p style='color:red;'>VPN not enabled</p>\n";
			}
			echo $ip;
			?>
		</h1>
	</body>
</html>