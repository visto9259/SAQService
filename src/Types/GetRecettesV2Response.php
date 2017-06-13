<?php

namespace SAQService\Types;

class GetRecettesV2Response
{

    /**
     * @var ListeRecetteV2 $return
     * @access public
     */
    public $return = null;

    /**
     * @param ListeRecetteV2 $return
     * @access public
     */
    public function __construct(ListeRecetteV2 $return)
    {
      $this->return = $return;
    }

}
