<?php 

namespace App\Core;

use App\Contact\ContactController;
use App\Contact\ContactRepository;
use PDO;
use App\Team\TeamController;
use App\Team\TeamRepository;
use App\Login\LoginController;
use App\Login\LoginRepository;
use App\Admin\AdminController;
use App\Admin\AdminRepository;


class Container   {

    public $storage = [];
    public $buildManuals = [];

    public function __construct() {
    
        $this->buildManuals = [
            'pdo'=> function () {
                $pdo = new PDO('mysql:host=localhost;dbname=vanillaphp;charset=utf8', 'root', '');
                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
                return $pdo;
            },
            'TeamRepository'=>function() {
                return new TeamRepository($this->make("pdo"));
           },
            'TeamController'=> function() {
                return new TeamController($this->make("TeamRepository"));
            },
            'ContactController'=> function() {
                return new ContactController($this->make("ContactRepository"));
            },
            'ContactRepository'=> function(){
                return new ContactRepository($this->make("pdo"));
            },
            'LoginController'=> function() {
                return new LoginController($this->make("LoginRepository"));
            },
            'LoginRepository'=> function(){
                return new LoginRepository($this->make("pdo"));
            },
            'AdminController'=> function() {
                return new AdminController($this->make("AdminRepository"));
            },
            'AdminRepository'=> function(){
                return new AdminRepository($this->make("pdo"));
            }
        ];
    }

    public function make(String $name) {
        	if(empty($this->storage[$name]) ) {
                $this->storage[$name] = $this->buildManuals[$name]();
                return $this->storage[$name];
            }
            return $this->storage[$name];
            
        }

}