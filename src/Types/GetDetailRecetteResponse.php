<?php

namespace SAQService\Types;

class GetDetailRecetteResponse
{

    /**
     * @var DetailRecette $return
     * @access public
     */
    public $return = null;

    /**
     * @param DetailRecette $return
     * @access public
     */
    public function __construct(DetailRecette $return)
    {
      $this->return = $return;
    }

}
