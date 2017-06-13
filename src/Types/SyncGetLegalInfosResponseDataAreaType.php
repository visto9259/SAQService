<?php
namespace SAQService\Types;

class SyncGetLegalInfosResponseDataAreaType
{

    /**
     * @var getLegalInfosResponse $getLegalInfosResponse
     * @access public
     */
    public $getLegalInfosResponse = null;

    /**
     * @param getLegalInfosResponse $getLegalInfosResponse
     * @access public
     */
    public function __construct($getLegalInfosResponse)
    {
      $this->getLegalInfosResponse = $getLegalInfosResponse;
    }

}
