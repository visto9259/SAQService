<?php
namespace SAQService\Types;

class SyncGetListeCategoriesResponseType
{

    /**
     * @var SyncGetListeCategoriesResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetListeCategoriesResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }
    
    /**
     * Returns the dataarea
     * @return \SAQService\Types\SyncGetListeCategoriesResponseDataAreaType
     */
    public function getDataArea() 
    {
        return $this->DataArea;
    }

}
