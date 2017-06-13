<?php
namespace SAQService\Types;

class GetMessageResponse
{

    /**
     * @var Message[] $return
     * @access public
     */
    public $return = null;

    /**
     * @param Message[] $return
     * @access public
     */
    public function __construct(Message $return )
    {
      $this->return = $return;
    }

}
