<?php

namespace JustDevs\BIGRegister\Client;

class PublicV4 extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ListHcpApproxRequest' => 'JustDevs\\BIGRegister\\Client\\ListHcpApproxRequest',
      'ListHcpApproxResponse4' => 'JustDevs\\BIGRegister\\Client\\ListHcpApproxResponse4',
      'ArrayOfListHcpApprox4' => 'JustDevs\\BIGRegister\\Client\\ArrayOfListHcpApprox4',
      'ListHcpApprox4' => 'JustDevs\\BIGRegister\\Client\\ListHcpApprox4',
      'Address' => 'JustDevs\\BIGRegister\\Client\\Address',
      'ArrayOfArticleRegistrationExtApp' => 'JustDevs\\BIGRegister\\Client\\ArrayOfArticleRegistrationExtApp',
      'ArticleRegistrationExtApp' => 'JustDevs\\BIGRegister\\Client\\ArticleRegistrationExtApp',
      'ArrayOfSpecialismExtApp1' => 'JustDevs\\BIGRegister\\Client\\ArrayOfSpecialismExtApp1',
      'SpecialismExtApp1' => 'JustDevs\\BIGRegister\\Client\\SpecialismExtApp1',
      'ArrayOfMentionExtApp' => 'JustDevs\\BIGRegister\\Client\\ArrayOfMentionExtApp',
      'MentionExtApp' => 'JustDevs\\BIGRegister\\Client\\MentionExtApp',
      'ArrayOfJudgmentProvisionExtApp' => 'JustDevs\\BIGRegister\\Client\\ArrayOfJudgmentProvisionExtApp',
      'JudgmentProvisionExtApp' => 'JustDevs\\BIGRegister\\Client\\JudgmentProvisionExtApp',
      'ArrayOfLimitationExtApp' => 'JustDevs\\BIGRegister\\Client\\ArrayOfLimitationExtApp',
      'LimitationExtApp' => 'JustDevs\\BIGRegister\\Client\\LimitationExtApp',
      'GetRibizReferenceData' => 'JustDevs\\BIGRegister\\Client\\GetRibizReferenceData',
      'GetRibizReferenceDataRequest' => 'JustDevs\\BIGRegister\\Client\\GetRibizReferenceDataRequest',
      'GetRibizReferenceDataResponse' => 'JustDevs\\BIGRegister\\Client\\GetRibizReferenceDataResponse',
      'ArrayOfProfessionalGroup' => 'JustDevs\\BIGRegister\\Client\\ArrayOfProfessionalGroup',
      'ProfessionalGroup' => 'JustDevs\\BIGRegister\\Client\\ProfessionalGroup',
      'ArrayOfTypeOfSpecialism' => 'JustDevs\\BIGRegister\\Client\\ArrayOfTypeOfSpecialism',
      'TypeOfSpecialism' => 'JustDevs\\BIGRegister\\Client\\TypeOfSpecialism',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://api.bigregister.nl/zksrv/soap/4?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Search for health care professionals based on approx match
     *
     * @param ListHcpApproxRequest $listHcpApproxRequest
     * @return ListHcpApproxResponse4
     */
    public function ListHcpApprox4(ListHcpApproxRequest $listHcpApproxRequest)
    {
      return $this->__soapCall('ListHcpApprox4', array($listHcpApproxRequest));
    }

    /**
     * Returns the RIBIZ reference data
     *
     * @param GetRibizReferenceData $parameters
     * @return GetRibizReferenceDataResponse
     */
    public function GetRibizReferenceData(GetRibizReferenceData $parameters)
    {
      return $this->__soapCall('GetRibizReferenceData', array($parameters));
    }

}
