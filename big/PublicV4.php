<?php

namespace JustDevs\BIGRegister;

class PublicV4 extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ListHcpApproxRequest' => 'JustDevs\\BIGRegister\\ListHcpApproxRequest',
      'ListHcpApproxResponse4' => 'JustDevs\\BIGRegister\\ListHcpApproxResponse4',
      'ArrayOfListHcpApprox4' => 'JustDevs\\BIGRegister\\ArrayOfListHcpApprox4',
      'ListHcpApprox4' => 'JustDevs\\BIGRegister\\ListHcpApprox4',
      'Address' => 'JustDevs\\BIGRegister\\Address',
      'ArrayOfArticleRegistrationExtApp' => 'JustDevs\\BIGRegister\\ArrayOfArticleRegistrationExtApp',
      'ArticleRegistrationExtApp' => 'JustDevs\\BIGRegister\\ArticleRegistrationExtApp',
      'ArrayOfSpecialismExtApp1' => 'JustDevs\\BIGRegister\\ArrayOfSpecialismExtApp1',
      'SpecialismExtApp1' => 'JustDevs\\BIGRegister\\SpecialismExtApp1',
      'ArrayOfMentionExtApp' => 'JustDevs\\BIGRegister\\ArrayOfMentionExtApp',
      'MentionExtApp' => 'JustDevs\\BIGRegister\\MentionExtApp',
      'ArrayOfJudgmentProvisionExtApp' => 'JustDevs\\BIGRegister\\ArrayOfJudgmentProvisionExtApp',
      'JudgmentProvisionExtApp' => 'JustDevs\\BIGRegister\\JudgmentProvisionExtApp',
      'ArrayOfLimitationExtApp' => 'JustDevs\\BIGRegister\\ArrayOfLimitationExtApp',
      'LimitationExtApp' => 'JustDevs\\BIGRegister\\LimitationExtApp',
      'GetRibizReferenceData' => 'JustDevs\\BIGRegister\\GetRibizReferenceData',
      'GetRibizReferenceDataRequest' => 'JustDevs\\BIGRegister\\GetRibizReferenceDataRequest',
      'GetRibizReferenceDataResponse' => 'JustDevs\\BIGRegister\\GetRibizReferenceDataResponse',
      'ArrayOfProfessionalGroup' => 'JustDevs\\BIGRegister\\ArrayOfProfessionalGroup',
      'ProfessionalGroup' => 'JustDevs\\BIGRegister\\ProfessionalGroup',
      'ArrayOfTypeOfSpecialism' => 'JustDevs\\BIGRegister\\ArrayOfTypeOfSpecialism',
      'TypeOfSpecialism' => 'JustDevs\\BIGRegister\\TypeOfSpecialism',
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
        $wsdl = 'https://webservices.cibg.nl/Ribiz/OpenbaarV4.asmx?wsdl';
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
