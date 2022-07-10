<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class ConvertCommaDelimitedStringToArrayTest extends TestCase {
	public function test() : void {
		require_once __DIR__ . '/../src/assignments/convert-comma-delimited-string-to-array/functions.php';

		$this->assertEquals( [], to_array( '' ) );
		$this->assertEquals( [ 'foo' ], to_array( 'foo' ) );
		$this->assertEquals( [ 'foo', 'bar', 'baz' ], to_array( 'foo,bar,baz' ) );
	}
}
