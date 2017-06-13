<?php

namespace SAQService\Types;

class DetailRecette extends Recette
{

    /**
     * @var string $ingredientEtInstructions
     * @access public
     */
    public $ingredientEtInstructions = null;

    /**
     * @var attribute[] $listeAttributs
     * @access public
     */
    public $listeAttributs = null;

    /**
     * @param string $description
     * @param int $id
     * @param string $partNumber
     * @param string $urlPhoto
     * @param string $ingredientEtInstructions
     * @access public
     */
    public function __construct($description, $id, $partNumber, $urlPhoto, $ingredientEtInstructions)
    {
      parent::__construct($description, $id, $partNumber, $urlPhoto);
      $this->ingredientEtInstructions = $ingredientEtInstructions;
    }

}
