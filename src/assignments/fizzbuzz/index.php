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
			function fizzBuzz() {
				for ($i = 1; $i <= 100; $i++) {
					if ($i % 3 == 0 && $i % 5 == 0)
						echo "FizzBuzz<br/>";
					else if ($i % 3 == 0)
						echo "Fizz<br/>";
					else if ($i % 5 == 0)
						echo "Buzz<br/>";
					else
						echo $i . "<br/>";
				}
			}

			fizzBuzz();
		?>

	</body>
</html>
