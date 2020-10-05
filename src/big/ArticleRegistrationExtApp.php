<?php

namespace JustDevs\BIGRegister;

class ArticleRegistrationExtApp
{

    /**
     * @var float $ArticleRegistrationNumber
     */
    protected $ArticleRegistrationNumber = null;

    /**
     * @var \DateTime $ArticleRegistrationStartDate
     */
    protected $ArticleRegistrationStartDate = null;

    /**
     * @var \DateTime $ArticleRegistrationEndDate
     */
    protected $ArticleRegistrationEndDate = null;

    /**
     * @var string $ProfessionalGroupCode
     */
    protected $ProfessionalGroupCode = null;

    /**
     * @param float $ArticleRegistrationNumber
     * @param \DateTime $ArticleRegistrationStartDate
     * @param \DateTime $ArticleRegistrationEndDate
     */
    public function __construct($ArticleRegistrationNumber, \DateTime $ArticleRegistrationStartDate, \DateTime $ArticleRegistrationEndDate)
    {
      $this->ArticleRegistrationNumber = $ArticleRegistrationNumber;
      $this->ArticleRegistrationStartDate = $ArticleRegistrationStartDate->format(\DateTime::ATOM);
      $this->ArticleRegistrationEndDate = $ArticleRegistrationEndDate->format(\DateTime::ATOM);
    }

    /**
     * @return float
     */
    public function getArticleRegistrationNumber()
    {
      return $this->ArticleRegistrationNumber;
    }

    /**
     * @param float $ArticleRegistrationNumber
     * @return \JustDevs\BIGRegister\ArticleRegistrationExtApp
     */
    public function setArticleRegistrationNumber($ArticleRegistrationNumber)
    {
      $this->ArticleRegistrationNumber = $ArticleRegistrationNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArticleRegistrationStartDate()
    {
      if ($this->ArticleRegistrationStartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ArticleRegistrationStartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ArticleRegistrationStartDate
     * @return \JustDevs\BIGRegister\ArticleRegistrationExtApp
     */
    public function setArticleRegistrationStartDate(\DateTime $ArticleRegistrationStartDate)
    {
      $this->ArticleRegistrationStartDate = $ArticleRegistrationStartDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArticleRegistrationEndDate()
    {
      if ($this->ArticleRegistrationEndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ArticleRegistrationEndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ArticleRegistrationEndDate
     * @return \JustDevs\BIGRegister\ArticleRegistrationExtApp
     */
    public function setArticleRegistrationEndDate(\DateTime $ArticleRegistrationEndDate)
    {
      $this->ArticleRegistrationEndDate = $ArticleRegistrationEndDate->format(\DateTime::ATOM);
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
     * @return \JustDevs\BIGRegister\ArticleRegistrationExtApp
     */
    public function setProfessionalGroupCode($ProfessionalGroupCode)
    {
      $this->ProfessionalGroupCode = $ProfessionalGroupCode;
      return $this;
    }

}
