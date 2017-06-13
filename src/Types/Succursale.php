<?php
namespace SAQService\Types;

class Succursale
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
     * @var int $nbProduit
     * @access public
     */
    public $nbProduit = null;

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
     * @param string $adresse
     * @param string $banniere
     * @param float $latitude
     * @param float $longitude
     * @param int $nbProduit
     * @param string $region
     * @param int $succursaleId
     * @param string $telephone
     * @param string $ville
     * @access public
     */
    public function __construct($adresse, $banniere, $latitude, $longitude, $nbProduit, $region, $succursaleId, $telephone, $ville)
    {
      $this->adresse = $adresse;
      $this->banniere = $banniere;
      $this->latitude = $latitude;
      $this->longitude = $longitude;
      $this->nbProduit = $nbProduit;
      $this->region = $region;
      $this->succursaleId = $succursaleId;
      $this->telephone = $telephone;
      $this->ville = $ville;
    }
    
    /**
     * 
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
    
    /**
     * 
     * @return string
     */
    public function getBanniere()
    {
        return $this->banniere;
    }
    
    /**
     * 
     * @return number
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
    
    /**
     * 
     * @return number
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
    
    /**
     * 
     * @return number
     */
    public function getNbProduit()
    {
        return $this->nbProduit;
        
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
    
    
}
