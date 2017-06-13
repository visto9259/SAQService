<?php

namespace SAQService\Types;

class SyncGetRecettesParAccordResponseType
{

    /**
     * @var SyncGetRecettesParAccordResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetRecettesParAccordResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
