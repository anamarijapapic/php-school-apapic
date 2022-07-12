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
			function drawChessBoard($size) {
				echo '<table class="c-chess-board">';
				for ($i = 0; $i < $size; $i++) {
					echo '<tr>';
					for ($j = 0; $j < $size; $j++) {
						if (!($i % 2) && !($j % 2) || ($i % 2) && ($j % 2))
							echo '<td class="c-chess-board__cell c-chess-board__cell--light"></td>';
						else
							echo '<td class="c-chess-board__cell c-chess-board__cell--dark"></td>';
					}
					echo '</tr>';
				}
				echo '</table>';
			}

			$min = 2;
			$max = 20;

			if (!isset($_GET['size'])) {
				echo "Please specify chess board size.";
			}
			else if (filter_input(INPUT_GET, 'size', FILTER_VALIDATE_INT) === false) {
				echo "Chess board size needs to be a number.";
			}
			else if (filter_input(INPUT_GET, 'size', FILTER_VALIDATE_INT, ["options" => ["min_range" => $min, "max_range" => $max]]) === false) {
				echo "Chess board size needs to be between 2 and 20.";
			}
			else {
				$size = $_GET['size'];
				drawChessBoard($size);
			} 
		?>

	</body>
</html>
