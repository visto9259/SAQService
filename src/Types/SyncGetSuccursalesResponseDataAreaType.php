<?php
namespace SAQService\Types;

class SyncGetSuccursalesResponseDataAreaType
{

    /**
     * @var GetSuccursalesResponse $getSuccursalesResponse
     * @access public
     */
    public $getSuccursalesResponse = null;

    /**
     * @param GetSuccursalesResponse $getSuccursalesResponse
     * @access public
     */
    public function __construct($getSuccursalesResponse)
    {
      $this->getSuccursalesResponse = $getSuccursalesResponse;
    }

    /**
     * Return the response
     * @return \SAQService\Types\GetSuccursalesResponse
     */
    public function getSuccursalesResponse()
    {
        return $this->getSuccursalesResponse;
    }
}
