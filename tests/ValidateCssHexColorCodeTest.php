<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class ValidateCssHexColorCodeTest extends TestCase {
	public function test() : void {
		require_once __DIR__ . '/../src/assignments/validate-css-hex-color-code/functions.php';

		$this->assertEquals( false, is_valid_hex_code( '' ) );
		$this->assertEquals( true, is_valid_hex_code( '#ffffff' ) );
		$this->assertEquals( true, is_valid_hex_code( '#000000' ) );
		$this->assertEquals( true, is_valid_hex_code( '#AbAbAb' ) );
		$this->assertEquals( true, is_valid_hex_code( '#123456' ) );
		$this->assertEquals( false, is_valid_hex_code( '#zzzzzz' ) );
	}
}
