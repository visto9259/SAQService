<?php

namespace SAQService\Types;

class GetDetailRecette
{

    /**
     * @var string $arg0
     * @access public
     */
    public $arg0 = null;

    /**
     * @var int $arg1
     * @access public
     */
    public $arg1 = null;

    /**
     * @param string $arg0
     * @param int $arg1
     * @access public
     */
    public function __construct($arg0, $arg1)
    {
      $this->arg0 = $arg0;
      $this->arg1 = $arg1;
    }

}
