<?php
namespace SAQService\Types;
class ProduitPromotion
{

    /**
     * @var identiteProduit[] $identiteProduit
     * @access public
     */
    public $identiteProduit = null;

    /**
     * @param identiteProduit[] $identiteProduit
     * @access public
     */
    public function __construct($identiteProduit)
    {
      $this->identiteProduit = $identiteProduit;
    }

}
