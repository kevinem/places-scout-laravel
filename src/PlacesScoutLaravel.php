<?php


namespace KevinEm\PlacesScoutLaravel;


use KevinEm\PlacesScoutPHP\PlacesScout;
use KevinEm\PlacesScoutPHP\PlacesScoutBilling;
use KevinEm\PlacesScoutPHP\PlacesScoutCitationReports;
use KevinEm\PlacesScoutPHP\PlacesScoutClientLocations;
use KevinEm\PlacesScoutPHP\PlacesScoutClients;
use KevinEm\PlacesScoutPHP\PlacesScoutLeadGenReports;
use KevinEm\PlacesScoutPHP\PlacesScoutListingReports;
use KevinEm\PlacesScoutPHP\PlacesScoutNotifications;
use KevinEm\PlacesScoutPHP\PlacesScoutRankingReports;
use KevinEm\PlacesScoutPHP\PlacesScoutReputationReports;
use KevinEm\PlacesScoutPHP\PlacesScoutStatus;

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
     * @return PlacesScoutBilling
     */
    public function billing()
    {
        return new PlacesScoutBilling($this->placesScout);
    }

    /**
     * @return PlacesScoutCitationReports
     */
    public function citationReports()
    {
        return new PlacesScoutCitationReports($this->placesScout);
    }

    /**
     * @return PlacesScoutClientLocations
     */
    public function clientLocations()
    {
        return new PlacesScoutClientLocations($this->placesScout);
    }

    /**
     * @return PlacesScoutClients
     */
    public function clients()
    {
        return new PlacesScoutClients($this->placesScout);
    }

    /**
     * @return PlacesScoutLeadGenReports
     */
    public function leadGenReports()
    {
        return new PlacesScoutLeadGenReports($this->placesScout);
    }

    /**
     * @return PlacesScoutListingReports
     */
    public function listingReports()
    {
        return new PlacesScoutListingReports($this->placesScout);
    }

    /**
     * @return PlacesScoutNotifications
     */
    public function notifications()
    {
        return new PlacesScoutNotifications($this->placesScout);
    }

    /**
     * @return PlacesScoutRankingReports
     */
    public function rankingReports()
    {
        return new PlacesScoutRankingReports($this->placesScout);
    }

    /**
     * @return PlacesScoutReputationReports
     */
    public function reputationReports()
    {
        return new PlacesScoutReputationReports($this->placesScout);
    }

    /**
     * @return PlacesScoutStatus
     */
    public function status()
    {
        return new PlacesScoutStatus($this->placesScout);
    }
}