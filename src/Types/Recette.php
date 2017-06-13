<?php

namespace SAQService\Types;

class Recette extends Result
{

    /**
     * @var string $urlPhoto
     * @access public
     */
    public $urlPhoto = null;

    /**
     * @param string $description
     * @param int $id
     * @param string $partNumber
     * @param string $urlPhoto
     * @access public
     */
    public function __construct($description, $id, $partNumber, $urlPhoto)
    {
      parent::__construct($description, $id, $partNumber);
      $this->urlPhoto = $urlPhoto;
    }

}
