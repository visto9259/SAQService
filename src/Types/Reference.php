<?php

namespace SAQService\Types;

class Reference
{

    /**
     * English descriptor
     * @var string $descEn
     * @access public
     */
    public $descEn = null;

    /**
     * French descriptor
     * @var string $descrFr
     * @access public
     */
    public $descrFr = null;

    /**
     * @param string $descEn
     * @param string $descrFr
     * @access public
     */
    public function __construct($descEn, $descrFr)
    {
      $this->descEn = $descEn;
      $this->descrFr = $descrFr;
    }
    
    /**
     * Returns the English descriptor
     * @return string
     */
    public function getDescEn()
    {
        return $this->descEn;
    }

    /**
     * Returns the French descriptor
     * @return string
     */
    public function getDescFr()
    {
        return $this->descrFr;
    }
    
}
