<?php
namespace SAQService\Types;

use SAQBot\Types\GetProduitsParMotCleV2;

class SyncGetProduitsParMotCleV2DataAreaType
{

    /**
     * @var GetProduitsParMotCleV2 $getProduitsParMotCleV2
     * @access public
     */
    public $getProduitsParMotCleV2 = null;

    /**
     * @param GetProduitsParMotCleV2 $getProduitsParMotCleV2
     * @access public
     */
    public function __construct($getProduitsParMotCleV2)
    {
      $this->getProduitsParMotCleV2 = $getProduitsParMotCleV2;
    }

}
