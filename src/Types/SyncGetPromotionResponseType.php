<?php
namespace SAQService\Types;

class SyncGetPromotionResponseType
{

    /**
     * @var SyncGetPromotionResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetPromotionResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
