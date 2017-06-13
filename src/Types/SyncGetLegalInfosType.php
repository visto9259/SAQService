<?php
namespace SAQService\Types;

class SyncGetLegalInfosType
{

    /**
     * @var SyncGetLegalInfosDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetLegalInfosDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
