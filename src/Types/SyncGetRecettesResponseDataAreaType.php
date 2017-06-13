<?php

namespace SAQService\Types;

class SyncGetRecettesResponseDataAreaType
{

    /**
     * @var getRecettesResponse $getRecettesResponse
     * @access public
     */
    public $getRecettesResponse = null;

    /**
     * @param getRecettesResponse $getRecettesResponse
     * @access public
     */
    public function __construct($getRecettesResponse)
    {
      $this->getRecettesResponse = $getRecettesResponse;
    }

}
