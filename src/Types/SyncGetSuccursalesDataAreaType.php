<?php

namespace SAQService\Types;

class SyncGetSuccursalesDataAreaType
{

    /**
     * @var getSuccursales $getSuccursales
     * @access public
     */
    public $getSuccursales = null;

    /**
     * @param getSuccursales $getSuccursales
     * @access public
     */
    public function __construct($getSuccursales)
    {
      $this->getSuccursales = $getSuccursales;
    }

}
