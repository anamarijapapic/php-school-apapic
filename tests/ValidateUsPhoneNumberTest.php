<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class ValidateUsPhoneNumberTest extends TestCase {
	public function test() : void {
		require_once __DIR__ . '/../src/assignments/validate-us-phone-number/functions.php';

		$this->assertEquals( false, is_valid_phone_number( '' ) );
		$this->assertEquals( true, is_valid_phone_number( '(123) 456-7890' ) );
		$this->assertEquals( true, is_valid_phone_number( '(555) 555-5555' ) );
		$this->assertEquals( false, is_valid_phone_number( '(555 ) 555-5555' ) );
		$this->assertEquals( false, is_valid_phone_number( '(555) 555 - 5555' ) );
	}
}
