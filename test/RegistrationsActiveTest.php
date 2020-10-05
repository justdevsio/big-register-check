<?php

use PHPUnit\Framework\TestCase;

class RegistrationsActiveTest extends TestCase
{
    public function testAllRegistrationsActive(): void
    {
        $search = new \JustDevs\BIGRegister\BigSearch("59026986617");
        $this->assertEquals(
            true,
            $search->allRegistrationsActive()
        );
    }

    public function testSomeOrAllRegistrationsNotActive(): void
    {
        $search = new \JustDevs\BIGRegister\BigSearch("5902698661");
        $this->assertEquals(
            false,
            $search->allRegistrationsActive()
        );
    }
}