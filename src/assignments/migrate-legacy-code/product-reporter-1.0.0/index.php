<?php

require __DIR__ . '/autoload.php';

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
		$product_reporter = new \ProductReporter\ProductReporter( __DIR__ . '/../products.csv.zip' );

		try {
			$product_reporter->parse();
		} catch ( \Throwable $t ) {
			//throw $th;
		}
		?>

		<table class="table table-hover">
			<tr>
				<th>Product</th>
				<th>Price</th>
				<th>Url</th>
				<th>Models</th>
			</tr>
			<?php
			foreach ( $product_reporter->get_products() as $product ) {
				?>
				<tr>
					<td><?php echo $product->get_name(); ?></td>
					<td>&euro;<?php echo $product->get_price(); ?></td>
					<td><?php echo $product->get_url(); ?></td>
					<td><?php echo $product->get_models(); ?></td>
				</tr>
				<?php
			}
			?>
		</table>

	</body>
</html>
