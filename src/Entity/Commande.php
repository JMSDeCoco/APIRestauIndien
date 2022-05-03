<?php
namespace App\Entity;

use JsonSerializable;

class Commande implements JsonSerializable {

    private int $id_commande;

    private int $id_client;

    private String $status;

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
     * Get the value of id_client
     *
     * @return int
     */
    public function getId_client(): int
    {
        return $this->id_client;
    }

    /**
     * Get the value of status
     *
     * @return String
     */
    public function getStatus(): String
    {
        return $this->status;
    }

     /**
     * Set the value of id_client
     *
     * @param int $id_client
     *
     * @return self
     */
    public function setId_client(int $id_client): self
    {
        $this->id_client = $id_client;

        return $this;
    }

     /**
     * Set the value of status
     *
     * @param String $status
     *
     * @return self
     */
    public function setStatus(String $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function jsonSerialize(): mixed
    {
        return [
            "id_commande" => $this->id_commande,
            "id_client" => $this->id_client,
            "status" => $this->status
        ];
    }
}