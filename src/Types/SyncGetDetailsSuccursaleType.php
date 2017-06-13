<?php
namespace SAQService\Types;

class SyncGetDetailsSuccursaleType
{

    /**
     * @var SyncGetDetailsSuccursaleDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetDetailsSuccursaleDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
