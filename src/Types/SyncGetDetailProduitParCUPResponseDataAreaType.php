<?php
namespace SAQService\Types;

class SyncGetDetailProduitParCUPResponseDataAreaType
{

    /**
     * @var getDetailProduitParCUPResponse $getDetailProduitParCUPResponse
     * @access public
     */
    public $getDetailProduitParCUPResponse = null;

    /**
     * @param getDetailProduitParCUPResponse $getDetailProduitParCUPResponse
     * @access public
     */
    public function __construct($getDetailProduitParCUPResponse)
    {
      $this->getDetailProduitParCUPResponse = $getDetailProduitParCUPResponse;
    }
    
    public function getDetailProduitParCUPResponse()
    {
        return $this->getDetailProduitParCUPResponse;
    }

}
