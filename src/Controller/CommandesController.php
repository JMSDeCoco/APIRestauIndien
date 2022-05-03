<?php
namespace App\Controller;

use App\Model\CommandesModel;
use Core\Controller\DefaultController;

class CommandesController extends DefaultController {

    public function index (): void
    {
        $this->jsonResponse((new CommandesModel())->findAll());
    }
}