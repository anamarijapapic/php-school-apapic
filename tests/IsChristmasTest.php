<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class IsChristmasTest extends TestCase {
	public function test() : void {
		require_once __DIR__ . '/../src/assignments/is-christmas/functions.php';

		$this->assertEquals( false, is_christmas( '2005-06-31' ) );
		$this->assertEquals( true, is_christmas( '2005-12-25' ) );
		$this->assertEquals( true, is_christmas( '2022-12-25' ) );
	}
}
