<?php

namespace SAQService\Types;

class GetDetailProduitParCUP
{

    /**
     * @var string $arg0
     * @access public
     */
    public $arg0 = null;

    /**
     * @var string $arg1
     * @access public
     */
    public $arg1 = null;

    /**
     * @param string $arg0
     * @param string $arg1
     * @access public
     */
    public function __construct($arg0, $arg1)
    {
      $this->arg0 = $arg0;
      $this->arg1 = $arg1;
    }

}
