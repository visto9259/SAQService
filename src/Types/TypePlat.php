<?php

namespace SAQService\Types;

class TypePlat extends ReferenceAvecId
{

    /**
     * @var ingredient[] $ingredientsPrincipaux
     * @access public
     */
    public $ingredientsPrincipaux = null;

    /**
     * @param string $descEn
     * @param string $descrFr
     * @param string $id
     * @access public
     */
    public function __construct($descEn, $descrFr, $id)
    {
      parent::__construct($descEn, $descrFr, $id);
    }

}
