<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class ValidateEmailTest extends TestCase {
	public function test() : void {
		require_once __DIR__ . '/../src/assignments/validate-email/functions.php';

		$this->assertEquals( false, is_valid_email( '' ) );
		$this->assertEquals( false, is_valid_email( 'ivo' ) );
		$this->assertEquals( false, is_valid_email( 'ivo@' ) );
		$this->assertEquals( false, is_valid_email( 'ivo@agilo' ) );
		$this->assertEquals( false, is_valid_email( 'ivo@agilo.' ) );
		$this->assertEquals( true, is_valid_email( 'ivo@agilo.co' ) );
	}
}
