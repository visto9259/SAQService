<?php

namespace SAQService\Types;

class Pastille
{

    /**
     * @var reference $pastilleDescCourte
     * @access public
     */
    public $pastilleDescCourte = null;

    /**
     * @var reference $pastilleDescLongue
     * @access public
     */
    public $pastilleDescLongue = null;

    /**
     * @var reference $pastilleUrl
     * @access public
     */
    public $pastilleUrl = null;

    /**
     * @var reference $categorie
     * @access public
     */
    public $categorie = null;

    /**
     * @param reference $pastilleDescCourte
     * @param reference $pastilleDescLongue
     * @param reference $pastilleUrl
     * @param reference $categorie
     * @access public
     */
    public function __construct(Reference $pastilleDescCourte, Reference $pastilleDescLongue, Reference $pastilleUrl, Reference $categorie)
    {
      $this->pastilleDescCourte = $pastilleDescCourte;
      $this->pastilleDescLongue = $pastilleDescLongue;
      $this->pastilleUrl = $pastilleUrl;
      $this->categorie = $categorie;
    }

}
