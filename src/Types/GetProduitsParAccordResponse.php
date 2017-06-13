<?php

namespace SAQService\Types;

class GetProduitsParAccordResponse
{

    /**
     * @var ListeProduit $return
     * @access public
     */
    public $return = null;

    /**
     * @param ListeProduit $return
     * @access public
     */
    public function __construct(ListeProduit $return)
    {
      $this->return = $return;
    }

}
