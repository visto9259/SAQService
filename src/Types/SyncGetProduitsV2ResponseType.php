<?php
namespace SAQService\Types;

class SyncGetProduitsV2ResponseType
{

    /**
     * @var SyncGetProduitsV2ResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetProduitsV2ResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }
    
    
    /**
     * Return the data area
     * @return \SAQService\Types\SyncGetProduitsV2ResponseDataAreaType
     */
    public function getDataArea()
    {
        return $this->DataArea;    
    }

}
