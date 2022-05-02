<?php
namespace App\Entity;

use JsonSerializable;

class Plats implements JsonSerializable {

    private int $id;

    private string $nom;

    private float $prix;

    private String $type;

    private int $qty;

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

     /**
     * Get the value of prix
     *
     * @return float
     */
    public function getPrix(): float
    {
        return $this->prix;
    }

     /**
     * Get the value of type
     *
     * @return String
     */
    public function getType(): String
    {
        return $this->type;
    }

     /**
     * Get the value of qty
     *
     * @return int
     */
    public function getQty(): int
    {
        return $this->qty;
    }

    /**
     * Set the value of nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

     /**
     * Set the value of prix
     *
     * @param float $prix
     *
     * @return self
     */
    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

     /**
     * Set the value of type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

     /**
     * Set the value of qty
     *
     * @param int $qty
     *
     * @return self
     */
    public function setQty(int $qty): self
    {
        $this->qty = $qty;

        return $this;
    }

    public function jsonSerialize(): mixed
    {
        return [
            "id" => $this->id,
            "nom" => $this->nom,
            "prix" => $this->prix,
            "type" => $this->type,
            "qty" => $this->qty
        ];
    }
}