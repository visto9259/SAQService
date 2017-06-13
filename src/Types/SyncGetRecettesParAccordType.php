<?php

namespace SAQService\Types;

class SyncGetRecettesParAccordType
{

    /**
     * @var SyncGetRecettesParAccordDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetRecettesParAccordDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
