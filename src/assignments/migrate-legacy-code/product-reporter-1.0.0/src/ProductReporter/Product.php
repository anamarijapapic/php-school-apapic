<?php

namespace ProductReporter;

class Product {
	public function __construct( $name, $price, $url, $models ) {
		$this->name = $name;
		$this->price = (float) $price;
		$this->url = $url;
		$this->models = explode( ',', $models );
	}

	public function get_name() {
		return $this->name;
	}

	public function get_price() {
		return $this->price;
	}

	public function get_url() {
		return $this->url;
	}

	public function get_models() {
		return implode( $this->models, ', ' );
	}
}
