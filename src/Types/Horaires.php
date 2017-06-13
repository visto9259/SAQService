<?php
namespace SAQService\Types;

class Horaires
{

    /**
     * @var horaire $horaire
     * @access public
     */
    public $horaire = null;

    /**
     * @param horaire $horaire
     * @access public
     */
    public function __construct(Horaire $horaire)
    {
      $this->horaire = $horaire;
    }

}
