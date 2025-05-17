<?php

namespace App\Models;

class Vehicule
{
    public function __construct(
        private ?string $marque = null,
        private ?string $modele = null,
        private int $km = 0,
        private int $annee = 0
    ) {
    }

    // getters
    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function getKm(): int
    {
        return $this->km;
    }

    public function getAnnee(): int
    {
        return $this->annee;
    }
}
