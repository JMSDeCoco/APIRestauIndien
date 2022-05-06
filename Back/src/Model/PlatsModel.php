<?php
namespace App\Model;

use Core\Model\DefaultModel;

/**
 * @method Plats[] findAll()
 */
class PlatsModel extends DefaultModel {

    protected string $table = "plats";
    protected string $entity = "Plats";
    
    /**
     * addPlats permet d'ajouter des plats 
     *
     * @param  mixed $plat
     * @return int
     */
    public function addPlats($plat): int|false
    {
        $stmt = "INSERT INTO $this->table(nom, prix, type, qty) VALUES (:nom, :prix, :type, :qty)";
        $prepare = $this->pdo->prepare($stmt);
        if($prepare->execute($plat)){
            return $this->pdo->lastInsertId($this->table);
        }
        return false;
    }
    
    /**
     * updatePlats permet de changer les plats
     * 
     * @param  mixed $id_commande
     * @param  mixed $commande
     * @return bool
     */
    public function updatePlats(int $id_commande, array $commande): bool
    {
        $stmt = "
            UPDATE $this->table SET
            prix = :prix,
            qty = :qty
            WHERE id_commande = :id_commande
        ";
        $prepare = $this->pdo->prepare($stmt);
        $commandes['id_commande'] = $id_commande;
        return $prepare->execute($commande);
    }
}