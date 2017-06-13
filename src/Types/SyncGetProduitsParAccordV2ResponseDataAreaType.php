<?php
namespace SAQService\Types;

class SyncGetProduitsParAccordV2ResponseDataAreaType
{

    /**
     * @var getProduitsParAccordV2Response $getProduitsParAccordV2Response
     * @access public
     */
    public $getProduitsParAccordV2Response = null;

    /**
     * @param getProduitsParAccordV2Response $getProduitsParAccordV2Response
     * @access public
     */
    public function __construct($getProduitsParAccordV2Response)
    {
      $this->getProduitsParAccordV2Response = $getProduitsParAccordV2Response;
    }

}
