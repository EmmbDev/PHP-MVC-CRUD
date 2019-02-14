<?php 

namespace App\Models;

class CategoryService {
	private $queryBuilder;
	private $tableName;

	function __construct($qb, $tableName) {
		$this->queryBuilder = $qb;
		$this->tableName = $tableName;
	}

	public function getCategories() {
		$queries = $this->queryBuilder->selectAll($this->tableName);
		$categories = array_map(function($arr) {
			return new Category($arr->name, $arr->created, $arr->modified);
		}, $queries);
		return $categories;
	}
}