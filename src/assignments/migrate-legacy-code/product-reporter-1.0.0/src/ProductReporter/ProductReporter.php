<?php

namespace ProductReporter;

define( 'EntryName', 'products.csv', true );
define( 'CsvSeparator', ';', true );

class ProductReporter {

	function __construct( $filepath ) {
		$this->filepath = $filepath;
	}

	private function get_file_contents() {

		$contents = '';

		if ( ! file_exists( $this->filepath ) ) {
			throw new \Exception( 'File [' . $this->filepath . '] does not exist.' );
		}

		$fh = zip_open( $this->filepath );

		if ( ! is_resource( $fh ) ) {
			throw new \Exception( 'Could not open zip file [' . $this->filepath . '].' );
		}

		while ( $entry = zip_read( $fh ) ) {
			if ( zip_entry_name( $entry ) === ENTRYNAME ) {
				if ( zip_entry_open( $fh, $entry ) ) {
					$contents = zip_entry_read( $entry, zip_entry_filesize( $entry ) );
					zip_entry_close( $entry );
				}
				break;
			}
		}

		zip_close( $fh );

		return $contents;
	}

	private function build_products( $contents ) {

		$products = [];

		$rows = str_getcsv( $contents, "\n" ); // get all rows/lines

		foreach ( $rows as $row ) {
			$arr = str_getcsv( $row, CsvSeparator );
			$products[] = new Product( $arr{0}, $arr{1}, $arr{2}, $arr{3} );
		}

		usort( $products, create_function( '$p1,$p2', 'return $p1->get_price() > $p2->get_price();' ) );

		return $products;
	}

	public function parse() {
		if ( ! array_key_exists( 'products', $this ) ) {
			$contents = $this->get_file_contents();
			$this->products = $this->build_products( $contents );
		}
	}

	public function get_products() {
		if ( ! array_key_exists( 'products', $this ) ) {
			return [];
		} else {
			return $this->products;
		}
	}
}
