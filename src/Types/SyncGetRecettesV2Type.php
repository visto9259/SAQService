<?php

namespace SAQService\Types;

class SyncGetRecettesV2Type
{

    /**
     * @var SyncGetRecettesV2DataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetRecettesV2DataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
