<?php

namespace SAQService\Types;

class GetListePastillesResponse
{

    /**
     * @var Pastille[] $return
     * @access public
     */
    public $return = null;

    /**
     * @param Pastille[] $return
     * @access public
     */
    public function __construct(Pastille $return )
    {
      $this->return = $return;
    }

}
