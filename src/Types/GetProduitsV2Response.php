<?php
namespace SAQService\Types;

class GetProduitsV2Response
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
    
    /**
     * Return the list of products
     * @return \SAQService\Types\ListeProduitV2
     */
    public function getListeProduitsV2()
    {
        return $this->return;
    }

}
