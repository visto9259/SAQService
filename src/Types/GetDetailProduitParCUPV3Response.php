<?php

namespace SAQService\Types;

class GetDetailProduitParCUPV3Response
{

    /**
     * @var DetailProduitV3 $return
     * @access public
     */
    public $return = null;

    /**
     * @param DetailProduitV3 $return
     * @access public
     */
    public function __construct(DetailProduitV3 $return)
    {
      $this->return = $return;
    }
    
    /**
     * Returns DetailProduitV3
     * @return \SAQService\Types\DetailProduitV3
     */
    public function getDetailProduitV3()
    {
        return $this->return;
    }

}
