<?php

namespace App\Team;

use App\Core\AbstractController;
use App\Team\TeamRepository;

class TeamController extends AbstractController {

    public function __construct(TeamRepository $teamRepo)
    {
        $this->teamRepo = $teamRepo; 
    }

    public function showTeampage() {    
       $params = $this->teamRepo->fetchAll();
       $this->render("team",
       [
           'params'=> $params 
        ]);
    }
}

