<?php

class QueryBuilder {
	protected $pdo;

	public function __construct (PDO $pdo) {
		$this->pdo = $pdo;
	}

	public function selectAll ($table) {
		$statement = $this->pdo->prepare("SELECT * FROM {$table}");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	public function insert($table, $data) {
		$placeholders = array_map(function($key){
			return ':' . $key;
		}, array_keys($data));
		$sql = sprintf('INSERT INTO %s (%s) VALUES (%s)',
			$table,
			implode(',', array_keys($data)),
			implode(',', $placeholders)
		);
		$statement = $this->pdo->prepare($sql);
		$statement->execute($data);
	}
}