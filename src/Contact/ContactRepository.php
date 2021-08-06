<?php 

namespace App\Contact;

use App\Core\AbstractRepository;
use PDO;

class ContactRepository{

    public function __construct(PDO $pdo)
    {
        $this->pdo= $pdo;
    }

    public function insertIntoTable($formContent) {

        // TO DO checken ob abstrahieren

        extract($formContent);
        $statement = $this->pdo->prepare("INSERT INTO feedback (id, firstname, lastname, emailadress, feedback)
        VALUES (NULL, :firstname, :lastname, :emailadress, :feedback); ");
        $statement->execute(array('firstname'=> $firstname,'lastname'=> $firstname,'emailadress'=>$email,'feedback'=>$message));
    
    }


} 

