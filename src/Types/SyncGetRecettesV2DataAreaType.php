<?php

namespace SAQService\Types;

class SyncGetRecettesV2DataAreaType
{

    /**
     * @var getRecettesV2 $getRecettesV2
     * @access public
     */
    public $getRecettesV2 = null;

    /**
     * @param getRecettesV2 $getRecettesV2
     * @access public
     */
    public function __construct($getRecettesV2)
    {
      $this->getRecettesV2 = $getRecettesV2;
    }

}
