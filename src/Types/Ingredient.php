<?php

namespace SAQService\Types;

class Ingredient extends Reference
{

    /**
     * @var Reference[] $listeAccompagnement
     * @access public
     */
    public $listeAccompagnement = null;

    /**
     * @var Reference[] $listeModeCuisson
     * @access public
     */
    public $listeModeCuisson = null;

    /**
     * @param string $descEn
     * @param string $descrFr
     * @access public
     */
    public function __construct($descEn, $descrFr)
    {
      parent::__construct($descEn, $descrFr);
    }

}
