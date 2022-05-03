<?php
namespace App\Entity;

use JsonSerializable;

class ListCommande implements JsonSerializable {

    private int $id_commande;

    private int $id_plats;

    /**
     * Get the value of id_commande
     *
     * @return int
     */
    public function getId_commande(): int
    {
        return $this->id_commande;
    }

    /**
     * Get the value of id_plats
     *
     * @return int
     */
    public function getId_plats(): int
    {
        return $this->id_plats;
    }

     /**
     * Set the value of id_commande
     *
     * @param int $id_commande
     *
     * @return self
     */
    public function setId_commande(int $id_commande): self
    {
        $this->id_commande = $id_commande;

        return $this;
    }

     /**
     * Set the value of id_plats
     *
     * @param int $id_plats
     *
     * @return self
     */
    public function setId_plats(int $id_plats): self
    {
        $this->id_plats = $id_plats;

        return $this;
    }

    public function jsonSerialize(): mixed
    {
        return [
            "id_commande" => $this->id_commande,
            "id_plats" => $this->id_plats
        ];
    }
}