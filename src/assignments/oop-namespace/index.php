<?php

require __DIR__ . '/classes.php';

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
        echo "Weight unit: ";
        Zoo\Animal::get_weight_unit();
    ?>

</body>

</html>