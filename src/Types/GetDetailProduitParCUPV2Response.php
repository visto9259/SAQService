<?php

namespace SAQService\Types;

class GetDetailProduitParCUPV2Response
{

    /**
     * @var DetailProduitV2 $return
     * @access public
     */
    public $return = null;

    /**
     * @param DetailProduitV2 $return
     * @access public
     */
    public function __construct(DetailProduitV2 $return)
    {
      $this->return = $return;
    }

}
