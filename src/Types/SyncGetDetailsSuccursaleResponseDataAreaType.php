<?php
namespace SAQService\Types;

class SyncGetDetailsSuccursaleResponseDataAreaType
{

    /**
     * @var GetDetailsSuccursaleResponse $getDetailsSuccursaleResponse
     * @access public
     */
    public $getDetailsSuccursaleResponse = null;

    /**
     * @param GetDetailsSuccursaleResponse $getDetailsSuccursaleResponse
     * @access public
     */
    public function __construct($getDetailsSuccursaleResponse)
    {
      $this->getDetailsSuccursaleResponse = $getDetailsSuccursaleResponse;
    }
    
    /**
     * 
     * @return \SAQService\Types\GetDetailsSuccursaleResponse
     */
    public function getDetailsSuccursaleResponse()
    {
        return $this->getDetailsSuccursaleResponse;
    }

}
