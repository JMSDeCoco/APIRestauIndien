<?php
namespace App\Model;

use Core\Model\DefaultModel;
use App\Entity\Reservation;
/**
 * @method Reservation[] findAll()
 */
class ReservationModel extends DefaultModel {

    protected string $table = "reservation";
    protected string $entity = "Reservation";

    public function checkReservation($reservation): int|false
    {
        $placeprise = "SELECT SUM(nb_clients) FROM $this->table WHERE heure = " . $reservation["heure"]." AND date = ".$reservation["date"];
        $some = (int)$placeprise + (int)$reservation["nb_clients"];
        $stmt = "INSERT INTO $this->table (heure , date, id_client , nb_clients) VALUES (:heure, :date, :id_client, :nb_clients)";
        $prepare = $this->pdo->prepare($stmt);
        if ($some <30){
            if($prepare->execute($reservation)){
                return $this->pdo->lastInsertId($this->table);
            }else{
                return false;
            }
        }
        
        return false;
    }
}