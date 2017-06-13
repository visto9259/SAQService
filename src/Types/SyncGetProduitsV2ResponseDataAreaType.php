<?php
namespace SAQService\Types;

class SyncGetProduitsV2ResponseDataAreaType
{

    /**
     * @var getProduitsV2Response $getProduitsV2Response
     * @access public
     */
    public $getProduitsV2Response = null;

    /**
     * @param getProduitsV2Response $getProduitsV2Response
     * @access public
     */
    public function __construct($getProduitsV2Response)
    {
      $this->getProduitsV2Response = $getProduitsV2Response;
    }
    
    /**
     * Return the response
     * @return \SAQService\Types\getProduitsV2Response
     */
    public function getProduitsV2Response()
    {
        return $this->getProduitsV2Response;
    }

}
