<?php
namespace SAQService\Types;

class SyncGetProduitsParAccordV2Type
{

    /**
     * @var SyncGetProduitsParAccordV2DataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetProduitsParAccordV2DataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
