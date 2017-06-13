<?php

namespace SAQService\Types;

class SyncGetRecettesParAccordResponseDataAreaType
{

    /**
     * @var getRecettesParAccordResponse $getRecettesParAccordResponse
     * @access public
     */
    public $getRecettesParAccordResponse = null;

    /**
     * @param getRecettesParAccordResponse $getRecettesParAccordResponse
     * @access public
     */
    public function __construct($getRecettesParAccordResponse)
    {
      $this->getRecettesParAccordResponse = $getRecettesParAccordResponse;
    }

}
