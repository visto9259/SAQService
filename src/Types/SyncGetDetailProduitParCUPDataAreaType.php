<?php
namespace SAQService\Types;

class SyncGetDetailProduitParCUPDataAreaType
{

    /**
     * @var getDetailProduitParCUP $getDetailProduitParCUP
     * @access public
     */
    public $getDetailProduitParCUP = null;

    /**
     * @param getDetailProduitParCUP $getDetailProduitParCUP
     * @access public
     */
    public function __construct($getDetailProduitParCUP)
    {
      $this->getDetailProduitParCUP = $getDetailProduitParCUP;
    }

}
