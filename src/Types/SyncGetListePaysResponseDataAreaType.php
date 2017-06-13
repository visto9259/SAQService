<?php
namespace SAQService\Types;

class SyncGetListePaysResponseDataAreaType
{

    /**
     * @var getListePaysResponse $getListePaysResponse
     * @access public
     */
    public $getListePaysResponse = null;

    /**
     * @param getListePaysResponse $getListePaysResponse
     * @access public
     */
    public function __construct($getListePaysResponse)
    {
      $this->getListePaysResponse = $getListePaysResponse;
    }
    
    /**
     * Returns the response
     * @return \SAQService\Types\getListePaysResponse
     */
    public function getListePaysResponse()
    {
        return $this->getListePaysResponse;
    }

}
