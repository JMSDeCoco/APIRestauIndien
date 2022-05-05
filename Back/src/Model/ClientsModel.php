<?php
namespace App\Model;

use App\Entity\Clients;
use Core\Model\DefaultModel;

/**
 * @method Clients[] findAll()
 */
class ClientsModel extends DefaultModel {

    protected string $table = "clients";
    protected string $entity = "Clients";

    public function saveClient($client): int|false
    {
        $stmt = "INSERT INTO $this->table(nom, tel, mail, pwd) VALUES (:nom, :tel, :mail, :pwd)";
        $prepare = $this->pdo->prepare($stmt);
        if($prepare->execute($client)){
            return $this->pdo->lastInsertId($this->table);
        }
        return false;
    }
    public function findByApikey ($apikey): Clients|false
    {
        $stmt = "SELECT * FROM $this->table WHERE apikey = '$apikey'";

        $query = $this->pdo->query($stmt, \PDO::FETCH_CLASS, "App\Entity\\$this->entity");
        return $query->fetch();
    }
    public function getClientByEmail(string $mail): Clients|false
    {
        $stmt = "SELECT * FROM $this->table WHERE mail = '$mail'";
        $query = $this->pdo->query($stmt, \PDO::FETCH_CLASS, "App\Entity\\$this->entity");

        return $query->fetch();
    }

    /**
     * Enregistre un user en BDD
     *
     * @param array $clients
     * @return integer|false
     */
}
