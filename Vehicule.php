<?php

class Vehicule {

    private $couleur;

    public function __construct($couleur) {
        echo "<div>Début constructeur Vehicules</div>";
        $this->couleur=$couleur;
        echo "<div>Fin constructeur Vehicules</div>";
    }
}


?>