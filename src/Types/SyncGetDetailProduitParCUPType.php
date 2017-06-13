<?php
namespace SAQService\Types;

class SyncGetDetailProduitParCUPType
{

    /**
     * @var SyncGetDetailProduitParCUPDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetDetailProduitParCUPDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
