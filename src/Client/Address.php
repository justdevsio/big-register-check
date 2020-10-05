<?php

namespace JustDevs\BIGRegister\Client;

class Address
{

    /**
     * @var string $AddressTo
     */
    protected $AddressTo = null;

    /**
     * @var string $StreetName
     */
    protected $StreetName = null;

    /**
     * @var string $HouseNumber
     */
    protected $HouseNumber = null;

    /**
     * @var string $HouseNumberAddition
     */
    protected $HouseNumberAddition = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $ForeignAddress
     */
    protected $ForeignAddress = null;

    /**
     * @var float $CountryCode
     */
    protected $CountryCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAddressTo()
    {
      return $this->AddressTo;
    }

    /**
     * @param string $AddressTo
     * @return \JustDevs\BIGRegister\client\client\client\Address
     */
    public function setAddressTo($AddressTo)
    {
      $this->AddressTo = $AddressTo;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreetName()
    {
      return $this->StreetName;
    }

    /**
     * @param string $StreetName
     * @return \JustDevs\BIGRegister\client\client\client\Address
     */
    public function setStreetName($StreetName)
    {
      $this->StreetName = $StreetName;
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
     * @return \JustDevs\BIGRegister\client\client\client\Address
     */
    public function setHouseNumber($HouseNumber)
    {
      $this->HouseNumber = $HouseNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getHouseNumberAddition()
    {
      return $this->HouseNumberAddition;
    }

    /**
     * @param string $HouseNumberAddition
     * @return \JustDevs\BIGRegister\client\client\client\Address
     */
    public function setHouseNumberAddition($HouseNumberAddition)
    {
      $this->HouseNumberAddition = $HouseNumberAddition;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return \JustDevs\BIGRegister\client\client\client\Address
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
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
     * @return \JustDevs\BIGRegister\client\client\client\Address
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getForeignAddress()
    {
      return $this->ForeignAddress;
    }

    /**
     * @param string $ForeignAddress
     * @return \JustDevs\BIGRegister\client\client\client\Address
     */
    public function setForeignAddress($ForeignAddress)
    {
      $this->ForeignAddress = $ForeignAddress;
      return $this;
    }

    /**
     * @return float
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param float $CountryCode
     * @return \JustDevs\BIGRegister\client\client\client\Address
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

}
