<?php
namespace poo;

class Batiment
{
    private string $nomBatiment;
    private int $superficieBatiment;
    private string $typeBatiment;
    private int $nbEtageBatiment;

    public function __construct(string $nomBat,int $superficieBat,string $typeBat,int $nbEtageBat)
    {
        $this->nomBat=$nomBat;
        $this->superficieBat=$superficieBat;
        $this->typeBat=$typeBat;
        $this->nbEtageBat=$nbEtageBat;
    }
    public function getNomBatiment():string 
    {
        return $this->nomBat;
    }
    public function getSuperficieBatiment():int
    {
        return $this->superficieBat;
    }
    public function getTypeBatiment():string 
    {
        return $this->typeBat;
    }
    public function getNbEtageBatiment():string 
    {
        return $this->nbEtageBat;
    }
    
}