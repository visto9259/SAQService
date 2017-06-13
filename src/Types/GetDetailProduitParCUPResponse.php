<?php

namespace SAQService\Types;

class GetDetailProduitParCUPResponse
{

    /**
     * @var detailProduit $return
     * @access public
     */
    public $return = null;

    /**
     * @param detailProduit $return
     * @access public
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

}
