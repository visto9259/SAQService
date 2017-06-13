<?php
namespace SAQService\Types;

class SyncGetProduitsParMotCleV2ResponseType
{

    /**
     * @var SyncGetProduitsParMotCleV2ResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetProduitsParMotCleV2ResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }
    
    /**
     * Returns the dataarea
     * @return \SAQService\Types\SyncGetProduitsParMotCleV2ResponseDataAreaType
     */
    public function getDataArea()
    {
        return $this->DataArea;
    }

}
