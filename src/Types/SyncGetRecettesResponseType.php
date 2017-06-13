<?php

namespace SAQService\Types;

class SyncGetRecettesResponseType
{

    /**
     * @var SyncGetRecettesResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetRecettesResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
