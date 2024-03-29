<?php
namespace App\Entity;

use JsonSerializable;

/**
 * Clients
 */
class Clients implements JsonSerializable {

    private int $id_client;

    private String $nom;

    private int $tel;

    private String $mail;

    private String $pwd;

    private bool $admin;


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
     * Get the value of nom
     *
     * @return String
     */
    public function getNom(): String
    {
        return $this->nom;
    }

     /**
     * Get the value of tel
     *
     * @return int
     */
    public function getTel(): int
    {
        return $this->tel;
    }

    /**
     * Get the value of mail
     *
     * @return String
     */
    public function getMail(): String
    {
        return $this->mail;
    }

     /**
     * Get the value of pwd
     *
     * @return String
     */
    public function getPwd(): String
    {
        return $this->pwd;
    }

     /**
     * Get the value of admin
     *
     * @return bool
     */
    public function getAdmin(): bool
    {
        return $this->admin;
    }

    /**
     * Set the value of nom
     *
     * @param String $nom
     *
     * @return self
     */
    public function setNom(String $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Set the value of tel
     *
     * @param int $tel
     *
     * @return self
     */
    public function setTel(int $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Set the value of mail
     *
     * @param String $mail
     *
     * @return self
     */
    public function setMail(String $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Set the value of pwd
     *
     * @param String $pwd
     *
     * @return self
     */
    public function setPwd(String $pwd): self
    {
        $this->pwd = $pwd;

        return $this;
    }

    public function jsonSerialize(): mixed
    {

       
        return [
            "id_client" => $this->id_client,
            "nom" => $this->nom,
            "tel" => $this->tel,
            "mail" => $this->mail,
            "pwd" => $this->pwd,
            "admin" => $this->admin
        ];
    }


    
    /**
     * getClientByEmail permet de récupéré un client avec son email
     *
     * @param  mixed $email
     * @return Clients
     */
    public function getClientByEmail(string $email): Clients|false
    {
        $stmt = "SELECT * FROM $this->table WHERE email = '$email'";
        $query = $this->pdo->query($stmt, \PDO::FETCH_CLASS, "App\Entity\\$this->entity");

        return $query->fetch();
    }

    /**
     * Enregistre un user en BDD
     *
     * @param array $clients
     * @return integer|false
     */
    public function saveClient (array $clients): int|false
    {
        $stmt = "INSERT INTO $this->table (nom, prenom, email, phone, password, roles) VALUES (:nom, :prenom, :email, :phone, :password, :roles)";
        $prepare = $this->pdo->prepare($stmt);

        if ($prepare->execute($clients)) {
            return $this->pdo->lastInsertId('clients');
        }
        return false;
    }
}