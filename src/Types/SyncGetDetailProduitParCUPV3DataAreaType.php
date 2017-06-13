<?php
namespace SAQService\Types;

class SyncGetDetailProduitParCUPV3DataAreaType
{

    /**
     * @var getDetailProduitParCUPV3 $getDetailProduitParCUPV3
     * @access public
     */
    public $getDetailProduitParCUPV3 = null;

    /**
     * @param getDetailProduitParCUPV3 $getDetailProduitParCUPV3
     * @access public
     */
    public function __construct($getDetailProduitParCUPV3)
    {
      $this->getDetailProduitParCUPV3 = $getDetailProduitParCUPV3;
    }

}
