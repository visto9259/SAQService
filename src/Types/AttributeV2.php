<?php

namespace SAQService\Types;

class AttributeV2
{

    /**
     * @var typeAttributV2 $typeAttribut
     * @access public
     */
    public $typeAttribut = null;

    /**
     * @var string $value
     * @access public
     */
    public $value = null;

    /**
     * @param typeAttributV2 $typeAttribut
     * @param string $value
     * @access public
     */
    public function __construct($typeAttribut, $value)
    {
      $this->typeAttribut = $typeAttribut;
      $this->value = $value;
    }
    
    /**
     * Return TypeAttribut
     * @return \SAQService\Types\typeAttributV2
     */
    public function getTypeAttribut()
    {
        return $this->typeAttribut;
    }
    
    /**
     * Return Value
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

}
