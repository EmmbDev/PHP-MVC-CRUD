<?php

namespace App\Models;
class Category {
	private $name;
	private $created;
	private $modified;

	function __construct($name, $created, $modified) {
		$this->name = $name;
		$this->created = $created;
		$this->modified = $modified;
	}

	public function getName() {
		return $this->name;
	}


	public function getCreated() {
		return $this->created;
	}

	public function getModified() {
		return $this->modified;
	}
}