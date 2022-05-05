<?php
namespace App\Model;

use Core\Model\DefaultModel;

/**
 * @method Reservation[] findAll()
 */
class ReservationModel extends DefaultModel {

    protected string $table = "reservation";
    protected string $entity = "Reservation";

    public function addReservation($reservation): int|false
    {
        $stmt = "INSERT INTO $this->table(heure, date, type, qty) VALUES (:heure, :date, :type, :qty)";
        $prepare = $this->pdo->prepare($stmt);
        if($prepare->execute($reservation)){
            return $this->pdo->lastInsertId($this->table);
        }
        return false;
    }
}