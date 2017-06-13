<?php
namespace SAQService\Types;

class SyncGetDetailProduitParCUPV2ResponseDataAreaType
{

    /**
     * @var getDetailProduitParCUPV2Response $getDetailProduitParCUPV2Response
     * @access public
     */
    public $getDetailProduitParCUPV2Response = null;

    /**
     * @param getDetailProduitParCUPV2Response $getDetailProduitParCUPV2Response
     * @access public
     */
    public function __construct($getDetailProduitParCUPV2Response)
    {
      $this->getDetailProduitParCUPV2Response = $getDetailProduitParCUPV2Response;
    }

}
