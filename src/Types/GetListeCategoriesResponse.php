<?php
namespace SAQService\Types;

class GetListeCategoriesResponse
{

    /**
     * @var Categorie[] $return
     * @access public
     */
    public $return = null;

    /**
     * @param Categorie[] $return
     * @access public
     */
    public function __construct(Categorie $return )
    {
      $this->return = $return;
    }
    
    /**
     * Returns the categories array
     * @return \SAQService\Types\Categorie[]
     */
    public function getCategories()
    {
        return $this->return;
    }

}
