<?php

$prenom = "Nej";
$vehicule = [
    'marque' => 'Kia',
    'modele' => 'Picanto',
    'km' => 60000,
    'annee' => 2018
];

foreach ($vehicule as $cle => $valeur) {
    echo ucfirst($cle) . ": " . htmlspecialchars($valeur) . "<br>";
}

/**
 * Estime le prix d'un véhicule en fonction de son kilométrage et de son année.
 *
 * @param int $km Kilométrage du véhicule.
 * @param int $annee Année du véhicule.
 * @return float Prix estimé du véhicule.
 */
function estimerVehicule(int $km, int $annee): float
{
    return 20000 - ($km / 10) - (2025 - $annee) * 500;
}

echo "<br>Estimation: " . estimerVehicule($vehicule['km'], $vehicule['annee']) . " €";


?>