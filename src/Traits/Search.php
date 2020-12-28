<?php
namespace Dcblogdev\CompaniesHouse\Traits;

trait Search
{
    //Search
    public function search($term)
    {
        return self::guzzle('search?q='.$term);
    }

    public function searchCompany($term)
    {
        return self::guzzle('search/companies?q='.$term);
    }

    public function searchOfficer($term)
    {
        return self::guzzle('search/officers?q='.$term);
    }

    public function searchOfficerDisqualified($term)
    {
        return self::guzzle('search/disqualified-officers?q='.$term);
    }

    //Company
    public function getCompany($companyNumber)
    {
        return self::guzzle('company/'.$companyNumber);
    }

    public function getCompanyAddress($companyNumber)
    {
        return self::guzzle('company/'.$companyNumber.'/registered-office-address');
    }

    public function getCompanyOfficer($companyNumber)
    {
        return self::guzzle('company/'.$companyNumber.'/officers');
    }

    public function getCompanyFiling($companyNumber)
    {
        return self::guzzle('company/'.$companyNumber.'/filing-history');
    }

    public function getCompanyFilingItem($companyNumber, $transactionID)
    {
        return self::guzzle('company/'.$companyNumber.'/filing-history/'.$transactionID);
    }

    public function getCompanyInsolvency($companyNumber)
    {
        return self::guzzle('company/'.$companyNumber.'/insolvency');
    }

    public function getCompanyCharge($companyNumber)
    {
        return self::guzzle('company/'.$companyNumber.'/charges');
    }

    public function getCompanyChargeItem($companyNumber, $chargeId)
    {
        return self::guzzle('company/'.$companyNumber.'/charges/'.$chargeId);
    }

    public function getCompanyEstablishment($companyNumber)
    {
        return self::guzzle('company/'.$companyNumber.'/uk-establishments');
    }

    public function getCompanyRegister($companyNumber)
    {
        return self::guzzle('company/'.$companyNumber.'/registers');
    }

    public function getCompanyExemption($companyNumber)
    {
        return self::guzzle('company/'.$companyNumber.'/exemptions');
    }

    //Officers
    public function getOfficerAppointment($officerId)
    {
        return self::guzzle('officers/'.$officerId.'/appointments');
    }

    public function getOfficerDisqualification($officerId)
    {
        return self::guzzle('/disqualified-officers/natural/'.$officerId);
    }

    public function getOfficerDisqualificationCorp($officerId)
    {
        return self::guzzle('/disqualified-officers/corporate/'.$officerId);
    }
}