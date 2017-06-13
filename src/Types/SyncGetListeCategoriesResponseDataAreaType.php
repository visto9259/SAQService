<?php
namespace SAQService\Types;

class SyncGetListeCategoriesResponseDataAreaType
{

    /**
     * @var getListeCategoriesResponse $getListeCategoriesResponse
     * @access public
     */
    public $getListeCategoriesResponse = null;

    /**
     * @param getListeCategoriesResponse $getListeCategoriesResponse
     * @access public
     */
    public function __construct($getListeCategoriesResponse)
    {
      $this->getListeCategoriesResponse = $getListeCategoriesResponse;
    }
    
    /**
     * Return the categories response
     * @return \SAQService\Types\getListeCategoriesResponse
     */
    public function getListeCategoriesResponse()
    {
        return $this->getListeCategoriesResponse;
    }

}
