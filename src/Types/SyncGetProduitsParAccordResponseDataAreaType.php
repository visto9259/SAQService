<?php
namespace SAQService\Types;

class SyncGetProduitsParAccordResponseDataAreaType
{

    /**
     * @var getProduitsParAccordResponse $getProduitsParAccordResponse
     * @access public
     */
    public $getProduitsParAccordResponse = null;

    /**
     * @param getProduitsParAccordResponse $getProduitsParAccordResponse
     * @access public
     */
    public function __construct($getProduitsParAccordResponse)
    {
      $this->getProduitsParAccordResponse = $getProduitsParAccordResponse;
    }

}
