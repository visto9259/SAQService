<?php
namespace SAQService\Types;

use Zend\Code\Generator\DocBlock\Tag\ReturnTag;

class GetSuccursalesResponse
{

    /**
     * @var Succursale[] $return
     * @access public
     */
    public $return = null;

    /**
     * @param Succursale[] $return
     * @access public
     */
    public function __construct(Succursale $return)
    {
      $this->return = $return;
    }
    
    /**
     * Returns the list of succursales
     * @return \SAQService\Types\Succursale[]
     */
    public function getSuccursales()
    {
        if (!is_array($this->return)) return [$this->return];
        return $this->return;
    }

}
