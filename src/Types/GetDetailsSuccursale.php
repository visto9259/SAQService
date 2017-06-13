<?php

namespace SAQService\Types;

class GetDetailsSuccursale
{

    /**
     * @var string $lang
     * @access public
     */
    public $lang = null;

    /**
     * @var int $id
     * @access public
     */
    public $id = null;

    /**
     * @param string $lang
     * @param int $id
     * @access public
     */
    public function __construct($lang, $id)
    {
      $this->lang = $lang;
      $this->id = $id;
    }

}
