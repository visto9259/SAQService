<?php

namespace SAQService\Types;

class GetDetailProduitV3
{

    /**
     * @var string $lang
     * @access public
     */
    public $lang = null;

    /**
     * @var int $produitId
     * @access public
     */
    public $produitId = null;

    /**
     * @param string $lang
     * @param int $produitId
     * @access public
     */
    public function __construct($lang, $produitId)
    {
      $this->lang = $lang;
      $this->produitId = $produitId;
    }

}
