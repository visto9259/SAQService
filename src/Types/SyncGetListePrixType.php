<?php
namespace SAQService\Types;

class SyncGetListePrixType
{

    /**
     * @var SyncGetListePrixDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetListePrixDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
