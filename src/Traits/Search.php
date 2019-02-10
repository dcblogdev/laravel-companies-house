<?php 
namespace Daveismyname\CompaniesHouse\Traits;

trait Search 
{
    public function search($term)
    {
        return self::guzzle('search?q='.$term);
    }

    public function searchCompany($term)
    {
        return self::guzzle('search/companies?q='.$term);
    }
}