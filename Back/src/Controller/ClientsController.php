<?php
namespace App\Controller;

use App\Model\ClientsModel;
use Core\Controller\DefaultController;
use App\Security\JwTokenSecurity;

class ClientsController extends DefaultController {


    public function index(): void
    {
        $this->jsonResponse((new ClientsModel())->findAll());
    }
    public function __construct()
    {
        $this->model = new ClientsModel;
    }

    /**
     * Génère une apikey pour un nouveau client
     *
     * @param array $client
     * @return void
     */

    public function signup (array $client): void
    {
        if (isset($client["nom"], $client["mail"], $client["tel"], $client["pwd"])) {

            $client['pwd'] = password_hash($client['pwd'], PASSWORD_DEFAULT);
            // $client['roles'] = json_encode([]);

            $lastId = $this->model->saveClient($client);

            $this->jsonResponse($this->model->find($lastId));
        }
    }

    public function login (array $clientData): void
    {
        // TODO: Vérifier que $clientData contient un email et un password sinon on retourne une erreur
        $client = $this->model->getClientByEmail($clientData['mail']);

        if ($client) {
            if (password_verify($clientData['pwd'], $client->getPwd())) {

                $this->jsonResponse((new JwTokenSecurity)->generateToken($client->jsonSerialize()));

            } else {
                $this->jsonResponse("Mot de passe incorrect", 400);
            }
        } else {
            $this->jsonResponse("Cet utilisateur n'est pas inscrit, veuillez vous inscrire", 400);
        }
    }

    public function save (array $client): void
    {
        // Génère l'apikey
        $apikey = md5(uniqid());
        $client['apikey'] = $apikey;
        // Stocke le client
        $lastId = $this->model->saveClient($client);
        // Retourne l'apikey
        $this->jsonResponse($this->model->find($lastId));
    }
   
}