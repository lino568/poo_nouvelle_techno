<?php
// require_once 'classes/Compte.php';
// require_once 'classes/CompteCourant.php';
// require_once 'classes/CompteEpargne.php';

// On instancie le compte
$compte1 = new Compte("Julien", 500);

/* $compte1->setSolde(600); */


// On écrit dans la propriété titulaire
$compte1->titulaire = "Julien";

// On écrit dans la propriété solde
$compte1->solde = 2500;

// On dépose 100€
$compte1->deposer(100);

echo $compte1->getTitulaire();


?>
<p><?= $compte1->voirSolde() ?></p>
<?php

$compte1->retirer(200);

var_dump($compte1);

echo "<br>";

echo "Le taux d'intérêt du compte est de : " . Compte::TAUX_INTERETS . "%";



/* $compte2 = new Compte("Bobby");

// $compte2->titulaire = "Bobby";

$compte2->solde = 523.52;

var_dump($compte2); */
