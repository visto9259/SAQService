<?php

namespace SAQService\Types;

class GetRecettesParAccordV2Response
{

    /**
     * @var listeRecetteV2 $return
     * @access public
     */
    public $return = null;

    /**
     * @param listeRecetteV2 $return
     * @access public
     */
    public function __construct(ListeRecetteV2 $return)
    {
      $this->return = $return;
    }

}
