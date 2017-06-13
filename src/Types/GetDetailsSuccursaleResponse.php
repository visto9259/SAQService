<?php
namespace SAQService\Types;

class GetDetailsSuccursaleResponse
{

    /**
     * @var DetailsSuccursale $return
     * @access public
     */
    public $return = null;

    /**
     * @param DetailsSuccursale $return
     * @access public
     */
    public function __construct(DetailsSuccursale $return)
    {
      $this->return = $return;
    }

}
