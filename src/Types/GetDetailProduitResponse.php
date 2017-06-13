<?php

namespace SAQService\Types;

class GetDetailProduitResponse
{

    /**
     * @var DetailProduit $return
     * @access public
     */
    public $return = null;

    /**
     * @param DetailProduit $return
     * @access public
     */
    public function __construct(DetailProduit $return)
    {
      $this->return = $return;
    }

}
