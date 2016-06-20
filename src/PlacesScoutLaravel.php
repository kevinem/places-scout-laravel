<?php


namespace KevinEm\PlacesScoutLaravel;


use KevinEm\PlacesScoutPHP\PlacesScout;

class PlacesScoutLaravel
{
    /**
     * @var PlacesScout
     */
    public $placesScout;

    /**
     * PlacesScoutLaravel constructor.
     * @param array $options
     */
    public function __construct(array $options)
    {
        $this->placesScout = new PlacesScout($options);
    }

    /**
     * @return \KevinEm\PlacesScoutPHP\PlacesScoutBilling
     */
    public function billing()
    {
        return new \KevinEm\PlacesScoutPHP\PlacesScoutBilling($this->placesScout);
    }

    /**
     * @return \KevinEm\PlacesScoutPHP\PlacesScoutCitationReports
     */
    public function citationReports()
    {
        return new \KevinEm\PlacesScoutPHP\PlacesScoutCitationReports($this->placesScout);
    }

    /**
     * @return \KevinEm\PlacesScoutPHP\PlacesScoutClientLocations
     */
    public function clientLocations()
    {
        return new \KevinEm\PlacesScoutPHP\PlacesScoutClientLocations($this->placesScout);
    }

    /**
     * @return \KevinEm\PlacesScoutPHP\PlacesScoutClients
     */
    public function clients()
    {
        return new \KevinEm\PlacesScoutPHP\PlacesScoutClients($this->placesScout);
    }

    /**
     * @return \KevinEm\PlacesScoutPHP\PlacesScoutLeadGenReports
     */
    public function leadGenReports()
    {
        return new \KevinEm\PlacesScoutPHP\PlacesScoutLeadGenReports($this->placesScout);
    }

    /**
     * @return \KevinEm\PlacesScoutPHP\PlacesScoutListingReports
     */
    public function listingReports()
    {
        return new \KevinEm\PlacesScoutPHP\PlacesScoutListingReports($this->placesScout);
    }

    /**
     * @return \KevinEm\PlacesScoutPHP\PlacesScoutNotifications
     */
    public function notifications()
    {
        return new \KevinEm\PlacesScoutPHP\PlacesScoutNotifications($this->placesScout);
    }

    /**
     * @return \KevinEm\PlacesScoutPHP\PlacesScoutRankingReports
     */
    public function rankingReports()
    {
        return new \KevinEm\PlacesScoutPHP\PlacesScoutRankingReports($this->placesScout);
    }

    /**
     * @return \KevinEm\PlacesScoutPHP\PlacesScoutReputationReports
     */
    public function reputationReports()
    {
        return new \KevinEm\PlacesScoutPHP\PlacesScoutReputationReports($this->placesScout);
    }

    /**
     * @return \KevinEm\PlacesScoutPHP\PlacesScoutStatus
     */
    public function status()
    {
        return new \KevinEm\PlacesScoutPHP\PlacesScoutStatus($this->placesScout);
    }
}