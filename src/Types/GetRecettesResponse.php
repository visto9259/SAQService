<?php

namespace SAQService\Types;

class GetRecettesResponse
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
    public function __construct(ListeRecette $return)
    {
      $this->return = $return;
    }

}
