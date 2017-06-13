<?php
namespace SAQService\Types;

class SyncGetListePrixResponseDataAreaType
{

    /**
     * @var getListePrixResponse $getListePrixResponse
     * @access public
     */
    public $getListePrixResponse = null;

    /**
     * @param getListePrixResponse $getListePrixResponse
     * @access public
     */
    public function __construct($getListePrixResponse)
    {
      $this->getListePrixResponse = $getListePrixResponse;
    }

}
