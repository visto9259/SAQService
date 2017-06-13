<?php
namespace SAQService\Types;

class SyncGetListeCategoriesType
{

    /**
     * @var SyncGetListeCategoriesDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetListeCategoriesDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
