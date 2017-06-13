<?php
namespace SAQService\Types;

class ListeResultat
{

    /**
     * @var int $nbPages
     * @access public
     */
    public $nbPages = null;

    /**
     * @var int $nbResultsPerPage
     * @access public
     */
    public $nbResultsPerPage = null;

    /**
     * @param int $nbPages
     * @param int $nbResultsPerPage
     * @access public
     */
    public function __construct($nbPages, $nbResultsPerPage)
    {
      $this->nbPages = $nbPages;
      $this->nbResultsPerPage = $nbResultsPerPage;
    }
    
    /**
     * Returns the number of pages
     * @return number
     */
    public function getNbPages()
    {
        return $this->nbPages;
    }
    
    /**
     * Returns the number of results Per Page
     * @return number
     */
    public function getResultsPerPage()
    {
        return $this->nbResultsPerPage;
    }

}
