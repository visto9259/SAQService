<?php
namespace SAQService\Types;

class SyncGetMessageDataAreaType
{

    /**
     * @var getMessage $getMessage
     * @access public
     */
    public $getMessage = null;

    /**
     * @param getMessage $getMessage
     * @access public
     */
    public function __construct($getMessage)
    {
      $this->getMessage = $getMessage;
    }

}
