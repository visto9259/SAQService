<?php
namespace SAQService\Types;

class SyncGetDetailProduitParCUPV3Type
{

    /**
     * @var SyncGetDetailProduitParCUPV3DataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetDetailProduitParCUPV3DataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
