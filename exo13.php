<html>

<head>
    <style>
        .contain-infos {
            display: flex;
            flex-direction: row;
            align-items: flex-end;
        }

        .contain-infos div {
            background-color: #EEEEEE;
            padding: 10px;
            margin: 0 5px;
        }

        .test {
            display: flex;
        }
    </style>
</head>

</html>

<?php
// Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
// vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
// des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
// instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
// véhicule.
// v1 ➔ "Peugeot","408",5
// v2 ➔ "Citroën","C4",3
// Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de
// tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments
// suivants :

class Voiture
{
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle;
    private $_estDemarre;

    public function __construct($marque, $modele, $nbPortes, $vitesseActuelle = 0, $estDemarre = false)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle = $vitesseActuelle;
        $this->_estDemarre = $estDemarre;
    }

    public function setMarque($marque)
    {
        $this->_marque = $marque;
    }

    public function setModele($modele)
    {
        $this->_modele = $modele;
    }

    public function setNbPortes($nbPortes)
    {
        $this->_nbPortes = $nbPortes;
    }

    public function setVitesseActuelle($vitesseActuelle)
    {
        $this->_vitesseActuelle = $vitesseActuelle;
    }

    public function getMarque()
    {
        return $this->_marque;
    }

    public function getModele()
    {
        return $this->_modele;
    }

    public function getNbPortes()
    {
        return $this->_nbPortes;
    }

    public function getVitesseActuelle()
    {
        return $this->_vitesseActuelle;
    }

    public function estDemarrer()
    {
        if ($this->_estDemarre == true) {
            return 'Le véhicule ' . $this->getMarque() . ' ' . $this->getModele() . ' est démarré<br>';
        } else {
            return 'Le véhicule ' . $this->getMarque() . ' ' . $this->getModele() . ' est à l\'arrêt<br>';
        }
    }

    public function demarrer()
    {
        if ($this->_estDemarre) {
            return 'Le véhicule  ' . $this->getMarque() . ' ' . $this->getModele() . ' est déjà démarrer<br>';
        } else {
            $this->_estDemarre = true;
            return 'Le véhicule  ' . $this->getMarque() . ' ' . $this->getModele() . ' démarre<br>';
        }
    }

    public function accelerer($vitesse)
    {
        if ($this->_estDemarre == true) {
            $this->_vitesseActuelle += $vitesse;
            return 'Le véhicule ' . $this->getMarque() . ' ' . $this->getModele() . ' accélère de ' . $vitesse . ' km / h<br>';
        } else {
            echo 'Le véhicule ' . $this->getMarque() . ' ' . $this->getModele() . ' veut accélérer de ' . $vitesse . '<br>';
            echo 'Pour accélérer, il faut démarrer le véhicule ' . $this->getMarque() . ' ' . $this->getModele() . ' !<br>';
        }
    }

    public function ralentir($vitesse)
    {
        if ($this->_vitesseActuelle > $vitesse) {
            $this->setVitesseActuelle = 0;
            return "Vous avez ralenti la vitesse de votre véhicule<br>";
        } else {
            return "Votre véhicule à déjà ralentis<br>";
        }
    }

    public function stopper()
    {
        if (!$this->_estDemarre) {
            return 'Le véhicule ' . $this->getMarque() . ' ' . $this->getModele() . ' est déjà arrêté<br>';
        } else {
            $this->_estDemarre = false;
            $this->_vitesseActuelle = 0;
            return 'Le véhicule ' . $this->getMarque() . ' ' . $this->getModele() . ' est stoppé<br>';
        }
    }

    public function __toString()
    {
        return '<br>*******************<br>Nom et modèle du véhicule : ' . $this->getMarque() . ' ' . $this->getModele() . '<br>Nombre de portes : ' . $this->getNbPortes() . '<br>' . $this->estDemarrer() . 'Sa vitesse actuelle est de : ' . $this->getVitesseActuelle() . ' km / h';
    }
}

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);

echo '<div class="contain-infos">';
echo '<div>';
echo $v1->demarrer();
echo $v1->accelerer(50);
echo $v2->demarrer();
echo $v2->stopper();
echo $v2->accelerer(20);
echo 'La vitesse du véhicule ' . $v1->getMarque() . ' ' . $v1->getModele() . ' est de : ' . $v1->getVitesseActuelle() . ' km /h<br>';
echo 'La vitesse du véhicule ' . $v2->getMarque() . ' ' . $v2->getModele() . ' est de : ' . $v2->getVitesseActuelle() . ' km /h<br>';
echo '</div>';

echo '<div class="test">';
echo '<div>Infos véhicule 1' . $v1 . '</div>';
echo '<div>Infos véhicule 2' . $v2 . '</div>';
echo '</div>';
echo '</div>';
