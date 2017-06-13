<?php
namespace SAQService\Types;

class SyncGetDetailRecetteType
{

    /**
     * @var SyncGetDetailRecetteDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetDetailRecetteDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
