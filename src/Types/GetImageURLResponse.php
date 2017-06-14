<?php

namespace SAQService\Types;

class GetImageURLResponse
{

    /**
     * @var string $imageURL
     * @access public
     */
    public $imageURL = null;

    /**
     * @param string $imageURL
     * @access public
     */
    public function __construct($imageURL)
    {
      $this->imageURL = $imageURL;
    }
    
    public function getImageUrl()
    {
        return $this->imageURL;
    }

}
