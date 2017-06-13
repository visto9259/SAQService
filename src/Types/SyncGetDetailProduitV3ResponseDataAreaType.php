<?php
namespace SAQService\Types;

class SyncGetDetailProduitV3ResponseDataAreaType
{

    /**
     * @var getDetailProduitV3Response $getDetailProduitV3Response
     * @access public
     */
    public $getDetailProduitV3Response = null;

    /**
     * @param getDetailProduitV3Response $getDetailProduitV3Response
     * @access public
     */
    public function __construct($getDetailProduitV3Response)
    {
      $this->getDetailProduitV3Response = $getDetailProduitV3Response;
    }

}
