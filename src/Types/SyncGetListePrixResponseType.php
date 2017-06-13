<?php
namespace SAQService\Types;

class SyncGetListePrixResponseType
{

    /**
     * @var SyncGetListePrixResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetListePrixResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
