<?php

namespace JustDevs\BIGRegister;

use DateTime;
use JustDevs\BIGRegister\Client\ListHcpApproxRequest;
use JustDevs\BIGRegister\Client\PublicV4;
use JustDevs\BIGRegister\Client\SourceWebSite;

class BigSearch
{
    protected string $registrationNumber;

    protected PublicV4 $client;


    /**
     * BigSearch constructor.
     * @param String $registrationNumber
     */
    public function __construct($registrationNumber)
    {
        $this->registrationNumber = $registrationNumber;
        $this->client = new PublicV4();
    }

    /**
     * Check if all registrations for the first found BIG-match are still valid.
     *
     * @return bool
     */
    public function allRegistrationsActive(): bool
    {
        $dateTime = new DateTime("0001-01-01 00:00:00.000000");

        $request = new ListHcpApproxRequest(SourceWebSite::Ribiz);
        $request->setRegistrationNumber($this->registrationNumber);

        $response = $this->client->ListHcpApprox4($request)->getListHcpApprox();
        if ($response && $response->getListHcpApprox4()) {
            $first = $response[0];
            $registrations = $first->getArticleRegistration();
            if ($registrations && $registrations->getArticleRegistrationExtApp()) {
                // Filter out registrations with invalid endDates
                $filteredRegistrations = array_filter($registrations->getArticleRegistrationExtApp(), static function ($registration) use ($dateTime) {
                    $endDate = $registration->getArticleRegistrationEndDate();
                    return $endDate == $dateTime;
                });
                // All registrations are still there after filtering?
                return count($filteredRegistrations) === count($registrations);
            }
        }
        return false;
    }
}