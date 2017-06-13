<?php
namespace SAQService\Types;

class SyncGetListePastillesResponseDataAreaType
{

    /**
     * @var getListePastillesResponse $getListePastillesResponse
     * @access public
     */
    public $getListePastillesResponse = null;

    /**
     * @param getListePastillesResponse $getListePastillesResponse
     * @access public
     */
    public function __construct($getListePastillesResponse)
    {
      $this->getListePastillesResponse = $getListePastillesResponse;
    }

}
