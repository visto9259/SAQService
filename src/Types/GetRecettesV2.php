<?php

namespace SAQService\Types;

class GetRecettesV2
{

    /**
     * @var string $lang
     * @access public
     */
    public $lang = null;

    /**
     * @var string $typePlat
     * @access public
     */
    public $typePlat = null;

    /**
     * @var string $ingredientPrincipal
     * @access public
     */
    public $ingredientPrincipal = null;

    /**
     * @var string $accompagnement
     * @access public
     */
    public $accompagnement = null;

    /**
     * @var string $modeCuisson
     * @access public
     */
    public $modeCuisson = null;

    /**
     * @var int $premierIndex
     * @access public
     */
    public $premierIndex = null;

    /**
     * @var int $maxResults
     * @access public
     */
    public $maxResults = null;

    /**
     * @param string $lang
     * @param string $typePlat
     * @param string $ingredientPrincipal
     * @param string $accompagnement
     * @param string $modeCuisson
     * @param int $premierIndex
     * @param int $maxResults
     * @access public
     */
    public function __construct($lang, $typePlat, $ingredientPrincipal, $accompagnement, $modeCuisson, $premierIndex, $maxResults)
    {
      $this->lang = $lang;
      $this->typePlat = $typePlat;
      $this->ingredientPrincipal = $ingredientPrincipal;
      $this->accompagnement = $accompagnement;
      $this->modeCuisson = $modeCuisson;
      $this->premierIndex = $premierIndex;
      $this->maxResults = $maxResults;
    }

}
