<?php
namespace SAQService\Types;

class SyncGetPromotionResponseDataAreaType
{

    /**
     * @var getPromotionResponse $getPromotionResponse
     * @access public
     */
    public $getPromotionResponse = null;

    /**
     * @param getPromotionResponse $getPromotionResponse
     * @access public
     */
    public function __construct($getPromotionResponse)
    {
      $this->getPromotionResponse = $getPromotionResponse;
    }

}
