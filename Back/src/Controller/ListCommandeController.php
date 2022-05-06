<?php
namespace App\Controller;
use App\Model\ListCommandeModel;
use Core\Controller\DefaultController;

/**
 * ListCommandeController
 */
class ListCommandeController extends DefaultController {

    private $model;
    
    /**
     * __construct
     *
     * @return void
     */
    public function __construct ()
    {
        $this->model = new ListCommandeModel();
    }
    
    /**
     * index pour trouver tout les éléments
     *
     * @return void
     */
    public function index (): void
    {
        $this->jsonResponse((new ListCommandeModel())->findAll());
    }
    
    /**
     * addListCommande ajoute eds plat a la liste des commandes
     *
     * @param  mixed $list
     * @return void
     */
    public function addPlats(array $plats): void
    {
        $lastId = $this->model->addPlats($plats);
        $this->jsonResponse($this->model->find($lastId), 201);
    } 
    /**
     * delete la liste 
     *
     * @param  mixed $id
     * @return void
     */
    public function delete (int $id): void
    {
        if ($this->model->delete($id)) {
            $this->jsonResponse("La liste de la commande a été delete avec succés");
        }
    }
}