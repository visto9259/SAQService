<?php
namespace SAQService\Types;

class SyncGetListeTypesPlatResponseType
{

    /**
     * @var SyncGetListeTypesPlatResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetListeTypesPlatResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
