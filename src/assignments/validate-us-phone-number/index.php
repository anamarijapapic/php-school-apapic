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
			var_dump(is_valid_phone_number( '' )); // return false
			var_dump(is_valid_phone_number( '(123) 456-7890' )); // return true
			var_dump(is_valid_phone_number( '(555) 555-5555' )); // return true
			var_dump(is_valid_phone_number( '(555 ) 555-5555' )); // return false
			var_dump(is_valid_phone_number( '(555) 555 - 5555' )); // return false			
		?>

	</body>
</html>
