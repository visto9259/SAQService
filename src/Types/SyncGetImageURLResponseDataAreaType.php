<?php
namespace SAQService\Types;

class SyncGetImageURLResponseDataAreaType
{

    /**
     * @var getImageURLResponse $getImageURLResponse
     * @access public
     */
    public $getImageURLResponse = null;

    /**
     * @param getImageURLResponse $getImageURLResponse
     * @access public
     */
    public function __construct($getImageURLResponse)
    {
      $this->getImageURLResponse = $getImageURLResponse;
    }

}
