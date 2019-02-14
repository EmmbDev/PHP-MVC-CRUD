<?php

class ProductService {
	private $queryBuilder;
	private const $tableName;

	function __construct(QueryBuilder $qb, $tableName) {
		$this->queryBuilder = $qb;
		$this->tableName = $tableName;
	}

	public function create(Product $product) {
		$queryBuilder->insert($tableName, get_object_vars($product));
	}

	public function delete(Product $product) {
		$queryBuilder->delete($tableName, get_object_vars($product));
	}

	public function getAll() {
		// TODO
		$rows = $queryBuilder->selectAll($tableName);
		var_dump($rows);
	}
}