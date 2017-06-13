<?php

namespace SAQService\Types;

class Result
{

    /**
     * @var string $description
     * @access public
     */
    public $description = null;

    /**
     * @var string[] $familleAccordList
     * @access public
     */
    public $familleAccordList = null;

    /**
     * @var int $id
     * @access public
     */
    public $id = null;

    /**
     * @var string $partNumber
     * @access public
     */
    public $partNumber = null;

    /**
     * @param string $description
     * @param int $id
     * @param string $partNumber
     * @access public
     */
    public function __construct($description, $id, $partNumber)
    {
      $this->description = $description;
      $this->id = $id;
      $this->partNumber = $partNumber;
    }

}
