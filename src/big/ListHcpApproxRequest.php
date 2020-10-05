<?php

namespace JustDevs\BIGRegister;

class ListHcpApproxRequest
{

    /**
     * @var SourceWebSite $WebSite
     */
    protected $WebSite = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Initials
     */
    protected $Initials = null;

    /**
     * @var string $Prefix
     */
    protected $Prefix = null;

    /**
     * @var string $Street
     */
    protected $Street = null;

    /**
     * @var string $Gender
     */
    protected $Gender = null;

    /**
     * @var string $HouseNumber
     */
    protected $HouseNumber = null;

    /**
     * @var string $Postalcode
     */
    protected $Postalcode = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $RegistrationNumber
     */
    protected $RegistrationNumber = null;

    /**
     * @var string $DateOfBirth
     */
    protected $DateOfBirth = null;

    /**
     * @var string $ProfessionalGroup
     */
    protected $ProfessionalGroup = null;

    /**
     * @var string $TypeOfSpecialism
     */
    protected $TypeOfSpecialism = null;

    /**
     * @param String $WebSite
     */
    public function __construct($WebSite)
    {
      $this->WebSite = $WebSite;
    }

    /**
     * @return SourceWebSite
     */
    public function getWebSite()
    {
      return $this->WebSite;
    }

    /**
     * @param SourceWebSite $WebSite
     * @return \JustDevs\BIGRegister\ListHcpApproxRequest
     */
    public function setWebSite($WebSite)
    {
      $this->WebSite = $WebSite;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \JustDevs\BIGRegister\ListHcpApproxRequest
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getInitials()
    {
      return $this->Initials;
    }

    /**
     * @param string $Initials
     * @return \JustDevs\BIGRegister\ListHcpApproxRequest
     */
    public function setInitials($Initials)
    {
      $this->Initials = $Initials;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrefix()
    {
      return $this->Prefix;
    }

    /**
     * @param string $Prefix
     * @return \JustDevs\BIGRegister\ListHcpApproxRequest
     */
    public function setPrefix($Prefix)
    {
      $this->Prefix = $Prefix;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
      return $this->Street;
    }

    /**
     * @param string $Street
     * @return \JustDevs\BIGRegister\ListHcpApproxRequest
     */
    public function setStreet($Street)
    {
      $this->Street = $Street;
      return $this;
    }

    /**
     * @return string
     */
    public function getGender()
    {
      return $this->Gender;
    }

    /**
     * @param string $Gender
     * @return \JustDevs\BIGRegister\ListHcpApproxRequest
     */
    public function setGender($Gender)
    {
      $this->Gender = $Gender;
      return $this;
    }

    /**
     * @return string
     */
    public function getHouseNumber()
    {
      return $this->HouseNumber;
    }

    /**
     * @param string $HouseNumber
     * @return \JustDevs\BIGRegister\ListHcpApproxRequest
     */
    public function setHouseNumber($HouseNumber)
    {
      $this->HouseNumber = $HouseNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalcode()
    {
      return $this->Postalcode;
    }

    /**
     * @param string $Postalcode
     * @return \JustDevs\BIGRegister\ListHcpApproxRequest
     */
    public function setPostalcode($Postalcode)
    {
      $this->Postalcode = $Postalcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \JustDevs\BIGRegister\ListHcpApproxRequest
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegistrationNumber()
    {
      return $this->RegistrationNumber;
    }

    /**
     * @param string $RegistrationNumber
     * @return \JustDevs\BIGRegister\ListHcpApproxRequest
     */
    public function setRegistrationNumber($RegistrationNumber)
    {
      $this->RegistrationNumber = $RegistrationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateOfBirth()
    {
      return $this->DateOfBirth;
    }

    /**
     * @param string $DateOfBirth
     * @return \JustDevs\BIGRegister\ListHcpApproxRequest
     */
    public function setDateOfBirth($DateOfBirth)
    {
      $this->DateOfBirth = $DateOfBirth;
      return $this;
    }

    /**
     * @return string
     */
    public function getProfessionalGroup()
    {
      return $this->ProfessionalGroup;
    }

    /**
     * @param string $ProfessionalGroup
     * @return \JustDevs\BIGRegister\ListHcpApproxRequest
     */
    public function setProfessionalGroup($ProfessionalGroup)
    {
      $this->ProfessionalGroup = $ProfessionalGroup;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypeOfSpecialism()
    {
      return $this->TypeOfSpecialism;
    }

    /**
     * @param string $TypeOfSpecialism
     * @return \JustDevs\BIGRegister\ListHcpApproxRequest
     */
    public function setTypeOfSpecialism($TypeOfSpecialism)
    {
      $this->TypeOfSpecialism = $TypeOfSpecialism;
      return $this;
    }

}
