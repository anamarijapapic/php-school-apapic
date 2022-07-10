<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class LongestWordTest extends TestCase {
	public function test() : void {
		require_once __DIR__ . '/../src/assignments/longest-word/functions.php';

		$this->assertEquals( 'Lorem', longest_word( 'Lorem ipsum dolor sit amet' ) );
		$this->assertEquals( 'Hello', longest_word( 'Hello world' ) );
		$this->assertEquals( '', longest_word( '' ) );
	}
}
