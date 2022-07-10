<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class VowelCounterTest extends TestCase {
	public function test() : void {
		require_once __DIR__ . '/../src/assignments/vowel-counter/functions.php';

		$this->assertEquals( 0, count_vowels( '' ) );
		$this->assertEquals( 0, count_vowels( 'php' ) );
		$this->assertEquals( 3, count_vowels( 'programming' ) );
		$this->assertEquals( 5, count_vowels( 'aeiou' ) );
	}
}
