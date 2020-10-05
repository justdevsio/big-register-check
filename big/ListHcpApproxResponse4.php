<?php

namespace JustDevs\BIGRegister;

class ListHcpApproxResponse4
{

    /**
     * @var ArrayOfListHcpApprox4 $ListHcpApprox
     */
    protected $ListHcpApprox = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfListHcpApprox4
     */
    public function getListHcpApprox()
    {
      return $this->ListHcpApprox;
    }

    /**
     * @param ArrayOfListHcpApprox4 $ListHcpApprox
     * @return \JustDevs\BIGRegister\ListHcpApproxResponse4
     */
    public function setListHcpApprox($ListHcpApprox)
    {
      $this->ListHcpApprox = $ListHcpApprox;
      return $this;
    }

}
