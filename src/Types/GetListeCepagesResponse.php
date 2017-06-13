<?php

namespace SAQService\Types;

class GetListeCepagesResponse
{

    /**
     * @var Cepage[] $return
     * @access public
     */
    public $return = null;

    /**
     * @param Cepage[] $return
     * @access public
     */
    public function __construct(Cepage $return )
    {
      $this->return = $return;
    }

}
