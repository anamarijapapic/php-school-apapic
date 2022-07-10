<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class GetCenturyTest extends TestCase {
	public function test() : void {
		require_once __DIR__ . '/../src/assignments/get-century/functions.php';

		$this->assertEquals( '1st century', get_century( 1 ) );
		$this->assertEquals( '1st century', get_century( 67 ) );
		$this->assertEquals( '2nd century', get_century( 150 ) );
		$this->assertEquals( '16th century', get_century( 1586 ) );
		$this->assertEquals( '19th century', get_century( 1900 ) );
		$this->assertEquals( '20th century', get_century( 1901 ) );
		$this->assertEquals( '20th century', get_century( 1999 ) );
		$this->assertEquals( '20th century', get_century( 2000 ) );
		$this->assertEquals( '21st century', get_century( 2010 ) );
	}
}
