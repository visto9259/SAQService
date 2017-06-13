<?php

namespace SAQService\Types;

class SyncGetRecettesDataAreaType
{

    /**
     * @var getRecettes $getRecettes
     * @access public
     */
    public $getRecettes = null;

    /**
     * @param getRecettes $getRecettes
     * @access public
     */
    public function __construct($getRecettes)
    {
      $this->getRecettes = $getRecettes;
    }

}
