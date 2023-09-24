<?php

namespace App\Banque;

use App\Client\Compte as CompteClient;

/**
 * Compte avec taux d'intérêts
 */
class CompteEpargne extends Compte
{
  /**
   * Taux d'intérêts du compte
   */
  private $taux_interets;

  /**
   * Constructeur du compte épargne
   *
   * @param CompteClient $compte Compte client du titulaire
   * @param float $montant Montant su solde à l'ouverture
   * @param integer $taux_interets Taux d'intérêt
   */
  public function __construct(CompteClient $compte, float $montant, int $taux_interets)
  {

    // On transfère les valeurs nécessaires au constructeur parents
    parent::__construct($compte, $montant);

    $this->taux_interets = $taux_interets;
  }

  /**
   * Get taux d'intérêts du compte
   */
  public function getTauxInterets(): int
  {
    return $this->taux_interets;
  }

  /**
   * Set taux d'intérêts du compte
   *
   * @return  self
   */
  public function setTauxInterets(int $taux_interets): self
  {
    if ($taux_interets >= 0) {
      $this->taux_interets = $taux_interets;
    }
    return $this;
  }

  public function verserInterets()
  {
    $this->solde += $this->solde * $this->taux_interets / 100;
  }
}
