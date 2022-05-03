<?php
namespace App\Controller;

use App\Model\PlatsModel;
use Core\Controller\DefaultController;

class PlatsController extends DefaultController {

    public function index (): void
    {
        $this->jsonResponse((new PlatsModel())->findAll());
    }
}