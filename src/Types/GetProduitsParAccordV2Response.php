<?php
namespace SAQService\Types;

class GetProduitsParAccordV2Response
{

    /**
     * @var ListeProduitV2 $return
     * @access public
     */
    public $return = null;

    /**
     * @param ListeProduitV2 $return
     * @access public
     */
    public function __construct(ListeProduitV2 $return)
    {
      $this->return = $return;
    }

}
