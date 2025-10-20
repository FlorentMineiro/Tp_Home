<?php

namespace poo;

class Immeuble extends Batiment
{
    private bool $ascenseur;
    private int $nbAppartement;
    private bool $garage;

    public function __construct(string $nomImmeuble,int $superficieImmeuble,string $typeImmeuble,int $nbEtageImmeuble,bool $ascenseur = false,int $nbAppartement = 0)
    {
        parent::__construct($nomImmeuble,$superficieImmeuble,$typeImmeuble,$nbEtageImmeuble);
        $this->ascenseur=$ascenseur;
        $this->nbAppartement=$nbAppartement;
        $this->garage=$garage;
    }

    public function getNbAppatement():int 
    {
        return $this->nbAppartement;
    }
    public function getAscenseur():bool 
    {
        return $this->ascenseur;
    }
    public function getGarage():bool 
    {
        return $this->garage;
    }
    public function setGarage(bool $garage):bool
    {
        return $this->garage=$garage;
    }
}