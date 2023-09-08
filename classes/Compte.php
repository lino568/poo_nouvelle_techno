<?php

/**
 * Objet compte bancaire
 */
class Compte
{
  // Propriétés 
  /**
   * Titulaire de compte
   *
   * @var [string]
   */
  public $titulaire;

  /**
   * Solde du compte
   *
   * @var [float]
   */
  public $solde;

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
    if ($montant > 0 && $this->solde > 0) {
      $this->solde -= $montant;
    } else {
      echo "Retrait impossible";
    }
  }
}
