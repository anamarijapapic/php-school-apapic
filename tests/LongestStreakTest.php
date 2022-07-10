<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class LongestStreakTest extends TestCase {
	public function test() : void {
		require_once __DIR__ . '/../src/assignments/longest-streak/functions.php';

		$this->assertEquals( 0, longest_streak( [] ) );
		$this->assertEquals( 1, longest_streak( [ '2005-06-31' ] ) );
		$this->assertEquals( 1, longest_streak( [ '2005-06-31', '2010-10-18' ] ) );
		$this->assertEquals( 3, longest_streak( [
			'2005-06-31',
			'2010-10-18',
			'2010-10-19',
			'2010-10-20',
			'2022-01-26',
		] ) );
		$this->assertEquals( 4, longest_streak( [
			'2005-06-31',
			'2010-10-18',
			'2010-10-19',
			'2010-10-20',
			'2022-01-26',
			'2022-01-27',
			'2022-01-28',
			'2022-01-29',
		] ) );
	}
}
