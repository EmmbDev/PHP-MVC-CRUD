<?php

class QueryBuilder {
    protected $pdo;
    
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function delete($table, $parameters) {
        $sql = sprintf('delete from %s where %s = %s ',
            $table,
            key($parameters),
            ':'. key($parameters)
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch(Exception $e) {
            die("Whooops, something went wrong.");
        }
    }

    public function insert($table, $parameters) {
        $sql = sprintf('insert into %s (%s) values(%s)',
        $table,
        implode(', ', array_keys($parameters)),
        ':' . implode(', :', array_keys($parameters))
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        }catch(Exception $e) {
            die("Whooops, something went wrong.");
        }
    }

    public function update($table, $parameters, $condition) {
        $setVal = array_map(function($key) {
            return $key . '=:' . $key;
        }, array_keys($parameters));
        $sql = sprintf('update %s set %s where %s', $table, 
            implode(', ', $setVal), $condition);
        $statement = $this->pdo->prepare($sql);
        $statement->execute($parameters);
    }
    
    public function selectAll($table) {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}