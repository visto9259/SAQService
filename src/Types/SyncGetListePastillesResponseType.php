<?php
namespace SAQService\Types;

class SyncGetListePastillesResponseType
{

    /**
     * @var SyncGetListePastillesResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetListePastillesResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
