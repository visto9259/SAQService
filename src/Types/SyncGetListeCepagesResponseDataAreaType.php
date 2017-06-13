<?php
namespace SAQService\Types;

class SyncGetListeCepagesResponseDataAreaType
{

    /**
     * @var getListeCepagesResponse $getListeCepagesResponse
     * @access public
     */
    public $getListeCepagesResponse = null;

    /**
     * @param getListeCepagesResponse $getListeCepagesResponse
     * @access public
     */
    public function __construct($getListeCepagesResponse)
    {
      $this->getListeCepagesResponse = $getListeCepagesResponse;
    }

}
