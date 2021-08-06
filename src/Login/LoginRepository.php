<?php

namespace App\Login;

use App\Core\AbstractRepository;
use PDO;

class LoginRepository extends AbstractRepository  {

    public function __construct(PDO $pdo)
    {
        $this->pdo= $pdo;
    }

    
    public function getTableName() {
        return "admin";
    }

    public function getModelName(){
    
    }

    public function checkCredentials($credentials) {

        extract($credentials);
        // TODO alles herunter fetchen und Passwort miteinander vergleichen
        $tablemame = $this->getTableName();
        $statement = $this->pdo->prepare("SELECT password from $tablemame where username = ?");
        $statement->execute(array($username));
        $result = $statement->fetch();
        $hashedPassword = $result["password"];
        
        if(password_verify($password, $hashedPassword)) {
            header("Location: admin-board");
        }
        
        else {
            
        }

    }

}