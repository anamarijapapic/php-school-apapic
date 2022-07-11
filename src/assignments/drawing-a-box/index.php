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
			function drawBox($size = 3) {
				echo "<pre>";
				for ($i = 0; $i < $size; $i++) {
					for ($j = 0; $j < $size; $j++) {
						if ($i == 0 || $i == $size - 1 || $j == 0 || $j == $size - 1)
							echo "#";
						else
							echo "&nbsp;";
					}
					echo "<br/>";
				}
				echo "</pre>";
			}

			if (isset($_GET["size"])) {
				$size = (int) ($_GET["size"]);
				drawBox($size);
			}
			else
				drawBox();
			
		?>

	</body>
</html>
