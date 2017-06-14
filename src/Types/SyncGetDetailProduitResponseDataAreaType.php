<?php
namespace SAQService\Types;

class SyncGetDetailProduitResponseDataAreaType
{

    /**
     * @var getDetailProduitResponse $getDetailProduitResponse
     * @access public
     */
    public $getDetailProduitResponse = null;

    /**
     * @param getDetailProduitResponse $getDetailProduitResponse
     * @access public
     */
    public function __construct($getDetailProduitResponse)
    {
      $this->getDetailProduitResponse = $getDetailProduitResponse;
    }
    
    public function getDetailProduitResponse()
    {
        return $this->getDetailProduitResponse;
    }

}
