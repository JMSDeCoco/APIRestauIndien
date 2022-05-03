<?php
namespace App\Model;

use Core\Model\DefaultModel;

/**
 * @method Clients[] findAll()
 */
class ClientsModel extends DefaultModel {

    protected string $table = "clients";
    protected string $entity = "Clients";

    public function addClient($client): int|false
    {
        $stmt = "INSERT INTO $this->table(nom, tel, mail, pwd) VALUES (:nom, :tel, :mail, :pwd)";
        $prepare = $this->pdo->prepare($stmt);
        if($prepare->execute($client)){
            return $this->pdo->lastInsertId($this->table);
        }
        return false;
    }
}