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
			var_dump(is_valid_hex_code( '' )); // return false
			var_dump(is_valid_hex_code( '#ffffff' )); // return true
			var_dump(is_valid_hex_code( '#000000' )); // return true
			var_dump(is_valid_hex_code( '#AbAbAb' )); // return true
			var_dump(is_valid_hex_code( '#123456' )); // return true
			var_dump(is_valid_hex_code( '#zzzzzz' )); // return false			
		?>

	</body>
</html>
