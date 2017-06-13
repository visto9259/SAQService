<?php
namespace SAQService\Types;

class SyncGetImageURLResponseType
{

    /**
     * @var SyncGetImageURLResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetImageURLResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
