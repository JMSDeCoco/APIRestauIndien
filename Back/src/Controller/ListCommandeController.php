<?php
namespace App\Controller;

use App\Model\ListCommandeModel;
use Core\Controller\DefaultController;

class ListCommandeController extends DefaultController {

    private $model;

    public function __construct ()
    {
        $this->model = new ListCommandeController();
    }

    public function index (): void
    {
        $this->jsonResponse((new ListCommandeModel())->findAll());
    }

    public function addListCommande($list): void
    {
        $lastId = $this->model->addCommande($list);
        $this->jsonResponse($this->model->find($lastId), 201);

    }
    public function delete (int $id): void
    {
        if ($this->model->delete($id)) {
            $this->jsonResponse("listCommande delete avec succés");
        }
    }
}