<?php 

class CategoryService {
	private $queryBuilder;
	private $tableName;

	function __construct(QueryBuilder $qb, $tableName) {
		$this->queryBuilder = $qb;
		$this->tableName
	}
}