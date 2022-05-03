<?php
namespace App\Model;

use Core\Model\DefaultModel;

/**
 * @method ListCommande[] findAll()
 */
class ListCommandeModel extends DefaultModel {

    protected string $table = "liste_commande";
    protected string $entity = "Liste_Commande";

    public function addPlats($plat): bool
    {
        $stmt = "INSERT INTO $this->table(id_commande, id_plats) VALUES (:id_commande, :id_plats)";
        $prepare = $this->pdo->prepare($stmt);
        if($prepare->execute($plat)){
            return true;
        }
        return false;
    }

    //public function deletePlats()
}