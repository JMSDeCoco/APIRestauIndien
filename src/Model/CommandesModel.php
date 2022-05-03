<?php
namespace App\Model;

use Core\Model\DefaultModel;

/**
 * @method Commandes[] findAll()
 */
class CommandesModel extends DefaultModel {

    protected string $table = "commandes";
    protected string $entity = "Commandes";
}