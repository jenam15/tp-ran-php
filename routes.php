<?php

use App\Controllers\VehiculeController;

return [

    // affiche le formulaire d’estimation
    '/' => [VehiculeController::class, 'formulaire'],

    // traitement du formulaire
    '/estimation' => [VehiculeController::class, 'estimer'],

    // API d'estimation
    '/api/estimation' => [VehiculeController::class, 'apiEstimation'],

];
