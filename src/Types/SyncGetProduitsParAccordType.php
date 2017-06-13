<?php
namespace SAQService\Types;

class SyncGetProduitsParAccordType
{

    /**
     * @var SyncGetProduitsParAccordDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetProduitsParAccordDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
