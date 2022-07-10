<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class LongestCommonEndingTest extends TestCase {
	public function test() : void {
		require_once __DIR__ . '/../src/assignments/longest-common-ending/functions.php';

		$this->assertEquals( '', longest_common_ending( 'cat', 'dog' ) );
		$this->assertEquals( 'house', longest_common_ending( 'house', 'house' ) );
		$this->assertEquals( 'ing', longest_common_ending( 'sitting', 'standing' ) );
	}
}
