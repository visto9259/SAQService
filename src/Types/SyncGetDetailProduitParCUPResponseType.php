<?php
namespace SAQService\Types;

class SyncGetDetailProduitParCUPResponseType
{

    /**
     * @var SyncGetDetailProduitParCUPResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetDetailProduitParCUPResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
