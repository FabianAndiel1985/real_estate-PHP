<?php

namespace App\Login;

use App\Core\AbstractController;
use App\Login\LoginRepository;

class LoginController extends AbstractController  {

    public function __construct(LoginRepository $loginRepo)
    {
        $this->loginRepo = $loginRepo;         
    }

    public function showLogin () {
       
        $this->render("login",[]);
        
        if(!empty($_POST)){
            $this->loginRepo->checkCredentials($_POST);
        }

    }


}