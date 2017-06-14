<?php

namespace SAQService\Types;

class DetailProduit extends Produit
{

    /**
     * @var attribute[] $listeAttributs
     * @access public
     */
    public $listeAttributs = null;

    /**
     * @param string $description
     * @param string $familleAccordListe
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
     * @access public
     */
    public function __construct($description, $familleAccordListe, $id, $partNumber, $format, $identiteProduit, $millesime, $pastilleGout, $pays, $prix, $prixReduit, $urlPastille, $quantiteParEmballage, $aromate, $urlAromate, $typeSpiritueux, $urlTypeSpiritueux)
    {
      parent::__construct($description, $familleAccordListe, $id, $partNumber, $format, $identiteProduit, $millesime, $pastilleGout, $pays, $prix, $prixReduit, $urlPastille, $quantiteParEmballage, $aromate, $urlAromate, $typeSpiritueux, $urlTypeSpiritueux);
    }
    
    /**
     * Return List of attibutes
     * @return \SAQService\Types\attribute[]
     */
    public function getListeAttributs()
    {
        return $this->listeAttributs;
    }

}
