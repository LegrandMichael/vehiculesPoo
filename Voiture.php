<?php 

require_once("Vehicules.php");
class Voiture extends Vehicules {

    private $reservoir;
    private $moteur;
    private $vitesse;
    private $pedale;
    private $start;
    private $stop;
    
    public function __construct($couleur, $reservoir) {
        echo "<div>Début du constructeur Voiture</div>";
        parent::__construct($couleur);
        $this->reservoir=$reservoir;
        echo "<div>Fin constructeur Voiture</div><br>";
    }


    
    public function demarrerMoteur() {
        echo "<div>La voiture est démarrée</div><br>";
    }

    public function eteindreMoteur() {
        echo "<div>La voiture est arretée</div><br>";
    }

    public function passerVitesse($vitesse) {
        $this->vitesse = $vitesse;
            for ($i = 1; $i <= $vitesse; $i++) {
                $this->debrayer();
                echo "<div>Je passe la vitesse ". $i."</div>";
                $this->embrayer();
                $this->accelerer();
            }
    }

    public function ralentir($vitesse) {
        $this->vitesse = $vitesse;
            for ($i = $vitesse; $i > 0; $i--) {
                $this->debrayer();
                echo "<div>Je passe la vitesse ". $i."</div>";
                $this->embrayer();
                $this->decelerer();
            }
    }

    public function debrayer() {
        echo "<div>Je débraye</div>";
    }

    public function embrayer() {
        echo "<div>J'embraye</div>";
    }

    public function accelerer(){
        echo "<div>J'accélère</div><br>";
    }

    public function decelerer(){
        echo "<div>Je décélère</div><br>";
    }

        
}


?>