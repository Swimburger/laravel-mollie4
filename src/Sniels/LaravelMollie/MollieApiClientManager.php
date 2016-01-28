<?php namespace Sniels\LaravelMollie;

//original code by bertvanhoekelen
//https://github.com/EBOOST/laravel-mollie

use Config;
use Mollie_API_Client;

class MollieApiClientManager
{
    /**
     * @return \Mollie_API_Client
     * @throws \Mollie_API_Exception
     */
    public function client()
    {
        $mollie = new Mollie_API_Client;
        $keys = Config::get('laravel-mollie::apiKeys');
        if (Config::get('laravel-mollie::testMode')) {
            $mollie->setApiKey($keys['test']);
        } else {
            $mollie->setApiKey($keys['live']);
        }
        return $mollie;
    }

    /**
     * @return \Mollie_API_Resource_Payments
     */
    public function getPayments()
    {
        return $this->client()->payments;
    }

    /**
     * @return \Mollie_API_Resource_Payments_Refunds
     */
    public function getPaymentRefunds()
    {
        return $this->client()->payments_refunds;
    }

    /**
     * @return \Mollie_API_Resource_Issuers
     */
    public function getIssuers()
    {
        return $this->client()->issuers;
    }

    /**
     * @return \Mollie_API_Resource_Methods
     */
    public function getMethods()
    {
        return $this->client()->methods;
    }
}