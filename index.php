<?php
require __DIR__.'/vendor/autoload.php';

use poo\Batiment;

use poo\Maison as Maison;
use poo\Immeuble as Immeuble;
use poo\Cabane as Cabane;

//Liste Batiments;
$batiment = array();
/*$batiment[0] = new Batiment('Pierre Maison',250,'Maison Individuelle',3);
$batiment[1] = new Batiment('Solaris',950,"Immeuble Résidentiel",6);
$batiment[2]= new Batiment('Nova',1300,'Immeuble Mixte',8);
$batiment[3]=new Batiment('Gardien Maison',95,'Maison Fonctionnelle',1);*/


//Liste à ajouter au premier batiment
$maison1 = new Maison("Maison de Pierre",250,"Maison Individuelle",3,true,true);
$cabane1 = new Cabane("Cabane de jardin de Pierre",5,"Cabane De Jardin",1);
$cabane2 = new Cabane("Cabane perchée de Pierre",5,"Cabane De jeu pour enfants",1);
$cabane3 = new Cabane("Cabane de travail de Pierre",15,"Tiny House",2);

$batiment[1]=[$maison1
            ,$cabane1
            ,$cabane2
            ,$cabane3];

//Liste à ajouter au deuxième Batiment 

$immeuble1 = new Immeuble("Résidence Solaris", 950, "Immeuble Résidentiel", 6, true, 24);
$immeuble1->setGarage(true);

$cabane4 = new Cabane("Atelier de peinture suspendu", 7, "Cabane perchée artistique", 1);
$cabane5 = new Cabane("Serre urbaine", 10, "Cabane de jardin écologique", 1);
$cabane6 = new Cabane("Studio d’écriture minimaliste", 20, "Tiny House créative", 2);

$batiment[2] = [$immeuble1, $cabane4, $cabane5, $cabane6];

//Liste à ajouter au troisième batiment;
$immeuble2 = new Immeuble("Tour Nova", 1300, "Immeuble Mixte", 8, true, 40);
$immeuble2->setGarage(false);


$cabane7 = new Cabane("Poste de sécurité modulaire", 9, "Cabane technique", 1);
$cabane8 = new Cabane("Espace zen flottant", 12, "Cabane de repos sur pilotis", 1);
$cabane9 = new Cabane("Bureau nomade", 22, "Tiny House mobile", 2);

$batiment[3] = [$immeuble2, $cabane7, $cabane8, $cabane9];

//Liste à ajouter au quatrième batiment;

$maison2 = new Maison("Maison du gardien", 95, "Maison Fonctionnelle", 1, false, false);
$immeuble3 = new Immeuble("Tour NovaTech", 1400, "Immeuble Tertiaire", 10, true, 50);
$immeuble3->setGarage(false);
$cabane10 = new Cabane("Cabane serveur", 15, "Cabane technique", 1);

$batiment[4] = [$maison2, $immeuble3, $cabane10];

echo "<h1>"."LISTE DES BATIMENTS"."</h1>"."<br>";
$id = isset($_GET['id'])?(int)$_GET['id']:0;



if($id && isset($_GET['id']))
{
    $batimentSelectionne = $batiment[$id];
}else
{
    $batimentSelectionne = null;
}
foreach($batiment as $indexDuBatiment => $batimentGroupe)
{
    $nomAffiche = $batimentGroupe[0]->getNomBatiment();
   echo '<a href="index.php?id='.$indexDuBatiment.'">'.$nomAffiche.'</a><br><br>';
}
if ($batimentSelectionne)
{
    foreach($batimentSelectionne as $indexBatiment)
{
    
        if ($indexBatiment instanceof Maison)
        {
                echo " <strong>Maison :</strong> ".$indexBatiment->getNomBatiment()." - ".$indexBatiment->getSuperficieBatiment()."m² - ".$indexBatiment->getTypeBatiment()." - ".$indexBatiment->getNbEtageBatiment()."étage(s) - ".($indexBatiment->getCheminee()?'true':'false')." - ".($indexBatiment->getGarageMaison()?'true':'false')."<br>";
        }elseif($indexBatiment instanceof Immeuble)
        {
                 echo "<strong> Immeuble</strong> : ".$indexBatiment->getNomBatiment()." - ".$indexBatiment->getSuperficieBatiment()."m² - ".$indexBatiment->getTypeBatiment()." - ".$indexBatiment->getNbEtageBatiment()."étage(s) - ".($indexBatiment->getAscenseur()?'true':'false')." - ".$indexBatiment->getNbAppatement()."appartement(s) - ".($indexBatiment->getGarage()?'true':'false')."<br>";
        }elseif($indexBatiment instanceof Cabane)
        {
                 echo " <strong>Cabane</strong> : ".$indexBatiment->getNomBatiment()." - ".$indexBatiment->getSuperficieBatiment()."m² - ".$indexBatiment->getTypeBatiment()." - ".$indexBatiment->getNbEtageBatiment()."étage(s) "."<br>";
        }
        
    
}
}



