<?php

namespace SAQService\Types;

class GetLegalInfosResponse
{

    /**
     * @var LegalInfos[] $return
     * @access public
     */
    public $return = null;

    /**
     * @param LegalInfos[] $return
     * @access public
     */
    public function __construct(LegalInfos $return )
    {
      $this->return = $return;
    }

}
