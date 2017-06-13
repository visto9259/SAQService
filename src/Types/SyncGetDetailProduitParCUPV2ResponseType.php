<?php
namespace SAQService\Types;

class SyncGetDetailProduitParCUPV2ResponseType
{

    /**
     * @var SyncGetDetailProduitParCUPV2ResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetDetailProduitParCUPV2ResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
