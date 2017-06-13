<?php

namespace SAQService\Types;

class SyncGetRecettesV2ResponseType
{

    /**
     * @var SyncGetRecettesV2ResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetRecettesV2ResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
