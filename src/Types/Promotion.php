<?php

namespace SAQService\Types;

class Promotion
{

    /**
     * @var string $id
     * @access public
     */
    public $id = null;

    /**
     * @var date $dateDebut
     * @access public
     */
    public $dateDebut = null;

    /**
     * @var date $dateFin
     * @access public
     */
    public $dateFin = null;

    /**
     * @var reference $urlImage
     * @access public
     */
    public $urlImage = null;

    /**
     * @var contenu $contenu
     * @access public
     */
    public $contenu = null;

    /**
     * @param string $id
     * @param date $dateDebut
     * @param date $dateFin
     * @param reference $urlImage
     * @param contenu $contenu
     * @access public
     */
    public function __construct($id, $dateDebut, $dateFin, $urlImage, $contenu)
    {
      $this->id = $id;
      $this->dateDebut = $dateDebut;
      $this->dateFin = $dateFin;
      $this->urlImage = $urlImage;
      $this->contenu = $contenu;
    }

}
