<?php
namespace SAQService\Types;

class SyncGetDetailProduitV2DataAreaType
{

    /**
     * @var getDetailProduitV2 $getDetailProduitV2
     * @access public
     */
    public $getDetailProduitV2 = null;

    /**
     * @param getDetailProduitV2 $getDetailProduitV2
     * @access public
     */
    public function __construct($getDetailProduitV2)
    {
      $this->getDetailProduitV2 = $getDetailProduitV2;
    }

}
