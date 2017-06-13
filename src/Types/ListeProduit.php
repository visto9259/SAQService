<?php

namespace SAQService\Types;

class ListeProduit extends ListeResultat
{

    /**
     * @var Produit[] $products
     * @access public
     */
    public $products = null;

    /**
     * @param int $nbPages
     * @param int $nbResultsPerPage
     * @access public
     */
    public function __construct($nbPages, $nbResultsPerPage)
    {
      parent::__construct($nbPages, $nbResultsPerPage);
    }
    
    /**
     * Returns the array of products
     * @return \SAQService\Types\Produit[]
     */
    public function getProducts()
    {
        return $this->products;
    }

}
