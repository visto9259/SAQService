<?php
namespace SAQService\Types;

class SyncGetProduitsDataAreaType
{

    /**
     * @var getProduits $getProduits
     * @access public
     */
    public $getProduits = null;

    /**
     * @param getProduits $getProduits
     * @access public
     */
    public function __construct($getProduits)
    {
      $this->getProduits = $getProduits;
    }

}
