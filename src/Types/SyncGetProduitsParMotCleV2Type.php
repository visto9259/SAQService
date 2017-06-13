<?php
namespace SAQService\Types;

class SyncGetProduitsParMotCleV2Type
{

    /**
     * @var SyncGetProduitsParMotCleV2DataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetProduitsParMotCleV2DataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
