<?php
namespace SAQService\Types;

class SyncGetProduitsParAccordV2ResponseType
{

    /**
     * @var SyncGetProduitsParAccordV2ResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetProduitsParAccordV2ResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
