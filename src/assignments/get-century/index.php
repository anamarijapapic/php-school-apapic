<?php

require __DIR__ . '/functions.php';
require __DIR__ . '/../cardinal-to-ordinal-number/functions.php';

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
			echo "Year 1 belongs to the " . cardinal_to_ordinal(get_century(1)) . " century. </br>";
			echo "Year 67 belongs to the " . cardinal_to_ordinal(get_century(67)) . " century. </br>";
			echo "Year 150 belongs to the " . cardinal_to_ordinal(get_century(150)) . " century. </br>";
			echo "Year 1586 belongs to the " . cardinal_to_ordinal(get_century(1586)) . " century. </br>";
			echo "Year 1900 belongs to the " . cardinal_to_ordinal(get_century(1900)) . " century. </br>";
			echo "Year 1901 belongs to the " . cardinal_to_ordinal(get_century(1901)) . " century. </br>";
			echo "Year 1999 belongs to the " . cardinal_to_ordinal(get_century(1999)) . " century. </br>";
			echo "Year 2000 belongs to the " . cardinal_to_ordinal(get_century(2000)) . " century. </br>";
			echo "Year 2010 belongs to the " . cardinal_to_ordinal(get_century(2010)) . " century. </br>";
		?>

	</body>
</html>
