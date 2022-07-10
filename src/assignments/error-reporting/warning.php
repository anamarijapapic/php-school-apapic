<?php

/**
 * We're printing a variable that hasn't been declared. This should throw a warning.
 */

$prefix = 'Mr.';
// $name = 'John';
$surname = 'Doe';

echo $prefix . ' ' . $name . ' ' . $surname;
