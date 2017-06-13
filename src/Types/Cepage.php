<?php

namespace SAQService\Types;

class Cepage extends Reference
{

    /**
     * @param string $descEn
     * @param string $descrFr
     * @access public
     */
    public function __construct($descEn, $descrFr)
    {
      parent::__construct($descEn, $descrFr);
    }

}
