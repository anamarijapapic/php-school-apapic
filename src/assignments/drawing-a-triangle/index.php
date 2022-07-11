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
			function drawTriangle($size) {
				for ($i = 0; $i < $size; $i++) {
					for ($j = 0; $j <= $i; $j++)
						echo "#";
					echo "<br/>";
				}
			}

			$size = (int) ($_GET["size"]);

			if ($size > 4)
				drawTriangle($size);
			else 
				echo "The minimum triangle size is 5, please enter a greater size.";
		?>

	</body>
</html>
