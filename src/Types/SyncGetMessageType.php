<?php
namespace SAQService\Types;

class SyncGetMessageType
{

    /**
     * @var SyncGetMessageDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetMessageDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
