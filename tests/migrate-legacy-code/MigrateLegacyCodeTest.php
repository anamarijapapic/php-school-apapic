<?php

// declare(strict_types=1);

// use PHPUnit\Framework\TestCase;

// require_once __DIR__ . '/../../src/assignments/migrate-legacy-code/product-reporter-2.0.0/autoload.php';

// class MigrateLegacyCodeTest extends TestCase {

// 	public function test_nonExistantFilepath_shouldThrow() : void {
// 		$product_reporter = new \ProductReporter\ProductReporter( __DIR__ . '/does-not-exist.zip' );
// 		$this->expectException( \Exception::class );
// 		$product_reporter->parse();
// 	}

// 	public function test_malformedZipFile_shouldThrow() : void {
// 		$product_reporter = new \ProductReporter\ProductReporter( __DIR__ . '/malformed-zip-file.zip' );
// 		$this->expectException( \Exception::class );
// 		$product_reporter->parse();
// 	}

// 	public function test_getProducts_shouldBeCorrect() : void {

// 		$expected_products = [
// 			new \ProductReporter\Product( 'Apple iPhone 6', 100.00, 'https://www.gsmarena.com/apple_iphone_6-6378.php', 'A1549,A1586,A1589,A1522,A1524,A1593,iPhone7' ),
// 			new \ProductReporter\Product( 'LG W41+', 170.00, 'https://www.gsmarena.com/lg_w41+-10743.php', 'LMK610IM,LM-K610IM' ),
// 			new \ProductReporter\Product( 'Apple iPhone 7', 180.00, 'https://www.gsmarena.com/apple_iphone_7-8064.php', 'A1660,A1778,A1779,A1780,A1853,A1866,iPhone9.1,iPhone9.3' ),
// 			new \ProductReporter\Product( 'LG W41 Pro', 180.00, 'https://www.gsmarena.com/lg_w41_pro-10742.php', 'LMK610IM,LM-K610IM' ),
// 			new \ProductReporter\Product( 'Samsung Galaxy M53', 469.99, 'https://www.gsmarena.com/samsung_galaxy_m53-11439.php', 'SM-M536B,SM-M536B/DS,SM-M536B/DSN' ),
// 			new \ProductReporter\Product( 'Samsung Galaxy S20 FE 2022', 500.00, 'https://www.gsmarena.com/samsung_galaxy_s20_fe_2022-11459.php', 'SM-G781NK,SM-G781NK22' ),
// 		];

// 		$product_reporter = new \ProductReporter\ProductReporter( __DIR__ . '/products.csv.zip' );
// 		$product_reporter->parse();

// 		$this->assertEquals( $expected_products, $product_reporter->get_products() );
// 	}
// }
