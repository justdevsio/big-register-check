<?php

namespace JustDevs\BIGRegister;

class ListHcpApprox4
{

    /**
     * @var string $BirthSurname
     */
    protected $BirthSurname = null;

    /**
     * @var string $MailingName
     */
    protected $MailingName = null;

    /**
     * @var string $Prefix
     */
    protected $Prefix = null;

    /**
     * @var string $Initial
     */
    protected $Initial = null;

    /**
     * @var string $Gender
     */
    protected $Gender = null;

    /**
     * @var Address $WorkAddress1
     */
    protected $WorkAddress1 = null;

    /**
     * @var Address $WorkAddress2
     */
    protected $WorkAddress2 = null;

    /**
     * @var Address $WorkAddress3
     */
    protected $WorkAddress3 = null;

    /**
     * @var ArrayOfArticleRegistrationExtApp $ArticleRegistration
     */
    protected $ArticleRegistration = null;

    /**
     * @var ArrayOfSpecialismExtApp1 $Specialism
     */
    protected $Specialism = null;

    /**
     * @var ArrayOfMentionExtApp $Mention
     */
    protected $Mention = null;

    /**
     * @var ArrayOfJudgmentProvisionExtApp $JudgmentProvision
     */
    protected $JudgmentProvision = null;

    /**
     * @var ArrayOfLimitationExtApp $Limitation
     */
    protected $Limitation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBirthSurname()
    {
      return $this->BirthSurname;
    }

    /**
     * @param string $BirthSurname
     * @return \JustDevs\BIGRegister\ListHcpApprox4
     */
    public function setBirthSurname($BirthSurname)
    {
      $this->BirthSurname = $BirthSurname;
      return $this;
    }

    /**
     * @return string
     */
    public function getMailingName()
    {
      return $this->MailingName;
    }

    /**
     * @param string $MailingName
     * @return \JustDevs\BIGRegister\ListHcpApprox4
     */
    public function setMailingName($MailingName)
    {
      $this->MailingName = $MailingName;
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
     * @return \JustDevs\BIGRegister\ListHcpApprox4
     */
    public function setPrefix($Prefix)
    {
      $this->Prefix = $Prefix;
      return $this;
    }

    /**
     * @return string
     */
    public function getInitial()
    {
      return $this->Initial;
    }

    /**
     * @param string $Initial
     * @return \JustDevs\BIGRegister\ListHcpApprox4
     */
    public function setInitial($Initial)
    {
      $this->Initial = $Initial;
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
     * @return \JustDevs\BIGRegister\ListHcpApprox4
     */
    public function setGender($Gender)
    {
      $this->Gender = $Gender;
      return $this;
    }

    /**
     * @return Address
     */
    public function getWorkAddress1()
    {
      return $this->WorkAddress1;
    }

    /**
     * @param Address $WorkAddress1
     * @return \JustDevs\BIGRegister\ListHcpApprox4
     */
    public function setWorkAddress1($WorkAddress1)
    {
      $this->WorkAddress1 = $WorkAddress1;
      return $this;
    }

    /**
     * @return Address
     */
    public function getWorkAddress2()
    {
      return $this->WorkAddress2;
    }

    /**
     * @param Address $WorkAddress2
     * @return \JustDevs\BIGRegister\ListHcpApprox4
     */
    public function setWorkAddress2($WorkAddress2)
    {
      $this->WorkAddress2 = $WorkAddress2;
      return $this;
    }

    /**
     * @return Address
     */
    public function getWorkAddress3()
    {
      return $this->WorkAddress3;
    }

    /**
     * @param Address $WorkAddress3
     * @return \JustDevs\BIGRegister\ListHcpApprox4
     */
    public function setWorkAddress3($WorkAddress3)
    {
      $this->WorkAddress3 = $WorkAddress3;
      return $this;
    }

    /**
     * @return ArrayOfArticleRegistrationExtApp
     */
    public function getArticleRegistration()
    {
      return $this->ArticleRegistration;
    }

    /**
     * @param ArrayOfArticleRegistrationExtApp $ArticleRegistration
     * @return \JustDevs\BIGRegister\ListHcpApprox4
     */
    public function setArticleRegistration($ArticleRegistration)
    {
      $this->ArticleRegistration = $ArticleRegistration;
      return $this;
    }

    /**
     * @return ArrayOfSpecialismExtApp1
     */
    public function getSpecialism()
    {
      return $this->Specialism;
    }

    /**
     * @param ArrayOfSpecialismExtApp1 $Specialism
     * @return \JustDevs\BIGRegister\ListHcpApprox4
     */
    public function setSpecialism($Specialism)
    {
      $this->Specialism = $Specialism;
      return $this;
    }

    /**
     * @return ArrayOfMentionExtApp
     */
    public function getMention()
    {
      return $this->Mention;
    }

    /**
     * @param ArrayOfMentionExtApp $Mention
     * @return \JustDevs\BIGRegister\ListHcpApprox4
     */
    public function setMention($Mention)
    {
      $this->Mention = $Mention;
      return $this;
    }

    /**
     * @return ArrayOfJudgmentProvisionExtApp
     */
    public function getJudgmentProvision()
    {
      return $this->JudgmentProvision;
    }

    /**
     * @param ArrayOfJudgmentProvisionExtApp $JudgmentProvision
     * @return \JustDevs\BIGRegister\ListHcpApprox4
     */
    public function setJudgmentProvision($JudgmentProvision)
    {
      $this->JudgmentProvision = $JudgmentProvision;
      return $this;
    }

    /**
     * @return ArrayOfLimitationExtApp
     */
    public function getLimitation()
    {
      return $this->Limitation;
    }

    /**
     * @param ArrayOfLimitationExtApp $Limitation
     * @return \JustDevs\BIGRegister\ListHcpApprox4
     */
    public function setLimitation($Limitation)
    {
      $this->Limitation = $Limitation;
      return $this;
    }

}
