<?php

namespace SAQService\Types;

class SyncGetRecettesParAccordV2ResponseDataAreaType
{

    /**
     * @var getRecettesParAccordV2Response $getRecettesParAccordV2Response
     * @access public
     */
    public $getRecettesParAccordV2Response = null;

    /**
     * @param getRecettesParAccordV2Response $getRecettesParAccordV2Response
     * @access public
     */
    public function __construct($getRecettesParAccordV2Response)
    {
      $this->getRecettesParAccordV2Response = $getRecettesParAccordV2Response;
    }

}
