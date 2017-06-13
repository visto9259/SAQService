<?php
namespace SAQService\Types;

class SyncGetImageURLType
{

    /**
     * @var SyncGetImageURLDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetImageURLDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
