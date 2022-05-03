<?php
namespace App\Controller;

use App\Model\ClientsModel;
use Core\Controller\DefaultController;

class ClientsController extends DefaultController {


    public function index(): void
    {
        $this->jsonResponse((new ClientsModel())->findAll());
    }
}