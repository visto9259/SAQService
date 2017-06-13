<?php

namespace SAQService\Types;

class GetPromotionResponse
{

    /**
     * @var Promotion[] $return
     * @access public
     */
    public $return = null;

    /**
     * @param Promotion[] $return
     * @access public
     */
    public function __construct(Promotion $return )
    {
      $this->return = $return;
    }

}
