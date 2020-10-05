<?php

namespace JustDevs\BIGRegister;

class TypeOfSpecialism
{

    /**
     * @var float $Code
     */
    protected $Code = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $DescriptionEn
     */
    protected $DescriptionEn = null;

    /**
     * @var string $TitleOfSpecialist
     */
    protected $TitleOfSpecialist = null;

    /**
     * @var string $TitleOfSpecialistEn
     */
    protected $TitleOfSpecialistEn = null;

    /**
     * @var string $Register
     */
    protected $Register = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var string $ProfessionalGroupCode
     */
    protected $ProfessionalGroupCode = null;

    /**
     * @param float $Code
     */
    public function __construct($Code)
    {
      $this->Code = $Code;
    }

    /**
     * @return float
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param float $Code
     * @return \JustDevs\BIGRegister\TypeOfSpecialism
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
     * @return \JustDevs\BIGRegister\TypeOfSpecialism
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionEn()
    {
      return $this->DescriptionEn;
    }

    /**
     * @param string $DescriptionEn
     * @return \JustDevs\BIGRegister\TypeOfSpecialism
     */
    public function setDescriptionEn($DescriptionEn)
    {
      $this->DescriptionEn = $DescriptionEn;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitleOfSpecialist()
    {
      return $this->TitleOfSpecialist;
    }

    /**
     * @param string $TitleOfSpecialist
     * @return \JustDevs\BIGRegister\TypeOfSpecialism
     */
    public function setTitleOfSpecialist($TitleOfSpecialist)
    {
      $this->TitleOfSpecialist = $TitleOfSpecialist;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitleOfSpecialistEn()
    {
      return $this->TitleOfSpecialistEn;
    }

    /**
     * @param string $TitleOfSpecialistEn
     * @return \JustDevs\BIGRegister\TypeOfSpecialism
     */
    public function setTitleOfSpecialistEn($TitleOfSpecialistEn)
    {
      $this->TitleOfSpecialistEn = $TitleOfSpecialistEn;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegister()
    {
      return $this->Register;
    }

    /**
     * @param string $Register
     * @return \JustDevs\BIGRegister\TypeOfSpecialism
     */
    public function setRegister($Register)
    {
      $this->Register = $Register;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return \JustDevs\BIGRegister\TypeOfSpecialism
     */
    public function setEndDate(\DateTime $EndDate = null)
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getProfessionalGroupCode()
    {
      return $this->ProfessionalGroupCode;
    }

    /**
     * @param string $ProfessionalGroupCode
     * @return \JustDevs\BIGRegister\TypeOfSpecialism
     */
    public function setProfessionalGroupCode($ProfessionalGroupCode)
    {
      $this->ProfessionalGroupCode = $ProfessionalGroupCode;
      return $this;
    }

}
