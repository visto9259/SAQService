<?php
namespace SAQService\Types;

class SyncGetDetailProduitType
{

    /**
     * @var SyncGetDetailProduitDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetDetailProduitDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
