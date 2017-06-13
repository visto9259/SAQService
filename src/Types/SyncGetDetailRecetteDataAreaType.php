<?php
namespace SAQService\Types;

class SyncGetDetailRecetteDataAreaType
{

    /**
     * @var getDetailRecette $getDetailRecette
     * @access public
     */
    public $getDetailRecette = null;

    /**
     * @param getDetailRecette $getDetailRecette
     * @access public
     */
    public function __construct($getDetailRecette)
    {
      $this->getDetailRecette = $getDetailRecette;
    }

}
