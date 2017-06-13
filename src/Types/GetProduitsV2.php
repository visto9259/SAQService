<?php

namespace SAQService\Types;

class GetProduitsV2
{

    /**
     * @var string $lang
     * @access public
     */
    public $lang = null;

    /**
     * @var string $categorie1
     * @access public
     */
    public $categorie1 = null;

    /**
     * @var string $categorie2
     * @access public
     */
    public $categorie2 = null;

    /**
     * @var string $categorie3
     * @access public
     */
    public $categorie3 = null;

    /**
     * @var string $pays
     * @access public
     */
    public $pays = null;

    /**
     * @var string $region
     * @access public
     */
    public $region = null;

    /**
     * @var string $pastille
     * @access public
     */
    public $pastille = null;

    /**
     * @var string $prix
     * @access public
     */
    public $prix = null;

    /**
     * @var boolean $enRabais
     * @access public
     */
    public $enRabais = null;

    /**
     * @var string $cepage
     * @access public
     */
    public $cepage = null;

    /**
     * @var typeTri $tri
     * @access public
     */
    public $tri = null;

    /**
     * @var int $premierIndex
     * @access public
     */
    public $premierIndex = null;

    /**
     * @var int $maxDesResultats
     * @access public
     */
    public $maxDesResultats = null;

    /**
     * @param string $lang
     * @param string $categorie1
     * @param string $categorie2
     * @param string $categorie3
     * @param string $pays
     * @param string $region
     * @param string $pastille
     * @param string $prix
     * @param boolean $enRabais
     * @param string $cepage
     * @param typeTri $tri
     * @param int $premierIndex
     * @param int $maxDesResultats
     * @access public
     */
    public function __construct($lang, $categorie1, $categorie2, $categorie3, $pays, $region, $pastille, $prix, $enRabais, $cepage, $tri, $premierIndex, $maxDesResultats)
    {
      $this->lang = $lang;
      $this->categorie1 = $categorie1;
      $this->categorie2 = $categorie2;
      $this->categorie3 = $categorie3;
      $this->pays = $pays;
      $this->region = $region;
      $this->pastille = $pastille;
      $this->prix = $prix;
      $this->enRabais = $enRabais;
      $this->cepage = $cepage;
      $this->tri = $tri;
      $this->premierIndex = $premierIndex;
      $this->maxDesResultats = $maxDesResultats;
    }

}
