<?php


 function autoload_6dea72ff44fcc77ca3c71b62fbad27a8($class)
{
    $classes = array(
        'JustDevs\BIGRegister\PublicV4' => __DIR__ .'/PublicV4.php',
        'JustDevs\BIGRegister\ListHcpApproxRequest' => __DIR__ .'/ListHcpApproxRequest.php',
        'JustDevs\BIGRegister\SourceWebSite' => __DIR__ .'/SourceWebSite.php',
        'JustDevs\BIGRegister\ListHcpApproxResponse4' => __DIR__ .'/ListHcpApproxResponse4.php',
        'JustDevs\BIGRegister\ArrayOfListHcpApprox4' => __DIR__ .'/ArrayOfListHcpApprox4.php',
        'JustDevs\BIGRegister\ListHcpApprox4' => __DIR__ .'/ListHcpApprox4.php',
        'JustDevs\BIGRegister\Address' => __DIR__ .'/Address.php',
        'JustDevs\BIGRegister\ArrayOfArticleRegistrationExtApp' => __DIR__ .'/ArrayOfArticleRegistrationExtApp.php',
        'JustDevs\BIGRegister\ArticleRegistrationExtApp' => __DIR__ .'/ArticleRegistrationExtApp.php',
        'JustDevs\BIGRegister\ArrayOfSpecialismExtApp1' => __DIR__ .'/ArrayOfSpecialismExtApp1.php',
        'JustDevs\BIGRegister\SpecialismExtApp1' => __DIR__ .'/SpecialismExtApp1.php',
        'JustDevs\BIGRegister\ArrayOfMentionExtApp' => __DIR__ .'/ArrayOfMentionExtApp.php',
        'JustDevs\BIGRegister\MentionExtApp' => __DIR__ .'/MentionExtApp.php',
        'JustDevs\BIGRegister\ArrayOfJudgmentProvisionExtApp' => __DIR__ .'/ArrayOfJudgmentProvisionExtApp.php',
        'JustDevs\BIGRegister\JudgmentProvisionExtApp' => __DIR__ .'/JudgmentProvisionExtApp.php',
        'JustDevs\BIGRegister\ArrayOfLimitationExtApp' => __DIR__ .'/ArrayOfLimitationExtApp.php',
        'JustDevs\BIGRegister\LimitationExtApp' => __DIR__ .'/LimitationExtApp.php',
        'JustDevs\BIGRegister\GetRibizReferenceData' => __DIR__ .'/GetRibizReferenceData.php',
        'JustDevs\BIGRegister\GetRibizReferenceDataRequest' => __DIR__ .'/GetRibizReferenceDataRequest.php',
        'JustDevs\BIGRegister\GetRibizReferenceDataResponse' => __DIR__ .'/GetRibizReferenceDataResponse.php',
        'JustDevs\BIGRegister\ArrayOfProfessionalGroup' => __DIR__ .'/ArrayOfProfessionalGroup.php',
        'JustDevs\BIGRegister\ProfessionalGroup' => __DIR__ .'/ProfessionalGroup.php',
        'JustDevs\BIGRegister\ArrayOfTypeOfSpecialism' => __DIR__ .'/ArrayOfTypeOfSpecialism.php',
        'JustDevs\BIGRegister\TypeOfSpecialism' => __DIR__ .'/TypeOfSpecialism.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_6dea72ff44fcc77ca3c71b62fbad27a8');

// Do nothing. The rest is just leftovers from the code generation.
{
}
