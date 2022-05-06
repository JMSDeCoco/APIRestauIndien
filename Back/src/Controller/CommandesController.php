<?php
namespace App\Controller;

use App\Model\CommandesModel;
use Core\Controller\DefaultController;

/**
 * CommandesController
 */
class CommandesController extends DefaultController {

    private $model;
    
    /**
     * __construct
     *
     * @return void
     */
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
    public function addcommande(array $commande): void
    {
        $lastId = $this->model->addCommande($commande);
        $this->jsonResponse($this->model->find($lastId), 201);
    }
    
    /**
     * updatecommmade
     *
     * @param  mixed $id
     * @param  mixed $commande
     * @return void
     */
    public function updatecommmade(int $id, array $commande): void
    {
        if ($this->model->updateCommande($id, $commande)) {
            $this->jsonResponse($this->model->find($id), 201);
        }
    }    
    /**
     * delete
     *
     * @param  mixed $id
     * @return void
     */
    public function delete (int $id): void
    {
        if ($this->model->delete($id)) {
            $this->jsonResponse("Commande delete avec succés");
        }
    }
}