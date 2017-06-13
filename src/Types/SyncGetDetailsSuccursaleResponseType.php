<?php
namespace SAQService\Types;

class SyncGetDetailsSuccursaleResponseType
{

    /**
     * @var SyncGetDetailsSuccursaleResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetDetailsSuccursaleResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }
    
    /**
     * Return the data
     * @return \SAQService\Types\SyncGetDetailsSuccursaleResponseDataAreaType
     */
    public function getDataArea() {
        return $this->DataArea;
    }

}
