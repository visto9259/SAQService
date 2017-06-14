<?php
namespace SAQService\Types;

class SyncGetDetailProduitV2ResponseDataAreaType
{

    /**
     * @var getDetailProduitV2Response $getDetailProduitV2Response
     * @access public
     */
    public $getDetailProduitV2Response = null;

    /**
     * @param getDetailProduitV2Response $getDetailProduitV2Response
     * @access public
     */
    public function __construct($getDetailProduitV2Response)
    {
      $this->getDetailProduitV2Response = $getDetailProduitV2Response;
    }

    public function getDetailProduitV2Response()
    {
        return $this->getDetailProduitV2Response;
    }
}
