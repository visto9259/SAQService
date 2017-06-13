<?php
namespace SAQService\Types;

class SyncGetProduitsResponseType
{

    /**
     * @var SyncGetProduitsResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetProduitsResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
