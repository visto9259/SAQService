<?php
namespace SAQService\Types;

class SyncGetMessageResponseDataAreaType
{

    /**
     * @var getMessageResponse $getMessageResponse
     * @access public
     */
    public $getMessageResponse = null;

    /**
     * @param getMessageResponse $getMessageResponse
     * @access public
     */
    public function __construct($getMessageResponse)
    {
      $this->getMessageResponse = $getMessageResponse;
    }

}
