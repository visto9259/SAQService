<?php

namespace SAQService\Types;

class Categorie extends ReferenceAvecId
{

    /**
     * @var categorie[] $sousCategorie
     * @access public
     */
    public $sousCategorie = null;

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
    
    /**
     * Return the sub categories
     * @return \SAQService\Types\categorie[]
     */
    public function getSousCategorie()
    {
        return $this->sousCategorie;
    }

}
