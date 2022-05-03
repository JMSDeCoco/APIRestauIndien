<?php

use App\Controller\ClientsController;

define("ROOT", dirname(__DIR__));
require ROOT . "/vendor/autoload.php";

(new ClientsController)->index();