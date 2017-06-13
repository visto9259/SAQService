<?php
namespace SAQService\Types;

class SyncGetListePastillesType
{

    /**
     * @var SyncGetListePastillesDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetListePastillesDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
