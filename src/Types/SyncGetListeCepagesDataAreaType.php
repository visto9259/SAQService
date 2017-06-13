<?php
namespace SAQService\Types;

class SyncGetListeCepagesDataAreaType
{

    /**
     * @var getListeCepages $getListeCepages
     * @access public
     */
    public $getListeCepages = null;

    /**
     * @param getListeCepages $getListeCepages
     * @access public
     */
    public function __construct($getListeCepages)
    {
      $this->getListeCepages = $getListeCepages;
    }

}
