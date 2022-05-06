<?php
namespace App\Controller;

use App\Model\ReservationModel;
use Core\Controller\DefaultController;

class ReservationController extends DefaultController {
    public function __construct()
    {
        $this->model = new ReservationModel();
    }

    
    /**
     * index permet de trouver toutes les reservations
     *
     * @return void
     */
    public function index (): void
    {
        $this->jsonResponse((new ReservationModel())->findAll());
    }
        
    /**
     * addReservation permet d'ajouter une reservation
     *
     * @param  mixed $reservation
     * @return void
     */
    public function addReservation($reservation): void
    {
        $lastId = $this->model->checkReservation($reservation);
        $this->jsonResponse($this->model->find($lastId), 201);
    }
        
    /**
     * delete permet de delete les reservations
     *
     * @param  mixed $id
     * @return void
     */
    public function delete (int $id): void
    {
        if ($this->model->delete($id)) {
            $this->jsonResponse("Reservation delete avec succès");
        }
    }
}