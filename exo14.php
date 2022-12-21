<?php
// Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec
// qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
// Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques
// suivantes :
// Peugeot 408 : $v1 = new Voiture("Peugeot","408");
// BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
// Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :
// echo $v1->getInfos()."<br/>";
// echo $ve1->getInfos()."<br/>";

class Voiture
{
    public string $_marque;
    public string $_modele;

    public function __construct($marque, $modele)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
    }

    public function setMarque($marque)
    {
        $this->_marque = $marque;
    }

    public function setModele($modele)
    {
        $this->_modele = $modele;
    }

    public function getMarque()
    {
        return $this->_marque;
    }

    public function getModele()
    {
        return $this->_modele;
    }

    public function getInfos()
    {
        return 'Le véhicule classique est : ' . $this->getMarque() . ' ' . $this->getModele() . '';
    }
}

class VoitureElec extends Voiture //création d'une class qui est l'extension de la class parent
{
    private int $_autonomie;

    function __construct($marque, $modele, $autonomie)
    {
        parent::__construct($marque, $modele);
        $this->_autonomie = $autonomie;
    }

    public function setAutonomie($autonomie)
    {
        $this->_autonomie = $autonomie;
    }

    public function getAutonomie()
    {
        return $this->_autonomie;
    }

    public function getInfos()
    {
        return 'Le véhicule électrique est : ' . $this->getMarque() . ' ' . $this->getModele() . ' qui dispose d\'une autonomie de ' . $this->getAutonomie() . 'km';
    }
}

$v1 = new Voiture("Peugeot", "408");
$ve1 = new VoitureElec("BMW", "I3", 100);

echo $v1->getInfos() . "<br/>";
echo $ve1->getInfos() . "<br/>";
