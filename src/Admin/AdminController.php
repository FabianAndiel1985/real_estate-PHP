<?php 

namespace App\Admin;

use App\Core\AbstractController;
use App\Admin\AdminRepository;

class AdminController extends AbstractController {

    public function __construct(AdminRepository $adminRepository)
    {
        $this->repository =  $adminRepository;   
    }

    public function showAdmin() {
        $this->render("admin-board",[]);        
    }

    public function showMakeOtherAdmin() {
        $this->render("make-admin",[]);  
        if(!empty($_POST)) {
            $this->repository->insertIntoTable($_POST);
        }      
    }

}