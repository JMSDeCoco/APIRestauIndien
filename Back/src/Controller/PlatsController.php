<?php
namespace App\Controller;

use App\Model\PlatsModel;
use Core\Controller\DefaultController;

class PlatsController extends DefaultController {

    public function index (): void
    {
        $this->jsonResponse((new PlatsModel())->findAll());
    }

    public function addPlats(array $plats): void
    {
        $lastId = $this->model->addCommande($plats);
        $this->jsonResponse($this->model->find($lastId), 201);
    }

    public function updatePlats(int $id, array $plats): void
    {
        if ($this->model->updateCommande($id, $plats)) {
            $this->jsonResponse($this->model->find($id), 201);
        }
    }
}