<?php

namespace SAQService\Types;

class SyncGetSuccursalesType
{

    /**
     * @var SyncGetSuccursalesDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetSuccursalesDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
