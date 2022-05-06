<?php
namespace App\Controller;

use App\Model\PlatsModel;
use Core\Controller\DefaultController;

class PlatsController extends DefaultController {
    
    /**
     * index permettant de trouver tout les éléments de plat
     *
     * @return void
     */
    public function index (): void
    {
        $this->jsonResponse((new PlatsModel())->findAll());
    }
    
    /**
     * addPlats permet d'ajouter des plats
     *
     * @param  mixed $plats
     * @return void
     */
    public function addPlats(array $plats): void
    {
        $lastId = $this->model->addCommande($plats);
        $this->jsonResponse($this->model->find($lastId), 201);
    }
    
    /**
     * updatePlats permet d'update les plats
     *
     * @param  mixed $id
     * @param  mixed $plats
     * @return void
     */
    public function updatePlats(int $id, array $plats): void
    {
        if ($this->model->updateCommande($id, $plats)) {
            $this->jsonResponse($this->model->find($id), 201);
        }
    }
}