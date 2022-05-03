<?php
namespace App\Model;

use Core\Model\DefaultModel;

/**
 * @method Clients[] findAll()
 */
class ClientsModel extends DefaultModel {

    protected string $table = "clients";
    protected string $entity = "Clients";
}