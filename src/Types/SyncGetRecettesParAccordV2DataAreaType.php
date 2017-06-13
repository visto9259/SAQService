<?php

namespace SAQService\Types;

class SyncGetRecettesParAccordV2DataAreaType
{

    /**
     * @var getRecettesParAccordV2 $getRecettesParAccordV2
     * @access public
     */
    public $getRecettesParAccordV2 = null;

    /**
     * @param getRecettesParAccordV2 $getRecettesParAccordV2
     * @access public
     */
    public function __construct($getRecettesParAccordV2)
    {
      $this->getRecettesParAccordV2 = $getRecettesParAccordV2;
    }

}
