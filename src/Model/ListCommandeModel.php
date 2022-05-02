<?php
namespace App\Model;

use Core\Model\DefaultModel;

/**
 * @method ListCommande[] findAll()
 */
class ListCommandeModel extends DefaultModel {

    protected string $table = "liste_commande";
    protected string $entity = "Liste_Commande";
}