<?php

require "./src/init.php"; ?>

<?php require __DIR__."../Components/Head.php"; ?> 


<?php

session_start();

$pathinfo = $_SERVER["PATH_INFO"];

$routes= [
    "/team" => ['TeamController',
    'showTeampage'],
    "/contact" => ['ContactController',
    'showContactForm'],
    "/login" => ['LoginController',
    'showLogin'],
    "/admin-board" => ['AdminController',
    'showAdmin'],
    "/create-other-admin" => ['AdminController',
    'showMakeOtherAdmin']
    ];


if(isset($routes[$pathinfo])){

    $controllername = $routes[$pathinfo][0];
    $method = $routes[$pathinfo][1];
    
    $controller = $container->make($controllername);

    $controller->$method();
} 


