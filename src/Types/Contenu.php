<?php

namespace SAQService\Types;

class Contenu
{

    /**
     * @var Reference $urlInfos
     * @access public
     */
    public $urlInfos = null;

    /**
     * @var Reference $description
     * @access public
     */
    public $description = null;

    /**
     * @var string $noTel
     * @access public
     */
    public $noTel = null;

    /**
     * @var string $courriel
     * @access public
     */
    public $courriel = null;

    /**
     * @param Reference $urlInfos
     * @param Reference $description
     * @param string $noTel
     * @param string $courriel
     * @access public
     */
    public function __construct(Reference $urlInfos, Reference $description, $noTel, $courriel)
    {
      $this->urlInfos = $urlInfos;
      $this->description = $description;
      $this->noTel = $noTel;
      $this->courriel = $courriel;
    }

}
