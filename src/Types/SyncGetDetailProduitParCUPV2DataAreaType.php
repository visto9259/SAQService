<?php
namespace SAQService\Types;

class SyncGetDetailProduitParCUPV2DataAreaType
{

    /**
     * @var getDetailProduitParCUPV2 $getDetailProduitParCUPV2
     * @access public
     */
    public $getDetailProduitParCUPV2 = null;

    /**
     * @param getDetailProduitParCUPV2 $getDetailProduitParCUPV2
     * @access public
     */
    public function __construct($getDetailProduitParCUPV2)
    {
      $this->getDetailProduitParCUPV2 = $getDetailProduitParCUPV2;
    }

}
