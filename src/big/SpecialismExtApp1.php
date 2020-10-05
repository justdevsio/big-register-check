<?php

namespace JustDevs\BIGRegister;

class SpecialismExtApp1
{

    /**
     * @var float $SpecialismId
     */
    protected $SpecialismId = null;

    /**
     * @var float $ArticleRegistrationNumber
     */
    protected $ArticleRegistrationNumber = null;

    /**
     * @var float $TypeOfSpecialismId
     */
    protected $TypeOfSpecialismId = null;

    /**
     * @param float $SpecialismId
     * @param float $ArticleRegistrationNumber
     * @param float $TypeOfSpecialismId
     */
    public function __construct($SpecialismId, $ArticleRegistrationNumber, $TypeOfSpecialismId)
    {
      $this->SpecialismId = $SpecialismId;
      $this->ArticleRegistrationNumber = $ArticleRegistrationNumber;
      $this->TypeOfSpecialismId = $TypeOfSpecialismId;
    }

    /**
     * @return float
     */
    public function getSpecialismId()
    {
      return $this->SpecialismId;
    }

    /**
     * @param float $SpecialismId
     * @return \JustDevs\BIGRegister\SpecialismExtApp1
     */
    public function setSpecialismId($SpecialismId)
    {
      $this->SpecialismId = $SpecialismId;
      return $this;
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
     * @return \JustDevs\BIGRegister\SpecialismExtApp1
     */
    public function setArticleRegistrationNumber($ArticleRegistrationNumber)
    {
      $this->ArticleRegistrationNumber = $ArticleRegistrationNumber;
      return $this;
    }

    /**
     * @return float
     */
    public function getTypeOfSpecialismId()
    {
      return $this->TypeOfSpecialismId;
    }

    /**
     * @param float $TypeOfSpecialismId
     * @return \JustDevs\BIGRegister\SpecialismExtApp1
     */
    public function setTypeOfSpecialismId($TypeOfSpecialismId)
    {
      $this->TypeOfSpecialismId = $TypeOfSpecialismId;
      return $this;
    }

}
