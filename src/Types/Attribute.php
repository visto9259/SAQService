<?php

namespace SAQService\Types;

class Attribute
{

    /**
     * @var typeAttribut $typeAttribut
     * @access public
     */
    public $typeAttribut = null;

    /**
     * @var string $value
     * @access public
     */
    public $value = null;

    /**
     * @param typeAttribut $typeAttribut
     * @param string $value
     * @access public
     */
    public function __construct($typeAttribut, $value)
    {
      $this->typeAttribut = $typeAttribut;
      $this->value = $value;
    }

}
