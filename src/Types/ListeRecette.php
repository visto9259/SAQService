<?php

namespace SAQService\Types;

class ListeRecette extends ListeResultat
{

    /**
     * @var Recette[] $recipes
     * @access public
     */
    public $recipes = null;

    /**
     * @param int $nbPages
     * @param int $nbResultsPerPage
     * @access public
     */
    public function __construct($nbPages, $nbResultsPerPage)
    {
      parent::__construct($nbPages, $nbResultsPerPage);
    }

}
