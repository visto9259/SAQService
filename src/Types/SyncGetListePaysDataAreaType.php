<?php
namespace SAQService\Types;

class SyncGetListePaysDataAreaType
{

    /**
     * @var GetListePays $getListePays
     * @access public
     */
    public $getListePays = null;

    /**
     * @param GetListePays $getListePays
     * @access public
     */
    public function __construct( getListePays $getListePays)
    {
      $this->getListePays = $getListePays;
    }

}
