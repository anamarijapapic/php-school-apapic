<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PHP School</title>
		<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="/assets/css/main.css" rel="stylesheet">
	</head>
	<body>

		<?php 
			$number = (int) ($_GET["number"]);

			$digit1 = (int) ($number / 10000);
			$digit2 = (int) (($number % 10000) / 1000);
			$digit3 = (int) (($number % 1000) / 100);
			$digit4 = (int) (($number % 100) / 10);
			$digit5 = (int) ($number % 10);

			echo $number . " = " . $digit1 . " " . $digit2 . " " . $digit3 . " " . $digit4 . " " . $digit5;
		?>

	</body>
</html>
