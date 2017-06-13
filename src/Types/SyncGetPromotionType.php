<?php

namespace SAQService\Types;

class SyncGetPromotionType
{

    /**
     * @var SyncGetPromotionDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetPromotionDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
