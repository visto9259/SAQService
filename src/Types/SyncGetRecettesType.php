<?php

namespace SAQService\Types;

class SyncGetRecettesType
{

    /**
     * @var SyncGetRecettesDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetRecettesDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
