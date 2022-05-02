<?php
namespace App\Model;

use Core\Model\DefaultModel;

/**
 * @method Reservation[] findAll()
 */
class ReservationModel extends DefaultModel {

    protected string $table = "reservation";
    protected string $entity = "Reservation";
}