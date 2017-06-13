<?php
namespace SAQService\Types;

class SyncGetPromotionDataAreaType
{

    /**
     * @var getPromotion $getPromotion
     * @access public
     */
    public $getPromotion = null;

    /**
     * @param getPromotion $getPromotion
     * @access public
     */
    public function __construct($getPromotion)
    {
      $this->getPromotion = $getPromotion;
    }

}
