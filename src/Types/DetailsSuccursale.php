<?php

namespace SAQService\Types;


class DetailsSuccursale
{

    /**
     * @var string $adresse
     * @access public
     */
    public $adresse = null;

    /**
     * @var string $banniere
     * @access public
     */
    public $banniere = null;

    /**
     * @var float $latitude
     * @access public
     */
    public $latitude = null;

    /**
     * @var float $longitude
     * @access public
     */
    public $longitude = null;

    /**
     * @var string $region
     * @access public
     */
    public $region = null;

    /**
     * @var int $succursaleId
     * @access public
     */
    public $succursaleId = null;

    /**
     * @var string $telephone
     * @access public
     */
    public $telephone = null;

    /**
     * @var string $ville
     * @access public
     */
    public $ville = null;

    /**
     * @var string $fax
     * @access public
     */
    public $fax = null;

    /**
     * @var string $province
     * @access public
     */
    public $province = null;

    /**
     * @var string $codePostal
     * @access public
     */
    public $codePostal = null;

    /**
     * @var string[] $email
     * @access public
     */
    public $email = null;

    /**
     * @var string[] $gestionnaireDeMagasin
     * @access public
     */
    public $gestionnaireDeMagasin = null;

    /**
     * @var string[] $gestionnaireDeRegion
     * @access public
     */
    public $gestionnaireDeRegion = null;

    /**
     * @var boolean $livraison
     * @access public
     */
    public $livraison = null;

    /**
     * @var string[] $service
     * @access public
     */
    public $service = null;

    /**
     * @var horaires $horaires
     * @access public
     */
    public $horaires = null;

    /**
     * @param string $adresse
     * @param string $banniere
     * @param float $latitude
     * @param float $longitude
     * @param string $region
     * @param int $succursaleId
     * @param string $telephone
     * @param string $ville
     * @param string $fax
     * @param string $province
     * @param string $codePostal
     * @param string[] $email
     * @param string[] $gestionnaireDeMagasin
     * @param string[] $gestionnaireDeRegion
     * @param boolean $livraison
     * @param string[] $service
     * @param horaires $horaires
     * @access public
     */
    public function __construct($adresse, $banniere, $latitude, $longitude, $region, $succursaleId, $telephone, $ville, $fax, $province, $codePostal, $email, $gestionnaireDeMagasin, $gestionnaireDeRegion, $livraison, $service, $horaires)
    {
      $this->adresse = $adresse;
      $this->banniere = $banniere;
      $this->latitude = $latitude;
      $this->longitude = $longitude;
      $this->region = $region;
      $this->succursaleId = $succursaleId;
      $this->telephone = $telephone;
      $this->ville = $ville;
      $this->fax = $fax;
      $this->province = $province;
      $this->codePostal = $codePostal;
      $this->email = $email;
      $this->gestionnaireDeMagasin = $gestionnaireDeMagasin;
      $this->gestionnaireDeRegion = $gestionnaireDeRegion;
      $this->livraison = $livraison;
      $this->service = $service;
      $this->horaires = $horaires;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }
    
    public function getBanniere()
    {
        return $this->banniere;
    }
    
    public function getLatitude()
    {
        return $this->latitude;
    }
    
    public function getLongitude()
    {
        return $this->longitude;
    }
    
    public function getRegion()
    {
        return $this->region;
    }
    
    public function getSuccursaleId()
    {
        return $this->succursaleId;
    }
    
    public function getTelephone()
    {
        return $this->telephone;
    }
    
    public function getVille()
    {
        return $this->ville;
    }
    
    public function getFax()
    {
        return $this->fax;
    }
    
    public function getProvince()
    {
        return $this->province;
    }
    
    public function getCodePostal()
    {
        return $this->codePostal;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function getGestionnaireDeMagasin()
    {
        return $this->gestionnaireDeMagasin;
    }
    
    public function getGestionnaireDeRegion()
    {
        return $this->gestionnaireDeRegion;
    }
    
    public function getLivraison()
    {
        return $this->livraison;
    }
    
    public function getService()
    {
        return $this->service;
    }
    
    public function getHoraires()
    {
        return $this->horaires;
    }
    
    
    
    
    
    
}
