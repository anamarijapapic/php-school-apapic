<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class CelsiusToFahrenheitTest extends TestCase {
	public function test() : void {
		require_once __DIR__ . '/../src/assignments/celsius-to-fahrenheit/functions.php';

		$this->assertSame( '14.00', celsius_to_fahrenheit( -10 ) );
		$this->assertSame( '32.00', celsius_to_fahrenheit( 0 ) );
		$this->assertSame( '72.41', celsius_to_fahrenheit( 22.45 ) );
		$this->assertSame( '72.42', celsius_to_fahrenheit( 22.455 ) );
		$this->assertSame( '212.00', celsius_to_fahrenheit( 100 ) );
	}
}
