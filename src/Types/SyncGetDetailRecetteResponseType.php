<?php
namespace SAQService\Types;

class SyncGetDetailRecetteResponseType
{

    /**
     * @var SyncGetDetailRecetteResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetDetailRecetteResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
