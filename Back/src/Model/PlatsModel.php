<?php
namespace App\Model;

use Core\Model\DefaultModel;

/**
 * @method Plats[] findAll()
 */
class PlatsModel extends DefaultModel {

    protected string $table = "plats";
    protected string $entity = "Plats";
}