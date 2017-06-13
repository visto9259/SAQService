<?php
namespace SAQService\Types;

class SyncGetProduitsParMotCleResponseType
{

    /**
     * @var SyncGetProduitsParMotCleResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetProduitsParMotCleResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
