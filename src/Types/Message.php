<?php

namespace SAQService\Types;

class Message extends ReferenceAvecId
{

    /**
     * @var string $forversion
     * @access public
     */
    public $forversion = null;

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
     * @param string $descEn
     * @param string $descrFr
     * @param string $id
     * @param string $forversion
     * @param date $dateDebut
     * @param date $dateFin
     * @access public
     */
    public function __construct($descEn, $descrFr, $id, $forversion, $dateDebut, $dateFin)
    {
      parent::__construct($descEn, $descrFr, $id);
      $this->forversion = $forversion;
      $this->dateDebut = $dateDebut;
      $this->dateFin = $dateFin;
    }

}
