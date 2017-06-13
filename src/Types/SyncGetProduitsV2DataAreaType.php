<?php
namespace SAQService\Types;

class SyncGetProduitsV2DataAreaType
{

    /**
     * @var getProduitsV2 $getProduitsV2
     * @access public
     */
    public $getProduitsV2 = null;

    /**
     * @param getProduitsV2 $getProduitsV2
     * @access public
     */
    public function __construct($getProduitsV2)
    {
      $this->getProduitsV2 = $getProduitsV2;
    }

}
