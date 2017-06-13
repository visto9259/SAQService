<?php
namespace SAQService\Types;

class SyncGetListeTypesPlatDataAreaType
{

    /**
     * @var getListeTypesPlat $getListeTypesPlat
     * @access public
     */
    public $getListeTypesPlat = null;

    /**
     * @param getListeTypesPlat $getListeTypesPlat
     * @access public
     */
    public function __construct($getListeTypesPlat)
    {
      $this->getListeTypesPlat = $getListeTypesPlat;
    }

}
