<?php

namespace SAQService\Types;

class DetailProduitV3 extends Produit
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
     * @var int $limiteAchatEnLigne
     * @access public
     */
    public $limiteAchatEnLigne = null;

    /**
     * @var int $qteDispoEnLigne
     * @access public
     */
    public $qteDispoEnLigne = null;

    /**
     * @var int $limiteAchatEnSuccursale
     * @access public
     */
    public $limiteAchatEnSuccursale = null;

    /**
     * @var boolean $indDispoEnSuccursale
     * @access public
     */
    public $indDispoEnSuccursale = null;

    /**
     * @var string[] $remarqueLivraison
     * @access public
     */
    public $remarqueLivraison = null;

    /**
     * @var cepageDesc[] $cepage
     * @access public
     */
    public $cepage = null;

    /**
     * @var attributeV3[] $listeAttributs
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
     * @param int $limiteAchatEnLigne
     * @param int $qteDispoEnLigne
     * @param int $limiteAchatEnSuccursale
     * @param boolean $indDispoEnSuccursale
     * @param string[] $remarqueLivraison
     * @access public
     */
    public function __construct($description, $id, $partNumber, $format, $identiteProduit, $millesime, $pastilleGout, $pays, $prix, $prixReduit, $urlPastille, $quantiteParEmballage, $aromate, $urlAromate, $typeSpiritueux, $urlTypeSpiritueux, $millesimeDeguste, $urlProduit, $limiteAchatEnLigne, $qteDispoEnLigne, $limiteAchatEnSuccursale, $indDispoEnSuccursale, $remarqueLivraison)
    {
      parent::__construct($description, $id, $partNumber, $format, $identiteProduit, $millesime, $pastilleGout, $pays, $prix, $prixReduit, $urlPastille, $quantiteParEmballage, $aromate, $urlAromate, $typeSpiritueux, $urlTypeSpiritueux);
      $this->millesimeDeguste = $millesimeDeguste;
      $this->urlProduit = $urlProduit;
      $this->limiteAchatEnLigne = $limiteAchatEnLigne;
      $this->qteDispoEnLigne = $qteDispoEnLigne;
      $this->limiteAchatEnSuccursale = $limiteAchatEnSuccursale;
      $this->indDispoEnSuccursale = $indDispoEnSuccursale;
      $this->remarqueLivraison = $remarqueLivraison;
    }

}
