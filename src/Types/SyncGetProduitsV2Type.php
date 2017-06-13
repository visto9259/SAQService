<?php
namespace SAQService\Types;

class SyncGetProduitsV2Type
{

    /**
     * @var SyncGetProduitsV2DataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetProduitsV2DataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
