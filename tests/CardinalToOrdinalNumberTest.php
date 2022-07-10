<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class CardinalToOrdinalNumberTest extends TestCase {
	public function test() : void {
		require_once __DIR__ . '/../src/assignments/cardinal-to-ordinal-number/functions.php';

		$number_formatter = new NumberFormatter( 'en_US', NumberFormatter::ORDINAL );

		for ( $i = 0; $i <= 1000; $i++ ) {
			$this->assertSame(
				str_replace( ',', '', $number_formatter->format( $i ) ),
				cardinal_to_ordinal( $i )
			);
		}
	}
}
