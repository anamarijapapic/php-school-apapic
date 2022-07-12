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
			echo "0% = " . convert_to_decimal("0%") . "</br>";
			echo "1% = " . convert_to_decimal("1%") . "</br>";
			echo "1% = " . convert_to_decimal("2%") . "</br>";
			echo "25% = " . convert_to_decimal("25%") . "</br>";
			echo "100% = " . convert_to_decimal("100%") . "</br>";
		?>

	</body>
</html>
