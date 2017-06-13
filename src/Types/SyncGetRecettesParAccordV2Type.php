<?php

namespace SAQService\Types;

class SyncGetRecettesParAccordV2Type
{

    /**
     * @var SyncGetRecettesParAccordV2DataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetRecettesParAccordV2DataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
