<?php
namespace App\Services;

use App\Models\Vehicule;

class EstimateurService
{
    public static function calculerPrix(Vehicule $v): float
    {
        $prix = 20000 - ($v->getKm() / 10) - (2025 - $v->getAnnee()) * 500;

        return max(0, $prix);
    }


}
