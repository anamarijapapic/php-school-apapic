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
			$file_size_in_bytes = (float) ($_GET["file_size_in_bytes"]);

			$file_size_in_kilobytes = number_format($file_size_in_bytes / pow(10, 3), 2, ".", "");
			$file_size_in_megabytes = number_format($file_size_in_bytes / pow(10, 6), 2, ".", "");
			$file_size_in_gigabytes = number_format($file_size_in_bytes / pow(10, 9), 2, ".", "");

			$file_size_in_kibibytes = number_format($file_size_in_bytes / pow(2, 10), 2, ".", "");
			$file_size_in_mebibytes = number_format($file_size_in_bytes / pow(2, 20), 2, ".", "");
			$file_size_in_gibibytes = number_format($file_size_in_bytes / pow(2, 30), 2, ".", "");
		?>

		<table class="table table-striped" style="width: 500px;">
			<tr>
				<td colspan="2">Bytes: <?php echo $file_size_in_bytes;?></td>
			</tr>
			<tr>
				<td>kilobytes (KB): <?php echo $file_size_in_kilobytes;?></td>
				<td>kibibytes (KiB): <?php echo $file_size_in_kibibytes;?></td>
			</tr>
			<tr>
				<td>megabytes (MB): <?php echo $file_size_in_megabytes;?></td>
				<td>mebibytes (MiB): <?php echo $file_size_in_mebibytes;?></td>
			</tr>
			<tr>
				<td>gigabytes (GB): <?php echo $file_size_in_gigabytes;?></td>
				<td>gibibytes (GiB): <?php echo $file_size_in_gibibytes;?></td>
			</tr>
		</table>

	</body>
</html>
