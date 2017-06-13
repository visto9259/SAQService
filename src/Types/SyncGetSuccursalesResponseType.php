<?php
namespace SAQService\Types;

class SyncGetSuccursalesResponseType
{

    /**
     * @var SyncGetSuccursalesResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetSuccursalesResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }
    
    /**
     * Returns the dataarea of the response
     * @return \SAQService\Types\SyncGetSuccursalesResponseDataAreaType
     */
    public function getDataArea()
    {
        return $this->DataArea;
    }

}
