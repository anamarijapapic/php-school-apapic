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
			var_dump(is_valid_email( '' )); // return false
			var_dump(is_valid_email( 'ivo' )); // return false
			var_dump(is_valid_email( 'ivo@' )); // return false
			var_dump(is_valid_email( 'ivo@agilo' )); // return false
			var_dump(is_valid_email( 'ivo@agilo.' )); // return false
			var_dump(is_valid_email( 'ivo@agilo.co' )); // return true			
		?>

	</body>
</html>
