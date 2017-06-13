<?php
namespace SAQService\Types;

class SyncGetProduitsParMotCleType
{

    /**
     * @var SyncGetProduitsParMotCleDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetProduitsParMotCleDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
