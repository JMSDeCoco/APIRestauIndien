<?php
namespace Core\Model;

use Core\Database\Database;
use Core\Traits\JsonTrait;

/**
 * DefaultModel 
 */
class DefaultModel extends Database {

    use JsonTrait;

    protected string $table;
    protected string $entity;

    /**
     * Retourne l'ensemble des éléments d'une table
     *
     * @return array<int,object>
     */
    public function findAll(): array
    {
        try {
            $stmt = "SELECT * FROM $this->table";
            $query = $this->pdo->query($stmt, \PDO::FETCH_CLASS, "App\Entity\\$this->entity");
            
            return $query->fetchAll();
        } catch (\PDOException $e) {
            // // s'il y a une erreur on retourne le message avec un code d'erreur adapté
            // header("content-type: application/json");
            // // Ici le code 400
            // http_response_code(400);
            // echo json_encode($e->getMessage());
            $this->jsonResponse($e->getMessage(), 400);
        }
    }
    
    /**
     * find un client grace a son id
     *
     * @param  mixed $id
     * @return object
     */
    public function find(int $id): object|false
    {
        try {
        $stmt = "SELECT * FROM $this->table WHERE id_client = $id";
        $query = $this->pdo->query($stmt, \PDO::FETCH_CLASS, "App\Entity\\$this->entity");
        return $query->fetch();
        } catch (\PDOException $e) {
            $this->jsonResponse($e->getMessage(), 400);
        }
    }
    
    /**
     * delete un élément en l'identifiant avec son id
     *
     * @param  mixed $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $stmt = "DELETE FROM $this->table WHERE id = :id";
        $prepare = $this->pdo->prepare($stmt);
        $prepare->bindParam(":id", $id);

        return $prepare->execute();
    }
}