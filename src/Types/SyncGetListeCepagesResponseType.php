<?php
namespace SAQService\Types;

class SyncGetListeCepagesResponseType
{

    /**
     * @var SyncGetListeCepagesResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetListeCepagesResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
