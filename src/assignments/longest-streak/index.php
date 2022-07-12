<?php

require __DIR__ . '/functions.php';

?>
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
			echo longest_streak( [] ) . "</br>";
			echo longest_streak( [ '2005-06-31' ] ) . "</br>";
			echo longest_streak( [
				'2005-06-31',
				'2010-10-18',
				'2010-10-19',
				'2010-10-20',
				'2022-01-26',
			] ) . "</br>";
			echo longest_streak( [
				'2005-06-31',
				'2010-10-18',
				'2010-10-19',
				'2010-10-20',
				'2022-01-26',
				'2022-01-27',
				'2022-01-28',
				'2022-01-29',
			] );
		?>

	</body>
</html>
