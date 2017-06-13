<?php
namespace SAQService\Types;

class SyncGetProduitsParAccordV2DataAreaType
{

    /**
     * @var getProduitsParAccordV2 $getProduitsParAccordV2
     * @access public
     */
    public $getProduitsParAccordV2 = null;

    /**
     * @param getProduitsParAccordV2 $getProduitsParAccordV2
     * @access public
     */
    public function __construct($getProduitsParAccordV2)
    {
      $this->getProduitsParAccordV2 = $getProduitsParAccordV2;
    }

}
