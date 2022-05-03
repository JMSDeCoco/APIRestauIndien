<?php
namespace App\Controller;

use App\Model\ListCommandeModel;
use Core\Controller\DefaultController;

class ListCommandeController extends DefaultController {

    public function index (): void
    {
        $this->jsonResponse((new ListCommandeModel())->findAll());
    }
}