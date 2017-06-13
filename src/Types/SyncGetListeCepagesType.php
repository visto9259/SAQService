<?php
namespace SAQService\Types;

class SyncGetListeCepagesType
{

    /**
     * @var SyncGetListeCepagesDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetListeCepagesDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
