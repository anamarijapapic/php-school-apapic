<?php

namespace ProductReporter;

use ZipArchive;

define( 'EntryName', 'products.csv' );
define( 'CsvSeparator', ';' );

class ProductReporter {

	function __construct( $filepath ) {
		$this->filepath = $filepath;
	}

	private function get_file_contents() {

		$contents = '';

		if ( ! file_exists( $this->filepath ) ) {
			throw new \Exception( 'File [' . $this->filepath . '] does not exist.' );
		}

		// The procedural API (Zip Functions) is deprecated as of PHP 8.0.0. 
		// Object-oriented API (ZipArchive) should be used instead.

		$zip = new ZipArchive;
		$opened = $zip->open( $this->filepath, ZipArchive::RDONLY );
		if ( $opened !== TRUE ) {
			throw new \Exception( 'Could not open zip file [' . $this->filepath . '].' );
		}

		for ($i = 0; $entry = $zip->statIndex($i); $i++) {
    		if ( $entry['name'] === EntryName ) {
				$contents = $zip->getFromIndex($i);
			}
		}
		$zip->close();

		return $contents;
	}

	private function build_products( $contents ) {

		$products = [];

		$rows = str_getcsv( $contents, "\n" ); // get all rows/lines

		foreach ( $rows as $row ) {
			$arr = str_getcsv( $row, CsvSeparator );
			$products[] = new Product( $arr[0], $arr[1], $arr[2], $arr[3] );
		}

		// usort(): Returning bool from comparison function is deprecated -> rewritten using spaceship operator (<=>)
		usort( $products, function($p1, $p2) { return [$p1->get_price(), $p1->get_name()] <=> [$p2->get_price(), $p2->get_name()]; } );
		
		return $products;
	}

	// property_exists() as a replacement for an array_key_exists() function

	public function parse() {
		if ( ! property_exists( $this, 'products' ) ) {
			$contents = $this->get_file_contents();
			$this->products = $this->build_products( $contents );
		}
	}

	public function get_products() {
		if ( ! property_exists( $this, 'products' ) ) {
			return [];
		} else {
			return $this->products;
		}
	}
}
