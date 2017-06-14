<?php
namespace SAQService\Types;

class SyncGetDetailProduitV2ResponseType
{

    /**
     * @var SyncGetDetailProduitV2ResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetDetailProduitV2ResponseDataAreaType $DataArea
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
