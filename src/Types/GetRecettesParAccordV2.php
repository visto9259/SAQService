<?php

namespace SAQService\Types;

class GetRecettesParAccordV2
{

    /**
     * @var string $lang
     * @access public
     */
    public $lang = null;

    /**
     * @var string[] $familleAccordArray
     * @access public
     */
    public $familleAccordArray = null;

    /**
     * @var int $premierIndex
     * @access public
     */
    public $premierIndex = null;

    /**
     * @var int $maxResults
     * @access public
     */
    public $maxResults = null;

    /**
     * @param string $lang
     * @param string[] $familleAccordArray
     * @param int $premierIndex
     * @param int $maxResults
     * @access public
     */
    public function __construct($lang, $familleAccordArray, $premierIndex, $maxResults)
    {
      $this->lang = $lang;
      $this->familleAccordArray = $familleAccordArray;
      $this->premierIndex = $premierIndex;
      $this->maxResults = $maxResults;
    }

}
