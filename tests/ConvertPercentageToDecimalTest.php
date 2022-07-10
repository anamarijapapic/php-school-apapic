<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class ConvertPercentageToDecimalTest extends TestCase {
	public function test() : void {
		require_once __DIR__ . '/../src/assignments/convert-percentage-to-decimal/functions.php';

		$this->assertEquals( 0, convert_to_decimal( '0%' ) );
		$this->assertEquals( 0.01, convert_to_decimal( '1%' ) );
		$this->assertEquals( 0.02, convert_to_decimal( '2%' ) );
		$this->assertEquals( 0.25, convert_to_decimal( '25%' ) );
		$this->assertEquals( 1, convert_to_decimal( '100%' ) );
	}
}
