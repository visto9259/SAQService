<?php

namespace SAQService\Types;

class GetRecettesParAccordResponse
{

    /**
     * @var ListeRecette $return
     * @access public
     */
    public $return = null;

    /**
     * @param ListeRecette $return
     * @access public
     */
    public function __construct(ListeRecette $return )
    {
      $this->return = $return;
    }

}
