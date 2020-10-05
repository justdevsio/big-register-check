<?php

namespace JustDevs\BIGRegister;

class ProfessionalGroup
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $DescriptionEnglish
     */
    protected $DescriptionEnglish = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var boolean $Article3
     */
    protected $Article3 = null;

    /**
     * @var boolean $Article34
     */
    protected $Article34 = null;

    /**
     * @var float $BusinessOwner
     */
    protected $BusinessOwner = null;

    /**
     * @var int $RequiredHoursForReregistration
     */
    protected $RequiredHoursForReregistration = null;

    /**
     * @param boolean $Article3
     * @param boolean $Article34
     * @param float $BusinessOwner
     * @param int $RequiredHoursForReregistration
     */
    public function __construct($Article3, $Article34, $BusinessOwner, $RequiredHoursForReregistration)
    {
      $this->Article3 = $Article3;
      $this->Article34 = $Article34;
      $this->BusinessOwner = $BusinessOwner;
      $this->RequiredHoursForReregistration = $RequiredHoursForReregistration;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \JustDevs\BIGRegister\ProfessionalGroup
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \JustDevs\BIGRegister\ProfessionalGroup
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionEnglish()
    {
      return $this->DescriptionEnglish;
    }

    /**
     * @param string $DescriptionEnglish
     * @return \JustDevs\BIGRegister\ProfessionalGroup
     */
    public function setDescriptionEnglish($DescriptionEnglish)
    {
      $this->DescriptionEnglish = $DescriptionEnglish;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \JustDevs\BIGRegister\ProfessionalGroup
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getArticle3()
    {
      return $this->Article3;
    }

    /**
     * @param boolean $Article3
     * @return \JustDevs\BIGRegister\ProfessionalGroup
     */
    public function setArticle3($Article3)
    {
      $this->Article3 = $Article3;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getArticle34()
    {
      return $this->Article34;
    }

    /**
     * @param boolean $Article34
     * @return \JustDevs\BIGRegister\ProfessionalGroup
     */
    public function setArticle34($Article34)
    {
      $this->Article34 = $Article34;
      return $this;
    }

    /**
     * @return float
     */
    public function getBusinessOwner()
    {
      return $this->BusinessOwner;
    }

    /**
     * @param float $BusinessOwner
     * @return \JustDevs\BIGRegister\ProfessionalGroup
     */
    public function setBusinessOwner($BusinessOwner)
    {
      $this->BusinessOwner = $BusinessOwner;
      return $this;
    }

    /**
     * @return int
     */
    public function getRequiredHoursForReregistration()
    {
      return $this->RequiredHoursForReregistration;
    }

    /**
     * @param int $RequiredHoursForReregistration
     * @return \JustDevs\BIGRegister\ProfessionalGroup
     */
    public function setRequiredHoursForReregistration($RequiredHoursForReregistration)
    {
      $this->RequiredHoursForReregistration = $RequiredHoursForReregistration;
      return $this;
    }

}
