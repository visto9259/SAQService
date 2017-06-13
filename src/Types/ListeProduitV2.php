<?php

namespace SAQService\Types;

class ListeProduitV2 extends ListeResultat
{

    /**
     * @var int $nbResults
     * @access public
     */
    public $nbResults = null;

    /**
     * @var Produit[] $products
     * @access public
     */
    public $products = null;

    /**
     * @param int $nbPages
     * @param int $nbResultsPerPage
     * @param int $nbResults
     * @access public
     */
    public function __construct($nbPages, $nbResultsPerPage, $nbResults)
    {
      parent::__construct($nbPages, $nbResultsPerPage);
      $this->nbResults = $nbResults;
    }

    /**
     * Return the products as an array of Pro
     * @return \SAQService\Types\Produit[]
     */
    public function getProducts()
    {
        return $this->products;
    }
    
    /**
     * Returns the number of results
     * @return number
     */
    public function getNbResults()
    {
        return $this->nbResults;
    }
}
