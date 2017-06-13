<?php

namespace SAQService\Types;

class GetListePaysResponse
{

    /**
     * @var Pays[] $return
     * @access public
     */
    public $return = null;

    /**
     * @param Pays[] $return
     * @access public
     */
    public function __construct(Pays $return )
    {
      $this->return = $return;
    }

    /**
     * Returns the list of Pays
     * @return \SAQService\Types\Pays[]
     */
    public function getPays() 
    {
        return $this->return;
    }
}
