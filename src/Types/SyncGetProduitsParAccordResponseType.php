<?php
namespace SAQService\Types;

class SyncGetProduitsParAccordResponseType
{

    /**
     * @var SyncGetProduitsParAccordResponseDataAreaType $DataArea
     * @access public
     */
    public $DataArea = null;

    /**
     * @param SyncGetProduitsParAccordResponseDataAreaType $DataArea
     * @access public
     */
    public function __construct($DataArea)
    {
      $this->DataArea = $DataArea;
    }

}
