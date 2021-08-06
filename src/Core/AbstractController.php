<?php

namespace App\Core;

abstract class AbstractController {

    public function render($view,$params) {
        extract($params);
        require __DIR__."/../Views/{$view}.php";
    }

}