<?php
namespace SAQService\Types;

class SyncGetProduitsParMotCleResponseDataAreaType
{

    /**
     * @var getProduitsParMotCleResponse $getProduitsParMotCleResponse
     * @access public
     */
    public $getProduitsParMotCleResponse = null;

    /**
     * @param getProduitsParMotCleResponse $getProduitsParMotCleResponse
     * @access public
     */
    public function __construct($getProduitsParMotCleResponse)
    {
      $this->getProduitsParMotCleResponse = $getProduitsParMotCleResponse;
    }

}
