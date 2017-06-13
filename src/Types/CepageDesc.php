<?php

namespace SAQService\Types;

class CepageDesc
{

    /**
     * @var string $value
     * @access public
     */
    public $value = null;

    /**
     * @var int $percent
     * @access public
     */
    public $percent = null;

    /**
     * @param string $value
     * @param int $percent
     * @access public
     */
    public function __construct($value, $percent)
    {
      $this->value = $value;
      $this->percent = $percent;
    }

}
