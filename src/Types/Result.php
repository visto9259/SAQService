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
    public function __construct($description, $familleAccordList, $id, $partNumber)
    {
      $this->description = $description;
      $this->familleAccordList = $familleAccordList;
      $this->id = $id;
      $this->partNumber = $partNumber;
    }

    /**
     * Return Description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Return FamilleAccordList array
     * @return \SAQService\Types\string[]
     */
    public function getFamilleAccordList()
    {
        return $this->familleAccordList;
    }
    
    /**
     * Return Id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Return PartNumber
     * @return string
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }
}
