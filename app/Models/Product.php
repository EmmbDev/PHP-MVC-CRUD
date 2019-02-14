<?php

namespace App\Models;

class Product {
	private $name;
	private $description;
	private $price;
	private $created;
	
	function __construct($name, $description, $price, $created) {
		$this->name = $name;
		$this->description = $description;
		$this->price = $price;
		$this->created = $created;
	}

	public function getName() {
		return $this->name;
	}

	public function getDescription() {
		return $this->description;
	}

	public function getPrice() {
		return $this->price;
	}
}