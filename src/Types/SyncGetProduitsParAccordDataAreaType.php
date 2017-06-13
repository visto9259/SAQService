<?php
namespace SAQService\Types;

class SyncGetProduitsParAccordDataAreaType
{

    /**
     * @var getProduitsParAccord $getProduitsParAccord
     * @access public
     */
    public $getProduitsParAccord = null;

    /**
     * @param getProduitsParAccord $getProduitsParAccord
     * @access public
     */
    public function __construct($getProduitsParAccord)
    {
      $this->getProduitsParAccord = $getProduitsParAccord;
    }

}
