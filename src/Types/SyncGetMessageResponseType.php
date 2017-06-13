<?php
namespace SAQService\Types;

class SyncGetMessageResponseType
{

    /**
     * @var SyncGetMessageResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetMessageResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
