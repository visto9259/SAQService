<?php
namespace SAQService\Types;

class SyncGetListeTypesPlatResponseDataAreaType
{

    /**
     * @var getListeTypesPlatResponse $getListeTypesPlatResponse
     * @access public
     */
    public $getListeTypesPlatResponse = null;

    /**
     * @param getListeTypesPlatResponse $getListeTypesPlatResponse
     * @access public
     */
    public function __construct($getListeTypesPlatResponse)
    {
      $this->getListeTypesPlatResponse = $getListeTypesPlatResponse;
    }

}
