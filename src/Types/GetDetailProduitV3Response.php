<?php

namespace SAQService\Types;

class GetDetailProduitV3Response
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
    
    public function getProduitsV3()
    {
        return $this->return;
    }

}
