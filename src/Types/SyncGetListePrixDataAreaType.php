<?php
namespace SAQService\Types;

class SyncGetListePrixDataAreaType
{

    /**
     * @var getListePrix $getListePrix
     * @access public
     */
    public $getListePrix = null;

    /**
     * @param getListePrix $getListePrix
     * @access public
     */
    public function __construct($getListePrix)
    {
      $this->getListePrix = $getListePrix;
    }

}
