<?php
namespace SAQService\Types;

class SyncGetDetailProduitV3ResponseType
{

    /**
     * @var SyncGetDetailProduitV3ResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetDetailProduitV3ResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }
    
    public function getDataArea()
    {
        return $this->DataArea;
    }

}
