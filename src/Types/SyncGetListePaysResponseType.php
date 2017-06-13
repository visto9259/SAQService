<?php
namespace SAQService\Types;

class SyncGetListePaysResponseType
{

    /**
     * @var SyncGetListePaysResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetListePaysResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }
    
    /**
     * Returns the dataarea
     * @return \SAQService\Types\SyncGetListePaysResponseDataAreaType
     */
    public function getDataArea()
    {
        return $this->DataArea;
    }

}
