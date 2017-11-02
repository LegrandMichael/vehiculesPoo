<?php 

require_once("Vehicules.php");
class Voiture extends Vehicules {

    private $reservoir;
    
    public function __construct($couleur, $reservoir) {
        echo "<div>Début du constructeur Voiture</div>";
        parent::__construct($couleur);
        $this->reservoir=$reservoir;
        echo "<div>Fin constructeur Voiture</div>";
    }
        
}


?>