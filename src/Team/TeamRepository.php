<?php 

namespace App\Team;

use App\Core\AbstractRepository;
use App\Team\TeamModel;

use PDO;

class TeamRepository extends AbstractRepository  {

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getTableName() {
        return "team";
    }

    public function getModelName(){
        return TeamModel::class;
    }

}