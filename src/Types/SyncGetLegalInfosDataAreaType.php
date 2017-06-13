<?php
namespace SAQService\Types;

class SyncGetLegalInfosDataAreaType
{

    /**
     * @var getLegalInfos $getLegalInfos
     * @access public
     */
    public $getLegalInfos = null;

    /**
     * @param getLegalInfos $getLegalInfos
     * @access public
     */
    public function __construct($getLegalInfos)
    {
      $this->getLegalInfos = $getLegalInfos;
    }

}
