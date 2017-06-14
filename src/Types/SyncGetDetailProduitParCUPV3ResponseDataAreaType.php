<?php
namespace SAQService\Types;

class SyncGetDetailProduitParCUPV3ResponseDataAreaType
{

    /**
     * @var getDetailProduitParCUPV3Response $getDetailProduitParCUPV3Response
     * @access public
     */
    public $getDetailProduitParCUPV3Response = null;

    /**
     * @param getDetailProduitParCUPV3Response $getDetailProduitParCUPV3Response
     * @access public
     */
    public function __construct($getDetailProduitParCUPV3Response)
    {
      $this->getDetailProduitParCUPV3Response = $getDetailProduitParCUPV3Response;
    }
    
    public function getDetailProduitParCUPV3Response()
    {
        return $this->getDetailProduitParCUPV3Response;
    }

}
