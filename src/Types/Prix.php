<?php

namespace SAQService\Types;

class Prix extends ReferenceAvecId
{

    /**
     * @param string $descEn
     * @param string $descrFr
     * @param string $id
     * @access public
     */
    public function __construct($descEn, $descrFr, $id)
    {
      parent::__construct($descEn, $descrFr, $id);
    }

}
