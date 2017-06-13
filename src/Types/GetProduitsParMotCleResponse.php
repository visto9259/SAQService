<?php

namespace SAQService\Types;

class GetProduitsParMotCleResponse
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
    
    /**
     * Returns the list of products
     * @return \SAQService\Types\ListeProduit
     */
    public function getListeProduits()
    {
        return $this->return;
    }

}
