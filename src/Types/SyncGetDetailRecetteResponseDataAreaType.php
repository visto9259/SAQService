<?php
namespace SAQService\Types;

class SyncGetDetailRecetteResponseDataAreaType
{

    /**
     * @var getDetailRecetteResponse $getDetailRecetteResponse
     * @access public
     */
    public $getDetailRecetteResponse = null;

    /**
     * @param getDetailRecetteResponse $getDetailRecetteResponse
     * @access public
     */
    public function __construct($getDetailRecetteResponse)
    {
      $this->getDetailRecetteResponse = $getDetailRecetteResponse;
    }

}
