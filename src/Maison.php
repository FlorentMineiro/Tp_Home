<?php
namespace poo;

class Maison extends Batiment
{
    private bool $cheminee;
    private bool $garageMaison;

    public function __construct(string $nomMaison,int $superficieMaison,string $typeMaison,int $nbEtageMaison,bool $maisonGarage = false,bool $chemineeMaison = false)
    {
        parent::__construct($nomMaison,$superficieMaison,$typeMaison,$nbEtageMaison);
        $this->maisonGarage=$maisonGarage;
        $this->chemineeMaison=$chemineeMaison;
    }

    public function getCheminee():bool 
    {
        return $this->chemineeMaison;
    }
    public function getGarageMaison():bool 
    {
        return $this->maisonGarage;
    }
}