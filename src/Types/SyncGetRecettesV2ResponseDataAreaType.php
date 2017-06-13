<?php

namespace SAQService\Types;

class SyncGetRecettesV2ResponseDataAreaType
{

    /**
     * @var getRecettesV2Response $getRecettesV2Response
     * @access public
     */
    public $getRecettesV2Response = null;

    /**
     * @param getRecettesV2Response $getRecettesV2Response
     * @access public
     */
    public function __construct($getRecettesV2Response)
    {
      $this->getRecettesV2Response = $getRecettesV2Response;
    }

}
