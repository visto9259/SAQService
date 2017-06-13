<?php

namespace SAQService\Types;

class LegalInfos
{

    /**
     * @var string $id
     * @access public
     */
    public $id = null;

    /**
     * @var reference $titre
     * @access public
     */
    public $titre = null;

    /**
     * @var contenu $contenu
     * @access public
     */
    public $contenu = null;

    /**
     * @param string $id
     * @param reference $titre
     * @param contenu $contenu
     * @access public
     */
    public function __construct($id, $titre, $contenu)
    {
      $this->id = $id;
      $this->titre = $titre;
      $this->contenu = $contenu;
    }

}
