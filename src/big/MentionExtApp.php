<?php

namespace JustDevs\BIGRegister;

class MentionExtApp
{

    /**
     * @var float $MentionId
     */
    protected $MentionId = null;

    /**
     * @var float $ArticleRegistrationNumber
     */
    protected $ArticleRegistrationNumber = null;

    /**
     * @var float $TypeOfMentionId
     */
    protected $TypeOfMentionId = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @param float $MentionId
     * @param float $ArticleRegistrationNumber
     * @param float $TypeOfMentionId
     * @param \DateTime $StartDate
     */
    public function __construct($MentionId, $ArticleRegistrationNumber, $TypeOfMentionId, \DateTime $StartDate)
    {
      $this->MentionId = $MentionId;
      $this->ArticleRegistrationNumber = $ArticleRegistrationNumber;
      $this->TypeOfMentionId = $TypeOfMentionId;
      $this->StartDate = $StartDate->format(\DateTime::ATOM);
    }

    /**
     * @return float
     */
    public function getMentionId()
    {
      return $this->MentionId;
    }

    /**
     * @param float $MentionId
     * @return \JustDevs\BIGRegister\MentionExtApp
     */
    public function setMentionId($MentionId)
    {
      $this->MentionId = $MentionId;
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
     * @return \JustDevs\BIGRegister\MentionExtApp
     */
    public function setArticleRegistrationNumber($ArticleRegistrationNumber)
    {
      $this->ArticleRegistrationNumber = $ArticleRegistrationNumber;
      return $this;
    }

    /**
     * @return float
     */
    public function getTypeOfMentionId()
    {
      return $this->TypeOfMentionId;
    }

    /**
     * @param float $TypeOfMentionId
     * @return \JustDevs\BIGRegister\MentionExtApp
     */
    public function setTypeOfMentionId($TypeOfMentionId)
    {
      $this->TypeOfMentionId = $TypeOfMentionId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDate
     * @return \JustDevs\BIGRegister\MentionExtApp
     */
    public function setStartDate(\DateTime $StartDate)
    {
      $this->StartDate = $StartDate->format(\DateTime::ATOM);
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
     * @return \JustDevs\BIGRegister\MentionExtApp
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

}
