<?php

/**
 * Objet compte bancaire
 */
abstract class Compte
{
  // Propriétés 
  /**
   * Titulaire de compte
   *
   * @var [string]
   */
  private $titulaire;

  /**
   * Solde du compte
   *
   * @var [float]
   */
  protected $solde;

  // Constantes
  /* const TAUX_INTERETS = 5; */
  private const TAUX_INTERETS = 5;

  // Méthodes
  /**
   * Constructeur de compte bancaire
   *
   * @param string $nom Nom de titulaire
   * @param float $Montant Montant du solde à l'ouverture
   */
  public function __construct(string $nom, float $montant = 0)
  {
    // On attribue le nom à la propropriété titulaire de l'instance crée
    $this->titulaire = $nom;

    // On attribue le montant à la propriété solde
    $this->solde = $montant;
  }

  /**
   * Méthode magique pour la conversion en chaine de caractères
   *
   * @return string
   */
  public function __toString()
  {
    return "Vous visualisez le compte de $this->titulaire, le solde est de $this->solde euros";
  }

  //Accesseurs

  /**
   * Getter de Titulaire - Retourne la valeur de titulaire du compte
   *
   * @return string
   */
  public function getTitulaire(): string
  {
    return $this->titulaire;
  }

  /**
   * Modofie le nom du titulaire et retourne l'objet
   *
   * @param string $nom Nom du titulaire
   * @return Compte Compte bancaire
   */
  public function setTitulaire(string $nom): self
  {
    // On vérifie si on a un titulaire
    if ($nom != "") {
      $this->titulaire = $nom;
    }
    return $this;
  }

  /**
   * Retourne le solde du compte
   *
   * @return float Solde du compte
   */
  public function getSolde(): float
  {
    return $this->solde;
  }

  /**
   * Modifie le solde du compte
   *
   * @param float $montant Montant du solde
   * @return Compte Compte bancaire
   */
  public function setSolde(float $montant): self
  {
    if ($montant >= 0) {
      $this->solde = $montant;
    }
    return $this;
  }

  /**
   * Déposer de l'argent sur le compte
   *
   * @param float $montant Montant déposé
   * @return void
   */
  public function deposer(float $montant)
  {
    // on vérifie si le montant est positif
    if ($montant > 0) {
      $this->solde += $montant;
    }
  }

  /**
   * Retourne une chaine de caractères affichant le solde
   *
   * @return stirng
   */
  public function voirSolde()
  {
    return "Le solde du compte est de $this->solde €";
  }

  /**
   * Retirer un montant du solde du compte
   *
   * @param float $montant Montant à retirer
   * @return void
   */
  public function retirer(float $montant)
  {
    // On vérifie le montant et le solde
    if ($montant > 0 && $this->solde >= $montant) {
      $this->solde -= $montant;
    } else {
      echo "Retrait impossible";
    }
  }
}
