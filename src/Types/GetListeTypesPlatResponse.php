<?php

namespace SAQService\Types;

class GetListeTypesPlatResponse
{

    /**
     * @var TypePlat[] $return
     * @access public
     */
    public $return = null;

    /**
     * @param TypePlat[] $return
     * @access public
     */
    public function __construct(TypePlat $return )
    {
      $this->return = $return;
    }

}
