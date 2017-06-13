<?php
namespace SAQService\Types;

class SyncGetDetailProduitV3DataAreaType
{

    /**
     * @var getDetailProduitV3 $getDetailProduitV3
     * @access public
     */
    public $getDetailProduitV3 = null;

    /**
     * @param getDetailProduitV3 $getDetailProduitV3
     * @access public
     */
    public function __construct($getDetailProduitV3)
    {
      $this->getDetailProduitV3 = $getDetailProduitV3;
    }

}
