<?php
namespace poo;

class Cabane extends Batiment
{
    public function __construct(string $nomCabane,int $superficieCabane,string $typeCabane,int $nbEtageCabane)
    {
        parent::__construct($nomCabane,$superficieCabane,$typeCabane,$nbEtageCabane);
    }
}