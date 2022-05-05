<?php
namespace App\Controller;

use App\Model\ReservationModel;
use Core\Controller\DefaultController;

class ReservationController extends DefaultController {

    public function index (): void
    {
        $this->jsonResponse((new ReservationModel())->findAll());
    }

    public function addReservation($reservation): void
    {
        $lastId = $this->model->addCommande($reservation);
        $this->jsonResponse($this->model->find($lastId), 201);
    }
    
    public function delete (int $id): void
    {
        if ($this->model->delete($id)) {
            $this->jsonResponse("reservation delete avec succés");
        }
    }
}