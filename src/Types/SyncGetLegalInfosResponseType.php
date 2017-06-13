<?php
namespace SAQService\Types;

class SyncGetLegalInfosResponseType
{

    /**
     * @var SyncGetLegalInfosResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetLegalInfosResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
