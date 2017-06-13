<?php
namespace SAQService\Types;

use SAQService\Types\TypeTri;

/**
 *
 * @author Eric Richer
 *        
 */
class GetProduitsParMotCleV2
{
    
    /**
     * 
     * @var string
     */
    public  $lang;
    
    /**
     * 
     * @var string
     */
    public $motCle;

    /**
     * 
     * @var TypeTri
     */
    public $tri;

    /**
     * 
     * @var int
     */
    public $premierIndex;

    /**
     * 
     * @var int
     */
    public $maxDesResultats;
    
    /**
     * 
     * @var bool
     */
    public $filtreInventaire;
    
    public function __construct($lang, $motCle, $tri, $premierIndex, $maxDesResultats, $filtreInventaire)
    {
        $this->lang = $lang;
        $this->motCle = $motCle;
        $this->tri = $tri;
        $this->premierIndex = $premierIndex;
        $this->filtreInventaire = $filtreInventaire;
    }
}

