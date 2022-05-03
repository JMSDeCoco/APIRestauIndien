<?php
namespace App\Controller;

use App\Model\CommandesModel;
use Core\Controller\DefaultController;

class CommandesController extends DefaultController {

    private $model;

    public function __construct ()
    {
        $this->model = new CommandesModel();
    }

    // liste des commandes
    public function index (): void
    {
        $this->jsonResponse((new CommandesModel())->findAll());
    }

    //Retourne une commande en fonction de son ID
    public function single (int $id)
    {
        $this->jsonResponse($this->model->find($id));
    }

    //add une commandes
    public function add(array $commande): void
    {
        $lastId = $this->model->addCommande($commande);
        $this->jsonResponse($this->model->find($lastId), 201);
    }

    public function update(int $id, array $commande): void
    {
        if ($this->model->updateCommande($id, $commande)) {
            $this->jsonResponse($this->model->find($id), 201);
        }
    }
}