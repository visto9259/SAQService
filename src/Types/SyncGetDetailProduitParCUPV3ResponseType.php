<?php
namespace SAQService\Types;

class SyncGetDetailProduitParCUPV3ResponseType
{

    /**
     * @var SyncGetDetailProduitParCUPV3ResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetDetailProduitParCUPV3ResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
