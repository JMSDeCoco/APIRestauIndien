<?php
namespace App\Entity;

use DateTime;
use JsonSerializable;

class Reservation implements JsonSerializable {

    private int $id_reservation;

    private int $heure;

    private DateTime $date;

    private int $id_client;

    private int $nb_clients;

    /**
     * Get the value of id_reservation
     *
     * @return int
     */
    public function getId_reservation(): int
    {
        return $this->id_reservation;
    }

    /**
     * Get the value of heure
     *
     * @return int
     */
    public function getHeure(): int
    {
        return $this->heure;
    }

    /**
     * Get the value of date
     *
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
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
     * Get the value of nb_clients
     *
     * @return int
     */
    public function getNb_clients(): int
    {
        return $this->nb_clients;
    }

    /**
     * Set the value of heure
     *
     *  @param int $heure
     */
    public function setHeure(int $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Set the value of date
     *
     *  @param DateTime $date
     */
    public function setDate(DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Set the value of id_client
     *
     *  @param int $id_client
     */
    public function setId_client(int $id_client): self
    {
        $this->id_client = $id_client;

        return $this;
    }

    /**
     * Set the value of nb_clients
     *
     *  @param int $nb_clients
     */
    public function setNb_clients(int $nb_clients): self
    {
        $this->nb_clients = $nb_clients;

        return $this;
    }


    public function jsonSerialize(): mixed
    {
        return [
            "id_reservation" => $this->id_reservation,
            "nom" => $this->nom,
            "prix" => $this->prix,
            "type" => $this->type,
            "qty" => $this->qty
        ];
    }
}