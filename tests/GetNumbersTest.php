<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class GetNumbersTest extends TestCase {
	public function test() : void {
		require_once __DIR__ . '/../src/assignments/get-numbers/functions.php';

		$this->assertEquals( [], get_numbers( [] ) );
		$this->assertEquals(
			[ 1, 2.5 ],
			get_numbers( [ 1, true, 2.5, 'foo', [], null, new stdClass ] )
		);
	}
}
