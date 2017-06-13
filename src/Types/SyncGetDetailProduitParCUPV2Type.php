<?php
namespace SAQService\Types;

class SyncGetDetailProduitParCUPV2Type
{

    /**
     * @var SyncGetDetailProduitParCUPV2DataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetDetailProduitParCUPV2DataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
