<?php
namespace SAQService\Types;

class SyncGetDetailProduitV2Type
{

    /**
     * @var SyncGetDetailProduitV2DataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetDetailProduitV2DataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
