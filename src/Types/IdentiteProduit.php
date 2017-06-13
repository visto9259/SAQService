<?php

namespace SAQService\Types;

class IdentiteProduit
{

    /**
     * @var string $idProduit
     * @access public
     */
    public $idProduit = null;

    /**
     * @param string $idProduit
     * @access public
     */
    public function __construct($idProduit)
    {
      $this->idProduit = $idProduit;
    }

}
