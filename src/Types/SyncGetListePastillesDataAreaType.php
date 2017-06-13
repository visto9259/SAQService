<?php
namespace SAQService\Types;

class SyncGetListePastillesDataAreaType
{

    /**
     * @var getListePastilles $getListePastilles
     * @access public
     */
    public $getListePastilles = null;

    /**
     * @param getListePastilles $getListePastilles
     * @access public
     */
    public function __construct($getListePastilles)
    {
      $this->getListePastilles = $getListePastilles;
    }

}
