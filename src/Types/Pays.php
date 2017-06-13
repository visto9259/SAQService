<?php

namespace SAQService\Types;


class Pays extends Reference
{

    /**
     * @var reference[] $regions
     * @access public
     */
    public $regions = null;

    /**
     * @param string $descEn
     * @param string $descrFr
     * @access public
     */
    public function __construct($descEn, $descrFr)
    {
      parent::__construct($descEn, $descrFr);
    }
    
    /**
     * Returns the list of regions
     * @return \SAQService\Types\reference[]
     */
    public function getRegions()
    {
        return $this->regions;
    }

}
