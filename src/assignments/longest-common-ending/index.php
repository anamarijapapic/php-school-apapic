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

		<table class="table table-striped" style="width: 400px;">
			<tr>
				<th>Words</th>
				<th>Longest Common Ending</th>
			</tr>
			<tr>
				<td>cat, dog</td>
				<td><?php echo longest_common_ending( 'cat', 'dog' ); ?></td>
			</tr>
			<tr>
				<td>house, house</td>
				<td><?php echo longest_common_ending( 'house', 'house' ); ?></td>
			</tr>
			<tr>
				<td>sitting, standing</td>
				<td><?php echo longest_common_ending( 'sitting', 'standing' ); ?></td>
			</tr>
		</table>

	</body>
</html>
