<?php
namespace SAQService\Types;

class GetDetailProduitParCUPV3
{

    /**
     * @var string $lang
     * @access public
     */
    public $lang = null;

    /**
     * @var string $cup
     * @access public
     */
    public $cup = null;

    /**
     * @param string $lang
     * @param string $cup
     * @access public
     */
    public function __construct($lang, $cup)
    {
      $this->lang = $lang;
      $this->cup = $cup;
    }

}
