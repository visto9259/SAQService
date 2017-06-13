<?php

namespace SAQService\Types;

class Produit extends Result
{

    /**
     * @var string $format
     * @access public
     */
    public $format = null;

    /**
     * @var string $identiteProduit
     * @access public
     */
    public $identiteProduit = null;

    /**
     * @var string $millesime
     * @access public
     */
    public $millesime = null;

    /**
     * @var string $pastilleGout
     * @access public
     */
    public $pastilleGout = null;

    /**
     * @var string $pays
     * @access public
     */
    public $pays = null;

    /**
     * @var float $prix
     * @access public
     */
    public $prix = null;

    /**
     * @var float $prixReduit
     * @access public
     */
    public $prixReduit = null;

    /**
     * @var string $urlPastille
     * @access public
     */
    public $urlPastille = null;

    /**
     * @var string $quantiteParEmballage
     * @access public
     */
    public $quantiteParEmballage = null;

    /**
     * @var string $aromate
     * @access public
     */
    public $aromate = null;

    /**
     * @var string $urlAromate
     * @access public
     */
    public $urlAromate = null;

    /**
     * @var string $typeSpiritueux
     * @access public
     */
    public $typeSpiritueux = null;

    /**
     * @var string $urlTypeSpiritueux
     * @access public
     */
    public $urlTypeSpiritueux = null;

    /**
     * @param string $description
     * @param int $id
     * @param string $partNumber
     * @param string $format
     * @param string $identiteProduit
     * @param string $millesime
     * @param string $pastilleGout
     * @param string $pays
     * @param float $prix
     * @param float $prixReduit
     * @param string $urlPastille
     * @param string $quantiteParEmballage
     * @param string $aromate
     * @param string $urlAromate
     * @param string $typeSpiritueux
     * @param string $urlTypeSpiritueux
     * @access public
     */
    public function __construct($description, $id, $partNumber, $format, $identiteProduit, $millesime, $pastilleGout, $pays, $prix, $prixReduit, $urlPastille, $quantiteParEmballage, $aromate, $urlAromate, $typeSpiritueux, $urlTypeSpiritueux)
    {
      parent::__construct($description, $id, $partNumber);
      $this->format = $format;
      $this->identiteProduit = $identiteProduit;
      $this->millesime = $millesime;
      $this->pastilleGout = $pastilleGout;
      $this->pays = $pays;
      $this->prix = $prix;
      $this->prixReduit = $prixReduit;
      $this->urlPastille = $urlPastille;
      $this->quantiteParEmballage = $quantiteParEmballage;
      $this->aromate = $aromate;
      $this->urlAromate = $urlAromate;
      $this->typeSpiritueux = $typeSpiritueux;
      $this->urlTypeSpiritueux = $urlTypeSpiritueux;
    }
    
   

}
