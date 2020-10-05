<?php

namespace JustDevs\BigRegister;

use DateTime;

include('big/autoload.php');

class BigSearch
{
    protected $registrationNumber;

    /**
     * BigSearch constructor.
     * @param String $registrationNumber
     */
    public function __construct($registrationNumber)
    {
        $this->registrationNumber = $registrationNumber;
    }

    public function findRegistration(): bool
    {
        $endDate = new DateTime();

        $client = new \JustDevs\BIGRegister\PublicV4();
        $request = new \JustDevs\BIGRegister\ListHcpApproxRequest(SourceWebSite::Ribiz);

        $request->setRegistrationNumber($this->registrationNumber);

        $response = $client->ListHcpApprox4($request)->getListHcpApprox();
        if ($response && $response->getListHcpApprox4()) {
            $first = $response[0];
            $registrations = $first->getArticleRegistration();
            if ($registrations && $registrations->getArticleRegistrationExtApp()) {
                $endDate = $registrations[0]->getArticleRegistrationEndDate();
            }
        }

        // Since the real endDates of registration are not public, check if the endDate is equal to the following.
        $dateTime = new DateTime("0001-01-01 00:00:00.000000");
        return $endDate == $dateTime;
    }
}