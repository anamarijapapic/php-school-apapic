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
			var_dump(is_christmas('2005-06-31'));
			var_dump(is_christmas('2005-12-25'));
			var_dump(is_christmas('2022-12-25'));
		?>

	</body>
</html>
