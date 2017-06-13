<?php

namespace SAQService\Types;

class ListeRecetteV2 extends ListeResultat
{

    /**
     * @var int $nbResults
     * @access public
     */
    public $nbResults = null;

    /**
     * @var recette[] $recipes
     * @access public
     */
    public $recipes = null;

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

}
