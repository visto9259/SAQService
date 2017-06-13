<?php
namespace SAQService\Types;

class SyncGetProduitsParMotCleDataAreaType
{

    /**
     * @var getProduitsParMotCle $getProduitsParMotCle
     * @access public
     */
    public $getProduitsParMotCle = null;

    /**
     * @param getProduitsParMotCle $getProduitsParMotCle
     * @access public
     */
    public function __construct($getProduitsParMotCle)
    {
      $this->getProduitsParMotCle = $getProduitsParMotCle;
    }

}
