<?php
namespace App\Model;

use Core\Model\DefaultModel;

/**
 * @method Commandes[] findAll()
 */
class CommandesModel extends DefaultModel {

    protected string $table = "commandes";
    protected string $entity = "Commandes";
    
    /**
     * addCommande permet d'ajouter une commande
     *
     * @param  mixed $commande
     * @return int
     */
    public function addCommande($commande): int|false
    {
        $stmt = "INSERT INTO $this->table(id_client,status) VALUES (:id_client, :status)";
        $prepare = $this->pdo->prepare($stmt);
        if($prepare->execute($commande)){
            return $this->pdo->lastInsertId($this->table);
        }
        return false;
    }
    
    /**
     * updateCommande permet de changer lescommandes
     *
     * @param  mixed $id_commande
     * @param  mixed $commande
     * @return bool
     */
    public function updateCommande(int $id_commande, array $commande): bool
    {
        $stmt = "
            UPDATE $this->table SET
            status = :status
            WHERE id_commande = :id_commande
        ";
        $prepare = $this->pdo->prepare($stmt);
        $commandes['id_commande'] = $id_commande;
        return $prepare->execute($commande);
    }
}