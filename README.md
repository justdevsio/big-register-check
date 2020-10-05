# BIG Regstration search PHP library

Simple API to check BIG registration for a given registration number.

## Introduction 

The Dutch government has a SOAP-API available to search/check information in the BIG-register. 
This PHP library is an easy way to if a given registration number has a valid registration. 
This way you know that the person linked to the unique registration number is allowed to practice medicine in 
the Netherlands. 

## Installation
Just include the library in your code.
```bash
composer require justdevs/big-register-check
```

## Usage
Check for a specific number
```php
$number = "1234";
$search = new \JustDevs\BIGRegister\BigSearch($number);
$active = $search->allRegistrationsActive();
```