<?php
namespace App\Controllers;

use App\Models\Vehicule;
use App\Services\EstimateurService;

class VehiculeController
{
    public function formulaire(): void
    {
        include __DIR__ . '/../../Views/estimation_form.php';
    }

    public function estimer(): void
    {
        $marque = htmlspecialchars($_POST['marque'] ?? '');
        $modele = htmlspecialchars($_POST['modele'] ?? '');
        $km = (int) ($_POST['km'] ?? 0);
        $annee = (int) ($_POST['annee'] ?? 2000);

        $vehicule = new Vehicule($marque, $modele, $km, $annee);


        $prix = EstimateurService::calculerPrix($vehicule);

        include __DIR__ . '/../../Views/estimation_result.php';
    }


    public function apiEstimation(): void
    {
        // indique au client que la réponse sera au format JSON
        header('Content-Type: application/json');

        // lit le body de la requete
        $data = json_decode(file_get_contents('php://input'), true);

        if (!isset($data['km'], $data['annee'])) {
            http_response_code(400);
            echo json_encode(['error' => 'km et annee requis']);
            return;
        }

        //  crée un objet Vehicule avec les données recues
        $vehicule = new Vehicule(km: $data['km'], annee: $data['annee']);

        $prix = EstimateurService::calculerPrix($vehicule);

        // renvoie une réponse JSON contenant l’estimation
        echo json_encode([
            'estimation' => round($prix),
            'vehicule' => $data,
            'devise' => 'EUR'
        ]);
    }

}
