 <?php
    
    require_once ('Voiture.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Véhicules</title>
</head>
<body>
    <?php 
        
        $dacia = new Voiture("Vert",52); 
        $dacia->demarrerMoteur();
        $dacia->passerVitesse(3);
        $dacia->ralentir(3);
        $dacia->eteindreMoteur();
        
   ?>
</body>
</html>