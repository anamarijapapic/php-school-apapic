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

			function isLeap($year) {
				if ($year % 400 == 0 || $year % 4 == 0 && !($year % 100 == 0)) {
					return true;
				}
				return false;
			}

			$year = (int) ($_GET["year"]);

			echo isLeap($year) ? "Year {$year} is a leap year." : "Year {$year} is not a leap year.";
		?>
	
	</body>
</html>
