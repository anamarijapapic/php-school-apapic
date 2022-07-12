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
			echo "-10 &deg;C is " . celsius_to_fahrenheit( -10 ) . " &deg;F</br>";
			echo "0 &deg;C is " . celsius_to_fahrenheit( 0 ) . " &deg;F</br>";
			echo "22.45 &deg;C is " . celsius_to_fahrenheit( 22.45 ) . " &deg;F</br>";
			echo "22.455 &deg;C is " . celsius_to_fahrenheit( 22.455 ) . " &deg;F</br>";
			echo "100 &deg;C is " . celsius_to_fahrenheit( 100 ) . " &deg;F</br>";			
		?>	

	</body>
</html>
