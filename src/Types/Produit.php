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
    public function __construct($description, $familleAccordListe, $id, $partNumber, $format, $identiteProduit, $millesime, $pastilleGout, $pays, $prix, $prixReduit, $urlPastille, $quantiteParEmballage, $aromate, $urlAromate, $typeSpiritueux, $urlTypeSpiritueux)
    {
      parent::__construct($description, $familleAccordListe, $id, $partNumber);
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
    
    /**
     * Return Format
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }
   
    /**
     * return IdentiteProduit
     * @return string
     */
    public function getIdentiteProduit()
    {
        return $this->identiteProduit;
    }
    
    /**
     * Return Millesime
     * @return string
     */
    public function getMillesime()
    {
        return $this->millesime;
    }
    
    /**
     * Return PastilleGout
     * @return string
     */
    public function getPastilleGout()
    {
        return $this->pastilleGout;
    }
    
    /**
     * Return Pays
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }
    
    /**
     * Return Prix
     * @return number
     */
    public function getPrix()
    {
        return $this->prix;
    }
    
    /**
     * Return PrixReduit
     * @return number
     */
    public function getPrixReduit()
    {
        return $this->prixReduit;
    }
    
    /**
     * Return UrlPastille
     * @return string
     */
    public function getUrlPastille()
    {
        return $this->urlPastille;
    }
    
    /**
     * Return QuantiteParEmballage
     * @return string
     */
    public function getQuantiteParEmballage()
    {
        return $this->quantiteParEmballage;
    }
    
    /**
     * Return Aromate
     * @return string
     */
    public function getAromate()
    {
        return $this->aromate;
    }
    
    /**
     * Return UrlAromate
     * @return string
     */
    public function getUrlAromate()
    {
        return $this->urlAromate;
    }
    
    /**
     * Return TypeSpiritueux
     * @return string
     */
    public function getTypeSpiritueux()
    {
        return $this->typeSpiritueux;
    }
    
    /**
     * Return UrlTypeSpiritueux
     * @return string
     */
    public function getUrlTypeSpiritueux()
    {
        return $this->urlTypeSpiritueux;
    }
    
}
