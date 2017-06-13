<?php
namespace SAQService\Types;

class SyncGetImageURLDataAreaType
{

    /**
     * @var getImageURL $getImageURL
     * @access public
     */
    public $getImageURL = null;

    /**
     * @param getImageURL $getImageURL
     * @access public
     */
    public function __construct($getImageURL)
    {
      $this->getImageURL = $getImageURL;
    }

}
