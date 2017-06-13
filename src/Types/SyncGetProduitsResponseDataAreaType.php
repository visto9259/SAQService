<?php
namespace SAQService\Types;

class SyncGetProduitsResponseDataAreaType
{

    /**
     * @var getProduitsResponse $getProduitsResponse
     * @access public
     */
    public $getProduitsResponse = null;

    /**
     * @param getProduitsResponse $getProduitsResponse
     * @access public
     */
    public function __construct($getProduitsResponse)
    {
      $this->getProduitsResponse = $getProduitsResponse;
    }

}
