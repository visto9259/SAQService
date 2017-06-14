<?php
namespace SAQService\Types;

class SyncGetDetailProduitResponseType
{

    /**
     * @var SyncGetDetailProduitResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetDetailProduitResponseDataAreaType $DataArea
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
