<?php
namespace SAQService\Types;

class SyncGetListeTypesPlatType
{

    /**
     * @var SyncGetListeTypesPlatDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetListeTypesPlatDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
