<?php 

namespace App\Contact;

use App\Core\AbstractController;
use App\Contact\ContactRepository;

class ContactController extends AbstractController {

    public function __construct(ContactRepository $contactRepo)
    {
        $this->contactRepo = $contactRepo;         
    }

    public function showContactForm () {
        $this->render("contact", []);

        if(!empty($_POST)){
            var_dump($_POST);
        }

    }
}