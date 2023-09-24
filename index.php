<?php

use App\Autoloader;
use App\Client\Compte as CompteClient;
use App\Banque\{CompteCourant, CompteEpargne};

require_once 'classes/Autoloader.php';
Autoloader::register();

$client = new CompteClient('Uchiha', 'Madara', 'Bangkok');

// On instancie le compte
$compte1 = new CompteCourant($client, 500, 200);

// $compte2 = new CompteClient();

// $compte1->retirer(200);


var_dump($compte1);

echo "<br><br>";

$compteEpargne = new CompteEpargne($client, 800, 10);

var_dump($compteEpargne);
echo "<br><br>";

var_dump($client);

// $compteEpargne->verserInterets();

// var_dump($compteEpargne);

// $client = new CompteClient;

// var_dump($client);
