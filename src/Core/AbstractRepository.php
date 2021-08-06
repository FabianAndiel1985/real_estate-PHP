<?php

namespace App\Core;

use PDO;

abstract class AbstractRepository {
    
    public abstract function getTableName();
    public abstract function getModelName();

    public function fetchAll() {
        $table= $this->getTableName();
        $model= $this->getModelName();
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $model);
    }
}