<?php
namespace SAQService\Types;

class SyncGetProduitsType
{

    /**
     * @var SyncGetProduitsDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetProduitsDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
