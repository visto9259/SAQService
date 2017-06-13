<?php
namespace SAQService\Types;

class SyncGetDetailProduitDataAreaType
{

    /**
     * @var getDetailProduit $getDetailProduit
     * @access public
     */
    public $getDetailProduit = null;

    /**
     * @param getDetailProduit $getDetailProduit
     * @access public
     */
    public function __construct($getDetailProduit)
    {
      $this->getDetailProduit = $getDetailProduit;
    }

}
