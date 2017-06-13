<?php
namespace SAQService\Types;

class SyncGetDetailProduitV3Type
{

    /**
     * @var SyncGetDetailProduitV3DataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetDetailProduitV3DataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
