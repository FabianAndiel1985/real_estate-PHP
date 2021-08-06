<?php

namespace App\Admin;

use App\Core\AbstractRepository;
use PDO;

class AdminRepository extends AbstractRepository {

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getTableName(){
        return "admin";
    }
    
    public function getModelName() {

    }

    public function insertIntoTable($param) {
        extract($param);
        $password =  password_hash($password,PASSWORD_DEFAULT);
        $tablename = $this->getTableName();
        $statement = $this->pdo->prepare("INSERT INTO $tablename (id, username, password, email)
        VALUES (NULL, :username, :password,:email)");
        $statement->execute(array('username'=>$username,'password'=>$password,'email'=>$email));
    }
}



