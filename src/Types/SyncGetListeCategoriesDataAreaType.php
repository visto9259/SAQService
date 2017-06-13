<?php
namespace SAQService\Types;

class SyncGetListeCategoriesDataAreaType
{

    /**
     * @var getListeCategories $getListeCategories
     * @access public
     */
    public $getListeCategories = null;

    /**
     * @param getListeCategories $getListeCategories
     * @access public
     */
    public function __construct($getListeCategories)
    {
      $this->getListeCategories = $getListeCategories;
    }

}
