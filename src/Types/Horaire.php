<?php
namespace SAQService\Types;

class Horaire
{

    /**
     * @var string $dateDebut
     * @access public
     */
    public $dateDebut = null;

    /**
     * @var string $dateFin
     * @access public
     */
    public $dateFin = null;

    /**
     * @var string $jourDeLaSemaine
     * @access public
     */
    public $jourDeLaSemaine = null;

    /**
     * @var string $heureOuverture
     * @access public
     */
    public $heureOuverture = null;

    /**
     * @var string $heureFermeture
     * @access public
     */
    public $heureFermeture = null;

    /**
     * @var string $dateOuvertureAffichee
     * @access public
     */
    public $dateOuvertureAffichee = null;

    /**
     * @var string $dateFermetureAffichee
     * @access public
     */
    public $dateFermetureAffichee = null;

    /**
     * @var boolean $heureSpeciale
     * @access public
     */
    public $heureSpeciale = null;

    /**
     * @var string $heureSpecialeTitre
     * @access public
     */
    public $heureSpecialeTitre = null;

    /**
     * @param string $dateDebut
     * @param string $dateFin
     * @param string $jourDeLaSemaine
     * @param string $heureOuverture
     * @param string $heureFermeture
     * @param string $dateOuvertureAffichee
     * @param string $dateFermetureAffichee
     * @param boolean $heureSpeciale
     * @param string $heureSpecialeTitre
     * @access public
     */
    public function __construct($dateDebut, $dateFin, $jourDeLaSemaine, $heureOuverture, $heureFermeture, $dateOuvertureAffichee, $dateFermetureAffichee, $heureSpeciale, $heureSpecialeTitre)
    {
      $this->dateDebut = $dateDebut;
      $this->dateFin = $dateFin;
      $this->jourDeLaSemaine = $jourDeLaSemaine;
      $this->heureOuverture = $heureOuverture;
      $this->heureFermeture = $heureFermeture;
      $this->dateOuvertureAffichee = $dateOuvertureAffichee;
      $this->dateFermetureAffichee = $dateFermetureAffichee;
      $this->heureSpeciale = $heureSpeciale;
      $this->heureSpecialeTitre = $heureSpecialeTitre;
    }

}
