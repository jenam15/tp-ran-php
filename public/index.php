<?php

require_once __DIR__ . '/../vendor/autoload.php';

$routes = require __DIR__ . '/../routes.php';

// récupere l'URI client
$uri = strtok($_SERVER['REQUEST_URI'], '?');

// On vérifie si l'URI demandée existe dans le tableau des routes
if (isset($routes[$uri])) {
    // récupere le nom de la classe du cotnroleur et de la méthode associée à cette route
    [$controllerClass, $method] = $routes[$uri];
    //  instancie le controleur
    $controller = new $controllerClass();
    // appellela méthode associée 
    $controller->$method();
} else {
    http_response_code(404);
}
