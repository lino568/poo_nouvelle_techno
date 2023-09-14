<?php

/**
 * Compte bancaire (hérite de compte)
 */
class CompteCourant extends Compte
{
  private $decouvert;

  /**
   * Constructeur de compte courant
   *
   * @param string $nom Nom du titulaire
   * @param float $montant Montant du solde à l'ouverture
   * @param integer $decouvert Découvert autorisé
   */
  public function __construct(string $nom, float $montant, int $decouvert)
  {
    // On transfère les informations nécessaires au constructeur de compte
    parent::__construct($nom, $montant);

    $this->decouvert = $decouvert;
  }

  public function getDecouvert(): int
  {
    return $this->decouvert;
  }

  public function setDecouvert(int $montant): self
  {
    if ($montant >= 0) {
      $this->decouvert = $montant;
    }
    return $this;
  }


  public function retirer(float $montant)
  {
    // On vérifie si le découvert permet le retrait
    if ($montant > 0 && $this->solde + $this->decouvert >= $montant) {
      $this->solde -= $montant;
    } else {
      echo "Solde insuffisant";
    }
  }
}
