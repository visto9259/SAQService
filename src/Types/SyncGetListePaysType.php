<?php
namespace SAQService\Types;

class SyncGetListePaysType
{

    /**
     * @var SyncGetListePaysDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetListePaysDataAreaType $DataArea
     * @access public
     */
    public function __construct(SyncGetListePaysDataAreaType $DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
