<?php
namespace App\Controller;

use App\Model\ReservationModel;
use Core\Controller\DefaultController;

class ReservationController extends DefaultController {

    public function index (): void
    {
        $this->jsonResponse((new ReservationModel())->findAll());
    }
}