<?php
namespace SAQService\Types;

class ReferenceAvecId
{

    /**
     * @var string $descEn
     * @access public
     */
    public $descEn = null;

    /**
     * @var string $descrFr
     * @access public
     */
    public $descrFr = null;

    /**
     * @var string $id
     * @access public
     */
    public $id = null;

    /**
     * @param string $descEn
     * @param string $descrFr
     * @param string $id
     * @access public
     */
    public function __construct($descEn, $descrFr, $id)
    {
      $this->descEn = $descEn;
      $this->descrFr = $descrFr;
      $this->id = $id;
    }
    
    /**
     * Returns the id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the English description
     * @return string
     */
    public function getDescEn()
    {
        return $this->descEn;
    }
    
    /**
     * Returns the French description
     * @return string
     */
    public function getDescrFr()
    {
        return $this->descrFr;
    }
    
    
}
