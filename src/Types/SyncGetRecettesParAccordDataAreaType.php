<?php

namespace SAQService\Types;

class SyncGetRecettesParAccordDataAreaType
{

    /**
     * @var getRecettesParAccord $getRecettesParAccord
     * @access public
     */
    public $getRecettesParAccord = null;

    /**
     * @param getRecettesParAccord $getRecettesParAccord
     * @access public
     */
    public function __construct($getRecettesParAccord)
    {
      $this->getRecettesParAccord = $getRecettesParAccord;
    }

}
