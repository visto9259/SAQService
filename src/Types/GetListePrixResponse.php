<?php

namespace SAQService\Types;

class GetListePrixResponse
{

    /**
     * @var Prix[] $return
     * @access public
     */
    public $return = null;

    /**
     * @param Prix[] $return
     * @access public
     */
    public function __construct(Prix $return )
    {
      $this->return = $return;
    }

}
