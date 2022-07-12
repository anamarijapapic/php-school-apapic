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
			define("SIZE", 10);
			$constant = 'constant';

			echo "<p class='text-center'>{$constant('SIZE')}x{$constant('SIZE')} Multiplication Table</p>";

			echo '<table class="table w-auto mx-auto text-center">';
			for ($i = 0; $i <= SIZE; $i++) {
				echo "<tr>";
				for ($j = 0; $j <= SIZE; $j++) {
					if ($i == 0 && $j == 0)
						echo "<td></td>";
					else if ($i == 0)
						# cols header number
						echo "<th>" . ($j) . "</th>";
					else if ($j == 0)
						# rows header number
						echo "<th>" . ($i) . "</th>";
					else
						echo "<td>" . ($i * $j) . "</td>";
				}
				echo "</tr>";
			}
			echo '</table>'
		?>

	</body>
</html>
