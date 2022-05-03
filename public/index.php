<?php

use Core\Router\Router;

define('ROOT', dirname(__DIR__));
require ROOT ."/vendor/autoload.php";

// Chargement du routeur
require ROOT ."/Core/Router/Router.php";
Router::router(); 