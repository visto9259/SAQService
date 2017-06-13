<?php

namespace SAQService\Types;

class DetailProduitV2 extends Produit
{

    /**
     * @var string $millesimeDeguste
     * @access public
     */
    public $millesimeDeguste = null;

    /**
     * @var string $urlProduit
     * @access public
     */
    public $urlProduit = null;

    /**
     * @var attributeV2[] $listeAttributs
     * @access public
     */
    public $listeAttributs = null;

    /**
     * @param string $description
     * @param int $id
     * @param string $partNumber
     * @param string $format
     * @param string $identiteProduit
     * @param string $millesime
     * @param string $pastilleGout
     * @param string $pays
     * @param float $prix
     * @param float $prixReduit
     * @param string $urlPastille
     * @param string $quantiteParEmballage
     * @param string $aromate
     * @param string $urlAromate
     * @param string $typeSpiritueux
     * @param string $urlTypeSpiritueux
     * @param string $millesimeDeguste
     * @param string $urlProduit
     * @access public
     */
    public function __construct($description, $id, $partNumber, $format, $identiteProduit, $millesime, $pastilleGout, $pays, $prix, $prixReduit, $urlPastille, $quantiteParEmballage, $aromate, $urlAromate, $typeSpiritueux, $urlTypeSpiritueux, $millesimeDeguste, $urlProduit)
    {
      parent::__construct($description, $id, $partNumber, $format, $identiteProduit, $millesime, $pastilleGout, $pays, $prix, $prixReduit, $urlPastille, $quantiteParEmballage, $aromate, $urlAromate, $typeSpiritueux, $urlTypeSpiritueux);
      $this->millesimeDeguste = $millesimeDeguste;
      $this->urlProduit = $urlProduit;
    }

}
