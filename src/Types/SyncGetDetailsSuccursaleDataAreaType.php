<?php
namespace SAQService\Types;

class SyncGetDetailsSuccursaleDataAreaType
{

    /**
     * @var getDetailsSuccursale $getDetailsSuccursale
     * @access public
     */
    public $getDetailsSuccursale = null;

    /**
     * @param getDetailsSuccursale $getDetailsSuccursale
     * @access public
     */
    public function __construct($getDetailsSuccursale)
    {
      $this->getDetailsSuccursale = $getDetailsSuccursale;
    }

}
