<?php
namespace poo;

class Cabane extends Batiment
{
    public function __construct(string $nomCabane,int $superficieCabane,string $typeCabane,int $netageCabane)
    {
        parent::__construct(string $nomBat,int $superficieBat,string $typeBat,int $nbEtageBat);
    }
}