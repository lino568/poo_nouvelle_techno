<?php
require_once 'classes/Compte.php';
require_once 'classes/CompteCourant.php';
require_once 'classes/CompteEpargne.php';

// On instancie le compte
$compte1 = new CompteCourant('Julien', 500, 200);
$compte1->retirer(200);

echo "<br>";

var_dump($compte1);

$compteEpargne = new CompteEpargne('Julien', 800, 10);

var_dump($compteEpargne);

$compteEpargne->verserInterets();

var_dump($compteEpargne);
