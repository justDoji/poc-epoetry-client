<?php

namespace OpenEuropa\ePoetry\Type;

class receiveNotificationsResponse
{

    /**
     * @var dgtNotification[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return dgtNotification[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param dgtNotification[] $return
     * @return \OpenEuropa\ePoetry\Type\receiveNotificationsResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
