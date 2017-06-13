<?php
namespace SAQService\Types;

class SyncGetProduitsParMotCleV2ResponseDataAreaType
{

    /**
     * @var GetProduitsParMotCleV2Response $getProduitsParMotCleV2Response
     * @access public
     */
    public $getProduitsParMotCleV2Response = null;

    /**
     * @param GetProduitsParMotCleV2Response $getProduitsParMotCleV2Response
     * @access public
     */
    public function __construct($getProduitsParMotCleV2Response)
    {
      $this->getProduitsParMotCleV2Response = $getProduitsParMotCleV2Response;
    }
    
    /**
     * Return the response
     * @return \SAQService\Types\GetProduitsParV2MotCleResponse
     */
    public function getProduitsParMotCleV2Response()
    {
        return $this->getProduitsParMotCleV2Response;
    }

}
