<?php

namespace SAQService\Types;

class SyncGetRecettesParAccordV2ResponseType
{

    /**
     * @var SyncGetRecettesParAccordV2ResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetRecettesParAccordV2ResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
